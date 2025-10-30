function validateForm() {
  let isValid = true;

  // Clear previous error messages
  document.getElementById("nameError").style.display = "none";
  document.getElementById("emailError").style.display = "none";
  document.getElementById("phoneError").style.display = "none";
  document.getElementById("serviceError").style.display = "none";
  document.getElementById("messageError").style.display = "none";

  // Validate Name
  let name = document.getElementById("name").value;
  if (name === "") {
    document.getElementById("nameError").style.display = "block";
    isValid = false;
  }

  // Validate Email
  let email = document.getElementById("email").value;
  let emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
  if (email === "" || !emailPattern.test(email)) {
    document.getElementById("emailError").style.display = "block";
    isValid = false;
  }

  // Validate Phone Number
  let phone = document.getElementById("phone").value;
  let phonePattern = /^[0-9]{10}$/; // Assuming a 10-digit phone number
  if (phone === "" || !phonePattern.test(phone)) {
    document.getElementById("phoneError").style.display = "block";
    isValid = false;
  }

  // Validate Service selection
  let service = document.getElementById("service").value;
  if (service === "Services") {
    document.getElementById("serviceError").style.display = "block";
    isValid = false;
  }

  // Validate Message
  let message = document.getElementById("message").value;
  if (message === "") {
    document.getElementById("messageError").style.display = "block";
    isValid = false;
  }

  return isValid;
}
