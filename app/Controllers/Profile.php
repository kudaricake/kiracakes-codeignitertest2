<?php

namespace App\Controllers;

use App\Models\UserModel;

class Profile extends BaseController
{
    public function index(): string
    {
        $model = new UserModel();

        return view('profile/index', [
            'title' => 'Demo User Profile',
            'user' => $model->first(),
        ]);
    }
}
