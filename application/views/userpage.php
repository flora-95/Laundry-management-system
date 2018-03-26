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
  margin-top:-10px;
  border:1px solid black;
  border-radius: 15px;
  width:100%;
  margin-left:20px;
}
.bgimg{

  height:83.2%;
  background-color:skyblue;
}
#x{
    border-radius: 5px;
}
#x:focus:{
  border-radius: 5px;
}


.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 15%;
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
input{
  width:140px;
}
/* #customers {
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
} */
#add_row{
  width:800px;
}




</style>
<script>
$(document).ready(function(){
	$(".addCF").click(function(){
		$("#add_row").append('<tr><td><input type="text" name="no"></td><td><input type="text" name="cloth_type"></td><td><input type="text" name="qty"></td><td><input type="text" name="price"></td><td><input type="date" name="date"></td><td><a href="javascript:void(0);" class="remCF">Remove</a></td></tr>');
	});
    $("#add_row").on('click','.remCF',function(){
        $(this).parent().parent().remove();
    });
});

</script>

</head>
<body>

<script type="text/javascript">
$(document).ready(function(){
    $("#total").click(function(){

      var val1 = parseInt(document.getElementById("qty").value);
      // alert(val1);
                  var val2 = parseInt(document.getElementById("cost").value);
                              var ansD = document.getElementById("total");
                              ansD.value = val2 * val1  ;

    });
    $("#total1").click(function(){
      // alert();

      var val1 = parseInt(document.getElementById("qty1").value);
      // alert(val1);
                  var val2 = parseInt(document.getElementById("cost1").value);
                  var ansD = document.getElementById("total1");
                  // alert(val2);
                              ansD.value = val2 * val1  ;
    });
    // $("#add_row").on('input', '.txtCal', function () {
    //    var calculated_total_sum = 0;
    //
    //    $("#add_row .txtCal").each(function () {
    //        var get_textbox_value = $(this).val();
    //        if ($.isNumeric(get_textbox_value)) {
    //           calculated_total_sum += parseFloat(get_textbox_value);
    //           }
    //         });
    //           $("#total_sum_value").html(calculated_total_sum);
    //    });
});

// document.getElementById("total").on('focus', function () {
// //   var qty = td.find("[name=qty]").val();
// // var price = td.find("[name=price]").val();
// // var subTotal = parseInt(price * amt);
// //document.getElementById("total").value= subTotal;
// alert("working");


  // parseInt(qty,10) * parseFloat(price);
</script>

  <div class="row">
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
        <a href="<?php site_url('first/user_logout') ?>">Logout</a>


      </center>
      </div>
    </div>
    <div class="bgimg">
      <br>


    <div class="tab">
      <button class="tablinks" onclick="openCity(event, 'viewcustomers')" id="defaultOpen">Place Order</button>
      <button class="tablinks" onclick="openCity(event, 'vieworders')">View Orders</button>
      <button class="tablinks" onclick="openCity(event, 'viewservices')">View Services</button>

    </div>


    <div id="viewcustomers" class="tabcontent">
      <!-- <h3><center> User View Customers Details</center></h3> -->

      <form action="<?php echo site_url('First/user_view');?>" method="post">
        <br>
        <h3>Place Order</h3>
        <br>
        <div class="row">


        <div class="col-md-4" style="margin-left:10px;">

      <label>Username:</label>
      <input id="x" type="text" name="name" placeholder="Enter Username" required>
      <br><br>


    </div>


    <div class="col-md-4" style="margin-left:100px">
      <label>Address:</label>
      <input id="x" type="text" name="address" placeholder="Enter Address" required>
      <br><br>

    </div>
  </div>
   <div class="row">
     <div class="col-md-8">
       <a href="javascript:void(0);" class="addCF">Add</a>
       <table class="table table-bordered" id="add_row" style="width:50%;">
         <tr>
           <!-- <th>No</th> -->
           <th>Cloth_type</th>
           <th>Quantity</th>
           <th>Price</th>
           <th>Total Price</th>
           <th>Expected date</th>
         </tr>
         <tr>
           <!-- <td><input type="text" name="no" value="1" readonly></td> -->
           <td><input type="" name="ctype" value="Shirt " readonly></td>
           <td><input type="text" name="qty" id="qty" value=""></td>
           <td><input type="text" name="price" value="15" id="cost" readonly></td>
           <td><input type="text" name="tprice" class="txtCal" id="total"  value=""> </td>
           <td><input type="date" name="" value=""> </td>
         </tr>
         <tr>
           <!-- <td><input type="text" name="no" value="2" readonly></td> -->
           <td><input type="" name="ctype" value="Pant " readonly></td>
           <td><input type="text" name="qty" id="qty1"  value=""></td>
           <td><input type="text" name="price" value="10" id="cost1" readonly></td>
           <td><input type="text" name="tprice" class="txtCal" id="total1"  value=""> </td>
           <td><input type="date" name="" value=""> </td>

         </tr>
         <!-- <tr>
           <td><span><b>TOTAL  :</b></span></td>
           <td><b><span id="total_sum_value"></span></b></td>
         </tr> -->
         <!-- <tr>
           <td><input type="text" name="no" value="3" readonly></td>
           <td><input type="" name="ctype" value="Salwar Suit " readonly></td>
           <td><input type="text" name="qty" class="qty" id="qty" value=""></td>
           <td><input type="text" name="price" value="30" id="cost" readonly></td>
           <td><input type="text" name="tprice" class="amt" id="total" value=""> </td>
           <td><input type="date" name="" value=""> </td>
         </tr>
         <tr>
           <td><input type="text" name="no" value="4" readonly></td>
           <td><input type="" name="ctype" value="Saree " readonly></td>
           <td><input type="text" name="qty" class="qty" id="qty" value=""></td>
           <td><input type="text" name="price" value="50" id="cost" readonly></td>
           <td><input type="text" name="tprice" class="amt" id="total" value=""> </td>
           <td><input type="date" name="" value=""> </td>
         </tr> -->


       </table>
     </div>
   </div>
        <input class="btn btn-primary" type="submit" value="Submit" name="" >
        <br>


        <br>
      </form>

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
      <table id="customFields" border="1" style="margin-top:10%;">

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

    // Add code js


    </script>

  </div>


</body>
</html>
