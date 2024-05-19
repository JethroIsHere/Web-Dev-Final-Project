<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="masterpieces.css">
    <link rel="shortcut icon" href="Images/Untitled84_20240418143344.png" sizes="192x192">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue|Montserrat:ital,wght@0,100..900;1,100..900|Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900|Italiana|Oswald:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Italiana&family=Oswald:wght@700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <title>Signature masterpieces</title>
  
</head>

<body>
    <div class="background-container"></div>
    <div class="main-container">
        <div class="signature-masterpieces">
            <div class="artworks-name-container">
                <h1 class="artworks-name">
                    <span>STARRY</span>
                    <span class="night">NIGHT</span>
                </h1>

                <h3 class="artist"> by Vincent van Gogh </h3>
                </div>
            </div>

                <div class="about-the-piece">
                    <img src="./The Starry Night_1889.svg" alt="">
                    <div class="text-container">
                    <h1> about the piece </h1>
                    <p> Vincent van Gogh's "Starry Night," painted in 1889 during his stay at the Saint-Paul-de-Mausole asylum in France, 
                        is a captivating masterpiece. With swirling brushstrokes and vibrant colors, van Gogh depicts a mesmerizing nocturnal 
                        scene that transcends reality. The painting's celestial elements, including the swirling stars and luminous moon, evoke 
                        a sense of cosmic wonder and emotional intensity. Beneath the celestial spectacle lies a tranquil village, offering a 
                        juxtaposition of the earthly and the sublime. "Starry Night" remains a timeless symbol of van Gogh's artistic genius and 
                        continues to inspire awe and fascination in viewers around the world.</p>
                        
        </div>
    </div>
    <h3 class="return"><span>Return to the </span><a href="artist.html" class="artist-link"> artist?</a></h3>
 

<script>

const aboutThePiece = document.querySelector('.about-the-piece img');
const textContainer = document.querySelector('.text-container');

window.addEventListener('scroll', () => {
  const scrollPosition = window.scrollY;
  const aboutThePieceTop = aboutThePiece.offsetTop;

    if (scrollPosition >= aboutThePieceTop - 900) {
    aboutThePiece.classList.add('animate');
    textContainer.classList.add('animate');
  } else {
    aboutThePiece.classList.remove('animate');
    textContainer.classList.remove('animate');
  }


});

</script>


</body>
</html>

