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
					<li>只要玩家网易通行证内从未在《大唐无双》游戏内创建过角色，即可激活序列号。请登录游戏后尽快激活序列号以免超时。</li>
					
				</ul>
				<h4>激活步骤:</h4>
				<ul class="intro_condi">
					<li>进入游戏后，点击“奖励中心”按钮（屏幕右上角地图左侧的礼品图形按钮），打开奖励中心界面，选择兑换礼品功能选项，输入序列号即可。</li>
					
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