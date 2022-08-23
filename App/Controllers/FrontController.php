<?php

namespace App\Controllers;

//controle la partie Front
class FrontController extends Controller {
//public
    public function home()
    {
        return $this->view('home.home');
    }

    public function gallery()
    {
        $stmtGallery = $this->db->getPDO()->query('SELECT * FROM realization ORDER BY date DESC');
        $realization = $stmtGallery->fetchAll();
        return $this->view('gallery.gallery', compact('realization'));
    }

    public function galleryShow(int $id)
    {
        return $this->view('gallery.galleryShow', compact('id'));
    }

    public function job()
    {
        $stmtJobs = $this->db->getPDO()->query('SELECT * FROM jobs');
        $jobs = $stmtJobs->fetchAll();
        return $this->view('job.job', compact('jobs'));
    }

    public function jobShow(int $id)
    {
        return $this->view('job.jobShow', compact('id'));
    }

    public function contact()
    {
        return $this->view('contact.contact');
    }
//admin
    public function login()
    {
        return $this->view('admin.login.login');
    }

    public function admin()
    {
        return $this->view('admin.admin.admin');
    }
}