

<html>
<head></head>
<body>


  


</body>  
</html>

<?php if (!empty($_POST)): ?>

<?php 

/*

Login or change password
 - 

*/

if (!$link = mysql_connect('localhost', "berner","tPxa88@8")) {
    echo 'Could not connect to mysql';
    exit;
}

if (!mysql_select_db('berner', $link)) {
    echo 'Could not select database';
    exit;
}

$accountID = $_POST['accountID'];
$sql    = "SELECT name FROM `customers` WHERE `accountNumber` LIKE '".$accountID."' AND `id` LIKE '1'";
$result = mysql_query($sql, $link);

while($row = mysql_fetch_assoc($result)){
     $name = $row['name'];
}

if (!$result) {
   // echo "DB Error, could not query the database\n";
   // echo 'MySQL Error: ' . mysql_error();
    exit;
}

//echo json_encode($array);
mysql_free_result($result);

?>
  
 Welcome, <?php echo htmlspecialchars($name); ?>

    <!-- get name of company from accountID

     -->


<?php else: ?>
<form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
  <label>Account ID</label>>
  <input type="text" name="accountID"></input>
  <label>Password</label>>
  <input type="text" name="password" ></input>
  <button type="submit">Submit</button>>
  <input type="checkbox" id="terms">terms</input>
</form>
<?php endif; ?>
