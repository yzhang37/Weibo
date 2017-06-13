jQuery(function(){
	var binfo_form_submit = $("#dash_modify");
	binfo_form_submit.attr({"disabled":""});
	
	var binfo_form = $("#basic_info");
	var binfo_form_nname = binfo_form.find("[name='nickname']");
	var binfo_form_sign = binfo_form.find("[name='signature']");
	var binfo_form_cell = binfo_form.find("[name='cell']");
	var binfo_form_tele = binfo_form.find("[name='tele']");

	function Resize_Avatar(){
		$("img.avatar-icon").each(function(){
			$(this).height($(this).width());
		});
	}

	$(window).resize(Resize_Avatar);
	$(window).load(Resize_Avatar);	

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
		var cellnumber = binfo_form_cell.val();
		var telenumber = binfo_form_tele.val();
		//alert(nickdata.length);
		if (nickdata.length == 0) {
			Warning("warning_nickname", "用户昵称不能为空哦，请加上你的名字哦。")
			return;
		}
		
		if (!(/^1[3|4|5|8][0-9]\d{4,8}$/.test(cellnumber)))
		{
			Warning("warning_cell", "手机号的格式不正确哦，请修改为11位手机号格式。")
			return;
		}
		
		if (!(/^(\(\d{3,4}\)|\d{3,4}-|\s)?\d{7,14}$/.test(telenumber)))
		{
			Warning("warning_tele", "电话的格式不正确哦，请修改为11位手机号格式。")
			return;
		}
		
		$.post("/user-ajax.php", 
			{nick: nickdata, sign: signdata, action: 'modify_basic',
			 tele: telenumber, cell:cellnumber}
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
