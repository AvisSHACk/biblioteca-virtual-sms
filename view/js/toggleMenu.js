const ToggleMenu = (container) => {
    let nav = container.querySelector('.User__menu'),
        buttonNav = container.querySelector('.User__cimage');
        
    buttonNav.addEventListener('click', (e) => {
        e.preventDefault();
        nav.classList.toggle('active');
    })
}

export default ToggleMenu;