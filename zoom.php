<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
<?php
    include "koneksi.php";
    $id=$_GET['id'];
    $sql=mysqli_query($conn,"select * from foto,user where foto.userid=user.userid AND foto.fotoid=$id");
    while($data=mysqli_fetch_array($sql)){
 ?>
     <div class="container mt-4">
     <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-7">
      <img src="gambar/<?=$data['lokasifile']?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-5">
      <div class="card-body">
        <h5 class="card-title"><?=$data['judulfoto']?></h5>
        <p class="card-text"><?=$data['deskripsifoto']?></p>
        <p class="card-text"><small class="text-body-secondary"><?=$data['tanggalunggah']?></small></p>
        <div class="container text-center">
  <div class="row align-items-center">
    <div class="col">
    <h4><a href="like.php?fotoid=<?=$data['fotoid']?>" ><i class="bi bi-hand-thumbs-up-fill text-info"></i></i></a></h4>
    </div>
    <div class="col">
    <h4><a href="komentar.php?fotoid=<?=$data['fotoid']?>" ><i class="bi bi-chat-text-fill"></i></a></h4>
    </div>
    <div class="col">
    <h4><a href="#" ><i class="bi bi-hand-thumbs-down-fill"></i></a></h4>
    </div>
  </div>
</div>
      </div>
    </div>
  </div>
</div>
     </div>
<?php
    }
?>
</body>
</html>
