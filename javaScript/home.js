const body = document.getElementById('body');
const darkModeButton = document.getElementById('change_color_button');
const searchBar = document.getElementById('searchBar');
const recomendedText = document.getElementById('recomended_text');
const adsText = document.getElementById('ads_textt');
const productsText = document.getElementById('productsText');

const popUp = document.getElementById('popUp');
const closeAd = document.getElementById('closeAd');

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

const showAd = (tileNumber) => {
    let title, description, contactInfo;
    title = `sponsorTitle${tileNumber}`;
    title = document.getElementById(title).textContent;

    description = `sponsorDescription${tileNumber}`;
    description = document.getElementById(description).textContent;

    contactInfo = `sponsorContactInfo${tileNumber}`;
    contactInfo = document.getElementById(contactInfo).textContent;

    popUp.removeAttribute('class');
    popUp.setAttribute('class', 'pop-up-background');

    popUpTitle.textContent = title;
    popUpDescription.textContent = description;
    popUpContactInfo.textContent = contactInfo;
}

closeAd.addEventListener('click', function () {
    popUp.removeAttribute('class');
    popUp.setAttribute('class', 'pop-up_hidden');
});