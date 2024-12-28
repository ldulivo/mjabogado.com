const dialog = document.getElementById("dialog");
const dialogBackdrop = document.getElementById("dialog_backdrop");
const dialogClose = document.getElementById("dialog_close");
const dialogContent = document.getElementById("dialog_content");

const sendButton = document.getElementById("dialog_send");
const inputs = document.querySelectorAll(".dialog-form input, .dialog-form textarea");
const successMessage = document.getElementById("successMessage");

const dialogButtons = document.querySelectorAll(".dialog-button");
dialogButtons.forEach((button) => {
  button.addEventListener("click", (e) => {
    openDialog(button.dataset.dialog);
  });
});

// close dialog
dialogBackdrop.addEventListener("click", () => {
  closeDialog();
});

dialogClose.addEventListener("click", () => {
  closeDialog();
});

successMessage.addEventListener("click", () => {
  closeDialog();
});

const closeDialog = () => {
  dialogContent.innerHTML = "";
  dialog.style.display = "none";
  dialogBackdrop.style.display = "none";
  successMessage.style.display = "none";
  sendButton.disabled = false;
  inputs.forEach((input) => (input.value = "")); // Limpiar formulario
};

// open dialog
const openDialog = (content) => {
  dialog.style.display = "flex";
  dialogBackdrop.style.display = "flex";
  dialogContent.style.display = "none";
  if (servicios[content] !== undefined) {
    dialogContent.style.display = "flex";
    dialogContent.innerHTML = "<h2>" + servicios[content]["title"] + "</h2>";
    dialogContent.innerHTML += "<p>" + servicios[content]["description"] + "</p>";
  }
};

const servicios = {
  "civil": {
    "title": "Derecho <span>civil</span>",
    "description": "Protegemos tus derechos en cualquier materia civil. Encontramos <span>soluciones sólidas</span>, <span>cercanas</span> y <span>efectivas</span>, proporcionándote la <span>tranquilidad</span> que mereces."
  },
  "penal": {
    "title": "Derecho <span>penal</span>",
    "description": "Entendemos la importancia que tiene <span>una defensa firme y personalizada</span>. Te brindamos <span>una protección integral</span> con compromiso y transparencia."
  },
  "tráfico": {
    "title": "Accidentes <span>de tráfico</span>",
    "description": "Junto con nuestros profesionales colaboradores <span>gestionamos</span> y buscamos que <span>recibas la compensación que te corresponde</span>. Te mantenemos <span>informado</span> y <span>asesorado</span> en cada paso que vayamos dando."
  },
  "familia": {
    "title": "Derecho <span>de familia</span>",
    "description": "Te <span>apoyamos</span> y <span>cuidamos</span> en los momentos más <span>sensibles</span>. Cuidamos de ti de forma honesta para <span>resolver</span> cada situación de forma <span>efectiva</span> y <span>justa</span>."
  },
  "laboral": {
    "title": "Derecho <span>Laboral</span>",
    "description": "Te brindamos una <span>visión realista de tus opciones</span>, asegurándonos que entiendes el proceso y <span>luchamos por lo que a tu derecho corresponde</span>, dándote el <span>control en cada paso</span>."
  },
  "inmobiliario": {
    "title": "Derecho <span>inmobiliario</span>",
    "description": "Sabemos la importancia que tienen los inmuebles y los muchos problemas que generan. Te asesoramos para que sigas la <span>mejor estrategia</span> para <span>alcanzar tus objetivos</span> y <span>defender tus derechos</span>."
  }
}

// send message
sendButton.addEventListener("click", (e) => {
  e.preventDefault();

  sendButton.disabled = true;

  // Capturar datos del formulario
  const formData = {
    nombre: inputs[0].value,
    contacto: inputs[1].value,
    mensaje: inputs[2].value,
  };

  // Validación básica
  if (!formData.nombre || !formData.contacto || !formData.mensaje) {
    alert("Por favor, completa todos los campos.");
    return;
  }

  // Enviar datos al servidor
  fetch("services/enviar_correo.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify(formData),
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.success) {
        successMessage.style.display = "flex";

        setTimeout(() => {
          closeDialog();
        }, 5000);
        
      } else {
        alert("Error: " + data.message);
      }
    })
    .catch((error) => {
      sendButton.disabled = false;
      console.error("Error:", error);
      alert("Hubo un problema al enviar el mensaje.");
    });
});
