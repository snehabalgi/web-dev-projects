<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Wither: Login</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="js/bootstrap.js"></script>
  <style>
    .gradient-custom-2 {
      background: rgb(4,4,4);
background: linear-gradient(90deg, rgba(4,4,4,1) 26%, rgba(108,109,122,1) 100%);
}

@media (min-width: 768px) {
.gradient-form {
height: 100vh !important;
}
}
@media (min-width: 769px) {
.gradient-custom-2 {
border-top-right-radius: .3rem;
border-bottom-right-radius: .3rem;
}
}
  </style>
  <script>
    alert("HELLO THERE!\n\n   Enter the following to login:\n   username: John  password: *Johndoe6\n\nOR REGISTER!");
  </script>
</head>
<body>
<form action="login.php" method="post">

<?php if (isset($_GET['error'])) { ?>

    <p class="error"><?php echo $_GET['error']; ?></p>

<?php } ?>
<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="logoE.jpg"
                    style="height: 85px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">The World of Witcher</h4>
                </div>

                <form>

<div class="form-outline mb-4">
<label class="form-label" for="uname">Username</label>
  <input type="text" name="uname" class="form-control" />
</div>

<div class="form-outline mb-4">
<label class="form-label" for="password">Password</label>
  <input type="password" name="password" class="form-control" />
</div>

<div class="text-center pt-1 mb-5 pb-1">
  <button class="btn btn-dark btn-block fa-lg gradient-custom-2 mb-3" type="submit" style="width: 100px;">Login</button>
  <a href="register.php" class="btn btn-dark btn-block fa-lg gradient-custom-2 mb-3" type="submit" style="width: 100px;">Register</a>
</div>


</form>

</div>
</div>
<div class="col-lg-6 d-flex align-items-center gradient-custom-2">
<div class="text-white px-3 py-4 p-md-5 mx-md-4">
<h4 class="mb-4">The Witcher</h4>
    <p class="small mb-0">The Witcher is a Polish-American fantasy drama television series created by Lauren Schmidt Hissrich,based on the book series of the same name by Polish writer Andrzej Sapkowski. Set on a fictional, medieval-inspired landmass known as "the Continent", The Witcher explores the legend of Geralt of Rivia and Princess Ciri, who are linked to each other by destiny. It stars Henry Cavill, Freya Allan and Anya Chalotra.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

</form>
</body>
</html>