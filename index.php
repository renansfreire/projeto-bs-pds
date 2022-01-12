<?php
session_start();
$logged = $_SESSION['logged'] ?? NULL;
if (!$logged) die (" <script> alert('Usuário não registrado.');

window.location.href = 'login.html';

</script>")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <link href="css/aposta.css" type="text/css" rel="stylesheet">
    <title>Betting Sports</title>
    <link rel="icon" href="image/icon.png">
</head>
<body>
    <div class="container">
        <header>
            <nav>
                <div class="nav-container">
                    <img id="logo" src="image/logo.png" alt="Betting Sports">
                    <ul>
                        <li><a href="#">Jogos</a></li>
                        <li><a href="#">Ao Vivo</a></li>
                        <li class="btn">
                            <button class="btn-register"><a href="?logout=1">Logout</a></button>
                            <button class="btn-login"><a href="login.html">Login<?php echo $_SESSION['email']?></a></button>
                        </li>
                    </ul>
                </div>
            </nav>
            <div id="main-matcher">
                <h5 id="matchers"><a href="#">Todos os jogos ></a></h5>
            </div>
        </header>
        <section>
            <h1>Futebol</h1>
        </section>
        <div class="case-box-matchers">
            <div id="jogo" class="case-produto">
                <a href="aposta.html">
                    <h4 class="time-name" >Time 1</h4>
                    <h4 class="time-name" >X</h4>
                    <h4 class="time-name" >Time 2</h4>
                </a>
            </div>
            <div id="tempo" class="case-produto">
                <h5>Tempo</h5>
                <p class="minute">--</p>
                <h5 id="status">status</h5>
            </div>
            <div id="casa" class="case-produto" onclick="escolheCasa()">
                <h4 class="time-name">Casa</h4>
                <p class="preco"><?php echo $montante_a?></p>
            </div>
            <div id="empate" class="case-produto" onclick="escolheEmpate()">
                <h4 class="time-name">Empate</h4>
                <p class="preco"><?php echo $montante_empate?></p>
            </div>
            <div id="fora" class="case-produto" onclick="escolheFora()">
                <h4 class="time-name">Fora</h4>
                <p class="preco"><?php echo $montante_b?></p>
            </div>
        </div>
        <div class="case-box-matchers">
            <div id="jogo" class="case-produto">
                <a href="aposta.html">
                    <h4 class="time-name" >Time 1</h4>
                    <h4 class="time-name" >X</h4>
                    <h4 class="time-name" >Time 2</h4>
                </a>
            </div>
            <div id="tempo" class="case-produto">
                <h5>Tempo</h5>
                <p class="minute">--</p>
                <h5 id="status">status</h5>
            </div>
            <div id="casa1" class="case-produto" onclick="escolheCasa1()">
                <h4 class="time-name">Casa</h4>
                <p class="preco"><?php echo $montante_a?></p>
            </div>
            <div id="empate1" class="case-produto" onclick="escolheEmpate1()">
                <h4 class="time-name">Empate</h4>
                <p class="preco"><?php echo $montante_empate?></p>
            </div>
            <div id="fora1" class="case-produto" onclick="escolheFora1()">
                <h4 class="time-name">Fora</h4>
                <p class="preco"><?php echo $montante_b?></p>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="aposta.js"></script>

</body>
</html>
