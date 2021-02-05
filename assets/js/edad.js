const year = 1997;

let currentlyYear = new Date();
console.log(currentlyYear.getMonth());

if(currentlyYear.getMonth() === 3 && currentlyYear.getUTCDate() >= 14) {
    document.getElementById('edad').innerHTML = currentlyYear.getFullYear() - year;
}//end if
else {
    document.getElementById('edad').innerHTML = (currentlyYear.getFullYear() - 1997) - 1;
}//end else



