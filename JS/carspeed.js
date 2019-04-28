
//Car Speed Limit 70
//If Car Speed is above limit it will be 1 Point (After ever 5 Kilometer 1 point is Added)
//If total of point is equal or above 12, License will Blocked.
///If Speed is between 50 - 72 Display OK on Console.


let speedLimit = 70;
let currentSpeed = 0;
let points = 1;


function speedCheck(currentSpeed){
    if(currentSpeed < 70 && currentSpeed>=50) {
        console.log("Between Speed Limit");
    } else if(currentSpeed > 72) {
        console.log("Above Speed Limit.");
    }
    licenseCheck(currentSpeed);
}

let speedAboveLimit = 0;
function licenseCheck(currentSpeed){
    speedAboveLimit = currentSpeed - speedLimit;
    points = speedAboveLimit / 5;

    if(Math.round(points) > 12)
    {
        console.log('License is Blocked.');
    } else if(Math.round(points) <= 12 && points >= 1){
        console.log(points +" Point Added.");
    } else{
        console.log("OK");
    }
}
speedCheck(70);