<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.bgimg{

  height:83.2%;
  background-color:skyblue;
}
</style>
</head>
<body>
<div class="row" >
    <div class="col-md-4" style="margin-top:20px;">
      </div>
      <div class="col-md-4" style="margin-top:20px;">
        <center>
        <h2><font color="#5ebb60">$w</font><font color="#428bca">@(hh</font></h2>
        <p>We there to help you</p>
      </center>
      </div>
    </div>
    <div class="bgimg">
		<div class="conainer">
<table class="table table-bordered table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">Customer Id</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile Number</th>
	  <th scope="col">Address</th>
    </tr>
  </thead>
  <?php  if($get_data->num_rows()>0){
foreach ($get_data->result() as $row): ?>
  <tbody>
    <tr>	
      <th scope="row"><?php echo $row->id; ?></th>
      <td><?php echo $row->name; ?></td>
      <td><?php echo $row->email; ?></td>
      <td><?php echo $row->mobile; ?></td>
	  <td><?php echo $row->address; ?></td>
	 <!-- <td><?php echo $row->mobile; ?></td>-->
    </tr>
<?php endforeach; }?>
  </tbody>
</table>
</div>
</div>
</body>
</head>