<?php

class Home extends Controller
{
    public function index() {

        $db = new Database();
        $db->query("select * from users");


        $data['title'] ="home";
        $this->view('home', $data);
    }
    
}