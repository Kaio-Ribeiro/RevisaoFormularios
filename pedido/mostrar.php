<?php

// Importar funcoes e variaveis
require_once ( "../validar/variaveis.php" );
require_once ( "../validar/funcoes.php" );

// Validar se o usuário chegou a página via formulário
// e limpar post
formEnviado($_POST);

$adicionais = $_POST["adicionais"];

validarAdicionais($adicionais);

// 
gerarMensagensErro($dados);
?>

<!DOCTYPE HTML>
<html>
    <head>
    </head>
    <body>
        <?php
            if (@$mensagem_erro["prato_principal_vazio"] != ""){
                echo "Erro: ",$mensagem_erro["prato_principal_vazio"];
            } else{
        ?>
            <div class="principal">
                <h2>Dados do Pedido</h2>
                <p>
                    <span>Acompanhamento: </span><?php echo $dados["acompanhamento"];?>
                </p>
                <p>
                    <span>Prato Principal: </span><?php echo $dados["prato_principal"];?>
                </p>
                <p>
                    <span>Adicionais: </span>
                    <?php
                        foreach ($adicionais as $key => $value){
                            echo "$value, ";
                        }
                    ?>
                </p>
                <p>
                    <span>Confirmação do pedido: </span>
                    <?php
                        if (@$dados["agree"] == true){
                            echo "Confirmado";
                        }else{
                            echo "Negado";
                        }
                    ?>
                </p>
                <h2>Dados do Cliente</h2>
                <p>
                    <span>Nome: </span><?php echo $dados["nome"];?>
                </p>
                <p>
                    <span>Endereço: </span><?php echo $dados["address"];?>
                </p>
                <p>
                    <span>Telefone: </span><?php echo $dados["phonenumber"];?>
                </p>
            </div>
            <style>
                div.principal{
                    border: solid 1px;
                    width: 400px;
                    margin: 0 auto;
                    border-radius: 10px;
                    box-shadow: 1px 1px 2px black;
                    background: #d4d4d4;
                }
                h2{
                    text-align: center;
                }
                p{
                    margin-left: 20px;
                }
                span{
                    font-weight: bold; 
                }
                body{
                    background: #63738a;
                    font-family: 'Roboto', sans-serif;
	            }
            </style>
        <?php } ?>
    </body>
</html>