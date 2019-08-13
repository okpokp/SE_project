<?php
class model extends CI_model
{
  private $db_user = 'user';
  public function insert($data)
  {
    $this->db->insert($this->db_user, $data);
  }
  public function show($data)
  {
    $query = $this->db->get();
    return $query;
  }

  public function get($data)
  {
    $query = $this->db->get('user');
    foreach ($query->result() as $row) {
      // echo $row->user;
      // $row->user;
      // $row->pass;
    }
    return $query;
  }
}
