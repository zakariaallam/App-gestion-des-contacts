const rgx_name = /^[A-z0-9]{3,20}$/ ;
const rgx_pass = /^.{6,20}$/
const rgx_email = /^[A-z0-9]{3,6}\@[A-z]{3,6}\.[a-z]{2,3}$/

// ------------ login validation ------------

const login = document.forms['login'];

login.addEventListener('submit',(e)=>{
    e.preventDefault();
    const nameError = document.getElementById('nameError')
    const passError = document.getElementById('passError')
    let validLogin = true

    if(!rgx_name.test(login['name'].value)){
          nameError.textContent = 'Nom invalide'
          validLogin = false
    }else{
      nameError.textContent = ''
    }
    if(!rgx_pass.test(login['password'].value)){
          passError.textContent = 'Password invalide'
          validLogin = false
    }else{
      passError.textContent = ''
    }

    if(validLogin){
      login.submit()
    }
})

// ------------------- SinUp validation ----------------

const Sinup = document.forms['Sinup'];

Sinup.addEventListener('submit',(e)=>{
    e.preventDefault();
    const SnameError = document.getElementById('SnameError')
    const SemailError = document.getElementById('SemailError')
    const SpassError = document.getElementById('SpassError')
    const ScomfirmError = document.getElementById('ScomfirmError')
    let validSinUp = true

    if(!rgx_name.test(Sinup['name'].value)){
          SnameError.textContent = 'Nom invalide'
          validSinUp = false
    }else{
      SnameError.textContent = ''
    }

    if(!rgx_email.test(Sinup['email'].value)){
          SemailError.textContent = 'Email invalide'
          validSinUp = false
    }else{
      SemailError.textContent = ''
    }

    if(!rgx_pass.test(Sinup['password'].value)){
          SpassError.textContent = 'Password invalide'
          validSinUp = false
    }else{
      SpassError.textContent = ''
    }
    if(Sinup['password'].value != Sinup['comfirm_pass'].value){
          ScomfirmError.textContent = 'Confirmation Password invalide'
          validSinUp = false
    }else{
      ScomfirmError.textContent = ''
    }

    if(validSinUp){
      Sinup.submit()
    }
})