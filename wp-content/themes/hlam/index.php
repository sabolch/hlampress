
<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Главная</title>
	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<link href="<?php echo get_template_directory_uri(); ?>///netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/owl.carousel/assets/owl.carousel.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/wow/animate.min.css">
	<link type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/jquery.jscrollpane.css" rel="stylesheet" media="all" />
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">

</head>
<body>
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
  <!-- Fixed navbar -->
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
              <li class=""><a href="<?php echo get_template_directory_uri(); ?>/#">Наши услуги</a></li>
              <li class=""><a href="<?php echo get_template_directory_uri(); ?>/#">Почему мы</a></li>
              <li class=""><a href="<?php echo get_template_directory_uri(); ?>/#">Акции</a></li>
              <li class=""><a href="<?php echo get_template_directory_uri(); ?>/#">Отзывы</a></li>
              <li class=""><a href="<?php echo get_template_directory_uri(); ?>/#">Контакты</a></li>
              
            </ul>
          </div>
          <div class="col-md-3 col-sm-12">
            <span class="xa-phone">
              <a href="<?php echo get_template_directory_uri(); ?>/tel:+7 (499) 502-93-30 ">+7 (499) 502-93-30 </a>
            </span>
          </div>
          
        </div><!--/.nav-collapse -->
      </div>
    </div>
</div>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
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
					<a href="<?php echo get_template_directory_uri(); ?>/#">Выберите город:</a><a href="<?php echo get_template_directory_uri(); ?>/#">Москва</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="ab-top-right">
					<span>+7 (499) 502-93-30</span>
					<span>Прием заказов: с 9 до 23</span>
					<a href="#zvonok" name="modal">Заказать звонок</a>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-md-12">
				<div class="ab-down">
					<span>Вывоз старой мебели</span>
					<a class="wow pulse" data-wow-iteration="100" data-wow-duration="2.5s" href="<?php echo get_template_directory_uri(); ?>/#">Заказать услугу под ключ</a>
				</div>
			</div>
		</div>
	</div>
</section>	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="zk_we_export_all">
				<h3 class="zk_ex_caption">Мы вывозим

				 <?php wp_reset_query(); ?>
				 <?php $wp_query = new WP_Query('page_id=1'); ?>
				 <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
				 <?php $telefon = get_field('zagolovok1'); ?>		 
				     
				 <?php endwhile; ?>
				 <?php wp_reset_query(); ?>

				</h3>
				<div class="zk_export_one  wow bounceInDown " data-animated-duration="30.5s">
					<div class="zk_img_ex_box  wow pulse animated" data-wow-iteration="2"  data-wow-duration="2.5s" data-wow-delay="2s">
						<img src="<?php echo get_template_directory_uri(); ?>/img/zk_export.png" alt="">
				    </div>
					<div class="zk_first_child">Старую мебель вещи и книги</div>
				</div>
				<div class="zk_export_one  wow bounceInDown " data-animated-duration="30.5s">
					<div class="zk_img_ex_box  wow pulse animated" data-wow-iteration="2"  data-wow-duration="2.5s" data-wow-delay="2s"> 
						<img src="<?php echo get_template_directory_uri(); ?>/img/zk_export2.png" alt="">
					</div>
					<div>Строительный мусор, ванны и радиаторы</div>
				</div>
				<div class="zk_export_one  wow bounceInDown " data-animated-duration="30.5s">
					<div class="zk_img_ex_box  wow pulse animated" data-wow-iteration="2"  data-wow-duration="2.5s" data-wow-delay="2s">
					 	<img src="<?php echo get_template_directory_uri(); ?>/img/zk_export3.png" alt="">
					 </div>
					<div>Пианино</div>
				</div>
				<div class="zk_export_one  wow bounceInDown " data-animated-duration="30.5s">
					<div class="zk_img_ex_box  wow pulse animated" data-wow-iteration="2"  data-wow-duration="2.5s" data-wow-delay="2s">
						<img src="<?php echo get_template_directory_uri(); ?>/img/zk_export4.png" alt="">
					</div>
					<div>Старые окна</div>
				</div>
				<div class="zk_export_one  wow bounceInDown " data-animated-duration="30.5s">
					<div class="zk_img_ex_box  wow pulse animated" data-wow-iteration="2"  data-wow-duration="2.5s" data-wow-delay="2s">
						<img src="<?php echo get_template_directory_uri(); ?>/img/zk_export5.png" alt="">
					</div>
					<div>Бытовую технику</div>
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
				<h2>Осуществляем вывоз <br>из</h2>
				<div class="xa-os">
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="xa-vbox">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ov1.png" alt="">
							<p>Квартир</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="xa-vbox">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ov2.png" alt="">
							<p>Офисных и торговых <br>центров</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="xa-vbox">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ov3.png" alt="">
							<p>Гаражей и складов</p>
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
					<h2>Закажите у нас демонтаж</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 col-sm-4 xa-newcol col-xs-6">
					<div class="xa-zakbox">
						<img src="<?php echo get_template_directory_uri(); ?>/img/zak1.png" alt="">
						<p>Полов</p>
					</div>
				</div>
				<div class="col-md-2 col-sm-4 xa-newcol col-xs-6">
					<div class="xa-zakbox">
						<img src="<?php echo get_template_directory_uri(); ?>/img/zak2.png" alt="">
						<p>Стен</p>
					</div>
				</div>
				<div class="col-md-2 col-sm-4 xa-newcol col-xs-6">
					<div class="xa-zakbox">
						<img src="<?php echo get_template_directory_uri(); ?>/img/zak3.png" alt="">
						<p>Ванны</p>
					</div>
				</div>
				<div class="col-md-2 col-sm-4 xa-newcol xa-col50 col-xs-6">
					<div class="xa-zakbox">
						<img src="<?php echo get_template_directory_uri(); ?>/img/zak4.png" alt="">
						<p>Душевой кабины</p>
					</div>
				</div>
				<div class="col-md-2 col-sm-4 xa-newcol xa-col50 col-xs-6 xa-col100">
					<div class="xa-zakbox">
						<img src="<?php echo get_template_directory_uri(); ?>/img/zak5.png" alt="">
						<p>Перегородок</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h2>и получите скидку</h2>
				</div>
			</div>
		</div>
	</div>
</section>	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="zk_vivoz">	
				<div class="zk_vivoz_man"><img src="<?php echo get_template_directory_uri(); ?>/img/zk_vivoz_man.png" alt=""></div>
				<h3 class="zk_vivoz_caption">Причина вывоза мусора</h3>
				<div class="first_v">
				<ul>
					<li>Покупка новой мебели, старение старой.</li>
					<li>Освобождение комнаты или квартиры после смерти пожилого родственника, инвалида.</li>
					<li>Чистка квартиры перед ремонтом и после ремонта.</li>
					<li>Чистка квартиры перед или после продажи квартиры.</li>
					<li>Замена окон, полов, ванны или просто ремонт. (строительный мусор) </li>
				</ul>
				</div>
				<div class="second_v">
					<ul>		
						<li>Поломка бытовой техники.</li>
						<li>Надоела пианино.</li>
						<li>Чистка балконов и кладовых а также гаражей и складов.</li>
						<li>Вывоз мусора после переезда (квартиры, офисы, склады, торговые точки, развлекательные мероприятия) </li>
					</ul>
				</div>
				<div class="clear"></div>	
			</div>
		</div>
	</div>
</div>			

	<section class="ab-pochemy-mi">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="ab-pochemy-mi-title">
					<span>Почему именно мы</span>
				</div>
			</div>
			<div class="col-md-6">
				<div class="padding-top-col">
					<div class="ab-pochemy-mi-img-box">
					</div>
					<div class="ab-pochemy-mi-txt">
						<span>Мобильность бригад</span>
						<span> 
							(бригада рядом), современные автомобили типа «Газель» 
							способны припарковаться там, где бункеры поставить невозможно.
						</span>
					</div>
				</div>	
			</div>
			<div class="col-md-6">
				<div class="padding-top-col">
					<div class="ab-pochemy-mi-img-box ab-pochemy-mi-img-box2">
					</div>
					<div class="ab-pochemy-mi-txt">
						<span>Утилизация мусора только в предназначенных для этого местах</span>
						<span> 
							Никаких свалок возле дома, или в соседнем районе.
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
						<span>Диспетчерская база и способы 
							связаться с нами
						</span>
						<span> 
							Можете оставить номер телефона, мы вам перезвоним. Доступны мессенжеры. Обратный звонок.
						</span>
					</div>
				</div>	
			</div>
			<div class="col-md-6">
				<div class="padding-top-col">
					<div class="ab-pochemy-mi-img-box ab-pochemy-mi-img-box4">
					</div>
					<div class="ab-pochemy-mi-txt">
						<span>Скидки постоянным клиентам 
							или риэлторским конторам</span>
						<span> 
							Приведите пять друзей, и вывоз мусора из вашей квартиры сделаем бесплатно. (мысль)
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
						<span>Обученные бригады</span>
						<span> 
							Мы сами отключаем, демонтируем, выносим и грузим ваш мусор в нашу машину. Полный комплекс услуг. 
						</span>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="padding-top-col">
					<div class="ab-pochemy-mi-img-box ab-pochemy-mi-img-box6">
					</div>
					<div class="ab-pochemy-mi-txt">
						<span>Нет препятствий</span>
						<span> 
							Производим очистку в антисанитарных квартирах, любой объем и тип мусора.
						</span>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-md-3">
				<div class="ab-medal ab-medal-bottom">
					<img src="<?php echo get_template_directory_uri(); ?>/img/ab-medal1.png" alt="">
				</div>
			</div>
			<div class="col-md-1">

			</div>
			<div class="col-md-4">
				<div class="ab-medal">
					<img src="<?php echo get_template_directory_uri(); ?>/img/ab-medal2.png" alt="">
				</div>
			</div>
			<div class="col-md-3">
				<div class="ab-medal">
					<img src="<?php echo get_template_directory_uri(); ?>/img/ab-medal3.png" alt="">
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
					<span>Позвоните для оценки стоимости вызова<br> или оставьте заявку</span>
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
						<span>8 (499) 502-93-30</span>
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
				<h3 class="zk_caption">Наши преимущества</h3>
		</div>
		<div class="clearfix"></div>			
					<div class="col-md-3">
						<div class="zk_pr_ph">	
							<div class="zk-img-box">
								<img src="<?php echo get_template_directory_uri(); ?>/img/zk_pre_1.png" alt="">
							</div>			
							<div>Вывоз мусора из всей квартиры от 2 до 6 часов (зависит от захламленности). </div>		
						</div>
					</div>
					<div class="col-md-3">	
						<div class="zk_pr_ph">
							<div class="zk-img-box">			
								<img src="<?php echo get_template_directory_uri(); ?>/img/zk_pre_2.png" alt="">
							</div>	
								<div>Ваше нахождение в квартире не обязательно</div>
						</div>
					</div>
					<div class="col-md-3">	
						<div class="zk_pr_ph">
							<div class="zk-img-box">				
								<img src="<?php echo get_template_directory_uri(); ?>/img/zk_pre_3.png" alt="">
							</div>	
								<div>Самые профессиональные менеджеры</div>				
						</div>
					</div>
					<div class="col-md-3">	
						<div class="zk_pr_ph">
							<div class="zk-img-box">				
								<img src="<?php echo get_template_directory_uri(); ?>/img/zk_pre_4.png" alt="">
							</div>	
								<div>Собственный парк техники</div>				
						</div>
					</div>	
						<div class="clearfix"></div>
					<div class="col-md-4">
						<div class="zk_pr_ph">
							<div class="zk-img-box">
						 	<img src="<?php echo get_template_directory_uri(); ?>/img/zk_pre_5.png" alt="">
						 	</div>
						 	<div>Постоянно растущее количество бригад</div>
						</div>
					</div>
					<div class="col-md-4">	
						<div class="zk_pr_ph">
							<div class="zk-img-box">
						 	<img src="<?php echo get_template_directory_uri(); ?>/img/zk_pre_6.png" alt="">
						 	</div>
						 	<div>Зона обслуживания Москва и до 50 км вокруг Москвы</div>
						</div>
					</div>
					<div class="col-md-4">	
						<div class="zk_pr_ph">
							<div class="zk-img-box">
						 	<img src="<?php echo get_template_directory_uri(); ?>/img/zk_pre_7.png" alt="">
						 	</div>
						 	<div>Официальные договора со свалками ТБО (мусор не выкинут в соседний лес)</div>
						</div>
					</div>	
					
				<div class="clear"></div>
			</div>
		</div>
	</div>
</div>	











	<div class="clearfix"></div>

<section class="ah-ceni">

    <div class="container">
	    <div class="row">
		    <div class="col-md-12 col-sm-12 col-xs-12">
		    <div class="ah-ceniiimg">
		    	<span class="ah-ceniiimg-span">От<br><span>200</span><br>рублей за<br>предмет</span>
		    </div>
				<span class="ah-ceni-title">Низкие цены для всех<br class="ah-br"> и <br>постоянные скидки</span>
				<div class="ah-ceni-wrap">
					<div class="ah-ceni-item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ah-ceniiimg1.png" alt="ah-ceniiimg1">
						<span class="ah-item-span">Пенсионерам</span>		
					</div>
					<div class="ah-ceni-item">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ah-ceniiimg2.png" alt="ah-ceniiimg2">
						<span class="ah-item-span">Многодетным</span>			
					</div>
					<div class="ah-ceni-item ah-ceni-item1">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ah-ceniiimg3.png" alt="ah-ceniiimg3">
						<span class="ah-item-span">Инвалидам</span>			
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

<div class="clearfix"></div>	<section class="ab-otziv">
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
							<img src="<?php echo get_template_directory_uri(); ?>/img/ab-face-1.png" alt="">
						</div>
					</div>
					<div class="ab-face-txt">
						<span>Положительные</span>
					</div>
					<div class="ab-face-number">
						<span>2803</span>
					</div>	
				</div>
			</div>
			<div class="col-md-4">
				<div class="ab-otziv-face-wrap">
					<div class="ab-face-img-wrap">
						<div class="ab-face-img">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ab-face-2.png" alt="">
						</div>
					</div>
					<div class="ab-face-txt ab-face-txt-2">
						<span>Нейтральные</span>
					</div>
					<div class="ab-face-number ab-face-number-2">
						<span>451</span>
					</div>	
				</div>
			</div>
			<div class="col-md-4">
				<div class="ab-otziv-face-wrap">
					<div class="ab-face-img-wrap">
						<div class="ab-face-img">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ab-face-3.png" alt="">
						</div>
					</div>
					<div class="ab-face-txt ab-face-txt-3">
						<span>Отрицательные</span>
					</div>
					<div class="ab-face-number ab-face-number-2">
						<span>769</span>
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
		    <div class="col-md-12 col-sm-12 col-xs-12">
				<span class="ah-comptext-title">Текст о компании для СЕО</span>
				<p class="ah-comptext1">Первый в мире работающий на нефти двигатель Дизеля был пущен в ход в 1899 году. Он развивал 25 л.с. и затрачивал в час около четверти килограмма нефти на 1 л.с. Это был важный успех, но заветной мечтой Нобеля было применение дизеля в качестве судовой машины.</p>
				<p class="ah-comptext1">В то время среди многих инженеров еще было распространено скептическое отношение к дизелям. Большинство считало, что эти двигатели не годятся в качестве привода для движения судов.</p>
				<span class="ah-comptext-subtitle">Причины для этого были достаточно вескими.</span>
				<span class="ah-comptext-span">Во-первых, дизели не имели заднего хода (реверса) и, установленные на корабле, могли вращать винт только в одну сторону.</span>
				<span class="ah-comptext-span">Во-вторых, первые дизели было невозможно запустить при некоторых крайних положениях поршня.</span>
				<p class="ah-comptext1 ah-comptext2">В третьих, работа дизелей с трудом поддавалась регулировке - было трудно поменять режим их работы, например, уменьшить или увеличить частоту вращения вала, увеличивая или уменьшая тем самым скорость движения судна. Эти недостатки, не имевшие большого значения при стационарной установке и небольших размерах дизеля, работавшего под постоянной нагрузкой, были весьма существенным изъяном для транспортного двигателя. <a href="#">Широко применявшаяся</a> тогда паровая машина имела в этом смысле перед дизелем преимущество - реверс, изменение частоты вращения вала и пуск из любого положения достигались на ней без всякого труда. В таком случае, казалось бы, стоило ли вообще связываться с дизелем? Оказывается, стоило - в этом убеждали Нобеля элементарные расчеты.</p>
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
					<span>Закажите машину на сегодня</span>
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
					<span>8 (499) 502-93-30</span>
				</div>	
			</div>
			<div class="clearfix"></div>
			<div class="col-md-12">
				<div class="ab-zvonok-tel-2">
					<span>8 (915) 566-55-55</span>
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

<section class="ah-contakt">
    <div class="container">
	    <div class="row">
	    <span class="ah-contakt-span2">Наши контакты</span>
		    <div class="col-md-6 col-sm-6 col-xs-12">
				<div class="ah-contakt-wrapper">
					<div class="ah-contakt-top">
						<span class="ah-contakt-span">Москва</span>
						<span class="ah-contakt-span1">8 (495) 502-93-30</span>
					</div>
					<div class="ah-contakt-bottom">
						<div id="map"></div>
					</div>
				</div>
			</div>
		    <div class="col-md-6 col-sm-6 col-xs-12">
				<div class="ah-contakt-wrapper">
					<div class="ah-contakt-top">
						<span class="ah-contakt-span">Санкт-Петербург</span>
						<span class="ah-contakt-span1">8 (812) 012-12-12</span>
					</div>
					<div class="ah-contakt-bottom">
						<div id="map1"></div>
					</div>
				</div>
			</div>

			<div class="clearfix"></div>

		    <div class="col-md-6 col-sm-6 col-xs-12">
				<div class="ah-contakt-wrapper">
					<div class="ah-contakt-top">
						<span class="ah-contakt-span">Воронеж</span>
						<span class="ah-contakt-span1">8 (495) 502-93</span>
					</div>
					<div class="ah-contakt-bottom">
						<div id="map2"></div>
					</div>
				</div>
			</div>
		    <div class="col-md-6 col-sm-6 col-xs-12">
				<div class="ah-contakt-wrapper">
					<div class="ah-contakt-top">
						<span class="ah-contakt-span">Нижний Новгород</span>
						<span class="ah-contakt-span1">8 (554) 054-45-45</span>
					</div>
					<div class="ah-contakt-bottom">
						<div id="map3"></div>
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

		myMap = new ymaps.Map("map", {
		 center: [55.73521577724309,37.6503515],
		 zoom: 16,
		 controls: []
		});

		myMap1 = new ymaps.Map("map1", {
		 center: [55.73521577724309,37.6503515],
		 zoom: 16,
		 controls: []
		});

		myMap2 = new ymaps.Map("map2", {
		 center: [55.73521577724309,37.6503515],
		 zoom: 16,
		 controls: []
		});

		myMap3 = new ymaps.Map("map3", {
		 center: [55.73521577724309,37.6503515],
		 zoom: 16,
		 controls: []
		});

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
					<img src="<?php echo get_template_directory_uri(); ?>/img/footer-logo.png" alt="">
				</div>
			</div>
			<div class="col-md-4">
				<span class="xa-right">Создание сайта <a href="<?php echo get_template_directory_uri(); ?>/#">www.multiplex.su</a></span>
			</div>
		</div>
	</div>
</footer>

<div class="xa-topbox">
	<a href="<?php echo get_template_directory_uri(); ?>/#"><img src="<?php echo get_template_directory_uri(); ?>/img/top.png" alt=""></a>
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

