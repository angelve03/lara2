<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentos</title>
    <link rel="stylesheet" href={{asset('css/documentos.css')}}>

</head>
<body>

<div class="container">
<ul >
<li><a href="{{ url('/documento1') }}">CONTRATO CON BENEFICIARIO FINANCIADO</a></li>
    <li><a href="{{ url('/documento2') }}">ACTA DE ACEPTACION</a></li>
    <li><a href="{{ url('/documento3') }}">CONTRATO CON BENEFICIARIO AL CONTADO</a></li>
    </ul>
    <p >CONVENIO DE SEPARACION</p>
    <ul >
            <li><a href="{{ url('/documento4') }}">DATOS DEL CLIENTE</a></li>
            <li><a href="{{ url('/documento5') }}">FICHA DE SEPARACION</a></li>

            </ul>
</div>

</body>
</html>