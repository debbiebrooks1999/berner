
$( document ).ready(function() {

	"use strict";

/* =====================================================
		Hide/Show Menu
		================================================== */
			
		$(".menu-opener").click(function(){
			$(".menu-opener, .menu-opener-inner, nav.navbar").toggleClass("active");
		});	

/* =====================================================
		Home Links
		================================================== */

		$( "#demoRange div:first-child" ).bind("click touchstart", function() {		
			window.location.href = "http://berner.devrap.co.uk/videos.php";
		});
		
		$( "#demoRange div:last-child" ).bind("click touchstart", function() {		
			window.open('http://berner.devrap.co.uk/pdf/hand-cleaning-range-mission-clean-hands.pdf','_blank');
		});

/* =====================================================
		Debbie's Code Below
		================================================== */

		function htmlEncode(value){
  //create a in-memory div, set it's inner text(which jQuery automatically encodes)
  //then grab the encoded contents back out.  The div never exists on the page.
  return $('<div/>').text(value).html();
}


var groupCode;

/*
$('.dropdown-menu li').on('mouseover', function(){
  $(this).css('background', '#dedddd');
})
*/


$('#signIn').on('click', function(){
    $('#signInDD').animate({'top':'44px'})
});

/*
$('.dropdown-menu li').on('mouseleave', function(){
  $(this).css('background', 'white');
})
*/

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



 $('.dropdown-menu li a').on('click', function(){
    

    groupCode = $(this).html();

    //var uri ='products.html?group='+groupCode;

    location.href = 'products.php?group='+groupCode;



  })




});


