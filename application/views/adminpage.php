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
  margin-top:65px;
  border:1px solid black;
  border-radius: 25px;
  width:30%;
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


.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 20%;
    height: 550px;
    margin-top:-25px;
}

/* Style the buttons inside the tab */
.tab button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;

    width: 80%;
    border-left: none;
    height: 300px;
}
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #8a8281;
    color: white;
}




</style>
</head>
<body>
  <div class="row"  >
    <div class="col-md-4" style="margin-top:20px;">
      <center>
        <p>New road<br>
          Newnagar,Hubli.</p>
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


    <div class="tab">
      <button class="tablinks" onclick="openCity(event, 'viewcustomers')" id="defaultOpen">View Customers</button>
      <button class="tablinks" onclick="openCity(event, 'vieworders')">View Orders</button>
      <button class="tablinks" onclick="openCity(event, 'viewservices')">View Services</button>

    </div>


    <div id="viewcustomers" class="tabcontent">
      <h3><center>View Customers Details</center></h3>

        <table id="customers" border="1" style="margin-top:10%;">

          <tr>
            <th>Customer_ID</th>
            <th>Customer_Name</th>
            <th>Email_ID</th>
            <th>Mobile_No</th>
            <th>Address</th>
            <th>Password</th>
          </tr>
          <?php
          if(!empty($arrUsers)){
            foreach ($arrUsers as $row): ?>

                <tr>
                  <td>
                      <?php echo $row['id'];?>
                  </td>
                  <td>
                      <?php echo $row['name'];?>
                  </td>
                  <td>
                      <?php echo $row['email'];?>
                  </td>
                  <td>
                      <?php echo $row['mobile'];?>
                  </td>
                  <td>
                      <?php echo $row['address'];?>
                  </td>
                  <td>
                      <?php echo $row['password'];?>
                  </td>

                <?php endforeach;}
                ?>

                </tr>
             </table>


    </div>


    <div id="viewservices" class="tabcontent">
      <h3>Paris</h3>
      <h3>View Service Details</h3>

        <table id="customers" border="1" style="margin-top:10%;">

          <tr>
            <th>Customer_Name</th>
            <th>Email_ID</th>
            <th>Mobile_No</th>
            <th>Address</th>
          </tr>
          <?php

            foreach ($arrUsers1 as $row): ?>

                <tr>
                  <td>
                      <?php echo $row['fullname'];?>
                  </td>
                  <td>
                      <?php echo $row['email'];?>
                  </td>
                  <td>
                      <?php echo $row['mno'];?>
                  </td>
                  <td>
                      <?php echo $row['pass'];?>
                  </td>

                <?php endforeach;
                ?>
                </tr>
             </table>

    </div>



<div id="vieworders" class="tabcontent">
      <h3>View Order Details</h3>
      <table id="customers" border="1" style="margin-top:10%;">

        <tr>
          <th>Customer_Name</th>
          <th>Email_ID</th>
          <th>Mobile_No</th>
          <th>Address</th>
        </tr>
        <?php

          foreach ($arrUsers2 as $row): ?>

              <tr>
                <td>
                    <?php echo $row['fullname'];?>
                </td>
                <td>
                    <?php echo $row['email'];?>
                </td>
                <td>
                    <?php echo $row['mno'];?>
                </td>
                <td>
                    <?php echo $row['pass'];?>
                </td>

              <?php endforeach;
              ?>
              </tr>
           </table>

    </div>

    <script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
    </script>

  </div>

</body>
</html>
