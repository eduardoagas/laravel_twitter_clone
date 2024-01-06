<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $users = [
            [
                'name' => 'Alex',
                'age' => 30,
            ],
            [
                'name' => 'Dan',
                'age' => 25,
            ],
            [
                'name' => 'Jon',
                'age' => 17,
            ]
        ];
        return view('dashboard',
        [
            'users' => $users,
        ]
        );
    }
}
