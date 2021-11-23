// Password show and hide
function password_show_hide() {
    let password_input = document.getElementById("password");
    let show_eye = document.getElementById("show_eye");
    let hide_eye = document.getElementById("hide_eye");
    hide_eye.classList.remove("d-none");
    if (password_input.type === "password") {
      password_input.type = "text";
      show_eye.style.display = "none";
      hide_eye.style.display = "block";
    } else {
      password_input.type = "password";
      show_eye.style.display = "block";
      hide_eye.style.display = "none";
    }
  }
  
  // Confirm Password show and hide
  function password_confirm_show_hide() {
    let passwordConfirm_input = document.getElementById("password-confirm");
    let confirm_show_eye = document.getElementById("confirm_show_eye");
    let confirm_hide_eye = document.getElementById("confirm_hide_eye");
    console.log(passwordConfirm_input);
    confirm_hide_eye.classList.remove("d-none");
    if (passwordConfirm_input.type === "password") {
      passwordConfirm_input.type = "text";
      confirm_show_eye.style.display = "none";
      confirm_hide_eye.style.display = "block";
    } else {
      passwordConfirm_input.type = "password";
      confirm_show_eye.style.display = "block";
      confirm_hide_eye.style.display = "none";
    }
  }