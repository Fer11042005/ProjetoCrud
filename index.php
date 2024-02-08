<h1>Cadastrar Automovel</h1>
<!doctype html>
<html>
    <head>
        <title>Cadastro</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form method="POST", action="insere_automovel.php">
            <label>
                nome: <input type="text" name="nome"/> <br><br>
                placa: <input type="text" name="placa"/> <br><br>
                chassi: <input type="text" name="chassi"/><br><br> 
                montadora: <input type="text" name="montadora"/><br><br>
                <input type="submit" value="Salvar"/>
            </label>
        </form>
        <a href="listaautomoveis.php">Lista de automoveis</a>
    </body>
