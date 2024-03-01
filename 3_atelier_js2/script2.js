document.getElementsByName("nom")[0].addEventListener("keyup", validateForm);
document.getElementsByName("prenom")[0].addEventListener("keyup", validateForm);
document.getElementsByName("email")[0].addEventListener("keyup", validateForm);
document
  .getElementsByName("telephone")[0]
  .addEventListener("keyup", validateForm);
document
  .getElementsByName("date_naissance")[0]
  .addEventListener("keyup", validateForm);
document
  .getElementsByName("mot_de_passe")[0]
  .addEventListener("keyup", validateForm);

function removeErrorMessages() {
  var errorMessages = document.getElementsByClassName("error-message");
  while (errorMessages[0]) {
    errorMessages[0].parentNode.removeChild(errorMessages[0]);
  }
}

function validateForm() {
  removeErrorMessages();
  var nom = document.getElementsByName("nom")[0];
  var prenom = document.getElementsByName("prenom")[0];
  var email = document.getElementsByName("email")[0];
  var telephone = document.getElementsByName("telephone")[0];
  var date_naissance = document.getElementsByName("date_naissance")[0];
  var mot_de_passe = document.getElementsByName("mot_de_passe")[0];

  addErrorMessage(nom, "This field must not be empty", !nom.value);
  addErrorMessage(prenom, "This field must not be empty", !prenom.value);
  addErrorMessage(email, "This field must not be empty", !email.value);
  addErrorMessage(telephone, "This field must not be empty", !telephone.value);
  addErrorMessage(
    date_naissance,
    "This field must not be empty",
    !date_naissance.value
  );
  addErrorMessage(
    mot_de_passe,
    "This field must not be empty",
    !mot_de_passe.value
  );

  var emailPattern = /^[^@]+@esprit\.tn$/;
  if (email.value) {
    addErrorMessage(
      email,
      "Please enter a valid email address",
      !email.value.match(emailPattern)
    );
  }

  var phonePattern = /^[0-9]{8}$/;
  if (telephone.value) {
    addErrorMessage(
      telephone,
      "Please enter a valid phone number",
      !telephone.value.match(phonePattern)
    );
  }

  if (mot_de_passe.value) {
    addErrorMessage(
      mot_de_passe,
      "Password must be at least 6 characters long",
      mot_de_passe.value.length < 6
    );
  }

  var today = new Date();
  var birthDate = new Date(date_naissance.value);
  if (date_naissance.value) {
    addErrorMessage(
      date_naissance,
      "Date of birth must be before today",
      birthDate >= today
    );
  }
}

function addErrorMessage(input, message, isError) {
  // Remove any existing error message for this input field
  var existingErrorMessage = input.parentNode.querySelector(".error-message");
  if (existingErrorMessage) {
    input.parentNode.removeChild(existingErrorMessage);
  }

  // Add the new error message
  var errorMessage = document.createElement("span");
  errorMessage.textContent = isError ? message : "Correct";
  errorMessage.className = "error-message";
  errorMessage.style.color = isError ? "red" : "green";
  input.parentNode.appendChild(errorMessage);
}
