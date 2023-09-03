let authButton = document.querySelector('.header-auth > a');
let authPopup = document.querySelector('.auth-popup');

let closeAuthPopup = document.querySelector('.auth-popup .auth-popup__close-button');

let submitButtonAuth = document.querySelector('.auth-form__submit');

let backgroundMain = document.querySelector('.darkening-main');

authButton.addEventListener('click', function(event){
    authPopup.classList.add('auth-popup--open');

    authPopup.style.zIndex = '16';
    backgroundMain.style.display = 'block';
});

closeAuthPopup.addEventListener('click', function(){
    authPopup.classList.remove('auth-popup--open');

    authPopup.style.zIndex = null;
    backgroundMain.style.display = 'none';
});

/*let request = new XMLHttpRequest();

request.onreadystatechange = function() {

}

request.responseType =	"json";
request.open("post", "../../controllers/AuthController.php", true);
request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

submitButtonAuth.addEventListener("click", function(event){
    event.preventDefault();

    request.send(new FormData(authPopup));
});*/
