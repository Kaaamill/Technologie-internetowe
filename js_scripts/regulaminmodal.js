function displayModal() {
    fetch('../../panele_logowania/uzytkownik/regulaminmodal.html')
      .then(response => response.text())
      .then(html => {
        const modal = document.createElement('div');
        modal.classList.add('modal');
        
        modal.innerHTML = html;
  
        const modalContainer = document.getElementById('regulamin');
        modalContainer.appendChild(modal);
  
        modal.style.display = 'flex';
      });
  }