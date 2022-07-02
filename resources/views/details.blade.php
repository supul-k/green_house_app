<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Enter values</h1>

    @if(session('status'))

        <h4>{{session('status')}}</h4>

    @endif


    <form action="{{url('submit')}}" method="POST">
        @csrf

        <input type="decimal" name="light" placeholder="light">
        <input type="decimal" name="temperature" placeholder="temperature">
        <input type="decimal" name="humadity" placeholder="humadity">
        <input type="decimal" name="concetaration" placeholder="concetaration">
        <button type="submit">submit</button><br><br>
    </form>

    <a href="{{url('view')}}">view details</a><br><br>
    <a href="{{url('temparature')}}">Temparature</a><br>
    <a href="{{url('light')}}">light</a><br>
    <a href="{{url('humadity')}}">humadity</a><br>
    <a href="{{url('constrartion')}}">constrartion</a><br>
    <a href="{{url('concetarationhumadity')}}">concetaration vs humadity</a><br>
    <a href="{{url('concetarationlight')}}">concetaration vs light</a><br>
    <a href="{{url('concetarationlight')}}">concetaration vs temperature</a><br>
    <a href="{{url('humaditylight')}}">light vs humadity</a><br>
    <a href="{{url('temperaturelight')}}">light vs temperature</a><br>
    <a href="{{url('temperaturehumadity')}}">humadity vs temperature</a><br>
</body>
</html>