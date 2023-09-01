<?php
    class Users extends CI_Controller{

        function __construct(){
            parent::__construct();
        }

        public function index(){
            $this->load->view('header');
            $this->load->view('users');
            $this->load->view('footer');
        }

        public function Create(){
            die("Create");
        }

        public function Update(){
            Die("Update");
        }
        public function Delete(){
            die("Delete");
        }
    }