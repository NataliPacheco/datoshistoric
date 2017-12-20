 $.get("cat_sni.php")
    .success(function(data) {
    	console.log(data)
    })
    .error(function(data){
        console.log(data);
   
    });
