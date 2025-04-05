<?php

class Signup extends Controller
{
    
 
    public function index()
    {
        $data['errors'] = [];

        // $db= new Database ();
        // $db->create_tables();
        $user = new User();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Validate the form data
			 show($_POST);
            if ($user->validate($_POST)) {
                // Hash the password 
                $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
				
			$_POST['date'] = date("Y-m-d H:i:s");
			$_POST['role'] = "user";

                // Remove the retype_password field before saving
                unset($_POST['retype_password']);

                // Save the user to the database
                $user->insert($_POST);

                redirect("login");
            
            } else {
                
				show($user->errors);
                $data['errors'] = $user->errors;
            }
        }
		$data['title'] ="signup";
        $this->view('signup', $data);
    }
    
}











