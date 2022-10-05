const body = document.getElementById('body');
const userIconBackground = document.getElementById('userIconBackground');
const userIconHead = document.getElementById('userIconHead');
const userIconBody = document.getElementById('userIconBody');

const emailInputLabel = document.getElementById('emailInputLabel');
const passwordInputLabel = document.getElementById('passwordInputLabel');

const emailInput = document.getElementById('emailInput');
const passwordInput = document.getElementById('passwordInput');

const registerButton = document.getElementById('registerButton');
const loginButton = document.getElementById('loginButton');

const lightAndDarkMode = document.getElementById('lightAndDarkMode');

lightAndDarkMode.addEventListener('click', () => {
  body.classList.toggle('dark_mode');
  userIconBackground.classList.toggle('dark_user_icon_background');
  userIconHead.classList.toggle('dark_user_icon_head');
  userIconBody.classList.toggle('dark_user_icon_body');
  emailInputLabel.classList.toggle('dark_input_label');
  passwordInputLabel.classList.toggle('dark_input_label');
  registerButton.classList.toggle('dark_mode_button_text');
  loginButton.classList.toggle('dark_mode_button_text');
  lightAndDarkMode.classList.toggle('utilities_buttons_active');
});