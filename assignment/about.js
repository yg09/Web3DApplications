var carselement = $('.cars');

var modal = $('#myModal');
var modalimage = $('#modalimage');
var nameText = $("#name");
var infoText = $("#info");
var span = document.getElementsByClassName("close")[0];

span.onclick = function() {
    modal.css("display" , "none");
}

cars.forEach(function(car) {
  console.log(car);
  var carelement = $('<figure class="col-sm-4 car">');
  var titleelement = $('<p class="sansserif">' + car.name + '</p>');
  var imageelement = $('<img class="carimage" src="' + car.imageUrl + '" alt="car" />' );
  carelement.append(titleelement,imageelement);
  carselement.append(carelement);

  carelement.click(function() {
    console.log("You clicked");
    modal.css("display" , "block");
    modalimage.attr("src" , car.imageUrl);
    nameText.text(car.name);
    infoText.text(car.topspeed + car.price);
  });

  