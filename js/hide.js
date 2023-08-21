// VISUALIZAÇÃO DO INPUT PASSWORD

const showHiddenInput = (inputPass, inputIcon) => {
    const input = document.getElementById(inputPass),
          iconEye = document.getElementById(inputIcon) 

    iconEye.addEventListener('click', () =>{
        if(input.type === 'password') {
            input.type = 'text'

            iconEye.classList.add('bx-show')
        }else{
            input.type = 'password'

            iconEye.classList.remove('bx-show')
        }
    })

}

showHiddenInput('input-hide','input-icon')