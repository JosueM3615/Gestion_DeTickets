<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<body>
<div class="container">
  
    <div class="Panelderecha">
    <div class="presentacion">
       <h4>AMW Solutions</h4>
        <img src="{{ asset('img/logo.png') }}" class="img_logo" alt="">
     </div>

      <div class="opciones">
        <ul>
        <li class="menu_li"><a href="#">Usuarios</a></li>
        <li class="menu_li"><a href="#">Agentes</a></li>
        <li class="menu_li"><a href="#">Roles</a></li>
        <li class="menu_li"><a href="#">Prioridades</a></li>
        <li class="menu_li"><a href="#">Categorías</a></li>
        <li class="menu_li"><a href="#">Etiquetas</a></li>
        
      </ul>
    </div>

    </div>
    
    <div class="panelizq">
    <div class="navbar">
    
   <div class="Bienvenida"> 
   <div class="divscontnav">
       <p>Bienvenido!</p>
    <img src="{{ asset('img/Saludo.png') }}" class="Saludo" alt=""> 
    </div> 

    <div class="divscontnav"> <p>RebeMG99</p>
    <img src="{{ asset('img/User.png') }}" class="User" alt=""> </div>
    
  
   </div>

      </div> 
      <div class="contenidopanel">
      <div class="formulario">
            <form action="" class="contform">
                
                <label for="titulo"> Titulo</label>
                <input type="text" name="titulo" class="tituloTicket" >

                <label for="descripcion"> Descripción</label>
                <textarea name="descripcion" id="" cols="30" rows="10"></textarea>
                 
                <label for="archivo"> Adjunte archivo</label>
                <input type="file" id="file" name="archivo">

                <label for="prioridad"> Seleccione prioridad</label>

                <select name="prioridad" id="prioridad">
                <option value="1">Alta</option>
                <option value="2">Muy alta</option>
                <option value="3">Baja</option>
               </select>

               <select name="categoria" id="prioridad">
                <option value="1">Software</option>
                <option value="2">Soporte</option>
                <option value="3">Hardware</option>
               </select>
               
               <div id="miDiv">
                <button class="Crear">Crear ticket</button>
                <button class="Cancelar">Cancelar</button>
              </div>
               

            </form>

        </div>
        
      </div>
      
    </div>

  </div>
</body>
</html>