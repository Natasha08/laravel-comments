<div class="comment" ng-hide="loading" ng-repeat="comment in comments">
  <h3>Comment #{{ comment.id }} <small>by {{ comment.author }}</h3>
  <p>{{ comment.text }}</p>
  <p><a href="#" ng-click="deleteComment(comment.id)" class="text-muted">Delete</a></p>
</div>
