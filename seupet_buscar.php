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

                            <?php
                            /* BUSCAR PET */

                            $animais = array
                                (
                                array(1, "Toninho", "Vira lata", 3),
                                array(2, "Mickey", "Poodle", 4)
                            );

                            $codigoAnimal = $_POST["txtCodigoAnimal"];
                            $existe = 0;
                            $linha = -1;

                            echo $codigoAnimal;
                            for ($i = 0; $i < 2; $i++) {
                                
                                if ($animais[$i][0] == $codigoAnimal) {
                                    $existe = 1;
                                    $linha = $i;
                                }
                            }

                            //SE NÃO ENCONTROU MOSTRAR QUE O ANIMALZINHO NÃO FOI LOCALIZADO
                            if ($existe == 0) {
                                echo "<h1>Não foi possível localizar seu animalzinho</h1>";
                            } else {
                                
                                  /* FIM DA PRIMEIRA PARTE DO BUSCAR PET 
                                   * 
                                   * O CÓDIGO ABAIXO É EXECUTADO QUANDO FOI LOCALIZAR UM ANIMAL */
                                ?>
                                <form method="post" action="seupet_atualizar.php">
                                    <h1>Atualize os dados de seu PET</h1>
                                    <br/>
                                    <p>Nome do animal</p>
                                    <input type="text" name="txtNome" value="<?php echo $animais[$linha][1] ?>"/>
                                    <br/>
                                    <p>Raça</p>
                                    <input type="text" name="txtRaca" value="<?php echo $animais[$linha][2] ?>"/>
                                    <br/>
                                    <p>Idade animal</p>
                                    <input type="text" name="txtIdade" value="<?php echo $animais[$linha][3] ?>"/>
                                    <br/>
                                    <br/>

                                    <input type="submit" name="btAtualizar" value="Atualizar" />

                                    </ul>
                                </form>

                            <?php } ?>
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
