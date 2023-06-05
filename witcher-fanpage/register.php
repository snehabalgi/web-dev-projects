<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="js/bootstrap.js"></script>
  <script>

var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");
var emailVal=document.getElementById("e");

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
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
</head>
<body>
  <form action="insert.php" method="post">
    <section class="h-100 gradient-form" style="background-color: white;">
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
    <label class="form-label" for="uname">Enter your username:</label>
      <input type="text" name="un" class="form-control" placeholder="Ex: John Doe" />
    </div>

    <div class="form-outline mb-4">
    <label class="form-label" for="email">Enter Email:</label>
      <input type="text" name="email" id="e" class="form-control" pattern="^([a-zA-Z0-9_\-\.])+@([a-zA-Z0-9_\-\.])+\.([a-zA-Z]{2,5})" title="please enter valid email" placeholder="john@gmail.com"/>
    </div>

    <div class="form-outline mb-4">
    <label class="form-label" for="password">Set Password:</label>
      <input type="password" name="pass" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"/>
    </div>
    
    <div class="text-center pt-1 mb-5 pb-1">
      <button class="btn btn-dark btn-block fa-lg gradient-custom-2 mb-3" type="submit" style="width: 100px;">Done!</button>
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