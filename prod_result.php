<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <title>build</title>
    <meta content="" name="description">
		<?php include 'includes/head.php'; ?>
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <div class="container">
        <div class="breadcrumb">
            <div></div>
            <div class="group"></div>
            <div class="subGroup"></div>
        </div>
        <div class="resultItem"></div>
        <div class="addToCartQty">
            <label for="male">Qty</label> <input id="quantity" name="quantity"
            size="4" value="1">
            <div id="submit">
                <a class="details">ADD TO CART</a>
            </div>
        </div>
    </div><!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script> 
    <script id="source" type="text/javascript">

      $(function () 
    {

    /*
    $('.dropdown-menu li').on('click', function(){

    if($(this).hasClass('sub')){
      return;
    }else{
    groupCode = $(this).html();
    location.href = 'products.html?group='+groupCode;

    }


    })

    $('.sub').on('click', function(){
    alert('helo');
    })
    */
    var itemCode = localStorage.getItem("itemCode");

    var itemCodeDesc = localStorage.getItem("itemDesc");
    var thePrice = localStorage.getItem("itemPrice");
    var theStock = localStorage.getItem("itemStock");
    var packQty = localStorage.getItem("itempackQty")
    var stockCount;

    // Store



    var strSubGroup;
    var content = "";
    var theCopy = '';


    $.ajax({ 

      url: 'item.php?item='+itemCode,                  //the script to call to get data          
      dataType: 'json',                //data format      
      success: function (data) {
          
        setTimeout(function(){
          connect(data);
        },1000)
     
      }

    });


    function returnData(){
    alert('returnData')
    }


    function connect(data){

    console.log('connect yes');

    $(data).each(function(key, value) {

          console.log('value.NCode' + value.NCode);




         
        if( value.NCode=='APPLICATION AREAS')
             theCopy =  theCopy + "<b>Application areas<\/b><br>" + value.Description +"<\/br>";
        if( value.NCode=='CHARACTERISTICS')
             theCopy =  theCopy + "<b>Characteristics<\/b><br>" + value.Description +"<\/br>";
        if( value.NCode=='DIRECTIONS OF USE')
             theCopy =  theCopy + "<b>Directions of use<\/b><br>" + value.Description +"<\/br>";
        if( value.NCode=='HINTS')
               theCopy =  theCopy + "<b>Hints<\/b><br>" + value.Description +"<\/br>";
        if( value.NCode=='PRODUCT DETAILS')
             theCopy =  theCopy + "<b>Product Details<\/b><br>" + value.Description +"<\/br>";
        if( value.NCode=='TECHNICAL DATA')
             theCopy =  theCopy + "<b>Technical Data<\/b><br>" + value.Description +"<\/br>";

      

          /*  */
    })

    if(theStock !=0){
    theStock = 'IN STOCK:'+ theStock; 
    }else{
    theStock = "<span style='color:red'>OUT OF STOCK<\/span>";
    } 

    content = content + '<div class="mainImage"><img src="productImages/'+ itemCode + '.jpg"><\/div>';
    content = content + '<div class="mainCopy">';
    content = content + '<div class="name">' + itemCodeDesc + '<\/div>';
    content = content + '<div class="price"> £' + thePrice + '<\/div>';
    content = content + '<div class="number">' + itemCode + '<\/div>';
    content = content + '<div class="stock"> ' + theStock + '<\/div>';
    content = content + '<div class="copy">' + theCopy + '<\/div><\/div>';

    var editedContent = content.replace("undefined", ""); 
    strSubGroup = "<p>" + editedContent + "<\/p>";
     console.log('strSubGroup' + strSubGroup);
    $(strSubGroup).appendTo($('.resultItem'));
    }





    $('.details').click(function(){

    qty =$('#quantity').val();

    $.ajax({ 

        url: 'addCart.php?accountID='+ localStorage.getItem("username") +'&packQty='+packQty+'&itemCodeDesc='+itemCodeDesc+'&item='+itemCode+'&qty='+qty+'&c='+thePrice,                  //the script to call to get data          
      //  data: "group="+ groupCode,                      //you can insert url argumnets here to pass to api.php for example "id=5&parent=6"
        dataType: 'json',                //data format      
        success: function (data) {

            $(data).each(function(key, value) {
         //      console.log(key);
                 $('#cartCount').html(value.NumberOfOrders);
            });
        
            
          }
        });

    setTimeout(function(){
    location.href='cart.php?accountID='+ localStorage.getItem("username");
    console.log('move it');

    },1000)

    });

    function disconnect(){
    //where an li has children - remove them
    }



    function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
    }

    function htmlEncode(orderString){
        //create a in-memory div, set it's inner text(which jQuery automatically encodes)
        //then grab the encoded contents back out.  The div never exists on the page.
        return $('<div/>').text(orderString).html();
    }

    function ErrorOccur(data, status, req) {
        alert('ErrorOccur'+req.responseText + " " + status);
    }


    });
    </script> 
    <?php include 'includes/footer.php'; ?>
</body>
</html>