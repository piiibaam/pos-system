<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    public function index(): string
    {
        $userModel = new UserModel();

        $data['users'] = $userModel->findAll();

        return view('users', $data);
    }

    public function new(): string
    {
        return view('users_new');
    }

    public function create()
    {
        $rules = [
            'username'  => 'required|max_length[50]|is_unique[users.username]',
            'full_name' => 'required|max_length[100]',
        ];

        $errors = [
            'username' => [
                'required' => 'Username is required.',
                'is_unique' => 'Username is already taken.',
            ],
            'full_name' => [
                'required' => 'Full Name is required.',
            ],
        ];

        if (!$this->validate($rules, $errors)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $userModel = new UserModel();

        $userModel->insert([
            'username'  => $this->request->getPost('username'),
            'full_name' => $this->request->getPost('full_name'),
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->to('/users');
    }

    public function edit($id): string
    {
        $userModel = new UserModel();

        $data['user'] = $userModel->find($id);

        return view('users_edit', $data);
    }

    public function update($id)
    {
        $rules = [
            'username'  => 'required|max_length[50]',
            'full_name' => 'required|max_length[100]',
        ];

        $errors = [
            'username' => [
                'required' => 'Username is required.',
            ],
            'full_name' => [
                'required' => 'Full Name is required.',
            ],
        ];

        if (!$this->validate($rules, $errors)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $userModel = new UserModel();

        $username = $this->request->getPost('username');

        $existingUser = $userModel->where('username', $username)->first();

        if ($existingUser && $existingUser['id'] != $id) {
            return redirect()->back()
                ->withInput()
                ->with('errors', [
                    'Username is already taken.'
                ]);
        }

        $updateData = [
            'username'  => $username,
            'full_name' => $this->request->getPost('full_name'),
        ];

        $file = $this->request->getFile('avatar');

        if ($file && $file->getError() !== UPLOAD_ERR_NO_FILE) {

            if (!$file->isValid()) {
                return redirect()->back()
                    ->withInput()
                    ->with('errors', [
                        'Avatar upload failed.'
                    ]);
            }

            if (!in_array($file->getMimeType(), ['image/jpeg', 'image/png'])) {
                return redirect()->back()
                    ->withInput()
                    ->with('errors', [
                        'Avatar must be a JPG or PNG image.'
                    ]);
            }

            if ($file->getSize() > 2 * 1024 * 1024) {
                return redirect()->back()
                    ->withInput()
                    ->with('errors', [
                        'Avatar must not be larger than 2MB.'
                    ]);
            }

            $uploadPath = FCPATH . 'uploads/avatars';

            $newName = $file->getRandomName();

            $file->move($uploadPath, $newName);

            $imagePath = $uploadPath . DIRECTORY_SEPARATOR . $newName;

            service('image')
                ->withFile($imagePath)
                ->fit(300, 300)
                ->save($imagePath);

            $updateData['avatar'] = $newName;
        }

        $userModel->update($id, $updateData);

        return redirect()->to('/users');
    }
}