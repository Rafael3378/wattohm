<?php

namespace App\Controllers;

use Database\DBConnection;
//controle la partie Front
class FrontController extends Controller {
//public
    public function index()
    {
        return $this->view('home.index');
    }

    public function gallery()
    {
        return $this->view('gallery.gallery');
    }

    public function job()
    {
        return $this->view('job.job');
    }

    public function contact()
    {
        return $this->view('contact.contact');
    }
//admin
    public function login()
    {
        $db = new DBConnection('wattohm', 'localhost', 'root', '');
        //var_dump($db->getPDO());
        return $this->view('admin.login.login');
    }
}