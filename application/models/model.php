<?php
class model extends CI_model
{
  private $db_teacher = 'teacher';
  private $db_student = 'student';
  private $db_lockbook = 'lockbook';
  private $db_group = 'group';
  private $db_request = 'request';
  private $db_score = 'score';
  private $db_notice = 'notice';

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
  public function insert_request($data)
  {
    $this->db->insert($this->db_request, $data);
  }
  public function insert_score($data)
  {
    $this->db->insert($this->db_score, $data);
  }
  public function insert_notice($data)
  {
    $this->db->insert($this->db_notice, $data);
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

  public function m_show_student()
  {
    $this->db->select("*");
    $this->db->from("student");
    $query = $this->db->get();
    return $query;
  }

  public function m_show_group()
  {
    $this->db->select("*");
    $this->db->from("group");
    $query = $this->db->get();
    return $query;
  }

  public function m_show_group_select($group_id)
  {
    $this->db->select("*");
    $this->db->from("group");
    $this->db->where("group_id = $group_id");
    // $this->db->join('student', 'student_student_id = student_id', 'right');
    $query = $this->db->get();
    return $query;
  }

  public function m_show_lockbook()
  {
    $this->db->select("*");
    $this->db->from("lockbook");
    $query = $this->db->get();
    return $query;
  }

  public function m_show_request()
  {
    $this->db->select("*");
    $this->db->from("request");
    $query = $this->db->get();
    return $query;
  }

  public function m_show_score()
  {
    $this->db->select("*");
    $this->db->from("score");
    $query = $this->db->get();
    return $query;
  }

  public function m_show_notice()
  {
    $this->db->select("*");
    $this->db->from("notice");
    $query = $this->db->get();
    return $query;
  }

  public function m_show_notice_select($notice_id)
  {
    $this->db->select("*");
    $this->db->from("notice");
    $this->db->where("notice_id = $notice_id");
    // $this->db->join('student', 'student_student_id = student_id', 'right');
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
