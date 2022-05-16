<!DOCTYPE html>
<html>
<head>
<title>Coca Cola for Web3D</title>
<link rel="stylesheet" href="products.css">
<link rel="stylesheet" href="footer.css">
<link rel="stylesheet" href="logo.css">
<link rel="stylesheet" href="second_navigation.css">


<?php 

include("connection.php");


        $sql = "SELECT image_id, image_name, location FROM image";

        $result = $connection->query($sql);//->fetchArray(SQLITE3_ASSOC);

        $row = array();

        $i = 0;

         while($res = $result->fetchArray(SQLITE3_ASSOC)){

             if(!isset($res['image_id'])) continue;


              $row[$i]['image_name'] = $res['image_name'];
              $imageURL[$i] = 'uploads/'.$res["image_name"];

              $i++;

          }
 
          


?>


<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Pattaya&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



  <script src="https://www.x3dom.org/download/dev/x3dom.js"></script>
  <link rel="stylesheet" href="https://www.x3dom.org/download/dev/x3dom.css">
<!--     <link rel='stylesheet' type='text/css' href='http://www.x3dom.org/x3dom/release/x3dom.css'></link>
    <script type='text/javascript' src='http://www.x3dom.org/x3dom/release/x3dom.js'></script> -->

<style>
  .button{
    background: #d62d20;
    border: 0;
    color: #fff;
    padding: 8px 16px;
    transition: background 0.2s;
    font-size: 25px;
    font-family: 'Pattaya', sans-serif;
}

  .camera_buttons{
    text-align: center;
    margin-top: 25px;
  }
</style>

</head>

  <header>
    <div class="logo">
        <h1>Coca Cola</h1>
        <h2>enjoy</h2>

    </div>
  </header>

  <body>

  <ul>
    <li><a class="active" href="index.html">Home</a></li>
    <li><a href="contact.html">Contact</a></li>
    <li><a href="about.html">About</a></li>
    <li><a href="download.html">Downloads</a></li>
      <li><a href="reference.html">References</a></li>
  </ul>




  <x3d id="fanta" width='1000px' height='372px'> 
    <scene> 
        <Viewpoint id="beginFanta" position="-0.5 0.5 -10" orientation="-0.01451 0.99989 0.00319 3.15833" description="camera"></Viewpoint>
        <Viewpoint id="frontFanta" position="-0.5 0.5 -10" orientation="-0.01451 0.99989 0.00319 3.15833" description="camera"></Viewpoint>
        <Viewpoint id="leftFanta" position="2.70190 1.05153 -0.57128" orientation="-0.08205 0.99612 -0.03175 1.73722" fieldofview="2"description="camera"></Viewpoint>
        <Viewpoint id="rightFanta" position="-2.43383 1.07351 -1.28700" orientation="-0.00318 -0.99950 -0.03159 2.06609" fieldofview="2" description="camera"></Viewpoint>
        <Viewpoint id="topFanta" position="0.15087 4.78235 -1.75890" orientation="-0.00307 0.87466 0.48473 3.12040" fieldofview="2" description="camera"></Viewpoint>
      <Transform>
        <inline url="./images/FANTA.x3d" nameSpaceName="fanta" mapDEFToID="true" onclick=''/>
      </Transform>
    </scene> 
  </x3d>
  <div class="camera_buttons">
    <button  class="camera_buttons button" onclick="document.getElementById('rightFanta').setAttribute('set_bind','true');">Right</button>
    <button  class="camera_buttons button" onclick="document.getElementById('leftFanta').setAttribute('set_bind','true');">Left</button>
    <button  class="camera_buttons button" onclick="document.getElementById('frontFanta').setAttribute('set_bind','true');">Front</button>
    <button  class="camera_buttons button" onclick="document.getElementById('topFanta').setAttribute('set_bind','true');">Top</button>
  </div>

  

  <x3d id="powerade" width='1000px' height='372px'> 
    <scene> 
      <Viewpoint id="frontPowerade" position="0.5 5 -28" orientation="-0.01451 0.99989 0.00319 3.15833" description="camera"></Viewpoint>
      <Viewpoint id="rightPowerade" position="-2.43383 1.07351 -1.28700" orientation="-0.00318 -0.99950 -0.03159 2.06609" viewAll="true" description="camera"></Viewpoint>
      <Viewpoint id="leftPowerade" position="2.70190 1.05153 -0.57128" orientation="-0.08205 0.99612 -0.03175 1.73722" viewAll="true" description="camera"></Viewpoint>
      <Viewpoint id="topPowerade" position="0.55087 30.78235 -15.95890" orientation="-0.00307 0.87466 0.48473 3.12040" fieldofview="1" description="camera"></Viewpoint>
      <Transform>
        <inline url="./images/POWERADE.x3d" nameSpaceName="pwoerade" mapDEFToID="true" onclick=''/>
      </Transform>
    </scene> 
  </x3d>
    <div class="camera_buttons">
    <button  class="camera_buttons button" onclick="document.getElementById('rightPowerade').setAttribute('set_bind','true');">Right</button>
    <button  class="camera_buttons button" onclick="document.getElementById('leftPowerade').setAttribute('set_bind','true');">Left</button>
    <button  class="camera_buttons button" onclick="document.getElementById('frontPowerade').setAttribute('set_bind','true');">Front</button>
    <button  class="camera_buttons button" onclick="document.getElementById('topPowerade').setAttribute('set_bind','true');">Top</button>
  </div>



  <x3d id="water" width='1000px' height='372px'> 
    <scene> 
      <viewpoint id="frontWater" position="0.2607909964527506 5.428970228954179 20.887948669308187" orientation="0 0 0 0" description="camera" nearclippingplane="-1" farclippingplane="-1" fieldofview="0.75" centerofrotation="0,0,0" znear="-1" zfar="-1"></viewpoint>
        <Viewpoint id="leftWater" position="2.70190 1.05153 -0.57128" orientation="-0.08205 0.99612 -0.03175 1.73722"   viewAll="true" description="camera"></Viewpoint>
        <Viewpoint id="rightWater" position="-2.43383 1.07351 -1.28700" orientation="-0.00318 -0.99950 -0.03159 2.06609"  viewAll="true" description="camera"></Viewpoint>
        <Viewpoint id="topWater" position="0.15087 12.78235 -1.75890" orientation="-0.00307 0.87466 0.48473 3.12040" fieldofview="1" viewAll="true" description="camera"></Viewpoint>
      <Transform>
        <inline url="./images/WATER.x3d" nameSpaceName="water" mapDEFToID="true" onclick=''/>
      </Transform>
    </scene> 
  </x3d>
  <div class="camera_buttons">
    <button  class="camera_buttons button" onclick="document.getElementById('rightWater').setAttribute('set_bind','true');">Right</button>
    <button  class="camera_buttons button" onclick="document.getElementById('leftWater').setAttribute('set_bind','true');">Left</button>
    <button  class="camera_buttons button" onclick="document.getElementById('frontWater').setAttribute('set_bind','true');">Front</button>
    <button  class="camera_buttons button" onclick="document.getElementById('topWater').setAttribute('set_bind','true');">Top</button>
  </div>


<div class="uploadFunction"">
  <form method="POST" action="upload.php" enctype="multipart/form-data">
    <div class="form-group" style="background: #d62d20; border: 0; color: #fff; padding: 8px 16px; font-size: 25px; font-family: 'Pattaya', sans-serif; text-align: center; margin-top: 25px;">
      <label>Upload Images to Database</label>
      <input type="file" name="image" required="required" class="form-control"/>
    </div>
    <button class="btn btn-primary" name="upload" style="background: #d62d20; border: 25px; color: #fff; padding: 8px 16px; font-size: 25px; font-family: 'Pattaya', sans-serif; margin-top: 25px; margin-bottom: 25px; position: relative; top: 50%; left: 50%;">Upload</button>
  </form>
</div>




<div class="gallery">

   <div class="row">

          <h2>GALLERY FOR THE MODELS</h2>
          <h3>FANTA BOTTLE 500ML</h3>

          <img src="<?php echo $imageURL[0]; ?>" style="width:150px; height:150px" onclick="openModel();currentSlide(1)" class="hover-shadow cursor">

          <img src="<?php echo $imageURL[1]; ?>" style="width:150px; height:150px" onclick="openModel();currentSlide(2)" class="hover-shadow cursor">

          <img src="<?php echo $imageURL[2]; ?>" style="width:150px; height:150px" onclick="openModel();currentSlide(3)" class="hover-shadow cursor">

          <img src="<?php echo $imageURL[3]; ?>" style="width:150px; height:150px" onclick="openModel();currentSlide(4)" class="hover-shadow cursor">

          <img src="<?php echo $imageURL[4]; ?>" style="width:150px; height:150px" onclick="openModel();currentSlide(5)" class="hover-shadow cursor">

          <img src="<?php echo $imageURL[5]; ?>" style="width:150px; height:150px" onclick="openModel();currentSlide(6)" class="hover-shadow cursor">

        </div>

        <div class="row">
          <h3>SMARTWATER BOTTLE 500ML</h3>

          <img src="<?php echo $imageURL[6]; ?>" style="width:150px; height:150px" onclick="openModel();currentSlide(7)" class="hover-shadow cursor">

          <img src="<?php echo $imageURL[7]; ?>" style="width:150px; height:150px" onclick="openModel();currentSlide(8)" class="hover-shadow cursor">

          <img src="<?php echo $imageURL[8]; ?>" style="width:150px; height:150px" onclick="openModel();currentSlide(9)" class="hover-shadow cursor">

          <img src="<?php echo $imageURL[9]; ?>" style="width:150px; height:150px" onclick="openModel();currentSlide(10)" class="hover-shadow cursor">

          <img src="<?php echo $imageURL[10]; ?>" style="width:150px; height:150px" onclick="openModel();currentSlide(11)" class="hover-shadow cursor">

          <img src="<?php echo $imageURL[11]; ?>" style="width:150px; height:150px" onclick="openModel();currentSlide(12)" class="hover-shadow cursor">

        </div>

        <div class="row">
          <h3>POWERADE BOTTLE 500ML</h3>

          <img src="<?php echo $imageURL[12]; ?>" style="width:150px; height:150px" onclick="openModel();currentSlide(13)" class="hover-shadow cursor">

          <img src="<?php echo $imageURL[13]; ?>" style="width:150px; height:150px" onclick="openModel();currentSlide(14)" class="hover-shadow cursor">

          <img src="<?php echo $imageURL[14]; ?>" style="width:150px; height:150px" onclick="openModel();currentSlide(15)" class="hover-shadow cursor">

          <img src="<?php echo $imageURL[15]; ?>" style="width:150px; height:150px" onclick="openModel();currentSlide(16)" class="hover-shadow cursor">

          <img src="<?php echo $imageURL[16]; ?>" style="width:150px; height:150px" onclick="openModel();currentSlide(17)" class="hover-shadow cursor">

          <img src="<?php echo $imageURL[17]; ?>" style="width:150px; height:150px" onclick="openModel();currentSlide(18)" class="hover-shadow cursor">

        </div>



    <div id="myModel" class="model">
        <span class="close cursor" onclick="closeModel()">&times;</span>
        <div class="model-content">

          <div class="mySlides">
            <div class="numbertext">1 / 18</div>
            <img src="<?php echo $imageURL[0]; ?>" style="width:50%">
          </div>

          <div class="mySlides">
            <div class="numbertext">2 / 18</div>
            <img src="<?php echo $imageURL[1]; ?>" style="width:50%">
          </div>

          <div class="mySlides">
            <div class="numbertext">3 / 18</div>
            <img src="<?php echo $imageURL[2]; ?>" style="width:50%">
          </div>

          <div class="mySlides">
            <div class="numbertext">4 / 18</div>
            <img src="<?php echo $imageURL[3]; ?>" style="width:50%">
          </div>

          <div class="mySlides">
            <div class="numbertext">5 / 18</div>
            <img src="<?php echo $imageURL[4]; ?>" style="width:50%">
          </div>

          <div class="mySlides">
            <div class="numbertext">6 / 18</div>
            <img src="<?php echo $imageURL[5]; ?>" style="width:50%">
          </div>

          <div class="mySlides">
            <div class="numbertext">7 / 18</div>
            <img src="<?php echo $imageURL[6]; ?>" style="width:50%">
          </div>

          <div class="mySlides">
            <div class="numbertext">8 / 18</div>
            <img src="<?php echo $imageURL[7]; ?>" style="width:50%">
          </div>

          <div class="mySlides">
            <div class="numbertext">9 / 18</div>
            <img src="<?php echo $imageURL[8]; ?>" style="width:50%">
          </div>

          <div class="mySlides">
            <div class="numbertext">10 / 18</div>
            <img src="<?php echo $imageURL[9]; ?>" style="width:50%">
          </div>

          <div class="mySlides">
            <div class="numbertext">11 / 18</div>
            <img src="<?php echo $imageURL[10]; ?>" style="width:50%">
          </div>

          <div class="mySlides">
            <div class="numbertext">12 / 18</div>
            <img src="<?php echo $imageURL[11]; ?>" style="width:50%">
          </div>

          <div class="mySlides">
            <div class="numbertext">13 / 18</div>
            <img src="<?php echo $imageURL[12]; ?>" style="width:50%">
          </div>

          <div class="mySlides">
            <div class="numbertext">14 / 18</div>
            <img src="<?php echo $imageURL[13]; ?>" style="width:50%">
          </div>

          <div class="mySlides">
            <div class="numbertext">15 / 18</div>
            <img src="<?php echo $imageURL[14]; ?>" style="width:50%">
          </div>

          <div class="mySlides">
            <div class="numbertext">16 / 18</div>
            <img src="<?php echo $imageURL[15]; ?>" style="width:50%">
          </div>

          <div class="mySlides">
            <div class="numbertext">17 / 18</div>
            <img src="<?php echo $imageURL[16]; ?>" style="width:50%">
          </div>

          <div class="mySlides">
            <div class="numbertext">18 / 18</div>
            <img src="<?php echo $imageURL[17]; ?>" style="width:50%">
          </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <div class="caption-container">
          <p id="caption"></p>
        </div>

        <div class="column">
          <img class="demo cursor" src="<?php echo $imageURL[0]; ?>" style="width:50%" onclick="currentSlide(1)" alt="Image 1">
        </div>
        <div class="column">
          <img class="demo cursor" src="<?php echo $imageURL[1]; ?>" style="width:50%" onclick="currentSlide(2)" alt="Image 2">
        </div>
        <div class="column">
          <img class="demo cursor" src="<?php echo $imageURL[2]; ?>" style="width:50%" onclick="currentSlide(3)" alt="Image 3">
        </div>
        <div class="column">
          <img class="demo cursor" src="<?php echo $imageURL[3]; ?>" style="width:50%" onclick="currentSlide(4)" alt="Image 4">
        </div>
        <div class="column">
          <img class="demo cursor" src="<?php echo $imageURL[4]; ?>" style="width:50%" onclick="currentSlide(5)" alt="Image 5">
        </div>
        <div class="column">
          <img class="demo cursor" src="<?php echo $imageURL[5]; ?>" style="width:50%" onclick="currentSlide(6)" alt="Image 6">
        </div>
        <div class="column">
          <img class="demo cursor" src="<?php echo $imageURL[6]; ?>" style="width:50%" onclick="currentSlide(7)" alt="Image 1">
        </div>
        <div class="column">
          <img class="demo cursor" src="<?php echo $imageURL[7]; ?>" style="width:50%" onclick="currentSlide(8)" alt="Image 2">
        </div>
        <div class="column">
          <img class="demo cursor" src="<?php echo $imageURL[8]; ?>" style="width:50%" onclick="currentSlide(9)" alt="Image 3">
        </div>
        <div class="column">
          <img class="demo cursor" src="<?php echo $imageURL[9]; ?>" style="width:50%" onclick="currentSlide(10)" alt="Image 4">
        </div>
        <div class="column">
          <img class="demo cursor" src="<?php echo $imageURL[10]; ?>" style="width:50%" onclick="currentSlide(11)" alt="Image 5">
        </div>
        <div class="column">
          <img class="demo cursor" src="<?php echo $imageURL[11]; ?>" style="width:50%" onclick="currentSlide(12)" alt="Image 6">
        </div>
        <div class="column">
          <img class="demo cursor" src="<?php echo $imageURL[12]; ?>" style="width:50%" onclick="currentSlide(13)" alt="Image 1">
        </div>
        <div class="column">
          <img class="demo cursor" src="<?php echo $imageURL[13]; ?>" style="width:50%" onclick="currentSlide(14)" alt="Image 2">
        </div>
        <div class="column">
          <img class="demo cursor" src="<?php echo $imageURL[14]; ?>" style="width:50%" onclick="currentSlide(15)" alt="Image 3">
        </div>
        <div class="column">
          <img class="demo cursor" src="<?php echo $imageURL[15]; ?>" style="width:50%" onclick="currentSlide(16)" alt="Image 4">
        </div>
        <div class="column">
          <img class="demo cursor" src="<?php echo $imageURL[16]; ?>" style="width:50%" onclick="currentSlide(17)" alt="Image 5">
        </div>
        <div class="column">
          <img class="demo cursor" src="<?php echo $imageURL[17]; ?>" style="width:50%" onclick="currentSlide(18)" alt="Image 6">
        </div>
      </div>
    </div>
  </div>

    <footer>
    <div>
      <div class="logoLinks">
       <a href="https://www.facebook.com/cocacolabulgaria/?brand_redir=40796308305" class="fa fa-facebook"></a>
       <a href="https://twitter.com/cocacola_gb" class="fa fa-twitter"></a>
       <a href="https://www.instagram.com/cocacolaeu/?hl=en" class="fa fa-instagram"></a>
       <a href="https://www.youtube.com/user/cocacolacompanyuk" class="fa fa-youtube"></a>
      </div>
      <div class="footerInFooter">
       <a href="https://www.coca-cola.co.uk/privacy-policy" class="footerInFooterContent">Privacy Policy | </a>
       <a href="https://www.coca-cola.co.uk/cookie-policy" class="footerInFooterContent">Cookie Policy | </a>
       <a href="https://www.coca-cola.co.uk/tax-policy" class="footerInFooterContent">Tax Policy | </a>
       <a href="https://www.coca-cola.co.uk/terms-of-use" class="footerInFooterContent">Terms of use | </a>
       <a href="https://www.coca-cola.co.uk/content/dam/one/gb/en/pdf-files/Coca-Cola-GB-Modern-Slavery-Statement-2021_v2_1.pdf" class="footerInFooterContent"> Modern Slavery Statement</a>
       <a class="copyRight"> © Web 3D Application Coca-Cola, all rights reserved</a>
      </div>
    </div>
  </footer>


  </body>


    <script>
    // Open the Model
    function openModel() {
      document.getElementById("myModel").style.display = "block";
    }

    // Close the Model
    function closeModel() {
      document.getElementById("myModel").style.display = "none";
    }

    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      var captionText = document.getElementById("caption");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      captionText.innerHTML = dots[slideIndex-1].alt;
    }
  </script>
</html>
