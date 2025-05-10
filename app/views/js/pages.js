//Genera el menú de hamburguesa y lo esconde si el dispositivo es demasiado grande.
document.querySelector('.menu-toggle').addEventListener('click', function() {
    document.querySelector('.nav-links').classList.toggle('active');
});

// Animación al hacer scroll (Aparecen elementos al hacer scroll)
document.addEventListener('DOMContentLoaded', () => {
    const infoSections = document.querySelectorAll('.info');
        
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if(entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, {
        threshold: 0.1 // Activa cuando el 10% del elemento es visible
    });

    infoSections.forEach(section => {
        observer.observe(section);
    });
});