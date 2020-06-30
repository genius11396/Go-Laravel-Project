$(document).ready(function(){
	$('.hideclass').hide();
	$('#showmore').click(function(){
			$('.hideclass').toggle('slow');
			$('#showmore').html('<i class="fas fa-chevron-up"></i>');

	})
})