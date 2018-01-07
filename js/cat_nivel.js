 $.get("php/nivel.php",function(data) {
    	//console.log(data);
    	data=JSON.parse(data);
    	var niveles="";
    	data.forEach(function(index,valor){
    			niveles += "<option>"+index.nombre_nivel+"</option>"
    		
            
        });
    		$("#nivel").append(niveles)
    		//console.log(niveles);
    	//$("#").append(data)
    });