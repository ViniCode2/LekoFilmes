<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'> <!-- LINK BOXICONS.COM -->
    <link rel="stylesheet" href="../css/pgclient2.css"> <!-- CSS -->
    <link rel="stylesheet" href="../css/splide.min.css"> <!-- CSS SPLIDEJS -->
    <link rel = "shortcut icon" type = "imagem/x-icon" href = "../icons/icon-leko.png"> <!-- ICON GUIA -->
    <script src="../js/splide.min.js"></script>
    <script src="../js/text.img.js"></script>
    <title>LekoFilmes</title>
</head>
<body>

    <!-- SLIDER DOS FILMES EM DESTAQUE -->
    <div class="slider">

        <nav class="navbar">
            <div class="logo">
                <a href="pagPrincipal.php"><img class="leko" src="../img/logo-lekofilmes.png" alt="logo"></a>
            </div>
            <div class="guias">
                <a href="pagPrincipal.php" class="guia">Home</a>
                <a href="#" class="guia">Filmes</a>
                <a href="#" class="guia">Pormoção</a>
                <a href="#" class="guia">Ingressos</a>
            </div>
            <div class="user">
                    <a href="#"><i class='bx bxs-user-circle' id="icon"></i></a>
                    <span style='color:#ffffff'>user</span>
            </div>
        </nav>

        <div class="featured--vertical">
        <div class="slides">

            <!-- Radio Buttons -->
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">

            <!-- Slide Images -->
                <div class="slide first">
                    <img src="../img/slider-spider.jpg" alt="imagem 4" id="image">
                </div>
                <div class="slide">
                    <img src="../img/slider-bat.jpg" alt="imagem 2" id="image">
                </div>
                <div class="slide">
                    <img src="../img/slider-ch.jpg" alt="imagem 3" id="image">
                </div>
                <div class="slide">
                    <img src="../img/slider-web.jpg" alt="imagem 1" id="image">
                </div>

            <!-- Navegation -->
            <div class="navegation-auto">
                <div class="autobtn1"></div>
                <div class="autobtn2"></div>
                <div class="autobtn3"></div>
                <div class="autobtn4"></div>
            </div>

        </div>
    </div> 

    <div class="filmes">

        <div class="center" style="width: 100%;">
                <section class="splide" aria-label="Splide Basic HTML Example">
                    <span class="titulos">Em Alta</span>
                    <div class="splide__track">
                          <ul class="splide__list">

                              <li class="splide__slide">
                                  <a href="./sonicExempo.php">
                                      <img src="../img/filmes/sonic2.jpg" alt="" id="slides" class="img">
                                    </a>
                                    <span class="hide" id="titulof">Sonic 2</span>
                                </li>
                              <li class="splide__slide">
                                    <a href="#">
                                        <img src="../img/filmes/Dr. Estranho.webp" alt="" id="slides">
                                    </a>
                                </li>
                              <li class="splide__slide">
                                    <a href="#">
                                        <img src="../img/filmes/Encanto.jpg" alt="" id="slides">
                    
                                </li>
                              <li class="splide__slide">
                                    <a href="#">
                                        <img src="../img/filmes/Avatar 2.jpg" alt="" id="slides">
                                    </a>
                                </li>
                              <li class="splide__slide">
                                    <a href="#">
                                        <img src="../img/filmes/HOMEM_ARANHA_SEM_VOLTA_A_CASA_3_2.jpg" alt="" id="slides">
                                    </a>
                                </li>
                                <li class="splide__slide">
                                    <a href="#">
                                        <img src="../img/filmes/UM_SUSTO_DE_FAMILIA_2_1_2.jpg" alt="" id="slides">
                                    </a>
                                </li>
                                <li class="splide__slide">
                                    <a href="#">
                                        <img src="../img/filmes/UNCHARTED_5_3.jpg" alt="" id="slides">
                                    </a>
                                </li>
                          </ul>
                    </div>
                  </section>
        </div>

        <div class="center2">
            <section class="splide" aria-label="Splide Basic HTML Example">
                <span class="titulos">Em Breve</span>
                <div class="splide__track">
                      <ul class="splide__list">
                        <li class="splide__slide">
                            <a href="#">
                                <img src="../img/filmes/Avatar.jpeg" alt="" id="slides">
                            </a>
                        </li>
                        <li class="splide__slide">
                            <a href="#">
                                <img src="../img/filmes/Camara-Secreta.jpeg" alt="" id="slides">
                            </a>
                        </li>
                        <li class="splide__slide">
                            <a href="#">
                                <img src="../img/filmes/Jurassic-Parck.jpeg" alt="" id="slides">
                            </a>
                        </li>
                        <li class="splide__slide">
                            <a href="#">
                                <img src="../img/filmes/minions.jpeg" alt="" id="slides">
                            </a>
                        </li>
                        <li class="splide__slide">
                            <a href="#">
                                <img src="../img/filmes/Pantera-Negra.jpeg" alt="" id="slides">
            
                        </li>
                        <li class="splide__slide">
                            <a href="#">
                                <img src="../img/filmes/Uncharted.jpeg" alt="" id="slides">
                            </a>
                        </li>
                      </ul>
                </div>
              </section>
        </div>

        <div class="center3">
            <section class="splide" aria-label="Splide Basic HTML Example">
                <span class="titulos">Em Cartaz</span>
                <div class="splide__track">
                      <ul class="splide__list">

                        <li class="splide__slide">
                            <a href="#">
                                <img src="../img/filmes/INTERESTRELAR.jpeg" alt="" id="slides">
                              </a>
                          </li>
                        <li class="splide__slide">
                              <a href="#">
                                  <img src="../img/filmes/MORBIUS.jpeg" alt="" id="slides">
                              </a>
                          </li>
                        <li class="splide__slide">
                              <a href="#">
                                  <img src="../img/filmes/NOPE.jpeg" alt="" id="slides">
                              </a>
                          </li>
                        <li class="splide__slide">
                              <a href="#">
                                  <img src="../img/filmes/SING 2.jpeg" alt="" id="slides">
                              </a>
                          </li>
                        <li class="splide__slide">
                              <a href="#">
                                  <img src="../img/filmes/KINGS MAN.jpeg" alt="" id="slides">
                              </a>
                          </li>
                          <li class="splide__slide">
                              <a href="#">
                                  <img src="../img/filmes/CIDADE PERDIDA.jpeg" alt="" id="slides">
                              </a>
                          </li>
                          <li class="splide__slide">
                              <a href="#">
                                  <img src="../img/filmes/BLACK WIDOW.jpeg" alt="" id="slides">
                              </a>
                          </li>
                      </ul>
                </div>
              </section>
        </div>

    </div>

    </div>
    <div class="manual-navegation">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
    </div>

    <!-- SPLIDERJS PICTURE CAROUSEL -->
    <script src="../js/carousel.js"></script>
</html>