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
        

        public function get_users(){
            $query = new Mongodb\Driver\Query([]); 
            $result = $this->conn->ExecuteQuery("$this->database.$this->collection",$query);//$result is returned as BSON objects 
            
            $users = [];//to store user details as PHP associative array

            foreach($result as $document){
                $user = (array)$document; //converting each BSON object to Array element
                $users []= $user;//appending to Main Array
            }
            return $users;
        }

        public function create_user($data){
            $query = new Mongodb\Driver\BulkWrite();
            $query->insert($data);
            $result = $this->conn->ExecuteBulkWrite("$this->database.$this->collection",$query);
        
            if ($result->getInsertedCount() === 1) {
                return true;
            } else {
                return false;
            }
        }
    }
