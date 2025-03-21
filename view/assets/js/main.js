// Marca o menu ativo
document
	.querySelector('#nav-items')
	.querySelectorAll('.nav-link')
    .forEach((navLink) => {
        const uriAtual = window.location.pathname
        if (navLink.href.includes(uriAtual)) {
            navLink.classList.add('active')
        }
    })

const mobileMenu = document.querySelector('#menu-mobile')
const sidebar = document.querySelector('#sidebar')
mobileMenu.addEventListener('click', () => {
    sidebar.classList.toggle('open')
})

// Popup de editar

function mostrarPopup() {
    document.getElementById('popup').style.display = 'block';
    document.getElementById('popupOverlay').style.display = 'block';
}

function fecharPopup() {
    document.getElementById('popup').style.display = 'none';
    document.getElementById('popupOverlay').style.display = 'none';
    
}
// dropdown
function toggleDropdown() {
    var dropdown = document.getElementById("dropdown");
    if (dropdown.style.display === "block") {
        dropdown.style.display = "none";
    } else {
        dropdown.style.display = "block";
    }
}