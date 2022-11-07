const goBack = document.getElementById('goBack');

/*
Get and assign to a const the action detonator button and popUp. this insert HTML code in create user pop-up. 
afther remove no display class and add display class
*/
const createUserButton = document.getElementById('createUserButton');
const createUserPopUp = document.getElementById('createUserPopUp');
createUserButton.addEventListener('click', () => {
    createUserPopUp.innerHTML = '<div class="pop-up_background_no_display" id="createUserPopUp"><h2>CREAR USUARIO</h2><form class="create_user_pop-up" action="phpLogics/adminPrivileges.php?action=create" method="post"><div class="pop-up_input_left_container"><input class="pop-up_input" type="number" name="user_identification" placeholder="Ingrese su identificacion"><input class="pop-up_input" type="date" name="birthday" placeholder="Ingrese su fecha de nacimiento"><input class="pop-up_input" type="number" name="phone_number" placeholder="Ingrese su celular"><input class="pop-up_input" type="text" name="address" placeholder="Ingrese su direccion"><input class="pop-up_input" type="email" name="email" placeholder="Ingrese su correo"><div class="pop-up-button" id="goBack">VOLVER</div></div><div class="pop-up_input_right_container"><input class="pop-up_input" type="text" name="name" placeholder="Ingrese su nombre"><input class="pop-up_input" type="text" name="last_name" placeholder="Ingrese su apellido"><input class="pop-up_input" type="text" name="country" placeholder="Ingrese su pais" disabled=""><select class="pop-up_input" name="sex" id=""><option value="">Ingrese su sexo</option><option value="m">Hombre</option><option value="f">Mujer</option><option value="nb">No binario</option></select><input class="pop-up_input" type="password" name="password" placeholder="Ingrese su contraseña"><button class="pop-up-button">CREAR</button></div></form></div>';

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
    deleteUserPopUp.innerHTML = '<div class="pop-up_background_no_display" id="deleteUserPopUp"><h2>ELIMINAR USUARIO</h2><form class="delete_user_pop-up" action="phpLogics/adminPrivileges.php?action=delete" method="post"><select class="pop-up_input" name="" id=""><option value="">Buscar por:</option><option value="">Identificacion</option><option value="">Numero celular</option><option value="">Correo</option></select><input type="text" class="pop-up_input" placeholder="Busque aqui"><button class="pop-up-button">BUSCAR</button><div class="pop-up-button" id="goBack">VOLVER</div></form></div>';

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
    updateUserPopUp.innerHTML = '<div class="pop-up_background_no_display" id="updateUserPopUp"><h2>ACTUALIZAR USUARIO</h2><form class="update_user_pop-up" action="phpLogics/adminPrivileges.php?action=update" method="post"><div class="pop-up_input_left_container"><input class="pop-up_input" type="number"name="user_identification" placeholder="Ingrese su identificacion"><input class="pop-up_input" type="date" name="birthday" placeholder="Ingrese su fecha de nacimiento"><input class="pop-up_input" type="number" name="phone_number" placeholder="Ingrese su celular"><input class="pop-up_input" type="text" name="address" placeholder="Ingrese su direccion"><input class="pop-up_input" type="email" name="email" placeholder="Ingrese su correo"><div class="pop-up-button" id="goBack">VOLVER</div></div><div class="pop-up_input_right_container"><input class="pop-up_input" type="text" name="name"placeholder="Ingrese su nombre"><input class="pop-up_input" type="text" name="last_name"placeholder="Ingrese su apellido"><input class="pop-up_input" type="text" name="country"placeholder="Ingrese su pais" disabled=""><select class="pop-up_input" name="sex" id=""><option value="">Ingrese su sexo</option><option value="m">Hombre</option><option value="f">Mujer</option><option value="nb">No binario</option></select><input class="pop-up_input" type="password" name="password"placeholder="Ingrese su contraseña"><button class="pop-up-button">CREAR</button></div></form></div>';

    updateUserPopUp.removeAttribute('pop-up_background_no_display');
    updateUserPopUp.setAttribute('class', 'pop-up_background');
});


const setAdminUserButton = document.getElementById('setAdminUserButton');
const adminUserPopUp = document.getElementById('adminUserPopUp');
setAdminUserButton.addEventListener('click', () => {
    adminUserPopUp.innerHTML = '<div class="pop-up_background_no_display" id="adminUserPopUp"><h2>ESTABLECER ADMIN</h2><form class="admin_user_pop-up" action="phpLogics/adminPrivileges.php?action=setAdmin" method="post"><select class="pop-up_input" name="" id=""><option value="">Buscar por:</option><option value="">Identificacion</option><option value="">Numero celular</option><option value="">Correo</option></select><input type="text" class="pop-up_input" placeholder="Busque aqui"><button class="pop-up-button">BUSCAR</button><div class="pop-up-button" id="goBack">VOLVER</div></form></div>';

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