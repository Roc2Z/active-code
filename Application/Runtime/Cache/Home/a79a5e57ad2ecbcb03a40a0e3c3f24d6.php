<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="Generator" content="EditPlus®">
		<meta name="Author" content="">
		<meta name="Keywords" content="">
		<meta name="Description" content="">
		<title>序列号还剩下<?php echo ($account); ?>条</title>
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
			<div class="prompt"><span>温馨提示：</span>你已成功领取到号码，请及时激活使用</div>

			<div class="seqcode">序列号还剩下<?php echo ($account); ?>条：
			
				<span id="cdk"><?php echo ($accode); ?></span>
				<!--	
				<input value="复 制" style="line-height:24px;font-size:14px" onclick="copyText('cdk')" type="button" id="copycode">
				-->
			</div>
			
			<div class="intro">
				<h1>使用说明</h1>
				<h4>序列号激活条件:</h4>
				<ul class="intro_condi">
					<li>输入序列号后，游戏自动判断是新玩家还是老玩家</li>
					<li>
						<table border="1">
							<tr>
								<td>新玩家</td>
								<td>老玩家</td>
							</tr>
							<tr>
								<td>① 等级小于3级的倩女2角色，且未激活过其他序列号<br>
									② 该角色是通行证下第一个角色（全新通行征）</td>
								<td>① 等级大于等于70级，且近30天内登录游戏不超过2小时的角色；<br>
									② 该角色对应URS，90天内未激活过任何其他序列号</td>
							</tr>
						<table>
					</li>
					
				</ul>
				<h4>激活步骤:</h4>
				<ul class="intro_condi">
					<li>第一步：登陆《倩女幽魂2》客户端，在游戏内蒲家村找NPC“倩女推广大使”（202,130）激活，如下图：</li>
					<li><img src="/active-code/Public/images/111.jpg" alt="第一步" /></li>
					<li> 第二步：点击“输入敦煌序列号领取奖励”，页面将弹出序列号激活框。如图：</li>
					<li><img src="/active-code/Public/images/112.jpg" alt="第一步" /></li>
					<li> 第三步：系统会自动赠送特权礼包到玩家的包裹中。如图：</li>
					<li><img src="/active-code/Public/images/113.jpg" alt="第一步" /></li>
					<li><img src="/active-code/Public/images/114.jpg" alt="第一步" /></li>
				</ul>
			
			</div>
		
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