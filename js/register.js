function warning(fieldname, txt){
	$("#"+fieldname).show().html(txt);
}

jQuery(function($) {
	$("#reg_submit").click(function(){
			//alert('测试');

			$.ajax({
				type: "POST",
				url: "/login-ajax.php",
				cache: false,
				data: $('#register_form').serialize()+"&action=register",
				success: function(msg) {
					warning("warning_email", "");
					warning("warning_nickname", "");
					warning("warning_password", "");
					warning("warning_passconf", "");
					switch(msg) {
						case "already_in_use":
							warning("warning_email", "这个电子邮件已经被使用过了，更换一个");
							break;
						case "no_nickname":
							warning("warning_nickname", "还没有输入昵称哦");
							break;
						case "no_password":
							warning("warning_password", "没有输入密码哦，必须输入密码才能注册帐户");
							break;
						case "invalid_password_length":
							warning("warning_password", "密码长度不符合要求");
							break;
						case "dismatch_passconf":
							warning("warning_passconf", "验证密码必须和上面的密码输入框内容一致");
							break;
						case "success":
							window.location.href = '/h/user';
							break;
						case "error":
							warning("warning_email", "");
							break;
					}
					return true;
				}
			});
			return false;
	});
});
