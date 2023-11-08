<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="media/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Mijn Projecten</title>
    <style>
        .gallery {
            display: flex;
            flex-wrap: wrap;
        }

        .gallery img {
            width: 300px;
            height: 200px;
            margin: 10px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>

<header class="header">
    <a href="#default" class="logo">Sinaid Selimovic</a>
    <nav class="header-right">
      <a class="active" href="index.php">Home</a>
      <a href="projects.php">Projecten</a>
    </nav>
  </header>

    <h1>Mijn Projecten</h1>
    <p>Hier zijn enkele van mijn projecten:</p>

    <div class="gallery">
        <img src="blank-image1.jpg" alt="Afbeelding 1">
        <img src="blank-image2.jpg" alt="Afbeelding 2">
        <img src="blank-image3.jpg" alt="Afbeelding 3">
    </div>

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eleifend dapibus metus, et dapibus justo bibendum nec.
         Nullam at justo vel justo hendrerit facilisis. Integer auctor arcu a justo ullamcorper, et imperdiet massa convallis.
          Vestibulum bibendum est nec nisl efficitur bibendum. Sed sed justo nec lectus tristique interdum.</p>

    <p>Phasellus eget odio non sapien varius ultrices. Vivamus mattis felis et lacus egestas, in facilisis nisl tristique.
         Suspendisse quis dui et neque bibendum viverra in eget est. Sed feugiat felis id dui semper, sit amet feugiat ligula elementum.</p>

    <?php include 'footer.php'; ?>
</body>
</html>
