
<?php 

if (!$link = mysql_connect('localhost', "berner","tPxa88@8")) {
    echo 'Could not connect to mysql';
    exit;
}

if (!mysql_select_db('berner', $link)) {
    echo 'Could not select database';
    exit;
}


$item = $_GET['item'];
$qty = $_GET['qty'];
$itemDesc = $_GET['itemCodeDesc'];

$price = $_GET['c'];
$packQty = $_GET['packQty'];
$accountID = $_GET['accountID'];

$randnum = rand(1111111111,9999999999);


$sql = "INSERT INTO `temp_order`(`id`,`accountID`, `itemNo`, `qty`, `itemDesc`, `price`, `packQty`) VALUES ('" .$randnum. "', '".$accountID ."','".$item ."','".$qty ."','".$itemDesc ."','".$price ."','".$packQty."')";
//echo $sql;

$result = mysql_query($sql, $link);



mysql_free_result($result);

$sql2    = "SELECT COUNT(*) AS NumberOfOrders FROM `temp_order` WHERE `accountID`='".$accountID."'" ;


$result2 = mysql_query($sql2, $link);

$data = mysql_fetch_assoc($result2);
echo json_encode($data);

?>
