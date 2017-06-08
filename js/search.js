function search_user(){
	$('#search-op').click(function(){
		var str = $('#search-box').val();
//		alert(str);
		$.ajax({
			type:"post",
			url:"/message-ajax.php",
			cache:false,
			data:"str="+str+"&action=search",
			success: function(msg){
				//alert(msg);
				switch(msg)
				{
					case "success":
						window.location.href = "/h/search/"+encodeURI(str);
						break;
					default:
						alert('搜索失败');
						break;
				}
			}
		});
	});
}
$(function(){
	search_user();
});