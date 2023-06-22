<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Ana Sayfa</title>
     <link rel="stylesheet" href="navbar.css" type="text/css">
    
     <style>  
.sarki-kutusu {
    display: inline-block;
    margin: 15px 0;
    padding: 15px;
    border: 0px solid #ccc;
    text-align: center;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-size: 20px;
    position: relative;
}


.sarki-kutusu img {
    width: 250px;
    height: 350px;
    object-fit: cover;
}

.sarki-kutusu:hover img {
    opacity: 0.7;
}

.sarki-kutusu:hover .dinle-butonu {
    display: block;
}

.dinle-butonu {
    display: none;
    background-color: #7b6cff;
    color: #fff;
    padding: 15px;
    cursor: pointer;
    position: absolute;
    bottom: 50%;
    left: 50%;
    transform: translate(-50%, 50%);
    z-index: 1;
}

.sarki-kutusu a {
    color: black;
    text-decoration: none;
}
</style>

    

    </style>
    
</head>
<header>
      <nav class="navbar">
         <ul class="navbar__list">
          <li class="navbar__item"><a href="anasayfa.php">Ana Sayfa</a></li>
          <li class="navbar__item"><a href="kategoriler.php">Kategoriler</a></li>
           </ul>
      </nav>
    </header>
<body>
<?php
    include 'db_connect.php';
    $conn = mysqli_connect($db_localhost, $db_username, $db_password, $db_name);
    if (!$conn) {
      die("Bağlantı hatası: " . mysqli_connect_error());
    }
    
// Şarkıları sorgula
$sql = "SELECT id, sarki_adi, sarki_resim_url, sarki_dinleme_linki  FROM sarkilar where sarki_tur='rap'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Verileri döngüyle al ve kutucukları oluştur
    while($row = $result->fetch_assoc()) {
        $sarkiId = $row["id"];
        $sarkiAdi = $row["sarki_adi"];
        $resimUrl = $row["sarki_resim_url"];
        $dinlemeUrl = $row["sarki_dinleme_linki"];

        // Şarkı adının 20 karakterle sınırlanması
        $sarkiAdiKisaltilmis = strlen($sarkiAdi) > 20 ? substr($sarkiAdi, 0, 17) . "..." : $sarkiAdi;

        echo '<div class="sarki-kutusu">';
        echo '<a href="'.$dinlemeUrl.'" target="_blank">'; // target="_blank" ekleyerek yeni sekmede açılmasını sağlayın
        echo '<img src="'.$resimUrl.'" alt="'.$sarkiAdi.'">';
        echo '<div class="dinle-butonu">Şarkıyı Dinle</div>';
        echo '<div>'.$sarkiAdiKisaltilmis.'</div>'; // Kısaltılmış şarkı adı kullanılıyor
        echo '</a>';
        echo '</div>';
    }
} else {
    echo "Hiç şarkı bulunamadı.";
}

    $conn->close();
?>
</body>
</html>
