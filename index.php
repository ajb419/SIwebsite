
<html>
  <head>
    <title>Seasonal Improvements</title>
    <link rel="stylesheet" type="text/css" href="source.css">
    <script src="source.JS"> </script>
    <?php include("formProcess.php"); ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  </head>
  <body>
      <div class="businessMessageContainer">
        <div class="header">
          <h1>Seasonal Improvements</h1>
          <p>Best remodeling and handyman company in Boise... really</p>
        </div>


        <div class="PMintroAndContact">
          <h2>Let me tell you what I'm all about...</h2>
        </div>
        <div class="professionalMessage">
          <p>I have spent nearly 15 years working in home remodeling. I specialize in interior remodeling as well as home maintenance. Think kitchens and bathrooms as well as handyman services.</p>
          <p>I am not a large scale business. I have a few hand picked guys that give me a hand keeping up with the work load. Other than that it's just me and my truck operating out of the garage of my home. This business model allows me to provide an unparalleled
            quality control and craftsmanship at better than market prices. Also, unlike larger contractors who search for bigger jobs, I thrive on small to mid-size projects. If you are in need of tile work, cabinet installs, bathroom/kitchen upgrades,
           drywall, painting or many other home remodeling services, consider giving me a call or sending me an email!</p>
       </div>

       <div class="PMintroAndContact">
         <p> Adam Berridge <br> 484-686-6739 <br> SeasonalImprovement@gmail.com <br> Visit Our <a href= "https://www.facebook.com/pages/category/Home-Improvement/Seasonal-improvements-1768905506749928/" target="_blank"> facebook page</a> and give us a like!</p>
      </div>
    </div>



    <!-- Container for the image gallery -->
    <div class="container">

      <!-- Full-width images with number text -->
      <div class="mySlides">
        <div class="numbertext">1 / 6</div>
          <img src="bathroomRemodel.JPG" style="width:auto; height:500px; display:block; margin-left:auto; margin-right:auto;">
      </div>

      <div class="mySlides">
        <div class="numbertext">2 / 6</div>
          <img src="glassTileAfter.JPG" style="width:auto; height:500px; display:block; margin-left:auto; margin-right:auto;">
      </div>

      <div class="mySlides">
        <div class="numbertext">3 / 6</div>
          <img src="stoneFireplace.JPG" style="width:auto; height:500px; display:block; margin-left:auto; margin-right:auto;">
      </div>

      <div class="mySlides">
        <div class="numbertext">4 / 6</div>
          <img src="subwayCloseUp.JPG" style="width:auto; height:500px; display:block; margin-left:auto; margin-right:auto;">
      </div>

      <div class="mySlides">
        <div class="numbertext">5 / 6</div>
          <img src="garageClosetAfter.JPG" style="width:auto; height:500px; display:block; margin-left:auto; margin-right:auto;">
      </div>

      <div class="mySlides">
        <div class="numbertext">6 / 6</div>
          <img src="tileFloor.JPG" style="width:auto; height:500px; display:block; margin-left:auto; margin-right:auto;">
      </div>

      <!-- Next and previous buttons -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>

      <!-- Image text -->
      <div class="caption-container">
        <p id="caption"></p>
      </div>

      <!-- Thumbnail images -->
      <div class="row">
        <div class="column">
          <img class="demo cursor" src="bathroomRemodel.JPG" style="width:100%; height:150px" onclick="currentSlide(1)" alt="full bathroom remodel">
        </div>
        <div class="column">
          <img class="demo cursor" src="glassTileAfter.JPG" style="width:100%; height:150px" onclick="currentSlide(2)" alt="glass tile backsplash and vent hood install ">
        </div>
        <div class="column">
          <img class="demo cursor" src="stoneFireplace.JPG" style="width:100%; height:150px" onclick="currentSlide(3)" alt="floor to cieling stone on fireplace">
        </div>
        <div class="column">
          <img class="demo cursor" src="subwayCloseUp.JPG" style="width:100%; height:150px" onclick="currentSlide(4)" alt="tile backsplash">
        </div>
        <div class="column">
          <img class="demo cursor" src="garageClosetAfter.JPG" style="width:100%; height:150px" onclick="currentSlide(5)" alt="garage closet build">
        </div>
        <div class="column">
          <img class="demo cursor" src="tileFloor.JPG" style="width:100%; height:150px" onclick="currentSlide(6)" alt="tile floor">
        </div>
      </div>
    </div>


    <div class="personalContainer">
      <div class="personalHeader">
        <h3><br>Let's get personal...</h3>
      </div>
      <div class="personalMessage">
        <p>Nobody enjoys Joe Smo contractor coming to their home, setting up shop, and acting like he owns the place. Let me tell you a little about myself. I am a husband, father, home remodeling contractor (obviously), and computer science major. My wife, Felicia, son, Troy, and I
        sold our house in the Philadelphia suburbs 3 years ago and moved into a 5th wheel trailer in search of mountains. After spending an incredible year on the road we decided to settle in Boise. Having already successfully operated a similiar business in the Philadelphia
        area for 4 years I decided to set up Seasonal Improvements here in Boise. I also enrolled in the computer science program at BSU and am currently in my junior year. Last but most definitely not least, my family and I just welcomed our newest member, Brookelynn, to the world this
        past March! Well, that's the bulk of my story. I hope you feel like you know me well enough to have me come to your home for your next project!</p>
      </div>
    </div>




    <div class="contactHeader">
      <h3><br>Shy? Me too sometimes. But if you fill out this form I promise to call.</h3>
    </div>


    <div class="contactContainer">
      <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">


        <label for="name">Name <br></label>
        <input type="text" id="name" name="name" value="<?= $name ?>" placeholder="What's your name?">
        <span class="error"><?= $nameError ?></span><br>

        <label for="phone">Phone Number <br></label>
        <input type="text" id="phone" name="phone" value="<?= $phone ?>" placeholder="How about a phone number..">
		<span class="error"><?= $phoneError ?></span><br>

        <label for="email">Email <br></label>
        <input type="text" id="email" name="email" value="<?= $email ?>" placeholder="Maybe an email too..">
        <span class="error"><?= $emailError ?></span><br>

        <label for="description">Description <br></label>
        <textarea type="text" id="description" name="description" style="height:200px" placeholder="Tell me about your project.."><?php if(isset($_POST['submit'])) { echo htmlentities ($_POST['description']);} ?></textarea>
		<br>
		<br>
        <button name="submit" type="submit" id="contactSubmit"  data-submit="...Sending">Submit</button>

        <div class="success"><?= $success ?></div>

      </form>
    </div>
    <div style="margin-top:500px"></div>
  </body>
</html>
