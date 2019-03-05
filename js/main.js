$(document).ready(function(){
	
	
	
	$(".data input[name='submit']").click(function(){
		
		var name = $(".data input[name='name']").val();
		var email = $(".data input[name='email']").val();
		var cell = $(".data input[name='cell']").val();
		
		$.ajax({
			url : 'datainsert.php',
			type : "POST",
			data : { 'name' : name, 'email' : email, 'cell' : cell },
			success : function(data){
				$("h1.resss").html(data);
			}
		});
		
		return false;
	});
	
	
	
	setInterval(function(){
		$('#datagola').load('datashow.php');
	}, 200);
	
});