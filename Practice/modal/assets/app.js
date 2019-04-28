//Get modal element
var mymodal = document.getElementById('theModal');

//Get open modal button
var modalBtn = document.getElementById('modalBtn');

//Get open close button
var closeBtn = document.getElementsByClassName('closeBtn')[0];

//Listen for a open Click
modalBtn.addEventListener('click', openModal);

//Listen for a close Click
closeBtn.addEventListener('click', closeModal);

window.addEventListener('click', outsideClick);


//Function to open Modal
function openModal(){
    mymodal.style.display = 'block';
}

//Function to close Modal
function closeModal(){
    mymodal.style.display = 'none';
}

function outsideClick(e){
    if(e.target == mymodal){
        mymodal.style.display = 'none';
    }
}

//Functions to Display Notification

var mynotifications = document.getElementById('theNotification');
var notifyBtn = document.getElementById('notifyBtn');
notifyBtn.addEventListener('click', notification);

function notification(){
    mynotifications.style.display = 'block';
    setTimeout(hidenotification,600);

}

function hidenotification(){
    mynotifications.style.display = 'none';

}