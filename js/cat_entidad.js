 $.get("cat_entidad.php")
    .success(function(data) {
    	console.log(data)
    })
    .error(function(data){
        console.log(data);
   
    });
