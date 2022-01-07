<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Это моя первая страница ...">
	<meta name="author" content="Alexey">
	<meta name="robots" content="all">
	<meta property="og:title" content="Это моя первая страница ...">
	<title>Алексей Гнездилов - Вэб-разработчик</title>
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
   		(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   			m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   			(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   			ym(87070551, "init", {
        		clickmap:true,
        		trackLinks:true,
        		accurateTrackBounce:true,
        		webvisor:true
   		});
	</script>
	<noscript>
		<div>
			<img src="https://mc.yandex.ru/watch/87070551" style="position:absolute; left:-9999px;" alt="" />
		</div>
	</noscript>
	<!-- /Yandex.Metrika counter -->
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Corinthia:wght@700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<script>
	window.onload = function() {document.querySelector('.loader').classList.add("preloader-remove");};
	</script>
</head>
<body>

<!-- --------------------------------------- Прелоадер - загрузчик сайта -------------------------------- -->	
<div class="loader">
	<div class="loader-inner">
		<div class="loader-line-wrap">
			<div class="loader-line"></div>
		</div>
		<div class="loader-line-wrap">
			<div class="loader-line"></div>
		</div>
		<div class="loader-line-wrap">
			<div class="loader-line"></div>
		</div>
		<div class="loader-line-wrap">
			<div class="loader-line"></div>
		</div>
		<div class="loader-line-wrap">
			<div class="loader-line"></div>
		</div>
	</div>
</div>

<!-- ---------------------------------------------------------------------------------------------------- -->

<!-- ----------- Всплывающее модальное окно ------------------------------------------------------------- -->
<form action="php/mailFromModalWindow.php" method="post" id="formFromModalWindow">
	<div id="overlay">
    	<div class="popup">
        	<h2>ПОЛУЧИ СКИДКУ НА ПЕРВЫЙ ЗАКАЗ !!!</h2>
        	<input type="text"  name="name"   placeholder="Имя" id="nameFromModal"><br>
			<input type="email" name="email"  placeholder="Email" id="emailFromModal"><br>
			<input type="submit" value="Отправить">
        	<button type="button" class="close" title="Закрыть" id="closeButton" onclick="document.getElementById('overlay').style.display='none';"></button>
    	</div>
	</div>
</form>
<!-- ---------------------------------------------------------------------------------------------------- -->

<!-- ----------------------------------------Навигационная панель --------------------------------------- -->		
<header>
	<?php
		include('nav.php');
	?>
</header>

<!-- Main ----------------------------------------------------------------------------------------------- -->
<main>

<!-- ----------- Контейнер-пустышка  - чтобы под навигацию фон не залазил-------------------------------- -->
<section>
	<div class="pustyshka"></div>
</section>
<!-- ---------------------------------------------------------------------------------------------------- -->

<!-- ---------------------------------------- 1 страница - Представление -------------------------------- -->

<section class="main section" id="main">
	<div class="container h-100">
		<div class="row align-items-center h-100">
			<div class="col-lg-6 mt-5 pt-5">
				<div class="title_container element_animation mt-5">
					<h1>Привет <br> Я Alex G</h1>
					<h4><i class="fa fa-css3 custom-css3"></i> Fullstuck и Android разработчик</h4>
					<input type="button" value="Обо мне"    onclick="window.location.href = '#about_me';">
					<input type="button" value="Мои работы" onclick="window.location.href = '#cases';" onclick="ym(87070551,'reachGoal','cazes'); return true;">
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ---------------------------------------- 2 страница - Обо мне -------------------------------------- -->

<section class="second_page section" id="about_me">
	<h3>ОБО МНЕ</h3>
	<img class="poloska" src="img/line.png" alt=""><br><br><br>
	<img class="otl_zagr" src="" data-src="img/photo.png" alt=""><br><br>
	<p class="col-8 offset-2">
			Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam, cupiditate est odio consectetur officiis ipsa facilis delectus eveniet dolorem magni blanditiis ab, ex ratione, nemo ullam doloremque voluptates reprehenderit deleniti.
			<br><br>
			Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Laudantium in, omnis eveniet, praesentium dignissimos eos doloremque, beatae commodi nemo nobis quae perferendis inventore necessitatibus ullam consequuntur delectus vel sed fuga!
	</p>
	<br>
	<a href="files/Resume.pdf" download=""><input class="col-2" type="button" value="Скачать резюме"></a>
</section>

<!-- ---------------------------------------- 3 страница - Что я умею ----------------------------------- -->

<section class="third_page section" id="services">
	<h3>ЧТО Я УМЕЮ</h3>
	<img class="poloska" src="img/line.png" alt=""> 
	<ul class="col-8 offset-2">
		<li><img src="img/note.png" alt=""><br><br><h4>Веб-дизайн</h4><br>Lorem ipsum dolor sit ametconsectetur<br> adipisicing, elit.<br> Aperiam, earum!</li>

		<li><img src="img/sign.png" alt=""><br><br><h4>Разработка</h4><br>Lorem ipsum dolor sit amet consectetur<br> adipisicing elit. <br> Aperiam, earum!</li>

		<li><img src="img/rocket.png" alt=""><br><br><h4>CEO-Оптимизация</h4><br>Lorem ipsum dolor sit amet consectetur<br> adipisicing, elit.<br> Aperiam, earum!</li>

		<li><img src="img/gram.png" alt=""><br><br><h4>Маркетинг</h4><br>Lorem ipsum dolor sit ametconsectetur<br> adipisicing, elit. <br> Aperiam, earum!</li>
	</ul>	
</section>

<!-- ---------------------------------------- 4 страница - Кейсы ---------------------------------------- -->

<section class="fourth_page section" id="cases">
	<div class="hat">
		<h3>КЕЙСЫ</h3>
		<img class="poloska" src="img/line.png" alt="">
		<p class="col-8 offset-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, culpa rem aliquam animi!
		</p><br>
	</div>
	
	<div class="container"> 
		<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  			<div class="carousel-indicators">
    			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  			</div>
  			<div class="carousel-inner">
    			<div class="carousel-item active">
     				 <img src="img/case.png" href="img/case.png" class="d-block mx-auto image-link" alt="...">
    			</div>
    			<div class="carousel-item">
     				 <img src="img/case.png" href="img/case.png" class="d-block mx-auto image-link" alt="...">
    			</div>
    			<div class="carousel-item">
      				 <img src="img/case.png" href="img/case.png" class="d-block mx-auto image-link" alt="...">
    			</div>
  			</div>
  			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    			<span class="visually-hidden">Previous</span>
  			</button>
  			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    			<span class="carousel-control-next-icon" aria-hidden="true"></span>
    			<span class="visually-hidden">Next</span>
  			</button>
		</div>
		<br><br>
    	<div class="row">  
		    <div class="col-3 offset-2 fourthPagefirstlist">	
				<b>CLIENT:</b>
				<br>Какая-то компания<br>
				<b>WEBSITE:</b>
				<br>https://www.somedomain.com<br><br>
				<input class="VISIT_LIVE_SITE" type="submit" value="Перейти на сайт">
			</div>

			<div class="col-5 fourthPagefirstlist">
				<b>Название проекта</b><br>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur mai nam distinctio enim ut, corporis magni dicta autem doloremque ad qui sint officia blandit deleniti veritatis magnam ex eius 
			</div>
		</div>
	</div>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

	<div class="myForm col-5 offset-4 section mx-auto" id="prices">
		<h3 align="center">Расчёт стоимости</h3><br>
		<div>
		    <b>ТИП САЙТА</b><br>
			<select name="type" class="form-select" id="siteType" aria-label="Default select example">
				<option value="Сайт-визитка">Сайт-визитка</option>
				<option value="Лендинг">Лендинг</option>
				<option value="Интернет-магазин">Интернет-магазин</option>
				<option value="Социальная сеть">Социальная сеть</option>
			</select>
					
			<b>ДИЗАЙН</b>
			<select name="design" class="form-select" id="siteDesign" aria-label="Default select example">		
				<option value="Шаблонный дизайн">Шаблонный дизайн</option>
				<option value="Уникальный дизайн">Уникальный дизайн</option>
				<option value="Wow-дизайн">Wow-дизайн</option>
			</select>
					
			<b>АДАПТИВНОСТЬ</b>
			<select name="adapting" class="form-select" id="siteAdapt" aria-label="Default select example">
				<option value="Адаптивный дизайн">Адаптивный</option>
				<option value="Неадаптивный дизайн">Неадаптивный</option>
			</select>
			<br>
			<div class="just_line"></div> <!-- Просто линия  -->
			<br>
			<div class="block">
				<div class="roww">
					<div class="coll"><b>Сроки (дн)</b></div>
					<div class="coll" id="js-result-1"><b>0</b></div>
				</div> 
			</div>
			<div class="block">
				<div class="roww">
					<div class="coll"><b>Стоимость (руб)</b></div>
					<div class="coll" id="js-result-2"><b>0</b></div>
				</div> 
			</div>
			<br>
			<div align="center">
				<input class="VISIT_LIVE_SITE" id="js-button" type="button" value="Посчитать">
			</div>
			<br>

			<!-- Button trigger modal -->
			<div align="center">
				<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Обратная связь
				</button>
			</div>	
		</div>
	</div>
</section>
<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
    	<div class="modal-content">
      		<div class="modal-header">
        		<h5 class="modal-title" id="exampleModalLabel">Обратная связь</h5>
        		<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      		</div>
      		
      		<div class="modal-body">
				<form action="php/mailFromPricesPage.php" method="post" id="formFromPricesPage">
			  		<div class="row mb-3">
			    		<label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
			    		<div class="col-sm-10">
			      			<input type="email" name="user_email" class="form-control" id="inputEm">
			    		</div>
			  		</div>
			  		<div class="row mb-3">
			    		<label for="inputPassword3" class="col-sm-2 col-form-label">Телефон</label>
			    		<div class="col-sm-10">
			      			<input type="phone" name="user_phone" class="form-control" id="inputTel">
			    		</div>
			  		</div>
			  		<fieldset class="row mb-3">
			    		<legend class="col-form-label col-sm-6 pt-0">Вы первый раз на этом сайте?</legend>
			    		<div class="col-sm-6">
			      			<div class="form-check">
			        			<input class="form-check-input" type="radio" name="radios" id="gridRadios1" value="option1" checked>
			        			<label class="form-check-label" for="gridRadios1">Да</label>
			      			</div>
			      			<div class="form-check">
			        			<input class="form-check-input" type="radio" name="radios" id="gridRadios2" value="option2">
			        			<label class="form-check-label" for="gridRadios2">Нет</label>
			      			</div>
			    		</div>
			  		</fieldset>
			  		<div class="row mb-3">
			    		<div class="col-sm-10">
			      			<div class="form-check">
			        			<input class="form-check-input" name="check" type="checkbox" id="gridCheck1">
			        			<label class="form-check-label" for="gridCheck1">Пользовательское соглашение</label>
			      			</div>
			    		</div>
			  		</div>
			  		<button type="submit" class="btn btn-primary">Отправить</button>
				</form>
      		</div>
      		<div class="modal-footer">
      		</div>
    	</div>
  	</div>
</div>

<!-- ------------------------------- 5 страница - Статистика  ------------------------------------------- -->    
<section class="fifth_page section" id="statistic">
	<h3>НЕМНОГО СТАТИСТИКИ</h3>
	<img class="poloska" src="img/line.png" alt="">
	<ul>
		<li><img src="img/smile.png" alt=""><br><h4 class="animate_stat" data-count="120">0</h4>Счастливых клиентов</li>
		<li><img src="img/skobki.png" alt=""><br><h4 class="animate_stat" data-count="4600">0</h4>Часов работы</li>
		<li><img src="img/galka.png" alt=""><br><h4 class="animate_stat" data-count="340">0</h4>Проектов завершено</li>
		<li><img src="img/kubok.png" alt=""><br><h4 class="animate_stat" data-count="23">0</h4>Наград получено</li>
	</ul>
</section>

<!-- -------------------------------  6 страница - Отзывы ----------------------------------------------- -->   
<section class="sixth_page section" id="feedback">
	<h3>ОТЗЫВЫ</h3>
	<img class="poloska" src="img/line.png" alt=""><br><br>
  	<div class="fotorama" align="center" data-arrows="false" data-loop="true">
  		<div>
  			<img src="img/fotka.png">
  			<br><br><br>
  			<p>Lorem, ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam inventore eius illum nulla molestias hic rerum sunt tempora cumque in? Accusantium similique a, voluptas expedita unde excepturi, iusto officia! Debitis.</p>
  			<p><b>Михаил,</b>   Ген. директор ПАО "ГАЗПРОМ".</p>
  		</div>
  		<div>
  			<img src="img/fotka.png">
  			<br><br><br>
  			<p>Lorem, ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam inventore eius illum nulla molestias hic rerum sunt tempora cumque in? Accusantium similique a, voluptas expedita unde excepturi, iusto officia! Debitis.</p>
  			<p><b>Михаил,</b>   Ген. директор ПАО "ГАЗПРОМ".</p>
  		</div>
  		<div>
  			<img src="img/fotka.png">
  			<br><br><br>
  			<p>Lorem, ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam inventore eius illum nulla molestias hic rerum sunt tempora cumque in? Accusantium similique a, voluptas expedita unde excepturi, iusto officia! Debitis.</p>
  			<p><b>Михаил,</b>   Ген. директор ПАО "ГАЗПРОМ".</p>
  		</div>
  	</div>			
</section>

<!-- ------------------------------- 7 страница - Контакты ---------------------------------------------- -->

<section class="seventh_page section" id="contacts">
	<h3 class="wow animate__animated animate__wobble">МОИ КОНТАКТЫ</h3>
	<img class="poloska" src="img/line.png" alt=""><br>
	<p>Lorem ipsum, sit, amet consectetur adipisicing elit. Neque, similique? Cupiditate cumque incidunt fuga?</p>
	<ul class="seventhPageFirstList">
		<li><img src="img/geo.png" alt=""><br><br>Иркутск<br> Новаторов 14 </li>
		<li><a href="mailto:gnezdilov_alexey_1993@mail.ru?subject=Письмо из ссылки&body=HelloWorld"><img src="img/convert.png" alt=""></a><br><br>gnezdilov_alexey_1993@mail.ru</li>
		<li><a href="tel:<?php include('tel.php'); ?>"><img src="img/truba.png" alt=""></a><br><br><?php include('tel.php'); ?></li>
	</ul>

	<h5 class="wow animate__animated animate__wobble" data-wow-delay="2s">ОСТАВЬТЕ МНЕ СООБЩЕНИЕ</h5>	

	
	<form action="php/mailFromContactPage.php" method="post" id="formFromContactPage">
		<input type="text"  name="user_name"  placeholder="Имя"   id="nameFromContactPage">
		<input type="email" name="email_user" placeholder="Email" id="emailFromContactPage"><br>
		<textarea name="user_message" id="1" cols="45" rows="10" placeholder="Сообщение" id="textFromContactPage"></textarea><br>
		<button type="submit">Отправить</button>
	</form>
		

	<ul class="seventhPageSecondList">
		<li><a href="https://ru-ru.facebook.com/" target="_blank"><img src="img/f.png" alt=""></a></li>
		<li><a href="https://twitter.com/?lang=ru" target="_blank"><img src="img/twit.png" alt=""></a></li>
		<li><a href="https://dribbble.com/" target="_blank"><img src="img/myach.png" alt=""></a></li>
		<li><a href="https://ru.wikipedia.org/wiki/%D0%97%D0%B0%D0%B3%D0%BB%D0%B0%D0%B2%D0%BD%D0%B0%D1%8F_%D1%81%D1%82%D1%80%D0%B0%D0%BD%D0%B8%D1%86%D0%B0" target="_blank"><img src="img/kisa.png" alt=""></a></li>
		<li><a href="https://www.instagram.com/" target="_blank"><img src="img/inst.png" alt=""></a></li>
		<li><a href="https://ru.wikipedia.org/wiki/%D0%97%D0%B0%D0%B3%D0%BB%D0%B0%D0%B2%D0%BD%D0%B0%D1%8F_%D1%81%D1%82%D1%80%D0%B0%D0%BD%D0%B8%D1%86%D0%B0" target="_blank"><img src="img/in.png" alt=""></a></li>
	</ul>
</section>

<!-- ------------------------------ 8 страница - Карты -------------------------------------------------- -->

<section class="eight_page section" id="maps">
	<div>
		<a class="dg-widget-link" href="http://2gis.ru/irkutsk/firm/70000001024736487/center/104.20944213867189,52.35079479664232/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Иркутска
		</a>
		<div class="dg-widget-link">
			<a href="http://2gis.ru/irkutsk/firm/70000001024736487/photos/70000001024736487/center/104.20944213867189,52.35079479664232/zoom/17?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=photos">Фотографии компании
			</a>
		</div>
		<div class="dg-widget-link">
			<a href="http://2gis.ru/irkutsk/center/104.209442,52.350307/zoom/16/routeTab/rsType/bus/to/104.209442,52.350307╎Пилот, спортивный клуб?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Пилот, спортивный клуб
			</a>
		</div>
		<script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script>
		<script charset="utf-8">new DGWidgetLoader({"width":"100%","height":600,"borderColor":"#a3a3a3","pos":{"lat":52.35079479664232,"lon":104.20944213867189,"zoom":16},"opt":{"city":"irkutsk"},"org":[{"id":"70000001024736487"}]});
		</script>
		<noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.
		</noscript>
		<div class="author">
				Copyright&copy;2021 Алексей Гнездилов. Design by Web
		</div>				
	</div>
</section>

<!-- --------------------------------------------------------------------------------------------------- -->
</main>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.maskedinput.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
<script src="js/myScript.js"></script>
<script src="js/wowScript.js"></script>
</body>
</html>