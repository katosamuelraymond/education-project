<?php

class Signup extends Controller
{
    public function index() {

        // show($_POST);
       
        $data['title'] ="signup";
        $this->view('signup', $data);
    }
    
}