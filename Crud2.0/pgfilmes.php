<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pgfilmes.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'> <!-- BOXICON.COM -->
    <link rel = "shortcut icon" type = "imagem/x-icon" href = "img/icons/icon-leko.png"> <!-- ICON GUIA -->
    <title>Sonic 2</title>
</head>
<body>
    
    <div class="movie">
        <!--
        <div class="loader-wrapper">
            <span class="loader"><span class="loader-inner"></span></span>
        </div>  -->

        <!-- NAVBAR -->
        <nav class="navbar">
            <div class="logo">
                <a href="pgindex.php"><img class="leko" src="img/logo-lekofilmes.png" alt="logo"></a>
            </div>
            <div class="guias">
                <a href="pgindex.php" class="guia">Home</a>
                <a href="#" class="guia">Filmes</a>
                <a href="#" class="guia">Pormoção</a>
                <a href="#" class="guia">Ingressos</a>
            </div>
            <div class="user">
                    <a href="#"><i class='bx bxs-user-circle' id="icon"></i></a>
                    <span style='color:#ffffff'>user</span>
            </div>
        </nav>

        <!-- TRAILER FILME -->
        <div class="featured--horizontal">
        <div class="trailer">
            <div class="banner">
                <img src="img/W6h1SPGXxQ9hEbQANwEV.jpg" alt="" id="bannersonic">
            </div>
            <div class="play">
                <a href="https://youtu.be/A2SjVRziC7M"><img src="https://www.multicinecinemas.com.br/assets/images/icon/icon-play.svg" alt="" id="play"></a>
            </div>
        </div>
        </div>

        <!-- SOBRE O FILME -->
        <div class="movie-informations">
            <div class="container-center">
                <div class="card">
                    <div class="card-filme">
                        <img src="img/filmes/sonic2.jpg" alt="" id="card">
                    </div>
                    <div class="information">
                        <div class="title"><span id="title">Sonic 2 - O filme</span></div>
                        <div class="other-information">
                            <div class="duration">
                                <i class='bx bx-time' style='color:#ffffff'  ></i>
                                <span>2h e 02min</span>
                            </div>
                            <div class="restriction">
                                <img src="img/icons/numero-10.png" alt="icon-10" id="icon-10">
                            </div>
                            <div class="evaluation">
                                <span>Avaliação popular: </span>

                            </div>
                        </div>
                        <div class="type-movie">
                            <span id="type">Aventura</span>
                            <span id="type">Comédia</span>
                        </div>
                    </div>
                </div>
                <div class="synopsis">
                    <p class="sinopse">Após ficar em Green Hills, Sonic quer provar que tem o necessário para ser um herói de verdade. 
                        Seu teste virá com o retorno do Dr. Robotnik, dessa vez com um novo parceiro, Knuckles, à procura 
                        de uma esmeralda com o poder de destruir civilizações. Sonic se junta ao seu próprio coadjuvante, 
                        Tails, e juntos embarcarão em uma jornada pelo mundo para encontrar a esmeralda, antes que ela caia 
                        em mãos erradas.</p>
                </div>

                <section class="dates">
                    <h2 id="title2">Datas disponíveis</h2>
                        <div class="datas">
                                <div class="box-date">
                                    <P id="dia">12/06</P>
                                </div>
                                <div class="box-date">
                                    <p id="dia">15/06</p>
                                </div>
                                <div class="box-date">
                                    <p id="dia">20/06</p>
                                </div>
                                <div class="box-date">
                                    <p id="dia">22/06</p>
                                </div>
                        </div>
                </section>

                    <div class="buy">
                        <a href="compra.php">
                            <input type="button" value="comprar ingresso" id="compra">
                        </a>
                    </div>
                
            </div>
        </div>

    </div>


    <!-- LOADER -->
    <script>
        $(window).on("load",function(){
          $(".loader-wrapper").fadeOut("slow");
        });
    </script>   

</body>
</html>