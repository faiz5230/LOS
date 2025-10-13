/*
Template Name: SISTEM APLIKASI KREDIT
Author: BANK DUTA PASUNDAN
Website: https://BANK DUTA PASUNDAN.com/
Contact: BANK DUTA PASUNDAN@gmail.com
File: Project overview init js
*/

// favourite btn
var favouriteBtn = document.querySelectorAll(".favourite-btn");
if (favouriteBtn) {
    Array.from(document.querySelectorAll(".favourite-btn")).forEach(function (item) {
        item.addEventListener("click", function (event) {
            this.classList.toggle("active");
        });
    });
}