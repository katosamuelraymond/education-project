<?php
class Auth {
    public static function authenticate($row){
        if(is_object($row)){
        $_SESSION['user_data']=$row;


        }
    }

    public static function logged_in(){
        if(!empty($_SESSION['user_data'])){
            return true;
        }
        return false;

    }

    public static function isAdmin(){
        if(!empty($_SESSION['user_data'])){
            if($_SESSION['user_data']->role= "admin"){
                 return true;
            }
           
        }
        return false;

    }
    public static function logout(){
        if(!empty($_SESSION['user_data'])){
           unset($_SESSION['user_data']);
        }
    }
}