<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LiveTable extends CI_Controller {

 public function __construct()
 {
  parent::__construct();
  $this->load->model('livetable_model');
  if(!$this->session->userdata('id'))
  {
   redirect('login');
  }
 }

 function index()
 {
  $this->load->view('live_table');
 }

 function load_data()
 {
  $data = $this->livetable_model->load_data();
  echo json_encode($data);
 }

 function insert()
 {
  $data = array(
   'first_name' => $this->input->post('first_name'),
   'last_name'  => $this->input->post('last_name'),
   'name'   => $this->input->post('name')
  );

  $this->livetable_model->insert($data);
 }

 function update()
 {
  $data = array(
   $this->input->post('table_column') => $this->input->post('value')
  );

  $this->livetable_model->update($data, $this->input->post('id'));
 }

 function delete()
 {
  $this->livetable_model->delete($this->input->post('id'));
 }


 function logout()
 {
  $data = $this->session->all_userdata();
  foreach($data as $row => $rows_value)
  {
   $this->session->unset_userdata($row);
  }
  redirect('login');
 }


}

?>
