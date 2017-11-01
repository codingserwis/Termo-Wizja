class addAnimation {

    element: string;
    animationName: string;
    time: number;

    constructor(element: string, animationName: string, time: number) {
        this.element = element;
        this.animationName = animationName;
        this.time = time;
    }

    insertAnimation() {
    }
    
    setInterval() {
        let toAnimate: any = document.querySelector(this.element);
        setInterval(() => {
            toAnimate.classList.toggle(this.animationName);
        }, this.time);
    }
}

const domStrings = {
    telephoneLink : '#tel-link'
}

let callBtn = new addAnimation(domStrings.telephoneLink, 'shake-top', 3000);

callBtn.setInterval();

