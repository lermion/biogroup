$(function(){


	/*var toOrder = $("#toOrder_1, #toOrder_2, #toOrder_4");
	var descriptionForms = $("#description_forms_1, #description_forms_2, #description_forms_4");
	toOrder.on("click", function(){
		if($(this).is("#toOrder_1")){
			$(this).parent().next().toggle(2000);
			$(this).text("Скрыть");
			descriptionForms.eq(1, 2).hide(2000);
			$("#toOrder_2, #toOrder_4").text("Заказать");
		}else if($(this).is("#toOrder_2")){
			$(this).parent().next().toggle(2000);
			$(this).text("Скрыть");
			descriptionForms.eq(0, 2).hide(2000);
			$("#toOrder_1, #toOrder_4").text("Заказать");
		}else{
			$(this).parent().next().toggle(2000);
			$(this).text("Скрыть");
			descriptionForms.eq(0, 1).hide(2000);
			$("#toOrder_1, #toOrder_2").text("Заказать");
		}
	});*/
	var buttons = $("div#content .toOrder");
	var forms = $("div#content .descriptionForm");
	
	function description_forms_animation(buttons, forms){
		$(buttons).on("click", function(){
			if($(forms).is(":visible")){
				//$(forms).hide(2000);
				$(forms).animate( { height: "hide" }, 2000, "easeOutBounce");
				$(buttons).text("Заказать");
			}else{
				$(this).parent().next().animate({height: "show"}, 2000, "easeOutBounce");
				$(this).text("Скрыть");
			}
		});
	}
	description_forms_animation(buttons, forms);
});