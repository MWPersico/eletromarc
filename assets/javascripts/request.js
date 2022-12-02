
let form = document.querySelector('#request-form');

let inputs = [
    document.querySelector('#name-input'),
    document.querySelector('#telephone-input'),
    document.querySelector('#email-input'),
    document.querySelector('#address-input'),
    document.getElementsByClassName('checkbox'),
    document.querySelector('#message'),
]

let serviceTypes = document.querySelector('#hidden-service-type');

form.addEventListener('submit', e=>{
    e.preventDefault();
    serviceTypes.value = "";
    for(element of inputs[4]){
        let confirm;
        if(element.checked){
            confirm+=1;
            serviceTypes.value += element.value;
            if(serviceTypes.value.length >=confirm){
                break;
            }
        }
    }
    console.log(serviceTypes.value)
    if(inputs[0].value.length < 4){
        alert('Precisamos do seu nome completo!')
    } else{
        form.submit();
    }
})