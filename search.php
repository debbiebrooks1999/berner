<html>
<head>
  <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>

<style type="text/css">
  
   .searchResults{
    background: white;
    display: block;
    height:234px;
    z-index:8889;
    width:410px;

  }  

  body{
    margin: 0;
    padding:0;
  }
    
  #searchResultsList{
    display: block;
    padding-left: 0;
    margin-top: 0px;

  }

  li{
    list-style: none;
  }

  #prodSearchImage{
    height:40px;
    width:40px;
  }
  #search{
    width:231px;
    height:33px;
    padding:0;
    margin:0;
  }

</style>
</head>
<body>




<div class="searchResults">
  <ul id="searchResultsList">
   <?php 

      if (!$link = mysql_connect('localhost', "berner","tPxa88@8")) {
          echo 'Could not connect to mysql';
          exit;
      }

      if (!mysql_select_db('berner', $link)) {
          echo 'Could not select database';
          exit;
      }

      $letters = $_GET['let'];
   //   echo $letters;
      $sql    = "SELECT * FROM `product_part` WHERE `Desc` REGEXP '" .   $letters ."' LIMIT 5" ;
      $result = mysql_query($sql, $link);


      while($row = mysql_fetch_assoc($result)){

        // $array[]=$row'
        echo "<li id=''><a href=''><img id='prodSearchImage' src='productImages/th/".$row['KeyCode'].".jpg'><span class='description'>".preg_replace("/\w*?".preg_quote($letters)."\w*/i", "<b>$0</b>", $row['Desc'])."</span></a></li>";

      }

      if (!$result) {
          echo "DB Error, could not query the database\n";
          echo 'MySQL Error: ' . mysql_error();
          exit;
      }

  //    echo json_encode($array);
      mysql_free_result($result);



?>
  </ul>
</div>
</body>
</html>

