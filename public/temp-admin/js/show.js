var input = document.getElementById('password'),
    icon = document.getElementById('icon');

    icon.onclick = function () {

    if(input.className == 'form-control active') {
        input.setAttribute('type', 'text');
        icon.className = 'fa fa-eye';
        input.className = 'form-control';

    } else {
        input.setAttribute('type', 'password');
        input.className = 'form-control active';
        icon.className = 'fa fa-eye-slash';
    }

}