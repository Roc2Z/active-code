<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="Generator" content="EditPlus®">
		<meta name="Author" content="">
		<meta name="Keywords" content="">
		<meta name="Description" content="">
		<title>请拿走你的序列号</title>
		<link rel="stylesheet" type="text/css" href="/active-code/Public/css/style.css"/>
		<script language="javascript">
			function copyText(){
				var clipBoardContent="";
				clipBoardContent+=document.getElementById("cdk").innerHTML;
				clipBoardContent+="";
				window.clipboardData.setData("Text",clipBoardContent);
				alert("复制成功");
			}
			//copyToClipBoard();
			
		</script>
	</head>
<body>
	<div class="allP">
			<div class="header">
		<ul class="nav">
			<li><a href="/active-code/">首页</a></li>
			<li id="gift"><a id="gift" href="">礼包</a>
				<ul id="nav_son" style="none">
					<li><a href="">大礼包一</a></li>
					<li><a href="">大礼包二</a></li>
				</ul>
			
			</li>
			<!--
			
			<li><a href="">大话1</a></li>
			<li><a href="">大话2</a></li>
			-->
			<span class="nav_text">★☆★最新序列号免费领取，100%可用，无限领，要多少有多少！★☆★</span>
		</ul>
		<div class="announcement">
			<img class="ancmt_img" src="/active-code/Public/images/iconk.gif" alt="图片" />
			<span class="ancmt_text">快捷领取：<a href="">梦幻西游账号</a><a href="">新手序列号</a></span>
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
			<div class="prompt"><span>温馨提示：</span>你已成功领取到号码，请及时激活使用</div>

			<div class="seqcode">请拿走你的序列号：
			
				<span id="cdk"><?php echo ($accode); ?></span>
				<!--	
				<input value="复 制" style="line-height:24px;font-size:14px" onclick="copyText('cdk')" type="button" id="copycode">
				-->
			</div>
			
			<div class="intro">
				<h1>使用说明</h1>

				<h4>序列号激活条件:</h4>
				<ul class="intro_condi">
					<li>未进入过《镇魔曲》的网易通行证才能成功激活， 且角色等级≤5级</li>
					
				</ul>
				<h4>第一种激活方式（页面激活）</h4>
				<ul class="intro_condi">
					<li> 第一步：打开《镇魔曲》官网，点击官网左边的“兑换中心”，（http://zmq.163.com/2015/duihuan/）并输入帐号密码登录。</li>
					<li> 第二步：在该页面中间，将已领取的序列号输入到框中，按提示完成页面激活和绑定即可。</li>
					<li><img src="/active-code/Public/images/261.jpg" alt="第一步" /></li>
					<li>第三步：进入游戏，达相应等级后即可在物品栏中点击礼包领取奖励。</li>
					
				</ul>
			
				<h4>第二种激活方式（游戏内激活）</h4>
				<ul class="intro_condi">
					<li>  第一步：创建角色并登录《镇魔曲》游戏内； </li>
					<li> 第二步：第一个角色可在游戏左上方的“礼包兑换”处，点击此处即可输入序列号 </li>
					<li>  注：创建的角色需要帐号首个角色，且角色等级≤5 级</li>
					
				</ul>
				<h4>礼包道具</h4>
				<ul class="intro_condi">
					<li> 玩家激活成功后，登录游戏，待等级达到15级后即可在游戏左上角的“礼包中心”，领取获得白金大礼包奖励，礼包中包含有如下的道具：</li>
					<li><img src="/active-code/Public/images/262.jpg" alt="第一步" /></li>
				</ul>
			
			</div>
		
		</div>


			<div class="footer">
		<ul class="about">
			<li><a href="">公司简介</a></li>
			<li><a href="">产品中心</a></li>
			<li><a href="">联系我们</a></li>
		
		</ul>
		<div class="comp"><span>©版权所有: HAHA网络有限责任公司<span></div>
		
	</div>
	</div>

</body>
</html>