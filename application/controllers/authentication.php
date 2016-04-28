<?php
class Authentication extends CI_Controller{
	
	private $b_Check = false;
	
	public function __construct(){
		parent::__construct();
		#Tải thư viện  và helper của Form trên CodeIgniter
		$this->load->helper(array('form','url'));
        $this->load->library(array('session', 'form_validation', 'email'));
        $this->load->database();
		#Tải model
		$this->load->model(array('authentication_model'));
		$this->load->model(array('user_model'));
	}
	
	public function index(){
		$a_Data['seo']['title'] = 'Đăng Nhập Hệ Thống';
		$a_Data['seo']['description'] = 'Thị Hiếu Shop web site phân phối chính thức';
		$a_Data['seo']['keyword'] = 'quần áo trẻ em, thời trang,abc,';
		
		$this->load->view('authentication-template',isset($a_Data)?$a_Data:NULL);
	}
	
	public function login(){
		
		$this->form_validation->set_rules('username', 'Tên Tài Khoản', 'trim|required|min_length[3]|max_length[30]');
        $this->form_validation->set_rules('password', 'Mật Khẩu', 'trim|required');
		$a_Data['seo']['title'] = 'Đăng Nhập Hệ Thống';
		$a_Data['seo']['description'] = 'Thị Hiếu Shop web site phân phối chính thức';
		$a_Data['seo']['keyword'] = 'quần áo trẻ em, thời trang,abc,';
		#Kiểm tra điều kiện validate
		if($this->form_validation->run() == TRUE){
			$a_UserInfo['username'] = $this->input->post('username');
			$a_UserInfo['password'] =($this->input->post('password'));
			$a_UserChecking = $this->authentication_model->a_fCheckUser( $a_UserInfo );
			if($a_UserChecking){
				$this->session->set_userdata('user', $a_UserInfo);
				redirect(base_url('authentication/success'));
			}else{
				$this->b_Check = false;
			}
		}
		$a_Data['b_Check']= $this->b_Check;
		$this->load->view('authentication-template', $a_Data);
		
	}

	public function logout(){
		$this->session->unset_userdata('user');	// Unset session of user		
		redirect(base_url('authentication/success'));
	}
	
	public function detail()
	{
		$id = $this->input->get('id');
		//$data['products'] = $this->authentication_model->show_products();
		$data['single_product'] = $this->authentication_model->show_pro_id($id);
		print_r($data);
		$this->load->view('detail', $data);
	}
	
	
	public function success(){
		$sale = 20;
		$a_UserInfo['user'] = $this->session->userdata('user');
		$a_UserInfo['tbl_product'] = $this->db->select('*')->from('tbl_product')->limit(8,0)->get()->result_array();
		$a_UserInfo['tbl_product2'] = $this->db->select('*')->from('tbl_product')->limit(4,2)->get()->result_array();
		$a_UserInfo['tbl_product3'] = $this->db->select('*')->from('tbl_product')->limit(4,2)->get()->result_array();
		$a_UserInfo['tbl_product4'] = $this->db->query('SELECT * FROM tbl_product WHERE sale < 30')->result_array();
		$this->load->view('index', $a_UserInfo);
	}
	// đăng ký
	
	function register()
    {
		$this->form_validation->set_message('required', $this->lang->line('required'));
		$this->form_validation->set_message('valid_email', $this->lang->line('invalid-email'));
		$this->form_validation->set_message('matches', $this->lang->line('matches'));
        //set validation rules
        $this->form_validation->set_rules('fullname', 'Họ Và Tên', 'trim|required|min_length[3]|max_length[30]');
        $this->form_validation->set_rules('username', 'Tên Tài Khoản', 'trim|required|min_length[3]|max_length[30]');
       // $this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'Mật Khẩu', 'trim|required|matches[confirm_password]');
        $this->form_validation->set_rules('confirm_password', 'Nhập Lại Mật Khẩu', 'trim|required');
        
        //validate form input
        if ($this->form_validation->run() == FALSE)
        {
            // fails
            $this->load->view('register');
        }
        else
        {
            //insert the user registration details into database
            $data = array(
                'fullname' => $this->input->post('fullname'),
                'user_name' => $this->input->post('username'),
                'password' => $this->input->post('password')
            );
            
            // insert form data into database
            if ($this->user_model->insertUser($data))
            {
                // send email
                if ($this->user_model->sendEmail($this->input->post('email')))
                {
                    // successfully sent mail
                    $this->session->set_flashdata('msg','<div class="alert alert-success text-center">You are Successfully Registered! Please confirm the mail sent to your Email-ID!!!</div>');
                    redirect('user/register');
                }
                else
                {
                    // error
                    $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
                    redirect('user/register');
                }
				$this->load->view('authentication/success');
            }
            else
            {
                // error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
                redirect('user/register');
            }
        }
    }
    
    function verify($hash=NULL)
    {
        if ($this->user_model->verifyEmailID($hash))
        {
            $this->session->set_flashdata('verify_msg','<div class="alert alert-success text-center">Your Email Address is successfully verified! Please login to access your account!</div>');
            redirect('authentication/register');
        }
        else
        {
            $this->session->set_flashdata('verify_msg','<div class="alert alert-danger text-center">Sorry! There is error verifying your Email Address!</div>');
            redirect('authentication/register');
        }
    }
}

