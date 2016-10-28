
<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php the_title() ?></title>
	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<link href="<?php echo get_template_directory_uri(); ?>///netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/owl.carousel/assets/owl.carousel.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/wow/animate.min.css">
	<link type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/jquery.jscrollpane.css" rel="stylesheet" media="all" />
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">

</head>
<body id="xa-bdy">
	<script src="<?php echo get_template_directory_uri(); ?>/libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/owl.carousel/owl.carousel.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/fancybox/jquery.fancybox.pack.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/wow/wow.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.jscrollpane.min.js"></script>

	<script>
    	new WOW().init();
    </script>

	<script src="<?php echo get_template_directory_uri(); ?>/js/responsiveTabs.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.maskedinput.min.js"></script>
	
	<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>

	<div id="hid">
	    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          
	        </div>
	        <div class="navbar-collapse collapse">
	          <div class="col-md-3 col-sm-12 xa-logo">
	            <a href="<?php echo get_template_directory_uri(); ?>//">
	              <img src="<?php echo get_template_directory_uri(); ?>/img/xa-logo.png" alt="">
	            </a>
	          </div>
	          <div class="col-md-6 col-sm-12 xa-menu">
	            <ul class="nav navbar-nav">
	              <li class=""><a href="#uslugi">Наши услуги</a></li>
	              <li class=""><a href="#prichina">Почему мы</a></li>
	              <li class=""><a href="#sales">Акции</a></li>
	              <li class=""><a href="#review">Отзывы</a></li>
	              <li class=""><a href="#contact">Контакты</a></li>
	            </ul>
	          </div>
	          <div class="col-md-3 col-sm-12">
	            <span class="xa-phone">
	              <a href="<?php echo get_template_directory_uri(); ?>/tel:+7 (499) 502-93-30 ">+7 (499) 502-93-30 </a>
	            </span>
	          </div>
	        </div>
	      </div>
	    </div>
	</div>
    <script>
      $(function () {
        var element = $("#hid"), display;
        $(window).scroll(function () {
          display = $(this).scrollTop() >= 100;
          display != element.css('opacity') && element.stop().animate({ 'opacity': display }, 1);
        });
      });
  </script>	<section class="header-bottom">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<div class="ab-div-logo">
					<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/ab-logo.png" alt="">
				</div>
			</div>
			<div class="col-md-3">
				<div class="ab-top-txt">
					<a href="#">Выберите город:</a>
					<div class="az-select">
						<select name="" id="">
							<option value="+7 (499) 502-93-30">Москва</option>
							<option value="+7 (499) 502-93-31">Санкт Петербург</option>
							<option value="+7 (499) 502-93-32">Тальяти</option>
						</select>
						<div class="az-border"></div>
					</div>
					<script>
						$(document).ready(function(){
							
							$(".az-options div[data-val]").click(function(){
						        $('.az-tel').text($(this).attr('data-val'));
						        $('.az-border').width($(this).find('span').width() + 4);
						    });
						});
					</script>
				</div>
			</div>
			<div class="col-md-4">
				<div class="ab-top-right">
					<span class="az-tel">+7 (499) 502-93-30</span>
					<span>Прием заказов: с 9 до 23</span>
					<a href="#zvonok" name="modal">Заказать звонок</a>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-md-12">
				<div class="ab-down">
					<span><?php the_field('zag01'); ?></span>
					<a class="wow pulse" data-wow-iteration="100" data-wow-duration="2.5s" href="#zvonok" name="modal">Заказать услугу под ключ</a>
				</div>
			</div>
		</div>
	</div>
</section>	
<div class="container" id="uslugi">
	<div class="row">
		<div class="col-md-12">
			<div class="zk_we_export_all">
				<h3 class="zk_ex_caption"><?php the_field('zagolovok1'); ?></h3>
				<div class="zk_export_one wow bounceInDown "  data-animated-duration="30.5s" data-wow-delay="0.5s">
					<div class="zk_img_ex_box wow pulse animated"  data-wow-iteration="2"  data-wow-duration="2.5s" data-wow-delay="2s">
						<?php if($my_img=get_field("kar11")){echo '<img src="'.$my_img.'"/>';}?>
				    </div>
					<div class="zk_first_child"><?php the_field('opi11'); ?></div>
				</div>
				<div class="zk_export_one wow bounceInDown "  data-animated-duration="30.5s" data-wow-delay="0.5s">
					<div class="zk_img_ex_box wow pulse animated"  data-wow-iteration="2"  data-wow-duration="2.5s" data-wow-delay="2s"> 
						<?php if($my_img=get_field("kar12")){echo '<img src="'.$my_img.'"/>';}?>
					</div>
					<div><?php the_field('opi12'); ?></div>
				</div>
				<div class="zk_export_one wow bounceInDown "  data-animated-duration="30.5s" data-wow-delay="0.5s">
					<div class="zk_img_ex_box wow pulse animated"  data-wow-iteration="2"  data-wow-duration="2.5s" data-wow-delay="2s">
					 	<?php if($my_img=get_field("kar13")){echo '<img src="'.$my_img.'"/>';}?>
					 </div>
					<div><?php the_field('opi13'); ?></div>
				</div>
				<div class="zk_export_one wow bounceInDown "  data-animated-duration="30.5s" data-wow-delay="0.5s">
					<div class="zk_img_ex_box wow pulse animated"  data-wow-iteration="2"  data-wow-duration="2.5s" data-wow-delay="2s">
						<?php if($my_img=get_field("kar14")){echo '<img src="'.$my_img.'"/>';}?>
					</div>
					<div><?php the_field('opi14'); ?></div>
				</div>
				<div class="zk_export_one wow bounceInDown "  data-animated-duration="30.5s" data-wow-delay="0.5s">
					<div class="zk_img_ex_box wow pulse animated"  data-wow-iteration="2"  data-wow-duration="2.5s" data-wow-delay="2s">
						<?php if($my_img=get_field("kar15")){echo '<img src="'.$my_img.'"/>';}?>
					</div>
					<div><?php the_field('opi15'); ?></div>
				</div>
				<div class="clear"></div>
			</div>
		</div>	
	</div>
</div>				
<section class="xa-osush">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2><?php the_field('zag12'); ?></h2>
				<div class="xa-os">
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="xa-vbox">
							<?php if($my_img=get_field("kar21")){echo '<img src="'.$my_img.'"/>';}?>
							<p><?php the_field('opi21'); ?></p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="xa-vbox">
							<?php if($my_img=get_field("kar22")){echo '<img src="'.$my_img.'"/>';}?>
							<p><?php the_field('opi22'); ?></p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="xa-vbox">
							<?php if($my_img=get_field("kar23")){echo '<img src="'.$my_img.'"/>';}?>
							<p><?php the_field('opi23'); ?></p>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<div class="xa-zak">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2><?php the_field('zag3'); ?></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 col-sm-4 xa-newcol col-xs-6">
					<div class="xa-zakbox">
						<?php if($my_img=get_field("kar31")){echo '<img src="'.$my_img.'"/>';}?>
						<p><?php the_field('opi31'); ?></p>
					</div>
				</div>
				<div class="col-md-2 col-sm-4 xa-newcol col-xs-6">
					<div class="xa-zakbox">
						<?php if($my_img=get_field("kar32")){echo '<img src="'.$my_img.'"/>';}?>
						<p><?php the_field('opi32'); ?></p>
					</div>
				</div>
				<div class="col-md-2 col-sm-4 xa-newcol col-xs-6">
					<div class="xa-zakbox">
						<?php if($my_img=get_field("kar33")){echo '<img src="'.$my_img.'"/>';}?>
						<p><?php the_field('opi33'); ?></p>
					</div>
				</div>
				<div class="col-md-2 col-sm-4 xa-newcol xa-col50 col-xs-6">
					<div class="xa-zakbox">
						<?php if($my_img=get_field("kar34")){echo '<img src="'.$my_img.'"/>';}?>
						<p>Д<?php the_field('opi34'); ?></p>
					</div>
				</div>
				<div class="col-md-2 col-sm-4 xa-newcol xa-col50 col-xs-6 xa-col100">
					<div class="xa-zakbox">
						<?php if($my_img=get_field("kar35")){echo '<img src="'.$my_img.'"/>';}?>
						<p><?php the_field('opi35'); ?></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h2><?php the_field('zag31'); ?></h2>
				</div>
			</div>
		</div>
	</div>
</section>	
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="zk_vivoz">	
				<div class="zk_vivoz_man"><?php if($my_img=get_field("kar-pr")){echo '<img src="'.$my_img.'"/>';}?></div>
				<h3 class="zk_vivoz_caption"><?php the_field('zag-pr'); ?></h3>
				<div class="first_v">
				<ul>
					<li><?php the_field('pri1'); ?></li>
					<li><?php the_field('pri2'); ?></li>
					<li><?php the_field('pri3'); ?></li>
					<li><?php the_field('pri4'); ?></li>
					<li><?php the_field('pri5'); ?></li>
				</ul>
				</div>
				<div class="second_v">
					<ul>		
						<li><?php the_field('pri6'); ?></li>
						<li><?php the_field('pri7'); ?></li>
						<li><?php the_field('pri8'); ?></li>
						<li><?php the_field('pri9'); ?></li>
					</ul>
				</div>
				<div class="clear"></div>	
			</div>
		</div>
	</div>
</div>		

	<section class="ab-pochemy-mi" id="prichina">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="ab-pochemy-mi-title">
					<span><?php the_field('zag-bl'); ?></span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="padding-top-col">
					<div class="ab-pochemy-mi-img-box">
					</div>
					<div class="ab-pochemy-mi-txt">
						<span><?php the_field('zag41'); ?></span>
						<span> 
							<?php the_field('opi41'); ?>
						</span>
					</div>
				</div>	
			</div>
			<div class="col-md-6">
				<div class="padding-top-col">
					<div class="ab-pochemy-mi-img-box ab-pochemy-mi-img-box2">
					</div>
					<div class="ab-pochemy-mi-txt">
						<span><?php the_field('zag42'); ?></span>
						<span> 
							<?php the_field('opi42'); ?>
						</span>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-md-6">
				<div class="padding-top-col">
					<div class="ab-pochemy-mi-img-box ab-pochemy-mi-img-box3">
					</div>
					<div class="ab-pochemy-mi-txt">
						<span><?php the_field('zag43'); ?>
						</span>
						<span> 
							<?php the_field('opi43'); ?>
						</span>
					</div>
				</div>	
			</div>
			<div class="col-md-6">
				<div class="padding-top-col">
					<div class="ab-pochemy-mi-img-box ab-pochemy-mi-img-box4">
					</div>
					<div class="ab-pochemy-mi-txt">
						<span><?php the_field('zag44'); ?></span>
						<span> 
							<?php the_field('opi44'); ?>
						</span>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-md-6">
				<div class="padding-top-col">
					<div class="ab-pochemy-mi-img-box ab-pochemy-mi-img-box5">
					</div>
					<div class="ab-pochemy-mi-txt">
						<span><?php the_field('zag45'); ?></span>
						<span> 
							<?php the_field('opi45'); ?>
						</span>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="padding-top-col">
					<div class="ab-pochemy-mi-img-box ab-pochemy-mi-img-box6">
					</div>
					<div class="ab-pochemy-mi-txt">
						<span><?php the_field('zag46'); ?></span>
						<span> 
							<?php the_field('opi46'); ?>
						</span>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-md-3">
				<div class="ab-medal ab-medal-bottom">
					<?php if($my_img=get_field("kar47")){echo '<img src="'.$my_img.'"/>';}?>
				</div>
			</div>
			<div class="col-md-1">

			</div>
			<div class="col-md-4">
				<div class="ab-medal">
					<?php if($my_img=get_field("kar48")){echo '<img src="'.$my_img.'"/>';}?>
				</div>
			</div>
			<div class="col-md-3">
				<div class="ab-medal">
					<?php if($my_img=get_field("kar49")){echo '<img src="'.$my_img.'"/>';}?>
				</div>
			</div>
			<div class="col-md-1">

			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</section>	

<section class="ab-zvonok">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="ab-zvonok-title wow bounceInDown" data-animated-duration="20.5s">
					<span><?php the_field('zag51'); ?></span>
				</div>
			</div>
			<div class="clearfix"></div>
			<form class="" action="#">
				<div class="col-md-4">
					<div class="vhod-bottom">
						<div class="search-box">
							<div class="ab-form">
								<label class="ab-first-input">
									<input type="text" name="yourname" placeholder="Ваше имя">
								</label>
							</div>	
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="vhod-bottom">
						<div class="search-box">
						<div class="ab-form">
							<label class="ab-second-input">
								<input type="text" name="tel" placeholder="Телефон">
							</label>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<label class="ab-second-input">
						<div class="ab-zvonok-button">
							<a class="ab-button" href="#thanks" name="modal">Оставить заявку</a>
						</div>
					</label>	
				</div>
				<div class="clearfix"></div>
				<div class="col-md-12">
					<div class="ab-zvonok-tel wow pulse" data-wow-duration="3.5s" data-wow-iteration="infinite";>
						<span><?php the_field('tel51'); ?></span>
					</div>	
				</div>
			</form>	
			<div class="clearfix"></div>
		</div>
	</div>
</section>


<!-- <section class="ab-zvonok">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="ab-zvonok-title wow bounceInDown" data-animated-duration="20.5s">
					<span>Позвоните для оценки стоимости вызова<br> или оставьте заявку</span>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-md-4">
				<div class="vhod-bottom">
					<div class="search-box">
						<label class="ab-first-input">
							<form class="ab-form" action="#">
								<input type="text" placeholder="Ваше имя">
							</form>
						</label>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="vhod-bottom">
					<div class="search-box">
						<label class="ab-second-input">
							<form class="ab-form" action="#">
								<input type="text" placeholder="Телефон">
							</form>
						</label>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<label class="ab-second-input">
					<div class="ab-zvonok-button">
						<a class="ab-button" href="<?php echo get_template_directory_uri(); ?>/#">Оставить заявку</a>
					</div>
				</label>	
			</div>
			<div class="clearfix"></div>
			<div class="col-md-12">
				<div class="ab-zvonok-tel wow pulse" data-wow-duration="3.5s" data-wow-iteration="3";>
					<span>8 (499) 502-93-30</span>
				</div>	
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</section> -->	






<div class="container">
	<div class="row">
		<div class="col-md-12">			
				<h3 class="zk_caption"><?php the_field('zag-zag'); ?></h3>
		</div>
		<div class="clearfix"></div>			
					<div class="col-md-3">
						<div class="zk_pr_ph">	
							<div class="zk-img-box">
								<?php if($my_img=get_field("kar61")){echo '<img src="'.$my_img.'"/>';}?>
							</div>			
							<div><?php the_field('opi61'); ?> </div>		
						</div>
					</div>
					<div class="col-md-3">	
						<div class="zk_pr_ph">
							<div class="zk-img-box">			
								<?php if($my_img=get_field("kar62")){echo '<img src="'.$my_img.'"/>';}?>
							</div>	
							<div><?php the_field('opi62'); ?> </div>	
						</div>
					</div>
					<div class="col-md-3">	
						<div class="zk_pr_ph">
							<div class="zk-img-box">				
								<?php if($my_img=get_field("kar63")){echo '<img src="'.$my_img.'"/>';}?>
							</div>	
							<div><?php the_field('opi63'); ?> </div>				
						</div>
					</div>
					<div class="col-md-3">	
						<div class="zk_pr_ph">
							<div class="zk-img-box">				
								<?php if($my_img=get_field("kar64")){echo '<img src="'.$my_img.'"/>';}?>
							</div>	
							<div><?php the_field('opi64'); ?> </div>		
						</div>
					</div>	
						<div class="clearfix"></div>
					<div class="col-md-4">
						<div class="zk_pr_ph">
							<div class="zk-img-box">
						 		<?php if($my_img=get_field("kar65")){echo '<img src="'.$my_img.'"/>';}?>
						 	</div>
						 	<div><?php the_field('opi65'); ?> </div>	
						</div>
					</div>
					<div class="col-md-4">	
						<div class="zk_pr_ph">
							<div class="zk-img-box">
						 		<?php if($my_img=get_field("kar66")){echo '<img src="'.$my_img.'"/>';}?>
						 	</div>
						 	<div><?php the_field('opi66'); ?> </div>	
						</div>
					</div>
					<div class="col-md-4">	
						<div class="zk_pr_ph">
							<div class="zk-img-box">
						 		<?php if($my_img=get_field("kar67")){echo '<img src="'.$my_img.'"/>';}?>
						 	</div>
						 	<div><?php the_field('opi67'); ?> </div>	
						</div>
					</div>	
					
				<div class="clear"></div>
			</div>
		</div>
	</div>
</div>	

<div class="clearfix"></div>

<section class="ah-ceni" id="sales">

    <div class="container">
	    <div class="row">
		    <div class="col-md-12 col-sm-12 col-xs-12">
		    <div class="ah-ceniiimg">
		    	<span class="ah-ceniiimg-span">От<br><span>200</span><br>рублей за<br>предмет</span>
		    </div>
				<span class="ah-ceni-title"><?php the_field('zag-niz'); ?></span>
				<div class="ah-ceni-wrap">
					<div class="ah-ceni-item">
						<?php if($my_img=get_field("kar71")){echo '<img src="'.$my_img.'"/>';}?>
						<span class="ah-item-span"><?php the_field('opi71'); ?></span>	
					</div>
					<div class="ah-ceni-item">
						<?php if($my_img=get_field("kar72")){echo '<img src="'.$my_img.'"/>';}?>
						<span class="ah-item-span"><?php the_field('opi72'); ?></span>				
					</div>
					<div class="ah-ceni-item ah-ceni-item1">
						<?php if($my_img=get_field("kar73")){echo '<img src="'.$my_img.'"/>';}?>
						<span class="ah-item-span"><?php the_field('opi73'); ?></span>		
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="clearfix"></div>	<div class="clearfix"></div>

<section class="ah-zakaz">
    <div class="container">
	    <div class="row">
		    <div class="col-md-12 col-sm-12 col-xs-12">
				<span class="ah-zakaz-span">Закажите обратный звонок</span>
				<a href="#zvonok" name="modal" class="ah-zakaz-link">Заказать звонок</a>
			</div>
		</div>
	</div>
</section>

<div class="clearfix"></div>	
<section class="ab-otziv" id="review">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="ab-otziv-title" >
					<span>Оставьте отзыв</span>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-md-4">
				<div class="ab-otziv-face-wrap">
					<div class="ab-face-img-wrap">
						<div class="ab-face-img">
							<?php if($my_img=get_field("kar111")){echo '<img src="'.$my_img.'"/>';}?>
						</div>
					</div>
					<div class="ab-face-txt">
						<span>Положительные</span>
					</div>
					<div class="ab-face-number">
						<span><?php the_field('num111'); ?></span>
					</div>	
				</div>
			</div>
			<div class="col-md-4">
				<div class="ab-otziv-face-wrap">
					<div class="ab-face-img-wrap">
						<div class="ab-face-img">
							<?php if($my_img=get_field("kar112")){echo '<img src="'.$my_img.'"/>';}?>
						</div>
					</div>
					<div class="ab-face-txt ab-face-txt-2">
						<span>Нейтральные</span>
					</div>
					<div class="ab-face-number ab-face-number-2">
						<span><?php the_field('num112'); ?></span>
					</div>	
				</div>
			</div>
			<div class="col-md-4">
				<div class="ab-otziv-face-wrap">
					<div class="ab-face-img-wrap">
						<div class="ab-face-img">
							<?php if($my_img=get_field("kar113")){echo '<img src="'.$my_img.'"/>';}?>
						</div>
					</div>
					<div class="ab-face-txt ab-face-txt-3">
						<span>Отрицательные</span>
					</div>
					<div class="ab-face-number ab-face-number-2">
						<span><?php the_field('num113'); ?></span>
					</div>	
				</div>
			</div>
			<div class="clearfix"></div>
			
			<form class="" action="#">
				<div class="col-md-12">
					<div class="ab-comments-wrap">
						<div class="ab-comments-txt">
							<span>Мы ввели систему отзывов, она работает для того,<br>
							чтобы улучшить наш сервис.</span>
							<span>Все отзывы просматриваются и тщательно нами разбираются.<br>
							Даже в положительном отзыве вы можете указать нам ваши положения.<br>
							Укажите, что нравиться или не нравиться в нашем сайте или в работе нашего персонала.<br>
							Любой ваш отзыв нам очень важен.</span>
						</div>
						<div class="ab-comform-wrap">
							<div class="ab-comform" action="#">
								<label>
									<textarea class="ab-text-area" placeholder="*Комментарий"></textarea>
								</label>
							</div>
						</div>
						<div class="ab-chekbox-wrap">
							<div class="ab-chekbos-title">
								<span>Выберите отзыв</span>
							</div>
							<div class="ab-my-chekbox-wrap">	
								<div class="ab-my-chekbox">
									<label>
									    <input class="checkbox" type="radio" name="checkbox-test" checked>
									    <span class="checkbox-custom"></span>
									    <span class="label"></span>
									</label>
								</div>
								<div class="ab-chekbox-span">
									<span>Положительный</span>
								</div>
							</div>
							<div class="ab-my-chekbox-wrap margin-left20">	
								<div class="ab-my-chekbox ab-my-chekbox-2">
									<label>
									    <input class="checkbox" type="radio" name="checkbox-test">
									    <span class="checkbox-custom"></span>
									    <span class="label"></span>
									</label>
								</div>
								<div class="ab-chekbox-span">
									<span>Нейтральный</span>
								</div>
							</div>	
							<div class="ab-my-chekbox-wrap margin-left20">	
								<div class="ab-my-chekbox ab-my-chekbox-3">
									<label>
									    <input class="checkbox" type="radio" name="checkbox-test">
									    <span class="checkbox-custom"></span>
									    <span class="label"></span>
									</label>
								</div>
								<div class="ab-chekbox-span">
									<span>Отрецательный</span>
								</div>
							</div>
							<div class="clearfix"></div>		
						</div>
						<div class="clearfix"></div>
						<div class="col-md-12 col-padding-left-0">
							<div class="ab-last-block-comments-wrap">
								<div class="ab-last-block-txt">
									<span>Введите код полученный после<br> выполнения заказа</span>
								</div>
								<div class="ab-last-block-input">
									<input class="ab-in-put" type="text" placeholder="">
								</div>
								<div class="ab-last-block-button">
									<a href="<?php echo get_template_directory_uri(); ?>/#">Отправить</a>
								</div>
								<div class="clearfix"></div>
								<div class="ab-last-block-txt-bottom">
									Если забыли или потеряли код, позвоните в диспетчерскую службу
								</div>
							</div>
						</div>
						<div class="clearfix"></div>	
					</div>
				</div>
			</form>	
			<div class="clearfix"></div>
		</div>
	</div>
</section>	
	<div class="clearfix"></div>

<section class="ah-comptext">
    <div class="container">
	    <div class="row">
		   <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
				<?php echo the_field('txt81'); ?>
			</div>
		</div>
	</div>
</section>

<div class="clearfix"></div>	

<section class="ab-zvonok ab-zvonok2">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="ab-zvonok-title">
					<span><?php the_field('zag91'); ?></span>
				</div>
			</div>
			<div class="clearfix"></div>
			<form class="ah-form2" action="#">

			<div class="col-md-4">
				<div class="vhod-bottom">
					<div class="search-box">
					<div class="ab-form" name="yourname">
						<label class="ab-first-input ab-first-input2">
							
								<input type="text" placeholder="Ваше имя">
							
						</label>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="vhod-bottom">
					<div class="search-box">
					<div class="ab-form">
						<label class="ab-second-input">
							
								<input type="text" name="tel" placeholder="Телефон">
							
						</label>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<label class="ab-second-input">
					<div class="ab-zvonok-button">
						<a class="ab-button" href="#thanks" name="modal" id="ah-form2-submit">Оставить заявку</a>
					</div>
				</label>	
			</div>
			</form>

			<div class="clearfix"></div>

			<div class="col-md-12">
				<div class="ab-zvonok-tel-3">
					<span><?php the_field('tel91'); ?></span>
				</div>	
			</div>
			<div class="clearfix"></div>
			<div class="col-md-12">
				<div class="ab-zvonok-tel-2">
					<span><?php the_field('tel92'); ?></span>
				</div>	
			</div>
			<div class="clearfix"></div>
			<div class="col-md-12">
				<div class="ab-soc">
					<img src="<?php echo get_template_directory_uri(); ?>/img/ab-soc.png" alt="">
				</div>	
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</section>	<div class="clearfix"></div>

<section class="ah-contakt" id="contact">
    <div class="container">
	    <div class="row">
	    <span class="ah-contakt-span2"><?php the_field('zag-gor'); ?></span>
		    <div class="col-md-6 col-sm-6 col-xs-12">
				<div class="ah-contakt-wrapper">
					<div class="ah-contakt-top">
						<span class="ah-contakt-span"><?php the_field('gor1'); ?></span>
						<span class="ah-contakt-span1"><?php the_field('tel101'); ?></span>
					</div>
					<div class="ah-contakt-bottom">
						<div id="map"><?php the_field('car101'); ?></div>
					</div>
				</div>
			</div>
		    <div class="col-md-6 col-sm-6 col-xs-12">
				<div class="ah-contakt-wrapper">
					<div class="ah-contakt-top">
						<span class="ah-contakt-span"><?php the_field('gor2'); ?></span>
						<span class="ah-contakt-span1"><?php the_field('tel102'); ?></span>
					</div>
					<div class="ah-contakt-bottom">
						<div id="map1"><?php the_field('car102'); ?></div>
					</div>
				</div>
			</div>

			<div class="clearfix"></div>

		    <div class="col-md-6 col-sm-6 col-xs-12">
				<div class="ah-contakt-wrapper">
					<div class="ah-contakt-top">
						<span class="ah-contakt-span"><?php the_field('gor3'); ?></span>
						<span class="ah-contakt-span1"><?php the_field('tel103'); ?></span>
					</div>
					<div class="ah-contakt-bottom">
						<div id="map2"><?php the_field('car103'); ?></div>
					</div>
				</div>
			</div>
		    <div class="col-md-6 col-sm-6 col-xs-12">
				<div class="ah-contakt-wrapper">
					<div class="ah-contakt-top">
						<span class="ah-contakt-span"><?php the_field('gor4'); ?></span>
						<span class="ah-contakt-span1"><?php the_field('tel104'); ?></span>
					</div>
					<div class="ah-contakt-bottom">
						<div id="map3"><?php the_field('car104'); ?></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="clearfix"></div>


<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
 <script type="text/javascript">
   ymaps.ready(init);
     var myMap,
		 myMap1,
		 myMap2,
		 myMap3,
		 myPlacemark,
		 myPlacemark1,
		 myPlacemark2,
         myPlacemark3;

	function init(){

		// myMap = new ymaps.Map("map", {
		//  center: [55.73521577724309,37.6503515],
		//  zoom: 16,
		//  controls: []
		// });

		// myMap1 = new ymaps.Map("map1", {
		//  center: [55.73521577724309,37.6503515],
		//  zoom: 16,
		//  controls: []
		// });

		// myMap2 = new ymaps.Map("map2", {
		//  center: [55.73521577724309,37.6503515],
		//  zoom: 16,
		//  controls: []
		// });

		// myMap3 = new ymaps.Map("map3", {
		//  center: [55.73521577724309,37.6503515],
		//  zoom: 16,
		//  controls: []
		// });

        myMap.behaviors.disable('scrollZoom');
        myMap1.behaviors.disable('scrollZoom');
        myMap2.behaviors.disable('scrollZoom');
        myMap3.behaviors.disable('scrollZoom');

		var myPlacemark = new ymaps.Placemark([55.73521577724309,37.6503515], {}, {
			iconLayout: 'default#image',
			iconImageHref: '/img/balun.png',
			iconImageSize: [48, 57],
			iconImageOffset: [-3, -42]
		});

		var myPlacemark1 = new ymaps.Placemark([55.73521577724309,37.6503515], {}, {
			iconLayout: 'default#image',
			iconImageHref: '/img/balun.png',
			iconImageSize: [48, 57],
			iconImageOffset: [-3, -42]
		});

		var myPlacemark2 = new ymaps.Placemark([55.73521577724309,37.6503515], {}, {
			iconLayout: 'default#image',
			iconImageHref: '/img/balun.png',
			iconImageSize: [48, 57],
			iconImageOffset: [-3, -42]
		});

		var myPlacemark3 = new ymaps.Placemark([55.73521577724309,37.6503515], {}, {
			iconLayout: 'default#image',
			iconImageHref: '/img/balun.png',
			iconImageSize: [48, 57],
			iconImageOffset: [-3, -42]
		});
		
		myMap.geoObjects.add(myPlacemark);
		myMap1.geoObjects.add(myPlacemark1);
		myMap2.geoObjects.add(myPlacemark2);
		myMap3.geoObjects.add(myPlacemark3);
	}
 </script>	
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<span class="xa-left">© 2016 Компания “Хламовывоз.ru”</span>
			</div>
			<div class="col-md-4">
				<div class="xa-imgbox">
					<img class="wow pulse" data-wow-iteration="100" data-wow-duration="2.5s" src="<?php echo get_template_directory_uri(); ?>/img/footer-logo.png" alt="">
				</div>
			</div>
			<div class="col-md-4">
				<span class="xa-right">Создание сайта <a href="<?php echo get_template_directory_uri(); ?>/#">www.multiplex.su</a></span>
			</div>
		</div>
	</div>
</footer>

<div class="xa-topbox">
	<a href="#xa-bdy"><img src="<?php echo get_template_directory_uri(); ?>/img/top.png" alt=""></a>
</div>

<div id="mask"></div>

<div id="zvonok" class="window">
	<section class="ah-myup">
		<div class="ah-close"></div>
		<div class="ah-myup-wrapper">
			<span class="ah-myup-span1">Закажите звонок</span>
			<span class="ah-myup-span2">На получение расчета стоимости и консультацию</span>
			<form action="" class="ah-common-form ah-form1">
				<input type="text" name="uname" placeholder="Ваше имя" class="ah-uname">
				<input type="text" name="tel" placeholder="Телефон" class="ah-tel phone">
				<input type="submit" value="Заказать звонок" class="ah-submit" id="ah-form1-submit">
			</form>
		</div>
	</section>
</div>

<div id="thanks" class="window"> 
	<div class="ah-close"></div>
	<div class="ah-thanks">
		<span class="ah-title">Спасибо!</span>
		<p>Наши специалисты с Вами свяжутся в ближайшее время.</p>	
	</div>
</div>
<a href="#thanks" name="modal"></a>





	
</body>
</html>

