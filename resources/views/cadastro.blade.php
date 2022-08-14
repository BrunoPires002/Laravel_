<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form method="POST" action="{{ route('registrar') }}">
            <h1>Cadastro cliente</h1>

            <label for="">Nome:</label>
            <input type="text">
            <br>
            <label for="">Data de nascimento:</label>
            <input type="date" value="">
            <br>
            <label for="">Estado Civil: </label>
            <input type="text" value="">
            <br>
            <label for="">Endereço:</label>
            <input type="text" value="">
            <br>
            <label for="">Numero:</label>
            <input type="text" value="">
            <br>
            <label for="">Complemento: </label>
            <input type="text" value="">
            <br>
            <label for="">Cep:</label>
            <input type="text" value="">
            <br>
            <label for="">Cidade:</label>
            <input type="text" value="">
            <br>
            <label for="">Estado: </label>
            <input type="text" value="">
            <br>
            <label for="">Rg:</label>
            <input type="text" value="">
            <br>
            <label for="">Cpf:</label>
            <input type="text" value="">
            <br>
            <label for="">Email: </label>
            <input type="text" value="">
            <br>
            <label for="">Fone:</label>
            <input type="text" value="">
            <br>
            <label for="">Celular:</label>
            <input type="text" value="">

            <input type="button" value="enviar">
        </form>
    </div>
</body>
</html>