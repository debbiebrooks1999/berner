<?php 

  /*

  Login or change password

  */

    if (!$link = mysql_connect('localhost', "berner","tPxa88@8")) {
      echo 'Could not connect to mysql';
      exit;
    }

    if (!mysql_select_db('berner', $link)) {
      echo 'Could not select database';
      exit;
    }


     $accountID = $_GET['accountID'];
    $pass = $_GET['password'];
    $sql    = "SELECT * FROM `customers` WHERE `accountNumber` LIKE '".$accountID."' AND `password` LIKE '".$pass."'";
    $result = mysql_query($sql, $link);
 //   echo $sql;

    while($row = mysql_fetch_assoc($result)){
      // $array[]=  $row['name'] .'/'.$row['accountNumber'];
        $array[] = $row;
   //   $_SESSION["username"] = $name;
   //   $_SESSION["accountID"] = $accountID;
    }
    if (!$result) {
    // echo "DB Error, could not query the database\n";
    // echo 'MySQL Error: ' . mysql_error();
    
    exit;
    }

    echo json_encode($array);
    mysql_free_result($result);
?>