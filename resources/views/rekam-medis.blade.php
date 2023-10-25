<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    @foreach ($rekams as $rekam)
        <div>
            <li>{{ $rekam->dokterID }}, {{ $rekam->pasienID }}, {{ $rekam->kondisi }}, {{ $rekam->suhu }}</li>
        </div>
        
    @endforeach
    </ul>
</body>
</html>