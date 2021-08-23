<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos</title>
</head>
<body>
    @foreach($crs as $cr)
        <p>{{ $cr->name_of_missing_person }}</p>  
    @endforeach
</body>
</html>