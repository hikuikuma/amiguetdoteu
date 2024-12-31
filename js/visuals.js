(function ($) {
    // Display mail adress only with JS
    $('.privateMail').html('<a href="mailto:lionel@amiguet.eu">lionel@amiguet.eu</a>')
})(jQuery)

document.addEventListener('scroll', () => {
    const scroll = window.scrollY
    const header = document.getElementsByClassName('site-header')[0]
    const topHeader = header.offsetTop
    let bottomHeader = header.offsetHeight
    let wpAdminBarHeight = 0
    if (document.body.classList.contains('admin-bar')) {
        wpAdminBarHeight = document.getElementById('wpadminbar').clientHeight
        bottomHeader = bottomHeader + wpAdminBarHeight
    }

    if (document.body.clientWidth < 1200) {
        if (scroll > topHeader) header.classList.add('sticky')
        if (scroll <= wpAdminBarHeight) header.classList.remove('sticky')
    } else {
        if (scroll > bottomHeader) header.classList.add('sticky')
    }
        if (scroll <= topHeader) header.classList.remove('sticky')
})