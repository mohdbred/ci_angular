'use strict';

/**
 * @ngdoc directive
 * @name izzyposWebApp.directive:adminPosHeader
 * @description
 * # adminPosHeader
 */
angular.module('OnePoint')
	.directive('timeline',function() {
            console.log("Inside Timeline Directive");
    return {
        templateUrl:'app/scripts/directives/timeline/timeline.html',
        restrict: 'E',
        replace: true,
    }
  });
