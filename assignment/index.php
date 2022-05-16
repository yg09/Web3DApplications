<!DOCTYPE html>
<html>
<head>
<title>Coca Cola for Web3D</title>
<link rel="stylesheet" href="index.css">


<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Pattaya&display=swap" rel="stylesheet">

</head>

  <header>
    <div class="logo">
        <h1>Coca Cola</h1>
        <h2>enjoy</h2>

    </div>
  </header>

<body>


  <div id="navigation" class="nav">
    <a class="closebtn" onclick="closeNav()">&times;</a>
    <a onclick="goToProducts()">Products</a>
    <a onclick="goToAbout()">About</a>
    <a onclick="goToContact()">Contact</a>
    <a onclick="goToDownload()">Download</a>
    <a onclick="goToReferences()">References</a>
  </div>

  <div id="main" class="main">
    <button style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Open Menu</button>
    <div class="images">

      <img src="images/home1.png" alt="home1" style="width:80%; margin-left: 210px;">
        <div class="botton-left">
          Refreshing the World and Making a Difference
        </div>

      <img src="images/home2.jpg" alt="home1" style="width:80%; margin-left: 210px;">

      <img src="images/home3.jpg" alt="home1" style="width:80%; margin-left: 210px;">
        <div class="top-left">
          Crafting brands and choices people love
        </div>

      <img src="images/home4.jpg" alt="home1" style="width:80%; margin-left: 210px;">
        <div class="top-right">
          Creating a more sustainable business
        </div>

    </div>

  </div>




</body>
<script src="index.js"></script>
<script src="navigation.js"></script>


</html>
