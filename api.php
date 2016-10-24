<?php 

  //--------------------------------------------------------------------------
  // 1) Connect to mysql database
  //--------------------------------------------------------------------------
  //include 'DB.php';
  //$con = mysql_connect("localhost","berner","tPxa88@8");
  //$dbs = mysql_select_db($databaseName, $con);


  //--------------------------------------------------------------------------
  // 2) Query database for data

/*
  $str = "SELECT `description` FROM $tableName WHERE `name` LIKE 'Abrasives' ";
  $result = mysql_query($str);            //query
  echo $con;
  $array = mysql_fetch_row($result);                        //fetch result    
*/


if (!$link = mysql_connect('localhost', "berner","tPxa88@8")) {
    echo 'Could not connect to mysql';
    exit;
}

if (!mysql_select_db('berner', $link)) {
    echo 'Could not select database';
    exit;
}

//$group = $_SERVER['QUERY_STRING'];
//parse_str($_SERVER['QUERY_STRING']);
//$group = 'Drills';
//echo $group;
//echo "string";
//var $url = $_SERVER['QUERY_STRING'];

//$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
//var_dump(parse_url(( $actual_link, PHP_URL_QUERY));
$group = $_GET['group'];
$sql    = "SELECT * FROM `GroupCodes` WHERE `name` LIKE '".$group."'";
//$sql    = "SELECT `description` FROM `GroupCodes` WHERE `name` LIKE 'Electrical'";

//echo $sql;
$result = mysql_query($sql, $link);

// $array = mysql_fetch_row($result);  


while($row = mysql_fetch_assoc($result)){
     $array[] = $row;
  //   echo $row;
}




if (!$result) {
    echo "DB Error, could not query the database\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}

//while ($row = mysql_fetch_assoc($result)) {
//    $array.push($row['foo']);/
//}
echo json_encode($array);

mysql_free_result($result);


  //--------------------------------------------------------------------------
  // 3) echo result as json 
  //--------------------------------------------------------------------------
  //echo json_encode($array);

?>
