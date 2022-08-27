//  js đoạn 
let accordian = document.getElementsByClassName("FAQ__title");

for (let i = 0; i < accordian.length; i++) {
    accordian[i].addEventListener("click", function () {
        if (this.childNodes[1].classList.contains("fa-plus")) {
            this.childNodes[1].classList.remove("fa-plus");
            this.childNodes[1].classList.add("fa-times");
        } else {
            this.childNodes[1].classList.remove("fa-times");
            this.childNodes[1].classList.add("fa-plus");
        }

        let content = this.nextElementSibling;
        if (content.style.maxHeight) {
            content.style.maxHeight = null;
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
        }
    });
}

/* js cho nội dung dấu đi và hiện ra */
window.addEventListener('scroll', reveal);
function reveal() {
    var reveals = document.querySelectorAll('.reveal');

    for (var i = 0; i < reveals.length; i++) {

        var windowheight = window.innerHeight;
        var revealtop = reveals[i].getBoundingClientRect().top;
        var revealpoint = 150;

        if (revealtop < windowheight - revealpoint) {
            reveals[i].classList.add('active');
        }
        else {
            reveals[i].classList.remove('active');
        }
    }
}

