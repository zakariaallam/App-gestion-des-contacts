const erreur_login = document.getElementById('erreur_login');
if(erreur_login){
    let modale = new bootstrap.Modal(document.getElementById('login'));
    modale.show();
}

const btnAjoteContact = document.getElementById('btnAjoteContact');
const modifierContact = document.querySelectorAll('.modifierContact')

modifierContact.forEach(mdf =>{
    mdf.addEventListener('click',()=>{
       btnAjoteContact.textContent = 'Modifier'
    })
})
