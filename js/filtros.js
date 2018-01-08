/*$.ajax({
	url:"php/filtro.php",
	type:"post",
	data:
	})"*/
$("#buscar").click(function() {
	console.log($("#nivel").val());
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

	},
	success: function(data) {
		$("#resultados").empty();
		data=JSON.parse(data);
    	var datos="";
    	data.forEach(function(index,valor){
    		datos="<tr>";
    			datos += "<td>"+index.num_referencia+"</td>"
    			datos += "<td>"+index.nombre_programa+"</td>"
    			datos += "<td>"+index.nombre_convocatoria+"</td>"
    			datos += "<td>"+index.nombre_evaluador+"</td>"
    			datos += "<td>"+index.cvu_evaluador+"</td>"
    			datos += "<td>"+index.fecha_comite+"</td>"
    			///datos += "<td>"+index.nombre_institucion+"</td>"
    			datos += "<td>"+index.estatus+"</td>"
    			datos += "<td>"+index.nombre_nivel+"</td>"

    		datos+="</tr>";
    		$("#resultados").append(datos)
    		
    	});
	}
	});
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