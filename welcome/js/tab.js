jQuery(document).ready(function($){
	
	$('h2.tabs a').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('h2.tabs a').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
  })
	
	$(".btn-yes").click(function(){
		$('#ifyes').fadeIn();
	})
	
	$(".btn-no").click(function(){
		$('#ifno').fadeIn();
	}) 

	$(".btn-yes").click(function(){
		$('#ifno').hide();
	})
	
	$(".btn-no").click(function(){
		$('#ifyes').hide();
	}) 

})

