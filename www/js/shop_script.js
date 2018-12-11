$(document).ready(function() { //Прокрутка новостей

$("#newsticker").jCarouselLite({
	vertical: true,
	hoverPause: true,
	btnPrev: "#news-prev",
	btnNext: "#news-next",
	visible: 3,
	auto:3000,
	speed:500

});//конец

$("#style-grid").click(function() { //Переключение вида( список и таблица)

$("#block-tovar-grid").show();
$("#block-tovar-list").hide();

$("#style-grid").attr("src","/images/pink.png");
$("#style-list").attr("src","/images/Без названия (2).png"); //конец

$.cookie('select_style','grid');//Сохранение вида при перезагрузке

});
$("#style-list").click(function() {

$("#block-tovar-grid").hide();
$("#block-tovar-list").show();

$("#style-list").attr("src","/images/pinklist.png");
$("#style-grid").attr("src","/images/256131-200.png");

$.cookie('select_style','list');

});

if($.cookie('select_style') == 'grid')
{
$("#block-tovar-grid").show();
$("#block-tovar-list").hide();

$("#style-grid").attr("src","/images/pink.png");
$("#style-list").attr("src","/images/Без названия (2).png");
}
else{
$("#block-tovar-grid").hide();
$("#block-tovar-list").show();

$("#style-list").attr("src","/images/pinklist.png");
$("#style-grid").attr("src","/images/256131-200.png");
}//конец

$("#select-sort").click(function(){//Выпадающий список сортировки
$("#sorting-list").slideToggle(200);
});//конец
$('#block-category > ul > li > a').click(function(){ //Выпадающий список "Баян"
   if ($(this).attr('class') != 'active') {

   	  $('#block-category > ul > li > ul').slideUp(400); //закрывается список
   	  $(this).next().slideToggle(400);//Открывается следующий список

   	  $('#block-category > ul > li > a').removeClass('active');//для того, чтоб активный список только один был
   	  $(this).addClass('active');
   	  $.cookie('select_cat', $(this).attr('id'));//Для запоминания открытого списка

   }else 
   {
   	$('#block-category > ul > li > a').removeClass('active');//убираем активную ссылку
   	$('#block-category > ul > li > ul').slideUp(400);//закрываем списки активные
   	$.cookie('select_cat','');//сохраняем пустой кук
   }
});
if ($.cookie('select_cat') != '') //если сущ кук и не = пустоте
{
$('#block-category > ul > li > #'+$.cookie('select_cat')).addClass('active').next().show(); //указываем на наши индексы (1,2,3)+ их значение и активен опред. список
}
});

 // $('.top-auth').toggle( //выпадающее окно для авториз-и
 //   function() {
 //      $(".top-auth").attr("id","active-button");
 //      $("#block-top-auth").fadeIn(200);
 //   },
 //   function() {
 //      $(".top-auth").attr("id","");
 //      $("#block-top-auth").fadeOut(200);
 //   }
 //   );