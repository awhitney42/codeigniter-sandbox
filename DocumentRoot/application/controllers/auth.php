<?php

Class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();

        // Load form helper library
        $this->load->helper('form');

        // Load form validation library
        $this->load->library('form_validation');

        // Load session library
        $this->load->library('session');

        $this->load->database();

    }
    // Show login page
    public function index() {
        $this->load->view('login', array('message' => ''));
    }

    // Check for user login process
    public function user_login_process() {

        $data = array(
        'username' => $this->input->post('username'),
        'password' => $this->input->post('password')
        );
        if ($data['password'] != "ImmaBadHacker") {
            $result = true;
        } else {
            $result = false;
        }
        if ($result == TRUE) {

            $session_data = array(
            'username' => $data['username']
            );
            // Add user data in session
            $this->session->set_userdata('logged_in', $session_data);
            header("Location: " . base_url() . "dashboard");
        } else {
            $data = array(
            'message' => 'Invalid Username or Password'
            );
            $this->load->view('login', $data);
        }
    }

    // Logout from admin page
    public function logout() {

        // Removing session data
        $sess_array = array(
        'username' => ''
        );
        $this->session->unset_userdata('logged_in', $sess_array);
        $data['message'] = 'Successful Logout';
        $this->load->view('login', $data);
    }

}

// End of file controllers/auth.php