<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentos</title>
    <link rel="stylesheet" href={{asset('css/documentos.css')}}>

</head>
<body>

<div class="container" style="margin-left: 1em;">
<H1 >LA RIBERA I</H1>

        <ul >
            <li><a href="{{ url('/documento1') }}">FICHA CONTADO</a></li>
            <li><a href="{{ url('/documento2') }}">FICHA FINANCIADO</a></li>
            <li><a href="{{ url('/documento3') }}">CONTRATO CONTADO</a></li>
            <li><a href="{{ url('/documento4') }}">CONTRATO FINANCIADO</a></li>
        </ul>

        <p >ESTACIONAMIENTO</p>
        <ul >
        <li><a href="{{ url('/documento5') }}">CONTRATO</a></li>
        </ul>
            
        <p >DEPARTAMENTO</p>
        <ul >
            <li><a href="{{ url('/documento6') }}">FICHA CONTADO</a></li>
            <li><a href="{{ url('/documento7') }}">FICHA FINANCIADO</a></li>
            <li><a href="{{ url('/documento8') }}">CONTRATO CONTADO</a></li>
            <li><a href="{{ url('/documento9') }}">CONTRATO FINANCIADO</a></li>
            <li><a href="{{ url('/documento10') }}">CRONOGRAMA</a></li>
        </ul>
            
</div>

<div class="container" style="margin-left: 1em;">
<H1 >LA VIÑA</H1>
 
        <ul >
            <li><a href="{{ url('/documento11') }}">FICHA CONTADO - FINANCIADO</a></li>
            <li><a href="{{ url('/documento12') }}">CONTRATO CONTADO</a></li>
            <li><a href="{{ url('/documento13') }}">CONTRATO FINANCIADO</a></li>
            <li><a href="{{ url('/documento14') }}">CRONOGRAMA</a></li>

        </ul>
            
</div>

<div class="container" style="margin-left: 1em;">
<H1 >LA RIBERA II</H1>

        <ul >
            <li><a href="{{ url('/documento15') }}">FICHA CONTADO</a></li>
            <li><a href="{{ url('/documento16') }}">FICHA FINANCIADO</a></li>
            <li><a href="{{ url('/documento17') }}">CONTRATO CONTADO</a></li>
            <li><a href="{{ url('/documento18') }}">CONTRATO FINANCIADO</a></li>
            <li><a href="{{ url('/documento19') }}">CRONOGRAMA</a></li>
        </ul>

        <p >ESTACIONAMIENTO</p>
        <ul >
        <li><a href="{{ url('#') }}">CONTRATO</a></li>
        </ul>
            
        <p >DEPARTAMENTO </p>
        <ul >
            <li><a href="{{ url('#') }}">FICHA CONTADO</a></li>
            <li><a href="{{ url('#') }}">FICHA FINANCIADO</a></li>
            <li><a href="{{ url('#') }}">CONTRATO CONTADO</a></li>
            <li><a href="{{ url('#') }}">CONTRATO FINANCIADO</a></li>
            <li><a href="{{ url('#') }}">CRONOGRAMA</a></li>
        </ul>
            
</div>

</body>
</html>