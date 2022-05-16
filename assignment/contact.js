// Initialising the map from google
function initMap() {
  // Deffault location of University of Sussex
  const uos = { lat: 50.867088, lng: -0.087914 };
  // centered at Univerity of Sussex
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 10,
    center: uos,
  });
  // the pinner pointing at Univarsity of Sussex
  const marker = new google.maps.Marker({
    position: uos,
    map: map,
  });
}


//contact form using angular
var app = angular.module('ContactForm',[]);


app.controller("cfController",function($scope){
  //making up the validated scenario
	$scope.submitForm = function(isValid) {
		this.formInput = {
        name: $("input[name='name']").val(),
        email: $("input[name='email']").val(),
        message: $("textarea[name='message']").val()
   };
   //checking for validation
		if (isValid) {
			console.log('Message sent successfully');
			console.log(this.formInput);
		} else {
			console.log('Failed to send message')
		}
	};
});
