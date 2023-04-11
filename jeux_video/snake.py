import pygame
from random import randint

WIDTH = 400
HEIGHT = 300
snake_list = []
snake_length = 1
snake_size = 10
snake_x = WIDTH // 2
snake_y = HEIGHT // 2
SNAKE_SPEED = 5
score = 0

def create_apple():
    apple_x = randint(1, (WIDTH - snake_size) // snake_size) * snake_size
    apple_y = randint(1, (HEIGHT - snake_size) // snake_size) * snake_size
    return apple_x, apple_y


apple_x, apple_y = create_apple()

pygame.init()
screen = pygame.display.set_mode((WIDTH, HEIGHT))
pygame.display.set_caption("Snake")
clock = pygame.time.Clock()
running = True
dx, dy = 0, 0
font = pygame.font.Font(None, 36)  # Crée une police pour afficher le score

while running:
    for event in pygame.event.get():
        if event.type == pygame.QUIT:
            running = False

        if event.type == pygame.KEYDOWN:
            if event.key == pygame.K_LEFT:
                dx, dy = -snake_size, 0
            if event.key == pygame.K_RIGHT:
                dx, dy = snake_size, 0
            if event.key == pygame.K_UP:
                dx, dy = 0, -snake_size
            if event.key == pygame.K_DOWN:
                dx, dy = 0, snake_size

    snake_x += dx
    snake_y += dy

    snake_list.insert(0, [snake_x, snake_y])
    if len(snake_list) > snake_length:
        snake_list.pop()

    if abs(snake_x - apple_x) < snake_size and abs(snake_y - apple_y) < snake_size:
        apple_x, apple_y = create_apple()
        snake_length += 1
        score += 1

    screen.fill((0, 0, 0))

    for segment in snake_list:
        pygame.draw.rect(screen, (255, 0, 0), (segment[0], segment[1], snake_size, snake_size))

    pygame.draw.rect(screen, (0, 255, 0), (apple_x, apple_y, snake_size, snake_size))

    if snake_x >= WIDTH or snake_x < 0 or snake_y >= HEIGHT or snake_y < 0:
        print("Game Over")
        running = False

    # Affiche le score au-dessus de la tête du serpent
    score_text = font.render(f"Score: {score}", True, (255, 255, 255))
    screen.blit(score_text, (0, 0))

    pygame.display.flip()
    clock.tick(10)

pygame.quit()
