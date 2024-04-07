
const menuMob = document.getElementById('menu-mobile')
    const btn = document.getElementById('btn-menu')
    
    menuMob.addEventListener('click', animar)
function animar(){
    
    menuMob.classList.toggle('abrir')
    btn.classList.toggle('ativar')
}

const panels = document.querySelectorAll('.panel')

panels.forEach(panel => {
    panel.addEventListener('click', () => {
        removeActiveClasses()
        panel.classList.add('active')
    })
})

function removeActiveClasses() {
    panels.forEach(panel => {
        panel.classList.remove('active')
    })
}
