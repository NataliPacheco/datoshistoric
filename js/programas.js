 $.get("php/programas.php",function(data) {
    	//console.log(data);
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
    		console.log(datos);
    	//$("#").append(data)
    });
