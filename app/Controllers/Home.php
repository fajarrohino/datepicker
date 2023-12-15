<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Home extends BaseController
{
    public function index(): string
    {
        $startDate = $this->request->getPost('start_date');
        $endDate = $this->request->getPost('end_date');

        if (!$startDate && !$endDate) {
            $startDate = '2023-12-08';
            $endDate = '2023-12-12';
        }

        $userModel = new UserModel;
        // $data['user'] = $userModel->getUsers();

        // $data['user'] = $userModel->getDate();
        $data['user'] = $userModel->getDate($startDate, $endDate);

        return view('datepicker/index', $data);
    }
}
