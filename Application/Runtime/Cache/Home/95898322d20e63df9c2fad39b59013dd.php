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
					<li>只要玩家网易通行证未登录过《天下3》，第一次登录4小时内即可激活序列号。序列号有效期90天，请提醒玩家尽快使用。</li>
					<li>注意：如果通行证曾登陆过网易其它游戏，则无法获得分成，请使用全新通行证。</li>
					
				</ul>
				<h4>激活步骤:</h4>
				<ul class="intro_condi">
					<li>玩家登陆游戏后，点击右上角小地图奖章图标进入奖励列表。</li>
					<li><img src="/active-code/Public/images/221.jpg" alt="第一步" /></li>
					<li> 选择“活动奖励——官方活动奖励——GT群雄序列号奖励”，输入序列号，点击激活即可完成。</li>
					<li> 成功激活序列号后，“已激活奖励”-“GT群雄序列号奖励”，点击“领取”即可获得奖励。</li>
					
				</ul>
				<h4>礼包道具</h4>
				<ul class="intro_condi">
					<li>5级 焰火 星汉灿烂*5 神农秘药*1 小浣熊*1（7天）</li>
					<li>10级 红花散*10 提神散*10 新手小康包优惠券*1</li>
					<li> 15级 六道轮回*1 固本培元丹（获得固本培元效果）*10</li>
					<li> 20级 平气丸*10 醒脑丹*10 绿灵*1（7天）</li>
					<li> 30级 止血丹*10 六合散*10 妖魔异化内丹*5</li>
					<li> 40级 青云飞行符*3 红线*2 风火轮（7天）</li>
					<li> 50级 优惠券*五十武库 七夕（7天） 锦园春光环（7天） 优惠券 月钻*2</li>
					
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