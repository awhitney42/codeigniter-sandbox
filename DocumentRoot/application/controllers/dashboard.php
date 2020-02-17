<?php

Class Dashboard extends CI_Controller {

    public function __construct() {
    parent::__construct();

        // Load form helper library
        $this->load->helper('form');

        // Load form validation library
        $this->load->library('form_validation');

        // Load session library
        $this->load->library('session');
    }
    // Show login page
    public function index() {
        if (isset($this->session->logged_in)) {
            $this->load->view('dashboard_page');
        } else {
            $this->load->view('login', array('error_message' => 'You must be logged in.'));
        }
    }

}

// End of file: controllers/dashboard.php