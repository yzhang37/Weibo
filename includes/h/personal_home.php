
<style>
	body {
		background: url("http://wx3.sinaimg.cn/mw1024/869f1348ly1fg5sdbiwr6j218g1jk0ys.jpg");
	}
</style>
<div class="container" style="background-color:rgba(36,61,89,0.25);">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="row clearfix" >
  <!--------------------------------------------------------------------------------左部----------------------------------------------导航栏不需要PHP------------------------>			
				<div class="col-md-2 column">
				 
					<ul class="nav nav-tabs nav-stacked" style="position:fixed;width:170px;top:60px;font-size:15px;background-color:#E8E8E8;opacity:0.8;">
								<li class="active">
									 <a href="/" ><span class="glyphicon glyphicon-home" style="color: rgb(0,0,0);"> 首页</span></a>
								</li>
								<li>
									 <a href="#"><span class="glyphicon glyphicon-heart" style="color: rgb(0,0,0);"> 我的关注</span></a>
								</li>
								<li>
									 <a href="#"><span class="glyphicon glyphicon-heart" style="color: rgb(0,0,0);"> 关注我的</span></a>
								</li>
								<li>
									 <a href="http://localhost/my_praise.html"><span class="glyphicon glyphicon-thumbs-up" style="color: rgb(0,0,0);"> 我的赞</span></a>
								</li>
								<li>
									 <a href="http://localhost/rec_praise.html"><span class="glyphicon glyphicon-thumbs-up" style="color: rgb(0,0,0);"> 收到赞</span></a>
								</li>
								<li>
									 <a href="http://localhost/my_comment.html"><span class="glyphicon glyphicon-edit" style="color: rgb(0,0,0);"> 我的评论</span></a>
								</li>	
								<li>
									 <a href="http://localhost/rec_comment.html"><span class="glyphicon glyphicon-edit" style="color: rgb(0,0,0);"> 收到评论</span></a>
								</li></hr>
								<li>
									 <a href="#"><span class="glyphicon glyphicon-hand-right" style="color: rgb(0,0,0);"> 热门微博</span></a>
								</li>
								<li>
									 <a href="#"><span class="glyphicon glyphicon-hand-right" style="color: rgb(0,0,0);"> 热门视频</span></a>
								</li></hr>
								<li>
									 <a href="#"><span class="glyphicon glyphicon-hand-right" style="color: rgb(0,0,0);"> 搞笑幽默</span></a>
								</li> 
								<li>
									 <a href="#"><span class="glyphicon glyphicon-hand-right" style="color: rgb(0,0,0);"> 视频音乐</span></a>
								</li>
								<li>
									 <a href="#"><span class="glyphicon glyphicon-hand-right" style="color: rgb(0,0,0);"> 新闻趣事</span></a>
								</li>
								<li>
									 <a href="#"><span class="glyphicon glyphicon-hand-right" style="color: rgb(0,0,0);"> 娱乐圈</span></a>
								</li>
					</ul>
				</div>

				
				
<!----------------------------------------------------------------------------中部------------------------------------------------------------------>

<div class="col-md-7 column" style="position:relative;top:60px;">

<!-----------------------------------------------------------------------消息发布-------------------------------------------------------------------->
    <div class="row clearfix" style="background-color:white;position:relative;">
    <div class="input "><p>最近有什么新鲜事想告诉大家？</p>
        <textarea id="textinput" style="height: 68px; width:660px; margin-left: 10px; margin-right: 10px;padding: 0px; border-style: 1px;font-size: 14px; overflow-wrap: break-word; line-height: 18px; overflow: hidden; outline: medium none;"></textarea>
        <button id="publish" type="submit" class="btn btn-default" style="float:right;margin:10px;">发布</button>
        <form style="display:none;" node-type="extradata">
    		<input name="pollid" value="">
            <input name="pub_source" value="main_">
		</form>
    </div>

	</div><br/>
<!-----------------------------------------------------------------------消息发布结束---------------------------------------------------------------------->


<!------------------------------------------------消息展示，我们只提供了消息的HTML模板，所以前端接口需要你们劳心了---------------------------------------------->



<!----------------------------------------------一条消息------------------------------------------->
	 <div class="row clearfix" style="background-color:white;position:relative;">
		<div class="col-md-12 column">
			<!-----------------------------------头像和名称------------------------------------>			
			<div class="row clearfix">
				<div class="col-md-8 column">
					<div class="media">
						 <a href="#" class="pull-left" target="_blank"><img src="images/weibo.jpg" class="media-object" style="border-radius:50%;width:80px;height:80px;" alt='' /></a>
						<div class="media-body">
							<a href="#" target="_blank"><h4 class="media-heading">
								我是weibo
							</h4></a>
							<p id="time" class="txt" style="text-align:left;font-size:12px;color:#B3B3B3">5月24日 16:20</p>
							<p id="descrip">一个乐于发现好玩有趣事物的新新人类</p>
						</div>
					</div>
				</div>
				<div class="col-md-1 column"></div>
			</div>
			<!------------------------------------中间消息主体------------------------------>
			<div class="row clearfix">
				<div class="col-md-12 column">
				<!---------------------------文字部分------------------------->
					<div class="txt" style="font-family:sans-serif;">#今天你吃了什么#
						今天我吃了好多喜欢的
					</div></br>
				</div>
			</div>
			<!---------------------------------------下面的转发、评论、点赞--------------------------------------->
			<div class="row clearfix">
				<div class="col-md-12 column">
				<div class="col-md-9 column"></div>
						<div class="col-md-3 column"><div class="txt">
						<span class="glyphicon glyphicon-edit"></span>57935</span>&nbsp;
						<span class="glyphicon glyphicon-thumbs-up"></span>123588</span></div>
						</div>						
				</div>
			</div>
		</div>
	</div><br/>
<!------------------------------------------------------------消息结束----------------------------------------------------------->



<!------------------------------------------------------------消息展示结束----------------------------------------------------------->
</div><br/>

			  
<!------------------------------------------------------------------------------右部------------------------------以下不需要写PHP，都是空链接----------------------------------------------->
		<div class="col-md-3 column" >
//			<?php display_fan_fo_msg_cnt();?>
			<br/>
<!-----------------------------------------------------------------------热门话题------------------------------------------------------------------------->
//          <?php display_hot_topic();?>
        	<br/>
		<!------------------------------------------------微博找人--------------------------------------------->
//          <?php display_weibo_find_people();?>
            </br>
//          <?php display_notice();?>
			<br/>
	        </div>
			</div>
		</div>
	</div>
 </div>

