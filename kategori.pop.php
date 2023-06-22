<?php
// Veritabanı bağlantısı
$servername = "localhost";
$username = "serkur";
$password = "190525";
$dbname = "sarki_onerileri";

$conn = new mysqli($servername, $username, $password, $dbname);

// Hata kontrolü
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Pop şarkılarını veritabanından çekme
$sql = "SELECT * FROM sarkilar WHERE sarki_tur='pop'";
$result = $conn->query($sql);

// Çekilen şarkıların görsellerini ve metinlerini slider içine ekleme
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "<div class='slide'>";
      echo "<a href='" . $row["sarki_dinleme_linki"] . "' target='_blank'><img src='" . $row["sarki_resim_url"] . "' alt='" . $row["sarki_adi"] . "' class='song-img'></a>";
      echo "<p>" . $row["sarki_adi"] . "</p>";
      echo "</div>";
    }
  } else {
    echo "0 results";
  }
  
  

$conn->close();
?>
