//length
var txt = "qwerty";
document.getElementById('name').innerHTML = txt.length;

//indexOf
var txt = "I am seeking for a hot girl";
document.getElementById('name').innerHTML = txt.indexOf('hot');

//substr
var txt = "Apple, Microsoft, LInux";
document.getElementById('name').innerHTML = txt.substr(0, 5);

//replace
var txt = "Please Visit Us";
document.getElementById('name').innerHTML = txt.replace("Us", "DumbWaysToLearn");

//toUpperCase
var txt = "Please Visit Us";
document.getElementById('name').innerHTML = txt.toUpperCase()

//toLowerCase
var txt = "Please Visit Us";
document.getElementById('name').innerHTML = txt.toLowerCase()

//charAT
var txt = "Please Visit Us";
document.getElementById('name').innerHTML = txt.charAt(5)

//split
var txt = "a,b,c,d";
var txtArray =txt.split(",");
document.getElementById('name').innerHTML = txtArray[3];

//call string like array
var txt = "a,b,c,d";
document.getElementById('name').innerHTML = txt[3];