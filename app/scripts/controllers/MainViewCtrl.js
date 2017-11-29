'use strict';
/**
 * @ngdoc function
 * @name OnePoint.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the OnePoint
 */
angular.module('OnePoint')
        .controller('MainViewCtrl', function ($scope, $http) {
            console.log("Inside Main View Angular controller");
            
            // Now getting data using HTTP POST
//            $http.get('http://localhost/ci/mainview/get_news_home_data').success(function (result) {
//
//                $scope.data = result;
//                console.log($scope.data);
//                
//                
//            }).error(function (err) {
//                console.log("Error in HTTP Get Request" + err);
//            });
            

        });
