$(function(){ main.init(); });

var main = {
	init: function(){
		this.login(),
		this.loginWithEmail(),
		this.logout()
	},
	login: function(){
		var user_login = $("#user_login");
		$("#user_login button[name='submit']").click(function(){
			var mail = user_login.find("input[name='log_mail']").val();
			var pwd = user_login.find("input[name='log_pwd']").val();
			$.ajax({
				type: "POST",
				url: "/login-ajax.php",
				cache: false,
				data: "mail="+mail+"&pwd="+pwd+"&action=login",
				success: function(msg){
					alert(msg);
					window.location.reload();
				}
			});
		});
	},
	//使用 e-mail 登录，而不是使用 uid 登录
	loginWithEmail: function(){
		var user_login = $("#user_login");
		user_login.find("button[name='log_submit']").click(function(){
			//alert('1');
			var mail = user_login.find("input[name='log_email']").val();
			var pwd = user_login.find("input[name='log_pwd']").val();
			$.ajax({
				type: "POST",
				url: "/login-ajax.php",
				cache: false,
				data: "mail="+mail+"&pwd="+pwd+"&action=loginWithEmail",
				success: function(msg){
					alert(msg);
					window.location.reload();
				}
			});
		});
	},
	logout: function(){
		$("#user_logout").click(function(){
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
		});
	},
}
