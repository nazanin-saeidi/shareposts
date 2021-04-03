<?php
    class Pages extends Controller {
        public function __construct() {
            $this->postModel = $this->model('Post');
        }

        public function index() {

            $posts = $this->postModel->getPosts();
            $title = 'SharePosts';
            $description = 'Simple social network built on the phpmvc PHP framework';
            $data = array(
                'posts' => $posts,
                'title' => $title,
                'description' => $description
            );

            $this->view('pages/index', $data);
        }

        public function about() {
            $data = [
                'title' => 'About Me!'
            ];

            $this->view('pages/about', $data);
        }

    }