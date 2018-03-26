<html>
<head><title>Website</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<style>
form{
  margin-top:60px;
  border:1px solid black;
  border-radius: 25px;
  width:60%;
}
.bgimg{

  height:83.2%;
  background-color:skyblue;
}
#x{
    border-radius: 10px;
}
#x:focus:{
  border-radius: 10px;
}
</style>
</head>
<body>
  <div class="row" >
    <div class="col-md-4" style="margin-top:20px;">
      <center>
      <p>Service road<br>
        Vijayanagar,Bangalore.</p>
      </center>
      </div>
      <div class="col-md-4" style="margin-top:20px;">
        <center>
          <h2><font color="#5ebb60">$w</font><font color="#428bca">@(hh</font></h2>
        <p>We there to help you</p>
      </center>
      </div>
      <div class="col-md-4" style="margin-top:20px;">
        <center>


          <h6>9876543210</h6>
        <p>MON-FRI : 7 A.M to 8 P.M</p>
      </center>
      </div>
    </div>
    <div class="bgimg">
      <br>
    <hr/>

      <center>
    <form action="<?php echo site_url('First/register_user');?>" method="post">
      <br>
      <h3>Signup</h3>
      <br>
      <div class="row">

      <div class="col-mod-6" style="margin-left:75px;">

    <label>Username:</label>
    <input id="x" type="text" name="name" placeholder="Enter Username" required>
    <br><br>
    <label>Email_ID:</label>
    <input id="x" type="email" name="email" placeholder="Enter Email_ID" required>
    <br><br>
    <label>Mobile_No:</label>
    <input id="x" type="text" name="mobile" placeholder="Enter Mobile_No" required>
    <br><br>
  </div>

  <div class="col-md-6">
    <label>Address:</label>
    <input id="x" type="text" name="address" placeholder="Enter Address" required>
    <br><br>
    <label>Password:</label>
    <input id="x" type="password" name="password" placeholder="Enter Password" required>
    <br><br>
  </div>
</div>
      <input class="btn btn-primary" type="submit" value="Register" name="register" >
<br><br>

      <br>
    </form>
  </center>
  </div>

</body>
</html>
