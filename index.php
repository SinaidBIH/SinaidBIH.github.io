<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="media/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Sinaid Selimovic</title>
</head>

<body>
  <header class="header">
    <a href="#default" class="logo">Sinaid Selimovic</a>
    <nav class="header-right">
      <a class="active" href="#home">Home</a>
      <a href="#Projecten">Projecten</a>
      <a href="#OverMij">Over Mij</a>
    </nav>
  </header>

  <section class="portfolio">
    <h1>Mijn Portfolio</h1>
    <div class="container">
      <img src="./media/FotoProf.png" alt="Avatar" class="image">
      <div class="overlay">
        <div class="text">Sinaid Selimovic</div>
      </div>
    </div>
  </section>

  <section class="info">
    <div class="centered-info">
      <h1>Over mij</h1>
      <br>
      <h2>Wie ben ik?</h2>
      <p>Mijn naam is Sinaid Selimovic. Ik ben 18 jaar oud. Mijn hobbies zijn Auto's, Jagen met mijn vader, Gamen, Scooters, Vissen
        met mijn vader en F1. Ik zit op
        de opleiding Software Developer niveau 4. Het is een uitdagende maar goede opleiding waar je veel kunt leren.
      </p>
    </div>
    <ul class="centered-image-list">
      <li>
        <a href="#">
          <figure>
            <img src="media/kia.jpg" alt="auto">
            <figcaption>Mijn droom auto</figcaption>
          </figure>
        </a>
      </li>
      <li>
        <a href="#">
          <figure>
            <img src="media/jagen.jpg" alt="jagen">
            <figcaption>Jagen met mijn vader</figcaption>
          </figure>
        </a>
      </li>
      <li>
        <a href="#">
          <figure>
            <img src="media/desktop.jpg" alt="desktop">
            <figcaption>Gaming desktop</figcaption>
          </figure>
        </a>
      </li>
      <li>
        <a href="#">
          <figure>
            <img src="media/zip.jpg" alt="scooter">
            <figcaption>Mijn scooter</figcaption>
          </figure>
        </a>
      </li>
      <li>
        <a href="#">
          <figure>
            <img src="media/aston.jpg" alt="f1 auto">
            <figcaption>Formule 1</figcaption>
          </figure>
        </a>
      </li>
      <li>
        <a href="#">
          <figure>
            <img src="media/snoek.jpg" alt="snoek">
            <figcaption>Mijn vader</figcaption>
          </figure>
        </a>
      </li>
    </ul>
  </section>

  <?php include 'footer.php'; ?>
</body>

</html>