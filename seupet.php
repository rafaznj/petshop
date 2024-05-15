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
         <?php include"referencias.php" ?>
    </head>
    <body>
        <!-- INCLUIR O CABEÇALHO DA PÁGINA -->
        <?php include"cabecalho.php" ?>

        <!-- INÍCIO DO CORPO DA PÁGINA -->
        <div id="body">
            <div id="background">
                <div>
                    <div>
                        <div>
                            <form method="post" action="seupet_buscar.php">
                                <h1>Consulte as informações sobre seu PET </h1>
                                <br/>
                                <input type="text" name="txtCodigoAnimal" required="" placeholder="Informe o código de seu PET"/>
                                <br/>
                                <br/>

                                <input type="submit" name="btBuscar" value="Buscar" placeholder="Informe o código de seu PET"/>

                                </ul>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
           
        <!-- FIM DO CORPO DA PÁGINA -->

        <!-- INCLUIR O RODAPÉ DA PÁGINA -->
        <?php include"rodape.php" ?>
      
    </body>
</html>
