<style>
	body {
		background: url("http://wx3.sinaimg.cn/mw1024/869f1348ly1fg5sdb5qkaj218g0pa75d.jpg");
	}
</style>
<script type="text/javascript" src="../../js/login.js"></script> 
<!-----------------------------------------------------------------头部------------------不需要写PHP，但是有搜索看情况是否有关键字搜索并显示--------------------------------->

<div class="container" style="background-color:rgba(36,61,89,0.25);">

  <!---------------------------------------------------------------左部-----------------------------都是空链接，不需要PHP----------------------------------------------------->
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="row clearfix" >
				<div class="col-md-2 column">
					<ul class="nav nav-tabs nav-stacked" style="position:fixed;width:170px;top:60px;font-size:18px;background-color:#E8E8E8;opacity:0.8;">
								<li class="active">
									 <a href="/index.php" ><span class="glyphicon glyphicon-flag" style="color: rgb(0,0,0);"> 热门</span></a>
								</li>
								<li>
									 <a href="#"><span class="glyphicon glyphicon-film" style="color: rgb(0,0,0);"> 视频</span></a>
								</li>
								<li>
									 <a href="#"><span class="glyphicon glyphicon-hand-right" style="color: rgb(0,0,0);"> 明星</span></a>
								</li>
								<li>
									 <a href="#"><span class="glyphicon glyphicon-hand-right" style="color: rgb(0,0,0);"> 社会</span></a>
								</li>
								<li>
									 <a href="#"><span class="glyphicon glyphicon-hand-right" style="color: rgb(0,0,0);"> 情感</span></a>
								</li>
								<li>
									 <a href="#"><span class="glyphicon glyphicon-hand-right" style="color: rgb(0,0,0);"> 时尚</span></a>
								</li>
								<li>
									 <a href="#"><span class="glyphicon glyphicon-hand-right" style="color: rgb(0,0,0);"> 军事</span></a>
								</li>
								<li>
									 <a href="#"><span class="glyphicon glyphicon-hand-right" style="color: rgb(0,0,0);"> 搞笑</span></a>
								</li>
								<li>
									 <a href="#"><span class="glyphicon glyphicon-heart" style="color: rgb(0,0,0);"> 粉丝投稿</span></a>
								</li>
					</ul>
				</div>
				<!-----------------------------------------------------------中部----------------------去掉定时轮询，只需要不断加载消息（瀑布流）------------------------------------------>
				<div class="col-md-7 column" style="position:relative;top:60px;">
					<!-----------------------------------------------------------轮播图-------=----------------只是页面效果，不用PHP------------------------------------------>
					<?php display_roll_picture(); ?>
					<br/>
					<!-----------------------------------------------------消息展示调用模板（模板代码在php-tool/mod-format.php里）---------------------------------------------->
					<?php 
					//$get_query=mysql_query("CALL server_roomtype_info");
						$query = mysql_query("SELECT * FROM user NATURAL JOIN 
							(SELECT * FROM publish WHERE msg_type <> 2 ORDER BY time DESC) AS top10
								NATURAL JOIN message ORDER BY time DESC");
						while ($row=mysql_fetch_array($query)) {
							display_weibo_single($row);
						}		
					?>
				<!--------------------------------------------------------------消息展示结束（分页加载）------------------------------------------->
				</div>

				<!------------------------------------------------------------------右部------------------------------------------------------------------------>
				<div class="col-md-3 column" >
					<!------------------------------------------------------------------登录框------------------登录是网页端验证基本要求，需要PHP查询数据库是否和记录一致------------------------------------------------------->		
					<?php display_common_home_login(); ?>
					<br/>
					<!---------------------------------------热门话题+微博话题-----------------------------------以下都是空链接，不需要PHP-------------------------------->
					<?php display_hot_topic();?>		    
					<br/>
					<!------------------------------------------------微博找人--------------------------------------------->
					<?php display_weibo_find_people();?>
	    		</div>	
			</div>
		</div>
	</div>
 </div>


