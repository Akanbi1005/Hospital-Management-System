<?php
class Login extends CI_Controller {

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('login');
        $this->load->view('template/footer');
    }

    public function process_login()
    {

        $Username = $this->input->post('username');
        $Password =  $this->input->post('password');

        // echo "$Username";
        // echo "<br>";
        // echo "$Password";
        // die();

        //Error Checking
        //Check if Input are not Empty
        if (empty($Username)||empty($Password)) {
            redirect('login');
            exit();
        }else{
            // Check if Username Exit
            $this->db->select('*');
            $this->db->from('signup');
            $this->db->where(['Email' => $Username]);
            $this->db->or_where(['idcard' => $Username]);
            $result = $this->db->get()->row_array();

            if (empty($result)) {
                redirect('login');
                exit();
            }else{
                //De-hashing The Password
                $Check = password_verify($Password, $result['Password']);

                if ($Check ==false) {
                    redirect('login');
                    exit();
                }elseif ($Check ==True) {

                    // Log User Into The Website
                    $this->session->set_userdata('user_id', $result['id']);
                    $this->session->set_userdata('user_email', $result['Email']);
                    
                    
//                    $access = $this->session->access;
                    redirect('admin');

                }else{
                    redirect('login.php');
                }


            }
        }

    }
    
    public function logout(){
        
        session_unset();
        session_destroy();
        redirect("Login");
        
    }
    
    
    
}
