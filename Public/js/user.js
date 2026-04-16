document.addEventListener('DOMContentLoaded', initApp);

function initApp() {
    const form = document.getElementById('formContact');
    const path = window.location.pathname;
    if (path === '/user/contact') {
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            validasiContactForm(form);
        })
    }
}

// function validasiContactForm(form) {
//     let isValid = true;
//     const fields = ['name', 'email', 'message'];

//     fields.forEach(field => {
//         const input = form.elements[field];
//         if (!input) return;

//         input.addEventListener('input', () => {
//             if (input.value.trim() !== '') errorMessage(field, '', 'hidden');
//         })

//         if (input.value.trim() === '') {
//             isValid = false;
//             errorMessage(field, `${field} Wajib diisi`);
//         } else {
//             errorMessage(field, '', 'hidden');
//         }
//     })

//     if (isValid) {
//         addContactForm(form);
//     }
// }

// async function addContactForm(form) {
//     const formData = new FormData(form);
//     try {
//         const response = await fetch('/user/contact_form', {
//             method: 'POST',
//             body: formData
//         });

//         const result = await response.json();
//         if (result.status) {
//             alert("Feedback sudah terkirim, terimaksih atas partisipasinya");
//             form.reset();
//         } else {
//             alert("Duh ada gangguan di server nih, Silahkan coba berberapa saat lagi");
//         }
//     } catch (error) {
//         console.log('Error : ', error)
//     }
// }

// alern validasi 
function errorMessage(field, message = "", display = null) {
    const alern = document.getElementById(`validasi-${field}`);
    if (!alern) return;

    if (display !== null) {
        if (display === 'hidden') alern.classList.add('hidden');
    } else {
        alern.classList.remove('hidden');
    }

    alern.textContent = message;
}

