document.querySelector('#name').focus();

let form = document.querySelector('#feedback-form');
let inputs = [
    document.querySelector('#name'),
    document.querySelector('#question1'),
    document.querySelector('#question2'),
    document.querySelector('#question3'),
    document.querySelector('#question4'),
    document.querySelector('#question5'),
]

form.addEventListener('submit', e=>{
    e.preventDefault();
    if(inputs[0].value.length < 4){
        if(window.confirm('Você prefere não declarar seu nome?')){
            form.submit();
        }
    }
    form.submit();
})