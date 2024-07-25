<!DOCTYPE html>
<html lang="ja">
  <head>
	<meta charset="utf-8">
    <title>NATSUKAZE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200..900&family=Shippori+Mincho+B1&display=swap">
		<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
		<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/screenshot.png">
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
	</head>
	<body>
		<div id="fv">
			<div class="wrapper">
				<p class="fv-p pc-only">The Japanese Sparkling SAKE</p>
				<p class="fv-p sp-only">The Japanese<br>Sparkling SAKE</p>
				<h1 class="fv-ttl">NATSUKAZE</h1>
			</div>
		</div>
		<div class="menu">
			<div class="wrapper menu-area">
				<a href="<?php echo home_url( '/' ); ?>index/"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo"></a>
				<ul class="link pc-only">
					<li class="link-list"><a href="#section2">こだわり製法</a></li>
					<li class="link-list"><a href="#section3">料理との合わせ方</a></li>
					<li class="link-list"><a href="#section4">商品情報</a></li>
				</ul>
				<ul class="sns">
					<li class="sns-list">
						<a href="http://line.me/R/msg/text/?{<?php echo home_url( '/' ); ?>}%0a{スパークリング日本酒　NATSUKAZE}" target="_blank" rel="nofollow noopener"><img src="<?php echo get_template_directory_uri(); ?>/images/LINE_APP_iOS.png" alt="LINE"></a>
					</li>
					<li class="sns-list">
						<a href="http://www.facebook.com/share.php?u=<?php echo home_url( '/' ); ?>" target="_blank" rel="nofollow noopener"><img src="<?php echo get_template_directory_uri(); ?>/images/fb.png" alt="facebook"></a>
					</li>
					<li class="sns-list">
						<a href="https://twitter.com/share?url=<?php echo get_the_permalink();?>&text=スパークリング日本酒　NATSUKAZE" rel="nofollow noopener" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-x.png" alt="X"></a>
					</li>
				</ul>
			</div><!-- .wrapper -->
		</div><!-- .menu -->
		<section id="section1">
			<div class="wrapper container">
				<div class="subttl">
					<h2 class="subttl-sentence line">夏にぴったりな</h2>
					<h2 class="subttl-sentence line center">清涼感溢れる</h2>
					<h2 class="subttl-sentence ">スパークリング日本酒</h2>					
				</div>
				<div class="vertical-p-img">
					<p class="sentence">日本酒の華やかな香りを残しつつ、後味はキレのある淡麗さを実現。
						どんなお食事にでも合うようにさっぱりとした日本酒です。
						日本酒好きなあなたも、日本酒にこれから挑戦したいあなたにも、
						満足のいく一杯です。
						蒸し暑い日本の夏に、スパークリング日本酒で乾杯はいかがですか？</p>
					<img src="<?php echo get_template_directory_uri(); ?>/images/alcohol.png" alt="アルコール5％">
				</div><!-- .vertical-p-img -->
			</div><!-- .wrapper .container -->
		</section>
		<section id="section2">
			<div class="wrapper container">
				<div class="subttl">
					<h2 class="subttl-sentence line">老舗酒造</h2>
					<h2 class="subttl-sentence line">だからできる</h2>
					<h2 class="subttl-sentence ">本格的な味わい</h2>					
				</div>
				<div class="vertical-p-img">
					<p class="sentence">厳選した米と水を使用し、特に水は軟水の湧き水を使用することでスパークリングの泡立ちとキレのある味わいを実現しています。
						麹作りや発酵の過程では長年培った職人の技を生かし、NATSUKAZEでしか味わえないフルーティーな香りをお楽しみください。</p>
					<img src="<?php echo get_template_directory_uri(); ?>/images/forest.png" alt="森の風景">
				</div><!-- .vertical-p-img -->
			</div><!-- .wrapper .container -->
		</section>
		<section id="section3">
			<div class="subttl">
				<h2 class="subttl-sentence right">料理との</h2>
				<h2 class="subttl-sentence left">合わせ方</h2>					
			</div>
			<ul class="wrapper food">
				<li class="food-item sushi">
					<p class="number">01</p>
					<div class="img-p">
						<img src="<?php echo get_template_directory_uri(); ?>/images/sushi.png" alt="寿司">
						<p class="food-p">寿司などの和食はもちろん</p>
					</div>										
				</li>
				<li class="food-item karaage">
					<p class="number">02</p>
					<div class="img-p">
						<img src="<?php echo get_template_directory_uri(); ?>/images/karaage.png" alt="唐揚げ">
						<p class="food-p">唐揚げを軽やかな泡でさっぱりと</p>
					</div>										
				</li>
				<li class="food-item pizza">
					<p class="number">03</p>
					<div class="img-p">
						<img src="<?php echo get_template_directory_uri(); ?>/images/pizza.png" alt="ピザ">
						<p class="food-p">フルーティーな香りとピザの相性◎</p>
					</div>										
				</li>
				<li class="food-item cheese">
					<p class="number">04</p>
					<div class="img-p">
						<img src="<?php echo get_template_directory_uri(); ?>/images/cheese.png" alt="チーズ">
						<p class="food-p">濃厚な風味と日本酒の爽やかさがマッチ</p>
					</div>										
				</li>
			</ul><!-- .wrapper .food -->	
		</section>
		<section id="section4">
			<div class="wrapper">
				<div class="info-contents">
					<img class="bottle" src="<?php echo get_template_directory_uri(); ?>/images/bottle.png" alt="飲み切りやすい1合サイズでご用意しております">
					<div class="info">
						<p class="small">The Japanese Sparkling SAKE</p>
						<p class="big">NATSUKAZE</p>
						<img class="w-line" src="<?php echo get_template_directory_uri(); ?>/images/upper-line.png">
						<p>日本酒（発泡性</p>
						<p>価格：398円（税込）/180ml</p>
						<p>アルコール5%</p>
						<img  class="w-line" src="<?php echo get_template_directory_uri(); ?>/images/under-line.png"><br>
						<img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
					</div><!-- .info -->
				</div><!-- .info-contents -->
			</div><!-- .wrapper -->
		</section>
		<footer>
			<div class="footer-items wrapper">
				<p>お酒は20歳を過ぎてから。飲酒運転は法律で禁止されています。<br>妊娠中や授乳期の飲酒は、胎児・乳児の発育に悪影響を与えるおそれがあります。<br>
					お酒は楽しく適量を。</p>
				<a href="<?php echo home_url( '/' ); ?>index/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="ロゴ"></a>

			</div>	
		</footer>
	</body>
</html>