  $.get("php/convocatoria.php",function(data) {
    	//console.log(data);
    	data=JSON.parse(data);
    	var convoca="";
    	data.forEach(function(index,valor){
    			convoca += "<option value='"+index.id_convocatoria+"'>"+index.nombre_convocatoria+"</option>"
    		
    	});
    		$("#convocatoria").append(convoca)
    		//console.log(convoca);
    	//$("#").append(data)
    });
