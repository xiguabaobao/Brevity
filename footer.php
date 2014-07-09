	<div class="footer">
		<div class="info">
			<a href="http://weibo.com/arvinxiang" target="_blank" title="新浪微博">
				<div class="icon">
					<div class="weibo bg_logo"></div>
				</div>
			</a>
			<a href="javascript:void(0);" target="_blank" title="微信">
				<div class="icon">
					<div class="weixin bg_logo"></div>
					<img class="qrcode" alt="" src="http://bigertech.res.meizu.com/blog/static/images/qrcode.jpg?v=1b4e131151" style="left: 822.5px; top: 4482.53125px; display: none;"></div>
			</a>
			<a href="#" target="_blank" title="笔戈视频">
				<div class="icon">
					<div class="video bg_logo"></div>
				</div>
			</a>
			<a href="<?php bloginfo('rss2_url'); ?>" target="_blank" title="RSS订阅">
				<div class="icon">
					<div class="rss bg_logo"></div>
				</div>
			</a>
		</div>
		<div id="foot-info">
			<a href="" id="foot-logo">
				<div class="bg"></div>
			</a>
			<section class="copyright">&copy; 2014 <?php bloginfo('name'); ?>. All Rights Reserved.</section>
			<p class="approve">粤ICP备13003602号-3</p>
		</div>
	</div>

	<script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.lazyload.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.topbar.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
	<script type="text/javascript">
		var duoshuoQuery = {
			short_name: "<?php echo getThemeOption('d_duoshuo'); ?>", 
			sso: { 
		    	login: "<?php bloginfo('template_url'); ?>/login/index.php?redirect_uri=" + location.href,
		    	logout: "<?php bloginfo('template_url'); ?>/logout/"
	   		}
		};
		(function() {
			var ds = document.createElement('script');
			ds.type = 'text/javascript';ds.async = true;
			ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
			ds.charset = 'UTF-8';
			(document.getElementsByTagName('head')[0] 
			 || document.getElementsByTagName('body')[0]).appendChild(ds);
		})();
	</script>
	<?php 
		global $HasShare; 
		if($HasShare == true){ 
			echo '<script>window._bd_share_config={"common":{"bdSnsKey":{'.getThemeOption('d_bdshare').'},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":""},"share":{}};with(document)0[(getElementsByTagName("head")[0]||body).appendChild(createElement("script")).src="http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion="+~(-new Date()/36e5)];</script>';
		} 
		if( getThemeOption('d_footcode_b') != '' ) echo getThemeOption('d_footcode'); 
	?>
</body>
</html>