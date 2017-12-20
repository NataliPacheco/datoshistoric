 $.get("datos_programa.php")
    .success(function(data) {
    	console.log(data)
    })
    .error(function(data){
        console.log(data);
   
    });
