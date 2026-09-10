<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Customers extends BaseController
{
    public function index(): string
    {
        $data['customers'] = [
            [
                'full_name' => 'Juan Dela Cruz',
                'email'     => 'juan@example.com',
                'phone'     => '0912-345-6789',
            ],
            [
                'full_name' => 'Maria Santos',
                'email'     => 'maria@example.com',
                'phone'     => '0917-123-4567',
            ],
            [
                'full_name' => 'Pedro Reyes',
                'email'     => 'pedro@example.com',
                'phone'     => '0920-456-7890',
            ],
            [
                'full_name' => 'Ana Garcia',
                'email'     => 'ana@example.com',
                'phone'     => '0935-678-9012',
            ],
            [
                'full_name' => 'Mark Cruz',
                'email'     => 'mark@example.com',
                'phone'     => '0945-789-0123',
            ],
        ];

        return view('customers', $data);
    }
}