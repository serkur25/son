<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navbar.css" type="text/css">
    <link rel="stylesheet" href="kategoriler.css" type="text/css">
    <title>Film Öneri Sitesi</title>
    <style>
        h1 {
            font-size: 40px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar">
                    <ul class="navbar__list">
            <li class="navbar__item"><a href="anasayfa.php">Ana Sayfa</a></li>
            <li class="navbar__item"><a href="">Kategoriler</a></li>
              </ul>
        </nav>
    </header>
    <main>
    <div class="category-list">
    <div class="category-item action-movies" style="background-image: url('trend.jpg'); background-size: cover; background-position: center;">
            <a href="trend.php">Trendler</a>
        </div>
        <div class="category-item action-movies" style="background-image: url('popmuzik.jpg'); background-size: cover; background-position: center;">
            <a href="popturu.php">POP Müzik</a>
        </div>
        <div class="category-item action-movies" style="background-image: url('rapmuzik.jpg'); background-size: cover; background-position: center;">
            <a href="rapturu.php">RAP Müzik</a>
        </div>
        <div class="category-item action-movies" style="background-image: url('rock.jpg'); background-size: cover; background-position: center;">
            <a href="rockturu.php">Rock Müzik</a>
        </div>
        <div class="category-item action-movies" style="background-image: url('turku.jpg'); background-size: cover; background-position: center;">
            <a href="turku.php">Türkü</a>
        </div>
        <!-- Diğer kategorilerin linklerini de buraya ekleyin -->
    </div>
    
</main>

</body>
</html>
