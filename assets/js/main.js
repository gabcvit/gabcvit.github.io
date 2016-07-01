angular.module('resumePage', ['ui.bootstrap']).controller('PageController', ['$scope',  function($scope, $console) { 

	$scope.backgroundColor = "green";
	$scope.selectedArea = 'assets/pages/profile.html';
	$scope.skillPointClassesBad = "skill-level active-bad animated infinite pulse";
	$scope.skillPointClassesMedium = "skill-level active-medium animated infinite pulse";
	$scope.skillPointClassesGreat = "skill-level active-great animated infinite pulse";

    $scope.changePage = function(name) {
	      if(name == "profile")
	      {
	      	ga('send', 'event', 'page', 'open', 'Profile Page');
	      	$scope.backgroundColor = "green";
	      	$scope.selectedArea = "assets/pages/profile.html";

	      }
	      else if(name == "knowledge")
	      {
	      	ga('send', 'event', 'page', 'open', 'Knowledge Page');
	      	$scope.backgroundColor = "purple";
	      	$scope.selectedArea = "assets/pages/knowledge.html";

	      }
	      else if(name == "resume")
	      {
	      	ga('send', 'event', 'page', 'open', 'Resume Page');
	      	$scope.backgroundColor = "orange";
	      	$scope.selectedArea = "assets/pages/resume.html";

	      }
	      else 
	      {
	      	ga('send', 'event', 'page', 'open', 'Portfolio Page');
	      	$scope.backgroundColor = "pink";
	      	$scope.selectedArea = "assets/pages/portfolio.html";

	      }
    }

    $scope.getNumber = function(num) {
	    return new Array(num);   
	}

}]);