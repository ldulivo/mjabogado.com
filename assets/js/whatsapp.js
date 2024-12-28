const whatsapp = document.getElementById("whatsapp_content");

function isMobileDevice() {
  return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
}

const loadWhatsapp = () => {
  if (isMobileDevice()) {
    whatsapp.classList.add("whatsapp-mobile");
    const whatsappNumber = whatsapp.dataset.whatsapp;
    console.log(whatsappNumber);
    whatsapp.addEventListener("click", () => {
      window.open("https://wa.me/" + whatsappNumber + "?text=Hola Mauricio, me gustaría consultarte ");
    });
  }

  if (!isMobileDevice()) {
    whatsapp.addEventListener("click", () => {
      openDialog("");
    });
  }
};

loadWhatsapp();