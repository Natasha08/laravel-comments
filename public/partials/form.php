<form ng-submit="submitComment()">
  <div class="form-group">
    <input type="text" class="form-control input-sm" name="author" ng-model="commentData.author" placeholder="Name">
  </div>
  <div class="form-group">
    <input type="text" class="form-control input-lg" name="comment" ng-model="commentData.text" placeholder="Say what you have to say">
  </div>
  <div class="form-group text-center">
    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
  </div>
</form>
<div class="comment" ng-hide="loading" ng-repeat="comment in comments">
  <h3>Comment #{{ comment.id }} <small>by {{ comment.author }}</h3>
  <p>{{ comment.text }}</p>
  <p><a href="#" ng-click="deleteComment(comment.id)" class="text-muted">Delete</a></p>
</div>
