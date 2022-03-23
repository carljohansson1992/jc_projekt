

let ingArray = document.getElementById('ingredients').value;
let editArray = ingArray.split(",");

console.log("it's connected!");
let editForm = document.getElementById('editForm');
let ingInput = document.createElement('input');
let ingSubmit = document.createElement('button');
ingSubmit.id = "addIng";
ingSubmit.classList.add("btn");
ingSubmit.classList.add("btn-success");
ingSubmit.type = "button";
ingSubmit.innerText = "Add ingredient";
editForm.appendChild(ingInput);
editForm.appendChild(ingSubmit);


//
editArray.forEach(function(editIng) {
    document.getElementById('ingList').innerHTML += "<div id='" + editIng +"'><button type='button' class='btn btn-danger' id='removed' onclick=removeIng('" + editIng + "')>X</button><p>" + editIng+  "</p></div>";
});


let addIngredient = function(e) {
    e.preventDefault;
    editArray.push(ingInput.value);
    console.log(editArray);
    document.getElementById('ingredients').value = editArray;
    document.getElementById('ingList').innerHTML += "<div id='" + ingInput.value +"'><button type='button' class='btn btn-danger' id='removed' onclick=removeIng('" + ingInput.value + "')>X</button><p>" + ingInput.value +  "</p></div>";

};
let removeIng = function(ing) {
    const index = editArray.indexOf(ing);
if (index > -1) {
  editArray.splice(index, 1);

}
let remEle = document.getElementById(ing);
remEle.remove(); 
document.getElementById('ingredients').value = editArray;
};
ingSubmit.addEventListener("click", addIngredient, false);

console.log(editArray);