const navs = document.querySelector('#navigations')
const open = document.querySelector('.btnMenu')
const close = document.querySelector('.btnMenuClose')
document.querySelector('#hamburger')
  .addEventListener('click', ()=>{
    navs.classList.toggle('hidden')
    open.classList.toggle('hidden')
    close.classList.toggle('hidden')
  })