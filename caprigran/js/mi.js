$("a#ser1").click(function(e) {
	e.preventDefault;
	$("#servicio").load('servicio1.html');
	this.addClass('activo');
});