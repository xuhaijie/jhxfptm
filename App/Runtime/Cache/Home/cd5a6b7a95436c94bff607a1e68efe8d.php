<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<!--
            __     __
           /  \~~~/  \                                                                       |      金华激石信息技术有限公司      |
     ,----(     ..    )
    /      \__     __/
   /|         (\  |(
  ^ \   /___\  /\ |
     |__|   |__|-"
-->
<html>
<head>
	
<meta charset="UTF-8">
	<title><?php echo ($title); ?></title>
<base href="__APP__/">
	<meta name="keywords" content="<?php echo ($web_keywords); ?>">
	<meta name="description" content="<?php echo ($web_description); ?>">
	<meta http-equiv="x-ua-compatible" content="ie-edge,chrome=1"><!--//低版本IE支持CSS3属性-->
	<?php if($config["switch_mbaidu"] == '1'): ?><link rel="alternate" type="application/vnd.wap.xhtml+xml" media="handheld" href="http://<?php echo ($config["web_url"]); ?>/m/"/><?php endif; ?>
	<script src="__TMPL__Public/js/jquery1.8.js"></script>
	<script src="__TMPL__Public/js/pic.js"></script>
	<link rel="stylesheet/less" type="text/css" href="__TMPL__Public/css/style.css">
	<link rel="stylesheet/less" type="text/css" href="__TMPL__Public/css/animate.min.css">
	<!--[if lte IE 7]><script src="__TMPL__Public/css/lte-ie7.js"></script><![endif]-->
	<!-- <link rel="stylesheet" href="__TMPL__Public/Css/skrles.css?v=<?php echo time(); ?>"> -->
	<link rel="stylesheet/less" type="text/css" href="__TMPL__Public/css/skrles.less">
	<script src="__TMPL__Public/css/less.js" type="text/javascript"></script>
	<script src="__TMPL__Public/js/sky.js" type="text/javascript"></script>
    <script src="__TMPL__Public/js/wow.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="__TMPL__Public/js/selectivizr.js"></script><!--//低版本IE支持CSS3属性-->
<script type="text/javascript" src="__TMPL__Public/js/superslide.2.1.js"></script><!--//大图效果-->
<script src="__TMPL__Public/js/L_slide2.js" type="text/javascript"></script>
<script>
	document.createElement("section");
	document.createElement("article");
	document.createElement("footer");
	document.createElement("header");
	document.createElement("hgroup");
	document.createElement("nav");
	document.createElement("menu");
</script>
<script>
    if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
        new WOW().init();
    };
</script>


	<script>
		$(function() {
			var $nav=$("#Nav-1"),
				$lido=$(".<?php echo ($lid['name']); echo ($lid['id2']); ?>"),
				$sfl=$("#S-fl");
				$yido=$("#Nav-1").find('>li').eq(<?php echo ($yid); ?>);
			$yido.addClass("lon");
			gezong($yido,$nav);

			if($lido){
				$lido.addClass("lon");
				gezong($lido,$sfl);
			}
			
			function gezong ($a,$b) {
				$b.find(">li").hover(function(){
					var $this=$(this);
						$a.removeClass("lon");
						$this.addClass("lon");
				},function(){
					var $this=$(this);
						$this.removeClass("lon");
						$a.addClass("lon");
				});
			}
		});
	</script>
<?php echo ($config["code_head"]); ?>



</head>
<body>

<div class="header">
	<div class="utility">
		<div class="header_top">
			<!--<span>欢迎光临<?php echo ($config['web_name']); ?>网站！</span>-->
			<a style="CURSOR: hand" onClick="AddFavorite('<?php echo ($title); ?>',location.href)" title="" href="####">加入收藏 | </a>
			<a href="####" onclick="SetHome(this,'http://<?php echo ($_SERVER ['HTTP_HOST']); ?>')">设为首页</a>
		</div>
	</div>
	<div class="top">
			<a href="__ROOT__/" titile="<?php echo ($config['name']); ?>">
				<img  src="__ROOT__/__UPLOAD__/<?php echo ($config['logo']); ?>" alt="Logo" class="logo wow zoomInLeft">
			</a>
	</div>
	<div class="header_nav_k">
		<div class="header_nav">
			<ul class="nav" id="Nav-1">
				<?php function scnav($str,$a=1) { $att=""; if($str['cun']){ $att=$a>1?'<ul style="top:-7px;left:106px;" class="dropdown-menu">':'<ul class="dropdown-menu">'; foreach ($str['cun'] as $k => $v) { $hlz=scnav($v,$a+1); $att.=sprintf('<li id="%s" class="dropdown"><a href="__ROOT__/%s">%s</a>',$v['tid'],$v['url'],$hlz?$v['name']:$v['name']); $att.=$hlz; $att.='</li>'; } $att.='</ul>'; } return $att; } $att=''; foreach ($fnav as $k => $v) { $nav_arr= explode(',',$v['name']) ; $hlz=scnav($v); $att.=sprintf('<li id="%s" class="dropdown"><a href="__ROOT__/%s">%s<br /><font class="en">%s</font></a>',$v['tid'],$v['url'],$nav_arr[0],$nav_arr[1]); $att.=$hlz; $att.='</li>'; } echo($att); ?>
			</ul>
		</div>
	</div>
</div>

<div class="clear2"></div>
<div class="banner">
    <div id="KinSlideshow" >
        <ul>
            <?php if(is_array($flash)): $i = 0; $__LIST__ = $flash;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li style="background:url('__ROOT__/__UPLOAD__/<?php echo ($vo["img"]); ?>') no-repeat 50% 0;"><a href="<?php echo ($vo["link"]); ?>"  alt="<?php echo ($vo["title"]); ?>"></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>





	<div class="main">
		<div class="product">
			<div class="product-dh"></div>
			<div class="class">
				<ul>
					<?php if(is_array($type)): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(is_array($vo["son"])): $i = 0; $__LIST__ = $vo["son"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?><li><a href="__APP__/product/type/<?php echo ($vo1["id"]); ?>" class="btn-span-20"><span data-hover="<?php echo ($vo1["name"]); ?>"><?php echo ($vo1["name"]); ?></span></a></li><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
			<div class="product-nr">
				<div id="demo" style=" width:100%; overflow:hidden;">
					<table align=left cellpadding="0" cellspacing="0" border="0" width="100%">
						<tr>
							<td id="demo1" valign=top ><div style="width:1530px; ">
								<?php if(is_array($product)): $i = 0; $__LIST__ = array_slice($product,0,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="picture">
										<div class="picture1"> <a href="__APP__/product/<?php echo ($vo["id"]); ?>" target="_blank"><img src="__ROOT__/__UPLOAD__/in_<?php echo ($vo["img"]); ?>" alt="<?php echo ($vo["title"]); ?>" onload="AXImg(this,283,283)"/></a></div>
										<div class="picture2"> <a href="__APP__/product/<?php echo ($vo["id"]); ?>" target="_blank"><?php echo (mb_substr($vo["title"],0,20,'utf-8')); ?></a></div></div><?php endforeach; endif; else: echo "" ;endif; ?></div>
							</td>
							<td id="demo2" valign=top></td>
						</tr>
					</table>
				</div>
				<a href="product/type/6" class="more"></a>
			</div>
		</div>
		<div class="poster"></div>
	</div>
<div class="case">
	<div class="main">
		<div class="case-dh"></div>
		<div class="case-nr">
			<ul>
				<?php if(is_array($honor)): $i = 0; $__LIST__ = array_slice($honor,0,8,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="case">
						<div class="case1">
							<a href="__APP__/product/<?php echo ($vo["id"]); ?>" target="_blank"><img src="__ROOT__/__UPLOAD__/in_<?php echo ($vo["img"]); ?>" alt="<?php echo ($vo["title"]); ?>" onload="AXImg(this,281,281)"/></a>
						</div>
						<div class="case2">
							<a href="__APP__/product/<?php echo ($vo["id"]); ?>" target="_blank"><?php echo (mb_substr($vo["title"],0,20,'utf-8')); ?></a>
							<a href="__APP__/product/<?php echo ($vo["id"]); ?>" target="_blank" class="product-more btn-1">+</a>
						</div>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<div class="clear2"></div>
			<a href="product/type/25" class="more1"></a>
		</div>
	</div>
</div>
<div class="main">
	<div class="about">
		<div class="about-dh">
		</div>
		<div class="about_nr">
			<div class="wrap11 af4">
				<ul class="slidebox">
					<?php if(is_array($factory)): $i = 0; $__LIST__ = array_slice($factory,0,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><img src="__ROOT__/__UPLOAD__/<?php echo ($vo["img"]); ?>" alt="<?php echo ($vo["title"]); ?>" /></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
			<span><?php echo (msubstr($intro['description'],0,200,'utf-8',true)); ?></span>
			<a  href="company" target="_blank" class="more2">了解更多</a>
			<a href="contact" class="more11">联系我们</a>
		</div>
		<div class="clear2"></div>
	</div>
</div>
<div class="news">
	<div class="main">
		<div class="news-dh"></div>
		<div class="news-nr">
			<div class="news-left">
				<?php if(is_array($news)): $i = 0; $__LIST__ = array_slice($news,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><img src="../Public/images/news-img.jpg">
					<a href="__APP__/news/<?php echo ($vo["id"]); ?>">
						<p><?php echo ($vo["title"]); ?></p>
						<span><?php echo (mb_substr($vo["description"],0,80,'utf-8')); ?></span>
					</a><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
			<div class="new-right">
				<?php if(is_array($news)): $i = 0; $__LIST__ = array_slice($news,1,2,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="__APP__/news/<?php echo ($vo["id"]); ?>">
						<div class="time">
							<div><?php echo (mb_substr($vo["time"],8,2,'utf-8')); ?></div>
							<span><?php echo (mb_substr($vo["time"],0,4,'utf-8')); ?>/<?php echo (mb_substr($vo["time"],5,2,'utf-8')); ?></span>
						</div>
						<p><?php echo ($vo["title"]); ?></p>
					</a><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
			<div class="clear2"></div>
			<a href="product/type/25" class="more1"></a>
		</div>
	</div>
</div>
<div class="footer">
    <div class="link">
        <div class="main">
            <span><i>LINK·</i>友情链接</span>
            <?php if(is_array($link)): $i = 0; $__LIST__ = array_slice($link,0,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo ($vo["www"]); ?>" target="_blank" rel="nofollow"><?php echo ($vo["title"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
    <div class="ff">
        版权所有：　<?php echo ($config['web_name']); ?> 　联系人：<?php echo ($config['linkman']); ?> 　电话：<?php echo ($config['tel']); ?>　　手机：<?php echo ($config['mobile']); ?>　E-mail：<a href="mailto:<?php echo ($config['email']); ?>"><?php echo ($config['email']); ?></a>　<br/>
        地址：<?php echo ($config['address']); ?>　<br/>

        　网址：<a href="<?php echo ($config['web_url']); ?>"><?php echo ($config['web_url']); ?></a>　网页设计：激石信息技术<a href="__APP__/admin" target="_blank">[后台登陆]</a>
        </a><a href="__ROOT__/Sitemap">　网站地图</a><script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1261148743'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1261148743%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
    </div>
</div>



<script type="text/javascript" src="__TMPL__Public/js/unslider/unslider.min.js"></script><!--大图滚动效果-->
<script type="text/javascript" src="__TMPL__Public/js/Marquee/Marquee.js"></script><!--大图滚动效果-->
<script type="text/javascript" src="__TMPL__Public/js/js.js"></script>

<!--图标左右切换效果- <i class = "btn-i-1"></i>----->
<script>
    $(function(){
        $(".btn-i-1").each(function(){
            $(this).wrap("<div class='btn1'><div class='btn2'></div></div>");
            var btnI = $(this).clone();
            $(this).parent().append(btnI);
            var btnMarginTop = $(this).css("margin-top");
            var btnWidth = $(this).width();
            var btnHeight = $(this).height();
            $(this).css({display:"block",position:"absolute",left:0,margin:0,padding:0,});
            $(this).next(".btn-i-1").css({display:"block",position:"absolute",margin:0,padding:0,left:btnWidth});
            $(this).parents(".btn1").css({width:btnWidth,height:btnHeight,overflow:"hidden",margin:"0 auto",marginTop:btnMarginTop});
            $(this).parent(".btn2").css({position: "relative",left:0});
            $(this).parents(".btn1").hover(function() {
                $(this).find(".btn2").stop().animate({left: -btnWidth});
            },function(){
                $(this).find(".btn2").stop().animate({left:0});
            })
        })
    })
</script>
<?php echo ($liuliangbao); ?>
</body>
</html>

<script type="text/javascript">
	$(function(){
		//affect:4
		$(".af4").slide({
			affect:3,
			time:3000,
			speed:400
		});
	})
</script>

<script>
	function scroll(){
		$(".case-nr ul").animate({"margin-left":"-305px"},function(){
			$(".case-nr ul li:eq(0)").appendTo($(".case-nr ul"))
			$(".case-nr ul").css({"margin-left":0})
		})
	}
	setInterval(scroll,2000)
</script>
<script language="javascript">
	var speed=30;
	var demo=document.getElementById('demo');
	var demo1=document.getElementById('demo1');
	var demo2=document.getElementById('demo2');
	demo2.innerHTML=demo1.innerHTML;
	function Marquee(){
		if(demo2.offsetWidth-demo.scrollLeft<=0)
		{
			demo.scrollLeft-=demo1.offsetWidth;
		}
		else
		{demo.scrollLeft++;}
	}
	var MyMar=setInterval(Marquee,speed);
	demo.onmouseover=function(){
		clearInterval(MyMar)
	}
	demo.onmouseout=function(){
		MyMar=setInterval(Marquee,speed)
	}

</script>