document.addEventListener('DOMContentLoaded', () => {
    // Funcția pentru actualizarea datei și orei
    function updateDateTime() {
        const dateElement = document.querySelector('.data-stilizata');
        const now = new Date();
        dateElement.textContent = now.toISOString().split('T')[0]; // Format: YYYY-MM-DD
    }

    setInterval(updateDateTime, 1000); // Actualizează data și ora în fiecare secundă
    updateDateTime(); // Actualizare inițială

    // Elementul și textul pentru subtitlu
    const subtitleElement = document.querySelector('.subtitle');
    const text = "Aici este o mică descriere...";
    let index = 0;

    // Funcția pentru efectul de scriere literă cu literă
    function typeLetter() {
        if (index < text.length) {
            subtitleElement.textContent += text[index];
            index++;
            setTimeout(typeLetter, 4    ); // Viteza cu care se adaugă literele
        }
    }

    setTimeout(typeLetter, 5000); // Începe să scrie subtitlul după o întârziere de 5 secunde
});
document.addEventListener('scroll', () => {
    const cards = document.querySelectorAll('.card');
    cards.forEach(card => {
        const cardPosition = card.getBoundingClientRect().top;
        const screenPosition = window.innerHeight;
        if (cardPosition < screenPosition) {
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
        }
    });
});

