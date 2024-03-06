const step1elements = document.querySelectorAll('.step1');
const step2elements = document.querySelectorAll('.step2');
const step3elements = document.querySelectorAll('.step3');
const shipping_div = document.querySelectorAll('.shipping_div');
const btn_next = document.getElementById('btn_next')
const btn_pay = document.getElementById('btn_pay')
let steps = 1;

document.getElementById('btn_next').addEventListener('click', function() {
    if (steps === 1) {
        steps++;
        step1elements.forEach(element => {
            element.classList.add('deactivated');
        });
        step2elements.forEach(element => {
            element.classList.remove('deactivated');
            element.classList.add('shipping');
        });
    } else if (steps === 2) {
        steps++;
        step2elements.forEach(element => {
            element.classList.add('payment');
            element.classList.remove('shipping');
        });
        step3elements.forEach(element => {
            element.classList.remove('deactivated');
        });

        shipping_div.forEach(element => {
            element.classList.add('deactivated');
            element.classList.remove('payment');
        });
        btn_next.classList.add('deactivated')
        btn_pay.classList.remove('deactivated')

    }
    // Scroll to the top of the page
    window.scrollTo({ top: 0, behavior: 'smooth' });
});


document.getElementById('btn_back').addEventListener('click', function() {
    if (steps === 2) {
        steps--;
        step1elements.forEach(element => {
            element.classList.remove('deactivated');
        });
        step2elements.forEach(element => {
            element.classList.remove('shipping');
            element.classList.add('deactivated');
        });
    } else if (steps === 3) {
        steps--;
        step2elements.forEach(element => {
            element.classList.remove('payment');
            element.classList.add('shipping');
        });
        step3elements.forEach(element => {
            element.classList.add('deactivated');
        });
        shipping_div.forEach(element => {
            element.classList.remove('deactivated');
            element.classList.add('payment');
        });
        btn_next.classList.remove('deactivated')
        btn_pay.classList.add('deactivated')
    }
    // Scroll to the top of the page
    window.scrollTo({ top: 0, behavior: 'smooth' });
});


document.getElementById("btn_pay").addEventListener("click", function() {
    document.querySelector('.form-row button[type="submit"]').click();
});