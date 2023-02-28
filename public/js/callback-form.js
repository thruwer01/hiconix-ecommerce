const callbackPopup = document.querySelector('#popup1');

const inputRadioTel = callbackPopup.querySelector('#contact_choise1');
const inputRadioEmail = callbackPopup.querySelector('#contact_choise2');

const inputTelNode = callbackPopup.querySelector('#form_input_tel');
const inputEmailNode = callbackPopup.querySelector("#form_input_email");

const selectRequestGoal = callbackPopup.querySelector('select[name="request_goal"]')
const cityInput = callbackPopup.querySelector('input[name="city"]')
const nameInput = callbackPopup.querySelector('input[name="name"]')
const commentInput = callbackPopup.querySelector('#form_input_comment textarea');
const commentError = callbackPopup.querySelector("span#comment-error"); 

const btn = callbackPopup.querySelector('.sendSubmit');
const form = callbackPopup.querySelector('form');

//вывод нужных полей
[inputRadioTel,inputRadioEmail].forEach(inputRadio => {
    inputRadio.onchange = () => {
        if (inputRadio.value == "tel") {
            inputTelNode.style.display = 'block';
            inputTelNode.querySelector('input').setAttribute("required", "required");
            inputEmailNode.style.display = 'none';
            inputEmailNode.querySelector('input').removeAttribute("required");
        }

        if (inputRadio.value == "msg") {
            inputTelNode.style.display = 'none';
            inputTelNode.querySelector('input').removeAttribute("required");
            inputEmailNode.style.display = 'block';
            inputEmailNode.querySelector('input').setAttribute("required", "required");
        }
    }
})

//вывод ошибки длины коммента
commentInput.oninput = (e) => {
    if (e.target.value.length === 200) {
        commentError.style.display = 'block';
    }
    if (e.target.value.length < 200) {
        commentError.style.display = 'none';
    }
}

const sendCallback = async (data) => {
    let res = await fetch('/api/callback/send', {method: "POST", body: JSON.stringify(data)});
    return await res.json();
}

btn.onclick = async () => {
    let allRequired = callbackPopup.querySelectorAll('[required="required"]');
    let errors = [];
    
    allRequired.forEach(input => {
        if (input.value != "null" && input.value.length > 3) {
            input.style.border = "1px solid #D5D9E2";
        } else {
            input.style.border = "1px solid red";
            errors.push('error');
        }
    });

    if (errors.length === 0) {
        let formData = {
            phone: inputTelNode.querySelector('input').value,
            email: inputEmailNode.querySelector('input').value,
            comment: commentInput.value,
            name: nameInput.value,
            city: cityInput.value,
            requestGoal: selectRequestGoal.value,
        };
        
        await sendCallback(formData).then((json) => {
            pModal.close();
            formSuccess.style.display = 'block';
            formSuccessInOpen = true;
        });
    }
}