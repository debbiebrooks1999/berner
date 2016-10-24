<style type="text/css">
  
      
  .searchResultsList{
    display: none;
    padding-left: 0;

  }

  li{
    list-style: none;
  }

  #prodSearchImage{
    height:40px;
    width:40px;
  }

  #searchFrame{
    border:0;
    background: red;
     left: 547px;
    height:280px;
    top:56px;
    z-index:8888;
    width:410px;
    position: absolute;
        display: none;

  }
</style>

<!-- Search results -->
<div class="container">
<div class="searchResultsContainer">
 <iframe id="searchFrame" src="search.php" height="34" width="210"></iframe>
</div>
</div>
<div id="signInDD"> 
 





 


<form class="signInForm">
<p>Exisiting online customers</p>
  <label>Account ID*</label>
  <input type="text" id="accountID" name="accountID"></input>
  <p></p>
  <label>Password*</label>
  <input type="password" id="password" name="password" ></input>
  <p>* Required field</p>
  <button id="submitLogin" type="button">Login</button>
  <input type="checkbox" id="terms"></input>
</form>
<div class="signUp">
<p><span>Would you like to register for a Berner account?</span><br>
You will need to complete our account form.  We will set up your account and email you your login details when your account has been approved.</p>
<a class="details" href="new-account.php">I would like to sign up for an account</a>
</div>



</div>
<header id="customHeader">
  <div class="innerWrapper">
    <div class="menuToggle">
      <nav class="menu-opener">
        <div class="menu-opener-inner"></div>
      </nav> 
    </div> <!-- menuToggle -->
    <a href="index.php"><img class="logo" src="images/header/berner.jpg" width="176" height="27" alt="Berner"/></a>
    <div class="right">
      <div class="left">
        <div class="colContainer">
          <div class="left customerService">
            <p><strong>Customer Service</strong><br/>+44 (0)1383 729814</p>
          </div> <!-- left customerService -->
          <div class="right register">
            <p><strong><a href="#">Register</a></strong><br/>For product emails</p>
          </div> <!-- right register -->
        </div> <!-- colContainer -->
        <div class="searchSite">
          <input id="search" type="text" name="search" placeholder="Search the site" />
          <input type="submit" name="submit" value="" /> 
        </div> <!-- searchSite -->
      </div> <!-- left -->
      <div class="right">
        <div class="colContainer">
          <div class="left signIn">
            <p id="showSignin">
            </p>
          </div> <!-- left signIn -->
          <div class="right shoppingBasket">
            <p>
              <a id="cartURL">Shopping Basket (<span id="cartCount">0</span>)
              </a>
            </p>
          </div> <!-- right shoppingBasket -->
        </div> <!-- colContainer -->
        <div class="colContainer">
          <div class="left downloadBrochure bestSellers">
            <p><a href="../pdf/best-sellers-october-december-2016.pdf" target="_blank"><strong>Download</strong><br/>our Best Sellers brochure</a></p>
          </div> <!-- left bestSellers -->
          <div class="right downloadBrochure newProducts">
            <p><a href="../pdf/new-products-october-2016.pdf" target="_blank"><strong>Download</strong><br/>New Products brochure</a></p>
          </div> <!-- right newProducts -->
        </div> <!-- colContainer -->
      </div> <!-- right -->
    </div> <!-- right -->
  </div> <!-- innerWrapper -->
</header>

<!--
<nav id="mainMenu">
  <div class="innerWrapper">
    <div class="left">
      <ul class="menuLev1">
        <li class="parent"><a href="#">Our Products</a>
          <ul class="menuLev2">
            <li><a href="#">Abrasives</a></li>
            <li><a href="#">Adhesives</a></li>
            <li><a href="#">Air-Brake</a></li>
            <li><a href="#">Air-Tool</a></li>
            <li><a href="#">Body-Repair</a></li>
            <li><a href="#">Bus-Truck-Trailer</a></li>
            <li><a href="#">Chemicals</a></li>
            <li><a href="#">Drills</a></li>
            <li><a href="#">Electrical</a></li>
            <li><a href="#">Fasteners-Bolts</a></li>
            <li><a href="#">Fasteners-Misc</a></li>
            <li><a href="#">Fasteners-Number-Plate</a></li>
            <li><a href="#">Fasteners-Nuts</a></li>
            <li><a href="#">Fasteners-Rivets</a></li>
            <li><a href="#">Fasteners-Slf-Tapper</a></li>
            <li><a href="#">Fasteners-Set-Screws</a></li>
            <li><a href="#">Fasteners-Skt-Screws</a></li>
            <li><a href="#">Fasteners-Split-Pins</a></li>
            <li><a href="#">Fasteners-Studding</a></li>
            <li><a href="#">Fasteners-Washers</a></li>
            <li><a href="#">Floor-Care</a></li>
            <li><a href="#">Funnels-Pourers</a></li>
            <li><a href="#">Gloves</a></li>
            <li><a href="#">Grease-Lubes</a></li>
            <li><a href="#">Health-and-Safety</a></li>
            <li><a href="#">Hose</a></li>
            <li><a href="#">Janitorial</a></li>
            <li><a href="#">Lighting</a></li>
            <li><a href="#">Locks</a></li>
            <li><a href="#">Maintenance</a></li>
            <li><a href="#">Mirrors-and-Arms</a></li>
            <li><a href="#">Miscellaneous</a></li>
            <li><a href="#">Paint</a></li>
            <li><a href="#">Paint-Brushes-Rllrs</a></li>
            <li><a href="#">Personal-Protection</a></li>
            <li><a href="#">Power-Tools</a></li>
            <li><a href="#">Sealants</a></li>
            <li><a href="#">Tapes</a></li>
            <li><a href="#">Tools</a></li>
            <li><a href="#">Tools-Sockets</a></li>
            <li><a href="#">Tools-Spanners</a></li>
            <li><a href="#">Welding</a></li>
            <li><a href="#">Windscreen</a></li>
            <li><a href="#">Winter</a></li>
            <li><a href="#">Wipers</a></li>
            <li><a href="#">Workshop</a></li>
          </ul>
        </li>
        <li class="parent"><a href="#">Quick Order</a>
          <ul id="quickOrderDD" class="menuLev2">
            <li class="fix">
             
                <p>Enter item product number below and add them to your basket</p>
                <form id="quickOrder">
                  <input type="text" size="20" name="PN_1">
                  <input class="qty" type="number" size="3" name="PN_1_QTY"><br>
                  <input type="text" size="20" name="PN_2">
                  <input class="qty" type="number" size="6" name="PN_2_QTY"><br>
                  <input type="text" size="20" name="PN_1">
                  <input type="number" size="6" name="PN_1_QTY"><br>
                  <input type="text" size="20" name="PN_2">
                  <input type="number" size="6" name="PN_2_QTY"><br>
                  <input type="text" size="20" name="PN_1">
                  <input type="number" size="6" name="PN_1_QTY"><br>

                  <a href="#" id="cancelQuick">Cancel</a>
                   <span id="AddQuick">Add to basket<img src='images/arrow.gif'></span>
                </form>

            </li>
          </ul>
        </li>
      </ul>
    </div> <!-- left -->
   <!-- <div class="right">
      <ul class="menuLev1">
        <li><a href="brochures.php">Brochures</a></li>
        <li><a href="videos.php">Videos</a></li>
        <li><a href="#">What's New</a></li>
        <li class="special"><a href="#">Special Offers</a></li>
        <li><a href="contact-us.php">Contact Us</a></li>
      </ul>
    </div> <!-- right -->
<!--  </div> <!-- innerWrapper -->
<!--</nav> -->

<nav class="navbar navbar-default">
	<div class="container">
      <div id="mainNavBar">
      	<ul class="nav navbar-nav">
        	<li class="dropdown">
          	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Products <span class="glyphicon glyphicon-menu-down"></span></a>
          	<ul class="dropdown-menu">
            	<li><a href="#">Abrasives</a></li>
              <li><a href="#">Adhesives</a></li>
              <li><a href="#">Air-Brake</a></li>
              <li><a href="#">Air-Tool</a></li>
              <li><a href="#">Body-Repair</a></li>
              <li><a href="#">Bus-Truck-Trailer</a></li>
              <li><a href="#">Chemicals</a></li>
              <li><a href="#">Drills</a></li>
              <li><a href="#">Electrical</a></li>
              <li><a href="#">Fasteners-Bolts</a></li>
              <li><a href="#">Fasteners-Misc</a></li>
              <li><a href="#">Fasteners-Number-Plate</a></li>
              <li><a href="#">Fasteners-Nuts</a></li>
              <li><a href="#">Fasteners-Rivets</a></li>
              <li><a href="#">Fasteners-Slf-Tapper</a></li>
              <li><a href="#">Fasteners-Set-Screws</a></li>
              <li><a href="#">Fasteners-Skt-Screws</a></li>
              <li><a href="#">Fasteners-Split-Pins</a></li>
              <li><a href="#">Fasteners-Studding</a></li>
              <li><a href="#">Fasteners-Washers</a></li>
              <li><a href="#">Floor-Care</a></li>
              <li><a href="#">Funnels-Pourers</a></li>
              <li><a href="#">Gloves</a></li>
              <li><a href="#">Grease-Lubes</a></li>
              <li><a href="#">Health-and-Safety</a></li>
              <li><a href="#">Hose</a></li>
              <li><a href="#">Janitorial</a></li>
              <li><a href="#">Lighting</a></li>
              <li><a href="#">Locks</a></li>
              <li><a href="#">Maintenance</a></li>
              <li><a href="#">Mirrors-and-Arms</a></li>
              <li><a href="#">Miscellaneous</a></li>
              <li><a href="#">Paint</a></li>
              <li><a href="#">Paint-Brushes-Rllrs</a></li>
              <li><a href="#">Personal-Protection</a></li>
              <li><a href="#">Power-Tools</a></li>
              <li><a href="#">Sealants</a></li>
              <li><a href="#">Tapes</a></li>
              <li><a href="#">Tools</a></li>
              <li><a href="#">Tools-Sockets</a></li>
              <li><a href="#">Tools-Spanners</a></li>
              <li><a href="#">Welding</a></li>
              <li><a href="#">Windscreen</a></li>
              <li><a href="#">Winter</a></li>
              <li><a href="#">Wipers</a></li>
              <li><a href="#">Workshop</a></li>
						</ul> <!-- dropdown-menu -->
          </li>
          <li class="dropdown">
          	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Quick Order <span class="glyphicon glyphicon-menu-down"></span></a>
          	<ul class="dropdown-menu special">
            	<li>
                <p>Enter item product number below and add them to your basket</p>
                <form>
                  <input type="text" size="20" name="PN_1">
                  <input type="number" size="3" name="PN_1_QTY">
                  <div class="clearFix"></div>
                  <input type="text" size="20" name="PN_2">
                  <input type="number" size="6" name="PN_2_QTY">
                  <div class="clearFix"></div>
                  <input type="text" size="20" name="PN_1">
                  <input type="number" size="6" name="PN_1_QTY">
                  <div class="clearFix"></div>
                  <input type="text" size="20" name="PN_2">
                  <input type="number" size="6" name="PN_2_QTY">
                  <div class="clearFix"></div>
                  <input type="text" size="20" name="PN_1">
                  <input type="number" size="6" name="PN_1_QTY">
                  <div class="clearFix"></div>
                  <div class="buttons">
                  	<a href="#">Cancel</a>
                    <a href="#">Add to basket</a>
                  </div> <!-- buttons -->
                </form>
            	</li>
          	</ul> <!-- dropdown-menu -->
            
            
            <!--
            <ul id="quickOrderDD" class="dropdown-menu">
            	<li class="fix">
                <p>Enter item product number below and add them to your basket</p>
                <form id="quickOrder">
                  <input type="text" size="20" name="PN_1">
                  <input class="qty" type="number" size="3" name="PN_1_QTY"><br>
                  <input type="text" size="20" name="PN_2">
                  <input class="qty" type="number" size="6" name="PN_2_QTY"><br>
                  <input type="text" size="20" name="PN_1">
                  <input type="number" size="6" name="PN_1_QTY"><br>
                  <input type="text" size="20" name="PN_2">
                  <input type="number" size="6" name="PN_2_QTY"><br>
                  <input type="text" size="20" name="PN_1">
                  <input type="number" size="6" name="PN_1_QTY"><br>
                  <a href="#" id="cancelQuick">Cancel</a>
                  <span id="AddQuick">Add to basket<img src='images/arrow.gif'></span>
                </form>
            	</li>
          	</ul> <!-- dropdown-menu -->
            
            
            
          </li>
    	</ul> <!-- nav navbar-nav -->
      <!--right align -->
      <ul class="nav navbar-nav navbar-right">
      	<li><a href="brochures.php">Brochures</a></li>
        <li><a href="videos.php">Videos</a></li>
        <li><a href="#">What's New</a></li>
        <li class="special"><a href="#">Special Offers</a></li>
        <li><a href="contact-us.php">Contact Us</a></li>
			</ul>
  	</div> <!-- mainNavBar -->
	</div> <!-- container -->
</nav>

<script type="text/javascript">
  $( document ).ready(function() {


/*
  add the search for products


$('#search').on('keyup', function(e) {

  //start interval to listen
  setTimeout(doSearch, 1000);

});  

function doSearch(){

  var value = $('#search').val();
  var noWhitespaceValue = value.replace(/\s+/g, '');
  var noWhitespaceCount = noWhitespaceValue.length;
  location.href='header.php?let='+value;



}

function animateInSearch(){
  $('.searchResults').animate({
    opacity: 0.25,
    left: "+=50",
    height: "350px",
    width:"400px"
  }, 5000, function() {
    // Animation complete.
    console.log('done');
  });
}

*/

/*
  end search for porducts
*/

 $('.dropdown-menu li a').on('click', function(){
    

      groupCode = $(this).html();

     
      location.href = 'products.php?group='+groupCode;



  })



 
   if(localStorage.getItem("username")=='Web5'){
        $('#showSignin').html('<strong><a id="signIn" href="#">Sign In</a></strong>')
    }

    if(localStorage.getItem("username")!='Web5'){
       // console.log('onload if this is missing::' + localStorage.getItem("cartCount"))

        $('#cartURL').attr('href','cart.php?accountID='+localStorage.getItem("username"));
        $('#cartCount').html(localStorage.getItem("cartCount"));

        $('#showSignin').html('<strong>Hi, ' + localStorage.getItem("username") + '.</strong> (<span id="logout">Logout</span>)')
     }

//form submit


$('#submitLogin').on('click', function(){
//  console.log($('#accountID').val());
 $.ajax({ 

      url: './login.php',                  //the script to call to get data          
      data: "accountID="+ $('#accountID').val() +"&password="+$('#password').val(),                      //you can insert url argumnets here to pass to api.php for example "id=5&parent=6"
       type: "GET",  
      dataType:'json',             //data format      
      success: function (data) {
    //        console.log('yes');
          updateLogin(data);
     //     freshLoad - false;
          // setTimeout(function(){

          //     updateLogin();
          // },500)
          
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
});

function updateLogin(data){


   $(data).each(function(key, value) {

    console.log('value.name::'+value.name); 
    console.log('value.accountNumber'+value.accountNumber); 
   // localStorage.setItem("accountID", value.accountNumber); 

    localStorage.setItem("username", value.name); 
          $('#showSignin').html('<strong>Hi, ' + localStorage.getItem("username") + '.</strong> (<span id="logout">Logout</span>)');
    getAddresses(value.accountNumber);
     $('#signInDD').animate({'top':'-200px'});
    setTimeout(function(){
     $('.signIn').css('background-color','#fff');

  }, 250)

  });

$('#cartURL').attr('href','cart.php?accountID='+localStorage.getItem("username"));
 $('#cartCount').html(localStorage.getItem("cartCount"));

   $('#logout').on('click', function(){
        localStorage.setItem("username", 'Web5');

        //  $('#cartCount').html('0');
        $('#showSignin').html('<strong><a id="signIn" href="#">Sign In</a></strong>')

        console.log('on logoiut'+ localStorage.getItem("username"));
       setTimeout(function(){
         location.href='index.php';
         console.log('move it');

      },1000)
          
          $('#cartCount').html('0');
          $('#showSignin').html('<strong><a id="signIn" href="#">Sign In</a></strong>')

          console.log('on logoiut'+ localStorage.getItem("username"));
          $('#signIn').on('click', function(){
         // alert('sigin');
            $('#signInDD').animate({'top':'46px'});
            setTimeout(function(){
             $('.signIn').css('background-color','#f9f9f9');

          }, 250)
        });
});


}
 $('#logout').on('click', function(){
  localStorage.setItem("username", 'Web5');
  
//  $('#cartCount').html('0');
  $('#showSignin').html('<strong><a id="signIn" href="#">Sign In</a></strong>')

  console.log('on logoiut'+ localStorage.getItem("username"));
   setTimeout(function(){
         location.href='index.php';
         console.log('move it');

      },1000)
});

//end form submit
          

$('#signIn').on('click', function(){
 // alert('sigin');
    $('#signInDD').animate({'top':'46px'});
    setTimeout(function(){
     $('.signIn').css('background-color','#f9f9f9');

  }, 250)
});




function getAddresses(accountID){
  
  var proxy = 'proxy.php';
  var returnThePrice;
  var isInStock = true;
  //accountID = '5951';

  console.log('getPrice with::' + localStorage.getItem("username"));
  var webserUrl = proxy+'?url'+'217.158.172.80:6120/RW-TSLD/SellerServices.asmx' ; // Preferably write this out from server side

  var soapMessage ='<?xml version="1.0" encoding="utf-8"?><soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/"> <soap:Body> <AcctDetails xmlns="http://www.mamsoft.co.uk/services/clientrequester"> <vr> <User>OWUser</User> <Pass>tPGees</Pass> <Acct>' + accountID + '</Acct> <PG>string</PG> <DateFrom>string</DateFrom> <DateTo>string</DateTo> </vr> </AcctDetails> </soap:Body> </soap:Envelope>';

  var arrName = [];
  var arrAddra = [];
  var arrAddrb = [];
  var arrAddrc = [];
  var arrAddrd = [];
  var arrAddre = [];
  var arrPCode = [];

  $.ajax({
        type: "POST",
        url: webserUrl,
        contentType: "text/xml",
        dataType: "xml",
        data: soapMessage,
        headers: {
            SOAPAction: 'http://www.mamsoft.co.uk/services/clientrequester/AcctDetails','X-Proxy-URL': 'http://217.158.172.80:6120/RW-TSLD/SellerServices.asmx'        },
        crossDomain: true,
        success: function(data, status, req){
             var xmlDoc = $.parseXML( req.responseText );
               var $xml = $( xmlDoc );
               $title = $xml.find( "AC" ).each(function(index){
                    arrName.push($(this).find('Name').text());
                    arrAddra.push($(this).find('Addra').text());
                    arrAddrb.push($(this).find('Addrb').text());
                    arrAddrc.push($(this).find('Addrc').text());
                    arrAddrd.push($(this).find('Addrd').text());
                    arrAddre.push($(this).find('Addre').text());
                    arrPCode.push($(this).find('PCode').text());
                   // console.log(arrAddrb);
                });
               $title2 = $xml.find( "AC1" ).each(function(index){
                    arrName.push($(this).find('Name').text());
                    arrAddra.push($(this).find('Addra').text());
                    arrAddrb.push($(this).find('Addrb').text());
                    arrAddrc.push($(this).find('Addrc').text());
                    arrAddrd.push($(this).find('Addrd').text());
                    arrAddre.push($(this).find('Addre').text());
                     arrPCode.push($(this).find('PCode').text());
               });

     
        }
  });

   // return returnThePrice;            


setTimeout(function(){
   localStorage.setItem("accName1", arrName[0]); 
   localStorage.setItem("accAddra1", arrAddra[0]); 
   localStorage.setItem("accAddrb1", arrAddrb[0]); 
   localStorage.setItem("accAddrc1", arrAddrc[0]); 
   localStorage.setItem("accAddrd1", arrAddrd[0]); 
   localStorage.setItem("accAddre1", arrAddre[0]); 
   localStorage.setItem("accPCode1", arrPCode[0]); 

   localStorage.setItem("accName2", arrName[1]); 
   localStorage.setItem("accAddra2", arrAddra[1]); 
   localStorage.setItem("accAddrb2", arrAddrb[1]); 
   localStorage.setItem("accAddrc2", arrAddrc[1]); 
   localStorage.setItem("accAddrd2", arrAddrd[1]); 
   localStorage.setItem("accAddre2", arrAddre[1]); 
   localStorage.setItem("accPCode2", arrPCode[1]); 

},2000)   

}


});

</script>