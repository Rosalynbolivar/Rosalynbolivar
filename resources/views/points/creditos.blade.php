@extends('layouts.app')
@section('title', 'DISEÑO DE SISTEMAS SOFTWARE PARA MONITOREO DE TEMPERATURA Y HUMEDAD EN TIEMPO REAL CON IoT')

@section('contents')
  <div class="row">
    <h2>CRÉDITOS</h2>
    <p>Este proyecto fue desarrollado como parte del diseño de sistemas software para monitoreo de
      temperatura y humedad en tiempo real con IoT. Agradecemos a las siguientes personas por su contribución:</p>

<ul>
  <li><strong>Bolivar Lazaro Rosalynn Odalis:</strong> Desarrollador de software y Diseñador gráfico <a href="mailto:narotaipe@unsa.edu.pe">narotaipe@unsa.edu.pe</a></li>
  <!-- Agrega más nombres según sea necesario -->
</ul>
</div> <!-- Cierre de la primera fila -->

<hr size=”5px” width= “50%” color="#2B3852"/>
<div class="row">
    <h2>AGRADECIMIENTOS</h2>

    <p>Agradecemos a todas las personas que han trabajado en el proyecto y que hicieron posible su desarrollo.</p>
    
    <p>También queremos expresar Ingeniero a cargo del curso de Sofware:</p>
    <ul>
      <li><strong>Ingeniero EFRAIN TITO MAYHUA LOPEZ:</strong> Por su orientación, apoyo y sugerencias que contribuyeron significativamente al desarrollo y la calidad de este proyecto.</li>
    </ul>

    <p>Pregunta o Comentario sobre este proyecto</p>
    </div>
     <!-- Agregar el enlace de correo electrónico -->
     <p>Correo electrónico: <a href="rbolivarl@unsa.edu.pe">rbolivarl@unsa.edu.pe</a></p>
    
<!-- Agregar la imagen debajo del correo electrónico -->
<div class="row justify-content-center">
  <img src="{{ asset('admin_assets/img/logunsa.png') }}" alt="Logo"style="width: 400px; height: auto;">
</div>
  
@endsection