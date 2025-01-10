document.addEventListener("DOMContentLoaded", function () {
    const header = document.querySelector(".navbar h1");
    header.textContent = "IQMATH TECHNOLOGIES"; 
});

document.getElementById("applyButton")?.addEventListener("click", function (event) {
    event.preventDefault(); 
    alert("Thank you for your interest! The application form will open shortly.");
    window.location.href = "https://forms.gle/bvQSHUxEcb3K1ao47"; 
});

function openForm(url="https://forms.gle/bvQSHUxEcb3K1ao47") {
    alert("Redirecting to the application form.");
    window.location.href = url;
}