const whatsapp = document.getElementById('whatsapp');
const whatsappButton = document.getElementById('whatsappButton');
const whatsappDialog = document.getElementById('whatsappDialog');
const whatsappNumber = document.getElementById('whatsappNumber');
const whatsappEmail = document.getElementById('whatsappEmail');

function isMobileDevice() {
  return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
}

function openDialog() {
  // e.stopPropagation();
  whatsapp.querySelector('.whatsapp--content').style.display = 'none'
  whatsappDialog.showModal();
}

function closeDialog(e) {
  if (e.target.closest('#whatsappButtonClose')) {
  whatsapp.querySelector('.whatsapp--content').style.display = 'block'
    whatsappDialog.close();
  }
}


function loadWhatsapp() {
  whatsappDialog.addEventListener('click', closeDialog);
  whatsappNumber.innerText = whatsappButton.dataset.number;
  whatsappEmail.innerText = whatsappButton.dataset.email;

  if (!isMobileDevice()) {
    whatsapp.classList.add('whatsapp--dialog');
    whatsappButton.classList.add('whatsapp--desktop');
    whatsappButton.addEventListener('click', openDialog);
  }

  if (isMobileDevice()) {
    const href = 'https://wa.me/' + whatsappNumber.innerText + '?text=Hola, ¿cómo te puedo ayudar?';
    whatsappButton.href = href;
    whatsappButton.target = '_blank';
    whatsappButton.rel = 'noopener noreferrer';
  }
}

loadWhatsapp();
