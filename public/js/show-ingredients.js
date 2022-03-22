

// $myString = "hej,vad,heter,du";
// $myArray = explode(",", $myString);

// print_r($myArray);
console.log('connected');
/////Reusable


let ingArray = document.getElementById('ingredients').value;
let editArray = ingArray.split(",");

console.log("it's connected!");
let editForm = document.getElementById('editForm');
let ingInput = document.createElement('input');
let ingSubmit = document.createElement('button');
ingSubmit.id = "addIng";
ingSubmit.type = "button";
ingSubmit.innerText = "Add ingredient";
editForm.appendChild(ingInput);
editForm.appendChild(ingSubmit);
//
editArray.forEach(function(editIng) {
    document.getElementById('ingList').innerHTML += "<div id='" + editIng +"'><p>" + editIng+  "</p><button type='button' id='removed' onclick=removeIng('" + editIng + "')>X</button></div>";
});
// Section 1 to add into ingredients list

let addIngredient = function(e) {
    alert("NO");
    e.preventDefault;
    editArray.push(ingInput.value);
    console.log(editArray);
    document.getElementById('ingredients').value = editArray;
    document.getElementById('ingList').innerHTML += "<div id='" + ingInput.value +"'><p>" + ingInput.value +  "</p><button type='button' id='removed' onclick=removeIng('" + ingInput.value + "')>X</button></div>";

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
// Section 2 to convert into input 