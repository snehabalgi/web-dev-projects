<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Season 1</title>
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
    The Witcher: Season 1
  </h1>
  <div id="cs" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#cs" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#cs" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#cs" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="season1_ss3.jpg.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="season1_ss2.jpg.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="season1_ss4.jpg.jpg" class="d-block w-100" alt="...">
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
            Episode 1: The End's Beginning
          </strong>
          <p>Hostile townsfolk and a cunning mage greet Geralt in the town of Blaviken. Ciri finds her royal world upended when Nilfgaard sets its sights on Cintra.</p>
        </div>
      </div>
      <div class="col">
        <div class="p-3 border" style="height: 300px; padding: 10px;
        box-shadow: 3px 5px 9px white;">
          <strong>
            Episode 2: Four Marks
          </strong>
          <p>Bullied and neglected, Yennefer accidentally finds a means of escape. Geralt's hunt for a so-called devil goes to hell. Ciri seeks safety in numbers.</p>
        </div>
      </div>
      <div class="col">
        <div class="p-3 border" style="height: 300px; padding: 10px;
        box-shadow: 3px 5px 9px white;">
          <strong>
            Episode 3: Betrayer Moon
          </strong>
          <p>Geralt takes on another Witcher's unfinished business in a kingdom that is stalked by a ferocious beast; at a brutal cost, Yennefer forges a magical new future.</p>
        </div>
      </div>
      <div class="col">
        <div class="p-3 border" style="height: 300px; padding: 10px;
        box-shadow: 3px 5px 9px white;"><strong>Episode 4: Of Banquets, Bastards and Burials</strong>
          <p>Against his better judgement, Geralt accompanies Jaskier to a royal ball; Ciri wanders into an enchanted forest; Yennefer attempts to protect her charges.</p>
        </div>
      </div>
      <div class="col">
        <div class="p-3 border" style="height: 300px; padding: 10px;
        box-shadow: 3px 5px 9px white;"><strong>Episode 5: Bottled Appetites</strong>
          <p>Heedless of warnings, Yennefer seeks a cure to restore what she has lost; Geralt inadvertently puts Jaskier in peril; the search for Ciri intensifies.</p>
        </div>
      </div>
      <div class="col">
        <div class="p-3 border" style="height: 300px; padding: 10px;
        box-shadow: 3px 5px 9px white;"><strong>Episode 6: Rare Species</strong>
          <p>A mysterious man tries to entice Geralt to join the hunt for a rampaging dragon, a quest that attracts a familiar face. Ciri questions whom she can trust.</p>
        </div>
      </div>
      <div class="col">
        <div class="p-3 border" style="height: 300px; padding: 10px;
        box-shadow: 3px 5px 9px white;"><strong>Episode 7: Before a Fall</strong>
          <p>
            With the Continent at risk from Nilfgaard's rising power, Yennefer revisits her past; Grant reconsiders his obligation to the Law of Surprise.
          </p>
        </div>
      </div>
      <div class="col">
        <div class="p-3 border" style="height: 300px; padding: 10px;
        box-shadow: 3px 5px 9px white;"><strong>Episode 8: Much More</strong>
          <p>
            A terrifying pack of foes lays Geralt low. Yennefer and her fellow mages prepare to fight back. A shaken Ciri depends on the kindness of a stranger.
          </p>
        </div>
      </div>
      <div class="col">
        <div class="p-3" style="height: 300px; border: 2px solid white; padding: 10px;
        box-shadow: 5px 10px 18px rgb(247, 61, 147);">
          <strong style="color: rgb(247, 61, 147);">Season 2</strong>
          <p>Geralt embraces his destiny as he protects Ciri from the forces battling for control of the Continent — and from the mysterious power she possesses.</p>
          <a href="season2.php" class="btn btn-light">More Info!</a>
        </div>
      </div>
    </div>
  </div>
  <div class="content" style="padding-right: 10rem; padding-left: 10rem;">
    <h3 style="border-bottom: 1px solid gray;">Videos</h3>
  </div>
  <div class="embed-responsive embed-responsive-16by9" style="padding-left: 10rem; padding-right:10rem;">
    <iframe class="embed-responsive-item" width="504" height="283" src="https://www.youtube.com/embed/c6zJ7fJ5fKs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br><br>
    <iframe class="embed-responsive-item" width="504" height="283" src="https://www.youtube.com/embed/7zbKmncmIPQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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