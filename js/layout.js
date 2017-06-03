/*$(document).ready(function() {
    $("header").css("background-color", "#32CD32");
    $("header").css("color", "#000000")
    $("footer").css("background-color", "#0000EE");
    $("footer").css("color", "#FFFFFF");
    $("nav").css("background-color", "#0000EE");
    $("nav ul li a").css("color", "#FFFFFF");
    $("nav ul li a").hover(function(){
      $(this).css("background-color", "#000099");
    },
    function() {
      $(this).css("background-color", "#0000AA");
    });
    $(".on").css("background-color", "#0000AA");
});*/

var app = angular.module("layout", []);
app.controller("layoutCtrl", function($scope, $http) {

  $http.get("/php/laqyout_colors.php").then(function(rosponse) {
    $scope.names = responce.data.records;
  });
  $scope.header = {
    "color" : "#000000",
    "background-color" : "#32CD32"
  }

  $scope.footer = {
    "color" : "#FFFFFF",
    "background-color" : "#0000EE"
  }
});
