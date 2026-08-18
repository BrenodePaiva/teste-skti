const form = document.getElementById("form");
const button = document.getElementById("button");
const firstName = document.getElementById("name");
const lastName = document.getElementById("lastname");
const email = document.getElementById("email");
const message = document.getElementById("message");

function checkInputs() {
  const items = document.querySelectorAll(".item");

  for (const item of items) {
    if (item.value == "") {
      item.classList.add("error");
      item.parentElement.classList.add("error");
    }

    item.addEventListener("keyup", () => {
      if (item.value != "") {
        item.classList.remove("error");
        item.parentElement.classList.remove("error");
      } else {
        item.classList.add("error");
        item.parentElement.classList.add("error");
      }
    });
  }
}

form.addEventListener("submit", function (e) {
  const formData = new FormData(form);
  e.preventDefault();
  checkInputs();

  const object = Object.fromEntries(formData);
  const json = JSON.stringify(object);

  button.classList.add("loading");
  button.disabled = true;

  if (
    firstName.classList.contains("error") ||
    lastName.classList.contains("error") ||
    email.classList.contains("error") ||
    message.classList.contains("error")
  ) {
    Swal.fire({
      title: "Error!",
      text: "Preencha todos os campos",
      icon: "error",
      confirmButtonText: "Ok",
    });
    return setTimeout(() => {
      button.classList.remove("loading");
      button.disabled = false;
      button.innerHTML = "Enviar";
    }, 1000);
  }

  fetch("https://mailtrap-send.vercel.app/api/emails/send-contact", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
      Accept: "application/json",
    },
    body: json,
  })
    .then(async (response) => {
      if (response.status == 200) {
        Swal.fire({
          title: "Success!",
          text: "Sua mensagem foi enviada",
          icon: "success",
          confirmButtonText: "Ok",
        });
      } else {
        Swal.fire({
          title: "Error!",
          text: "Alguma coisa deu errado, tente novamente mais tarde",
          icon: "error",
          confirmButtonText: "Ok",
        });
      }
    })
    .catch((error) => {
      console.log(error);
      Swal.fire({
        title: "Error!",
        text: `Alguma coisa deu errado, tente novamente mais tarde. Codigo: ${error}`,
        icon: "error",
        confirmButtonText: "Ok",
      });
    })
    .then(function () {
      form.reset();
      button.classList.remove("loading");
      button.disabled = false;
      button.innerHTML = "Enviar";
      // setTimeout(() => {
      //     result.style.display = "none";
      // }, 3000);
    });
});
