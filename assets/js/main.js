const erreur_login = document.getElementById("erreur_login");
if (erreur_login) {
  let modale = new bootstrap.Modal(document.getElementById("login"));
  modale.show();
}

const btnAjoteContact = document.getElementById("btnAjoteContact");
const modifierContact = document.querySelectorAll(".modifierContact");

modifierContact.forEach((mdf) => {
  mdf.addEventListener("click", () => {
    btnAjoteContact.textContent = "Modifier";
  });
});

// ------------- delete Contact -------------
const suprimierContact = document.querySelectorAll(".suprimierContact");
const btnModalDelete = document.getElementById("btnModalDelete");
let form = null ;
suprimierContact.forEach((btn) => {
  btn.addEventListener("submit", (e) => {
    e.preventDefault();
    btnModalDelete.disabled = true;
    form = btn
  });
});

const deleteInput = document.getElementById("deleteInput");
deleteInput.addEventListener("input", () => {
  if (deleteInput.value == "delete") {
    btnModalDelete.disabled = false;
    btnModalDelete.addEventListener("click", () => {
      deleteInput.value = ''
      form.submit();
    });
  }else{
     btnModalDelete.disabled = true;
  }
});


const dark = document.getElementById('dark');
const light = document.getElementById('light');

dark.addEventListener('click',()=>{
  
})