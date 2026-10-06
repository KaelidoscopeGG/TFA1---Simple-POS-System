<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $data['customers'] = [
            [
                'full_name' => 'Coey Ballesteros',
                'email' => 'hey_coey@gmail.com',
                'phone' => '09171234567',
            ],
            [
                'full_name' => 'Jim Mase',
                'email' => 'hey_jim@gmail.com',
                'phone' => '09179876543',
            ],
            [
                'full_name' => 'Aci Fodra',
                'email' => 'hey_aci@gmail.com',
                'phone' => '09171112222',
            ],
            [
                'full_name' => 'Dana Paulene',
                'email' => 'itsdanapaulene@hotmail.com',
                'phone' => '09173334444',
            ],
            [
                'full_name' => 'Malcolm Hobert',
                'email' => 'i_am_malcolm_todd@yahoo.com',
                'phone' => '09175556666',
            ],
        ];

        return view('customers/index', $data);
    }
}