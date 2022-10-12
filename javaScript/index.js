const body = document.getElementById('body');
const darkModeButton = document.getElementById('change_color_button');
const searchBar = document.getElementById('searchBar');
const recomendedText = document.getElementById('recomended_text');
const adsText = document.getElementById('ads_textt');
const productsText = document.getElementById('productsText');

const recomendationsAndAdsContainer = document.getElementById('recomendationsAndAdsContainer');

const changeColor = () => {
    body.classList.toggle('dark_mode');
    darkModeButton.classList.toggle('change_color_button_active');
    searchBar.classList.toggle('searchBarDarkMode');
    recomendedText.classList.toggle('dark_mode_text');
    adsText.classList.toggle('dark_mode_text');
    productsText.classList.toggle('dark_mode_text');
}

const showTile = (tile) => {
    let popUpDIV = document.createElement('div');
    popUpDIV.style.height = "80%";
    popUpDIV.style.width = "40%";
    popUpDIV.style.backgroundColor = "red";
    popUpDIV.style.margin = "0 auto";
    popUpDIV.style.zIndex = 60000;
    recomendationsAndAdsContainer.appendChild.appendChild(popUpDIV);

    tile.style.height = "150%";
    tile.style.width = "150%";
    tile.style.bottom = "35%";
    tile.style.right = "80%";
}

const hideTile = (tile) => {
    tile.style.height = "45%";
    tile.style.width = "30%";
    tile.style.bottom = "0%";
    tile.style.right = "0%";
}