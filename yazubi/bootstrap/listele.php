<?php
include 'header.html';

$servername = "localhost";
$username = "root";
$sifre = "";
$dbname = "yazubi";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $sifre);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
<div class="container">
  <h2>Kullanıcı Listesi</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Ad</th>
        <th>Soyadı</th>
        <th>Sifre</th>
        <td></td>
      </tr>
    </thead>
    <tbody>
      <?php
      $stmt = $conn->query("SELECT * FROM uyeler order by id desc");
      $uyeler = $stmt->fetchAll();
      foreach ($uyeler as $uye) {
        ?>
         <tr>
          <td><?= $uye['isim'] ?></td>
          <td><?= $uye['kullanici_adi'] ?></td>
          <td><?= $uye['sifre']?></td>
          <td><a href="sil.php?id=<?= $uye['id']?>">Sil</a></td>
        </tr>
        <?php
      }
      ?>
    </tbody>
  </table>
</div>


<?php
include 'footer.html';
?>