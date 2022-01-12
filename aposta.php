<?php

require_once("php/conexao.php");
$sql_game = "SELECT *FROM tb_game WHERE id_game = 1;";
$result = mysqli_query($conection, $sql_game);

if (mysqli_num_rows($result)!=0){
    while($row = mysqli_fetch_assoc($result)){
        $nome_jogo = $row['nome_game'];
        $montante_a = $row['mont_a'];
        $montante_empate = $row['mont_empate'];
        $montante_b = $row['mont_b'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/aposta.css">
    <title>Betting Sports</title>
</head>
<body>
    <div>
        <div class="container-results-jogo">
            <div>
                <h2><?php echo $nome_jogo?></h2>
            </div>
            <div>
                <p>Resultado Final</p>
                <div class="case-opcoes-apostas">
                    <div id="casa" class="case-produto" onclick="escolheCasa()">
                        <h4 class="time-name">Time 1</h4>
                        <p class="preco"><?php echo $montante_a?></p>
                    </div>
                    <div id="empate" class="case-produto" onclick="escolheEmpate()">
                        <h4 class="time-name">Empate</h4>
                        <p class="preco"><?php echo $montante_empate?></p>
                    </div>
                    <div id="fora" class="case-produto" onclick="escolheFora()">
                        <h4 class="time-name">Time 2</h4>
                        <p class="preco"><?php echo $montante_b?></p>
                    </div>
                </div>
            </div>
            <p></p>
            <div>
                <p>Resultado correto</p>
                <div class="case-opcoes-apostas-result">
                    <div class="case-select-qt-casa">
                        <h4 class="time-name-casa">Time 1</h4>
                        <div class="case-opcoes-qt-gols">
                            <input type="button" name="menos" id="menos" value="-" />
                            <input type="text" name="format" value="0" id="format" disabled="" size="2" />
                            <input type="button" name="mais" id="mais" value="+" />
                        </div>
                    </div>
                    <div class="case-select-qt-fora">
                        <div class="case-opcoes-qt-gols">
                            <div class="case-qt-gols-value">---</div>
                        </div>
                    </div>
                    <div class="case-select-qt-fora">
                        <h4 class="time-name-fora">Time 2</h4>
                        <div class="case-opcoes-qt-gols">
                            <input type="button" name="menos2" id="menos2" value="-" />
                            <input type="text" name="format2" value="0" id="format2" disabled="" size="2" />
                            <input type="button" name="mais2" id="mais2" value="+" />
                        </div>
                    </div>
                    <div class="case-select-qt-details" id="#case-value-aposta">
                        <input type="text" name="valor-aposta" value="" id="valor-aposta" size="2" />
                        
                        <input type="submit" name="finalizar" id="finalizar" value="calcular">
                        <br>
                        Possível retorno: <br><input type="text" name="total" id="total" disabled="" value="" style="width:75px;font-size: 16px"  />
                    </div>
                    <div class="btn-salvar-aposta-gols">
                        <button><a id="btn-salvar-modal" href="#abrirModal">Salvar</a></button>
                        <div id="abrirModal" class="modal">
                            <a href="#fechar" title="Fechar" class="fechar">x</a>
                            <h2>Confirmar aposta?</h2>
                            <div class="case-confirmar-aposta">
                                <div class="case-detalhes-aposta" id="results-select"></div>
                                <div class="case-detalhes-aposta" id="results-value"></div>
                                <div class="btn-finalizar-aposta"><button id="btn-finalizar-aposta">Finalizar aposta</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="aposta.js"></script>
</body>
</html>
