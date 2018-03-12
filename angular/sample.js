var app = angular.module('sample', []);

app.controller('samplecontroller', function($scope) {
  $scope.name = 'World';
  $scope.datafield = {"1":{"12345":[{"name":"santhosh","id":34,"age":30},{"name":"kumar","id":34,"age":30}],"12348":[{"name":"ram","id":34,"age":30},{"name":"santhosh","id":34,"age":30}]}};
  
});