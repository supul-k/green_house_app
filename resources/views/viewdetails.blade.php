<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Document</title>
</head>
<body>

    <div class="container">

    </div>


            <table class="table table-striped" style="width: 50%; margin-left:2cm; margin-top:1cm;">
        <thead>
            <tr>

                <th>#</th>
                <th>datetime</th>
                <th>light</th>
                <th>tempeture</th>
                <th>concentraration</th>
                <th>humadity</th>
            </tr>
        </thead>
        <tbody>

          
            @foreach ($details as $detail)
                
            <tr>

                <td>{{$detail['id']}}</td>
                <td>{{$detail['datetime']}}</td>
                <td>{{$detail['light']}}</td>
                <td>{{$detail['temperature']}}</td>
                <td>{{$detail['concetaration']}}</td>
                <td>{{$detail['humadity']}}</td>

            </tr>
            @endforeach
        </tbody>
    </table>


    
</body>
</html>