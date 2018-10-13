<?php

require_once 'PHP/dbhelper.php';

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/Main.css">
<link rel="stylesheet" type="text/css" href="styles/theme.css">
<link rel="stylesheet" type="text/css" href="styles/dropdownstyle.css">
<link rel="stylesheet" type="text/css" href="styles/dropdownstyle2.css">
<link rel="stylesheet" type="text/css" href="styles/styletable.css">

</head>
<body>
<nav class="navbar navbar-expand-md bg-secondary navbar-dark">
    <a class="navbar-brand w-25" href="#">Legazpi Catholic Cemetery&nbsp;</a>
    <a class="btn btn-default navbar-btn" onclick="button1()">Home</a>
    
<a class="btn btn-default navbar-btn" onclick="myFunction()">Client</a>
    <div class="dropdown">
    <div id="myDropdown" class="dropdown-content">
    <a><input type="submit" href="#about" value="New Clients" onclick="buttonNewRegClient()" style="outline:none;border:none;background: transparent"></a>
    <a href="#base" onclick="buttonOldRegClient()">Old Client</a>
  </div>
  </div>



 <a class="btn btn-default navbar-btn" onclick="button3()">Deceased List</a>
    <a class="btn btn-default navbar-btn" onclick="button4()">Rent Notice</a>

   <a class="btn btn-default navbar-btn" onclick="dropdown()">Staff</a>
   <div class="dropdowns">
    <div id="myDropdowns" class="dropdowns-contents">

    <a><input type="submit" href="#about" value="New Staff" onclick="button5()" style="outline:none;border:none;background: transparent"></a>

    <a href="#base" onclick="button5s()"><input type="submit" value="Old Staff" style="outline:none;border:none;background: transparent"></a>
  </div>
  </div>
</nav>


 <div class="m-20 p-5">
    <div class="container" style="margin-bottom:100px; overflow:hidden;">
      <table style="width:100%;
  align-items: center;
  justify-content: center;">
          <thead>
          <tr>
            <th style=" background-color:#3cb371;">Staff ID</th>
            <th style=" background-color:#3cb371;">Fullnanme</th>
            <th style=" background-color:#3cb371;">Username</th>
            <th style=" background-color:#3cb371;">Password</th>

  <?php
      require_once 'PHP/dbhelper.php';
      $sql = "select * from db_staff"; 

      $result = mysqli_query($db_connection,$sql);
      $count=mysqli_num_rows($result);

      if($count==0){
      $output='There was no search results';
      }
      else
      {
        
      while ($row=mysqli_fetch_array($result)) 
      {

        $ID=$row['staffID'];
        $Fname=$row['fullname'];
        $Lname=$row['username'];
        $tomb=$row['password'];
echo '
   
        <tr background-color: #dddddd;>
          <th style="padding:8px; border: 1px solid #dddddd;
    text-align: center;" >'.$ID.'</th>
          <th style="padding:8px; border: 1px solid #dddddd;
    text-align: center;">'.$Fname.'</th>
          <th style="padding:8px; border: 1px solid #dddddd;
    text-align: center;">'.$Lname.'</th>
          <th style="padding:8px; border: 1px solid #dddddd;
    text-align: center;">'.$tomb.'</th>
          ';
      
      }
      }
      ?>










        </tr>
        </thead>
        </table>
    </div>
  </div>




  <div class="py-1">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <form method="POST" action="PHP/regstaff.php">
            <div class="form-group">
              <input type="text" class="form-control m-2" placeholder="Staff ID" name="staffid">
              <input type="text" class="form-control m-2" placeholder="Fullname" name="Fname"> </div>
            <div class="form-group">
              <input type="text" class="form-control m-2" placeholder="Username" name="username">
              <input type="text" class="form-control m-2" placeholder="Password" name="password"> </div>
          
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <input type="submit" value="update" name="insert" class="btn btn-primary btn-block btn-lg" href="#">
        </div>
      </div>
      </form>
    </div>
  </div>




<!---Scripts--->
<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function dropdown() {
    document.getElementById("myDropdowns").classList.toggle("show1");
}

</script>


<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDropdown");
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
        if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
        } else {
            a[i].style.display = "none";
        }
    }
}
</script>


<script type="text/javascript">
    function button1(){
      window.location="http://localhost/Website 4.0/Home.php";
    }
  </script>

  <script type="text/javascript">
    function buttonNewRegClient(){
      window.location="http://localhost/Website 4.0/NewClientReg.php";
    }
  </script>

  <script type="text/javascript">
    function buttonOldRegClient(){
      window.location="http://localhost/Website 4.0/OldClientReg.php";
    }
  </script>

  <script type="text/javascript">
    function button3(){
      window.location="http://localhost/Website 4.0/deceased registration.php";
    }
  </script>

  <script type="text/javascript">
    function button4(){
      window.location="http://localhost/Website 4.0/Rent Notice.php";
    }
  </script>

  <script type="text/javascript">
    function button5(){
      window.location="http://localhost/Website 4.0/Newstaffregistration.php";
    }
  </script>
  <script type="text/javascript">
    function button5s(){
      window.location="http://localhost/Website 4.0/Oldstaffregistration.php";
    }
  </script>

  <script type="text/javascript">
    function button6(){
      window.location="http://localhost/Website 4.0/Rent Notice.php";
    }
  </script>
</body>
</html>