<?php

class Login extends Controller
{
    public function index() {


    // require_once __DIR__ . '/../models/User.php';
        //    show($_POST);
        $data['errors'] = [];
        $data['title'] ="login";
        $user = new User();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Validate the user while logging In
            show($_POST);
           
            
                $row =$user->first([
                     'email'=>$_POST['email'],
                     
                ]);

                if($row){

                    if (password_verify($_POST['password'], $row->password)) { 
                         Auth::authenticate($row);
    
                        // Redirect to the ourhome page
                        redirect('home');
                    }
                }
                   
                    // show($row);
                    // die;
                

                $data['errors']['email']= "wrong email or password";
            
            }
             $this->view('login', $data);
        }
        
       

    }
    
