document.addEventListener('DOMContentLoaded', function () {
    const toggle = document.getElementById('togglePassword');
    if (toggle) {
        toggle.addEventListener('click', function () {
            const pwd = document.getElementById('password');
            const type = pwd.getAttribute('type') === 'password' ? 'text' : 'password';
            pwd.setAttribute('type', type);
            this.textContent = type === 'password' ? 'Mostrar' : 'Ocultar';
        });
    }
});
