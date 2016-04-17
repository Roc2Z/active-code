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
					<li>（1）网易通行证从未进入过《新大话西游2》游戏；且激活的服务器开放超过30天。</li>
					<li>提示：刚注册的通行证帐户进入游戏时，需要进行防沉迷验证，请先验证后登录并激活序列号；或者请耐心的等待30秒后再操作。</li>
					<li>（2）新手序列号与新大话2游戏其他新手序列号互斥，不能重复激活。</li>
				</ul>
				<h4>激活步骤:</h4>
				<ul class="intro_condi">
					<li>1）创建角色并登录游戏，在东海渔村（22，49）或长安（455，109）寻找“御武盟盟主”对话，点击“我想激活新手序列号”；</li>
					<li><img src="/active-code/Public/images/xdh2jdxs1.jpg" alt="第一步" /></li>
					<li>（2）点击“我想激活新手序列号”后，系统会自动弹出序列号输入窗口，直接输入序列号和确认即可；</li>
					<li>提示：若激活成功，1、系统会提示您已成功激活序列号；2、若您还未领取宠物，系统会提示您先领取宠物。</li>
					<li>（3）当系统提示您成功激活序列号后，请先找“宠物仙子”处领取宠物，才能找“御武盟盟主”对话获得小精卫。</li>
					<li>图1、宠物领取提示：</li>
					<li><img src="/active-code/Public/images/xdh2jdxs2.jpg" alt="第二步" /></li>
					<li>图2、宠物领取：</li>
					<li><img src="/active-code/Public/images/xdh2jdxs3.jpg" alt="第二步" /></li>
					<li>图3、点击“我想领取奖励”，领取小精卫</li>
					<li><img src="/active-code/Public/images/xdh2jdxs4.jpg" alt="第二步" /></li>
	
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