    <script src="http://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script type="text/javascript" src="scripts/vendor/jquery.bxslider.min.js"></script>
<script type="text/javascript">
  $( document ).ready(function() {

    detectmob();
var menuOff = true;

$('.navbar-toggle').on('click', function(){
  if(menuOff){
       $('.mobileNav').css('display','block');
       $('.mobileNav').animate({ 'height': '480px' }, 'slow' );
       setTimeout(function(){
        menuOff = false;
       }, 1000)
  }
  if(!menuOff){
       $('.mobileNav').animate({ 'height': '0' }, 'slow' );
       setTimeout(function(){
        menuOff = true;
       $('.mobileNav').css('display','none');
       }, 1000)
  }
})

var sliderOpts = 1;

function detectmob() {
   if(window.innerWidth < 800) {
    // return true;
     sliderOpts = 1;
     console.log('line 1');

     setTimeout(function(){

      $('ul.bxslider li').css('padding-left','90px');
     },100);
     
     setUpSlider(sliderOpts);

   } 
   if(window.innerWidth > 800) {
     sliderOpts = 5;
     console.log('line 2');
     setUpSlider(sliderOpts);

   }
}

  //$( ".mobileNav" ).click(function() {
    //$( this ).animate({
    //  height:100%
    // })
  //});

  function setUpSlider(sliderOpts){

    $('.bxslider').bxSlider({
      minSlides: sliderOpts,
      maxSlides: sliderOpts,
      slideWidth: 360,
      slideMargin: 10
    });
  }
});

</script>

<div id="specialOffers" class="row">
  <h4>Special Offers</h4>	
  <ul class="bxslider">
    <li><img src="images/18111f9d.bestseller1.jpg" alt="" width="auto"></li>
    <li><img src="images/578042dc.bestseller2.jpg" alt=""></li>
    <li><img src="images/1712ab5e.bestseller3.jpg" alt=""></li>
    <li><img src="images/046e1817.bestseller4.jpg" alt=""></li>
    <li><img src="images/0c8c849f.bestseller5.jpg" alt=""></li>
    <li><img src="images/18111f9d.bestseller1.jpg" alt=""></li>
    <li><img src="images/578042dc.bestseller2.jpg" alt=""></li>
    <li><img src="images/046e1817.bestseller4.jpg" alt=""></li>
    <li><img src="images/0c8c849f.bestseller5.jpg" alt=""></li>
  </ul>           
</div> <!-- specialOffers row -->