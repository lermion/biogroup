<?php
	$year = strftime("%Y");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Агро-Союз Терминал</title>
	<link rel="stylesheet" href="css/style.css">
	<meta charset="utf-8">
	<script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/lightbox.min.js"></script>
	<link href="css/lightbox.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:700&subset=cyrillic,latin' rel='stylesheet' type='text/css'>
	<script src="js/old_index.js"></script>
</head>
<body>
<div id="container">
<img id="top" src="img/back_to_top.png">
<header id="home" class="shadow">
	<div class="logo">
		<img src="img/logo_agro_white.png"/>		
	</div>
	<div class="navbar">
		<ul>
			<li><a href="#home">Главная</a></li>
			<li class="separator"><p>|</p></li>
			<li><a href="#content">Производство</a></li>
			<li class="separator"><p>|</p></li>
			<li><a href="#about">О нас</a></li>
			<li class="separator"><p>|</p></li>
			<li><a href="#contacts">Контакты</a></li>
		</ul>
	</div>
</header>
<div id="intro">
	<h1>Топливо для котлов и каминов.<br/>Древесный уголь</h1>
</div>
<div id="content">
	<div class="item">
		<div class="photo">
			<a href="img/evrodrova/1.jpg" data-lightbox="roadtrip1" data-title="Древесные топливные брикеты Pini Kay, евродрова"><img src="img/evrodrova.png" alt="Древесные топливные брикеты Pini Kay, евродрова"/></a>
			<a href="img/evrodrova/2.jpg" data-lightbox="roadtrip1" data-title="Древесные топливные брикеты Pini Kay, евродрова"></a>
			<a href="img/evrodrova/3.jpg" data-lightbox="roadtrip1" data-title="Древесные топливные брикеты Pini Kay, евродрова"></a>
			<a href="img/evrodrova/4.jpg" data-lightbox="roadtrip1" data-title="Древесные топливные брикеты Pini Kay, евродрова"></a>
		</div>
		<div class="description">
			<h2>Древесные топливные брикеты Pini&Kay</h2>			
			<p>
				Брикет Pini&Kay – это экологичный и чистый вид твердого топлива. Он производится только из древесины твердых пород. Легкие в использовании твердотопливные брикеты Pini&Kay влагостойкие, легкие в транспортировке, высококалорийные, экологически чистые и не стреляют угольками при горении.
				Использовать брикеты Pini Kay можно в твердотопливных котлах, для розжига костра, для приготовлении пищи на углях.
			</p>
			<div id="toOrder_1" class="toOrder">Заказать</div>
		</div>
		<div class="descriptionForm" id="description_forms_1">
			<form method="POST" action="description_mail.php" target="description_area_1" onsubmit="clearFormOne(this); return true;">
				<input type="text" id="descriptionName" class="descriptionName" name="name" placeholder="Ваше имя"/>
				<input type="text" class="descriptionPhone" name="descriptionPhone" placeholder="Ваш телефон"/>
				<input type="text" name="descriptionForm" value="Древесные топливные брикеты Pini&Kay" style="display: none;"/>
				<input type="email" class="descriptionEmail" name="email" placeholder="Ваша почта"/>
				<textarea class="descriptionTextarea" name="message" placeholder="Сообщите нам детали вашего заказа, а также количество и нужна ли вам доставка" rows="1"></textarea>
				<input class="descriptionSubmit_1" type="submit" value="Отправить">
				<div class="descriptionIframe_1"><iframe name="description_area_1"></iframe></div>
			</form>
		</div>
	</div>
	<div class="item">
		<div class="photo">
			<a href="img/briq/briq1.jpg" data-lightbox="roadtrip2" data-title="Уголь из брикетов Pini&Kay"><img src="img/coal_single.jpg" alt="Уголь из брикетов Pini&Kay"/></a>
			<a href="img/briq/briq2.jpg" data-lightbox="roadtrip2" data-title="Уголь из брикетов Pini&Kay"></a>
			<a href="img/briq/briq3.jpg" data-lightbox="roadtrip2" data-title="Уголь из брикетов Pini&Kay"></a>
			<a href="img/briq/briq4.jpg" data-lightbox="roadtrip2" data-title="Уголь из брикетов Pini&Kay"></a>
			<a href="img/briq/briq5.jpg" data-lightbox="roadtrip2" data-title="Уголь из брикетов Pini&Kay"></a>
			<a href="img/briq/briq6.jpg" data-lightbox="roadtrip2" data-title="Уголь из брикетов Pini&Kay"></a>
		</div>
		<div class="description">
			<h2>Уголь из брикетов Pini&Kay</h2>			
			<p>
				Уголь из брикетов Pini&Kay по отношению к обычному древесному углю имеет ряд преимуществ: низкая зольность, повышенная плотность угля в 1,1 - 1,3 раза, повышенная калорийность. Уголь из брикетов Pini&Kay отлично подойдет для использования в домашних открытых каминах, в промышленности.
			</p>
			<div id="toOrder_2" class="toOrder">Заказать</div>
		</div>
		<div class="descriptionForm" id="description_forms_2">
			<form method="POST" action="description_mail.php" target="description_area_2" onsubmit="clearFormOne(this); return true;">
				<input type="text" class="descriptionName" name="name" placeholder="Ваше имя"/>
				<input type="text" class="descriptionPhone" name="descriptionPhone" placeholder="Ваш телефон"/>
				<input type="text" name="descriptionForm" value="Уголь из брикетов Pini&Kay" style="display: none;"/>
				<input type="email" class="descriptionEmail" name="email" placeholder="Ваша почта"/>
				<textarea class="descriptionTextarea" name="message" placeholder="Сообщите нам детали вашего заказа, а также количество и нужна ли вам доставка" rows="1"></textarea>
				<input class="descriptionSubmit_2" type="submit" value="Отправить"/>
				<div class="descriptionIframe_2"><iframe name="description_area_2"></iframe></div>
			</form>
		</div>
	</div>
	<div class="item">
		<div class="photo">
		<a href="img/charcoal/1.jpg" data-lightbox="roadtrip3" data-title="Уголь древесный из фруктовых деревьев"><img src="img/coal.png" alt="Уголь древесный из фруктовых деревьев"/></a>
		
		</div>
		<div class="description">
			<h2>Древесный уголь из фруктовых деревьев</h2>			
			<p>
				Древесный уголь производится из фруктовых пород деревьев (груша, яблоня). 
				Брикет выжигается в экологически чистых печах по самым современным стандартам производства угля методом пиролиза. 
				Высокое качество угля гарантирует ровное горение и постоянный жар сроком более 4 часов. 
				Использование угольных брикетов из фруктовых пород деревьев рекомендуется в ресторанах и гриль-барах.
			</p>
			<div id="toOrder_4" class="toOrder">Заказать</div>
		</div>
		<div class="descriptionForm" id="description_forms_4">
			<form method="POST" action="description_mail.php" target="description_area_4" onsubmit="clearFormOne(this); return true;">
				<input type="text" class="descriptionName" name="name" placeholder="Ваше имя"/>
				<input type="text" class="descriptionPhone" name="descriptionPhone" placeholder="Ваш телефон"/>
				<input type="text" name="descriptionForm" value="Древесный уголь из фруктовых деревьев" style="display: none;"/>
				<input type="email" class="descriptionEmail" name="email" placeholder="Ваша почта"/>
				<textarea class="descriptionTextarea" name="message" placeholder="Сообщите нам детали вашего заказа, а также количество и нужна ли вам доставка" rows="1"></textarea>
				<input class="descriptionSubmit_4" type="submit" value="Отправить"/>
				<div class="descriptionIframe_4"><iframe name="description_area_4"></iframe></div>
			</form>
		</div>
	</div>
</div>
<div id="border" class="shadow"></div>
<div id="about">
	<div class="company">
		<h3>Предприятие "Агро-Союз-Терминал"</h3>
		<p>Мы производим топливные брикеты Pini&Kay, древесный уголь, угольные брикеты Pini&Kay и пеллеты из лузги подсолнечника  с 2013 года. Производство осуществляется высококлассными специалистами на современном оборудовании с использованием самых последних технологических разработок в области производства топливных брикетов и угля.</p>		
	</div>
	<div class="map">
		<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=HjSIuOVe7vahOW13Mi6YQoWeu2i72fDp&width=400&height=300"></script>
	</div>
</div>

<div id="contacts">
	<div class="form">
		<form method="POST" action="mail.php" target="area" onsubmit="clearFormTwo(this); return true;">
			<div id="name">
				<input type="text" id="mainFormName" name="name" placeholder="Ваше имя"/>
			</div>
			<div id="phone">
				<input type="text" id="MainFormPhone" name="MainFormPhone" placeholder="Ваш телефон"/>
			</div>
			<input type="text" name="descriptionForm" value="Главная форма" style="display: none;"/>
			<div id="mail">
				<input type="email" id="mainFormEmail" name="email" placeholder="Ваша почта"/>
			</div>
			<div id="textarea">
				<textarea name="message" id="mainFormTextarea" placeholder="Оставьте Ваши вопросы или предложения и мы свяжемся с Вами"></textarea>
			</div>
			<input type="submit" value="Отправить"/>
			<div id="iframe"><iframe name="area"></iframe></div>
		</form>
	</div>
	<div class="phone">
		<table>
		<tr>
			<td colspan="2"><h4>Адрес:</h4></td>
		</tr>
		<tr>
			<td colspan="2"> <p style="display:block;">52005, Украина, Днепропетровская область, Днепропетровский район, пгт. Юбилейное,<br/> ул. Нижнеднепровская, 1</p></td>
		</tr>
		<tr>
			<td colspan="2"><h4>Телефоны предприятия:</h4></td>
		</tr>
		<tr>
			<td rowspan="2"><p>Дирекция тел.:</p></td>
			<td><p>+380 (50) 7751021</p></td>
		</tr>
		<tr>
			<td><p>+380 (56) 3706906</p></td>			
		</tr>
		<tr>
			<td><p>Отдел сбыта тел.:</p></td>
			<td><p>+380 (50) 7751021</p></td>
		</tr>
	</table>
	</div>
</div>
<div id="border" class="shadow"></div>
<footer>
	<div class="copyright">
	<p>&#169; Все права защищены, <?= $year;?></p>
	</div>
	<div class="dev">
		<p><strong><a href="http://vrd.dp.ua">Разработка VRD</p>
	</div>
</footer>
<div id="top">Наверх</div>
<script type="text/javascript">
	function clearFormOne(f){
  window.setTimeout(function(){
  	f.elements.email.value="";
  	f.elements.descriptionPhone.value="";
  	f.elements.name.value="";
  	f.elements.message.value="";
  }, 100);
}
function clearFormTwo(f){
  window.setTimeout(function(){
  	f.elements.email.value="";
  	f.elements.MainFormPhone.value="";
  	f.elements.name.value="";
  	f.elements.message.value="";
  }, 100);
}
</script>
</body>