 $.get("programas.php")
    .success(function(data) {
    	$("#tprogramas").append(data)
    })
    .error(function(data){
        console.log(data);
   
    });
