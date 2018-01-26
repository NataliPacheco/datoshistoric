$.get("cat_evaluadores.php")
    .success(function(data) {
        console.log(data)
    })
    .error(function(data){
        console.log(data);
   
    }); 