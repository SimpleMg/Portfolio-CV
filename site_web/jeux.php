<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-Game Carousel</title>

    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/brython@3.11.0/brython.min.js">
    </script>
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/brython@3.11.0/brython_stdlib.js">
    </script>

    <!-- Add Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0-alpha1/dist/js/bootstrap.min.js"></script>

    <style>
        canvas #snake {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f8f9fa;
        }
        canvas {
            border: 1px solid black;
            background-color: black;
        }
        button {
            display: none;
            margin-top: 1rem;
        }
    </style>
</head>

<body onload="brython()">

    <div id="gameCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Snake Game -->
            <div class="carousel-item active">
                <div class="text-center">
                    <canvas id="snake" width="400" height="300"></canvas>
                    <button id="play_again" class="btn btn-primary">Play Again</button>
                </div>
            </div>
            <!-- Second Game Placeholder -->
            <div class="carousel-item">
                <div class="text-center">
                    <h2>Second Game Placeholder</h2>
                </div>
            </div>
        </div>
        <!-- Carousel controls -->
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

window.addEventListener("keydown", keydown)

game_interval = timer.set_timeout(game_loop, 100)
    </script>
</body>
</html>



