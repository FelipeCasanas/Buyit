const spanLabel = document.getElementById('spanLabel');
let url = document.URL;

if (url.endsWith('3') == true) {
    let bLabel = document.createDocumentFragment('b');
    bLabel.textContent = " NO ";
    spanLabel.appendChild(bLabel);
}

window.onload = () => {
    const goBackButton = document.getElementById('getURL').addEventListener('click', function () {

        let url = document.URL;

        if (url.endsWith('0') == true) {
            window.close();
            window.open('../index.php');
        } else if (url.endsWith('1') == true) {
            window.close();
            window.open('../home.php');
        } else if (url.endsWith('2') == true) {
            window.close();
            window.open('../register.php');
        } else if (url.endsWith('3') == true) {
            window.close();
            window.open('../login.php');
        } else if (url.endsWith('4') == true) {
            window.close();
            window.open('../index.php');

        } else if (url.endsWith('5') == true) {
            window.close();
            window.open('../home.php');
        } else if (url.endsWith('6') == true) {
            window.close();
            window.open('../home.php');
        } else if (url.endsWith('7') == true) {
            window.close();
            window.open('../home.php');
        } else {
            window.close();
            window.open('../index.php');
        }
    });
}