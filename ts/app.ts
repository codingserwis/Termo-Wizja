class domEvents {

    setInterval(element: string, animation: string, time: number) {
        
        let toAnimate: HTMLElement = document.querySelector(element);
        
        if (toAnimate) {
            setInterval(() => {
                toAnimate.classList.toggle(animation);
            }, time);
        }
    }

    addClassToHeader() {
        
       let elem: HTMLElement = document.querySelector('header');

        window.addEventListener('scroll', () => {
            if (elem.classList.contains('main-header')) {
                if (window.pageYOffset > 100)
                    elem.classList.add('white');
                else 
                    elem.classList.remove('white');
            }
        });
    }
}

const domStrings = {
    telephoneLink : '#tel-link'
}

const animations = {
    shaking: 'shake-top'
}

let callBtn = new domEvents().setInterval(domStrings.telephoneLink, animations.shaking , 3000);
let whiteHeaderBcg = new domEvents().addClassToHeader();