<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="container">
  <div class="row justify-content-center ">
    <div class="col-10 col-md-9 card mt-5 shadow rounded">
        <h2 class="text-center mt-5 " >REGISTRARSE</h2>
        
        
          <form action="datos-para-registrar.php" method="post" >
          <!-- div para hacer contenido se ponga del lado derecho --><div class="d-flex justify-content-around mt-5 mb-5">
          <div class="text-center col-md-5" >

            
            <label for="nombre" class="py-1 w-25 d-inline-flex">Nombre</label>
            <input type="text" name="nombre" class=" float-lg-end w-75">
            

            
            <label for="apellido" class="py-1 w-25 d-inline-flex">Apellido</label>
            <input  type="text" name="apellido" class=" float-lg-end w-75">
           

            
            <label for="email" class="py-1  w-25 d-inline-flex">Email</label>
            <input type="text" name="email" class="float-lg-end w-75">
            

            <label for="user" class="py-1 w-25 d-inline-flex">Usuario</label>
            <input type="text" name="user" class=" float-lg-end w-75">
              

            <!-- fin de div primera columna --></div>
            
            

          <div class="text-center col-md-5">

            
            <label for="pass" class=" py-1 w-25 d-inline-flex">Contraseña</label>
            <input  type="password" name="pass" class=" float-lg-end w-75">
            

            
            <label for="telefono" class=" py-1  w-25 d-inline-flex">Telefono</label>
            <input type="text" name="telefono" class="float-lg-end w-75">
            
            <label for="nivel" class=" py-1  w-25 d-inline-flex">Nivel</label>
            <input type="text" name="nivel" class="float-lg-end w-75">


            <input type="submit" value="Registrar" class="mt-3 btn btn-success float-end">
            </div>

          
           

      <!--fin de div contenido a la derecha--> </div>
            </form>
        
     </div>
  </div>
</div>




    
</body>
</html>