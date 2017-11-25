'use strict';
/**
 * @ngdoc overview
 * @name OnePoint
 * @description
 * # OnePoint
 *
 * Main module of the application.
 */
angular
  .module('OnePoint', [
    'oc.lazyLoad',
    'ui.router',
    'ui.bootstrap',
    'angular-loading-bar',
  ])
  .config(['$stateProvider', '$urlRouterProvider', '$ocLazyLoadProvider',
    function($stateProvider, $urlRouterProvider, $ocLazyLoadProvider) {

      $ocLazyLoadProvider.config({
        debug: false,
        events: true,
      });

      $urlRouterProvider.otherwise('/mainview');

      $stateProvider
        .state('mainview', {
          url: '/mainview',
          controller: 'MainViewCtrl',
          templateUrl: 'mainview/main',
          resolve: {
            loadMyDirectives: function($ocLazyLoad) {
              return $ocLazyLoad.load({
                  name: 'OnePoint',
                  files: [
                    'app/scripts/directives/header/header.js',
                    'app/scripts/directives/header/header-notification/header-notification.js',
                    'app/scripts/directives/sidebar/sidebar.js',
                    'app/scripts/directives/sidebar/sidebar-search/sidebar-search.js'
                  ]
                }),
                $ocLazyLoad.load({
                  name: 'toggle-switch',
                  files: ["app/js/libs/angular-toggle-switch.min.js",
                    "app/styles/libs/angular-toggle-switch.css"
                  ]
                }),
                $ocLazyLoad.load({
                  name: 'ngCookies',
                  files: ['app/js/libs/angular-cookies.min.js']
                })
              $ocLazyLoad.load({
                name: 'ngResource',
                files: ['app/js/libs/angular-resource.min.js']
              })
              $ocLazyLoad.load({
                name: 'ngSanitize',
                files: ['app/js/libs/angular-sanitize.min.js']
              })
              $ocLazyLoad.load({
                name: 'ngTouch',
                files: ['app/js/libs/angular-touch.min.js']
              })
            }
          }
        })
//        .state('mainview.home', {
//          url: '/Home',
//          controller: 'MainCtrl',
//          templateUrl: 'mainview/home',
//          resolve: {
//            loadMyFiles: function($ocLazyLoad) {
//              return $ocLazyLoad.load({
//                name: 'OnePoint',
//                files: [
////                  'app/scripts/controllers/main.js',
////                  'app/scripts/directives/mainview/stats/stats.js',
////                  'app/scripts/directives/timeline/timeline.js',
////                  'app/scripts/directives/notifications/notifications.js',
////                  'app/scripts/directives/chat/chat.js',
//                ]
//              })
//            }
//          }
//        })
        .state('mainview.form', {
          templateUrl: 'form',
          url: '/form'
        })
        .state('mainview.blank', {
          templateUrl: 'blank',
          url: '/blank'
        })
        .state('login', {
          templateUrl: 'login',
          url: '/login'
        })
        .state('mainview.chart', {
          templateUrl: 'chart',
          url: '/chart',
          controller: 'ChartCtrl',
          resolve: {
            loadMyFile: function($ocLazyLoad) {
              return $ocLazyLoad.load({
                  name: 'chart.js',
                  files: [
                    'app/js/libs/Chart.min.js',
                    'app/js/libs/angular-chart.min.js',
                    'app/styles/libs/angular-chart.css'
                  ]
                }),
                $ocLazyLoad.load({
                  name: 'ApsilonApp',
                  files: ['app/scripts/controllers/chartContoller.js']
                })
            }
          }
        })
        .state('mainview.table', {
          templateUrl: 'table',
          url: '/table'
        })

      .state('mainview.hello', {
          templateUrl: 'hello'
        })
        .state('mainview.panels-wells', {
          templateUrl: 'app/views/ui-elements/panels-wells.html',
          url: '/panels-wells'
        })
        .state('mainview.buttons', {
          templateUrl: 'app/views/ui-elements/buttons.html',
          url: '/buttons'
        })
        .state('mainview.notifications', {
          templateUrl: 'app/views/ui-elements/notifications.html',
          url: '/notifications'
        })
        .state('mainview.typography', {
          templateUrl: 'app/views/ui-elements/typography.html',
          url: '/typography'
        })
        .state('mainview.icons', {
          templateUrl: 'app/views/ui-elements/icons.html',
          url: '/icons'
        })
        .state('mainview.grid', {
          templateUrl: 'app/views/ui-elements/grid.html',
          url: '/grid'
        })

    }
  ]);

