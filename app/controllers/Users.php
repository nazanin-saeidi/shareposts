<?php
    class Users extends Controller {
        public function __construct() {

        }
        public function register() {
            //check if it's a POST request
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                //Process the form
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                
                $data = [
                    'first_name' => trim($_POST['first_name']),
                    'last_name' => trim($_POST['last_name']),
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password']),
                    'confirm_password' => trim($_POST['confirm_password']),
                    'first_name_error' => '',
                    'last_name_error' => '',
                    'email_error' => '',
                    'password_error' => '',
                    'confirm_password_error' => '',
                ];

                //Validate first name
                if(empty($data['first_name'])) {
                    $data['first_name_error'] = 'Please enter first name!';
                }

                //Validate last name
                if(empty($data['last_name'])) {
                    $data['last_name_error'] = 'Please enter last name!';
                }

                //Validate email
                if(empty($data['email'])) {
                    $data['email_error'] = 'Please enter email!';
                }

                //Validate password
                if(empty($data['password'])) {
                    $data['password_error'] = 'Please enter password!';
                } elseif (strlen($data['password']) < 6) {
                    $data['password_error'] = 'Password must be at least 6 characters!';
                }

                //Validate confirm password
                if(empty($data['confirm_password'])) {
                    $data['confirm_password_error'] = 'Please confirm the password!';
                } else {
                    if($data['password'] != $data['confirm_password']) {
                        $data['confirm_password_error'] = 'Passwords do not match!';
                    }
                }

                
                if(empty($data['first_name_error']) && empty($data['last_name_error']) && 
                empty($data['email_error']) && empty($data['password_error']) && empty($data['confirm_password_error'])) {
                    die('SUCCESS');
                } else {
                    $this->view('users/register', $data);
                }

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
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                //Process the login
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                
                $data = [
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password']),
                    'email_error' => '',
                    'password_error' => ''
                ];

                //Validate email
                if(empty($data['email'])) {
                    $data['email_error'] = 'Please enter email!';
                }

                //Validate email
                if(empty($data['password'])) {
                    $data['password_error'] = 'Please enter password!';
                }

                if(empty($data['email_error']) && empty($data['password_error'])) {
                    die('SUCCESS');
                } else {
                    $this->view('users/login', $data);
                }

            } else {
                //Load the login form
                $data = [
                    'email' => '',
                    'password' => '',
                    'email_error' => '',
                    'password_error' => ''
                ];
                return $this->view('users/login');
            }
        }
    }