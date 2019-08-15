<?php
class model extends CI_model
{
  private $db_teacher = 'teacher';

  public function insert($data)
  {
    $this->db->insert($this->db_teacher, $data);
  }

  public function show()
  {
    // $query = $this->db->get('teacher');
    // $query = $this->db->query("SELECT * FROM teacher ORDER BY teacher_id DESC");
    $this->db->select("*");
    $this->db->from("teacher");
    $query = $this->db->get();
    return $query;
  }

  // public function get()
  // {
  //   $query = $this->db->get('teacher');
  //   foreach ($query->result() as $row) {
  //     // echo $row->user;
  //     // $row->user;
  //     // $row->pass;
  //   }
  //   return $query;
  // }
}
