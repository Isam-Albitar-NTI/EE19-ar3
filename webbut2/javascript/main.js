

// logik
let counter =0;

while (counter < 10) {
    counter ++;
}
counter ++;

for (let index = 0; index < 10; index++) {
    console.log(index)
}

// array
let products = [["A Bathing Ape", "Supreme"], ["T-shirt", "Sweaters", "Jeans"]];

products.push([["a", "b", "c"], 399, 500, 750]);
products.push("Hej");

products.unshift("I was here first!");
products.shift();

products[0];


const loginButton = document.querySelector("button.login");
loginButton.addEventListener('click', loginUser);

function loginUser(e) {
    console.log("user logged in!");
}

document.querySelector("form").addEventListener("submit", submitForm);
function submitForm(e){
    e.preventDefault();
}