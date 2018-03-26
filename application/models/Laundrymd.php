<?php
class Laundrymd extends CI_model{



public function register_user($user){


$this->db->insert('customer', $user);

}
 public function email_check($email){

  $this->db->select('*');
  $this->db->from('customer');
  $this->db->where('email',$email);
  $query=$this->db->get();

  if($query->num_rows()>0){
    return false;
  }else{
    return true;
  }
}


public function user_view_list($a){
  $this->db->insert('Orderd',$a);
  echo "Inserted successfully";
}

public function login_user($email,$password){

  $this->db->select('*');
  $this->db->from('customer');
  $this->db->where('email',$email);
  $this->db->where('password',$password);

  if($query=$this->db->get())
  {
      return $query->row_array();
  }
  else{
    return false;
  }
}
 public function get_data()
      {
         $query = $this->db->get("customer");
         return $query;
      }


// View Customers
public function adminpageprocessmod()
{
$sql="select *from customer";
$query = $this->db->query($sql);
  return $query;

}


//view Services
public function viewservicesprocess()
{
$sql="select *from Services";
$query = $this->db->query($sql);
  return $query;
}


//view Orders
public function vieworderprocess()
{
$sql="select *from Order";
$query = $this->db->query($sql);
  return $query;
}


}
?>
