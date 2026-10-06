<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data['users'] = [
            [
                'username' => 'admin',
                'full_name' => 'Carl Michael Eugenio',
                'role' => 'Administrator',
            ],
            [
                'username' => 'cashier1',
                'full_name' => 'Gezil Ayala',
                'role' => 'Cashier',
            ],
            [
                'username' => 'staff1',
                'full_name' => 'Miel Kristine Crismundo',
                'role' => 'Staff',
            ],
            [
                'username' => 'manager1',
                'full_name' => 'Casley Nicole Pilueta',
                'role' => 'Manager',
            ],
            [
                'username' => 'staff2',
                'full_name' => 'Ma. Bernadette Santos',
                'role' => 'Staff',
            ],
        ];

        return view('users/index', $data);
    }
}