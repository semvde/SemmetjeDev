window.addEventListener('DOMContentLoaded', init);

let gallery;
let lightbox;
let closeButton;
let lightboxImage;

function init() {
    gallery = document.querySelector('#gallery');
    lightbox = document.querySelector('#lightbox');
    closeButton = lightbox.querySelector('#lightbox-close');
    lightboxImage = lightbox.querySelector('#lightbox-image');

    gallery.addEventListener('click', galleryClickHandler);
    gallery.addEventListener('keydown', (e) => {
        if (e.key === 'Enter' || e.key === ' ') {
            galleryClickHandler(e)
        }
    });

    lightbox.addEventListener('click', closeLightBox);
    closeButton.addEventListener('click', closeLightBox);

    setupKeyboard();
}

function setupKeyboard() {
    closeButton.addEventListener('keydown', (e) => {
        if (e.key === 'Enter' || e.key === ' ') {
            closeLightBox(e);
        }
    });

    lightbox.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            closeLightBox(e);
        }
    });
}

function galleryClickHandler(e) {
    e.preventDefault();

    const clickedImage = e.target.closest('.gallery-image');

    openLightBox(clickedImage);
}

function openLightBox(image) {
    if (!image?.src) return;

    lightbox.classList.remove('hidden');
    lightbox.classList.add('flex');
    document.body.classList.add('scroll-lock');

    lightboxImage.setAttribute('src', image.src);
    lightboxImage.setAttribute('alt', image.alt);

    closeButton.focus();
}

function closeLightBox(e) {
    if (e.target !== lightbox && e.target !== closeButton) return;

    lightbox.classList.remove('flex');
    lightbox.classList.add('hidden');
    document.body.classList.remove('scroll-lock');

    lightboxImage.setAttribute('src', '');
    lightboxImage.setAttribute('alt', '');

    gallery.firstElementChild.firstElementChild.firstElementChild.focus();
}
