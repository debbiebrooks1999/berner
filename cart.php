<!doctype html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <title>build</title>
    <meta name="description" content="">

		<?php include 'includes/head.php'; ?>
    <style type="text/css">
      #example-number-input{
        width:40%;
      }
       .thanks{
        margin-top: 10px;
        margin-bottom: 10px;
        color: #428bca;
        text-align: center;
        background:lightgrey;
        line-height: 32px;
        font-weight: bold;
      }
      .success{
        color: #428bca;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <!--[if lt IE 10]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


		<?php include 'includes/header.php'; ?>
    
    <div class="container" id="theContent">
      <div class="row shallow">
      	<ol class="breadcrumb">
          <li><a href="index.php">Home</a></li>
          <li class="active">Cart</li>
        </ol>
      </div> <!-- row -->
      
      <div class="row">
      	<div class="col-md-12">
        	<h1 class="pageTitle">Your shopping cart</h1>
        </div> <!-- col-md-12 -->
      </div> <!-- row -->
      
 			<div class="row cart">
      	<div class="col-md-9">
        	<p>Review your order below. Click place order - your order will be sent through and an invoice will be raised against your Berner Account.</p>
        </div> <!-- col-md-9 -->
        <div class="col-md-3">
          <div class="right">
          	<button type="button" class="btn btn-default grey-btn">Save Order</button>
          	<button type="button" id="update" class="btn btn-default">Update Cart</button>
          </div> <!-- right -->
        </div> <!-- col-md-3 -->
      </div> <!-- row -->
      
      <div class="row cart">
      	<div class="col-md-12">
       		<div class="table-responsive">          
            <table class="table borderless">
              <thead>
                <tr>
                  <th>&nbsp;</th>
                  <th>Product Code</th>
                  <th>Description</th>
                  <th>Qty</th>
                  <th>Pack Qty</th>
                  <th>Net Price</th>
                  <th>Net Value</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
      
<?php 

  if (!$link = mysql_connect('localhost', "berner","tPxa88@8")) {
      echo 'Could not connect to mysql';
      exit;
  }

  if (!mysql_select_db('berner', $link)) {
      echo 'Could not select database';
      exit;
  }

  $accountID = $_GET['accountID'];
 // echo '$accountID::'. $accountID;
  //$accountID = [GET accountID

  //$sql = "INSERT INTO `temp_order`(`accountID`, `itemNo`, `qty`) VALUES ([".$_SESSION["username"] ."],[".$item ."],[".$qty ."])";
  $sql    = " SELECT * FROM `temp_order` WHERE `accountID` LIKE '".$accountID."' AND `orderCompleteID` = ''" ;


  $result = mysql_query($sql, $link);

  // $array = mysql_fetch_row($result);  

  //need to <oa:PerQuantity uom=" add missing fields
  $i = 0;
  $nv = 0;
  $arrayTotPrice[] = 0;
  $array[] = 0;
  $arrayQty[] = 0;

  while($row = mysql_fetch_assoc($result)){

    $i++;

    $nv = $row['price'] * $row['qty'];
    $arrayTotPrice[] = $nv; 
    $array[]=$row['itemNo'];
    $arrayQty[]=$row['qty'];
   // echo $row['qty'];

    echo '<tr> <td><img src="productImages/'.$row['itemNo']. '.jpg" width="90" height="90" alt="Product Image"/></td> <td>'.$row['itemNo'].'</td> <td>'.$row['itemDesc'].'</td> <td> <div class="form-group row"> <div class="col-md-12"> <input class="form-control" type="number" value="'.$row['qty'].'" id="example-number-input"> </div> </div> </td> <td>'.$row['packQty'].'</td> <td>&pound;<span class="priceRow">'.$row['price'].'</span></td> <td>&pound;<span id="row_'.$i.'" class="nv">'.$nv.'</td> <td><img class="delete" id='.$row['id']. ' src="images/in-page/e-commerce/cross.jpg" width="22" height="22" alt="Cross"/></td> </tr>';

  }

  if (!$result) {
      echo "DB Error, could not query the database\n";
      echo 'MySQL Error: ' . mysql_error();
      exit;
  }

  mysql_free_result($result);

?>

              </tbody>
              <tfoot>
                <tr>
                  <td colspan="2" class="bg">
                  	<p><strong>Invoice Details</strong></p>
                   <p>
                     <span id="name1_1"> A N Company</span><br>
                     <span id="add1_1"> 123 A Street</span><br>
                     <span id="add2_1"> Any Town</span><br>
                     <span id="add3_1">County</span><br>
                     <span id="add4_1">AN1 BXY</span><br>
                     <span id="add5_1">AN1 BXY</span><br>
                     <span id="pcode_1"> Any Town</span><br>
                  	</p>
                  </td>
                  <td colspan="3">&nbsp;</td>
                  <td class="bg strong">
                  	<p>Total Value</p>
                   	<p>Delivery</p>
                    <p>VAT</p>
                    <p>Total Due</p>            	
                  </td>
                  <td class="bg strong text-right">
                  	<p>&pound;<span id="totVal">125.40</span></p>
                    <p>&pound;<span id="delVal">0.00</span></p>
                    <p>&pound;<span id="vatVal">25.80</span></p>
                    <p>&pound;<span id="totDue">150.48</span></p>
                  </td>
                  <td class="bg">&nbsp;</td>
                </tr>
              </tfoot>
            </table>
          </div> <!-- table-responsive -->
        </div> <!-- col-md-12 -->
      </div> <!-- row -->
            
    	<div class="row cart">
      	<div class="col-md-12">
        	<h3>Confirm Delivery Address for this Order</h3>
          <form>
            <div class="row">
              <div class="col-md-3">
              	<div class="bg">
                  <div class="radio">
                    <input type="radio" name="deliveryAddress" id="deliveryAddress1" value="Delivery Address 1">
                  </div> <!-- radio -->
                  <p>
                    <strong>Delivery Address 1</strong><br/>
                      <span class="name1_1"> A N Company</span><br/>
                     <span class="add1_1"> 123 A Street</span><br/>
                     <span class="add2_1"> Any Town</span><br/>
                     <span class="add3_1">County</span><br/>
                     <span class="add4_1">AN1 BXY</span><br/>
                     <span class="pcode_1"> Any Town</span><br/>
                  </p>
                </div> <!-- bg -->
              </div> <!-- col-md-3 -->

              <div class="col-md-3">
              	<div class="bg">
                  <div class="radio">
                    <input type="radio" name="deliveryAddress" id="deliveryAddress2" value="Delivery Address 2">
                  </div> <!-- radio -->
                  <p>
                    <strong>Delivery Address 2</strong><br/>
                     <span id="name1_2"> A N Company</span><br/>
                     <span id="add1_2"> 123 A Street</span><br/>
                     <span id="add2_2"> Any Town</span><br/>
                     <span id="add3_2">County</span><br/>
                     <span id="add4_2">AN1 BXY</span><br/>
                     <span id="pcode_2"> Any Town</span><br/>
                  </p>
                </div> <!-- bg -->
              </div> <!-- col-md-3 -->

            </div> 

          </form>
          <h3>If you can't see the correct delivery address above or you would like to add a delivery address, please call our Customer Service team on 01383 729814</h3>
        </div> <!-- col-md-12 -->
      </div> <!-- row -->
      
      <div class="row cart">
      	<div class="col-md-3 col-sm-6 col-xs-12 right">
        	<div class="right spaceFix">
          	<button type="button" class="btn btn-default grey-btn">Save Order</button>
          	<button type="button" id="updateCart" class="btn btn-default">Update Cart</button>
          </div> <!-- right -->
          <div class="right">
          	<button id="cancel" type="button" class="btn btn-default red-btn">Cancel</button>
          	<button id="submitCart" type="button" class="btn btn-default">Submit Order</button>
          </div> <!-- right -->
        </div> <!-- col-md-3 col-sm-6 col-xs-12 -->
      </div> <!-- row -->
      
      <div class="row cart">
      	<div class="col-md-3 col-sm-6 col-xs-12">
        	<p class="grey-text">
            Bank of Scotland Plc A/C No: 00845457<br/>
            Sort Code: 80-06-55<br/>
            SWIFT No. BOFSGB21305<br/>
            IBAN No.<br/>
            GB48 BOFS 8006 5500 8454 57
          </p>
        </div> <!-- col-md-3 col-sm-6 col-xs-12 -->
        <div class="col-md-6 col-sm-6 col-xs-12">
        	<p class="grey-text">
            All damages / shortages must be reported to customer services,<br/>
            Berner UK Ltd within 3 working days from the date of despatch.<br/>
            T: +44 (0) 01383 729814 F: +44 (0) 01383 620079<br/>
            Goods sold based on Berner Uk Ltd Terms and Conditions of Sale,<br/>
            available on request. Goods remain the property of Berner UK Ltd<br/>
            until paid in FULL. Goods returned after 30 days may be subject to<br/>
            15% handling charge. TERMS: Strictly 30 days NETT.
        	</p>
        </div> <!-- col-md-6 col-sm-6 col-xs-12 -->
      </div> <!-- row -->
    
    </div> <!-- container -->
    
    <?php include 'includes/footer.php'; ?>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
<script type="text/javascript">
  $(function () 
  {
      

    var arrQty = [];
    var arrTotal = [];
    var arrUpdateTotals = [];
    var isUpdated = false;
    $('#cartCount').html(<?php echo $i ?>);  
    localStorage.setItem("cartCount",<?php echo $i ?>);

    $('#name1_1').html(localStorage.getItem("accName1"));
    $('#add1_1').html(localStorage.getItem("accAddra1"));
    $('#add2_1').html(localStorage.getItem("accAddrb1"));
    $('#add3_1').html(localStorage.getItem("accAddrc1"));
    $('#add4_1').html(localStorage.getItem("accAddrd1"));
    $('#add5_1').html(localStorage.getItem("accAddre1"));
    $('#pcode_1').html(localStorage.getItem("accPCode1"));


    $('.name1_1').html(localStorage.getItem("accName1"));
    $('.add1_1').html(localStorage.getItem("accAddra1"));
    $('.add2_1').html(localStorage.getItem("accAddrb1"));
    $('.add3_1').html(localStorage.getItem("accAddrc1"));
    $('.add4_1').html(localStorage.getItem("accAddrd1"));
    $('.add5_1').html(localStorage.getItem("accAddre1"));
    $('.pcode_1').html(localStorage.getItem("accPCode1"));

    $('#name1_2').html(localStorage.getItem("accName2"));
    $('#add1_2').html(localStorage.getItem("accAddra2"));
    $('#add2_2').html(localStorage.getItem("accAddrb2"));
    $('#add3_2').html(localStorage.getItem("accAddrc2"));
    $('#add4_2').html(localStorage.getItem("accAddrd2"));
    $('#add5_2').html(localStorage.getItem("accAddre2"));
    $('#pcode_2').html(localStorage.getItem("accPCode2"));


    //set the value procies
    var isIreland = false;
    if(localStorage.getItem("accAddre1").indexOf("ireland") != -1){
    isIreland = true;
    }

    //str.indexOf("ireland");
    var num = <?php echo array_sum($arrayTotPrice) ?>;
    var n = num.toFixed(2); 

    var nandv = (n/100)*20;
    var delVal = 0;

    if(n > 75){
      delVal = 0;
    }
    if((n < 75) && (isIreland)){
      //add partnumber 
      delVal = 9;
    }
    if((n < 75) && (!isIreland)){
      //add partnumber 
      delVal = 5.95;
    }

  var tot =  Number(nandv) + Number(n) + Number(delVal);
  console.log(tot);
  var total = tot.toFixed(2);
  var nandv2 = nandv.toFixed(2);


  $('#totVal').html(n);

  $('#delVal').html(delVal);
  $('#vatVal').html(nandv2);
  $('#totDue').html(total);
//updateTotals()
  //<Addre>N.IRELAND</Addre>

  /**/

  function updateTotals(){

  console.log('in updateTotals');
    isUpdated = true;

  
    $('.form-control').each(function(){

      arrQty.push($(this).val());
     //  console.log("form-control::");
      
    });

    $('.priceRow').each(function(){
       arrTotal.push($(this).text());
   //           console.log("priceRow::");

    });

 
    console.log("arrTotal.length"+ arrTotal.length);

    for (var i = 0; i < arrTotal.length; i++) {

      console.log("arrQty[i]::"+ arrQty[i])
      console.log("arrTotal[i]::"+ arrTotal[i])


      var num = arrQty[i] * arrTotal[i];

      console.log("num::"+ num);

      var str = String(i+1);

      console.log("str::"+ str);
      //var elem = $('span#row_'+ str);
   //   $('span#row_'+ str).html(String(num)); 
      console.log("$('#row_'+ str)::"+ $('#row_'+ str));
      //     $('span#row_'+ str).text('test'); 
      console.log("str::"+ str);

      arrUpdateTotals.push(num);

    }
    
    var n = arrUpdateTotals.reduce(function(arrUpdateTotals, b) { return arrUpdateTotals + b; }, 0);
    console.log('n::'+n);
    var nandv = (n/100)*20;
    console.log('nandv::'+nandv);

    var nandv2 = nandv.toFixed(2);


   var delVal = 0;

    if(n > 75){
      delVal = 0;
    }
    if((n < 75) && (isIreland)){
      //add partnumber 
      delVal = 9;
    }
    if((n < 75) && (!isIreland)){
      //add partnumber 
      delVal = 5.95;
    }

  var tot =  Number(nandv) + Number(n) + Number(delVal);
  console.log(tot);
    var totToTwo = tot.toFixed(2);

    $('#totVal').html(totToTwo);

     $('#delVal').html(delVal);
     $('#vatVal').html(nandv2);
     $('#totDue').html(total);

     for (var i = 0; i < arrUpdateTotals.length; i++) {
             $('span#row_'+ (i+1)).html(arrUpdateTotals[i]); 

     }


}

$('#update, #updateCart').on('click', function(){

 // console.log('click');

  updateTotals();

})

$('.delete').on('click', function(){
        
  $.ajax({ 

    url: 'removeCart.php?id='+$(this).attr('id'),                  //the script to call to get data          
    dataType: 'json',                //data format      
    success: function (data) {
      }
  });

  setTimeout(function(){
     location.reload();
  },1000);

})

//cancel order
// $('#cancel').on('click', function(){

// }

//send order
 var ordNum;
 $('#submitCart').on('click', function(){

/*
    $array[]=$row['itemNo'];
    $arrayQty[]=$row['qty'];
*/
    if(isUpdated){
      
      var arrItemQty = arrQty;

    }
    if(!isUpdated){
      
      var arrItemQty = <?php echo json_encode($arrayQty) ?>;

    }

    var arrItems = <?php echo json_encode($array) ?>;
    ordNum = <?php echo $randnum = rand(1111111111,9999999999); ?>;
    var str = makeLine(arrItems,arrItemQty);
    var oS = makeOrderString(str,ordNum);
    var proxy = 'proxy.php';
    var webserUrl = proxy+'?url'+'217.158.172.80:6120/RW-TSLD/SellerServices.asmx' ; // Preferably write this out from server side

var newStr = "<p class='thanks'>Thank you for your order.</p><p class='success'>Your Order reference is :" + ordNum + ".</p><p class='success'>Your order has been submitted.  You will receive an email once the order has been processed.<br>If you have any issues with this order please call our <b>Customer Service team on 01383 729814</b> contact us quoting the reference number above.";
    //  alert(newStr);
    $('#theContent').html(newStr);





    var soapMessage ='<?xml version="1.0" encoding="utf-8"?><soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/"><soap:Body><ProcessMessage xmlns="http://www.mamsoft.co.uk/services/clientrequester"><envelope>' +  htmlEncode(oS) + '</envelope></ProcessMessage></soap:Body></soap:Envelope>';

      $.ajax({
          type: "POST",
          url: webserUrl,
          contentType: "text/xml",
          dataType: "xml",
          data: soapMessage,
          headers: {
               SOAPAction: 'http://www.mamsoft.co.uk/services/clientrequester/ProcessMessage',
               'X-Proxy-URL': 'http://217.158.172.80:6120/RW-TSLD/SellerServices.asmx'
          },
          crossDomain: true,
          success: SuccessOccur,
          error: ErrorOccur
      });
  /**/
});

/*  */
function SuccessOccur(data, status, req) {

     $.ajax({ 

        url: 'updateCart.php?orderCompleteID='+ordNum+'&mode=complete'+ '&accountId='+ localStorage.getItem("username"),                  //the script to call to get data          
      //  data: "group="+ groupCode,                      //you can insert url argumnets here to pass to api.php for example "id=5&parent=6"
        dataType: 'json',                //data format      
        success: function (data) {
       
          }
        });

}

function ErrorOccur(data, status, req) {
  alert('ErrorOccur'+req.responseText + " " + status);
}


function htmlEncode(orderString){
  //create a in-memory div, set it's inner text(which jQuery automatically encodes)
  //then grab the encoded contents back out.  The div never exists on the page.
  return $('<div/>').text(orderString).html();
}


function makeLine(arr, arrItemQty){

  var line = '';
  //loop through order array
  for (var i = 0; i < arr.length; i++) {
     line = line + '<oa:Line> <oa:LineNumber>' + (i + 1) + '</oa:LineNumber> <ow-o:OrderItem> <oa:ItemIds> <oa:SupplierItemId> <oa:Id>' + arr[i]+ '</oa:Id> </oa:SupplierItemId> </oa:ItemIds> <ow-o:ItemInfo> <ow-o:ManufacturerInfo> <ow-o:SupplierManufacturer/> </ow-o:ManufacturerInfo> </ow-o:ItemInfo> <ow-o:RequestLineGUID>AA902230-FC32-11D8-9669-0800200C9A66</ow-o:RequestLineGUID> </ow-o:OrderItem> <oa:OrderQuantity uom="EACH">'+arrItemQty[i]+'</oa:OrderQuantity> </oa:Line>';
  };
  return line;

}

function makeLinePostage(item){

  var line = '';
    line = line + '<oa:Line> <oa:LineNumber>' + (i + 1) + '</oa:LineNumber> <ow-o:OrderItem> <oa:ItemIds> <oa:SupplierItemId> <oa:Id>' + item + '</oa:Id> </oa:SupplierItemId> </oa:ItemIds> <ow-o:ItemInfo> <ow-o:ManufacturerInfo> <ow-o:SupplierManufacturer/> </ow-o:ManufacturerInfo> </ow-o:ItemInfo> <ow-o:RequestLineGUID>AA902230-FC32-11D8-9669-0800200C9A66</ow-o:RequestLineGUID> </ow-o:OrderItem> <oa:OrderQuantity uom="EACH">1</oa:OrderQuantity> </oa:Line>';

  return line;

}

function makeOrderString(lineLoop, ordNum){


   var orderString = '<ow-e:Envelope xmlns:ow-e="http://www.carpartstechnologies.com/openwebs-envelope" revision="2.0"> <ow-e:Header> <ow-e:EndPoints> <ow-e:To> <ow-e:Id>100000</ow-e:Id> </ow-e:To> <ow-e:From> <ow-e:Id>200000</ow-e:Id> </ow-e:From> </ow-e:EndPoints> <ow-e:Properties> <ow-e:SentAt>2010-01-01T12:34:56-00:00</ow-e:SentAt> <ow-e:Topic>ProcessPurchaseOrder</ow-e:Topic> </ow-e:Properties> <ow-e:SecurityInfo> <ow-e:Username>User</ow-e:Username> <ow-e:Password>Pass</ow-e:Password> </ow-e:SecurityInfo> </ow-e:Header> <ow-e:Body> <ow-o:ProcessPurchaseOrder xmlns:ow-o="http://www.carpartstechnologies.com/openwebs-oagis" xmlns:oa="http://www.openapplications.org/oagis" revision="2.0"> <oa:ApplicationArea> <oa:Sender> <oa:Component/> </oa:Sender> <oa:CreationDateTime>2010-01-01T12:34:56-00:00</oa:CreationDateTime> </oa:ApplicationArea> <oa:DataArea> <oa:Process acknowledge="Always"/> <oa:PurchaseOrder> <ow-o:Header> <oa:DocumentIds> <oa:CustomerDocumentId> <oa:Id>' + ordNum + '</oa:Id> </oa:CustomerDocumentId> </oa:DocumentIds> <oa:PaymentTerms> <oa:Description></oa:Description> </oa:PaymentTerms> <oa:Parties> <ow-o:CustomerParty> <oa:PartyId> <oa:Id>' + localStorage.getItem("username") + ' </oa:Id> </oa:PartyId> </ow-o:CustomerParty> </oa:Parties> <ow-o:OrderInfo> <ow-o:RequestType>delivery</ow-o:RequestType> <ow-o:FillFlag>backord</ow-o:FillFlag> <ow-o:Comment>comment1</ow-o:Comment> <ow-o:Comment>comment2</ow-o:Comment> <ow-o:Comment>comment3</ow-o:Comment> <ow-o:Comment>comment4</ow-o:Comment> <ow-o:ShippingInfo> <ow-o:Code/> <ow-o:Description/> </ow-o:ShippingInfo> </ow-o:OrderInfo> </ow-o:Header>' + lineLoop +' </oa:PurchaseOrder> </oa:DataArea> </ow-o:ProcessPurchaseOrder> </ow-e:Body> </ow-e:Envelope>';

   console.log(orderString);
    return orderString;  
}


   })
</script>
</body>
</html>
