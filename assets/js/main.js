"use strict";$(document).ready(function(){menuHandler()});var menuHandler=function(){$("#toggle-menu").on("click",function(){$("#overlay").fadeToggle(),$("header").toggleClass("toggled"),console.log($(this).find("li"))})};