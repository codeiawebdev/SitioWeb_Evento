const spinner_loader = document.querySelector('.custom-container-spinner');

setTimeout(() => {
    spinner_loader.style.opacity = '0';
}, 1000);

window.addEventListener('load', () => {
    spinner_loader.style.opacity = '0';

    setTimeout(() => {
        spinner_loader.style.display = 'none';
    }, 200);
});