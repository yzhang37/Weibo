<?php
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
?>



<!-------------------------显示一条微博的模板----------------------------------------------------->
<?php
function display_weibo_single($row){
?>
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
<?php } ?>
	

