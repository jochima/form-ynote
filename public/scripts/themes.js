document.addEventListener('DOMContentLoaded', () => { console.log('ok');
  const hour = new Date().getHours();
  const theme = (hour >= 6 && hour < 18) ? '' : 'dark';

  document.body.classList.add(theme); console.log('ok');

  const toggleBtn = document.getElementById('toggle-theme');

  toggleBtn.addEventListener('click', () => {
    document.body.classList.toggle('dark');

    // Optionnel : Changer le texte du bouton
    if (document.body.classList.contains('dark')) {
      toggleBtn.textContent = 'Mode Jour';
    } else {
      toggleBtn.textContent = 'Mode Nuit';
    }
  });
});
 