/*the lines below are to prevent false errors from jslint or eslint in Brackets*/

/*eslint-disable no-unused-vars*/
/*global $, document, alert, window*/
/*jshint browser: true, unused: false, no-unused-vars: true*/
/*jslint devel: true, node: true, vars: true*/
"use strict"; // required by jslint

/*
File Name: faq.js
Date: 08/02/20
Designer: Barbara Orts
*/


$(document).ready(function () {

        $("dd").hide();

    $("dt").on("click", function () {

        $(this).toggleClass("open").next("dd").slideToggle();

    });

});
