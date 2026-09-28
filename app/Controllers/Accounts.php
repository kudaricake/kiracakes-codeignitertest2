<?php

namespace App\Controllers;

use App\Models\CustomerModel;
use App\Models\UserModel;

class Accounts extends BaseController
{
    public function customers(): string
    {
        $model = new CustomerModel();

        return view('accounts/customers', [
            'title' => 'Customer Accounts',
            'customers' => $model->findAll(),
        ]);
    }

    public function users(): string
    {
        $model = new UserModel();

        return view('accounts/users', [
            'title' => 'User Accounts',
            'users' => $model->findAll(),
        ]);
    }
}
