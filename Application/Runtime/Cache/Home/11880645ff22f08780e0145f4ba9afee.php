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
			<span class="nav_text"></span>
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
					<li>（1）网易通行证帐号曾在《梦幻西游》中产生过消费；</li>
					<li>（2）30天以内登陆《梦幻西游》时间不足2小时，例如您发展的玩家在5月1日激活了您的老朋友序列号，他从4月1日起至5月1日登陆游戏的时间加总起来不超过2小时，即是符合该条件；</li>
					<li>（3）激活序列号的游戏ID等级不低于60级；</li>
					<li>（4）网易通行证帐号三个月内未曾激活任意一种梦幻序列号。</li>
					<li>（5）每个序列号只允许一个通行证使用，激活后序列号作废，不能再次激活；不满足条件的玩家不能激活，进入游戏后游戏系统给予不能激活提示。</li>
					<li>（6）购买角色后30天内不能激活。</li>
				</ul>
				<h4>激活步骤:</h4>
				<ul class="intro_condi">
					<li>（1）进入客户端后，梦幻西游中建邺城（ 10 ， 77 ）找到固定 NPC“ 推广登记员 ”激活；</li>
					<li><img src="/active-code/Public/images/91.jpg" alt="第一步" /></li>
					<li>（2）与“推广登记员”对话后，选择“激活老朋友序列号”</li>
					<li><img src="/active-code/Public/images/92.jpg" alt="第一步" /></li>
					<li>（3）选择后输入正确的老朋友序列号</li>
					<li><img src="/active-code/Public/images/93.jpg" alt="第一步" /></li>
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