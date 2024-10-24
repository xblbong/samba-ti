// ketika hamburger di click
const navbarNav = document.querySelector('.sidebar');
const menu_btn = document.querySelector('.hamburger');

document.querySelector('#hamburger_home').
onclick = () => {
    navbarNav.classList.toggle('actives');
    menu_btn.classList.toggle('is-active');
};


const hamburger = document.querySelector
('#hamburger_home');

document.addEventListener('click', function(e){
    if(!hamburger.contains(e.target) && !navbarNav.contains(e.target)){
    navbarNav.classList.remove('actives');
    menu_btn.classList.remove('is-active');
    }

});

//navbar scroll transparent
const navEl = document.querySelector('.scroll');
const navMid = document.querySelector('.scroll');
window.addEventListener('scroll', () => {
    if (window.scrollY > 19) {
        navMid.classList.add('navbar-scrolled');
    }else{
        navMid.classList.remove('navbar-scrolled');
    }
});
// finish navbar scroll transparent

// start pop up
const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if (entry.isIntersecting) {
            entry.target.classList.add('show-up');
        } else {
            entry.target.classList.remove('show-up');
        }
    });
});

const hiddenElements = document.querySelectorAll('.hidden-up');
hiddenElements.forEach((el) => observer.observe(el));
// finish pop up

// start scale
const observerScale = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if (entry.isIntersecting) {
            entry.target.classList.add('show-fade-in');
        } else {
            entry.target.classList.remove('show-fade-in');
        }
    });
});

const hiddenElementsScale = document.querySelectorAll('.fade-in');
hiddenElementsScale.forEach((el) => observerScale.observe(el));


// start pop left
const observerLeft = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if (entry.isIntersecting) {
            entry.target.classList.add('show-left');
        } else {
            entry.target.classList.remove('show-left');
        }
    });
});

const hiddenElementsLeft = document.querySelectorAll('.hidden-left');
hiddenElementsLeft.forEach((el) => observerLeft.observe(el));
// finish pop right

const observerRight = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if (entry.isIntersecting) {
            entry.target.classList.add('show-right');
        } else {
            entry.target.classList.remove('show-right');
        }
    });
});

const hiddenElementsRight = document.querySelectorAll('.hidden-right');
hiddenElementsRight.forEach((el) => observerRight.observe(el));


const galleryContainer = document.querySelector('.gallery-container');
const galleryControlsContainer = document.querySelector('.gallery-controls');
const galleryControls = ['previous', 'next'];
const galleryItems = document.querySelectorAll('.gallery-item');

class Carousel {
    constructor(container, items, controls) {
        this.carouselContainer = container;
        this.carouselControls = controls;
        this.carouselArray = [...items];
        this.currentIndex = 2; // Mulai dari gambar tengah
        this.setControls();
        this.updateGallery();
        this.useControls();
    }

    updateGallery() {
        this.carouselArray.forEach((el, index) => {
            el.classList.remove('gallery-item-1', 'gallery-item-2', 'gallery-item-3', 'gallery-item-4', 'gallery-item-5');
            const itemIndex = (this.currentIndex - 2 + index + 5) % 5 + 1;
            el.classList.add(`gallery-item-${itemIndex}`);
        });
    }

    setCurrentState(direction) {
        if (direction === 'previous') {
            this.currentIndex = (this.currentIndex - 1 + this.carouselArray.length) % this.carouselArray.length;
        } else {
            this.currentIndex = (this.currentIndex + 1) % this.carouselArray.length;
        }
        this.updateGallery();
    }

    setControls() {
        this.carouselControls.forEach(control => {
            const button = document.createElement('button');
            button.className = `gallery-controls-${control}`;
            button.innerText = control;
            galleryControlsContainer.appendChild(button);
        });
    }

    useControls() {
        this.carouselControls.forEach(control => {
            document.querySelector(`.gallery-controls-${control}`).addEventListener('click', () => {
                this.setCurrentState(control);
            });
        });
    }
}

const exampleCarousel = new Carousel(galleryContainer, galleryItems, galleryControls);
