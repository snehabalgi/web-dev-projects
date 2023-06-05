<?php
	$userName = $_POST['un'];
	$password = $_POST['pass'];
  $email = $_POST['email'];
	
	$conn = new mysqli('localhost','root','','witcher');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into users(username, email, password) values(?, ?, ?)");
		$stmt->bind_param("sss", $userName, $email, $password);
		$execval = $stmt->execute();
		$stmt->close();
		$conn->close();
	}
?>
<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Witcher: Home</title>
  <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel = "Stylesheet" href = "style.css">
    <style>
      body {
        background-image: url("background.jpg");
        background-attachment: fixed;
        background-color: #cccccc;
      }
    </style>
    <script>
      alert("Welcome to the Witcher universe!!");
    </script>
</head>
<body>
  <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="#">
      <img src="logoE.jpg" alt="" width="50px" height="50px">
    </a>
    <a class="navbar-brand" href="https://www.netflix.com/in/title/80189685">The Witcher</a>
    <button id="btnTog" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="myDiv1 navbar-collapse">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="homePage.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Characters
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="https://en.wikipedia.org/wiki/Henry_Cavill">Henry Cavill</a></li>
            <li><a class="dropdown-item" href="https://en.wikipedia.org/wiki/Freya_Allan">Freya Allan</a></li>
            <li><a class="dropdown-item" href="https://en.wikipedia.org/wiki/Anya_Chalotra">Anya Chalotra</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="https://en.wikipedia.org/wiki/The_Witcher_(TV_series)">The Witcher wikipedia </a></li>
          </ul>
        </li>
      </ul>
      <ul>
        <ul>
          <div class="input-group" style="padding-top: 1rem;">
            <a href="index.php" class="btn btn-secondary">Logout</a>
          </div>
        </ul>
      </ul>
    </div>
  </nav>
  <h1 class="display-1">
    The Witcher (Netflix Series)
  </h1>
  <div class="title">
    <p>Creators: Lauren Schmidt Hissrich</p>
  </div>
  <br>
  <div class="content" style="padding-left: 10rem; padding-right: 10rem;">
    <h3 style="border-bottom: 1px solid gray;">Cast</h3>
  </div>
  <div class="mydivA">
    <div class="accordion accordion-flush" id="accFlush">
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            <b>Main Cast</b> 
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accFlush">
          <div class="accordion-body">
            <ul value="disc" style="text-align: left;">
              <li>Henry Cavill as Geralt of Rivia</li>
              <li>Anya Chalotra as Yennefer of Vengerberg</li>
              <li>Freya Allan as Ciri, Cirilla Fiona Elen Riannon, the crown princess of Cintra</li>
              <li>Eamon Farren as Cahir Mawr Dyffryn aep Ceallach, nicknamed the “Black Knight”</li>
              <li>Joey Batey as Jaskier</li>
              <li>MyAnna Buring as Tissaia de Vries</li>
              <li>Mimî M. Khayisa as Fringilla Vigo</li>
              <li>Anna Shaffer as Triss Merigold</li>
              <li>Royce Pierreson as Istredd</li>
              <li>Wilson Mbomio as Dara</li>
              <li>Mahesh Jadu as Vilgefortz of Roggeveen</li>
              <li>Tom Canton as Filavandrel</li>
              <li>Mecia Simson as Francesca Findabair</li>
              <li>Kim Bodnia as Vesemir</li>
              </ul>         
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo" accordion-btn-color="white">
            <b>Recuring Cast</b>
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
            <ul value="disc" style="text-align: left;">
              <li>Jodhi May as Queen Calanthe</li>
              <li>Adam Levy as Mousesack</li>
              <li>Björn Hlynur Haraldsson as King Eist Tuirseach</li>
              <li>Lars Mikkelsen as Stregobor, resident mage</li>
              <li>Therica Wilson-Read as Sabrina Glevissig</li>
              <li>Shaun Dooley as King Foltest</li>
              <li>Terence Maynard as Artorius Vigo</li>
              <li>Ania Marson as Voleth Meir</li>
              <li>Ed Birch as Vizimir, the king of Redania</li>
              <li>Chris Fulton as Rience</li>
            </ul>
          </div>
        </div>
      </div>
  </div>
  <br><br>
  <div class="content">
    <h3 style="border-bottom: 1px solid gray;">Premise</h3>
    <p>
      The Witcher is a Polish-American fantasy drama television series created by Lauren Schmidt Hissrich,
      based on the book series of the same name by Polish writer Andrzej Sapkowski. Set on a fictional,
      medieval-inspired landmass known as "the Continent", The Witcher explores the legend of Geralt of 
      Rivia and Princess Ciri, who are linked to each other by destiny. It stars Henry Cavill, Freya Allan
      and Anya Chalotra.
      <br>
      The first season consisted of eight episodes and was released on Netflix in its entirety on December
      20, 2019. It was based on The Last Wish and Sword of Destiny, which are collections of short stories
      that precede the main Witcher saga. The second season, also consisting of eight episodes, was released 
      on December 17, 2021. In September 2021, Netflix renewed the series for a third season. An animated 
      origin story film, The Witcher: Nightmare of the Wolf, was released on August 23, 2021, while a prequel 
      miniseries, The Witcher: Blood Origin, will be released in 2022.
      </p>
  </div>
  <br>
  <div class="content">
    <h3 style="border-bottom: 1px solid gray;">Synopsis</h3>
        <p>
          The story begins with Geralt of Rivia, Crown Princess Ciri of Cintra, and the sorceress Yennefer of 
          Vengerberg at different points of time, exploring formative events that shape their characters throughout 
          first season, before eventually merging into a single timeline.
          Geralt and Ciri are linked by destiny since before she was born when he unknowingly demanded her as a 
          reward for his services by invoking "the Law of Surprise". After the two finally meet, Geralt becomes the 
          princess's protector and must help her and fight against her various pursuers to prevent her Elder Blood 
          and powerful magic from being used for malevolent purposes and keep Ciri and their world safe.
        </p>
  </div>
  <br><br>
  <div class="content">
    <h3 style="border-bottom: 1px solid gray;">Seasons</h3>
  </div>
  <div class="container-sm">
    <div class="row">
      <div class="col-md-4 col-sm-6 col-xs-12">
        The Witcher: Season 1 <br>
        <img src="season1.jpg" alt="" class="img-fluid float rounded"><br><br>
        <a href="https://youtu.be/ndl1W4ltcmg" class="btn btn-light">Watch trailer!</a>
        <a href="season1.php" class="btn btn-outline-light">More Info!</a>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        The Witcher: Season 2 <br>
        <img src="season2.jpg" alt="" class="img-fluid float rounded"><br><br>
        <a href="https://youtu.be/TJFVV2L8GKs" class="btn btn-light">Watch trailer!</a>
        <a href="season2.php" class="btn btn-outline-light">More Info!</a>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        The Witcher: Blood Origin <span class="badge">New</span><br>
        <img src="prequel.jpg" alt="" class=" img-fluid float rounded"><br><br>
        <a href="https://youtu.be/mawzQRu1Kc4" class="btn btn-light">Watch teaser!</a>
        <a href="prequal.php" class="btn btn-outline-light">More Info!</a>
      </div>
    </div>
  </div>
  <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
      integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
      crossorigin="anonymous"
    ></script>
</body>
</html>

<?php 

}else{

     header("Location: index.php");

     exit();

}

 ?>