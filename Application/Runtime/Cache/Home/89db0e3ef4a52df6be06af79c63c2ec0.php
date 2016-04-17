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
					<li>从未进入过《新倩女幽魂》的网易通行证才能成功激活，每个序列号只能使用一次；</li>
					
				</ul>
				<h4>常规激活方式</h4>
				<ul class="intro_condi">
					<li>第一步：打开《新倩女幽魂》客户端，选择好服务器后，输入帐号密码登录。</li>
					<li>第二步：进入新建角色页面，创建角色。选择好职业、肤色、发色、性别并给角色取名字。</li>
					<li>第三步：连续点击角色左下方的空白框位置三次（昵称输入框左边，这里是一个暗格），出现序列号输入窗口。</li>
					<li><img src="/active-code/Public/images/131.jpg" alt="第一步" /></li>
					<li>第四步：输入序列号，点击确定激活成功。</li>
					<li>第五步：激活成功后进入游戏，系统会自动赠送特权礼包到玩家的背包中。每隔５级右键点击背包中的礼包，即可获得丰厚奖品。</li>
				</ul>
				<h4>预约激活方式：</h4>
				<ul class="intro_condi">
					<li>第一步：打开《新倩女幽魂》客户端，点击预约专属大区，再选择可预约的服务器。</li>
					
					<li><img src="/active-code/Public/images/132.jpg" alt="第一步" /></li>
					<li>第二步：登录帐号后，在输入昵称时，点击昵称三次，输入预约序列号</li>
					<li><img src="/active-code/Public/images/133.jpg" alt="第一步" /></li>
					<li>第三步：弹出资料输入窗口，请按提示输入相关信息，如序列号、手机号，确定后进入游戏新建角色界面。</li>
					<li><img src="/active-code/Public/images/134.jpg" alt="第一步" /></li>
					<li>第四步：即完成预约！</li>
					<li><img src="/active-code/Public/images/135.jpg" alt="第一步" /></li>
					<li>玩家激活成功后，登录游戏即可获得价值1888元的奖励大礼包</li>
				</ul>
				<h4>倩女新手1888元礼包</h4>
				<ul class="intro_condi">
					<li>1、成功激活序列号后，礼包会自动存入背包内。</li>
					
					
					<li>2、每升5级，右击礼包就能获得对应奖品。</li>
					
					<li>3、每个游戏帐号限领一个新手礼包。</li>
					
					<li>4、礼包内容：</li>
					
					<li><img src="/active-code/Public/images/136.jpg" alt="第一步" /></li>
					
					<li><img src="/active-code/Public/images/139.jpg" alt="第一步" /></li>
					

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