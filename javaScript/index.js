const body = document.getElementById('body');
const darkModeButton = document.getElementById('change_color_button');
const searchBar = document.getElementById('searchBar');
const recomendedText = document.getElementById('recomended_text');
const adsText = document.getElementById('ads_textt');
const productsText = document.getElementById('productsText');

const changeColor = () => {
    body.classList.toggle('dark_mode');
    darkModeButton.classList.toggle('change_color_button_active');
    searchBar.classList.toggle('searchBarDarkMode');
    recomendedText.classList.toggle('dark_mode_text');
    adsText.classList.toggle('dark_mode_text');
    productsText.classList.toggle('dark_mode_text');
}