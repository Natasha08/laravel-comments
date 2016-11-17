angular.module('mainCtrl', [])

// inject the Comment service into our controller
.controller('mainController', function($scope, $http, Comment) {
  // object to hold all the data for the new comment form
  $scope.commentData = {};

  // loading variable to show the spinning loading icon
  $scope.loading = true;

  // get all the comments first and bind it to the $scope.comments object
  // use the function we created in our service
  // GET ALL COMMENTS ==============
  Comment.get()
    .success(function(data) {
        $scope.comments = data[0];
        $scope.loading = false;
    });

    // function to handle submitting the form
    // SAVE A COMMENT ================
    $scope.submitComment = function() {
      $scope.loading = true;
      console.log("COMMENTS1", $scope.comments);
      // save the comment. pass in comment data from the form
      // use the function we created in our service
      Comment.save($scope.commentData)
        .success(function(data) {

          // if successful, we'll need to refresh the comment list
          Comment.get()
            .success(function(getData) {
                $scope.comments = getData[0];
                $scope.loading = false;
                 console.log("COMMENTS2", $scope.comments);
            });
        })
        .error(function(data) {
            console.log(data);
        });
    };

    // function to handle deleting a comment
    $scope.deleteComment = function(id) {
      $scope.loading = true;

      Comment.destroy(id)
        .success(function(data) {

          Comment.get()
            .success(function(getData) {
                $scope.comments = getData[0];
                $scope.loading = false;
            });
        });
    };
});
