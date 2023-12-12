<?php
$imageDirectory = 'https://cursedprograms.github.io/cursedentertainment/images/vayla/gallery/';
$imageFiles = glob($imageDirectory . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Vayla Varnica</title>
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="../../cursedFavicon.png">
  <link rel="stylesheet" type="text/css" href="https://cursedprograms.github.io/cursedentertainment/styles/main-style.css">
  <link rel="stylesheet" type="text/css" href="https://cursedprograms.github.io/cursedentertainment/styles/content-style.css">
  <link rel="stylesheet" type="text/css" href="https://cursedprograms.github.io/cursedentertainment/styles/horizontal-menu-style.css">
</head>

<body>
  <iframe src="https://cursedprograms.github.io/cursedentertainment/header/header.html" width="100%" frameborder="0" style="padding-bottom: 0;"></iframe>
  <div class="content">
    <div class="grid_container">
      <div class="horizontal-menu"> <br>
        <ul>
          <li><a href="https://cursedprograms.github.io/cursedentertainment/pages/discographies/vayla-music.html">Music</a></li>
        </ul>
      </div>
      <div class="grid">
        <?php
        foreach ($imageFiles as $index => $imageFile) {
          $altText = 'Varnica ' . ($index + 1);
          echo '<div class="grid-item"> <img src="' . $imageFile . '" alt="' . $altText . '"> </div>';
        }
        ?>
      </div>
    </div>
  </div>
  <div class="horizontal-menu"> <br>
    <ul>
      <li><a href="https://cursedprograms.github.io/cursedentertainment/pages/discographies/vayla-music.html">Music</a></li>
    </ul>
  </div>
  <div class="icons_container"><iframe src="https://cursedprograms.github.io/cursedentertainment/icons/icon-container.html" frameborder="0"></iframe></div>
  <footer id="dynamicFooter"></footer>
  <script src="https://cursedprograms.github.io/cursedentertainment/scripts/footer.js"></script>
</body>
</html>
