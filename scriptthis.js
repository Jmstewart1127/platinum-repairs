$(document).ready(function() {
	$('#shipping').load(function(){
		$('#shipping').slideUp("fast");
});
    $('#button4').click(function() {
    if ($('#shipping').is (":hidden")){
      $('#shipping').slideDown("fast");
	  $('#shipping').is(":visible");
	  }
	});
});	

$(document).ready(function() {
	$('#questions').load(function(){
		$('#questions').slideUp("fast");
});
    $('#qc').click(function() {
    if ($('#questions').is (":hidden")){
      $('#questions').slideDown("fast");
	  $('#questions').is(":visible");
	  }
	});
});	

$(document).ready(function() {
	$('#slidethis').load(function(){
		$('#slidethis').slideUp("fast");
});
    $('#button').click(function() {
    if ($('#slidethis').is (":hidden")){
      $('#slidethis').slideDown("fast");
	  $('#slidethis').is(":visible");
	  }
	});
});	

$(document).ready(function(){
    $('#button1').click(function() {
    if ($('#slidethis').is (":hidden")){
      $('#slidethis').slideDown("fast");
	  $('#slidethis').is(":visible");
	  }
	});
});	

$(document).ready(function(){
    $('#button2').click(function() {
    if ($('#slidethis').is (":hidden")){
      $('#slidethis').slideDown("fast");
	  $('#slidethis').is(":visible");
	  }

	});
});	

$(document).ready(function(){
    $('#button3').click(function() {
    if ($('#slidethis').is (":hidden")){
      $('#slidethis').slideDown("fast");
	  $('#slidethis').is(":visible");
	  }
	});
});	

$(document).ready(function(){
    $('#button4').click(function() {
    if ($('#slidethis').is (":visible")){
      $('#slidethis').slideUp("fast");
	  $('#slidethis').is(":hidden");
	  }
	});
});	

$('#button').click(function(){
	$('#message').fadeOut(500, function() {
    $(this).html('Computer Repair <hr class="lg">').fadeIn(500);
	});
	$('#message1').fadeOut(500, function() {
		$(this).html('If your computer or game system stops working, we can help! <br>We repair broken computers, laptops and game consoles.').fadeIn(500);
	});		
});
$('#button1').click(function(){
	$('#message').fadeOut(500, function() {
		$(this).html('Video Games <hr class="lg">').fadeIn(500);
	});
	$('#message1').fadeOut(500, function() {
		$(this).html('We buy and sell the latest games for the latest systems. <br> Xbox 360, PS3, PS4, XBOX ONE, Wii, Wii U<br> All for a very low price.').fadeIn(500);
	});	
});

$('#button2').click(function(){
	$('#message').fadeOut(500, function() {
    $(this).html('Buy and Sell <hr class="lg">').fadeIn(500);
	});
	$('#message1').fadeOut(500, function() {
		$(this).html('Platinum Repairs will buy your used <br> laptop or game console in any condition. <br> Working or broken.').fadeIn(500);
	});		
});

$('#button3').click(function(){
	$('#message').fadeOut(500, function() {
    $(this).html('House Calls <hr class="lg">').fadeIn(500);
	});
	$('#message1').fadeOut(500, function() {
		$(this).html('We will come to you. For a $25 service fee, a technician <br>will be sent to assess your computer and game console<br><small>*Only within twenty mile radius of store.</small>').fadeIn(500);
	});	
});

var request;
    $(document).ready(function () {
        $("#shippingForm").submit(function (event) { //form id
            if (request) {
              request.abort();
            }
    var $form = $(this);
    var serializedData = $form.serialize();
          request = $.ajax({
                url:'shipMail.php',    //php script
                type:'POST',
                data: serializedData
});

      request.fail(function (jqXHR, textstatus, errorThrown){
        console.error(
          "Error: "+
          textStatus, errorThrown
        );
      });

request.always(function () {
    $inputs.prop("disabled", false);
});

event.preventDefault();
});
});

$(document).ready(function() {
	$('#posted').load(function(){
		$('#posted').slideUp("fast");
});
});

$(document).ready(function() {
    $('#shippingForm').submit(function() {
      $('#posted').slideDown("fast");
	  $('#posted').is(":visible");
	  
	});
});	
	
	
var request;
    $(document).ready(function () {
        $("#contactForm").submit(function (event) {
            if (request) {
              request.abort();
            }
    var $form = $(this);
    var serializedData = $form.serialize();

          request = $.ajax({
                url:'shipMail.php',
                type:'POST',
                data: serializedData
			});

      request.fail(function (jqXHR, textstatus, errorThrown){
        console.error(
          "Error: "+
          textStatus, errorThrown
        );
      });

request.always(function () {
    $inputs.prop("disabled", false);
});

event.preventDefault();
});
});


$(document).ready(function() {
	$('#posted1').load(function(){
		$('#posted1').slideUp("fast");
});
});

$(document).ready(function() {
    $('#contactForm').submit(function() {
      $('#posted1').slideDown("fast");
	  $('#posted1').is(":visible");
	  
	});
});	

