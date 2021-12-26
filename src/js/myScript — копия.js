"use strict"

$(document).ready(function(){

	var delay_popup = 5000;
    setTimeout("document.getElementById('overlay').style.display='block'", delay_popup);
	
///////////////////Скроллинг + подсветка нужного пункта меню//////////////////////////////////

	$(window).scroll(() => { 

		let scrollDistance = $(window).scrollTop();

		$(".section").each((i, el) => {

			if($(el).offset().top - $("nav").outerHeight() <= scrollDistance) {

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

/////////////////////////////////////////////////////////////////////////////////////////////////////////

/*let totalArray = []; // итоговый массив с типом сайта, дизайна и адаптивности
let totalCost = 0;   // итоговая стоимость
let totalDays = 0;   // итоговый срок


// 1 окошко с запросом типа сайта

let typeOfSiteArray = [
						{name: 'Сайт-визитка',     cost: 1500,  days: 12},
						{name: 'Лендинг',          cost: 800,   days: 5},
						{name: 'Интернет-магазин', cost: 15000, days: 30},
						{name: 'Социальная сеть',  cost: 20000, days: 24},
];

let typeOfSite = "";

do{
	typeOfSite = prompt("Какой тип сайта Вы хотите? (Введите название с учётом регистра, знаков препинания и пробелов)\n1) Сайт-визитка\n2) Лендинг\n3) Интернет-магагзин\n4) Социальная сеть");	

	if(typeOfSiteArray.find(typeName => typeName.name == typeOfSite)){
		totalArray.push(typeOfSiteArray.find(typeName => typeName.name == typeOfSite));
		break;
	}
	else{
		alert("Такого типа нет!");
	}
	
}while(true);	

///////////////////////////////////////////////////////////////////////////////////////////////////////////

// 2 окошко с запросом дизайна сайта

let designArray = [
						{name: 'Шаблонный дизайн',  cost: 550,  days: 7,  id: 1},
						{name: 'Уникальный дизайн', cost: 790,  days: 5,  id: 2},
						{name: 'Wow-дизайн',        cost: 1000, days: 10, id: 3},
];

let design = "";

do{
	design = prompt("Какой дизайн сайта Вы хотите? (Введите цифру от 1 до 3)\n1) Шаблонный дизайн\n2) Уникальный дизайн\n3) Wow-дизайн");	

	if(designArray.find(designId => designId.id == Number(design))){
		totalArray.push(designArray.find(designId => designId.id == Number(design)));
		break;
	}
	else{
		alert("Такого дизайна нет!!!");
	}
	
}while(true);

///////////////////////////////////////////////////////////////////////////////////////////////////////////


// 3 окошко с запросом адаптивности

let layoutArray = [
						{name: 'Адаптивный дизайн',  cost: 450,  days: 10,  id: 1},
						{name: 'Неадаптивный дизайн', cost: 300,  days: 4,  id: 2},
];

let layout = "";

do{
	layout = prompt("Какую адаптивность желаете? (Введите цифру 1 или 2)\n1) Адаптивный дизайн\n2) Неадаптивный дизайн");	

	if(layoutArray.find(layoutId => layoutId.id == Number(layout))){
		totalArray.push(layoutArray.find(layoutId => layoutId.id == Number(layout)));
		break;
	}
	else{
		alert("Такой адаптивности нет!");
	}
	
}while(true);

///////////////////////////////////////////////////////////////////////////////////////////////////////////

// Подсчёт итоговой стоимости и итогового срока

totalCost = totalArray[0].cost + totalArray[1].cost + totalArray[2].cost;
totalDays = totalArray[0].days + totalArray[1].days + totalArray[2].days;

///////////////////////////////////////////////////////////////////////////////////////////////////////////
alert(`Вы выбрали: \nТипа сайта - ${totalArray[0].name}\nДизайн сайта - ${totalArray[1].name}\nАдаптивность - ${totalArray[2].name}\n\nСтоимость - ${totalCost} рублей\nСрок - около ${totalDays} дней`);
///////////////////////////////////////////////////////////////////////////////////////////////////////////

*/



$('a[href^="#"]').click(function(){
	let valHref = $(this).attr("href");
	$('html, body').animate({scrollTop: $(valHref).offset().top - 60 + "px"});
});