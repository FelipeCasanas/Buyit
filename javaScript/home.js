const body = document.getElementById('body');
const darkModeButton = document.getElementById('change_color_button');
const searchBar = document.getElementById('searchBar');
const recomendedText = document.getElementById('recomended_text');
const adsText = document.getElementById('ads_textt');
const productsText = document.getElementById('productsText');

const popUp = document.getElementById('popUp');
const closeAd = document.getElementById('closeAd');
const buttonsDiv = document.getElementById('buttonsDiv');

const popUpTitle = document.getElementById('popUpTitle');
const popUpDescription = document.getElementById('popUpDescription');
const popUpContactInfo = document.getElementById('popUpContactInfo');

const changeColor = () => {
    body.classList.toggle('dark_mode');
    darkModeButton.classList.toggle('change_color_button_active');
    searchBar.classList.toggle('searchBarDarkMode');
    recomendedText.classList.toggle('dark_mode_text');
    adsText.classList.toggle('dark_mode_text');
    productsText.classList.toggle('dark_mode_text');
}

const showAd = (tileNumber, operation, redirectTo) => {
    let title, description, contactInfo;

    if (operation == 0) {
        title = `recomendedTitle${tileNumber}`;
        title = document.getElementById(title).textContent;

        description = `recomendedDescription${tileNumber}`;
        description = document.getElementById(description).textContent;

        contactInfo = `recomendedContactInfo${tileNumber}`;
        contactInfo = document.getElementById(contactInfo).textContent;
        buttonsDiv.innerHTML = `<a href="" class="close_ad" id="closeAd">CERRAR</a><a href="productView.php?id=${redirectTo}" class="contact_them">VER RECOMENDADO</a>`;
    } else if (operation == 1) {
        title = `sponsorTitle${tileNumber}`;
        title = document.getElementById(title).textContent;

        description = `sponsorDescription${tileNumber}`;
        description = document.getElementById(description).textContent;

        contactInfo = `sponsorContactInfo${tileNumber}`;
        contactInfo = document.getElementById(contactInfo).textContent;
        buttonsDiv.innerHTML = `<a href="" class="close_ad" id="closeAd">CERRAR</a><a href="${redirectTo}" class="contact_them">VER ANUNCIANTE</a>`;
    }

    popUpTitle.textContent = title;
    popUpDescription.textContent = description;
    popUpContactInfo.textContent = contactInfo;

    popUp.removeAttribute('class');
    popUp.setAttribute('class', 'pop-up-background');
}
