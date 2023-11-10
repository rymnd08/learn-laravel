const overlay = document.querySelector('.overlay')
document.querySelector('.add-button')
  .addEventListener('click', ()=> {
      overlay.classList.remove('hidden')
  })

overlay.addEventListener('click', ()=>{
  if(e.target.classList.contains('overlay'))
    overlay.classList.add('hidden')
})
document.querySelector('.close-modal').addEventListener('click', ()=>{
    overlay.classList.add('hidden')
})