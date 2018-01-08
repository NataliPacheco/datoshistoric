  $.get("php/dictamen.php",function(data) {
    	//console.log(data);
    	data=JSON.parse(data);
    	var estatus="";
    	data.forEach(function(index,valor){
    		estatus += "<option value='"+index.id_dictamen+"'>"+index.estatus+"</option>"
    		
    	});
    		$("#dictamen").append(estatus)
    		console.log(estatus);
    	//$("#").append(data)
    });
