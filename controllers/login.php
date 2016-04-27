<?php
class Login extends CI_Controller {
    function __construct()
        {
            parent::__construct();
        }
    function index() {
        $ad_data = array(
                'title'   => "Demo Login CodeIgniter"
            );            
        $this->load->view('ten_dangnhap',$ad_data);
        }
    function hethong() {          
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password','Mật khẩu','required|min_length[6]|max_length[100]');
     if ($this->form_validation->run() == FALSE)
            {
            $ad_data = array(
                    'title'  => "Đăng nhập không thành công do chưa điền đầy đủ thông tin vào !"
                );            
            $this->load->view('ten_dangnhap',$ad_data);
            }                    
     else
     {
            $email = $this->input->post('email'); // Lấy thông tin email từ người nhập.
            $password = $this->input->post('password');  // Lấy thông tin password từ người nhập.
            $this->load->model('login_model'); // Gọi login_model
            $query = $this->login_model->login($email,$password);
            if ($query)
            {
                 foreach($query as $row)
                 {
                     $newdata = array(
                            'id' => $row->id,
                            'email'   => $row->email
                        );
                     $this->session->set_userdata($newdata); // Tạo Session cho Users                 
                     redirect('home.html'); // Đăng nhập thành công chuyển bạn về trang home.html
                 }
             return TRUE;
            }
            else
            {
                $users_err = array(
                    'title'   => "Đăng nhập không thành công vào hệ thống webste !",
                    'error_login' => "Email hoặc Mật khẩu nhập sai."
                    );                                                          
                $this->load->view('ten_dangnhap',$users_err); 
             return false;   
            }             
         }
    }
}
?>