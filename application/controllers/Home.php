<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->helper('url'); //load url helper array
         
        $data['baseURL'] = base_url();
         
	}
	
	public function layouts()
	
	{
		$this->load->helper('url'); //load url helper array
         
        $data['baseURL'] = base_url();
		$data['tbl_product'] = $this->db->select('*')->from('tbl_product')->limit(8,0)->get()->result_array();
		$this->load->view('fontend/home/view',$data);
	}
	
	public function show()
	{
		$data['category'] = $this->db->select('*')->from('category')->limit(0,4)->get()->result_array();
		$this->load->view('layouts/show', $data);
	}
	
	public function update($id=0)
	{
			
		$data = array(
               'title' => $title,
               'name' => $name,
               'date' => $date
            );

		$this->db->where('id', $id);
		$this->db->update('category', $data); 
	}
	public function delete($id=0)
	{
		$this->db->delete('mytable', array('id' => $id)); 
	}
	
	public function insert($id=0)
	{
			
		$data = array(
		   'title' => 'My title' ,
		   'name' => 'My Name' ,
		   'date' => 'My date'
		);

		$this->db->insert('category', $data); 
	}
	
	public function detail($id=0)
	{
		$data['category'] = $this->db->select('*')->from('category')->where(array('id_cat'=>$id))->get()->result_array();
		$this->load->view('layouts/detail', $data);
	}
}
