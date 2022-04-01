// Element vi behöver
const eModal = document.querySelector("#exampleModal");
const eForm = document.querySelector("#exampleModal form");
const eStatus = document.querySelector("#status");

// Initialiserar modal-fönstret
var loginModal = new bootstrap.Modal(
    "#exampleModal",
    {
        // options here
        backdrop: "static",
        keyboard: false
    }
);

// Hantera inloggning
eForm.addEventListener("submit", function (e) {
    // Förhindra att sidan refreshas
    e.preventDefault();
    
    // Läs in data från formuläret
    const postData= new FormData(eForm);

    console.log(postData);

    // Skicka till skriptet login.php
    fetch("./login.php", {
        method: "POST",
        body: postData
    })
    .then(response => response.text())
    .then(data => {
        console.log(data);

        // Skriv ut svaret på sidan
        switch (data) {
            case "1":
                eStatus.innerHTML = "<p class=\"alert alert-warning\">Någonting är fel med SQL-satsen</p>";
                break;
            case "2":
                eStatus.innerHTML = "<p class=\"alert alert-success\">Du är inloggad</p>";
                break;
            case "3":
                eStatus.innerHTML = "<p class=\"alert alert-warning\">Epost eller lösenordet stämmer inte</p>";
                break;
            default:
                eStatus.innerHTML = "<p class=\"alert alert-danger\">Något gick fel, vg kontakta supporten</p>";
                break;
        }

        // Stäng ned modal-fösntret
        loginModal.hide();

        // Rensa formuläret
        eForm.reset();
    })
})