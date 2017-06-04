function warning(fieldname, txt){
	$("#"+fieldname).show().html(txt);
}

jQuery(function($)
{
	$("register_form").submit(
		function()
		{
			
		}
		$.ajax({
			type: "POST",
			url: "/register-ajax.php",
			cache: false,
			data: $('#register_form').serialize()+"&action=register",
			success: function(msg) {
				switch(msg) {
					case 'success':
						window.location.reload();
						break;
					case 'error':
						warning("用户名密码有误");
						break;
				}
			}
		});
		return false;
	);
});
