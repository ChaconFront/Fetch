window.addEventListener("load", (e) => {
  let form = document.getElementById("formulario"),
    usuario = document.getElementById("usuario"),
    password = document.getElementById("password");

  //funcion encargada de eviar estos datos a traves del metodo post con fetch

  function data() {
    let datos = new FormData();
    datos.append("usuario", usuario.value);
    datos.append("password", password.value);
    fetch("validaLogin.php", {
      method: "POST",
      body: datos,
    })
      .then((Response) => Response.json())
      .then(({ success }) => {
        if (success=== 1) {
            location.href='';
        }else{
            form.reset()

        }
        
      });
  }

  form.addEventListener("submit", (e) => {
    e.preventDefault();

    data();
  });
});
