<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Season 2</title>
  <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel = "Stylesheet" href = "style.css">
    <style>
      body{
        background-attachment: fixed;
        background-color: black;
      }
      [class*="row"]{
        background-color: black;
      }
      [class*="col"]{
        border: none;
        background-color: black;
      }
      [class*="p"]{
        background-color: black;
      }

    </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="#">
      <img src="logoE.jpg" alt="" width="50px" height="50px">
    </a>
    <a class="navbar-brand" href="https://www.netflix.com/in/title/80189685">The Witcher</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
  <h1 class="display-2" style="color: rgb(231, 231, 231);">
    The Witcher: Season 2
  </h1>
  <div id="cs" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#cs" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#cs" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#cs" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="season2_ss2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="season2_ss5.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="season2_ss4.jpg" class="d-block w-100" alt="...">
      </div>  
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#cs" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#cs" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
    </button>
  </div>
  <br><br>
  <div class="content" style="padding-right: 10rem; padding-left: 10rem;">
    <h3 style="border-bottom: 1px solid gray;">Premise</h3>
    <p>
      The witcher Geralt, a mutated monster hunter, struggles to find his place in a world where people often prove more wicked than beasts.
      <br>
      The Witcher is a TV series exclusive to Netflix, based on the Witcher series by Andrzej Sapkowski, who serves as a creative consultant on the show. It was announced on May 17, 2017, and its first season was released on December 20, 2019.
      </p>
  </div><br>
  <div class="content" style="padding-right: 10rem; padding-left: 10rem;">
    <h3 style="border-bottom: 1px solid gray;">Episodes</h3>
  </div>
  <div class="container">
    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
      <div class="col">
        <div class="p-3 border" style="height: 300px; padding: 10px;
        box-shadow: 3px 5px 9px white;">
          <strong>
            Episode 1: A Grain of Truth

          </strong>
          <p>Geralt sets off with Ciri on a journey that leads him to an old friend; after the Battle of Sodden, Tissaia shows no mercy in her search for information.</p>
        </div>
      </div>
      <div class="col">
        <div class="p-3 border" style="height: 300px; padding: 10px;
        box-shadow: 3px 5px 9px white;">
          <strong>
            Episode 2:  Kaer Morhen
          </strong>
          <p>Seeking a safe place for Ciri, Geralt heads for home, but danger lurks everywhere, even at Kaer Morhen. Yennefer's dreams could be the key to her freedom.</p>
        </div>
      </div>
      <div class="col">
        <div class="p-3 border" style="height: 300px; padding: 10px;
        box-shadow: 3px 5px 9px white;">
          <strong>
            Episode 3:  What Is Lost
          </strong>
          <p>Geralt takes on another Witcher's unfinished business in a kingdom that is stalked by a ferocious beast; at a brutal cost, Yennefer forges a magical new future.</p>
        </div>
      </div>
      <div class="col">
        <div class="p-3 border" style="height: 300px; padding: 10px;
        box-shadow: 3px 5px 9px white;"><strong>Episode 4: Redanian Intelligence</strong>
          <p>A guest at Kaer Morhen extends a guiding hand to Ciri and an invitation to Geralt; on the run in Redania, Yennefer seeks safety below ground.</p>
        </div>
      </div>
      <div class="col">
        <div class="p-3 border" style="height: 300px; padding: 10px;
        box-shadow: 3px 5px 9px white;"><strong>Episode 5: Turn Your Back
        </strong>
          <p>As a powerful mage joins the hunt for Ciri, she cuts a deal with Vesemir over his extraordinary discovery; Geralt explores the mystery of the monoliths.</p>
        </div>
      </div>
      <div class="col">
        <div class="p-3 border" style="height: 300px; padding: 10px;
        box-shadow: 3px 5px 9px white;"><strong>Episode 6: Dear Friend...</strong>
          <p>A close friend is lost -- and another found -- as Geralt helps Ciri learn more about her power; Cahir warns Fringilla to focus on their primary mission.</p>
        </div>
      </div>
      <div class="col">
        <div class="p-3 border" style="height: 300px; padding: 10px;
        box-shadow: 3px 5px 9px white;"><strong>Episode 7:  Voleth Meir
        </strong>
          <p>
            Geralt turns to a humble bard for help; Yennefer realizes that Ciri is very special; tensions rise on the eve of Emperor Emhyr's visit to Cintra.
          </p>
        </div>
      </div>
      <div class="col">
        <div class="p-3 border" style="height: 300px; padding: 10px;
        box-shadow: 3px 5px 9px white;"><strong>Episode 8: Family</strong>
          <p>
            Geralt faces off with a demon targeting his nearest and dearest while the most powerful players on the continent ramp up their pursuit of Ciri.
          </p>
        </div>
      </div>
      <div class="col">
        <div class="p-3" style="height: 300px; border: 2px solid white; padding: 10px;
        box-shadow: 5px 10px 18px rgb(247, 61, 147);">
          <strong style="color: rgb(247, 61, 147);">The Witcher: Blood Origin      </strong><span class="badge" style="background-color: white; color:black;">New</span><br>
          <p>Before the world of The Witcher, seven outcasts in the elven world unite in a blood quest against an unstoppable power.</p>
          <a href="prequal.php" class="btn btn-light">More Info!</a>
        </div>
      </div>
    </div>
  </div>
  <div class="content" style="padding-right: 10rem; padding-left: 10rem;">
    <h3 style="border-bottom: 1px solid gray;">Videos</h3>
  </div>
  

  <div class="embed-responsive embed-responsive-16by9" style="padding-left: 10rem; padding-right:10rem;">
    <iframe class="embed-responsive-item" width="504" height="283" src="https://www.youtube.com/embed/_Mjhw6q7E80" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br><br>
    <iframe class="embed-responsive-item" width="504" height="283" src="https://www.youtube.com/embed/jFiolzfJP-Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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