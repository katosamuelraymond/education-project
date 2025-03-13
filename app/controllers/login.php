<?php

class Login extends Controller
{
    public function index() {

       show($_POST);
        $data['title'] ="login";
        $this->view('login', $data);
    }
    
}