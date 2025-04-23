let nom = document.getElementById("nom")
let age = document.getElementById("age")
let ville = document.getElementById("ville")
let envoi = document.getElementById("envoyer")
let message = document.getElementById("msg")
let fenetre = document.querySelector(".message")
envoi.addEventListener('click', () => {
    fenetre.classList.add('active');
    console.log(nom.value, age.value, ville.value)
    let aff = `${nom.value}, ${age.value} an(s), de ${ville.value}` 
    message.innerText = aff
})
fenetre.addEventListener('click', () => {
    fenetre.classList.remove('active')
})