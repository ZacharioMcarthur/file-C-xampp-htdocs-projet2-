 let container = document.querySelector('.main-container')
 let reglink = document.getElementById("reg-link")
 let loglink = document.getElementById("log-link")
 let login = document.querySelector('.connexion')
 let register = document.querySelector('.inscription')
 reglink.addEventListener('click', () => {
    container.classList.add('active')
    login.classList.add('condefile')
    register.classList.add('insdefile')
 })
 loglink.addEventListener('click', () => {
    container.classList.remove('active')
    login.classList.remove('condefile')
    register.classList.remove('insdefile')
 })
 