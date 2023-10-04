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

var move = document.querySelector('.gerak'); // Menggunakan [0] untuk mengakses elemen pertama dengan class 'gerak'
var posisi = 0;

function moveText() {
    posisi += 5;
    move.style.left = posisi + 'px';

    if (posisi >= window.innerWidth) {
        posisi = -move.clientWidth;
    }
    setTimeout(moveText,10);
}

moveText(); // Memanggil fungsi untuk memulai animasi teks

