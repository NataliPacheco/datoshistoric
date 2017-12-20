 $.get("cat_clasificacion.php")
    .success(function(data) {
    	console.log(data)
    })
    .error(function(data){
        console.log(data);
   
    });
