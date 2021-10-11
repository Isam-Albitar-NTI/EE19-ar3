const stora = document.querySelector("#stora");
const små = document.querySelector("#små");

stora.addEventListener("change", function () {
    små.checked = !små.checked;
})
små.addEventListener("change", function () {
    stora.checked = !stora.checked;
})

