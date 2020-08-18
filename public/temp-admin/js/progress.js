let step = 'step1';

const step1 = document.getElementById('step1');
const step2 = document.getElementById('step2');

function next() {
    if (step === 'step1') {
    step = 'step2';
    step1.classList.add("active");
    $('#judul1').hide();
    $('#judul2').show();
    $('#judul3').hide();
    $('#forminputsurtu').hide();
    $('#forminputteam').show();
    $('#buttonpage1').hide();
    $('#buttonpage2').show();
    $('#buttonpage3').hide();

    } else if (step === 'step2') {
    step = 'step3';
    step2.classList.add("active");
    $('#judul1').hide();
    $('#judul2').hide();
    $('#judul3').show();
    $('#forminputteam').hide();
    $('#formpreview').show();
    $('#buttonpage1').hide();
    $('#buttonpage2').hide();
    $('#buttonpage3').show();
    } 
}

function back() {
    if (step === 'step2') {
    step = 'step1';
    step1.classList.remove("active");
    $('#forminputsurtu').show();
    $('#judul1').show();
    $('#judul2').hide();
    $('#judul3').hide();
    $('#forminputteam').hide();
    $('#buttonpage1').show();
    $('#buttonpage2').hide();
    $('#buttonpage3').hide();

    } else if (step === 'step3') {
    step = 'step2';
    step2.classList.remove("active");
    $('#judul1').hide();
    $('#judul2').show();
    $('#judul3').hide();
    $('#forminputteam').show();
    $('#formpreview').hide();
    $('#buttonpage1').hide();
    $('#buttonpage2').show();
    $('#buttonpage3').hide();
    }
}