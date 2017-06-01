$(document).ready(function() {
	$('#login').click(function() {
		if($("#mail").val() == "") {
			alert("邮箱不能为空");
			return false;
		} else if($("#pwd").val() == "") {
			alert("密码不能为空");
			return false;
		} else {
			var mail = $("#mail").val();
			var pwd = $("#pwd").val();
			$.ajax({
				type: "POST",
				url: "/login-ajax.php",
				cache: false,
				data: "mail=" + mail + "&pwd=" + pwd + "&action=login",
				success: function(msg) {
					alert(msg);
					switch(msg) {
						case "success":
							window.location.href = "/h/user";
							break;
						default:
							break;
					}
				}
			});
		}
	});
})