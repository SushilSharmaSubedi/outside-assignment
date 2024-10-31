function validateForm() {
  let isValid = true; // Initialize a flag to track form validity
  const fields = document.querySelectorAll(".form-input"); // Select all form input fields
  fields.forEach((field) => {
    const errorMessage = field.parentElement.querySelector(".error-message"); // Find the error message element related to the field
    if (field.value.trim() === "") {
      // Check if the field is empty
      errorMessage.style.display = "block"; // Show the error message if the field is empty
      isValid = false; // Set the form validity flag to false
    } else {
      errorMessage.style.display = "none"; // Hide the error message if the field is not empty
    }
  });
  return isValid; // Return the overall form validity
}
