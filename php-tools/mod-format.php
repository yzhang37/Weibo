<?php
function display_roll_picture(){
?>
<div class="row clearfix">
	<div class="col-md-12 column">
		<div class="carousel slide" id="carousel-577881">
			<ol class="carousel-indicators">
				<li class="active" data-slide-to="0" data-target="#carousel-577881">
				</li>
				<li data-slide-to="1" data-target="#carousel-577881">
				</li>
				<li data-slide-to="2" data-target="#carousel-577881">
				</li>
			</ol>
			<div class="carousel-inner">
				<div class="item active">
					<img alt="" src="http://wx4.sinaimg.cn/mw1024/869f1348ly1fg5sdbqwz1j218g0dw3z2.jpg" />
					<div class="carousel-caption">
						<h4>
							努力
						</h4>
						<p>
							Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
						</p>
					</div>
				</div>
				<div class="item">
					<img alt="" src="http://wx4.sinaimg.cn/mw1024/869f1348ly1fg5sdbwwcoj218g0dwgnw.jpg" />
					<div class="carousel-caption">
						<h4>
							拼搏
						</h4>
						<p>
							Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
						</p>
					</div>
				</div>
				<div class="item">
					<img alt="" src="http://wx1.sinaimg.cn/mw1024/869f1348ly1fg5sdc3jbvj218g0dwaba.jpg" />
					<div class="carousel-caption">
						<h4>
							自由
						</h4>
						<p>
							Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
						</p>
					</div>
				</div>
			</div> <a class="left carousel-control" href="#carousel-577881" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-577881" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>
	</div>
</div>
<?php
}
function result_info(){
?>
<div class="modal fade" id="result_info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
			</div>
		</div>
	</div>
</div>
<?php
}
//<!-------------------------显示一条微博的模板----------------------------------------------------->
function display_weibo_single($row){
?>
<!----------------------------------------------一条消息------------------------------------------->
<div class="row clearfix" style="background-color:white;position:relative;">
	<div class="col-md-12 column">
		<!-----------------------------------头像和名称------------------------------------>			
		<div class="row clearfix">
			<div class="col-md-8 column">
				<div class="media">
					 <a href="#" class="pull-left" target="_blank"><img src="http://wx4.sinaimg.cn/mw1024/869f1348ly1fg5sdcjxhkj203c01cq36.jpg" class="media-object" style="border-radius:50%;width:80px;height:80px;" alt='' /></a>
					<div class="media-body">
						<a href="#" target="_blank"><h4 class="media-heading">
							<?php echo $row['nname']?>
						</h4></a>
						<p id="time" class="txt" style="text-align:left;font-size:12px;color:#B3B3B3"><?php echo $row['time']?></p>
						<?php
							if ($row['sign'] != NULL) {
							?>
							<p id="descrip"><?php echo $row['sign'] ?></p>
						<?php } ?>
					</div>
				</div>
			</div>
			<div class="col-md-1 column"></div>
		</div>
		<!------------------------------------中间消息主体------------------------------>
		<div class="row clearfix">
			<div class="col-md-12 column">
			<!---------------------------文字部分------------------------->
				<div class="txt" style="font-family:sans-serif;">
					<?php echo $row['content'] ?>
				</div></br>
			</div>
		</div>
		<!---------------------------------------下面的转发、评论、点赞--------------------------------------->
		<div class="row clearfix">
			<div class="col-md-12 column">
			<div class="col-md-9 column"></div>
					<div class="col-md-3 column"><div class="txt">
					<!--转发数量-->
					<span class="glyphicon glyphicon-edit"></span><?php echo $row['tran_cnt']?></span>&nbsp;
					<!--点赞数量-->
					<span class="glyphicon glyphicon-thumbs-up"></span><?php echo $row['like_cnt']?></span></div>
					</div>						
			</div>
		</div>
	</div>
</div><br/>
<?php
}
function display_common_home_login(){
?>
<div class="row clearfix">
     <div class="col-md-12 column" style="width:280px;;background-color:white;opacity:0.8;margin-top:60px;margin-left:10px;">
           <h3 align="center">
	          登录<br />
           </h3>
    <div class="form-horizontal" role="form">
	          <div class="form-group">
		         <label for="inputEmail3" class="col-sm-3 control-label" >邮箱</label>
		         <div class="col-sm-9">
			     <input class="form-control" id="mail"/>
		   </div>
	          </div>
	  <div class="form-group">
		 <label for="inputPassword3" class="col-sm-3 control-label">密码</label>
		<div class="col-sm-9">
			<input class="form-control"  id="pwd" type="password" />
		</div>
	  </div>
	  <div class="form-group">
		<div class="col-sm-offset-4 col-sm-6">
			 <button id="login" type="submit" class="btn btn-default">登录</button>
		</div>
	  </div>
    </div>
    </div>
</div>
<?php
}
function display_hot_topic(){
?>
<div class="row clearfix">
    <div class="col-md-12 column" style="width:280px;background-color:white;opacity:0.8;margin-left:10px;">
    <h4 class="obj_name"><span class="main_title W_fb W_f14">热门话题</span></h4>
    <div class="WB_innerwrap">
     <div class="list_wrap">
     <ul class="ul_hot" id="unlogin_hottopic_0">
      	<li class="txt">
          <a href="#">#约吧大明星#</a><span title="阅读量" style="float:right">16.9亿</span>
        </li>
        <li class="txt">
          <a href="#">#欢乐颂2#</a><span title="阅读量" style="float:right">23.9亿</span>
        </li>
        <li class="txt">
          <a href="#">#林志玲为谁心动#</a><span title="阅读量" style="float:right">12.9万</span>
        </li>
        <li class="txt">
          <a href="#">#台湾同性恋合法#</a><span title="阅读量" style="float:right">45.9万</span>
        </li>
        <li class="txt">
          <a href="#">#小怪兽出没#</a><span title="阅读量" style="float:right">21.9万</span>
        </li>
        <li class="txt">
          <a href="#">#今生有你#</a><span title="阅读量" style="float:right">1234.9万</span>
        </li>
        <li class="txt">
          <a href="#">#安卓表情包退休#</a><span title="阅读量" style="float:right">11.9万</span>
        </li>
        <li class="txt">
          <a href="#">#突然开心#</a><span title="阅读量" style="float:right">16.9万</span>
        </li>
        <li class="txt">
          <a href="#">#黄小蕾事件反转#</a><span title="阅读量" style="float:right">322.9万</span>
        </li>
    </ul>
    </div>
    </div>
    </div>
</div><br/>

<div class="row clearfix">
    <div class="col-md-12 column">
	<a href="#"><img src="http://wx4.sinaimg.cn/mw1024/869f1348ly1fg5sdce3eoj209s064752.jpg" style="width:275px;opacity:0.8;"/></a>
	</div>
</div>
<?php } 
function display_weibo_find_people(){
?>
<div class="row clearfix">
        <div class="col-md-12 column">
        
        </div>
    <div class="WB_innerwrap" style="background-color:white;opacity:0.7;margin-left:10px;list-style-type:none;">
    <div class="m_wrap clearfix">
    <h2 style="margin-left:10px">微博找人</h2><hr/>
    <div class="list_wrap">
    <h4 class="text_title">名人</h4>
        <ul class="ul_text">
                <li class="li_text"><a><i class="item_icon"><img src="http://img.t.sinajs.cn/t6/style/images/connect/finder/1087030002_892_1003_0.png" class="pic"></i><span class="text width_fix W_autocut">明星</span></a></li>
                <li class="li_text"><a><i class="item_icon"><img src="http://img.t.sinajs.cn/t6/style/images/connect/finder/1087030002_892_1001_0.png" class="pic"></i><span class="text width_fix W_autocut">商界</span></a></li>
                <li class="li_text"><a><i class="item_icon"><img src="http://img.t.sinajs.cn/t6/style/images/connect/finder/1087030002_892_1007_0.png" class="pic"></i><span class="text width_fix W_autocut">媒体精英</span></a></li>
                <li class="li_text"><a><i class="item_icon"><img src="http://img.t.sinajs.cn/t6/style/images/connect/finder/1087030002_892_1005_0.png" class="pic"></i><span class="text width_fix W_autocut">作家</span></a></li>
                <li class="li_text"><a><i class="item_icon"><img src="http://img.t.sinajs.cn/t6/style/images/connect/finder/1087030002_892_1004_0.png" class="pic"></i><span class="text width_fix W_autocut">政府官员</span></a></li>
        </ul>
    </div>

    <div class="list_wrap">
    <h4 class="text_title">专家</h4>
        <ul class="ul_text">
                <li class="li_text"><a><i class="item_icon"><img src="http://img.t.sinajs.cn/t6/style/images/connect/finder/1087030002_558_3_2017.png" class="pic"></i><span class="text width_fix W_autocut">医疗</span></a></li>
                <li class="li_text"><a><i class="item_icon"><img src="http://img.t.sinajs.cn/t6/style/images/connect/finder/1087030002_558_3_2018.png" class="pic"></i><span class="text width_fix W_autocut">育儿</span></a></li>
                <li class="li_text"><a><i class="item_icon"><img src="http://img.t.sinajs.cn/t6/style/images/connect/finder/1087030002_558_3_5002.png" class="pic"></i><span class="text width_fix W_autocut">IT互联网</span></a></li>
                <li class="li_text"><a><i class="item_icon"><img src="http://img.t.sinajs.cn/t6/style/images/connect/finder/1087030002_558_3_5012.png" class="pic"></i><span class="text width_fix W_autocut">电台</span></a></li>
                <li class="li_text"><a><i class="item_icon"><img src="http://img.t.sinajs.cn/t6/style/images/connect/finder/1087030002_558_3_5001.png" class="pic"></i><span class="text width_fix W_autocut">财经</span></a></li>
                <li class="li_text"><a><i class="item_icon"><img src="http://img.t.sinajs.cn/t6/style/images/connect/finder/1087030002_558_3_2016.png" class="pic"></i><span class="text width_fix W_autocut">教育</span></a></li>
                <li class="li_text"><a><i class="item_icon"><img src="http://img.t.sinajs.cn/t6/style/images/connect/finder/1087030002_558_3_5013.png" class="pic"></i><span class="text width_fix W_autocut">法律</span></a></li>
                <li class="li_text"><a><i class="item_icon"><img src="http://img.t.sinajs.cn/t6/style/images/connect/finder/1087030002_558_3_2014.png" class="pic"></i><span class="text width_fix W_autocut">美妆</span></a></li>
                <li class="li_text"><a><i class="item_icon"><img src="http://img.t.sinajs.cn/t6/style/images/connect/finder/1087030002_854_2024_0.png" class="pic"></i><span class="text width_fix W_autocut">艺术</span></a></li>
                <li class="li_text"><a><i class="item_icon"><img src="http://img.t.sinajs.cn/t6/style/images/connect/finder/1087030002_558_3_5015.png" class="pic"></i><span class="text width_fix W_autocut">设计</span></a></li>
                <li class="li_text"><a><i class="item_icon"><img src="http://img.t.sinajs.cn/t6/style/images/connect/finder/1087030002_558_3_5005.png" class="pic"></i><span class="text width_fix W_autocut">房产家装</span></a></li>
                <li class="li_text"><a><i class="item_icon"><img src="http://img.t.sinajs.cn/t6/style/images/connect/finder/1087030002_558_3_5006.png" class="pic"></i><span class="text width_fix W_autocut">汽车</span></a></li>
                <li class="li_text"><a><i class="item_icon"><img src="http://img.t.sinajs.cn/t6/style/images/connect/finder/1087030002_558_3_5008.png" class="pic"></i><span class="text width_fix W_autocut">交通</span></a></li>
                <li class="li_text"><a><i class="item_icon"><img src="http://img.t.sinajs.cn/t6/style/images/connect/finder/1087030002_558_3_2013.png" class="pic"></i><span class="text width_fix W_autocut">职业招聘</span></a></li>
                <li class="li_text"><a><i class="item_icon"><img src="http://img.t.sinajs.cn/t6/style/images/connect/finder/1087030002_558_3_5011.png" class="pic"></i><span class="text width_fix W_autocut">婚庆</span></a></li>
                <li class="li_text"><a><i class="item_icon"><img src="http://img.t.sinajs.cn/t6/style/images/connect/finder/1087030002_558_3_5014.png" class="pic"></i><span class="text width_fix W_autocut">宗教</span></a></li>
         </ul>
     </div>

    <div class="list_wrap">
    <h4 class="text_title">兴趣</h4>
        <ul class="ul_text">
                <li class="li_text"><a><i class="item_icon"><img src="http://img.t.sinajs.cn/t6/style/images/connect/finder/1087030002_854_2025_0.png" class="pic"></i><span class="text width_fix W_autocut">时尚</span></a></li>
                <li class="li_text"><a><i class="item_icon"><img src="http://img.t.sinajs.cn/t6/style/images/connect/finder/1087030002_854_2006_0.png" class="pic"></i><span class="text width_fix W_autocut">美女</span></a></li>
                <li class="li_text"><a><i class="item_icon"><img src="http://img.t.sinajs.cn/t6/style/images/connect/finder/1087030002_854_2012_0.png" class="pic"></i><span class="text width_fix W_autocut">电影</span></a></li>
                <li class="li_text"><a><i class="item_icon"><img src="http://img.t.sinajs.cn/t6/style/images/connect/finder/1087030002_854_2021_0.png" class="pic"></i><span class="text width_fix W_autocut">电视剧</span></a></li>
                <li class="li_text"><a><i class="item_icon"><img src="http://img.t.sinajs.cn/t6/style/images/connect/finder/1087030002_854_2011_0.png" class="pic"></i><span class="text width_fix W_autocut">音乐</span></a></li>
                <li class="li_text"><a><i class="item_icon"><img src="http://img.t.sinajs.cn/t6/style/images/connect/finder/1087030002_854_2001_0.png" class="pic"></i><span class="text width_fix W_autocut">动漫</span></a></li>
                <li class="li_text"><a><i class="item_icon"><img src="http://img.t.sinajs.cn/t6/style/images/connect/finder/1087030002_854_2019_0.png" class="pic"></i><span class="text width_fix W_autocut">游戏</span></a></li>
                <li class="li_text"><a><i class="item_icon"><img src="http://img.t.sinajs.cn/t6/style/images/connect/finder/1087030002_854_2010_0.png" class="pic"></i><span class="text width_fix W_autocut">星座</span></a></li>
                <li class="li_text"><a><i class="item_icon"><img src="http://img.t.sinajs.cn/t6/style/images/connect/finder/1087030002_854_2004_0.png" class="pic"></i><span class="text width_fix W_autocut">搞笑</span></a></li>
                <li class="li_text"><a><i class="item_icon"><img src="http://img.t.sinajs.cn/t6/style/images/connect/finder/1087030002_854_2007_0.png" class="pic"></i><span class="text width_fix W_autocut">情感两性</span></a></li>
                <li class="li_text"><a><i class="item_icon"><img src="http://img.t.sinajs.cn/t6/style/images/connect/finder/1087030002_854_2020_0.png" class="pic"></i><span class="text width_fix W_autocut">运动健身</span></a></li>
                <li class="li_text"><a><i class="item_icon"><img src="http://img.t.sinajs.cn/t6/style/images/connect/finder/1087030002_854_2008_0.png" class="pic"></i><span class="text width_fix W_autocut">体育</span></a></li>
                <li class="li_text"><a><i class="item_icon"><img src="http://img.t.sinajs.cn/t6/style/images/connect/finder/1087030002_854_2002_0.png" class="pic"></i><span class="text width_fix W_autocut">萌宠</span></a></li>
                <li class="li_text"><a><i class="item_icon"><img src="http://img.t.sinajs.cn/t6/style/images/connect/finder/1087030002_854_2023_0.png" class="pic"></i><span class="text width_fix W_autocut">美食</span></a></li>
                <li class="li_text"><a><i class="item_icon"><img src="http://img.t.sinajs.cn/t6/style/images/connect/finder/1087030002_558_3_5003.png" class="pic"></i><span class="text width_fix W_autocut">旅游</span></a></li>
                <li class="li_text"><a><i class="item_icon"><img src="http://img.t.sinajs.cn/t6/style/images/connect/finder/1087030002_558_3_2015.png" class="pic"></i><span class="text width_fix W_autocut">摄影</span></a></li>
                <li class="li_text"><a><i class="item_icon"><img src="http://img.t.sinajs.cn/t6/style/images/connect/finder/1087030002_854_2026_0.png" class="pic"></i><span class="text width_fix W_autocut">历史</span></a></li>
                <li class="li_text"><a><i class="item_icon"><img src="http://img.t.sinajs.cn/t6/style/images/connect/finder/1087030002_854_2026_0.png" class="pic"></i><span class="text width_fix W_autocut">军事</span></a></li>
                <li class="li_text"><a><i class="item_icon"><img src="http://img.t.sinajs.cn/t6/style/images/connect/finder/1087030002_558_3_5009.png" class="pic"></i><span class="text width_fix W_autocut">科学</span></a></li>
                <li class="li_text"><a><i class="item_icon"><img src="http://img.t.sinajs.cn/t6/style/images/connect/finder/1087030002_854_2009_0.png" class="pic"></i><span class="text width_fix W_autocut">数码</span></a></li>
             </ul>
    </div>

    <div class="list_wrap">
     <h4 class="text_title">机构</h4>
            <ul class="ul_text">
                <li class="li_text"><a><i class="item_icon"><img src="http://img.t.sinajs.cn/t6/style/images/connect/finder/1087030002_558_3_5004.png" class="pic"></i><span class="text width_fix W_autocut">政务</span></a></li>
                <li class="li_text"><a><i class="item_icon"><img src="http://img.t.sinajs.cn/t6/style/images/connect/finder/1087030002_558_3_5007.png" class="pic"></i><span class="text width_fix W_autocut">媒体</span></a></li>
            </ul>
    </div>
    </div>
    </div>
</div>
<?php	
}
function display_notice(){
?>
	<div class="row clearfix">
		        <div class="col-md-12 column" style="width:280px;background-color:white;opacity:0.7;margin-left:10px;">
                <h4 class="obj_name"><span class="main_title W_fb W_f14">公告栏</span></h4>
                <div class="WB_innerwrap">
			     <div class="list_wrap">
		         <ul class="ul_hot" id="unlogin_hottopic_0">
		          	<li class="txt">
		              <a href="#">《全国辟谣平台》</a>
		            </li>
		            <li class="txt">
		              <a href="#">《首都互联网协会发布坚守七条底线倡议书》</a>
		            </li>
		        </ul>
		        </div>
                </div>
	            </div>
	        </div>
<?php
}
function display_fan_fo_msg_cnt(){
?>
<div class="row clearfix">
		         <div class="col-md-12 column" style="width:280px;background-color:white;opacity:0.8;margin-top:40px;margin-left:10px;">
			<table style="text-align:center">
            <tr><td><a href="http://localhost/personal_page.html"><img id="head" src="" style="border-radius:50%;width:100px;height:100px;"/></td></tr>
            <tr><td style="height:30px"><a id="username" href="http://localhost/personal_page.html"></a></td></tr>
            <tr><td id="descrip" style="height:30px"></td></tr></table>
			<table style="margin-left:30px;">
            <tr>
              <td id="num_folllow" style="width:90px;height:20px;"><?php?></td>
              <td id="num_fans" style="width:90px;height:20px;"><?php?></td>
              <td id="num_weibo" style="width:90px;height:20px;"><?php?></td>
            </tr>
            <tr>
               <td style="width:80px;height:20px;">关注</td>
               <td style="width:80px;height:20px;">粉丝</td>
               <td style="width:80px;height:20px;">微博</td>
             </tr>
             </table>
		        </div>
	        </div>
<?php
}
?>