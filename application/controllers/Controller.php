<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	//////////////////////////////////////////////////////
	public function index()
	{
		$this->load->view('index');
	}
	public function ui_main()
	{
		$this->load->view('bin/ui_main');
	}
	public function ui_footer()
	{
		$this->load->view('bin/ui_footer');
	}
	public function ui_tabtch()
	{
		$this->load->view('bin/ui_tabtch');
	}
	//////////end ขอบ///////////////////////////////
	public function regist_tch()
	{
		$this->load->view('teacher/register');
	}
	public function home_tch()
	{
		$this->load->view('teacher/home_tch');
	}
	public function info()
	{
		$this->load->view('teacher/info');
	}
	public function consult()
	{
		$this->load->view('teacher/consult');
	}
	public function commit()
	{
		$this->load->view('teacher/commit');
	}
	//////////////end body teacher////////////////////////////////////
	public function db_user()
	{
		$this->load->model('model');
		$data['show'] = $this->model->m_show_teacher();
		$this->load->view('db/db_user', $data);
	}
	//////////////////////////////////////////////////////////
	public function view_proj()
	{
		$this->load->view('P01');
	}
	//////////////////////////////////////////////////////////
	public function register()
	{
		$btn = $this->input->post('submit');
		// echo $btn . '<br>'; // check
		if ($btn == 'teacher') {
			// $type = $this->input->post('type');
			$title = $this->input->post('title');
			$fname = $this->input->post('fname');
			$lname = $this->input->post('lname');
			$ability = $this->input->post('ability');
			$adviser = $this->input->post('adviser');
			$committee = $this->input->post('committee');
			$data = array(
				// 'type' => $this->input->post('type'),
				'title' => $this->input->post('title'),
				// 'fname' => $this->input->post('fname'),
				// 'lname' => $this->input->post('lname'),
				// 'ability' => $this->input->post('ability'),
				// 'adviser' => $this->input->post('adviser'),
				// 'committee' => $this->input->post('committee'),
			);
			$this->load->model('model');
			$this->model->insert_tch($data);
			$this->load->view('teacher/home_tch');
		} else if ($btn == 'student') {
			// create lockbook
			$type = $this->input->post('type');
			$data = array(
				'type' => $this->input->post('type'),
			);
			$this->load->model('model');
			$this->model->insert_lockbook($data);
			// find last no. lockbook
			$this->load->model('model');
			$show = $this->model->m_show_lockbook();
			// create student
			if ($show->num_rows() > 0) {
				foreach ($show->result() as $row) { }
				// echo $row->lock_id . '<br>'; // check
			}
			$title = $this->input->post('title');
			$fname = $this->input->post('fname');
			$lname = $this->input->post('lname');
			$data = array(
				'title' => $this->input->post('title'),
				'fname' => $this->input->post('fname'),
				'lname' => $this->input->post('lname'),
				'lockbook_lock_id' => $row->lock_id,
			);
			$this->load->model('model');
			$this->model->insert_std($data);
			$this->load->view('student/home_std');
		} else if ($btn == 'create_group') {
			$name_project = $this->input->post('name_project');
			$info_project = $this->input->post('info_project');
			$data = array(
				'data' => '99 Mb',
				'name_project' => $this->input->post('name_project'),
				'info_project' => $this->input->post('info_project'),
				'data_project' => '99 Mb',
				'check1' => 0,
				'check2' => 0,
				'teacher_teacher_id' => 99,
				'student_student_id_1' => 99,
				'student_student_id_2' => 99,
				'student_student_id_3' => 99,
				'request_request_id1' => 99,
			);
			$this->load->model('model');
			$this->model->insert_group($data);
			$this->load->view('student/home_std');
		}
	}
	/////////////////////////////////////////////////////////////////
	public function c_show()
	{
		$this->load->model('model');
		// $this->model->insert($data);
		$s = $this->model->get();
		echo "<pre>"; //print_r($s);
		// print_r($data);
		// echo $s->row('user') . "<br>";
		foreach ($s->result() as $row) {
			if ($row->user ==  'gill') {
				// echo "user is " . $row->user . "<br>";
				// $s['user'] = $s + 1;
				// print_r($s);
				$this->load->view('db/db_user', $s);
			}
			// echo "password is " . $row->pass . "<br>";
		}
	}
	//////////end teacher////////////////////////////////////////////////////

	public function ui_tabstd()
	{
		$this->load->view('bin/ui_tabstd');
	}
	//ขอบนิสิต
	public function home_std()
	{
		$this->load->view('student/home_std');
	}
	public function mange_project()
	{
		$this->load->view('student/mange_project');
	}
	public function adviser()
	{
		$this->load->view('student/adviser');
	}
	public function progress_project()
	{
		$this->load->view('student/progress_project');
	}
	public function upload_photo()
	{
		$this->load->view('student/upload_photo');
	}
	public function regist_std()
	{
		$this->load->view('student/register');
	}
	public function create_group()
	{
		$this->load->view('student/create_group');
	}
	// end tab_student


	/*
	public function recieve()
	{
		$user = $this->input->post('username');
		//echo $user ;
		$pass = $this->input->post('password');
		$submit = $this->input->post('Submit'); // เก็บค่า post('name') ของปุ่ม Submit
		$cancel = $this->input->post('Cancel');
		$plus = $this->input->post('plus');
		$del = $this->input->post('delete');
		$log = $this->input->post('Log');
		$out = $this->input->post('Out');
		$name = array(
			'user' => $this->input->post('username'), // 'user' ใส่แทน ตน.แรก ของอาเรย์ แล้วรับค่า  name จากไฟล์ login_form
			'pass' => $this->input->post('password'),
			'id' => $this->input->post('id')
		);
		if ($submit == 'submit') // $submit =='value' ของ login_form
		{
			// $data['todo_list'] = array('Clean House', 'Call Mom', 'Run Errands');
			//
			//      $data['title'] = "My Real Title";
			//      $data['heading'] = "My Real Heading";

			//$this->load->view('blogview', $data);

			echo "<pre/>"; //เว้นบรรทัด
			// print_r($name); //ปริ้น array
			// print_r($data);
			//echo "<br/>".$this->input->post('username'); //แสดงค่า  username จากฝั่ง login_formตัว input
			//var_dump($name);
			// //sort($name); //มีสำเร็จรูป sort เรียงข้อมูล count เก็บจำนวนทั้งหมดในarray
			// $length = count($name);
			//   for($x = 0; $x < $length; $x++) {
			//       echo $name[$x];
			//       echo "<br>";
			//     }

			foreach ($name as $x => $x_value) //นำค่าใน อาเรมาเเสดง
			{
				echo  "<input type = 'button' class = 'button' value= '" . $x . " is " . $x_value . "'/>";
				//echo "<input type ='button' class='button' value='" .intval($array2[$i]+$array2[$i+1])."' />";
				echo "<br>";
			}
		} elseif ($plus == 'plus') {
			// echo $user."<br/>";
			// echo $pass."<br/>";
			$sum = $user + $pass;
			echo "<input type='button' class= 'button' value='" . " sum is " . $sum . "' />";
		} elseif ($del == 'delete') {
			$minus = $user - $pass;
			echo "<input type = 'button' class = 'button' value='" . "minus is " . $minus . "'/>";
		} elseif ($log == 'Log') {
			if ($user == $name['user'] && $pass == $name['pass']) {
				echo "success";
			}
		}
		// elseif($out == 'Out')
		// {
		//   for($i=0;$i<$name[];)
		// }
		else {
			//echo $cancel; // แสดง value ของ login_form
			echo 'error';
		}
	}
	// public function picture()
	// {
	//       $pic = $this->input->post('photo');
	//       if($pic == 'photo')
	//       {
	//         echo "<input type='button' class='center' value='"."picture"."'/>";
	//       }
	// }
	public function lo()
	{
		$this->load->view('login_form');
	}
	public function Re()
	{
		$btn = $this->input->post('submit');
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');
		$data = array(
			'name' => $this->input->post('user'),
			'pass' => $this->input->post('pass')
		);

		$this->load->model('model');
		$this->model->insert($data);

		echo "<pre>";
		print_r($data);
		echo $user;
		echo $pass;

		// redirect(base_url('Test/index'));

		//$this->model->show();
	}

	public function cha()
	{
		$this->load->view('chaview');
	}
	*/
}
?>



<!-- ถ้าจะใช้pgadmin ต้องไปxampp กด config apache php.ini clt+f หาคำว่า pdo เอา ; ออกตรง extension=php_pdo_mysql -->
<!-- อย่าลืมสร้างไฟล์นอก โปรเจคเรา ชื่อ .htaccess แล้วก็อปมาว่างเลย   -->