"use strict"

$(document).ready(function(){

	$(window).scroll(() => { 

		let scrollDistance = $(window).scrollTop();

		$("section").each((i, el) => {

			if($(el).offset().top - $("nav").outerHeight() <= scrollDistance) {

				$("nav a").each((i, el) => {

					if($(el).hasClass("active")){

						$(el).removeClass("active");
						console.log("BEBEBEBEBE");
					}
				});

				$('nav li:eq(' + i + ')').find('a').addClass('active');
			}
		});
	});
});

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