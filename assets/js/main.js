angular.module('resumePage', ['ui.bootstrap']).controller('PageController', ['$scope',  function($scope, $console) { 

	$scope.backgroundColor = "green";
	$scope.selectedArea = 'assets/pages/profile.html';
	$scope.skillPointClasses = "skill-level active animated infinite pulse";

    $scope.changePage = function(name) {
	      if(name == "profile")
	      {
	      	$scope.backgroundColor = "green";
	      	$scope.selectedArea = "assets/pages/profile.html";

	      }
	      else if(name == "knowledge")
	      {
	      	$scope.backgroundColor = "purple";
	      	$scope.selectedArea = "assets/pages/knowledge.html";

	      }
	      else if(name == "resume")
	      {
	      	$scope.backgroundColor = "orange";
	      	$scope.selectedArea = "assets/pages/resume.html";

	      }
	      else 
	      {
	      	$scope.backgroundColor = "pink";
	      	$scope.selectedArea = "assets/pages/portfolio.html";

	      }
    }



}]);