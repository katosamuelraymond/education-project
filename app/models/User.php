<?php

class User extends Model
{
    public $errors = [];
    protected $table = "users";
    protected $allowedColumns = [
        'email',
        'firstname',
        'lastname',
        'password',
        'role',
        'date'
    ];

    public function validate($data)
    {
        $this->errors = [];
    
        // First name
        if (empty($data['firstname'])) {
            $this->errors['firstname'] = "First name is required";
        }
    
        // Last name
        if (empty($data['lastname'])) {
            $this->errors['lastname'] = "Last name is required";
        }
    
        // Email
        if (empty($data['email'])) {
            $this->errors['email'] = "Email is required";
        } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = "Email is not valid";
        } elseif ($this->where(['email' => $data['email']])) {
            $this->errors['email'] = "Email already exists";
        }
    
        // Password
        if (empty($data['password'])) {
            $this->errors['password'] = "Password is required";
        }
    
        // Retype Password
        if (empty($data['retype_password'])) {
            $this->errors['retype_password'] = "Please confirm your password";
        } elseif (!empty($data['password']) && $data['password'] !== $data['retype_password']) {
            $this->errors['retype_password'] = "Passwords do not match";
        }
    
        // Terms and conditions
        if (empty($data['terms'])) {
            $this->errors['terms'] = "Please accept the terms and conditions";
        }
    
        return empty($this->errors);
    }
    
}
