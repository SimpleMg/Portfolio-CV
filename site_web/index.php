<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CDN BOOSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <title>Portfolio</title>
</head>
<body onload="brython()">
<style>
section{
  margin-top: 200px;
  margin-bottom: 200px;
}
section:not(:first-child){
  margin-top: 0px;
}
</style>
    <!-- php dossier -->
    <?php
      $dossier = __DIR__;
    ?>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark fixed-top" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Portfolio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#acceuil_ref">acceuil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#cv_ref">cv</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#projets_ref">projets</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#jeux_ref">jeux</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact_ref">contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- FIN NAVBAR -->
    <!-- Acceuil -->
    <!-- Video -->
    <section id="acceuil_ref">
        <div class="video-wrapper">
            <video width="100%" playsinline autoplay muted loop>
            <source src="assets/video/Blue Black Futuristic Technology Video.mp4">Votre navigateur ne supporte pas le player vidéo</video>
        </div>
    </section>
    <!-- CV -->
    <section class="container-fluid" id="cv_ref">
    <div class="section pt-4 px-3 px-lg-4" id="about">
  <div class="container-narrow mx-auto">
    <div class="row">
      <div class="col-md-6">
        <div class="px-3">
          <br>
          <br>
          <p>
            Je suis Sam et j'ai développé un grand intérêt pour la cyber sécurité et la programmation.
            Mon envie de comprendre le fonctionnement des ordinateurs m'a conduit à explorer les différents 
            aspects de ces domaines fascinants. J'adore la complexité des problèmes à résoudre en matière de sécurité informatique, 
            ainsi que les possibilités infinies que la programmation offre pour créer des systèmes innovants.
            Mon engagement envers ces domaines ne cesse de grandir au fil des années, et j'ai décidé de me consacrer pleinement à leur exploration.
            Je suis constamment en train d'apprendre de nouvelles choses pour rester à jour avec les dernières tendances et techniques de programmation
            et de sécurité. J'ai également une passion pour l'échange et le partage des connaissances. 
            J'aime discuter avec d'autres professionnels et passionnés pour élargir mes horizons et partager mes découvertes. 
            Je suis convaincu que l'ouverture d'esprit et la collaboration sont les clés de la réussite dans ces domaines, 
            et je suis heureux de faire partie d'une communauté aussi dynamique et innovante.
          </p>
        </div>
      </div>
      <div class="col-md-5 offset-md-1" data-aos="fade-left" data-aos-delay="100">
        <div class="px-3">
          <img class="avatar img-fluid mt-2" src="assets/img/sam_l.jpg" width="400" height="400" alt="Sam Levy"/>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section px-3 px-lg-4 pt-5">
  <div class="container-narrow">
    <div class="text-center mb-5">
      <h2 class="marker marker-center">Mes compétences</h2>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="skill-block text-center">
          <h3>HTML</h3>
        </div>
      </div>
      <div class="col-md-4">
        <div class="skill-block text-center">
          <h3>Bootstrap</h3>
        </div>
      </div>
      <div class="col-md-4">
        <div class="skill-block text-center">
          <h3>Python</h3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="skill-block text-center">
          <h3>PHP</h3>
        </div>
      </div>
      <div class="col-md-4">
        <div class="skill-block text-center">
          <h3>C</h3>
        </div>
      </div>
      <div class="col-md-4">
        <div class="skill-block text-center">
          <h3>SQL</h3>
        </div>
      </div>
    </div>
  </div>
</div>


    </section>
    <!-- projets -->
    <section class="container-fluid" id="projets_ref">

    <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/morpion.jpg" class="d-block mx-auto" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>morpion algo minmax</h5>
        <p>morpion coder en python avec l'algorithme min max</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/morpion.jpg" class="d-block mx-auto" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/morpion.jpg" class="d-block mx-auto" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    </section>
    <!-- jeux -->
    <section class="container-fluid" id="jeux_ref">

    <style>
        .game-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
        canvas {
            border: 1px solid black;
            background-color: black;
        }
        .play-again-container {
            display: flex;
            justify-content: center;
            width: 100%;
        }
        button {
            margin-top: 1rem;
        }
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: black;
        }
    </style>


    <div id="gameCarousel" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="text-center">
                    <canvas id="snake" width="400" height="300"></canvas>
                    <div class="play-again-container">
                        <button id="play_again" class="btn btn-primary">Play Again</button>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="text-center">
                    <h2>Jeu de La vie</h2>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#gameCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#gameCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <script type="text/python">
       
from random import randint
from browser import document, window, timer

WIDTH = 400
HEIGHT = 300
snake_list = []
snake_length = 1
snake_size = 10
snake_x = WIDTH // 2
snake_y = HEIGHT // 2
SNAKE_SPEED = 15
score = 0

def create_apple():
    apple_x = randint(1, (WIDTH - snake_size) // snake_size) * snake_size
    apple_y = randint(1, (HEIGHT - snake_size) // snake_size) * snake_size
    return apple_x, apple_y

apple_x, apple_y = create_apple()

canvas = document["snake"]
ctx = canvas.getContext("2d")
running = True
dx, dy = 0, 0

def draw_snake():
    for segment in snake_list:
        ctx.fillStyle = "red"
        ctx.fillRect(segment[0], segment[1], snake_size, snake_size)

def draw_apple():
    ctx.fillStyle = "green"
    ctx.fillRect(apple_x, apple_y, snake_size, snake_size)

def draw_score():
    ctx.font = "20px Arial"
    ctx.fillStyle = "white"
    ctx.fillText(f"Score: {score}", 10, 30)

def game_loop():
    global snake_x, snake_y, dx, dy, running, apple_x, apple_y, snake_length, score

    snake_x += dx
    snake_y += dy

    snake_list.insert(0, [snake_x, snake_y])
    if len(snake_list) > snake_length:
        snake_list.pop()

    if abs(snake_x - apple_x) < snake_size and abs(snake_y - apple_y) < snake_size:
        apple_x, apple_y = create_apple()
        snake_length += 1
        score += 1

    ctx.clearRect(0, 0, WIDTH, HEIGHT)

    draw_snake()
    draw_apple()
    draw_score()

    if snake_x >= WIDTH or snake_x < 0 or snake_y >= HEIGHT or snake_y < 0:
        print("Game Over")
        running = False
        timer.clear_interval(game_interval)
    else:
        timer.set_timeout(game_loop, 100)

def keydown(event):
    global dx, dy
    key = event.key
    if key == "ArrowLeft":
        dx, dy = -SNAKE_SPEED, 0
    elif key == "ArrowRight":
        dx, dy = SNAKE_SPEED, 0
    elif key == "ArrowUp":
        dx, dy = 0, -SNAKE_SPEED
    elif key == "ArrowDown":
        dx, dy = 0, SNAKE_SPEED
        

def prevent_scroll(event):
    key = event.key
    if key == "ArrowLeft" or key == "ArrowRight" or key == "ArrowUp" or key == "ArrowDown":
        event.preventDefault()

window.addEventListener("keydown", prevent_scroll)
window.addEventListener("keydown", keydown)

game_interval = timer.set_timeout(game_loop, 100)
def reset_game():
    global snake_x, snake_y, dx, dy, running, apple_x, apple_y, snake_length, score, snake_list, game_interval

    snake_x = WIDTH // 2
    snake_y = HEIGHT // 2
    dx, dy = 0, 0
    snake_list = []
    snake_length = 1
    apple_x, apple_y = create_apple()
    score = 0
    running = True
    game_interval = timer.set_timeout(game_loop, 100)

def play_again(event):
    reset_game()
    #document["play_again"].style.display = "none"

document["play_again"].bind("click", play_again)
    </script>




    </section>
    <!-- contact -->
    <section class="container-fluid" id="contact_ref">
    <?php 
        $fichier = '/contact.php';
        if (file_exists($dossier . $fichier)) {
            require_once($dossier . $fichier);
        } else {
            echo "Le fichier $fichier n'a pas été trouvé pas";
        }
    ?>
    </section>
    <!-- CDN BOOSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- Brython Js -->
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/brython@3.11.0/brython.min.js">
    </script>
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/brython@3.11.0/brython_stdlib.js">
    </script>
  </body>
</html>