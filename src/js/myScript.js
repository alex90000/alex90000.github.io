"use strict"

$(document).ready(function(){

/////////////////////Таймер для всплывающего окна///////////////////////////////////////////////////////

	var delay_popup = 5000;
    setTimeout("document.getElementById('overlay').style.display='block'", delay_popup);

////////////////////////////////////////////////////////////////////////////////////////////////////////

	$('.image-link').magnificPopup({type:'image'});

///////////////////Скроллинг + подсветка нужного пункта меню//////////////////////////////////

	$(window).scroll(() => { 

		let scrollDistance = $(window).scrollTop();

		$(".section").each((i, el) => {

			if($(el).offset().top - $("nav").outerHeight() <= scrollDistance + 100) {

				$("nav a").each((i, el) => {

					if($(el).hasClass("active")){

						$(el).removeClass("active");
					}
				});

				$('nav li:eq(' + i + ')').find('a').addClass('active');
			}
		});
	});

////////////////////////////////////////////////////////////////////////////////////////////////////


///////////Отложенная анимация на 1 странице + отложенная загрузка картинки на 2стр + анимированная статистика//////

	let options = {threshold: [0.5]};


	let observerMainPage = new IntersectionObserver(onEntry, options);
	let observerPictures =  new IntersectionObserver(onEntryPictures, options);
	let observerStatistic = new IntersectionObserver(onEntryStatistic, options);

	
	let animations = $('.element_animation');
	animations.each((i, el) => {
		observerMainPage.observe(el);
	});

	
	let pictures = $('.otl_zagr');
	pictures.each((i, el) => {
		observerPictures.observe(el);
	});


	let statistic = $('.animate_stat');
	statistic.each((i, el) => {
		observerStatistic.observe(el);
	});


});

///////////////////Функции для отложенных загрузок и анимаций /////////////////////////////////////////////

function onEntry(entry){
	entry.forEach(change => {
		if(change.isIntersecting){
			change.target.classList.add('show_animation');
			}
		});
	}

function onEntryPictures(entry){
	entry.forEach(change => {
		if(change.isIntersecting){
			change.target.src = change.target.dataset.src;
			}
		});
	}

function onEntryStatistic(entry){
	entry.forEach(change => {
		if(change.isIntersecting){
				$('.animate_stat').each(function() {
					let $this = $(this), 
					     countTo = $this.attr('data-count');
					$({
						countNum: $this.text()
					}).animate({
						countNum: countTo
					}, 
					{
						duration: 4000,
						easing: 'swing',
						step:function(){
							$this.text(Math.floor(this.countNum));
						},
						complete:function(){
							$this.text(this.countNum);
						}

					});
				});
			}
		});
	}

 

//////////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////Калькулятор стоимости//////////////////////////////////////////////////
let typeOfSiteArray = [
						{name: 'Сайт-визитка',     cost: 1500,  days: 12},
						{name: 'Лендинг',          cost: 800,   days: 5},
						{name: 'Интернет-магазин', cost: 15000, days: 30},
						{name: 'Социальная сеть',  cost: 20000, days: 24},
];

let designArray = [
						{name: 'Шаблонный дизайн',  cost: 550,  days: 7},
						{name: 'Уникальный дизайн', cost: 790,  days: 5},
						{name: 'Wow-дизайн',        cost: 1000, days: 10},
];

let layoutArray = [
						{name: 'Адаптивный дизайн',  cost: 450,  days: 10},
						{name: 'Неадаптивный дизайн', cost: 300,  days: 4},
];

$('#js-button').click(function() {

let totalArray = []; // итоговый массив с типом сайта, дизайна и адаптивности

let typeOfSite = $("#siteType").val();
let design = $("#siteDesign").val();
let layout = $("#siteAdapt").val();


totalArray.push(typeOfSiteArray.find(typeName => typeName.name == typeOfSite));
totalArray.push(designArray.find(designName => designName.name == design));
totalArray.push(layoutArray.find(layoutName => layoutName.name == layout));


let totalCost = totalArray[0].cost + totalArray[1].cost + totalArray[2].cost;
let totalDays = totalArray[0].days + totalArray[1].days + totalArray[2].days;

$('#js-result-1').html(totalDays);
$('#js-result-2').html(totalCost);

});

///////////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////   Якорные ссылки /////////////////////////////////////////////////////////////////////////


$('a[href^="#"]').click(function(){
	let valHref = $(this).attr("href");
	$('html, body').animate({scrollTop: $(valHref).offset().top - 60 + "px"});
});