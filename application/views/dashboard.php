<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Robo de vehiculos</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href=""><?php {$udata = $this->session->userdata('UserLoginSession'); echo 'Bienvenido'.' '.$udata['username']. ' al reporte de tu vehiculo'; }?></a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li>
                    <a class="nav-link" href="<?=base_url('welcome/logout')?>">Logout</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
              </ul>
<!--              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form> -->
            </div>
          </div>
        </nav>
        <br>
        <div class="container">
            <h2>Mis reportes</h2>
        </div>
        <br>
        <div class="container">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Placas</th>
                  <th scope="col">Modelo de Automovil</th>
                  <th scope="col">Fecha de robo</th>
                  <th scope="col">Nombre del propietario</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td colspan="2">Larry the Bird</td>
                  <td>@twitter</td>
                  <td>@mdo</td>
                </tr>
              </tbody>
            </table>
        </div>
  </body>


<!-- <?php 
//if($this->session->userdata('UserLoginSession'))

/*{
    $udata = $this->session->userdata('UserLoginSession');
    echo 'Bienvenido'.' '.$udata['username'];
}
else
{
    redirect(base_url('welcome/login'));
}*/



 ?> -->

 </html>
 <!-- <a href="<?=base_url('welcome/logout')?>">Logout</a> -->