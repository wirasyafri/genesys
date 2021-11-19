<?php
header("Access-Control-Allow-Origin: *");
defined('BASEPATH') OR exit('No direct script access allowed');
class sendcontroller extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url','form');
        $this->load->library('form_validation');
        $this->load->model('user');
    
    }
    public function index(){
        $data = array();
        $allmsgs = $this->db->select('*')->from('game')->get()->result();
        // echo "<pre>";
        $data['allMsgs'] = $allmsgs;
        // print_r($data);
        $this->load->view('message',$data);
    }
    public function send(){
        $arr['msg'] = $this->input->post('message');
        $arr['date'] = date('Y-m-d');
        $arr['status'] = 1;
        $this->db->insert('game',$arr);
        $detail = $this->db->select('*')->from('game')->where('id',$this->db->insert_id())->get()->row();
        $msgCount = $this->db->select('*')->from('game')->get()->num_rows();
        $arr['message'] = $detail->msg;
        $arr['date'] = date('m-d-Y', strtotime($detail->date));
        $arr['msgcount'] = $msgCount;
        $arr['success'] = true;
        echo json_encode($arr);
    }
}