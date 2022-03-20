
let ingArray = [];
console.log("it's connected!");
let createForm = document.getElementById('createForm');
let ingInput = document.createElement('input');
let ingSubmit = document.createElement('button');
ingSubmit.id = "addIng";
ingSubmit.type = "button";
ingSubmit.innerText = "Add ingredient";
createForm.appendChild(ingInput);
createForm.appendChild(ingSubmit);

// Section 1 to add into ingredients list
console.log("hahaaa");
let addIngredient = function(e) {
  
    alert("NO");
    e.preventDefault;
    ingArray.push(ingInput.value);
    console.log(ingArray);
    document.getElementById('ingredients').value = ingArray;
    document.getElementById('ingList').innerHTML += ingInput.value + "<hr>";
};
let removeIng = function() {
  console.log("oh");
};
ingSubmit.addEventListener("click", addIngredient, false);

console.log(ingArray);
// Section 2 to convert into input 