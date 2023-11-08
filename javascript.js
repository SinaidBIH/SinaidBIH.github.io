// JavaScript to handle lightbox functionality
const gallery = document.querySelector('.gallery');
const lightbox = document.getElementById('lightbox');
const lightboxImage = document.getElementById('lightbox-image');

gallery.addEventListener('click', (e) => {
    if (e.target.tagName === 'IMG') {
        lightbox.style.display = 'block';
        lightboxImage.src = e.target.src;
    }
});

function closeLightbox() {
    lightbox.style.display = 'none';
}