function checkName(event) {
    const input = event.currentTarget;
    
    if (formStatus[input.nome] = input.value.length > 0) {
        input.parentNode.parentNode.classList.remove('notvalid');
    } else {
        input.parentNode.parentNode.classList.add('notvalid');
    }
    checkForm();
}

function checkUsername(event) {
    const input = document.querySelector('.username input');

    if(!/^[a-zA-Z0-9_]{1,15}$/.test(input.value)) {
        input.parentNode.parentNode.querySelector('span').textContent = "Sono ammesse lettere, numeri e underscore. Max. 15";
        input.parentNode.parentNode.classList.add('notvalid');
        formStatus.username = false;
        checkForm();
    } else {
        fetch(REGISTRAZIONE_ROUTE+"/username/"+encodeURIComponent(input.value)).then(fetchResponse).then(jsonCheckUsername);
    }    
}

function jsonCheckUsername(json) {
    if (formStatus.username = !json.exists) {
        document.querySelector('.username').classList.remove('notvalid');
    } else {
        document.querySelector('.username span').textContent = "Username già utilizzato";
        document.querySelector('.username').classList.add('notvalid');
    }
    checkForm();
}

function checkEmail(event) {
    const emailInput = document.querySelector('.email input');
    if(!/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(String(emailInput.value).toLowerCase())) {
        document.querySelector('.email span').textContent = "Email non valida";
        document.querySelector('.email').classList.add('notvalid');
        formStatus.email = false;
        checkForm();
    } else {
        fetch(REGISTRAZIONE_ROUTE+"/email/"+encodeURIComponent(String(emailInput.value).toLowerCase())).then(fetchResponse).then(jsonCheckEmail);
    }
}

function jsonCheckEmail(json) {
    if (formStatus.email = !json.exists) {
        document.querySelector('.email').classList.remove('notvalid');
    } else {
        document.querySelector('.email span').textContent = "Email già utilizzata";
        document.querySelector('.email').classList.add('notvalid');
    }
    checkForm();
}

function fetchResponse(response) {
    if (!response.ok) return null;
    return response.json();
}

function checkForm() {
    Object.keys(formStatus).length !== 5 || 
    Object.values(formStatus).includes(false);
}


function checkPassword(event) {
    const passwordInput = document.querySelector('.password input');
    if (formStatus.password = passwordInput.value.length >= 8) {
        document.querySelector('.password').classList.remove('notvalid');
    } else {
        document.querySelector('.password').classList.add('notvalid');
    }
    checkForm();
}

const formStatus = {'nome': true};
document.querySelector('.nome input').addEventListener('blur', checkName);
document.querySelector('.cognome input').addEventListener('blur', checkName);
document.querySelector('.username input').addEventListener('blur', checkUsername);
document.querySelector('.email input').addEventListener('blur', checkEmail);
document.querySelector('.password input').addEventListener('blur', checkPassword);

if (document.querySelector('.error') !== null) {
    checkUsername(); checkPassword(); checkEmail();
}