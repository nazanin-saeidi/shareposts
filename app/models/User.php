<?php
    class User {

        public $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function findUserByEmail($email) {
            $this->db->query('SELECT * FROM users WHERE email = :email');
            //Bind Values
            $this->db->bind(':email', $email);

            $row = $this->db->single();

            if($this->db->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        }

        public function register($data) {

            $this->db->query('INSERT INTO users (first_name, last_name, email, password) 
            VALUES (:first_name, :last_name, :email, :password)');
            
            //Bind Values
            $this->db->bind(':first_name', $data['first_name']);
            $this->db->bind(':last_name', $data['last_name']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':password', $data['password']);

            //Execute the query
            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
    }