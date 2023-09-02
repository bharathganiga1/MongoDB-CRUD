<?php
    class Users extends CI_Controller{
        public static $ID=1;
        function __construct(){
            parent::__construct();
        }

        public function index()
        {
            $data['users'] = $this->User_Model->get_users();
            $this->load->view('header');
            $this->load->view('users', $data);
            $this->load->view('footer');
        }
        public function Create(){

            $this->form_validation->set_rules('user_name','Name','required');
            $this->form_validation->set_rules('user_email','Email','required|valid_email');

            if($this->form_validation->run() === FALSE){
                $this->load->view('header');
                $this->load->view('user_create');
                $this->load->view('footer');
            }else{
                $name = $this->input->post('user_name');
                $email = $this->input->post('user_email');
                
                $userData = [
                    'name' => $name,
                    'email' => $email,
                ];

                $result = $this->User_Model->create_user($userData);
                if($result === true){
                    redirect("users");
                }else{
                    die("fails");
                }
            }
            
        }

        public function Update(){
            Die("Update");
        }
        public function Delete(){
            die("Delete");
        }
    }