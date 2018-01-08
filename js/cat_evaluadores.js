  $.get("php/evaluadores.php",function(data) {
    	//console.log(data);
    	data=JSON.parse(data);
    	var evaluador="";
    	data.forEach(function(index,valor){
    			evaluador += "<text >value='"+index.id=nombre_eva +"'>"+index.nombre_evaluador+" </text>"
    		
    	});
    		$("#evaluadores").append(evaluador)
    		//console.log(evaluador);
    	//$("#").append(data)
    });
