




// Start Time ____________________________________________________________________

// const m = moment();
const today = moment();
moment.lang("NL");

var dag = today.isoWeekday();
if (dag>5){
    today.add(8-dag,"days");
}
document.getElementById('maandag').innerText=today.format('dddd DD MMMM');


dag=today.add(1,"days");
var dag = today.isoWeekday();
if (dag>5){
    today.add(8-dag,"days");
}
document.getElementById("dinsdag").innerText=today.format('dddd DD MMMM');


dag=today.add(1,"days");
var dag = today.isoWeekday();
if (dag>5){
    today.add(8-dag,"days");
}
document.getElementById("woensdag").innerText=today.format('dddd DD MMMM');

dag=today.add(1,"days");
var dag = today.isoWeekday();
if (dag>5){
    today.add(8-dag,"days");
}
document.getElementById("doenderdag").innerText=today.format('dddd DD MMMM');

dag=today.add(1,"days");
var dag = today.isoWeekday();
if (dag>5){
    today.add(8-dag,"days");
}
document.getElementById("vrijdag").innerText=today.format('dddd DD MMMM');


// End  Time ____________________________________________________________________

