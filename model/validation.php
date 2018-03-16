<?php
/*
    *This file is to validate forms
    *
    *@version php 7
    *
    *@author Liz Mahoney <emahoney5@mail.greenriver.edu>
    *
    *@access public
    *
    */
    
    /*
     *This method verifys the users input with the login.
     *
     *@return $errors an array of errors if true, otherwise false
     */
    function validateLogin()
    {
        $errors = array();

        if ($_SERVER['REQUEST_METHOD']) {
            
            if (!isset($_POST['email']) || strlen($_POST['email']) > 50
                || !isset($_POST['password']) || strlen($_POST['password']) > 50
                || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $errors['email/password'] = 'Email/Password is invalid';
            }

        } else {
            $errors[] = "Must enter in fields";
        }
        return $errors;
    }
    
    function invalidPassword()
    {
        $errors['password'] = 'Invalid Password';
        
        return $errors;
    }
    
    function invalidEmail()
    {
        $errors['email'] = 'Invalid Email';
        
        return $errors;
    }
    

    function validateRegistration()
    {
        $errors = array();

        if ($_SERVER['REQUEST_METHOD']) {
            
            if (!isset($_POST['first']) || strlen($_POST['first']) > 50) {
                $errors['first'] = 'Please enter a first name of 50 characters or less';
            }
            if (!isset($_POST['last']) || strlen($_POST['last']) > 50) {
                $errors['last'] = 'Please enter a last name of 50 characters or less';
            }
            if (isset($_POST['email']) || filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {
                
                $data = new DataLayer();
                
                if($data->checkEmail($_POST['email']) === false){
                    $errors['email'] = 'Email already in use!';
                }
            } else {
                $errors['email'] = 'Please enter a valid email';
            }
            
            if (isset($_POST['password'] )) {
                if(strlen($_POST['password']) < 6 ){
                    $errors['password'] = 'Password must be 6 characters or more';
                }
                if(strlen($_POST['password']) > 25){
                    $errors['password'] = 'Password must be 25 characters or less';
                }
            }else{
                  $errors['password'] = 'Please enter a password';
            }
        } else {
            $errors[] = "Must enter all fields";
        }
            
        return $errors;
        
    }
    





?>