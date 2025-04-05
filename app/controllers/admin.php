<?php

class Admin extends Controller
{
    public function index() {

       
        $data['title'] ="admin";
        $this->view('admin/dashboard', $data);
    }



    public function faqs() {

       
        $data['title'] ="faqs";
        $this->view('admin/faqs', $data);
    }

    public function profile() {

       
        $data['title'] ="profile";
        $this->view('admin/profile', $data);
    }

    public function contact() {

       
        $data['title'] ="Contact";
        $this->view('admin/contact', $data);
    }
    
}
    
