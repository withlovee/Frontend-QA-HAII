
$(function() {
	order = {
		type: "Team Speak",
		no: 25,
		price: 55
	};
	data = {
		"Mumble": [
			{no: 5, price: 125},
			{no: 10, price: 135},
			{no: 15, price: 145},
			{no: 25, price: 155},
			{no: 35, price: 160},
			{no: 50, price: 170},
			{no: 75, price: 180},
			{no: 100, price: 190},
			{no: 150, price: 1100},
			{no: 200, price: 1110},
			{no: 300, price: 1120},
			{no: 400, price: 1130},
			{no: 500, price: 1140},
			{no: 700, price: 1150},
			{no: 1000, price: 1170},
		],
		"Team Speak": [
			{no: 5, price: 25},
			{no: 10, price: 35},
			{no: 15, price: 45},
			{no: 25, price: 55},
			{no: 35, price: 60},
			{no: 50, price: 70},
			{no: 75, price: 80},
			{no: 100, price: 90},
			{no: 150, price: 100},
			{no: 200, price: 110},
			{no: 300, price: 120},
			{no: 400, price: 130},
			{no: 500, price: 140},
			{no: 700, price: 150},
			{no: 1000, price: 170},
		]
	}
	sliderWrapper = $(".slider-wrapper");
	nums = $(".nums");
	scales = $(".scales");
	progress = $(".slider-wrapper .progress");
	slot = $(".detail .slot");
	price = $(".detail .price");
	type = $(".detail .type");
	locationText = $(".detail .location");
	slider = $(".slider");
	for(i in data[order.type]){
		nums.append("<span>"+data[order.type][i].no+"</span>");
	}
	for(i=1; i<=14; i++){
		scales.append("<span></span>");
	}
	function update(){
		slot.html(order.no);
		price.html(order.price);
		type.html(order.type);
		locationText.html(order.location);
		console.log(order);
	}
	$(".type button").click(function(){
		$(this).parent().children("button").removeClass("active");
		$(this).addClass("active");
		order.type = $(this).data("val");
		slideVal = slider.slider("value");
		order.no = data[order.type][slideVal].no;
		order.price = data[order.type][slideVal].price;
		update();
	});
	$(".location button").click(function(){
		order.location = $(this).html();
		$(this).parent().children("button").removeClass("active");
		$(this).addClass("active");
		update();
	});
	slider.slider({
		min: 0,
		max: 14,
		value: 3,
		slide: function( event, ui ) {
			width = ui.value/14 * 100;
			progress.css("width", width + "%");
			$(".nums span").removeClass("active");
			$(".nums span:nth-child("+(ui.value+1)+")").addClass("active");
			order.no = data[order.type][ui.value].no;
			order.price = data[order.type][ui.value].price;
			update();
		}
	});
	update();
});