(($) => {

    // dom elements
    const domController = (() => {
        const domElements = {
            header: '.main-header',
            animatedElem: '#tel-link'
        }

        return {
            getDomElements: () => {
                return domElements;
            }
        }
    })();

    // app controller 
    const appController = ((_domCtrl) => {
        let domElements = _domCtrl.getDomElements();

        const whiteHeaderBcg = () => {
            let $header = $(domElements.header),
                $window = $(window);

            $window.on('scroll', () => {
                if($window.scrollTop() > 100){
                    $header.addClass('white');
                } else {
                    $header.removeClass('white');
                }
            });
        };

        const toAnimate = () => {
            let $elemToAnimate = $(domElements.animatedElem);

            if($elemToAnimate) {
                setInterval(() => {
                    $elemToAnimate.toggleClass('shake-top');
                }, 3000);
            }
        }

        return {
            init: () => {
                whiteHeaderBcg();
                toAnimate();
            }
        }
    })(domController);

    appController.init();

})(jQuery);