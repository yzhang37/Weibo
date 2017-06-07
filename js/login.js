function warning(fieldname, txt){
	$("#"+fieldname).show().html(txt);
}

$(function(){ login.init(); });

var login = {
	init: function(){
		this.login(),
		this.login_2()
		//this.logout()
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
							alert('用户名或密码不正确。');
							break;
						}
					}
				});
			}
		});
	},
	login_2: function(){
		$('#log_submit').click(function()
		{
			if($("#log_email").val() == "")
			{
				warning("warning_email", "登录邮箱不能为空");
				return false;
			}
			else if($("#log_pwd").val() == "")
			{
				warning("warning_pass", "密码不能为空");
				return false;
			}
			else
			{
				warning("warning_email", "");
				warning("warning_pass", "");
				var mail = $("#log_email").val();
				var pwd = $("#log_pwd").val();
				$.ajax(
				{
					type: "POST",
					url: "/login-ajax.php",
					cache: false,
					//数据传送方式改为 POST
					data: {mail: mail, pwd: pwd, action: 'login'},
					success: function(msg)
					{
						switch(msg)
						{
						case "success":
							window.location.href = "/h/user";
							break;
						default:
							warning("warning_pass", "用户名或密码不正确");
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