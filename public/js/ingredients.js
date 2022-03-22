
let ingArray = [];

console.log("it's connected!");
let createForm = document.getElementById('createForm');
let ingInput = document.createElement('input');
let ingSubmit = document.createElement('button');
ingSubmit.id = "addIng";
ingSubmit.classList.add("btn");
ingSubmit.classList.add("btn-success");
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
    document.getElementById('ingList').innerHTML += "<div id='" + ingInput.value +"'><p>" + ingInput.value +  "</p><button type='button' class='btn btn-success' id='removed' onclick=removeIng('" + ingInput.value + "')>X</button></div>";

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

console.log(ingArray);
// Section 2 to convert into input