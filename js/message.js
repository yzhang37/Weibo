function publish_msg(){
	$('#msg-publish').click(function(){
		var message = $('#msginput').val();
		var mail = gb_mail;
//		alert(message+mail);
		$.ajax({
			type:"post",
			url:"/message-ajax.php",
			cache:false,
			data: "mail=" + mail + "&message=" + message + "&action=publish",
			success: function(msg){
				alert(msg);
				switch(msg){
					case "success":
						window.location.reload();
						break;
					case "error":
						$("#msg-warning").text("发表失败").show().fadeOut(3000);
						break;
				}
			}
		});
	});
}
$(function(){
	publish_msg();
});