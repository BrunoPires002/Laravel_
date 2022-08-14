<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css">

    <title>Laravel</title>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <div class="cont-nav">
                <a href="/">Home</a>
                <a href="/cadastro">Cadastro</a>
            </div>
        </div>
        <div class="cont">
            <div class="card">
                <img src="{{ URL::asset('img/bota1.jpeg') }}" alt="">
                <h1>Bota Caterpillar Coturno</h1>
                <h3></h3>
                <h3></h3>
            </div>
            <div class="card">
                <img src="{{ URL::asset('img/bota2.jpeg') }}" alt="">
                <h1>text</h1>
                <h3>text</h3>
                <h3>valor</h3>
            </div>
        </div>
        <div class="footer">

        </div>
    </div>
</body>
</html>