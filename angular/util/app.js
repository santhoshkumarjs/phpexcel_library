var myapp = angular.module('discussion',[]).directive('schrollBottom', function () {
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

myapp.controller('titlehead', function($scope){
 $scope.title = "Sample Chat";
});

myapp.controller('discussioncontroller', ['$scope', '$http', '$location', '$anchorScroll', function($scope, $http, $location, $anchorScroll){
 
  $scope.prepareRenderData	=	function(visitorid){
	  var datastringy	=	[];
	  var listOfDiscussionData	=	{"discussion_data":{"17-03-2018":{"discussions":[{"sender_msg":"santholkf lkjlaskjdf lskjdflajsdf laskdfjalsjkdf aslkdfjalsjdf","reply_msg":"kasdflkjasldfj"}]},"16-03-2018":{"discussions":[{"sender_msg":"santholkf lkjlaskjdf lskjdflajsdf laskdfjalsjkdf aslkdfjalsjdf","reply_msg":"kasdflkjasldfj"},{"sender_msg":"santholkf lkjlaskjdf lskjdflajsdf laskdfjalsjkdf aslkdfjalsjdf","reply_msg":""},{"sender_msg":"santholkf lkjlaskjdf lskjdflajsdf laskdfjalsjkdf aslkdfjalsjdf","reply_msg":"kasdflkjasldfj"},{"sender_msg":"santholkf lkjlaskjdf lskjdflajsdf laskdfjalsjkdf aslkdfjalsjdf","reply_msg":"kasdflkjasldfj"},{"sender_msg":"santholkf lkjlaskjdf lskjdflajsdf laskdfjalsjkdf aslkdfjalsjdf","reply_msg":"kasdflkjasldfj"}]}}};
	  
	  $scope.discussionRenderData = listOfDiscussionData.discussion_data;
  }
  
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
  /*
  $scope.goToBottom	= function(){
	  $location.hash('bottom');
      $anchorScroll();
  }
  */
}]);

