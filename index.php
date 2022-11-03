<?php

include ('config.php');

?>

<!DOCTYPE html>
<html>
<head>
  <title>eKoperasi</title>
</head>
<body>
<style>
  body{
    background-color: #AFEEEE
  }
  th,td,tr{
    background-color: white;
  }
</style>
<center>

  <p onclick="myfunction()" id="p">SELAMAT DATANG KE SISTEM eKOPERASI KOLEJ METRO</p>
  <script>
    function myfunction(p){
      document.getElementById('p').style.color="purple";
      document.getElementById('p').style.fontFamily="Brush Script MT";
    }

    function changeIm(){
      document.getElementById('img').src="imejBanner1.jpg";
    }

    function changeImg(){
      document.getElementById('img').src="imejBanner2.jpg";
    }

  </script>
  <img src="imejBanner1.jpg" width="55%" id="img" onmouseover="changeImg()" onmouseout="changeIm()">

  <br><br>
  <table border="2px">
    <tr>
      <td width="auto" text align="center">ID ITEM</td>
            <td width="auto" text align="center">TARIKH ITEM MASUK</td>
            <td width="auto" text align="center">NAMA</td>
            <td width="auto" text align="center">KATEGORI</td>
            <td width="auto" text align="center">KUANTITI</td>
            <td width="auto" text align="center">HARGA SEUNIT</td>
    </tr>

<?php
$result=mysqli_query($connect, "SELECT * FROM jadual_item");
while($row=mysqli_fetch_array($result))

{
  echo "<tr>";
  echo "<td>" . $row["id_item"]."</td>";
  echo "<td>" . $row["tarikh_masuk"]."</td>";
  echo "<td>" . $row["nama_item"]."</td>";
  echo "<td>" . $row["kategori_item"]."</td>";
  echo "<td>" . $row["kuantiti_item"]."</td>";
  echo "<td>" . $row["harga_seunit"]."</td>";
  echo "</tr>";
}

echo "</table>";
echo "</center>";

?>

</center>
</body>
</html>
