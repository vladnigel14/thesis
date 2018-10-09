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
  <a><input type="submit" href="#about" value="New Staff" onclick="button5()" style="outline:none;border:none;background: transparent"></a>

    <a href="#base" onclick="button5s()"><input type="submit" value="Old Staff" style="outline:none;border:none;background: transparent"></a>
  </div>
  </div>



 <a class="btn btn-default navbar-btn" onclick="button3()">Deceased List</a>
    <a class="btn btn-default navbar-btn" onclick="button4()">Rent Notice</a>

   <a class="btn btn-default navbar-btn" onclick="dropdown()">Staff</a>
   <div class="dropdowns">
    <div id="myDropdowns" class="dropdowns-contents">

    <a><input type="submit" href="#about" value="New Staff" onclick="buttonNewRegClient()" style="outline:none;border:none;background: transparent"></a>

    <a href="#base" onclick="buttonOldRegClient()"><input type="submit" value="Old Staff" style="outline:none;border:none;background: transparent"></a>
  </div>
  </div>



  
  
  <div class="">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <form class="form-inline m-5">
            <input class="form-control mr-2 m-0" type="text" placeholder="Search">
            <button class="btn btn-primary" type="submit">Search</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="m-5 p-5">
    <div class="container"></div>
  </div>


<!--- Map module-->
  <div class="p-0">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <form method="POST" action="PHP/mapfunction.php">
        
              <input type="ID" class="form-control m-2" placeholder="Deceased ID" name="deceasedID">
            
              <input type="username" class="form-control m-2" placeholder="Firtsname" name="Firtsname">
            
              <input type="username" class="form-control m-2" placeholder="Lastname" name="Lastname"> 

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
<input type="hidden" class="form-control m-2"  name="selected_text" id="selected_text" value="" /><br>
  
   <label for="exampleInputEmail1" class="m-1">Upload Photo here</label>
  <input type="hidden" name="size" class="m-2"   value="1000000">
  <div>
    <input type="file" class="m-2"  name="image">
  </div>  
 </div>
</div>
</div>
 

<!---Buttons-->
  <div class="py-5">
    <div class="container">
      <div class="row">
        <form>
        <div class="col-md-4" style="transition: all 0.25s;">
            <input type="submit" value="insert" name="insert" class="btn btn-primary btn-block btn-lg">
        </div>
       
        <div class="col-md-4">
          <a class="btn btn-primary btn-block btn-lg" href="#" name="delete">Delete</a>
        </div>
         </form>
         </form>
      </div>
    </div>
  </div>

<!--- End of map module-->




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