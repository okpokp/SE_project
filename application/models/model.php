<?php
class model extends CI_model
{
  private $db_teacher = 'teacher';
  private $db_student = 'student';
  private $db_lockbook = 'lockbook';
  private $db_group = 'group';

  public function insert_tch($data)
  {
    $this->db->insert($this->db_teacher, $data);
  }
  public function insert_std($data)
  {
    $this->db->insert($this->db_student, $data);
  }
  public function insert_lockbook($data)
  {
    $this->db->insert($this->db_lockbook, $data);
  }
  public function insert_group($data)
  {
    $this->db->insert($this->db_group, $data);
  }

  public function m_show_teacher()
  {
    // $query = $this->db->get('teacher');
    // $query = $this->db->query("SELECT * FROM teacher ORDER BY teacher_id DESC");
    $this->db->select("*");
    $this->db->from("teacher");
    $query = $this->db->get();
    return $query;
  }

  public function m_show_lockbook()
  {
    // $query = $this->db->get('teacher');
    // $query = $this->db->query("SELECT * FROM teacher ORDER BY teacher_id DESC");


    $this->db->select("*");
    $this->db->from("lockbook");
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
