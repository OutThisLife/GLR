var $body,$content,app,winObj;app=angular.module("app.controllers",[]),winObj=angular.element(window),$body=angular.element("html, body"),$content=angular.element("#content"),app.controller("MainController",["$scope","$timeout",function(n,t){var o;return o=function(){return n.$apply(function(){return n.winWidth=winObj.width(),n.winHeight=winObj.height(),n.scrollTop=winObj.scrollTop(),n.scrollLeft=winObj.scrollLeft()})},t(function(){return o()}),winObj.on("scroll resize orientationchange",o),n.mobile={},n.mobile.toggle=function(){return n.mobile.status="closed"===n.mobile.status?"open":"closed"},$content.on("click touchend",function(){return n.$apply(function(){return n.mobile.status="closed"})})}]);