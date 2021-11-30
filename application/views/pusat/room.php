<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Bootstrap CSS -->
  <link href="<?= base_url('assets/'); ?>https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
    crossorigin="anonymous" />

  <!-- My Font -->
  <link href="<?= base_url('assets/'); ?>  https://fonts.googleapis.com/css2?family=Montserrat&display=swap"
    rel="stylesheet" />

  <!-- font awesome -->
  <link rel="stylesheet" type="text/css"
    href="<?= base_url('assets/'); ?>fontawesome/fontawesome-free-5.15.3-web/css/fontawesome.css" />
  <link href="<?= base_url('assets/'); ?>vendor/fontawesomefree/css/all.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/font-awesome.css">
  <!-- My Css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/daftar.css" />
  <!-- <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet"> -->



  <title>room chat</title>
</head>
<style>
nav {
  display: flex;
  justify-content: space-between;
  margin-left: 120px;
  margin-top: -20px;
}

nav ul {
  display: flex;
  list-style: none;
  justify-content: space-between;
}

.navbar ul {
  display: flex;
  justify-content: space-between;
  list-style: none;
  margin-right: 10px;
  margin-left: -30px;
  font-size: 20px;
  margin-top: 25px;
}

i {
  color: black;
}

.avatar {
  /* Rounded border */
  border-radius: 50%;
  /* height: 64px;
  width: 64px; */
  /* display: flex; */
  /* justify-content: center; */
}

.avatar__image {
  /* Rounded border */
  border-radius: 50%;
  /* Take full size */
  height: 60%;
  width: 60%;
}

.foto {
  /* display: flex;
  justify-content: space-around; */
  margin-top: 5px;
  margin-left: 40px;
}
</style>

<body>
  <div class="container">
    <span class="border">
      <div class="form">
        <form class="user" method="post" action="">
          <id class="topbar">
            <nav class="navbar ">
              <div class="container-fluid">
                <h3><?= $judul;?></h3>
              </div>

              <a class="foto" href="<?= base_url('user');?>" id="userDropdown" role="button" ariahaspopup="true"
                aria-expanded="false">
                <div class="avatar justify-content-center align-items-center">
                  <img class="avatar__image" src="<?= base_url('assets/img/profile/') . $user['image'];?>" />
                </div>
              </a>

            </nav>
            <div class="navbar">
              <ul class="nav justify-content-center">
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="fa fa-commenting" aria-hidden="true"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="fa fa-users" aria-hidden="true"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="fa fa-phone" aria-hidden="true"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="fa fa-camera-retro" aria-hidden="true"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                </li>
              </ul>
            </div>
          </id>




          <a href="<?= base_url('autentifikasi/logout')?>" class="kembali text-right"><i class="fa fa-arrow-right"
              aria-hidden="true"></i></a>
        </form>
      </div>
  </div>
  </div>
  </span>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets/');
?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/');
?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>
  <script>
  $('.alert-message').alert().delay(3000).slideUp('slow');
  </script>
</body>

</html>