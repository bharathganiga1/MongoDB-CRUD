<?php 
    class User_Model extends CI_Model{

        private $conn;
        private $database = 'CRUD';
        private $collection = 'users';
        
        function __construct(){
            parent::__construct();
            $this->load->library('mongodb');
            $this->conn = $this->mongodb->get_connection();
        }
        

    }