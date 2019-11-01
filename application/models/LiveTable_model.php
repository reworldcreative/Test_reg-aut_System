<?php
class LiveTable_model extends CI_Model
{
 function load_data()
 {
  $this->db->order_by('id', 'DESC');
  $query = $this->db->get('users');
  return $query->result_array();
 }

 function insert($data)
 {
  $this->db->insert('users', $data);
 }

 function update($data, $id)
 {
  $this->db->where('id', $id);
  $this->db->update('users', $data);
 }

 function delete($id)
 {
  $this->db->where('id', $id);
  $this->db->delete('users');
 }
}
?>
