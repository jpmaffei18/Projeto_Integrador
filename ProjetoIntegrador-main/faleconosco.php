<?php
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="estilo3.css" rel="stylesheet">
    <title>Home</title>
</head>

<body>


<ul id="menu-h">
    <h1 id="titulo">Cabeçalho do Site</h1>
    <li><a href="index.php"> HOME </a></li>
    <li><a href="famosos.php"> RELATOS </a></li>
    <li><a href="faleconosco.php"> FALE CONOSCO </a></li>
    <li><a href="empresas.php"> EMPRESAS </a></li>
</ul>

<div class="conteudo">
    <form id="form1" method="post">

        <h2>Entre em Contato</h2>
        <br>
        <div>
            <label for="nome">Nome:</label>
            <br>
            <input type="texto" id="nome" name="nome_usuario">
        </div>
        <div>
            <label for="email">E-mail:</label>
            <br>
            <input type="email" id="email" name="email_usuario">
        </div>
        <div>
            <label for="texto">Texto:</label>
            <br>
            <textarea id="texto" name="texto_usuario"></textarea>
        </div>

        <br>
        <div class="button">
            <button type="submit">Enviar</button>
        </div>
    </form>

    <form id="form2" method="post">

        <h2>Entre em Contato</h2>
        <br>
        <div>
            <label for="nome">Nome:</label>
            <br>
            <input type="texto" id="nome" name="nome_usuario">
        </div>
        <div>
            <label for="email">E-mail:</label>
            <br>
            <input type="email" id="email" name="email_usuario">
        </div>
        <div>
            <label for="texto">Texto:</label>
            <br>
            <textarea id="texto" name="texto_usuario"></textarea>
        </div>

        <br>
        <div class="button">
            <button type="submit">Enviar</button>
        </div>
    </form>
</div>

</body>
</html>