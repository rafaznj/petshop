<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">

          <!-- INCLUIR AS REFERÊNCIAS DA PÁGINA -->
          <?php include "referencias.php" ?>
       
    </head>
    <body>
        <!-- INCLUIR O CABEÇALHO DA PÁGINA -->
        <?php include "cabecalho.php" ?>

        <!-- INÍCIO DO CORPO DA PÁGINA -->
        <div id="body">
            <div id="background">
                <div>
                    <div>
                        <div>
                            <form method="post" action="index_admin.php">
                                <h1>Informe seus dados de acesso</h1>
                                <br/>
                                <input type="text" name="txtLogin" required="" placeholder="Seu login"/>
                                <br/>
                                <br/>
                                <input type="text" name="txtSenha" required="" placeholder="Sua senha"/>
                                <br/>
                                <br/>

                                <input type="submit" name="btEntrar" value="Entrar" />

                                </ul>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- FIM DO CORPO DA PÁGINA -->

        <!-- INCLUIR O RODAPÉ DA PÁGINA -->
        <?php include "rodape.php" ?>
    </body>
</html>
