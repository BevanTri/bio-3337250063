document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href'))
            .scrollIntoView({ behavior: 'smooth' });
    });
});    

function downloadCV() {
    alert('CV sedang diunduh...');
}

function kirimPesan(event) {
    event.preventDefault();

    const nama = document.getElementById('nama').value;
    const email = document.getElementById('email').value;
    const pesan = document.getElementById('pesan').value;

    if(nama === '' || email === '' || pesan === '') {
        alert('Semua field harus diisi');
        return;
    }

    alert(`Terima Kasih ${nama}! Pesan Anda telah terkirim.`);
    document.getElementById('contactForm').reset(); // Reset form setelah submit
}

window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    if(window.scrollY > 100) {
        navbar.style.boxShadow = '0 2px 10px rgba(0,0,0,0.1)'; // Diperbaiki
    } else {
        navbar.style.boxShadow = 'none';
    }
});