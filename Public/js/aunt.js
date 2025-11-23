document.addEventListener('DOMContentLoaded', initApp);

function initApp() {
    const form = document.getElementById('formLogin');
    animasiEye();
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        validasiLogin(form)
    })
}

function animasiEye() {
    const eye = document.getElementById('password-eye');
    const input = document.getElementById('password');
    eye.addEventListener('click', () => {
        if (eye.classList.contains('bi-eye-slash')) {
            eye.classList.replace('bi-eye-slash', 'bi-eye');
            input.type = 'text';
        }else{
            eye.classList.replace('bi-eye', 'bi-eye-slash');
            input.type = 'password';
        }
    });
}

function validasiLogin(form){
    let isValid = true;
    const fields = ['username', 'password'];

    fields.forEach(field => {
        const input = form.elements[field];

        if (!input) return;

        input.addEventListener('input', () => {
            if (input.value.trim() !== '') errorMessage(field, '', 'hidden');
        })

        if (input.value.trim() === '') {
            isValid = false;
            errorMessage(field, `${field} Wajib diisi`);
        }else{
            errorMessage(field, '', 'hidden');
        }
    });
    if(isValid){
        login(form);
    }

}

async function login(form) {
    const alern_username = document.getElementById('validasi-username');
    const alern_password = document.getElementById('validasi-password');
    const formData = new FormData(form);
    try {
        const response = await fetch('Admin/login', {
            method: 'POST',
            body: formData,
        });
        const result = await response.json();
        if (result.username && result.password) {
            window.location.href = '/admin/contact';
        }else{
            if (!result.username) {
                errorMessage('username', 'Username tak di temukan');
                if (alern_password.classList.contains('hidden')) {
                    errorMessage('password', '', 'hidden');
                    return;
                }
            }else if(!result.password){
                errorMessage('password', 'password salah');
                if (alern_username.classList.contains('hidden')) {
                    errorMessage('username', '', 'hidden');
                }
            }
        }
    } catch (error) {
        console.log(error);
    }
}

// alern validasi 
function errorMessage(field, message = "", display = null) {
    const alern = document.getElementById(`validasi-${field}`);
    if(!alern) return;

    if (display !== null) {
        if (display === 'hidden') alern.classList.add('hidden');
    }else{
        alern.classList.remove('hidden');
    }

    alern.textContent = message;
}
