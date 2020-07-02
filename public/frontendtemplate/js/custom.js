
$(document).ready(function(){
	$('.hideclass').hide();
	$('#showmore').click(function(){
			$('.hideclass').toggle('slow');
			$('#showmore').html('<i class="fas fa-chevron-up"></i>');

	})
})

 $(document).ready(function () {                 
        function carloop() {
		    $('#car').css({left:130});
		    $('#car').animate({
		        left: '+=125',
		    }, {
		        duration: 3000, 
		        easing: 'swing', 
		        complete: carloop
		    });
		}
		carloop();
});



