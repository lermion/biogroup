window.onload = function(){
	var toOrder1 = $("#toOrder_1");
	var toOrder2 = $("#toOrder_2");
	var toOrder4 = $("#toOrder_4");
	var descriptionForms1 = $("#description_forms_1");
	var descriptionForms2 = $("#description_forms_2");
	var descriptionForms4 = $("#description_forms_4");
	
	toOrder1.on("click", function(){
		if($(descriptionForms1).is(":visible")){
			descriptionForms1.slideUp(1500);
			$(this).text("Заказать");
		}else{
			descriptionForms1.slideDown(1500);
			$(this).text("Скрыть");
		}
		if($(descriptionForms2).is(":visible")){
			descriptionForms2.slideUp(1500);
			$(toOrder2).text("Заказать");
		}else if($(descriptionForms4).is(":visible")){
			descriptionForms4.slideUp(1500);
			$(toOrder4).text("Заказать");
		}
	});
	
	toOrder2.on("click", function(){
		if($(descriptionForms2).is(":visible")){
			descriptionForms2.slideUp(1500);
			$(this).text("Заказать");
		}else{
			descriptionForms2.slideDown(1500);
			$(this).text("Скрыть");
		}
		if($(descriptionForms1).is(":visible")){
			descriptionForms1.slideUp(1500);
			$(toOrder1).text("Заказать");
		}else if($(descriptionForms4).is(":visible")){
			descriptionForms4.slideUp(1500);
			$(toOrder4).text("Заказать");
		}
	});

	toOrder4.on("click", function(){
		if($(descriptionForms4).is(":visible")){
			descriptionForms4.slideUp(1500);
			$(this).text("Заказать");
		}else{
			descriptionForms4.slideDown(1500);
			$(this).text("Скрыть");
		}
		if($(descriptionForms1).is(":visible")){
			descriptionForms1.slideUp(1500);
			$(toOrder1).text("Заказать");
		}else if($(descriptionForms2).is(":visible")){
			descriptionForms2.slideUp(1500);
			$(toOrder2).text("Заказать");
		}
	});

	var descriptionIframe1 = $(".descriptionIframe_1");
	var descriptionIframe2 = $(".descriptionIframe_2");
	var descriptionIframe4 = $(".descriptionIframe_4");
	
	var descriptionSubmit1 = $(".descriptionSubmit_1");
	var descriptionSubmit2 = $(".descriptionSubmit_2");
	var descriptionSubmit4 = $(".descriptionSubmit_4");

	descriptionSubmit1.click(function(){
		descriptionIframe1.fadeIn(1000);
	});
	
	descriptionSubmit2.click(function(){
		descriptionIframe2.fadeIn(1000);
	});

	descriptionSubmit4.click(function(){
		descriptionIframe4.fadeIn(1000);
	});
}
$(document).ready(function(){
    $('a[href^="#"]').click(function(){ //берем все ссылки атрибу href которых начинается с #
      if(document.getElementById($(this).attr('href').substr(1)) != null) { //на странице есть элемент с нужным нам id
         $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top }, 500); // анимируем скролл к элементу
      }     
      return false;
    });
     var top_show = 880; // В каком положении полосы прокрутки начинать показ кнопки "Наверх"
  var delay = 1000; // Задержка прокрутки
  $(document).ready(function() {
    $(window).scroll(function () { // При прокрутке попадаем в эту функцию
      /* В зависимости от положения полосы прокрукти и значения top_show, скрываем или открываем кнопку "Наверх" */
     	if($('body').width() < 1065){
     		$("#top").css("display");
      	}else{
      		if($(this).scrollTop() > top_show){
      		$('#top').fadeIn();
      		}else{
      		$('#top').fadeOut();
      		}
      	}
    });
    $('#top').click(function () { // При клике по кнопке "Наверх" попадаем в эту функцию
      /* Плавная прокрутка наверх */
      $('body, html').animate({
        scrollTop: 0
      }, delay);
    });
  });
  	
  	//});
	
});