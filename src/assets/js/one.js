const entrar = document.getElementById("carlitos");
const registrarse = document.getElementById("registrarse");
const email = document.getElementById("email").value;
// const formRegister = document.getElementById("formRegister");
// email

entrar.addEventListener("click", (e) => {
  e.preventDefault();
  alert("Se ingreso correctamente");
  location.replace("https://blog-quantuum.vercel.app/");
});

registrarse.addEventListener("click", (e) => {
  e.preventDefault();
  alert("Registro guardao exitosamente");
  location.replace("https://blog-quantuum.vercel.app/");

  //   fetch("https://leandro-y-emilio-server.onrender.com/register", {
  //     method: "POST", // or 'PUT'
  //     body: JSON.stringify({
  //       email: "Leandro@gmail.com",
  //       password: "1234567",
  //     }), // data can be `string` or {object}!
  //     headers: {
  //       "Content-Type": "application/json",
  //     },
  //   })
  //     .then((r) => r.json())
  //     .then((r) => console.log(r));
});

// formRegister.addEventListener('submit',(e)=>{
//     console.log(e.target);
//     e.preventDefault()
//     const data = Object.fromEntries(
//         new FormData(e.target)
//     )
//     alert(JSON.stringify(data))
// })
