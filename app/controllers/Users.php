<?php
    class Users extends Controller {
        public function __construct() {

        }
        public function register() {
            //check if it's a POST request
            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                //Process the form

            } else {
                //Load the register form
                $data = [
                    'first_name' => '',
                    'last_name' => '',
                    'email' => '',
                    'password' => '',
                    'confirm_password' => '',
                    'first_name_error' => '',
                    'last_name_error' => '',
                    'email_error' => '',
                    'password_error' => '',
                    'confirm_password_error' => '',
                ];
                return $this->view('users/register');
            }
        }

        public function login() {
            //check if it's a POST request
            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                //Process the login

            } else {
                //Load the login form
                return $this->view('users/login');
            }
        }
    }