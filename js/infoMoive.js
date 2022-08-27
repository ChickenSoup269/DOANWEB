// js nội dung thông tin phim khi click vào
const openModalButtons = document.querySelectorAll('[data-modal-target]')
const closeModalButtons = document.querySelectorAll('[data-close-button]')
const overlay = document.getElementById('overlayGH')

openModalButtons.forEach(button => {
    button.addEventListener('click', () => {
        const modal = document.querySelector(button.dataset.modalTarget)
        openModal(modal)
    })
})

overlay.addEventListener('click', () => {
    const modals = document.querySelectorAll('.modal.active')
    modals.forEach(modal => {
        closeModal(modal)
    })

})

closeModalButtons.forEach(button => {
    button.addEventListener('click', () => {
        const modal = button.closest('.modal')
        closeModal(modal)
    })
})

function openModal(modal) {
    if (modal == null) return
    modal.classList.add('active')
    overlay.classList.add('active')
}

function closeModal(modal) {
    if (modal == null) return
    modal.classList.remove('active')
    overlay.classList.remove('active')
    vid1.pause();
    vid2.pause();
    vid3.pause();
    vid4.pause();
    vid5.pause();
    vid6.pause();
    vid7.pause();
    vid8.pause();
    vid9.pause();
    vid10.pause();
    vid11.pause();
    vid12.pause();
    vid13.pause();
    vid14.pause();
    vid15.pause();
    vid16.pause();
    vid17.pause();
    vid18.pause();
    vid19.pause();
    vid20.pause();
    vid21.pause();
    vid22.pause();
}

var vid1 = document.querySelector("#videostop")
var vid2 = document.querySelector("#videostop2")
var vid3 = document.querySelector("#videostop3")
var vid4 = document.querySelector("#videostop4")
var vid5 = document.querySelector("#videostop5")
var vid6 = document.querySelector("#videostop6")
var vid7 = document.querySelector("#videostop7")
var vid8 = document.querySelector("#videostop8")
var vid9 = document.querySelector("#videostop9")
var vid10 = document.querySelector("#videostop10")
var vid11 = document.querySelector("#videostop11")
var vid12 = document.querySelector("#videostop12")
var vid13 = document.querySelector("#videostop13")
var vid14 = document.querySelector("#videostop14")
var vid15 = document.querySelector("#videostop15")
var vid16 = document.querySelector("#videostop16")
var vid17 = document.querySelector("#videostop17")
var vid18 = document.querySelector("#videostop18")
var vid19 = document.querySelector("#videostop19")
var vid20 = document.querySelector("#videostop20")
var vid21 = document.querySelector("#videostop21")
var vid22 = document.querySelector('#videostop404')


function dongvideo() {
    vid1.pause();
    vid2.pause();
    vid3.pause();
    vid4.pause();
    vid5.pause();
    vid6.pause();
    vid7.pause();
    vid8.pause();
    vid9.pause();
    vid10.pause();
    vid11.pause();
    vid12.pause();
    vid13.pause();
    vid14.pause();
    vid15.pause();
    vid16.pause();
    vid17.pause();
    vid18.pause();
    vid19.pause();
    vid20.pause();
    vid21.pause();
    vid22.pause();
}
