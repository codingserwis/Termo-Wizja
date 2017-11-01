"use strict";
var addAnimation = /** @class */ (function () {
    function addAnimation(element, animationName, time) {
        this.element = element;
        this.animationName = animationName;
        this.time = time;
    }
    addAnimation.prototype.insertAnimation = function () {
    };
    addAnimation.prototype.setInterval = function () {
        var _this = this;
        var toAnimate = document.querySelector(this.element);
        setInterval(function () {
            toAnimate.classList.toggle(_this.animationName);
        }, this.time);
    };
    return addAnimation;
}());
var domStrings = {
    telephoneLink: '#tel-link'
};
var callBtn = new addAnimation(domStrings.telephoneLink, 'shake-top', 3000);
callBtn.setInterval();
