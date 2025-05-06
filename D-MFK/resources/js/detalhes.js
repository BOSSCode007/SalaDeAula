document.addEventListener('DOMContentLoaded', () => {
    const modal = document.querySelector('.modal');
    const closeBtn = document.querySelector('.close');
    const editBtn = document.querySelector('.btn-edit');
    const cancelBtn = document.querySelector('.btn-cancel');
  
    const fields = ['Aula', 'Data', 'Horário', 'Professor'];
    const spanElements = modal.querySelectorAll('p span');
  
    let isEditing = false;
    let originalValues = [];
  
    // Função para abrir o modal (exemplo de preenchimento de dados)
    function openModal(data) {
      data.forEach((value, index) => {
        spanElements[index].textContent = value;
      });
      modal.style.display = 'block';
    }
  
    // Fecha o modal
    closeBtn.addEventListener('click', () => {
      modal.style.display = 'none';
      if (isEditing) toggleEditMode(); // cancela edição se necessário
    });
  
    // Cancela a edição
    cancelBtn.addEventListener('click', () => {
      if (isEditing) {
        spanElements.forEach((span, index) => {
          const input = span.previousElementSibling;
          if (input && input.tagName === 'INPUT') {
            span.textContent = originalValues[index];
            input.remove();
            span.style.display = 'inline';
          }
        });
        isEditing = false;
        editBtn.textContent = 'EDITAR';
      } else {
        modal.style.display = 'none';
      }
    });
  
    // Alterna modo de edição
    editBtn.addEventListener('click', () => {
      if (!isEditing) {
        // Salvar valores originais
        originalValues = Array.from(spanElements).map(span => span.textContent);
  
        spanElements.forEach(span => {
          const input = document.createElement('input');
          input.type = 'text';
          input.value = span.textContent;
          span.style.display = 'none';
          span.parentElement.insertBefore(input, span);
        });
  
        editBtn.textContent = 'SALVAR';
        isEditing = true;
      } else {
        // Salvar novas alterações
        spanElements.forEach(span => {
          const input = span.previousElementSibling;
          if (input && input.tagName === 'INPUT') {
            span.textContent = input.value;
            input.remove();
            span.style.display = 'inline';
          }
        });
  
        editBtn.textContent = 'EDITAR';
        isEditing = false;
      }
    });
  
    // Simulação de abertura do modal com dados
    openModal(['Matemática', '06/05/2025', '10:00 - 12:00', 'Prof. João']);
  });
