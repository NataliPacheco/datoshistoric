/*$.ajax({
	url:"php/filtro.php",
	type:"post",
	data:
	})"*/

$("#buscar").click(function() {
	$.ajax({
	url:"php/filtro.php",
	type:"post",
	data: {
		num_ref:$("#num_ref").val(),
		convocatoria:$("#convocatoria").val(),
		nombre_eva:$("#nombre_eva").val(),
		cvu_evalu:$("#cvu_evalu").val(),
		fecha_eva:$("#fecha_eva").val(),
		dictamen:$("#dictamen").val(),
		nivel:$("#nivel").val(),
		institucion:$("#institucion").val(),

	}

	}).success(function(data){

	})
})
/* $("#dictamen").change(function() {
	$.ajax({
	url:"php/filtro.php",
	type:"post",
	data: this.val()
	}).success(function(data){

	})
})
  $("#nivel").change(function() {
	$.ajax({
	url:"php/filtro.php",
	type:"post",
	data: this.val()
	}).success(function(data){

	})
})*/