
let ingArray = [];

let createForm = document.getElementById('createForm');
let ingInput = document.createElement('input');
let ingSubmit = document.createElement('button');
ingSubmit.id = "addIng";
ingSubmit.classList.add("btn");
ingSubmit.classList.add("btn-success");
ingSubmit.classList.add("d-block");
ingSubmit.classList.add("mx-auto");


ingSubmit.type = "button";
ingSubmit.innerText = "Add ingredient";
createForm.appendChild(ingInput);
createForm.appendChild(ingSubmit);
let addIngredient = function(e) {
    e.preventDefault;
    ingArray.push(ingInput.value);
    console.log(ingArray);
    document.getElementById('ingredients').value = ingArray;
    document.getElementById('ingList').innerHTML += "<div class='remBtn' id='" + ingInput.value +"'><button type='button' class='btn btn-danger' id='removed' onclick=removeIng('" + ingInput.value + "')>X</button><p>" + ingInput.value +  "</p></div>";

};


let removeIng = function(ing) {
    const index = ingArray.indexOf(ing);
if (index > -1) {
  ingArray.splice(index, 1);

}
let remEle = document.getElementById(ing);
remEle.remove();
document.getElementById('ingredients').value = ingArray;
};
ingSubmit.addEventListener("click", addIngredient, false);
