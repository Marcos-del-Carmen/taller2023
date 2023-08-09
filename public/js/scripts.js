var modal = document.getElementById("cont-modal");

function openModal() {
    modal.style.display = "block";
    document.body.style.overflow = "hidden";
}

function closeModal() {
    modal.style.display = "none";
    document.body.style.overflowY = "scroll"
}