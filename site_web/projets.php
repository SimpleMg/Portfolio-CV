<style>
  .carousel img {
    width: 45%;
    height: auto;
    object-fit: cover;
    border-radius: 15px;
  }

  .carousel-item {
    position: relative;
  }

  .carousel-caption {
    position: absolute;
    top: 90%;
    left: 50%;
    transform: translate(-50%, -50%);
    max-width: 45%;
    background-color: rgba(0, 0, 0, 0.5);
    border-radius: 15px;
    padding: 15px;
  }

  .carousel-caption h5 {
    font-size: 24px;
    font-weight: bold;
  }

  .carousel-caption p {
    font-size: 18px;
  }
</style>
</head>

<body>
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
          <h5>morpion algo minmax</h5>
          <p>morpion coder en python avec l'algorithme min max</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="assets/img/morpion.jpg" class="d-block mx-auto" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>morpion algo minmax</h5>
          <p>morpion coder en python avec l'algorithme min max</p>
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
