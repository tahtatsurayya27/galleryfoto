<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Landing</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container">
    <h1>Halaman Home</h1>
    <?php
        session_start();
        if(!isset($_SESSION['userid'])){
    ?>
            <ul>
                <li><a href="register.php">Register</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
    <?php
        }else{
    ?>   
        <p>Selamat datang <b><?=$_SESSION['namalengkap']?></b></p>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="album.php">Album</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="foto.php">foto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <?php
        }
    ?>
    


    <div class="container mx-auto mt-4">
            <div class="row">
                <?php
                    include "koneksi.php";
                    $sql=mysqli_query($conn,"select * from foto,user where foto.userid=user.userid");
                    while($data=mysqli_fetch_array($sql)){
                ?>

        <div class="col-md-4 ">
            <div class="card mt-3" style="width: 18rem;">
                <a href="zoom.php?id=<?=$data['fotoid']?>"><img src="gambar/<?=$data['lokasifile']?>" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title"><?=$data['judulfoto']?></h5>
                    <p class="card-text"><?=$data['namalengkap']?></p>
                    <p class="card-text"><?=$data['tanggalunggah']?></p>
                </div>
            </div>
    </div>

    <?php
            }
    ?>

    </table>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>


