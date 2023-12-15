<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Home extends BaseController
{
    public function index(): string
    {
        // helper('url');
        $userModel = new UserModel;
        $data['user'] = $userModel->getUsers();


        return view('datepicker/index', $data);
    }
}
