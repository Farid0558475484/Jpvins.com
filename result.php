<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="keywords" content="jpvins.com, Jpvins.com jp vins" />
  <meta name="author" content="Hacizade Farid Mecid oglu" />
  <meta name="description" content="Japanese cars, jpvins.com" />

  <link rel="icon" type="image/png" href="./assets/img/JpVins.com-1.png" />

  <title>Jpvins.com</title>
  <link rel="stylesheet" href="./assets/css/style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div id="logo">
    <img src="./assets/img/JpVins.com-1.png" alt="logo jpvins.com" class="img-fluid" />
  </div>

  <header>
    <div class="container-fluid">
      <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="../Admin/index.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./not-car-found.html">Why Jp Vins</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">FAQ</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>

  <main>
    <section class="mobile-menu">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Jpvins.com</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end w-100" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasMenuLabel">Menu</h5>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body d-flex justify-content-center">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="./index.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Why Jp Vins</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Search</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./not-car-found.html">Not car found</a>
                </li>
                <li class="nav-item">
                  <i class="fa-brands fa-facebook"></i>
                  <i class="fa-brands fa-square-instagram"></i>
                  <i class="fa-brands fa-tiktok"></i>
                </li>
              </ul>
            </div>
            <div class="footerInfo">
              <p>info@jpvins.com</p>
              <p>Jpvins.com 2017-2023</p>
            </div>
          </div>
        </div>
      </nav>
    </section>

    <section class="banner-section">
      <div class="row">
        <div class="col-md-12">
          <div class="hero-image">
            <div class="hero-text">
              <form class="d-flex" action="search.php" method="GET">
                <input class="form-control me-2" type="search" name="VIN" placeholder="Search VIN" aria-label="Search" />
                <button class="btn btn-outline-success" type="submit">
                  Search
                </button>
              </form>
              <div class='frame1239'>
                <img class="icons" src="./assets/img/Down.svg" />
                <div class='result'>
                  Result
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="table-result">
      <div class="container">
        <div class="row vegicle-details">
          <table class="table table-striped table-hover">
            <?php
            require_once '../Admin/Mod/db_connection.php';
            if (mysqli_connect_errno()) {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              exit();
            }
            $vin = htmlspecialchars($_GET['VIN']);
            // VIN numarası
            $vin = htmlspecialchars($_GET['VIN']);

            // SQL sorgusu
            $sql = "SELECT * FROM vegicledetails WHERE VIN='" . $vin . "'";

            // Sorguyu çalıştır ve sonuçları al
            $result = mysqli_query($conn, $sql);

            // Sonuçları dizi olarak al
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

            // Veritabanı bağlantısını kapat
            mysqli_close($conn); ?>

            <thead>
              <tr class="table-color">
                <th>Vegicle details</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Chassis number :</td>
                <td><?php echo $row['csNumber']; ?></td>
              </tr>
              <tr>
                <td>Manifacture date:</td>
                <td><?php echo $row['Manifacture']; ?></td>
              </tr>
              <tr>
                <td>Make:</td>
                <td><?php echo $row['Make']; ?></td>
              </tr>
              <tr>
                <td>Model:</td>
                <td><?php echo $row['Model']; ?></td>
              </tr>
              <tr>
                <td>Engine:</td>
                <td><?php echo $row['Engine']; ?></td>
              </tr>
              <tr>
                <td>Emission standard:</td>
                <td><?php echo $row['Emission']; ?></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="row mt-3 details">
          <table class="table table-striped table-hover">
            <thead>
              <tr class="table-color">
                <th>Details</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Title information 2 <img src="./assets/img/repair1.png" alt=""> </td>
                <td>
                  <?php
                  if ($row['Title2'] == 1) {
                    echo '<div class="oks"><span><img class="oks-icon" src="./assets/img/CheckGreen.svg"> Not Reported</span></div>';
                  } elseif ($row['Title2'] == 2) {
                    echo '<div class="oks"><span><img class="oks-icon" src="./assets/img/Closered.svg"> Reported</span></div>';
                  } elseif ($row['Title2'] == 3) {
                    echo '<div class="oks"><span><img class="oks-icon" src="./assets/img/nodata.svg"> No data</span></div>';
                  }
                  ?>
                </td>
              </tr>
              <tr>
                <td>Accident/Repair <img src="./assets/img/repair.png" alt=""></td>
                <td>
                  <?php
                  if ($row['AccidentRepair'] == 1) {
                    echo '<div class="oks"><span><img class="oks-icon" src="./assets/img/CheckGreen.svg"> Not Reported</span></div>';
                  } elseif ($row['AccidentRepair'] == 2) {
                    echo '<div class="oks"><span><img class="oks-icon" src="./assets/img/Closered.svg"> Reported</span></div>';
                  } elseif ($row['AccidentRepair'] == 3) {
                    echo '<div class="oks"><span><img class="oks-icon" src="./assets/img/nodata.svg"> No data</span></div>';
                  }
                  ?>
                </td>
              </tr>
              <tr>
                <td>Odometer rollback <img src="./assets/img/repair.png" alt=""></td>
                <td>
                  <?php
                  if ($row['Odrollback'] == 1) {
                    echo '<div class="oks"><span><img class="oks-icon" src="./assets/img/CheckGreen.svg"> Not Reported</span></div>';
                  } elseif ($row['Odrollback'] == 2) {
                    echo '<div class="oks"><span><img class="oks-icon" src="./assets/img/Closered.svg"> Reported</span></div>';
                  } elseif ($row['Odrollback'] == 3) {
                    echo '<div class="oks"><span><img class="oks-icon" src="./assets/img/nodata.svg"> No data</span></div>';
                  }
                  ?>
                </td>
              </tr>
              <tr>
                <td>Manufacturer recall <img src="./assets/img/repair.png" alt=""></td>
                <td>
                  <?php
                  if ($row['Mrecall'] == 1) {
                    echo '<div class="oks"><span><img class="oks-icon" src="./assets/img/CheckGreen.svg"> Not Reported</span></div>';
                  } elseif ($row['Mrecall'] == 2) {
                    echo '<div class="oks"><span><img class="oks-icon" src="./assets/img/Closered.svg"> Reported</span></div>';
                  } elseif ($row['Mrecall'] == 3) {
                    echo '<div class="oks"><span><img class="oks-icon" src="./assets/img/nodata.svg"> No data</span></div>';
                  }
                  ?>
                </td>
              </tr>
              <tr>
                <td>Safaty grade <img src="./assets/img/repair.png" alt=""></td>
                <td>
                  <?php
                  if ($row['Safatyg'] == 1) {
                    echo '<div class="oks"><span><img class="oks-icon" src="./assets/img/CheckGreen.svg"> Not Reported</span></div>';
                  } elseif ($row['Safatyg'] == 2) {
                    echo '<div class="oks"><span><img class="oks-icon" src="./assets/img/Closered.svg"> Reported</span></div>';
                  } elseif ($row['Safatyg'] == 3) {
                    echo '<div class="oks"><span><img class="oks-icon" src="./assets/img/nodata.svg"> No data</span></div>';
                  }
                  ?>
                </td>
              </tr>
              <tr>
                <td>Contaminatoin risk <img src="./assets/img/repair.png" alt=""></td>
                <td>
                  <?php
                  if ($row['Contaminatoin'] == 1) {
                    echo '<div class="oks"><span><img class="oks-icon" src="./assets/img/CheckGreen.svg"> Not Reported</span></div>';
                  } elseif ($row['Contaminatoin'] == 2) {
                    echo '<div class="oks"><span><img class="oks-icon" src="./assets/img/Closered.svg"> Reported</span></div>';
                  } elseif ($row['Contaminatoin'] == 3) {
                    echo '<div class="oks"><span><img class="oks-icon" src="./assets/img/nodata.svg"> No data</span></div>';
                  }
                  ?>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="row mt-3 repair-details">
          <table class="table table-striped table-hover">
            <thead>
              <tr class="table-color">
                <th>Accident / Repair History</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Collision </td>
                <td>
                  <?php
                  if ($row['Collision'] == 1) {
                    echo '<div class="oks"><span><img class="oks-icon" src="./assets/img/CheckGreen.svg"> Not Reported</span></div>';
                  } elseif ($row['Collision'] == 2) {
                    echo '<div class="oks"><span><img class="oks-icon" src="./assets/img/Closered.svg"> Reported</span></div>';
                  } elseif ($row['Collision'] == 3) {
                    echo '<div class="oks"><span><img class="oks-icon" src="./assets/img/nodata.svg"> No data</span></div>';
                  }
                  ?>
                </td>
              </tr>
              <tr>
                <td>Malfunction</td>
                <td>
                  <?php
                  if ($row['Malfunction'] == 1) {
                    echo '<div class="oks"><span><img class="oks-icon" src="./assets/img/CheckGreen.svg"> Not Reported</span></div>';
                  } elseif ($row['Malfunction'] == 2) {
                    echo '<div class="oks"><span><img class="oks-icon" src="./assets/img/Closered.svg"> Reported</span></div>';
                  } elseif ($row['Malfunction'] == 3) {
                    echo '<div class="oks"><span><img class="oks-icon" src="./assets/img/nodata.svg"> No data</span></div>';
                  }
                  ?>
                </td>
              </tr>
              <tr>
                <td>Theft</td>
                <td>
                  <?php
                  if ($row['Theft'] == 1) {
                    echo '<div class="oks"><span><img class="oks-icon" src="./assets/img/CheckGreen.svg"> Not Reported</span></div>';
                  } elseif ($row['Theft'] == 2) {
                    echo '<div class="oks"><span><img class="oks-icon" src="./assets/img/Closered.svg"> Reported</span></div>';
                  } elseif ($row['Theft'] == 3) {
                    echo '<div class="oks"><span><img class="oks-icon" src="./assets/img/nodata.svg"> No data</span></div>';
                  }
                  ?>
                </td>
              </tr>
              <tr>
                <td>Fire damage</td>
                <td>
                  <?php
                  if ($row['Fired'] == 1) {
                    echo '<div class="oks"><span><img class="oks-icon" src="./assets/img/CheckGreen.svg"> Not Reported</span></div>';
                  } elseif ($row['Fired'] == 2) {
                    echo '<div class="oks"><span><img class="oks-icon" src="./assets/img/Closered.svg"> Reported</span></div>';
                  } elseif ($row['Fired'] == 3) {
                    echo '<div class="oks"><span><img class="oks-icon" src="./assets/img/nodata.svg"> No data</span></div>';
                  }
                  ?>
                </td>
              </tr>
              <tr>
                <td>Water damage</td>
                <td>
                  <?php
                  if ($row['Waterd'] == 1) {
                    echo '<div class="oks"><span><img class="oks-icon" src="./assets/img/CheckGreen.svg"> Not Reported</span></div>';
                  } elseif ($row['Waterd'] == 2) {
                    echo '<div class="oks"><span><img class="oks-icon" src="./assets/img/Closered.svg"> Reported</span></div>';
                  } elseif ($row['Waterd'] == 3) {
                    echo '<div class="oks"><span><img class="oks-icon" src="./assets/img/nodata.svg"> No data</span></div>';
                  }
                  ?>
                </td>
              </tr>
              <tr>
                <td>Hall damage</td>
                <td>
                  <?php
                  if ($row['Halld'] == 1) {
                    echo '<div class="oks"><span><img class="oks-icon" src="./assets/img/CheckGreen.svg"> Not Reported</span></div>';
                  } elseif ($row['Halld'] == 2) {
                    echo '<div class="oks"><span><img class="oks-icon" src="./assets/img/Closered.svg"> Reported</span></div>';
                  } elseif ($row['Halld'] == 3) {
                    echo '<div class="oks"><span><img class="oks-icon" src="./assets/img/nodata.svg"> No data</span></div>';
                  }
                  ?>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </main>
  <br />
  <br />
  <br />
  <footer>
    <section>
      <div class="container">
        <div class="row">
          <div class="footerInfo">
            <p>info@jpvins.com</p>
            <p>Jpvins.com 2017-2023</p>
          </div>
        </div>
      </div>
    </section>
  </footer>

  <script src="./assets/index.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>