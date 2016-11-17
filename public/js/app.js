var commentApp = angular.module('commentApp', ['mainCtrl', 'commentService', 'ui.router']);

commentApp.config(['$urlRouterProvider', '$stateProvider', '$locationProvider', '$httpProvider', function($urlRouterProvider, $stateProvider, $locationProvider, $httpProvider) {

  $locationProvider.html5Mode(true);

  $stateProvider
    .state('home', {
      url: '/',
      views: {
        'nav': {
          templateUrl: '/partials/nav.php',
          controller: 'mainController'
        },
        'form': {
          templateUrl: '/partials/form.php',
          controller: 'mainController'
        }
      }
    })
    .state('login', {
      url: '/login',
      views: {
        'nav': {
          templateUrl: '/partials/nav.php',
          controller: 'mainController'
        },
        'form': {
          templateUrl: '/partials/login.php',
          controller: 'mainController'
        }
      }
    })
    .state('register', {
      url: '/register',
      views: {
        'nav': {
          templateUrl: '/partials/nav.php',
          controller: 'mainController'
        },
        'form': {
          templateUrl: '/partials/register.php',
          controller: 'mainController'
        }
      }
    })
}]);
