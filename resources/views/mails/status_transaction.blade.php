<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title></title>
</head>
<body>
 
        <div>
            <div class="w-full sm:max-w-md overflow-hidden sm:rounded-lg">
                <img src="{{ asset('images/tailwind-css-logo.svg') }}" class="h-20 mx-auto">
            </div>
            <div>
                <h4>Datos de la transacción:</h4>
                <ul>
                    <?php foreach($infoTransaction as $info) { ?>
                        <li>{{ $info['name'] }}: {{ $info['value']}}</li>
                        
                    <?php } ?> 
                </ul>
                <h3>Gracias por confiar en nosotros!!</h3>
               
            </div>
        </div>


       
    
</body>
</html>