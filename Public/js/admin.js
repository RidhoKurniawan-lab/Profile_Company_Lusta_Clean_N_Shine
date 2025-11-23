document.addEventListener('DOMContentLoaded', initApp);

function initApp() {
    const path = window.location.pathname;
    getContact(path);
}

async function deleteContact(id, path) {
    if (!confirm('Apakah anda yakin ingin menghapus data ini?')) return;
    try {
        const response = await fetch('/admin/delete_contact', {
            method: 'DELETE',
            body: JSON.stringify({ id: id }),
        });

        const result = await response.json();
        if (result.success) {
            getContact(path);
        } else {
            alert('Duh ada gangguan di server nih, Silahkan coba berberapa saat lagi')
        }

    } catch (error) {
        console.log('Error: ', error);
    }
}

async function getContact(path) {
    const response = await fetch('/admin/get_contact');
    const result = await response.json();
    let index = 1;


    if (path !== '/admin/contact') return;

    const tbody = document.getElementById('tableContact');
    tbody.innerHTML = "";
    
    result.forEach(item => {
        const tr = document.createElement('tr');

        const th = document.createElement('th');
        th.scope = "Row";
        th.textContent = index;
        tr.appendChild(th);

        const tdName = document.createElement('td');
        tdName.textContent = item['name'];
        tr.appendChild(tdName);

        const tdEmail = document.createElement('td');
        tdEmail.textContent = item['email'];
        tr.appendChild(tdEmail);

        const tdMessage = document.createElement('td');
        tdMessage.textContent = item['message'];
        tdMessage.classList.add('text-break')
        tr.appendChild(tdMessage);

        const tdButton = document.createElement('td');

        const button = document.createElement('button');
        button.classList.add('btn', 'btn-sm', 'btn-outline-danger', 'rounded-circle');
        button.title = 'Delete';
        tdButton.appendChild(button);

        const icon = document.createElement('i');
        icon.classList.add('bi', 'bi-trash');
        button.appendChild(icon);

        tr.appendChild(tdButton);

        tbody.appendChild(tr);

        button.addEventListener('click', () => {
            deleteContact(item['id_contact'], path);
        })

        index++;
    });


}