<?php
$strongnav = "https://forums.ppsspp.org/";
if ($pagelang == 'cn') {
  $description = "PPSSPP: 安卓, iOS, PC, Linux, MacOSX, 黑莓, 塞班psp模拟器";
  $navstyle = "style=\"font-family:'微软雅黑'\"";
  $navitems = array(
    "首页" => "index-cn.html",
    "下载" => "downloads-cn.html",
		// "Blog" => "blog-cn.html",
    "截图 &amp; 视频" => "screenshots-cn.html",
    "导航 &amp; 帮助" => "guides-cn.html",
    "论坛" => "https://forums.ppsspp.org/",
    "联系我们" => "contact-cn.html",
    "English" => "index.html",
  );
} else {
  $description = "PPSSPP - PSP emulator for Android, Windows, Linux, iOS, MacOSX";
  $navstyle = "";
  $navitems = array(
		"Home" => "index.html",
		"Downloads" => "downloads.html",
		// "Blog" => "blog.html",
    "Screens &amp; Video" => "screenshots.html",
    "Guides &amp; Help" => "guides.html",
    "Forums" => "https://forums.ppsspp.org/",
    "Contact" => "contact.html",
    "中文" => "index-cn.html",
  );
}
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">

  <title><?php echo $title; ?> - <?php echo $description; ?></title>
	<meta name="description" content="PPSSPP is the leading PSP emulator for Android, Windows, Linux, Mac and more.">
	<meta name="viewport" content="width=device-width">
  <meta name="keywords" content="psp,emulator,pc,ppsspp,android,ios,iphone,ipad,blackberry,symbian">

<!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-36039055-1', 'auto');
ga('send', 'pageview');
</script>
<!-- End Google Analytics -->

  <style>
    div.hero-unit {
			padding: 35px;
		}
	</style>
	<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/bjqs.css">

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-3281131109267988",
    enable_page_level_ads: true
  });
</script>
</head>
<body>
  <div class="navbar navbar-fixed-top" <?php echo $navstyle; ?> >
    <div class="navbar-inner">
      <div class="container">
        <a class="brand" href="index.html">PPSSPP</a>
        <div class="nav">
          <ul class="nav">
            <?php
              foreach($navitems as $name => $url) {
                echo "<li";
                if ($url == $navsel) {
                  echo " class='active'";
                }
                echo "><a href='${url}'>";
                if ($strongnav == $url)
                  echo "<strong>";
                echo "${name}";
                if ($strongnav == $url)
                  echo "</strong>";
                echo "</a></li>\n";
              }
            ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>
<!-- HEADER -->
