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
	<meta name="description" content="PPSSPP is the first PSP emulator for Android (and other mobile platforms), and also runs faster than any other on Windows, Linux and MacOSX. PPSSPP is in its early stages and game compatibility is thus still somewhat spotty.">
	<meta name="author" content="PPSSPP Team">
	<meta name="viewport" content="width=device-width">
	<meta name="keywords" content="psp,emulator,pc,ppsspp,android,ios,iphone,ipad,blackberry,symbian">

  <style>
    div.hero-unit {
			padding: 35px;
		}
	</style>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bjqs.css">
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36039055-1']);
  _gaq.push(['_setDomainName', 'ppsspp.org']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

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
