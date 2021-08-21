  <script type="text/javascript">
    /** Design for the navbbar buttons**/

      $( "#nav-icon" ).click(function() {
  $( "#container" ).fadeOut("slow", function() {
      $( "#small-screen-nav" ).fadeIn( "slow")
      $( "#small-ul" ).fadeIn("slow");
  });
});

$( "#close" ).click(function() {
  $( "#small-screen-nav" ).fadeOut( "slow", function() {
      $( "#small-screen-nav" ).fadeOut( "slow", function() {
         $( "#container" ).fadeIn("slow");
      });
  });
});

/*Total in modal*/

 function calculatePrice(val) {
                var tot_price = val * 400;
                var divobj = document.getElementById('tot_price');
                divobj.value = tot_price;
            }
/** Prompt the dropdowns pay.php**/
$(document).ready(function(){
    $('input[type="radio"]').click(function(){
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(".box").not(targetBox).hide();
        $(targetBox).show();
    });
});



  </script>