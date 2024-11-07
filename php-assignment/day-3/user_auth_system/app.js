function validateForm() {
  let username = document.forms[0].username.value;
  let password = document.forms[0].password.value;
  let isValid = true;

  if (username === "") {
    document.getElementById("usernameError").innerHTML = "Username is required";
    document.getElementById("usernameError").style.display = "block";
    isValid = false;
  } else {
    document.getElementById("usernameError").innerHTML = "";
  }

  if (password === "") {
    document.getElementById("passwordError").innerHTML = "Password is required";
    document.getElementById("passwordError").style.display = "block";
    isValid = false;
  } else {
    document.getElementById("passwordError").innerHTML = "";
  }

  return isValid;
}
