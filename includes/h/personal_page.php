<style type="text/css">	  
	  /*returnTop*/
     p#back-to-top{ 
     position:fixed; 
     display:none; 
     bottom:60px; 
     right:100px; 
     } 
     p#back-to-top a{ 
     text-align:center; 
     text-decoration:none; 
     color:#d1d1d1; 
     display:block; 
      width:64px;
     font-size:15px	;  
     /*使用CSS3中的transition属性给跳转链接中的文字添加渐变效果*/
     -moz-transition:color 1s; 
     -webkit-transition:color 1s; 
     -o-transition:color 1s; 
      } 
     p#back-to-top a:hover{ 
     color:#979797; 
      } 
     p#back-to-top a span{ 
     background:transparent url(/static/imgs/sprite.png?1202) no-repeat -25px -290px; 
     border-radius:6px; 
     display:block; 
     height:64px; 
     width:56px; 
     margin-bottom:5px; 
    /*使用CSS3中的transition属性给<span>标签背景颜色添加渐变效果*/
    -moz-transition:background 1s; 
   -webkit-transition:background 1s; 
   -o-transition:background 1s; 
    }
    #back-to-top a:hover span{ 
       background:transparent url(/image/top.bng) no-repeat -25px -290px; 
    }
	</style>
<style>
	body {
		background: url("http://wx2.sinaimg.cn/mw1024/869f1348ly1fg5scrhor1j218g0gw766.jpg");
	}
</style>
<?php get_header(); ?>
</br></br></br>
  <div class="container" style="background-color:rgba(36,61,89,0.25)">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<!-----------------------------------------------背景图、头像和名称部分---------------------------------------------------------------->
			<div  style="background:url(http://wx2.sinaimg.cn/mw1024/869f1348ly1fg5scr9ar5j20g40ar75j.jpg);padding:50px;width:950px;margin:0 auto" >
			<img id="headurl"class="img-circle" width="100" height="100" src="images/weibo.jpg" />
			<p class="text-center" style="font-size:22px" id="username">
				<?php $userdata = get_full_user_info($_COOKIE['mail']);?>
				<?php echo $userdata['nname']?><br/>
			  <b id="descrip"class="text-center" style="font-size:12px"> 一句话介绍一下自己吧，让别人更了解你</b>
			</p>
			</div>
			
			
		</div>	
  </div>
 </div>