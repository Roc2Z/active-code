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
					<li>（1）网易通行证未在《新大话西游3》游戏中进行过消费；</li>
					<li>（2）未使用过任何一种大话3（经典版）“序列号”；</li>
					<li>（3）激活序列号的角色所在服务器内等级≤10级；（其它情况激活无效，推广员不能获得提成）；</li>
					<li>（4）网易通行证未在《新大话西游3》（免费版）游戏中进行过消费。</li>
				</ul>
				<h4>激活步骤:</h4>
				<ul class="intro_condi">
					<li>玩家进入《大话西游3》（经典版）游戏后，游戏等级小于等于10级，即可在“傲来国（200，150）NPC莲子”处输入序列号激活，并领取相应的奖励。</li>
					<li><img src="/active-code/Public/images/xdh3jdzy1.jpg" alt="第一步" /></li>
					<li>在莲子处选择我来激活自由人序列号 </li>
					<li><img src="/active-code/Public/images/xdh3jdzy2.jpg" alt="第二步" /></li>
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