
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="assets/js/jquery.js"></script>
</head>
<body>
    BUSCAR DNI
    <input type="text" id="dni" autocomplete="off" name="dni">

    <button id="prueba">Consultar</button>

<br>
    RESULTADO:
    <br>
    <br>
    <div >Nombres: <input type="text" id="nombre"></div>
    <div >Apellido P.: <label id="apellidop">  </label ></div>
    <div> Apellido M.: <label  id="apellidom"> </label > </div>

    <script>

$("#prueba").click(function(){

  var dni=$("#dni").val();


$.ajax({           
    type:"POST",
    url: "consulta-dni.php",
    data: 'dni='+dni,
    dataType: 'json',
    success: function(data) {
        if(data==1)
        {
            alert('El DNI tiene que tener 8 digitos');
        }
        else{
            
            //asignar value a input 
            console.log(data);
            $("#nombre").val(data.nombres);


            //$("#nombre").value(data.nombres);
            $("#apellidop").html(data.apellidoPaterno);
            $("#apellidom").html(data.apellidoMaterno);
        }
    }
});
})

</script>
</body>
</html>