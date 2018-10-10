<?php 

require_once 'PHP/dbhelper.php';

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/Main.css">
<link rel="stylesheet" type="text/css" href="styles/theme.css">
<link rel="stylesheet" type="text/css" href="styles/styletable.css">
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

<!---Search--->
<div class="">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <form method="POST" action="OldClientReg.php" class="form-inline m-5">
            <input class="form-control mr-2 m-0" name="Search" type="text" placeholder="Search....">
            <input type="submit" class="btn btn-primary" name="search">
          </form>
        </div>
      </div>
    </div>
  </div>

<!---ENDSearch--->

    <!---Table-->
<?php 
$output='';
if(isset($_POST['search'])){
  require_once 'PHP/dbhelper.php';
  $searchq=$_POST['Search'];
  $searchq= preg_replace("#[^0-9a-z]#i","", $searchq);
$query=mysqli_query($db_connection,"SELECT db_clients.clientID,db_clients.fullname,db_clients.contact,db_clients.address,db_clients.SRent,db_clients.ERent,db_deadreg.deceasedID,db_deadreg.Firstname,db_deadreg.Lastname FROM db_clients LEFT OUTER JOIN db_deadreg ON db_clients.clientID=db_deadreg.clientID where db_clients.fullname like '%$searchq%'");

  //$count=mysqli_num_rows($query);
  if(1==2){
    $output='There was no search results';
  }else{
    while ($row=mysqli_fetch_array($query)){

       $cID=$row['clientID'];
       $fname=$row['fullname'];
       $con=$row['contact'];
       $add=$row['address'];
       $srent=$row['SRent'];
       $erent=$row['ERent'];
      $regdec=$row['Firstname']." ".$row['Lastname'];
    }

    $output.=
'
<div>
  <div style="margin-right:10px;overflow:auto">
    <table style="width:100%;
  align-items: center;
  justify-content: center;">
      <thead>
        <tr>
      <th style=" background-color:#3cb371; text-align:center;">Client ID</th>
      <th style=" background-color:#3cb371; text-align:center;">Fullname</th>
      <th style=" background-color:#3cb371; text-align:center;">Contact</th>
      <th style=" background-color:#3cb371; text-align:center;">Address</th>
      <th style=" background-color:#3cb371; text-align:center;">Start Rent</th>
      <th style=" background-color:#3cb371; text-align:center;">End Rent</th>
      <th style=" background-color:#3cb371; text-align:center;">Deceased</th>


<form method="POST" action="PHP/regdeceased.php">
<tr background-color: #dddddd;>
    <td style="padding:6px; border: 1px solid #dddddd;
    text-align: left;" name="ClientID";>
<input name="ClientId" type="text" readonly value="'.$cID.'">
    </td>
    <td style="padding:6px; border: 1px solid #dddddd;
    text-align: left;" name="fullname";>
    <input type="text" name="fname"  value="'.$fname.'">
    </td>
    
    <td style="padding:6px; border: 1px solid #dddddd;
    text-align: left;" name="contact";>
    <input type="text" name="con"  value="'.$con.'">
    </td>
    
    <td style="padding:6px; border: 1px solid #dddddd;
    text-align: left;" name="add";>
    <input type="text" name="adds"  value="'.$add.'">
    </td>

    <td style="padding:6px; border: 1px solid #dddddd;
    text-align:left;" name="srent";>
 <input type="text" name="Reg" readonly value="'.$srent.'">
    </td>

    <td style="padding:6px; border: 1px solid #dddddd;
    text-align:left;" name="erent";>
 <input type="text" name="Reg" readonly value="'.$erent.'">
    </td>
    <td style="padding:6px; border: 1px solid #dddddd;
    text-align:left;" name="erent";>
 <input type="text" name="Reg" readonly value="'.$regdec.'">
    </td>
  </tr>
</tr>
    </thead>
    </table>
    </div>
     </div>
      
    <div class="col-md-6">
    <div class="row">
    <div class="col-md-12">
      <img src="image/icons8-plus-100.png" onclick="buttonreg()" name="billingtoo">
    <div style="margin-left:10px;">
          Click to Register Deceased Here
        </div>
      </div>
    </div>
    </div>

      </div>
    </div>
  </div>
';
    echo $output;
  }
}
?>

<!---ENDTable-->

<div class="p-0">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
            
              <input type="text" class="form-control m-2" placeholder="Firtsname" name="Firtsname">
            
              <input type="text" class="form-control m-2" placeholder="Lastname" name="Lastname"> 

               <label for="exampleInputEmail1" class="m-2">Date of Birth</label>
              <input type="date" class="form-control m-1" placeholder="Date of Birth" name="Birth"> 
            <div class="form-group m-1">
              <label for="exampleInputEmail1" class="m-2">Date of Death</label>
              <input type="date" class="form-control m-1" placeholder="Date of Death" name="Death">

              </div>
             </div>
        
             <div class="col-md-6">
            <div class="form-group">
              <input type="ID" class="form-control m-2" placeholder="Location" name="location">          
  <label for="Manufacturer" class="m-2" > Type of Tomb : </label><br>
  <select id="cmbMake" name="Make" onchange="document.getElementById('selected_text').value=this.options[this.selectedIndex].text" class="m-2" >
     <option value="0">Select here</option>
     <option value="1">Nakatayo</option>
     <option value="2">Nakahiga</option>
     <option value="3">Nakatiwarik</option>
     <option value="4">Nakadapa</option>
     <option value="5">Muslim Style</option>
     <option value="6">Nakaupo</option>
</select>
<input type="hidden" class="form-control m-2" name="selected_text" id="selected_text" value="" /><br>
  
   <label for="exampleInputEmail1" class="m-1">Upload Photo here</label>
  <input type="hidden" name="size" class="m-2" value="1000000">
  <div>
    <input type="file" class="m-2" name="image">
  </div>  
 </div>
</div>
</div>
 


 <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <input type="submit" class="btn btn-primary btn-block btn-lg" href="#" name="insert" value="Register">
        </div>
        </form>
      </div>
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