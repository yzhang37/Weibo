$(function(){ login.init(); });

var login = {
	init: function(){
		this.login(),
		this.logout()
	},
	login: function(){
		$('#log_login').click(function()
		{
			if($("#log_mail").val() == "")
			{
				alert("邮箱不能为空");
				return false;
			}
			else if($("#log_pwd").val() == "")
			{
				alert("密码不能为空");
				return false;
			}
			else
			{
				var mail = $("#log_mail").val();
				var pwd = $("#log_pwd").val();
				$.ajax(
				{
					type: "POST",
					url: "/login-ajax.php",
					cache: false,
					data: "mail=" + mail + "&pwd=" + pwd + "&action=login",
					success: function(msg)
					{
						alert(msg);
						switch(msg)
						{
						case "success":
							window.location.href = "/h/user";
							break;
						default:
							alert('wrong username or password.');
							break;
						}
					}
				});
			}
		});
	},
	logout: function(){
		$("#user_logout").click(function(){
			logout_ajax();
		});
	},
}
function logout_ajax()
{
	$.ajax({
			type: "POST",
			url: "/login-ajax.php",
			cache: false,
			data: "action=logout",
			success: function(msg){
				alert(msg);
				window.location.reload();
			}
		});
}