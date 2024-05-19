<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/classifications.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link href="https://fonts.cdnfonts.com/css/glacial-indifference-2" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.cdnfonts.com/css/bogam" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../assets/images/ui/logo.svg" type="image/x-svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Classifications</title>

<style>
    
header {
  height: 80px;
  width: 100%;
  display: flex;
  position: fixed;
  top: 0;
  left: 0;
  justify-content: space-between;
  align-items: center;
  padding: 20px;
  box-shadow: 0 0 10px rgba(0,0,0,.8);
  background-color: transparent !important;
  backdrop-filter: blur(4px);
  font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  z-index: 10;
  border-bottom: solid white .5px;
}

.tailor-thy {
  font-size: 5vw;
  font-family: 'Poppins', sans-serif;
  font-weight: 200;
  color: white;
  padding-left: 30vh;
  text-shadow: 1px 2px 5px rgba(12, 27, 102, 0.484);
  text-align: left;
  margin-top: 10vw !important;
}

.carousel-item {
    position: relative;
    display: none;
    float: left;
    width: 47% !important;
    margin-right: -86% !important;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    transition: transform .6s ease-in-out;
}



</style>
</head>

<body class="fade-in">

    <?php include 'components/header.php'; ?>

    <div class="bg-image">
        <div>
            <h1 class="tailor-thy">tailor thy</h1>
            <h1 class="art-era"> ART ERA</h1>
            <h1 class="fancy">to thine fancy</h1>
        </div>

        <div class="container">
            <div class="carousel-outer">
                <div class="carousel-inner">
                    <div class="carousel-item active first-item">
                        <span class="number">01 </span>
                        <div class="carousel-text">Byzantine</div>
                        <div class="carousel-year">527 - 1453</div>
                    </div>
                    <div class="carousel-item">
                        <span class="number">02 </span>
                        <div class="carousel-text">Romanesque</div>
                        <div class="carousel-year">1000 - 1150</div>
                    </div>
                    <div class="carousel-item">
                        <span class="number">03 </span>
                        <div class="carousel-text">Gothic</div>
                        <div class="carousel-year">1140 - 1600</div>
                    </div>
                    <div class="carousel-item">
                        <span class="number">04 </span>
                        <div class="carousel-text">Renaissance</div>
                        <div class="carousel-year">1495 - 1527</div>
                    </div>
                    <div class="carousel-item">
                        <span class="number">05 </span>
                        <div class="carousel-text">Mannerism</div>
                        <div class="carousel-year">1520 - 1600</div>
                    </div>
                    <div class="carousel-item">
                        <span class="number">06 </span>
                        <div class="carousel-text">Baroque</div>
                        <div class="carousel-year">1600 - 1725</div>
                    </div>
                    <div class="carousel-item">
                        <span class="number">07 </span>
                        <div class="carousel-text">Rococo</div>
                        <div class="carousel-year">1720 - 1760</div>
                    </div>
                    <div class="carousel-item">
                        <span class="number">08 </span>
                        <div class="carousel-text">Neoclassicism</div>
                        <div class="carousel-year">1770 - 1840</div>
                    </div>
                    <div class="carousel-item">
                        <span class="number">09 </span>
                        <div class="carousel-text">Romanticism</div>
                        <div class="carousel-year">1800 - 1850</div>
                    </div>
                    <div class="carousel-item">
                        <span class="number">10 </span>
                        <div class="carousel-text">Realism</div>
                        <div class="carousel-year">1840 - 1870</div>
                    </div>
                    <div class="carousel-item">
                        <span class="number">11 </span>
                        <div class="carousel-text">Pre-Raphaelite</div>
                        <div class="carousel-year">1848 - 1854</div>
                    </div>
                    <div class="carousel-item">
                        <span class="number">12 </span>
                        <div class="carousel-text">Impressionism</div>
                        <div class="carousel-year">1870 - 1900</div>
                    </div>
                    <div class="carousel-item">
                        <span class="number">13 </span>
                        <div class="carousel-text">Naturalism</div>
                        <div class="carousel-year">1880 - 1900</div>
                    </div>
                    <div class="carousel-item">
                        <span class="number">14 </span>
                        <div class="carousel-text">Symbolism</div>
                        <div class="carousel-year">1886 - 1900</div>
                    </div>
                    <div class="carousel-item">
                        <span class="number">15 </span>
                        <div class="carousel-text">Post-Impressionism</div>
                        <div class="carousel-year">1886 - 1905</div>
                    </div>
                    <div class="carousel-item">
                        <span class="number">16 </span>
                        <div class="carousel-text">Expressionism</div>
                        <div class="carousel-year">1890 - 1939</div>
                    </div>
                    <div class="carousel-item">
                        <span class="number">17 </span>
                        <div class="carousel-text">Art Nouveau</div>
                        <div class="carousel-year">1895 - 1915</div>
                    </div>
                    <div class="carousel-item">
                        <span class="number">18 </span>
                        <div class="carousel-text">Cubism</div>
                        <div class="carousel-year">1905 - 1939</div>
                    </div>
                    <div class="carousel-item">
                        <span class="number">19 </span>
                        <div class="carousel-text">Futurism</div>
                        <div class="carousel-year">1909 - 1918</div>
                    </div>
                    <div class="carousel-item">
                        <span class="number">20 </span>
                        <div class="carousel-text">Dadaism</div>
                        <div class="carousel-year">1912 - 1923</div>
                    </div>
                    <div class="carousel-item">
                        <span class="number">21 </span>
                        <div class="carousel-text">Constructivism</div>
                        <div class="carousel-year">1913 - 1930</div>
                    </div>
                    <div class="carousel-item">
                        <span class="number">22 </span>
                        <div class="carousel-text">New Objectivity</div>
                        <div class="carousel-year">1918 - 1933</div>
                    </div>
                    <div class="carousel-item">
                        <span class="number">23 </span>
                        <div class="carousel-text">Bauhaus</div>
                        <div class="carousel-year">1920 - 1925</div>
                    </div>
                    <div class="carousel-item">
                        <span class="number">24 </span>
                        <div class="carousel-text">Harlem Renaissance</div>
                        <div class="carousel-year">1920 - 1930</div>
                    </div>
                    <div class="carousel-item">
                        <span class="number">25 </span>
                        <div class="carousel-text">Art Deco</div>
                        <div class="carousel-year">1920 -1935</div>
                    </div>
                    <div class="carousel-item">
                        <span class="number">26 </span>
                        <div class="carousel-text">Precisionism</div>
                        <div class="carousel-year">1920 - 1950</div>
                    </div>
                    <div class="carousel-item">
                        <span class="number">27 </span>
                        <div class="carousel-text">Surrealism</div>
                        <div class="carousel-year">1924 - 1945</div>
                    </div>
                    <div class="carousel-item">
                        <span class="number">28 </span>
                        <div class="carousel-text">Abstract Expressionism</div>
                        <div class="carousel-year">1945 - 1960</div>
                    </div>
                    <div class="carousel-item">
                        <span class="number">29 </span>
                        <div class="carousel-text">Pop Art</div>
                        <div class="carousel-year">1956 - 1969</div>
                    </div>
                    <div class="carousel-item">
                        <span class="number">30 </span>
                        <div class="carousel-text">Arte Povera</div>
                        <div class="carousel-year">1960 - 1969</div>
                    </div>
                    <div class="carousel-item">
                        <span class="number">31 </span>
                        <div class="carousel-text">Minimalism</div>
                        <div class="carousel-year">1960- 1975</div>
                    </div>
                    <div class="carousel-item">
                        <span class="number">32 </span>
                        <div class="carousel-text">Op Art</div>
                        <div class="carousel-year">1965 - 1970</div>
                    </div>
                    <div class="carousel-item">
                        <span class="number">33 </span>
                        <div class="carousel-text">Photorealism</div>
                        <div class="carousel-year">1968 - Present</div>
                    </div>
                    <div class="carousel-item">
                        <span class="number">34 </span>
                        <div class="carousel-text">Lowbrow Pop Surrealism</div>
                        <div class="carousel-year">1970 - Present</div>
                    </div>
                    <div class="carousel-item">
                        <span class="number">35 </span>
                        <div class="carousel-text">Contemporary Art</div>
                        <div class="carousel-year">1978 - Present</div>
                    </div>
            </div>
            </div>
        </div>
    </div>
    </div>

    <?php include 'components/footer.php' ?>
    <script src="../assets/js/header.js"></script>
    <script src="../assets/js/footer.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>