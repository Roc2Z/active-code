<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="Generator" content="EditPlus®">
		<meta name="Author" content="">
		<meta name="Keywords" content="">
		<meta name="Description" content="">
		<link rel="stylesheet" href="/active-code/Public/css/style.css" type="text/css" />
		<title>输入验证码</title>
		<style type="text/css">
			.verify_form{
				width:250px;
				display:block;
				margin:10px auto;

			}
			.verify_text{
				margin-top:10px;
				padding-left:10px;
				width:180px;
				height:35px;
			}
			.refresh{
				width:45px;
				height:35px;
			}
			.sub{
				margin-top:10px;
				height:35px;
			}
		</style>
		<script type="text/javascript">
			 function changeVerify(){
				document.getElementById('verifyImg').src= '/active-code/Index/add_verify/' + Math.random();  
			 }
		</script>
	</head>
<body>
	<div class="allP">
			<div class="header">
		<ul class="nav">
			<li><a href="/active-code/">首页</a></li>
			<!--
			<li id="gift"><a id="gift" href="">礼包</a>
				<ul id="nav_son" style="none">
					<li><a href="">大礼包一</a></li>
					<li><a href="">大礼包二</a></li>
				</ul>
			
			</li>
			
			
			<li><a href="">大话1</a></li>
			<li><a href="">大话2</a></li>
			-->
			<span class="nav_text"></span>
		</ul>
		<div class="announcement">
			<img class="ancmt_img" src="/active-code/Public/images/iconk.gif" alt="图片" />
			<span class="ancmt_text"><a href="/active-code/Index/giftgot">大话西游3 易信达人序列号礼包，微信达人序列号礼包，微信福利礼包，新年祝福礼盒</a></span>
		</div>
	</div>
	<script type="text/javascript">
		window.onload = function(){
			var gift = document.getElementById('gift');
			var nav_son = document.getElementById('nav_son');
			if(nav_son.style.display=="none"){
			
			}else{
				nav_son.style.display="none";				
			}
			gift.onmouseover=function(){
				 nav_son.style.display="block"
			}
			gift.onmouseout=function(){
				 nav_son.style.display="none"
			}
			

		
		}
		
	</script>
		<div class="content">
			<form action="<?php echo U('Index/inspec');?>?type=<?php echo ($type); ?>" method="post" class="verify_form">
                <img src="<?php echo U('Index/add_verify');?>" id="verifyImg" onClick="changeVerify()"/>
                <input type="text" class="verify_text" name="verify" placeholder="验证码" />
                <button type="button" class="refresh" onClick="changeVerify()">刷新</button>
				<input class="sub" type="submit" name="提交" value="提交验证码"/>
            </form>
		</div>

			<div class="footer">
		<!--
		<ul class="about">
			<li><a href="">公司简介</a></li>
			<li><a href="">产品中心</a></li>
			<li><a href="">联系我们</a></li>
		
		</ul>
		-->
		<div class="comp"><span>©版权所有: HAHA网络有限责任公司<span><span><a href="/active-code/Index/aboutus">联系我们</a><span></div>
		
	</div>
	</div> 
</body>
</html>