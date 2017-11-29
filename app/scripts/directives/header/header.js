'use strict';

/**
 * @ngdoc directive
 * @name izzyposWebApp.directive:adminPosHeader
 * @description
 * # adminPosHeader
 */
angular.module('OnePoint')
        .directive('header', function () {

            console.log("Inside Header Directive");
            return {
                templateUrl: 'directives/header',
                restrict: 'E',
                replace: true,
//                controller: 'header-directive-controller',
            }
        })

        .controller('header-directive-controller', function ($scope, $http) {
            console.log("Inside header-directive-controller")
//            $scope.foo;
//            $scope.onResponse = function (response) {
//                $scope.foo = response.data;
//            }
//            $http({
//                method: 'GET',
//                url: 'my/url'
//            }).then(
//                    $scope.onResponse
//                    );
        });
