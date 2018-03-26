<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class First extends CI_Controller{

public function __construct(){

        parent::__construct();
			  $this->load->helper('url');
			 $this->load->model('laundrymd');
			$this->load->library('session');
			 $this->load->database();

}


	public function index()
	{
		$this->load->view('login');

	}

	public function signupview(){

$this->load->view('signup');

}

//Admin Page
public function adminpageview(){

$this->load->view('adminpage');

}

//View Customers
public function adminpageprocess()
{
$resulSet=$this->laundrymd->adminpageprocessmod();
$arrRowData	= array();
 $resulSet->num_rows();
foreach($resulSet->result_array() as $arrRow){
		$arrRowData[]	= $arrRow;
}
$data['arrUsers']	= $arrRowData;
// print_r($data);
$this->load->view('adminpage',$data);

}

//View viewservices
public function viewservices()
{
  $resulset1=$this->laundrymd->viewservicesprocess();
  $arrRowData1	= array();
   $resulSet1->num_rows();
  foreach($resulSet1->result_array() as $arrRow){
  		$arrRowData1[]	= $arrRow;
  }
  $data1['arrUsers1']	= $arrRowData;
  $this->load->view('adminpage',$data1);

}

//View vieworders
public function vieworders()
{
  $resulset2=$this->laundrymd->vieworderprocess();
  $arrRowData2	= array();
   $resulSet2->num_rows();
  foreach($resulSet2->result_array() as $arrRow){
  		$arrRowData2[]	= $arrRow;
  }
  $data2['arrUsers2']	= $arrRowData;
  $this->load->view('adminpage',$data2);

}







	public function register_user(){


      $user=array(
      'name'=>$this->input->post('name'),
      'email'=>$this->input->post('email'),
      'mobile'=>$this->input->post('mobile'),
      'address'=>$this->input->post('address'),
      'password'=>$this->input->post('password'),
        );
        //print_r($user);


$email_check=$this->laundrymd->email_check($user['email']);

if($email_check){
  $this->laundrymd->register_user($user);
  $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
 // redirect('user/login_view');

}
else{

  $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
  redirect('first');


}

}

function login_user(){
  $user_login=array(

  'email'=>$this->input->post('email'),
  'password'=>$this->input->post('password')

    );

    $data=$this->laundrymd->login_user($user_login['email'],$user_login['password']);
      if($data)
      {

        $this->session->set_userdata('id',$data['id']);
        $this->session->set_userdata('name',$data['name']);
		 $email = $this->session->set_userdata('email',$data['email']);
     echo $email;
        $this->session->set_userdata('mobile',$data['mobile']);
      $addr=  $this->session->set_userdata('address',$data['address']);
		 $this->session->set_userdata('password',$data['password']);

     $resulSet=$this->laundrymd->adminpageprocessmod();
     $arrRowData	= array();
      $resulSet->num_rows();
     foreach($resulSet->result_array() as $arrRow){
         $arrRowData[]	= $arrRow;
     }
     $data1['arrUsers']	= $arrRowData;
     // print_r($data);
     $this->load->view('userpage',$data1);

      }
      else{
        $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
        $this->load->view('login');

      }
}
public function user_view(){
  // print_r($_POST);
  $this->laundrymd->user_view_list($_POST);
}
  public function load()
   {
        $this->load->database();
         //load the method of model
         $data['get_data']=$this->laundrymd->get_data();
         //return the data in view
         $this->load->view('customerview', $data);

   }
   public function user_logout(){

  $this->session->sess_destroy();
  redirect('first/login_user', 'refresh');
}


}
?>
