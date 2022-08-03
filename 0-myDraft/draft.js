let burger = document.getElementsByClassName("burger")[0];
let headerLinks = document.getElementsByClassName("header-links")[0];
let close = document.getElementsByClassName("close")[0];


burger.addEventListener('click', () => {
    close.classList.toggle('show');
    headerLinks.classList.toggle('hide');
    burger.classList.toggle('hide');
})

close.addEventListener('click', () => {
    close.classList.toggle('show');
    headerLinks.classList.toggle('hide');
    burger.classList.toggle('show');
})