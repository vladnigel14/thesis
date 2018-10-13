 <?php
         if(isset($_POST['delete'])) {
            require_once 'dbhelper.php';
            
           
            $emp_id = $_POST['emp_id'];
            
            $sql = "DELETE FROM employee WHERE emp_id = $emp_id" ;
            mysql_select_db('test_db');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not delete data: ' . mysql_error());
            }
            
            echo "Deleted data successfully\n";
            
            mysql_close($conn);
         }else {
            ?>