var app=angular.module('myApp', ['ngMaterial'] );
app.controller('ChatCtrl', function($window, $anchorScroll){
  var self = this;
  self.messageWindowHeight = parseInt($window.innerHeight - 170) + 'px';
  self.messages = [];
  for(var i = 1 ; i<=200;i ++){
    self.messages.push(i);
  }
  
  self.user = { text : ""};
  self.send = function(){
    self.messages.push(angular.copy(self.user.text));
    self.user.text = "";
  }
});

app.directive('scrollToBottom', function($timeout, $window) {
    return {
        scope: {
            scrollToBottom: "="
        },
        restrict: 'A',
        link: function(scope, element, attr) {
            scope.$watchCollection('scrollToBottom', function(newVal) {
                if (newVal) {
                    $timeout(function() {
                        element[0].scrollTop =  element[0].scrollHeight;
                    }, 0);
                }

            });
        }
    };
});