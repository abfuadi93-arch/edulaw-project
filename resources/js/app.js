import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.data('heroSlider', (slides = []) => ({
    active: 0,
    timer: null,
    slides,

    init() {
        this.start();
    },

    get current() {
        return this.slides[this.active] || {};
    },

    next() {
        this.active = (this.active + 1) % this.slides.length;
        this.restart();
    },

    prev() {
        this.active = (this.active - 1 + this.slides.length) % this.slides.length;
        this.restart();
    },

    go(index) {
        this.active = index;
        this.restart();
    },

    start() {
        if (this.slides.length < 2) {
            return;
        }

        this.timer = window.setInterval(() => {
            this.active = (this.active + 1) % this.slides.length;
        }, 6000);
    },

    stop() {
        if (this.timer) {
            window.clearInterval(this.timer);
            this.timer = null;
        }
    },

    restart() {
        this.stop();
        this.start();
    },
}));

Alpine.start();
