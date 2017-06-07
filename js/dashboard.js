jQuery(function(){
	var binfo_form_submit = $("#dash_modify");
	binfo_form_submit.attr({"disabled":""});
	
	var binfo_form = $("#basic_info");
	var binfo_form_nname = binfo_form.find("[name='nickname']");
	var binfo_form_sign = binfo_form.find("[name='signature']");
	
	function Disable_Submit() {
		binfo_form_submit.removeAttr('disabled');
	};
	
	function Warning(id, htmltext)
	{
		var msg = $("#" + id);
		msg.stop(true);
		msg.html(htmltext).text(htmltext).show().fadeOut(5000);
	};
	
	binfo_form_nname.on({
		keypress: Disable_Submit,
		change: Disable_Submit
	});
	
	binfo_form_sign.on({
		keypress: Disable_Submit,
		change: Disable_Submit
	});
	
	binfo_form_submit.click(function(){
		var nickdata = binfo_form_nname.val();
		var signdata = binfo_form_sign.val();
		//alert(nickdata.length);
		if (nickdata.length == 0) {
			Warning("warning_nickname", "用户昵称不能为空哦，请加上你的名字哦。")
			return;
		}
		$.post("/user-ajax.php", 
			{nick: nickdata, sign: signdata, action: 'modify_basic'}
			, function(msg){
				alert(msg);
				switch (msg)
				{
				case 'success':
					window.location.reload();
					break;
				default:
					alert('update failed!');
				}
			});
	});
});
