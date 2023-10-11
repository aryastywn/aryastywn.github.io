function toggleMode() {
    const body = document.body;
    const currentMode = body.getAttribute("data-mode");

    if (currentMode === "light") {
        body.setAttribute("data-mode", "dark");
    } else {
        body.setAttribute("data-mode", "light");
    }
}

const toggleButton = document.getElementById("toggleMode");
toggleButton.addEventListener("click", toggleMode);

function setInitialMode() {
    const body = document.body;
    const preferredMode = localStorage.getItem("preferredMode");

    if (preferredMode === "dark") {
        body.setAttribute("data-mode", "dark");
    } else {
        body.setAttribute("data-mode", "light");
    }
}

setInitialMode();



function openPopup() {
    const popupContainer = document.getElementById("popupContainer");
    popupContainer.style.display = "flex";
}

function closePopup() {
    const popupContainer = document.getElementById("popupContainer");
    popupContainer.style.display = "none";
}

const closeButton = document.getElementById("closePopup");
closeButton.addEventListener("click", closePopup);

window.addEventListener("load", openPopup);

var move = document.querySelector('.gerak');
var posisi = 0;
var animasiBerjalan = true;

function moveText() {
    if (animasiBerjalan) {
        posisi += 5;
        move.style.left = posisi + 'px';

        if (posisi >= window.innerWidth) {
            posisi = -move.clientWidth;
        }
    }

    setTimeout(moveText, 10);
}

moveText();

const orderForm = document.getElementById("order-form");
const cartIcon = document.getElementById("shopping-cart");

cartIcon.addEventListener("click", function () {
    if (orderForm.style.display === "block") {
        orderForm.style.display = "none";
    } else {
        orderForm.style.display = "block";
    }
}
);


