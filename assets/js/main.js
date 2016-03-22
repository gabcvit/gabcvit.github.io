angular.module('resumePage', ['ui.bootstrap']).controller('PageController', ['$scope', function($scope, $console) { 

	$scope.backgroundColor = "green";

    $scope.changePage = function(name) {
	      if(name == "profile")
	      {
	      	$scope.backgroundColor = "green";

	      }
	      else if(name == "knowledge")
	      {
	      	$scope.backgroundColor = "purple";

	      }
	      else if(name == "resume")
	      {
	      	$scope.backgroundColor = "orange";

	      }
	      else 
	      {
	      	$scope.backgroundColor = "pink";

	      }
    }





}]);