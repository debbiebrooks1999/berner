
$( document ).ready(function() {




		function htmlEncode(value){
  //create a in-memory div, set it's inner text(which jQuery automatically encodes)
  //then grab the encoded contents back out.  The div never exists on the page.
  return $('<div/>').text(value).html();
}


var groupCode;

$('#signIn').on('click', function(){
    $('#signInDD').animate({'top':'44px'})
});

 $('#cancelQuick').on('click', function(){
    location.reload();
 });

 $('span#AddQuick').on('click', function(){

  //loop through form input fields
  //ajax call

  /*
$item = $_GET['item'];
$qty = $_GET['qty'];

  */



  $("#quickOrder input[type=text]").each(function() {

    var s='';
    var q='';

            if(this.value != "") {

               console.log($(this).next('.qty').val());
               console.log(this.value);
               
               s = this.value;
               q = $(this).next('.qty').val();

                 $.ajax({ 

                   url: 'addCart.php?item='+s+'&qty='+q,                  //the script to call to get data          
                   dataType: 'json',                //data format      
                   success: function (data) {

                //       //connect(data);
                       

                     }
                 });

            }
        });
  //      return false;


  setTimeout(function(){

     location.reload();

  }, 3000)

 });



 $('nav.navbar ul.navbar-nav > li > ul.dropdown-menu > li > a').on('click', function(){
    
    if($(this).hasClass('sub')){
      return;
    }else{
    groupCode = $(this).html();

   
    //var uri ='products.html?group='+groupCode;

    location.href = 'products.php?group='+groupCode;


    }


  })




});


