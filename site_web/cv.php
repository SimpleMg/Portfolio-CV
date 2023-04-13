<style>
  h1,
  h2,
  h3 {
    color: #32cd32;
  }

  .marker {
    position: relative;
    display: inline;
  }

  .marker-center::before {
    content: '';
    position: absolute;
    background-color: #32cd32;
    height: 2px;
    width: 100%;
    bottom: 0;
    left: 0;
  }

  img {
    border-radius: 50%;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  }

  p {
    font-size: 1.1rem;
    line-height: 1.6;
    color: #50e050;
  }

  .skill-icon {
    font-size: 10rem;
    margin-bottom: 10px;
    color: #32cd32;
  }
</style>
<div class="section pt-4 px-3 px-lg-4" id="about">
  <div class="container-narrow mx-auto">
    <div class="row">
      <div class="col-md-6">
        <div class="px-3">
          <br>
          <br>
          <p>
            Je m'appelle Sam et j'ai développé un grand intérêt pour la cyber sécurité et la programmation.
            Mon envie de comprendre le fonctionnement des ordinateurs m'a conduit à explorer les différents
            aspects de ces domaines fascinants. J'adore la complexité des problèmes à résoudre en matière de sécurité informatique,
            ainsi que les possibilités infinies que la programmation offre pour créer des systèmes innovants.
            Mon engagement envers ces domaines ne cesse de grandir au fil des années, et j'ai décidé de me consacrer pleinement à leur exploration.
            Je suis constamment en train d'apprendre de nouvelles choses pour rester à jour avec les dernières tendances et techniques de programmation
            et de sécurité.
          </p>
        </div>
      </div>
      <div class="col-md-5 offset-md-1" data-aos="fade-left" data-aos-delay="100">
        <div class="px-3">
          <img class="avatar img-fluid mt-2" src="assets/img/sam_l.jpg" width="400" height="400" alt="Sam Levy" />
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
          <i class="fab fa-html5 skill-icon"></i>
          <h3>HTML</h3>
        </div>
      </div>
      <div class="col-md-4">
        <div class="skill-block text-center">
          <i class="fab fa-bootstrap skill-icon"></i>
          <h3>Bootstrap</h3>
        </div>
      </div>
      <div class="col-md-4">
        <div class="skill-block text-center">
          <i class="fab fa-python skill-icon"></i>
          <h3>Python</h3>
        </div>
      </div>
      <div class="col-md-4">
        <div class="skill-block text-center">
          <i class="fab fa-php skill-icon"></i>
          <h3>PHP</h3>
        </div>
      </div>
      <div class="col-md-4">
        <div class="skill-block text-center">
          <i class="fab fa-cuttlefish skill-icon"></i>
          <h3>Langage C</h3>
        </div>
      </div>
      <div class="col-md-4">
        <div class="skill-block text-center">
          <i class="fas fa-database skill-icon"></i>
          <h3>SQL</h3>
        </div>
      </div>
    </div>
  </div>
</div>
