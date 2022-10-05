const body = document.getElementById('body');
const userIconBackground = document.getElementById('userIconBackground');
const userIconHead = document.getElementById('userIconHead');
const userIconBody = document.getElementById('userIconBody');

const nameInputLabel = document.getElementById('nameInputLabel');
const lastNameInputLabel = document.getElementById('lastNameInputLabel');
const emailInputLabel = document.getElementById('emailInputLabel');
const passwordInputLabel = document.getElementById('passwordInputLabel');

const nameInput = document.getElementById('nameInput');
const lastNameInput = document.getElementById('lastNameInput');
const emailInput = document.getElementById('emailInput');
const passwordInput = document.getElementById('passwordInput');
const lightAndDarkMode = document.getElementById('lightAndDarkMode');

lightAndDarkMode.addEventListener('click', () => {
  body.classList.toggle('dark_mode');
  userIconBackground.classList.toggle('dark_user_icon_background');
  userIconHead.classList.toggle('dark_user_icon_head');
  userIconBody.classList.toggle('dark_user_icon_body');
  nameInputLabel.classList.toggle('dark_input_label');
  lastNameInputLabel.classList.toggle('dark_input_label');
  emailInputLabel.classList.toggle('dark_input_label');
  passwordInputLabel.classList.toggle('dark_input_label');
  lightAndDarkMode.classList.toggle('utilities_buttons_active');
});