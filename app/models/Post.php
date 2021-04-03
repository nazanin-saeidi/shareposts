<?php
    // try to keep the Model Names' Singular
    class Post {
        private $dbh;

        public function __construct() {
            $this->db = new Database;
        }

        public function getPosts() {
            $this->db->query('SELECT * from posts');
            return $this->db->resultSet();
        }
    }