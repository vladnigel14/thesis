<?php 
$output='';
if(isset($_POST['search'])){
	require_once 'dbhelper.php';
	$searchq=$_POST['Search'];
	$searchq= preg_replace("#[^0-9a-z]#i","", $searchq);

	$query=mysqli_query($db_connection ,"SELECT * FROM db_clients where fullname like '%$searchq%'") or die("could not search");
	$count=mysqli_num_rows($query);

	if($count==0){
		$output='There was no search results';
	}else{
		while ($row=mysqli_fetch_array($query)) {
			 $cID=$row['clientID'];
			 $fname=$row['fullname'];
			 $con=$row['contact'];
			 $add=$row['address'];
			 $regdec=$row['regdeceased'];

$output .='<tr background-color: #dddddd;>
          <th style="padding:8px; border: 1px solid #dddddd;
    text-align: left;" >'.$cID.'</th>
          <th style="padding:8px; border: 1px solid #dddddd;
    text-align: left;">'.$fname.'</th>
          <th style="padding:8px; border: 1px solid #dddddd;
    text-align: left;">'.$con.'</th>
          <th style="padding:8px; border: 1px solid #dddddd;
    text-align: left;">'.$add.'</th>
          <th style="padding:8px; border: 1px solid #dddddd;
    text-align:left;">'.$regdec.'</th>
          </tr>';
			// echo $output;			 

		}
	}

}

 ?>