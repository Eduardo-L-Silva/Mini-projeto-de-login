<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <head>
        <style type="text/css">
            p{
                text-align: justify;
            }
        </style>


        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>

        <?php
        include './includes/menu.php';
        ?>

        <div class="slider">
            <ul class="slides">
                <li>
                    <img src="img/carro.png"> <!-- random image -->
                    <div class="caption center-align">
                        <h3>Oficina CH</h3>
                        <h4 style="color: white;">Carros esportivos</h4>
                    </div>
                </li>

                <li>
                    <img src="img/oficina.jpg"> <!-- random image -->
                    <div class="caption right-align">
                        <h3>Oficina CH</h3>
                        <h4 style="color: white;">Manutenções e Consertos</h4>
                        <h5 class="light grey-text text-lighten-3"></h5>
                    </div>
                </li>
                <li>
                    <img src="img/SupraMK4.jpg"> <!-- random image -->
                    <div class="caption center-align">
                        <h3>Oficina CH</h3>
                        <h4 style="color: white;">Modificações e Tunning</h4>
                        <h5 class="light grey-text text-lighten-3"></h5>
                    </div>
                </li>
            </ul>
        </div>




        <div class="carousel">
            <a class="carousel-item"  href="exibir_os.php"><img src="img/lista.png" width="200"></a>
            <a class="carousel-item" href="exibir.php"><img src="img/add_cliente.png" width="200"></a>
        </div>

        <div class="container">
            <div class="row">

                <div class="col s6">

                    <ul class="collapsible" data-collapsible="accordion">
                        <li>
                            <div class="collapsible-header"><img src="img/lista.png" width="30"><p class="blue-text">Saiba 6 vantagens da manutenção preventiva!</p></div>
                            <div class="collapsible-body">
                                <span>
                                    <p>Muitos proprietários de carro só vão a oficinas ou entram em contato com centros automotivos quando é uma urgência. Ou seja, quando o carro precisa de uma correção. Acontece que esse método acaba se tornando caro, embora quem o faça ache que está economizando. Existem maneiras melhores e mais seguras</p>
                                </span></div>
                        </li>
                        <li>

                            <div class="collapsible-header"><img src="img/freios.png" width="50"><p class="blue-text">Cuidado com os Freios</p></div>
                            <div class="collapsible-body"><span>
                                    <ul>         
                                        <li>Checar o fluido de freio </li>
                                        <li>Evitar frear em curvas</li>
                                        <li>Economizar na direção</li>
                                        <li>Realizar a manutenção com profissionais</li>
                                    </ul>
                                </span></div>
                        </li>
                        <li>
                            <div class="collapsible-header"><img src="img/pneu.png" width="40"><p class="blue-text">Como fazer a manutenção dos pneus?<p></div>
                            <div class="collapsible-body"><span>
                                    <ul>  
                                        <li>Verificar regularmente a pressão dos pneus e mantê-los inflados adequadamente;</li>
                                        <li>Verificar o desgaste dos pneus e substituí-los quando necessário;</li>
                                        <li>Realizar o balanceamento e alinhamento dos pneus periodicamente;</li>
                                        <li>Inspecionar visualmente os pneus quanto a danos e desgaste excessivo;</li>

                                </span></div>
                        </li>
                    </ul>

                </div>
                
                
                <div class="col s6">

                    <ul class="collapsible" data-collapsible="accordion">
                        <li>
                            <div class="collapsible-header"><img src="img/oleo.png" width="30"><p class="blue-text">Cuidados com o óleo do motor</p></div>
                            <div class="collapsible-body">
                                <span>
                                    <p>O nível do óleo pode baixar, já que se trata de um item de consumo do motor e o lubrificante também evapora, por trabalhar sob altas temperaturas, mas não exageradamente. O consumidor encontra essa informação no manual do proprietário do veículo. </p>
                                </span></div>
                        </li>
                        <li>

                            <div class="collapsible-header"><img src="img/motor.png" width="50"><p class="blue-text">Cuidados do motor</p></div>
                            <div class="collapsible-body"><span>
                                    <ul>         
                                        <li>Por fim, você não pode se esquecer de fazer a revisão periódica do motor, pois essa prática vai ajudar a encontrar problemas em seus estágios iniciais e evitar que eles se tornem mais sérios. Como o motor atua continuamente enquanto o carro está funcionando e, muitas vezes, é sobrecarregado, isso se torna ainda mais importante.</li>
                                    </ul>
                                </span></div>
                        </li>
                        <li>
                            <div class="collapsible-header"><img src="img/suspensao.png" width="40"><p class="blue-text">Como cuidar da suspensão?<p></div>
                            <div class="collapsible-body"><span>
                                    <ul>  
                                        <li>Atenção aos buracos;</li>
                                        <li>Evite o excesso de peso no veículo;</li>
                                        <li>Faça o alinhamento e balanceamento;</li>
                                        <li>Realize a manutenção preventiva;</li>

                                </span></div>
                        </li>
                    </ul>

                </div>
                
                
            </div>

        </div>



        <?php
        include './includes/footer.php';
        ?>




        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js">

        </script>
        <script type="text/javascript" src="js/materialize.min.js"></script>

        <script>

            $(document).ready(function () {
                $('.slider').slider();
            });

            $(document).ready(function () {
                $('.carousel').carousel();
            });

        </script>
    </body>
</html>
