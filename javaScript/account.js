const goBack = document.getElementById('goBack');

/*
Get and assign to a const the action detonator button and popUp. this insert HTML code in create user pop-up. 
afther remove no display class and add display class
*/
const createUserButton = document.getElementById('createUserButton');
const createUserPopUp = document.getElementById('createUserPopUp');
createUserButton.addEventListener('click', () => {

    createUserPopUp.removeAttribute('pop-up_background_no_display');
    createUserPopUp.setAttribute('class', 'pop-up_background');
});


/*
Get and assign to a const the action detonator button and popUp. this insert HTML code in delete user pop-up. 
afther remove no display class and add display class
*/
const deleteUserButton = document.getElementById('deleteUserButton');
const deleteUserPopUp = document.getElementById('deleteUserPopUp');
const deleteUserGoBack = document.getElementById('deleteUserGoBack');
deleteUserButton.addEventListener('click', () => {

    deleteUserPopUp.removeAttribute('pop-up_background_no_display');
    deleteUserPopUp.setAttribute('class', 'pop-up_background');
});


/*
Get and assign to a const the action detonator button and popUp. this insert HTML code in update user pop-up. 
afther remove no display class and add display class
*/
const updateUserButton = document.getElementById('updateUserButton');
const updateUserPopUp = document.getElementById('updateUserPopUp');
updateUserButton.addEventListener('click', () => {

    updateUserPopUp.removeAttribute('pop-up_background_no_display');
    updateUserPopUp.setAttribute('class', 'pop-up_background');
});


const setAdminUserButton = document.getElementById('setAdminUserButton');
const adminUserPopUp = document.getElementById('adminUserPopUp');
setAdminUserButton.addEventListener('click', () => {

    adminUserPopUp.removeAttribute('pop-up_background_no_display');
    adminUserPopUp.setAttribute('class', 'pop-up_background');
});

// This works in all four pop-up windows, this do un-displayed the pop-up
goBack.addEventListener('click', () => {
    createUserPopUp.removeAttribute('pop-up_background');
    createUserPopUp.setAttribute('class', 'pop-up_background_no_display');
});


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