 $.get("cat_publicacion.php")
    .success(function(data) {
    	console.log(data)
    })
    .error(function(data){
        console.log(data);
   
    });
