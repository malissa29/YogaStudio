$(function(){
	$("#days").on("change", function(){
		var day = $(this).val();
		console.log(day);
		$.post("fetch.php", {id : day }, function(data){ 
			$("#time").html(data);
			console.log(data);
		});
	});
});
