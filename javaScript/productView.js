const addedToFavs = document.getElementById('addedToFavs');
const favouriteForm = document.getElementById('favouriteForm');

if(addedToFavs.textContent.length > 0) {
    favouriteForm.style.bottom = '20%';
}