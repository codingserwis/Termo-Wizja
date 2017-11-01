class domEvents {

    setInterval(element: string, animation: string, time: number) {
        
        let toAnimate: any  = document.querySelector(element);
        if (toAnimate) {
            setInterval(() => {
                toAnimate.classList.toggle(animation);
            }, time);
        }
    }
}

const domStrings = {
    telephoneLink : '#tel-link'
}

const animations = {
    shaking: 'shake-top'
}

let callBtn = new domEvents().setInterval(domStrings.telephoneLink, animations.shaking , 3000);