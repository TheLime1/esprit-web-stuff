document.getElementById("submit").addEventListener("click", function (event) {
  event.preventDefault();
  removeErrorMessages();
  validateForm();
});

function removeErrorMessages() {
  var errorMessages = document.getElementsByClassName("error-message");
  while (errorMessages[0]) {
    errorMessages[0].parentNode.removeChild(errorMessages[0]);
  }
}

function validateForm() {
  var nom = document.getElementsByName("nom")[0];
  var prenom = document.getElementsByName("prenom")[0];
  var email = document.getElementsByName("email")[0];
  var telephone = document.getElementsByName("telephone")[0];
  var date_naissance = document.getElementsByName("date_naissance")[0];
  var mot_de_passe = document.getElementsByName("mot_de_passe")[0];

  if (
    nom.value == "" ||
    prenom.value == "" ||
    email.value == "" ||
    telephone.value == "" ||
    date_naissance.value == "" ||
    mot_de_passe.value == ""
  ) {
    addErrorMessage(nom, "All fields must be filled out");
    addErrorMessage(prenom, "All fields must be filled out");
    addErrorMessage(email, "All fields must be filled out");
    addErrorMessage(telephone, "All fields must be filled out");
    addErrorMessage(date_naissance, "All fields must be filled out");
    addErrorMessage(mot_de_passe, "All fields must be filled out");
    return false;
  }

  var emailPattern = /^[^@]+@[^@]+$/;
  if (!email.value.match(emailPattern)) {
    addErrorMessage(email, "Please enter a valid email address");
    return false;
  }

  var phonePattern = /^[0-9]{8}$/;
  if (!telephone.value.match(phonePattern)) {
    addErrorMessage(telephone, "Please enter a valid phone number");
    return false;
  }

  if (mot_de_passe.value.length < 6) {
    addErrorMessage(
      mot_de_passe,
      "Password must be at least 6 characters long"
    );
    return false;
  }

  var today = new Date();
  var birthDate = new Date(date_naissance.value);
  if (birthDate >= today) {
    addErrorMessage(date_naissance, "Date of birth must be before today");
    return false;
  }

  return true;
}

function addErrorMessage(input, message) {
  var errorMessage = document.createElement("span");
  errorMessage.textContent = message;
  errorMessage.className = "error-message";
  input.parentNode.appendChild(errorMessage);
}
