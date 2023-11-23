let logBtn = document.querySelector('.log a');
let login = document.querySelector('.login');

logBtn.addEventListener('click', () => {
    login.classList.toggle('active');
})