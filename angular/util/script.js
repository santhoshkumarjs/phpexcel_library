angular.module('Sojharo', [])
.directive('schrollBottom', function () {
  return {
    scope: {
      schrollBottom: "="
    },
    link: function (scope, element) {
      scope.$watchCollection('schrollBottom', function (newValue) {
        if (newValue)
        {
          $(element).scrollTop($(element)[0].scrollHeight);
        }
      });
    }
  }
})
.controller('MyController', function($scope) {

  $scope.messages = [];
  $scope.im = {};

  $scope.sendIM = function(msg) {
    

    $scope.messages.push(msg);
    $scope.im = {};
    
    //$('#chatBox').scrollTop($('#chatBox')[0].scrollHeight);
/*
    var chatBox = document.getElementById('chatBox');
    chatBox.scrollTop = 300 + 8 + ($scope.messages.length * 240);
    */
  }
});