const form = document.getElementById("form-curriculum");
const button = document.getElementById("button");
const fileInput = document.querySelector(".file-input");
const fileName = document.getElementById("fileName");
const MAX_FILE_SIZE = 3 * 1024 * 1024;

const phoneMask = IMask(document.getElementById("phone"), {
  mask: [{ mask: "(00) 0000-0000" }, { mask: "(00) 00000-0000" }],
  dispatch: (appended, dynamicMasked) => {
    const digits = (dynamicMasked.value + appended).replace(/\D/g, "");
    return digits.length > 10
      ? dynamicMasked.compiledMasks[1]
      : dynamicMasked.compiledMasks[0];
  },
});

function markError(item) {
  item.classList.add("error");
  item.parentElement.classList.add("error");
}

function clearError(item) {
  item.classList.remove("error");
  item.parentElement.classList.remove("error");
}

function checkInputs() {
  const items = document.querySelectorAll(".item");

  for (const item of items) {
    if (item.value == "") {
      markError(item);
    }

    item.addEventListener("keyup", () => {
      if (item.value != "") {
        clearError(item);
      } else {
        markError(item);
      }
    });
  }

  if (fileInput && fileInput.files.length === 0) {
    markError(fileInput);
  }
}

fileInput.addEventListener("change", () => {
  const file = fileInput.files[0];
  if (file) {
    if (file.type !== "application/pdf" || file.size > MAX_FILE_SIZE) {
      fileInput.value = "";
      fileName.textContent = "Nenhum arquivo selecionado";
      markError(fileInput);
      Swal.fire({
        title: "Error!",
        text:
          file.type !== "application/pdf"
            ? "Anexe um arquivo em formato PDF"
            : "O currículo deve ter no máximo 4 MB",
        icon: "error",
        confirmButtonText: "Ok",
      });
    } else {
      fileName.textContent = file.name;
      clearError(fileInput);
    }
  } else {
    fileName.textContent = "Nenhum arquivo selecionado";
  }
});

form.addEventListener("submit", function (e) {
  e.preventDefault();
  checkInputs();

  const file = fileInput ? fileInput.files[0] : null;
  const invalidPdf = file && file.type !== "application/pdf";
  const oversized = file && file.size > MAX_FILE_SIZE;
  const hasErrors = form.querySelectorAll(".item.error").length > 0;

  if (hasErrors || invalidPdf || oversized) {
    Swal.fire({
      title: "Error!",
      text: "Preencha todos os campos e anexe seu currículo em PDF (máx. 4 MB)",
      icon: "error",
      confirmButtonText: "Ok",
    });
    return;
  }

  button.classList.add("loading");
  button.disabled = true;

  const formData = new FormData(form);

  fetch("https://mailtrap-send.vercel.app/api/emails/send-curriculum", {
    method: "POST",
    body: formData,
  })
    .then(async (response) => {
      if (response.status == 200) {
        Swal.fire({
          title: "Success!",
          text: "Seu currículo foi enviado",
          icon: "success",
          confirmButtonText: "Ok",
        });
      } else {
        if (Swal.isVisible()) return;
        let message = "Alguma coisa deu errado, tente novamente mais tarde";
        let details = "";
        try {
          const data = await response.json();
          if (data && data.message) {
            message = data.message;
          }
          if (data && typeof data.errors === "object" && data.errors !== null) {
            const labels = {
              name: "Nome",
              email: "E-mail",
              phone: "Telefone",
              file: "Currículo",
            };
            const lines = [];
            for (const [field, messages] of Object.entries(data.errors)) {
              const label = labels[field] || field;
              for (const msg of messages) {
                lines.push(`${label}: ${msg}`);
              }
            }
            if (Array.isArray(data.formErrors)) {
              for (const msg of data.formErrors) {
                lines.push(msg);
              }
            }
            details = lines.join("<br>");
          }
        } catch (err) {
          // Resposta sem corpo JSON (ex.: 413 da plataforma).
        }
        const content = details ? `${message}<br><br>${details}` : message;
        Swal.fire({
          title: "Error!",
          icon: "error",
          confirmButtonText: "Ok",
          ...(details ? { html: content } : { text: content }),
        });
      }
    })
    .catch((error) => {
      console.log(error);
      if (Swal.isVisible()) return;
      Swal.fire({
        title: "Error!",
        text: `Alguma coisa deu errado, tente novamente mais tarde. Codigo: ${error}`,
        icon: "error",
        confirmButtonText: "Ok",
      });
    })
    .then(function () {
      form.reset();
      phoneMask.value = "";
      fileName.textContent = "Nenhum arquivo selecionado";
      button.classList.remove("loading");
      button.disabled = false;
      button.innerHTML = "Enviar";
    });
});
