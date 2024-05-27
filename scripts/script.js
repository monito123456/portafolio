document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const menu = document.querySelector('.menu');
    const menuClose = document.querySelector('.menu-close');

    menuToggle.addEventListener('click', function() {
        menu.classList.add('active');
    });

    menuClose.addEventListener('click', function() {
        menu.classList.remove('active');
    });
});


document.querySelector('.btn-danger').addEventListener('click', function(event) {
    event.preventDefault();
    fetch('../controller/logout.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            window.location.href = 'login.php';
        } else {
            console.log('Logout fallido');
            alert('Logout fallido!');
        }
    })
    .catch(error => console.error('Error:', error));
});
