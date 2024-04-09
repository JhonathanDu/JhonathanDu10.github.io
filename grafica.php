<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Triángulo Rectángulo con Valores en los Lados</title>
<link rel="stylesheet" href="menu.css?v=<?php echo filemtime('menu.css'); ?>">
<script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
<style>

  .triangulo {
    width: 0;
    height: 0;
    border-bottom: 200px solid #58D68D ; /* Altura del triángulo */
    border-right: 300px solid transparent; /* Base del triángulo */
    position: absolute; /* Cambio a posicionamiento absoluto */
    top: 300px; /* Ajuste de la posición vertical */
    left: 50%; /* Centra el triángulo horizontalmente */
    transform: translateX(-50%); /* Centra el triángulo horizontalmente */
  }


img {
  position: absolute;
  top: 200px; /* Ajusta la posición vertical de la imagen */
  left: 320px; /* Centra la imagen horizontalmente */
  transform: translateX(-50%); /* Centra la imagen horizontalmente */
  width: 100px; /* Cambia el ancho de la imagen */
  height: auto; /* Mantiene la proporción de aspecto */
}
#a{
  position: absolute;
  top: 198px; /* Ajusta la posición vertical de la imagen */
  left: 100px;
  color:white;
  font-size:40px;
}
#b{
  position: absolute;
  top: 60px; /* Ajusta la posición vertical de la imagen */
  left: -32px;
  color:white;
  font-size:40px;
}
#r{
  position: absolute;
  top: 50px; /* Ajusta la posición vertical de la imagen */
  left: 160px;
  color:white;
  font-size:40px;
}
h1 {
    color: white; /* Cambia el color del texto a blanco */
   text-align:center;
    margin-top: 50px;
  }
  .card-custom {
      background-color: #f8f9fa; /* Color de fondo personalizado para la tarjeta */
      max-width: 330px; /* Ancho máximo de la tarjeta */
      margin: 30px auto; /* Margen superior e inferior de 30px y centrar horizontalmente */
      padding: 20px; /* Agregar espacio interno a la tarjeta */
      border-radius: 10px; /* Agregar bordes redondeados */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Agregar una sombra */
      margin-left:50px;
      height: 420px;
    
    }

  
    .card-custom .card-header-first {
  margin-top: -15px;
  background: linear-gradient(0.3deg, rgb(30, 161, 239) 0.9%, rgb(49, 46, 252) 88.6%);
  box-shadow: 1px 5px 15px #a2a2a2;
  font-size: 25px;
  color: white; /* Color del texto del encabezado */
  margin-bottom: 20px;
  display: flex; /* Hacer que el contenedor sea un flexbox */
  align-items: center; /* Centrar verticalmente los elementos */
  justify-content: center; /* Centrar horizontalmente los elementos */
  text-align: center;
  border-radius: 10%; /* Hacer que los bordes sean redondos */
}
.card-custom3{
      background-color: #f8f9fa; /* Color de fondo personalizado para la tarjeta */
      max-width: 330px; /* Ancho máximo de la tarjeta */
      margin: 30px auto; /* Margen superior e inferior de 30px y centrar horizontalmente */
      padding: 20px; /* Agregar espacio interno a la tarjeta */
      border-radius: 10px; /* Agregar bordes redondeados */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Agregar una sombra */
      margin-left:50px;
      height: 480px;
    
    }

    .card-custom .card-body {
      padding: 20px 0; /* Agregar espacio interno al cuerpo de la tarjeta */
    }

    .card-custom .form-group label {
      font-weight: bold; /* Hacer el texto de las etiquetas en negrita */
    }

    .card-custom .form-group {
      margin-bottom: 30px; /* Agregar margen inferior a las cajas de texto */
    }


    .form-group label {
    margin-bottom: 10px; /* Espacio entre la etiqueta y el elemento de entrada */
    display: block; /* Para asegurarse de que cada etiqueta tenga su propia línea */
    color:black;
  }
  #calcularButton {
  background-color: #17a2b8; /* Cambiar el color de fondo */
  color: #fff; /* Cambiar el color del texto */
  border-radius: 10px; /* Cambiar el radio de los bordes */
  border: none; /* Eliminar el borde */
  padding: 10px 20px; /* Añadir relleno */
  font-size: 15px; /* Cambiar el tamaño de la fuente */
  margin-right: 20px; 
}

#calcularButton:hover {
  background-color: #138496; /* Cambiar el color de fondo al pasar el ratón */
}
#limpiarButton{
  

  background-color: #F9AF05; /* Cambiar el color de fondo */
  color: #fff; /* Cambiar el color del texto */
  border-radius: 10px; /* Cambiar el radio de los bordes */
  border: none; /* Eliminar el borde */
  padding: 10px 20px; /* Añadir relleno */
  font-size: 15px; /* Cambiar el tamaño de la fuente */
}
#limpiarButton:hover {
  background-color: #FFD700;; /* Cambiar el color de fondo al pasar el ratón */
}

h2 {
  font-size: 23px; /* Ajusta el tamaño del texto según sea necesario */
  color:#FF3F3F; /* Cambia el color del texto según tus preferencias */
  font-weight: bold; /* Opcional: establece el peso de la fuente en negrita */
  margin-top: 10px;
}


  .card-custom2{
    background-color: #f8f9fa; /* Color de fondo personalizado para la tarjeta */
      max-width: 330px; /* Ancho máximo de la tarjeta */
      margin: 30px auto; /* Margen superior e inferior de 30px y centrar horizontalmente */
      padding: 20px; /* Agregar espacio interno a la tarjeta */
      border-radius: 10px; /* Agregar bordes redondeados */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Agregar una sombra */
      margin-left:1100px;
      height: 420px;
      margin-top:-450px;
    
  }
  .card-custom2 .card-header {
  margin-top: -15px;
  background: linear-gradient(0.3deg, rgb(30, 161, 239) 0.9%, rgb(49, 46, 252) 88.6%);
  box-shadow: 1px 5px 15px #a2a2a2;
  font-size: 25px;
  color: white; /* Color del texto del encabezado */
  margin-bottom: 20px;
  display: flex; /* Hacer que el contenedor sea un flexbox */
  align-items: center; /* Centrar verticalmente los elementos */
  justify-content: justify; /* Centrar horizontalmente los elementos */
  text-align: center;
  border-radius: 10%; /* Hacer que los bordes sean redondos */
}

#equation {
            font-size: 24px; /* Tamaño de fuente más grande */
            color: #17F905; /* Color del texto blanco */
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.7);
        }
img .imagen-aviso {
    max-width: 420%; /* Ajusta el ancho máximo de la imagen al contenedor */
    height: 300; /* Mantiene la proporción de aspecto de la imagen */
   
    margin-top: 340px; /* Ajusta el margen superior para separarla del formulario */
  }
  .card-title,
.form-text.text-muted.justify-text {
    color: black;
}

</style>
</head>
<body>
 
<nav class="menu">
      
      <div class="logo white-border"></div>
      <span class="neon-text" style="margin-left: 10px;">ANE 2023</span>
  
  <ul class="menu_items">
      <li class="menu_item">
          <a href="#" class="menu_item-link">Inicio</a>
      </li>
      <li class="menu_item">
          <a href="https://www.suin-juriscol.gov.co/imagenes//22/11/2023/1700681786391_Diario%2052567%20-%20Resolucion%20773%20-%20Anexo%201.pdf" class="menu_item-link">Resolución ANE 773</a>
      </li>
      <li class="menu_item">
          <a href="grafica.php" class="menu_item-link">Gráfico</a>
      </li>
      <li class="menu_item">
        <a href="ServiciosTelecom.php" class="menu_item-link">Servicios Telecom</a>
      </li>
      <li class="menu_item">
          <a href="comentarios.php" class="menu_item-link">Comentarios </a>
      </li>
      <li class="menu_item">
      <form action="CerrarSesion.php" method="post">
          <a href="CerrarSesion.php" class="menu_item-link">Cerrar sesión </a>
       </form>
      </li>

  </ul>
</nav>

<h1>Definición de Distancias y Alturas para Estaciones de Telecomunicaciones</h1>

<div id="triangulo" class="triangulo">
<div id="a">d</div>
<div id="b">a</div>
<div id="r">r</div>
<img src="hombre.png" alt="Imagen en la punta del triángulo">
</div>

<div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-6">
      <div class="card card-custom">
          <div class="card-header  card-header-first d-flex justify-content-between">
            <h5 class="card-title">Cálculo distancia segura </h5>
          </div>
          <div class="card-body">
            <form id="triangleForm">
              <div class="form-group">
                <label for="inputA">Digite a en metros :</label>
                <input type="number" class="form-control" id="inputA" name="inputA" step="0.01" required>
              </div>
              <div class="form-group">
                <label for="inputB">Digite r en metros :</label>
                <input type="number" class="form-control" id="inputB" name="inputB" step="0.01" required>
               
              </div>
              <button type="button" class="btn btn-info btn-lg btn-block" id="calcularButton">Calcular</button>
              <button type="button" class="btn btn-secondary btn-lg btn-block" id="limpiarButton">Limpiar </button>
            </form>
            <h2 class="mt-3">Resultado</h5> <!-- Agregando el texto "Resultado" -->
            <div id="result" class="mt-3"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
  <div class="row justify-content-end mt-5">
    <div class="col-md-6">
      <!-- Tarjeta de información -->
      <div class="card card-custom2">
        <div class="card-header">
          <h5 class="card-title">Información Adicional</h5>
        </div>
        <div class="card-body">
          <ul>
          <ul>
           <li><small class="form-text text-muted justify-text">d: Mínima distancia horizontal a la estructura de soporte de la antena o sistema irradiante, en metros.</small></li>
            <li><small class="form-text text-muted justify-text">r: Mínima distancia a la antena o sistema irradiante, en metros.</small></li>
             <li><small class="form-text text-muted justify-text">a: Distancia vertical desde la altura de una persona a la antena o sistema irradiante.</small></li>
             <div id="equation">
             \[ d = \sqrt{r^2 - a^2} \]
          </div>
          </ul>
          <style>
            .justify-text {
             text-align: justify;
             }
              </style>
          </ul>
        </div>
      </div>
    </div>
</div>

<div class="container">
<div class="row justify-content-center mt-5">
        <div class="col-md-8">
        <div class="card card-custom">
            <div class="card-header  card-header-first d-flex justify-content-between">
              <h5 class="card-title">Seleccionar Tipo de Aviso</h5>
            </div>
            <div class="card-body">
    <!-- Contenido del Código 2 -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="tipo_aviso" style="color: black;">Seleccione el tipo de aviso:</label>
        <select name="tipo_aviso" id="tipo_aviso">
            <option value="ocupacional">Aviso de Zona Ocupacional</option>
            <option value="rebasamiento">Aviso de Zona de Rebasamiento</option>
        </select>
        <input type="submit" value="Mostrar Aviso">
    </form>

    <?php
    // Procesamiento del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verificar si se ha enviado el tipo de aviso
        if (isset($_POST["tipo_aviso"])) {
            // Obtener el tipo de aviso seleccionado
            $tipo_aviso = $_POST["tipo_aviso"];
            
            // Determinar la ruta de la imagen según el tipo de aviso
            $ruta_imagen = "";
            if ($tipo_aviso === "ocupacional") {
                $ruta_imagen = "Imagenes/Aviso_Zona_Ocupacional.jpg";
                $aviso = "Aviso de Zona Ocupacional";
            } elseif ($tipo_aviso === "rebasamiento") {
                $ruta_imagen = "Imagenes/Aviso_Zona_Rebasamiento.jpg";
                $aviso = "Aviso de Zona de Rebasamiento";
            } else {
                echo "<p>Tipo de aviso no válido</p>";
                exit; // Salir del script si el tipo de aviso no es válido
            }
            
            // Mostrar el título del aviso
            echo "<h2 style='color: black;'>$aviso</h2>";
            // Mostrar la imagen del aviso
            echo "<img src='$ruta_imagen' alt='$aviso' class='imagen-aviso'>";
        } else {
            echo "<p>No se ha seleccionado ningún tipo de aviso</p>";
        }
    }
    ?>
</div>
</div>
      </div>
    </div>
</div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="script.js"></script>
  <script>

    
    function calcularDistanciaSegura() {
        var a = parseFloat(document.getElementById("inputA").value);
        var r = parseFloat(document.getElementById("inputB").value);

        // Validación de entrada
        if (isNaN(a) || isNaN(r) || a < 0 || r < 0) {
            alert("Por favor ingrese valores válidos para 'a' y 'r'.");
            return;
        }

        // Manejo de errores cuando 'a' es mayor que 'r'
        if (a >= r) {
            document.getElementById("result").innerText = "La distancia vertical (a) debe ser menor que la distancia a la antena (r).";
            return;
        }

        var distanciaSegura = Math.sqrt(Math.pow(r, 2) - Math.pow(a, 2));

        document.getElementById("result").innerText = "La distancia segura es: " + distanciaSegura.toFixed(2) + " metros";
      
      }

    document.getElementById("calcularButton").addEventListener("click", calcularDistanciaSegura);
    
    document.getElementById("limpiarButton").addEventListener("click", function() {
  document.getElementById("inputA").value = "";
  document.getElementById("inputB").value = "";
});


    
 document.addEventListener("DOMContentLoaded", function() {
   document.getElementById("equation").innerHTML = katex.renderToString("d = \\sqrt{r^2 - a^2}");
        });

</script>

</body>
<footer>
    <!-- Pie de página con créditos y enlaces -->
    <p><a href="https://www.udistrital.edu.co/inicio">&copy; Universidad Distrital Francisco José de caldas</a></p>
    <p><a href="https://ftecnologica.udistrital.edu.co/">&copy; Facultad Tecnologica</a></p>
    <p>Materia: Redes Inalambricas </p>
    <p>Docente: <a href="mailto:marlonpb@udistrital.edu.co">Marlon Patiño Bernal</a></p>
    <p>Autores: <a href="jyduarteb@udistrital.edu.co">Jhonathan Yesid Duarte Bello</a> - <a href="sagutierrezb@udistrital.edu.co">Santiago Alejandro Gutiérrez Barrero</a> </p>
    <p>Fecha: [29/03/2024]</p>
</footer>
</html>
