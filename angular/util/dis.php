<!doctype html>
<html ng-app="discussion">
<head>
<title ng-controller="titlehead"> {{title}}</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
</head>
<body>
<div ng-controller="discussioncontroller">
<div for="date">
<div for="content">

</div>
</div>
</div>
</body>
</html>
<script>
	 var myapp = angular.module('discussion',[]);
	 myapp.controller('titlehead', function($scope){
		 $scope.title = "Sample Chat";
	 });
	 myapp.controller('discussioncontroller', ['$scope', '$http', function($scope, $http){
		 
	 }]);
</script>