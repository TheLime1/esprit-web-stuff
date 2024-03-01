document.getElementById("submit").addEventListener("click", function (event) {
  event.preventDefault();
  validateForm();
});

function validateForm() {
  var nom = document.getElementsByName("nom")[0].value;
  var prenom = document.getElementsByName("prenom")[0].value;
  var email = document.getElementsByName("email")[0].value;
  var telephone = document.getElementsByName("telephone")[0].value;
  var date_naissance = document.getElementsByName("date_naissance")[0].value;
  var mot_de_passe = document.getElementsByName("mot_de_passe")[0].value;

  if (
    nom == "" ||
    prenom == "" ||
    email == "" ||
    telephone == "" ||
    date_naissance == "" ||
    mot_de_passe == ""
  ) {
    alert("All fields must be filled out");
    return false;
  }

  var emailPattern = /^[^@]+@[^@]+$/;
  if (!email.match(emailPattern)) {
    alert("Please enter a valid email address");
    return false;
  }

  var phonePattern = /^[0-9]{8}$/;
  if (!telephone.match(phonePattern)) {
    alert("Please enter a valid phone number");
    return false;
  }

  if (mot_de_passe.length < 6) {
    alert("Password must be at least 6 characters long");
    return false;
  }

  var today = new Date();
  var birthDate = new Date(date_naissance);
  if (birthDate >= today) {
    alert("Date of birth must be before today");
    return false;
  }

  return true;
}
