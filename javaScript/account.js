const nameInput = document.getElementById('nameInput');
const lastNameInput = document.getElementById('lastNameInput');
const yearsOldInput = document.getElementById('yearsOldInput');
const sex_selector = document.getElementById('sexSelector');
const countrySelect = document.getElementById('countrySelect');
const emailInput = document.getElementById('emailInput');

const clearFields = () => {
    nameInput.value = "";
    lastNameInput.value = "";
    yearsOldInput.value = "";
    sex_selector.value = "";
    countrySelect.value = "";
    emailInput.value = "";
}