
$(document).ready(function(){
  $('.hideclass').hide();
  $('#showmore').click(function(){
      $('.hideclass').toggle('slow');
      $('#showmore').html('<i class="fas fa-chevron-up"></i>');

  })
               
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

<<<<<<< HEAD


=======
})
>>>>>>> 64fb444150081aa583288a9e32f6ad285e5c7694
