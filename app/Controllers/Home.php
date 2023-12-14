<?php

namespace App\Controllers;

class Home extends BaseController
{
    //  public function __construct() {
    //     parent::__construct();
    //     // Load the URL helper
    //     $this->load->helper('url');
    // }
    public function index(): string
    {
        helper('url');
        return view('datepicker/index');
    }
}
