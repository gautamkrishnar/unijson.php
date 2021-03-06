<?php
/*
 * DB Credentials:
 *      Just edit the credentials below to your MySQL DB credentials....
 */
$db='db'; // Database Name
$table='table'; // Table Name
$host='localhost'; // Database Host
$usn='root'; // Database User
$pss=''; // Database Password
$con = mysqli_connect($host,$usn,$pss,$db);
if(mysqli_connect_error())
{
	echo "Error establishing a database connection. Please check your database credentials...";
	die();
	
}

/*
 *  Getting all the column names:
 */
$query="desc ".$table;
$result=$con->query($query);
$columns=array( );
while($row=mysqli_fetch_array($result))
    {
        array_push($columns,$row[0]);
    }

/*
 *  Filtering and sorting
 * 	Just comment out the code below to enable filtering and sorting. Dont forget to comment out the actual
 *  $query variable after using a filter.
 */
 //$query="select * from ".$table." where 1 limit 0,10"; //Uncomment to add any limits...
 //$ordercol="Column_name";// Column name to sort the db
 //$query="select * from ".$table." where 1 order by '".$ordercol."' asc"; //Uncomment 2 lines to enable sorting.
 
 /*
 *  Getting the entire table:
 */
$query="select * from ".$table." where 1";
$result=$con->query($query);
$json_result = array();
$ctr=0;
while($row=mysqli_fetch_assoc($result))
    {  /*
        * Using counter as UID. If you don't need this just comment out this line.
        */
        $i=0;
        $arr['json_uuid']=$ctr;
        $ctr=$ctr+1;
        /**/
        while ($i<count($row)) {
            $arr[$columns[$i]]=$row[$columns[$i]];
            $i=$i+1;
        }

        array_push($json_result,$arr);
    }
    //echo "<pre>".json_encode($json_result,JSON_PRETTY_PRINT)."</pre>"; //For pretty printing JSON
    echo json_encode($json_result);
?>