<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index(): string
    {
        $data['users'] = [
            [
                'username'  => 'admin01',
                'full_name' => 'Angela Pizarra',
                'role'      => 'Administrator',
            ],
            [
                'username'  => 'cashier01',
                'full_name' => 'Juan Dela Cruz',
                'role'      => 'Cashier',
            ],
            [
                'username'  => 'cashier02',
                'full_name' => 'Maria Santos',
                'role'      => 'Cashier',
            ],
            [
                'username'  => 'cashier03',
                'full_name' => 'Pedro Reyes',
                'role'      => 'Cashier',
            ],
            [
                'username'  => 'cashier04',
                'full_name' => 'Ana Garcia',
                'role'      => 'Cashier',
            ],
        ];

        return view('users', $data);
    }
}