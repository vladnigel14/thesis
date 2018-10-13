<?php 

require_once 'PHP/dbhelper.php';
require_once 'PHP/idgeneration.php';

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/Main.css">
<link rel="stylesheet" type="text/css" href="styles/theme.css">
<link rel="stylesheet" type="text/css" href="styles/dropdownstyle.css">  
<link rel="stylesheet" type="text/css" href="styles/dropdownstyle2.css">
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






  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <form method="POST" action="PHP/regclient.php">
            <div class="form-group">
              <input type="text" readonly class="form-control m-2" name="id" value="<?php echo generate(); ?>">
            </div>

              <div class="form-group">
              <input type="text" class="form-control m-2" placeholder="Fullname" name="Fname"> </div>
          
            <div class="form-group">
              <input type="text" class="form-control m-2" placeholder="Contact Number" name="Cnumber">
              
              <input type="text" class="form-control m-2" placeholder="Address" name="address">

              <label for="exampleInputEmail1" class="m-2"> Start of Rent:</label>
              <input type="date" class="form-control m-1" placeholder="Date of Birth" name="srent" value="<?php echo date('Y-m-d'); ?>"> 
            <div class="form-group m-1">
              <label for="exampleInputEmail1" class="m-2">End of Rent:</label>
              <input type="date" class="form-control m-1" placeholder="Date of Death" name="erent">


<div class="py-2">
<div class="container">
<div class="row">
<div class="col-md-3">
<input type="submit" class="btn btn-primary btn-block btn-lg" href="#" name="insert" value="Register">
        </div>
        </form>
          </div>     
         </div>
        </div>
      </div>
    </div>
  </div>        
</div>
</div>
</div>


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