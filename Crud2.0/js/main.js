// ANIMAÇÃO DE TROCA DE TELA

/*===== LOGIN SHOW and HIDDEN =====*/
const signUp = document.getElementById('sign-up'),
    signIn = document.getElementById('sign-in'),
    loginIn = document.getElementById('login-in'),
    loginUp = document.getElementById('login-up'),
    loginBloco = document.getElementById('login-bloco')


signUp.addEventListener('click', ()=>{
    // Remova as classes primeiro, se elas existirem
    loginIn.classList.remove('block')
    loginUp.classList.remove('none')
    loginBloco.classList.remove('block')

    // Add classes
    loginIn.classList.toggle('none')
    loginUp.classList.toggle('block')
    loginBloco.classList.toggle('none')
})

signIn.addEventListener('click', ()=>{
    // Remova as classes primeiro, se elas existirem
    loginIn.classList.remove('none')
    loginUp.classList.remove('block')
    loginBloco.classList.remove('none')

    // Add classes
    loginIn.classList.toggle('block')
    loginUp.classList.toggle('none')
    loginBloco.classList.toggle('block')
})