import './bootstrap';
document.addEventListener('DOMContentLoaded', function() {
    // Foco no primeiro item do menu
    const firstNavLink = document.querySelector('nav ul li a');
    if (firstNavLink) {
        firstNavLink.focus();
    }

    // Efeito de hover no menu
    const navLinks = document.querySelectorAll("nav ul li a");
    navLinks.forEach(link => {
        link.addEventListener("mouseover", () => {
            link.style.color = "#FFD700";
        });
        link.addEventListener("mouseout", () => {
            link.style.color = "white";
        });
    });
});
