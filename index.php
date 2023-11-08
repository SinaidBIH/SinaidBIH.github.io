<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="media/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:600,900" rel="stylesheet">
  <title>Sinaid Selimovic</title>
</head>
<body>
  <header class="header">
    <a href="#default" class="logo">Sinaid Selimovic</a>
    <nav class="header-right">
      <a class="active" href="index.php">Home</a>
      <a href="projects.php">Projecten</a>
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

  <div class="centered-info">
    <h1>Over mij</h1>
    <br>
    <h2>Wie ben ik?</h2>
    <p>Mijn naam is Sinaid Selimovic. Ik ben 18 jaar oud</p>
       <p>Mijn hobby's zijn: Houden van totaal onpopulaire auto's, Jagen met mijn vader, Gamen, Scooters, F1 en
         Vissen met mijn vader. Ik zit op de opleiding Software Developer niveau 4. 
         Het is een uitdagende maar goede opleiding waar je veel kunt leren.</p>
  </div>

  <div class="gallery-image">
    <div class="img-box">
      <img src="media/kia.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Kia k5 gt</p>
          <p class="opacity-low">Prachtig exemplaar</p>
        </div>
      </div> 
    </div>
    <div class="img-box">
      <img src="media/jagen.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Jagen</p>
          <p class="opacity-low">Goede workout voor in de winter</p>
        </div>
      </div>
    </div>
    <div class="img-box">
      <img src="media/desktop.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Gamen</p>
          <p class="opacity-low">Helpt met relaxen (soms)</p>
        </div>
      </div>
    </div>
    <div class="img-box">
      <img src="media/zip.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Piaggio zip</p>
          <p class="opacity-low">Mijn mooie scooter</p>
        </div>
      </div> 
    </div>
    <div class="img-box">
      <img src="media/aston.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Aston martin</p>
          <p class="opacity-low">Bestuurd door Lance Stroll</p>
        </div>
      </div> 
    </div>
    <div class="img-box">
      <img src="media/snoek.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Snoekbaars</p>
          <p class="opacity-low">Gevangen door mijn vader en een helaas overleden kennis</p>
        </div>
      </div> 
    </div>
  </div>

  <?php include 'footer.php'; ?>
</body>
</html>