$(document).ready(function(){
	
	$('.btn_submit_value_get').click(function(){

		var txt_value = $('#txt_value').val();



		$.ajax(
				{
					url   : "index.php?r=my/increment-get",
					method: "GET",
					data  : {txt_value:txt_value},
					dataType : "text",



					success:    function(responseText){
								
									$('#result').html(responseText);
							    
					}
							    		 
				}
				);
	});



$('.btn_submit_value_post').click(function(){

var txt_value = $('#txt_value').val();



$.ajax(
		{
			url   : "index.php?r=my/increment-post",
			method: "POST",
			data  : {txt_value:txt_value},
			dataType : "text",



			success:    function(responseText){
						
							$('#result').html(responseText);
					    
			}
					    		 
		}
		);
});
	
})


