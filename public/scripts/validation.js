document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("ynote-form");

  const fullname = document.getElementById("fname");
  const email = document.getElementById("email");
  const phone = document.getElementById("phone");
  const birth = document.getElementById("date");

  const errors = {
    fullname: document.getElementById("fname-error"),
    email: document.getElementById("email-error"),
    phone: document.getElementById("phone-error"),
    birth: document.getElementById("date-error")
  };

  form.addEventListener("submit", (e) => {
    e.preventDefault();

    // Nettoyer les erreurs précédentes
    Object.values(errors).forEach(span => span.textContent = "");
    [fullname, email, phone, birth].forEach(input => input.classList.remove("error"));

    let hasError = false;

    // Nom complet
    const nameValue = fullname.value.trim();
    if (nameValue.length < 3 || nameValue.length > 50) {
      errors.fullname.textContent = "Le nom complet doit comporter entre 3 et 50 caractères.";
      fullname.classList.add("error");
      hasError = true;
    }

    // Email
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!email.value.trim().match(emailPattern)) {
      errors.email.textContent = "Veuillez entrer une adresse email valide.";
      email.classList.add("error");
      hasError = true;
    }

    // Téléphone
    const phoneValue = phone.value.trim();
    const phonePattern = /^(6\d{8}|2376\d{8})$/;
    if (!phonePattern.test(phoneValue)) {
      errors.phone.textContent = "Téléphone invalide (6XXXXXXXX ou 2376XXXXXXXXX).";
      phone.classList.add("error");
      hasError = true;
    }

    // Date
    const birthDate = new Date(birth.value);
    const today = new Date();
    if (!birth.value || birthDate >= today) {
      errors.birth.textContent = "La date doit être dans le passé.";
      birth.classList.add("error");
      hasError = true;
    }

    if (!hasError) {
      form.submit();
    }

  });
});