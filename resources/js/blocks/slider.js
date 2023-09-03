export class Slider {
    /**
     * @param slider
     * @param autoplay
     * @param autoplayTime
     * @param dots
     * @param navigationArrows
     * @param inFrame
     * @param offset
     */
    constructor(slider, {autoplay = true, autoplayTime = 1000, dots = true, navigationArrows = true, inFrame = 1, offset = 1} = {}) {
        this.slider = slider;

        this.inFrame = inFrame;
        this.offset = offset;
        this.autoplay = (autoplay === true || autoplay === 1) ?? false;
        this.autoplayTime = typeof autoplayTime === 'number' ? autoplayTime : 1000;
        this.showDots = (dots === true || dots === 1) ?? false;
        this.showNavigationArrows = (navigationArrows === true || navigationArrows === 1) ?? false;

        this.allItems = slider.querySelectorAll('[class*="__inner"]');
        this.itemCount = this.allItems.length;

        this.allFrames = this.frames();
        this.frameCount = this.allFrames.length;
        this.frameIndex = 0;

        this.wrapper = slider.querySelector('[class*="__wrapper"]');
        this.nextButton = slider.querySelector('[class*="__arrow-next"]');
        this.prevButton = slider.querySelector('[class*="__arrow-prev"]');

        this.paused = null;

        this.initialization();
    }

    initialization() {
        this.allItems.forEach((item) => item.style.width = `${100 / this.itemCount}%`);
        const wrapperWidth = this.itemCount / this.inFrame * 100;
        this.wrapper.style.width = `${wrapperWidth}%`;

        if(this.showNavigationArrows){
            this.nextButton.addEventListener('click', (event) => {
                event.preventDefault();
                this.next();
            });

            this.prevButton.addEventListener('click', (event) => {
                event.preventDefault();
                this.prev();
            });
        }

        if(this.showDots){
            this.dotButtons = this.dots();

            this.dotButtons.forEach((dot) => {
                dot.addEventListener('click', (event) => {
                    event.preventDefault();
                    const frameIndex = this.dotButtons.indexOf(event.target);
                    if (frameIndex === this.frameIndex) return;
                    this.goto(frameIndex);
                });
            });
        }

        if (this.autoplay) {
            this.play();
            this.slider.addEventListener('mouseenter', () => clearInterval(this.paused));
            this.slider.addEventListener('mouseleave', () => this.play());
        }
    }

    /**
     * @param index
     */
    goto(index) {
        if (index > this.frameCount - 1) {
            this.frameIndex = 0;
        } else if (index < 0) {
            this.frameIndex = this.frameCount - 1;
        } else {
            this.frameIndex = index;
        }

        this.move();
    }

    next() {
        this.goto(this.frameIndex + 1);
    }

    prev() {
        this.goto(this.frameIndex - 1);
    }

    move() {
        const offset = 100 / this.itemCount * this.allFrames[this.frameIndex];
        this.wrapper.style.transform = `translateX(-${offset}%)`;
        if(this.showDots) {
            this.dotButtons.forEach((dot) => dot.classList.remove('active'));
            this.dotButtons[this.frameIndex].classList.add('active');
        }
    }

    play() {
        this.paused = setInterval(() => this.next(), this.autoplayTime);
    }

    dots() {
        const ol = document.createElement('ol');
        ol.classList.add('banners-indicators');
        const children = [];
        for (let i = 0; i < this.frameCount; i++) {
            const li = document.createElement('li');
            if (i === 0) li.classList.add('active');
            ol.append(li);
            children.push(li);
        }
        this.slider.append(ol);
        return children;
    }

    frames() {
        const temp = [];
        for (let i = 0; i < this.itemCount; i++) {
            if (this.allItems[i + this.inFrame - 1] !== undefined) {
                temp.push(i);
            }
        }
        const allFrames = [];
        for (let i = 0; i < temp.length; i += this.offset) {
            allFrames.push(temp[i]);
        }
        if (allFrames[allFrames.length - 1] !== temp[temp.length - 1]) {
            allFrames.push(temp[temp.length - 1]);
        }
        return allFrames;
    }
}
