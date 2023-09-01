<?php 
    class Mongodb{
        private $conn;

        function __construct(){
            $this->ci =& get_instance();

            $host = $this->ci->config->item('host');
            $port = $this->ci->config->item('port');
            $username = $this->ci->config->item('username');
            $password = $this->ci->config->item('password');
            $authenticate = $this->ci->config->item('authenticate');

           try{

                $this->ci->conn = new MongoDB\Driver\Manager('mongodb://'.$host.':'.$port);

           }catch(MongoDB\Driver\Exception\MongoConnectionException $ex){

                show_error('Couldn\'t connect to mongodb: ' . $ex->getMessage(), 500);

           }
        }
        public function get_connection(){
            return $this->ci->conn;
        }

    }