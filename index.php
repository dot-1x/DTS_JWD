<?php
include "./crud/koneksi.php";
$QUERY = "SELECT * FROM user";
$RESULTS = mysqli_query($KONEKSI, $QUERY);
if ($_POST){
    print_r($_POST);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Butsrap</title>
    <link rel="stylesheet" href="bootstrap/src/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand">MyShit</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Data</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Categories
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">A</a></li>
                      <li><a class="dropdown-item" href="#">B</a></li>
                    </ul>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </form>
              </div>
            </div>
        </nav>
        <div class="p-5 bg-light">
            <h1>Welcome to ma world</h1>
            <div class="row mt-3">
                <div class="col-lg-4">
                    <form action="" method="post">
                        <div class="row g-3">
                            <div class="col-sm-7">
                                <input type="text" class="form-control" placeholder="name" aria-label="Name">
                            </div>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" placeholder="email" aria-label="email">
                            </div>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" placeholder="telp" aria-label="Telephone">
                            </div>
                            <div class="col-sm-7">
                              <!-- <input type="radio" class="form-control" placeholder="gender" aria-label="gender"> -->
                              <input type="radio" name="gender" value="L"> Laki Laki
                            </div>
                            <div class="col-sm-7">
                              <input type="radio" name="gender" value="P"> Perempuan
                            </div>
                        </div>
                        <div class="row-sm mt-5">
                            <button type="submit" class="btn btn-primary">Sabmit</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <td>No.</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Number</td>
                            <td>Gender</td>
                        </thead>
                        <?php foreach ($RESULTS as $key => $value) {?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $value['nama'] ?></td>
                                <td><?= $value['email'] ?></td>
                                <td><?= $value['telp'] ?></td>
                                <td><?= $value['jk'] ?></td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
                <div class="col-lg-4">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore sunt provident dolores at quo hic odio tenetur, excepturi ipsa adipisci placeat, aperiam sint veritatis dignissimos mollitia obcaecati est quos voluptatum?</p>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="bootstrap/src/js/bootstrap.bundle.min.js"></script>
</html>