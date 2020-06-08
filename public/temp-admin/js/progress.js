let step = 'step1';

const step1 = document.getElementById('step1');
const step2 = document.getElementById('step2');

function next() {
    if (step === 'step1') {
    step = 'step2';
    step1.classList.add("active");
    $('#judul1').hide();
    $('#forminputsurtu').hide();
    $('#judul2').show();
    $('#forminputteam').show();
    } else if (step === 'step2') {
    step = 'step3';
    step2.classList.add("active");
    } 
}

function back() {
    if (step === 'step2') {
    step = 'step1';
    step1.classList.remove("active");

    } else if (step === 'step3') {
    step = 'step2';
    step2.classList.remove("active");

    }
}