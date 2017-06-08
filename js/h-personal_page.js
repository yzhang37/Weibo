

function follow_operation(){
	var follow_btn = $("#fol-op");
	var flag_fol = follow_btn.data("isfollowed");
	var umail = follow_btn.data("umail");
	follow_btn.click(function(){
		$.ajax({
			type:"POST",
			url:"/message-ajax.php",
			cache: false,
			data: {action:"fol_op",mail:umail,flag:flag_fol},
			success: function(msg){
				//alert(msg);
				window.location.reload();
			}
		});
	})
}

$(function(){
	follow_operation();
});
