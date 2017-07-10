<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Investor extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	     
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $CI =&get_instance();
        $this->load->library('form_validation');
        $CI->load->model('users_model');
    }

        
    /*
     * User account information
     */
    public function index(){
        $data = array();
        if($this->session->userdata('isUserLoggedIn')){
            $data['user'] = $this->users_model->getRows(array('id'=>$this->session->userdata('userId')));
            //$roleID = $user['role_id'];
            $data['user_role'] = $this->users_model->getRole(array('role_id'=>$this->session->userdata('userId')));
            //load the view
            $this->load->view('include/header', $data);
            $this->load->view('include/sidebar', $data);
            $this->load->view('users/home', $data);
            $this->load->view('include/footer', $data);
            //print_r($data);
        }else{
            redirect('users/login');
        }
    }

    public function FunctionName(Type $var = null)
    {
        # code...
    }


}