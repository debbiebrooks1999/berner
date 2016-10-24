<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <title>build</title>
    <meta content="" name="description"><?php include 'includes/head.php'; ?>
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <div class="container">
        <div class="breadcrumb">
            <div>
                HOME /
            </div>
            <div class="group"></div>
            <div class="subGroup"></div>
        </div>
        <div align="center" class="content">
            <div class="header">
                <div class="side-col">
                    <h1 class="group">BROCHURES</h1>
                    <ul class="menuItems"></ul>
                </div>
                <div class="main-col">
                    <h2 class="group">BROCHURES</h2>
                    <div class="results">
                        <ul class='results'>
                            <li class='details'></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--
<script src=scripts/c35baf9e.vendor.js></script> <!== Google Analytics: change UA-XXXXX-X to be your site's ID. -->
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


    var element = $('.menuItems');
    var element2 = $('.groupItems');



    $(localStorage.getItem("editedContent")).appendTo(element);
    $(localStorage.getItem("editedContent2")).appendTo(element2);


    var item = getParameterByName('item');
    var itemDesc = getParameterByName('desc');
    localStorage.setItem("subGroup", itemDesc);
    localStorage.setItem("item", item);
    var arrPrices =[];
    var arrKeyCode = [];
    var arrDesc = [];
    var arrInStock = [];
    var arrPackQty = [];


    //set the li as active

    //$('li').html(groupCode).addClass('active');
    // console.log('blah');
    //var element = $('li').filter(':contains("' + groupCode + '")');
    $('li').filter(':contains("' + itemDesc + '")').addClass('active');


    /*
    setTimeout(function(){
          $("li#Drills").addClass('active');
          console.log('here::' + arrResults.length);

         
    }, 4000)
    */
    var strSubGroup;
    var content = "";


    // Retrieve
    document.querySelector(".group").innerHTML = " / " + localStorage.getItem("group") + " / "; 
     $(".group").html(localStorage.getItem("group")); 
    document.querySelector(".subGroup").innerHTML = " / " + localStorage.getItem("subGroup"); 
    $(".groupHeader").html("&nbsp;/&nbsp;"+localStorage.getItem("group")); 
      $(".subgroupHeader").html(localStorage.getItem("subGroup")); 


    $.ajax({ 

      url: 'prod.php?item='+item,                  //the script to call to get data          
    //  data: "group="+ groupCode,                      //you can insert url argumnets here to pass to api.php for example "id=5&parent=6"
      dataType: 'json',
      type: "POST",                //data format      
      success: function (data) {
    //        console.log('yes');
          connect(data);
          // setTimeout(function(){
          //     returnData();
          // },2000)
          
         // var x = 0;
         // var intervalID = setInterval(function () {

             // 
         //    location.reload();
         //    if (++x === 3) {
         //        window.clearInterval(intervalID);
         //    }
         // }, 300);
        }
      });
    var c = 0;
    var j = 0;
    var iterations;
    var interval;
    function connect(data){

    $(data).each(function(key, value) {

    //  getPrice(value.KeyCode); 

    arrKeyCode.push(value.KeyCode);
    arrDesc.push(value.Desc);
    c++;

    });


    iterations = 0;
    interval = setInterval(foo, 500);

    }


    function foo() {
    console.log('foo');

    getPrice(arrKeyCode[iterations], iterations);
    //  console.log('fcn::amt' + amt);

    // returnData();

    // arrPrice.push(getPrice(value.KeyCode)); 
    iterations++;
    if (iterations >= arrKeyCode.length)
        clearInterval(interval);
    }

    //call getPrice with arrKeyCode at setintervale times? then at the end call 

    function callForPrice(){
        

    }

    function returnData(){

    for (var i = 0; i < arrPrices.length; i++) {


     content =  content + "<li class='listResults'><img class='prodImage' src='productImages/th/"  + arrKeyCode[i] +  ".jpg'><br>" + arrDesc[i] + "<br><b>£" + arrPrices[i] + "<\/b><br><div data-desc='"+ arrDesc[i]+ "' data-c='"  + arrPrices[i] + "' data-packQty='" + arrPackQty[i] + "' data-id='"+ arrKeyCode[i] +"' class='addToCartDirect'>Add to cart <\/div><a data-desc='"+ arrDesc[i]+ "' data-s='"  + arrInStock[i] + "' data-c='"  + arrPrices[i] + "' data-packQty='" + arrPackQty[i] + "' data-id='"+ arrKeyCode[i] +"' id="+ arrKeyCode[i]+ " class='details'>Details<\/a><\/li>";

    }
    //var temp  = content.replace("undefined", ""); 
    //var editedContent = encodeURI(temp);
    // href='prod_result.php?s=" + arrInStock[i] + "&c=" + arrPrices[i] + "&itemCode=" + arrKeyCode[i] + "&pq=" + arrPackQty[i] +"&itemDesc="+ arrDesc[i]  +"' 
    var temp  = content.replace("undefined", ""); 
    var editedContent = temp;


    strSubGroup = "<ul class='results'>" + editedContent + "<\/ul>";
    $(strSubGroup).appendTo($('.results'));

    }


    /*
    TO DO - check if in stock
    */

    function getPrice(PartNUmber, i){

    var proxy = 'proxy.php';
    var returnThePrice;
    var isInStock = true;

    //var arrContent =[]


    // if(localStorage.getItem("username")==''){
    //   localStorage.setItem("username",'Web5');
    // }

    //  localStorage.setItem("username","Web5"); 
    var orderString = '<ow-e:Envelope xmlns:ow-e="http://www.carpartstechnologies.com/openwebs-envelope" revision="2.0"> <ow-e:Header> <ow-e:EndPoints> <ow-e:To> <ow-e:Id>100000<\/ow-e:Id> <\/ow-e:To> <ow-e:From> <ow-e:Id>200000<\/ow-e:Id> <\/ow-e:From> <\/ow-e:EndPoints> <ow-e:Properties> <ow-e:SentAt>2010-01-01T12:34:56-00:00<\/ow-e:SentAt> <ow-e:Topic>AddRequestForQuote<\/ow-e:Topic> <\/ow-e:Properties> <ow-e:SecurityInfo> <ow-e:Username>User<\/ow-e:Username> <ow-e:Password>Pass<\/ow-e:Password> <\/ow-e:SecurityInfo> <\/ow-e:Header> <ow-e:Body> <ow-o:AddRequestForQuote xmlns:oa="http://www.openapplications.org/oagis" xmlns:ow-o="http://www.carpartstechnologies.com/openwebs-oagis" revision="2.0"> <oa:ApplicationArea> <oa:Sender> <oa:Component/> <\/oa:Sender> <oa:CreationDateTime>2010-01-01T12:34:56-00:00<\/oa:CreationDateTime> <\/oa:ApplicationArea> <oa:DataArea> <oa:Add confirm="Always"/> <oa:RequestForQuote> <oa:Header> <oa:DocumentIds> <oa:CustomerDocumentId> <oa:Id>E123456<\/oa:Id> <\/oa:CustomerDocumentId> <\/oa:DocumentIds> <oa:Parties> <ow-o:CustomerParty> <oa:PartyId> <oa:Id>' + localStorage.getItem("username") + '<\/oa:Id> <\/oa:PartyId> <\/ow-o:CustomerParty> <\/oa:Parties> <\/oa:Header><oa:Line> <oa:LineNumber>1<\/oa:LineNumber> <ow-o:OrderItem> <oa:ItemIds> <oa:SupplierItemId> <oa:Id>' + PartNUmber +  '<\/oa:Id> <\/oa:SupplierItemId> <\/oa:ItemIds> <ow-o:ItemInfo> <ow-o:ManufacturerInfo> <ow-o:SupplierManufacturer/> <\/ow-o:ManufacturerInfo> <\/ow-o:ItemInfo> <ow-o:QuantityInfo> <ow-o:RequestedQuantity uom="EACH">4<\/ow-o:RequestedQuantity> <\/ow-o:QuantityInfo> <ow-o:RequestLineGUID>A91B90C0-FC31-11D8-9669-0800200C9A66<\/ow-o:RequestLineGUID> <\/ow-o:OrderItem> <\/oa:Line> <\/oa:RequestForQuote> <\/oa:DataArea> <\/ow-o:AddRequestForQuote> <\/ow-e:Body> <\/ow-e:Envelope>';


    var webserUrl = proxy+'?url'+' http://217.158.172.80:6120/RW-TSLD/SellerServices.asmx' ; // Preferably write this out from server side


    var soapRequest ='<?xml version="1.0" encoding="utf-8"?><soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/"><soap:Body><ProcessMessage xmlns="http://www.mamsoft.co.uk/services/clientrequester"><envelope>' +  htmlEncode(orderString) + '<\/envelope><\/ProcessMessage><\/soap:Body><\/soap:Envelope>';

    $.ajax({
        type: "POST",
        url: webserUrl,
        contentType: "text/xml",
        dataType: "xml",
        data: soapRequest,
        headers: {
             SOAPAction: 'http://www.mamsoft.co.uk/services/clientrequester/PartSearch'
        },
        crossDomain: true,
        success: function(data, status, req){
            var xmlDoc = $.parseXML( req.responseText );
            var $xml = $( xmlDoc );
            $title = $xml.find( "ProcessMessageResult" ).text();

           // var n = $title.search('"gbp">'); 
                  //       .find ("oa\\Amount").text();
            values=$title.split('<oa:UnitPrice><oa:Amount currency="gbp">');
            one=values[0];
            two=values[1];      

            price = two.split('<\/oa:Amount>');
            arrPrices.push(price[0]);
         
            inStock =$title.split('AvailableQuantity uom="');

            inStock1 = inStock[1];

            inStock2 = inStock1.split(">");
            inStock2[0].split("<\/ow-o:AvailableQuantity>");
            var inStock3  = inStock2[0].split('"');
           // console.log(inStock2[0]);
            arrInStock.push(inStock3[0]);
            returnThePrice = inStock3[0];
            packs=$title.split('<oa:PerQuantity uom="');
            pack=packs[1];

            more = pack.split('"');
           // console.log('arrPackQty:::' + more[0]);
            arrPackQty.push(more[0]);
           returnThePrice = returnThePrice +'_' + more[0];


            content = content + "<li class='listResults'><img class='prodImage' src='productImages/th/"  + arrKeyCode[i] +  ".jpg'><br>" + arrDesc[i] + "<br><b>£" + arrPrices[i] + "<\/b><br><div data-desc='"+ arrDesc[i]+ "' data-c='"  + arrPrices[i] + "' data-packQty='" + arrPackQty[i] + "' data-id='"+ arrKeyCode[i] +"' class='addToCartDirect'>Add to cart <\/div><a data-desc='"+ arrDesc[i]+ "' data-s='"  + arrInStock[i] + "' data-c='"  + arrPrices[i] + "' data-packQty='" + arrPackQty[i] + "' data-id='"+ arrKeyCode[i] +"' id="+ arrKeyCode[i]+ " class='details'>Details<\/a><\/li>";



        },
        error: ErrorOccur
    });

    //return returnThePrice;            

            var temp  = content.replace("undefined", ""); 
            var editedContent = temp;

         //   console.log(temp);
           $('ul.results').html(editedContent);
          //  $(strSubGroup).appendTo($('.results'));


          $('.details').on('click',function(){


    localStorage.setItem("itemCode", $(this).attr('id'));
    localStorage.setItem("itemDesc", $(this).attr('data-desc'));
    localStorage.setItem("itemPrice", $(this).attr('data-c'));
    localStorage.setItem("itemStock", $(this).attr('data-s'));
    localStorage.setItem("itempackQty", $(this).attr('data-packQty'));

    setTimeout(function(){

       location.href='prod_result.php';
    },1000)



    })

    $('.addToCartDirect').on('click',function(){


    $.ajax({ 

        url: 'addCart.php?accountID='+ localStorage.getItem("username") +'&packQty='+$(this).attr('data-packQty')+'&itemCodeDesc='+$(this).attr('data-desc')+'&item='+$(this).attr('data-id')+'&qty=1'+'&c='+$(this).attr('data-c'),                  //the script to call to get data          
      //  data: "group="+ groupCode,                      //you can insert url argumnets here to pass to api.php for example "id=5&parent=6"
        dataType: 'json',                //data format      
        success: function (data) {

            $(data).each(function(key, value) {
         //      console.log(key);
                 $('#cartCount').html(value.NumberOfOrders);
            });
        
       location.href='cart.php?accountID='+localStorage.getItem("username");
       
          }
        });


    })


    }

    /*

    $('.addToCartDirect').click(function(){

    alert('added');




    });



    */
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
            alert('Loading');
        }


    });
    </script> <?php include 'includes/footer.php'; ?>
</body>
</html>