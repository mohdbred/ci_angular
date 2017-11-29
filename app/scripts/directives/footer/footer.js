'use strict';

/**
 * @ngdoc directive
 * @name izzyposWebApp.directive:adminPosHeader
 * @description
 * # adminPosHeader
 */
angular.module('OnePoint')
	.directive('footer',function(){
            console.log("Inside Footer Directive");
		return {
        templateUrl:'app/scripts/directives/footer/footer.html',
        restrict: 'E',
        replace: true,
    	}
	});
