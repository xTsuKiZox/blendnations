/**
 * Adding flags to input selects
*/
async function populateCountrySelect() {
    try {
        const response = await fetch('https://restcountries.com/v3.1/all');
        const countries = await response.json();

        const select1Element = document.getElementById('firstCountry');
        const select2Element = document.getElementById('secondCountry');

        countries.forEach(country => {
            const countryName = country.name.official;
            if (country.tld) {
                const countryTLD = country.tld[0];

                const optionElement = document.createElement('option');
                optionElement.value = countryTLD.replace('.', '');
                optionElement.textContent = `${countryName}`;

                select1Element.appendChild(optionElement);
            }
        });

        countries.forEach(country => {
            const countryName = country.name.official;
            if (country.tld) {
                const countryTLD = country.tld[0];

                const optionElement = document.createElement('option');
                optionElement.value = countryTLD.replace('.', '');
                optionElement.textContent = `${countryName}`;

                select2Element.appendChild(optionElement);
            }
        });
    } catch (error) {
        console.error('Error loading countries:', error);
    }
}
populateCountrySelect()

/**
 * Modify the canvas text to download the image following the choice of one or two countries depending on the device
*/
const getDeviceType = () => {
    const ua = navigator.userAgent;
    let textDownload = document.getElementById("textDownload")
    if (/(tablet|ipad|playbook|silk)|(android(?!.*mobi))/i.test(ua)) {
        textDownload.textContent = "To download your new flag, hold your finger on the image and download it!"
    }
    if (
        /Mobile|iP(hone|od)|Android|BlackBerry|IEMobile|Kindle|Silk-Accelerated|(hpw|web)OS|Opera M(obi|ini)/.test(
            ua
        )
    ) {
        textDownload.textContent = "To download your new flag, hold your finger on the image and download it!"

    }
    textDownload.textContent = "To download your new flag, right click!"
};
getDeviceType()

//#region D/L
let mode = "light";
const moonSVG = `
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="50" height="50" id="forMode"  class="iconFooter">
            <path fill="currentColor" d="M21.75 15.35A9.73 9.73 0 0 1 12.5 2.22a.75.75 0 0 0-1.12-.82A9.75 9.75 0 1 0 21.75 15.35zm-9.38 6A8.25 8.25 0 0 1 13.32 3a8.25 8.25 0 1 0-1 18.36z"/>
        </svg>`;

const sunSVG = `
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="50" height="50" id="forMode">  class="iconFooter"
            <path fill="currentColor" d="M12 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm5.66 2.34a1 1 0 0 1 1.41 1.41 1 1 0 1 1-1.41-1.41zm6 5.66a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-2.34 6.66a1 1 0 1 1-1.41-1.41 1 1 0 0 1 1.41 1.41zM12 22a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM6.34 19.66a1 1 0 0 1-1.41-1.41 1 1 0 1 1 1.41 1.41zM2 12a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm2.34-6.66a1 1 0 0 1 1.41 1.41 1 1 0 1 1-1.41-1.41zM12 8a4 4 0 1 1 0 8 4 4 0 0 1 0-8zm0-1a5 5 0 1 0 0 10 5 5 0 0 0 0-10z"/>
        </svg>`;

document.getElementById("divForMode").addEventListener("click", function () {
    const modeIcon = document.getElementById("forMode");
    let bodyPage = document.getElementById("bodyPage")
    let logo = document.getElementById("logo")
    let borderCanvas = document.getElementById("responsiveCanvas")
    let textDownload = document.getElementById("textDownload")

    if (mode === "light") {
        modeIcon.remove();
        document.getElementById("divForMode").innerHTML = moonSVG;
        bodyPage.style.backgroundColor = "black"
        borderCanvas.style.border = "1px solid white"
        logo.src = "./public/IMG/logoW.png"
        textDownload.style.color = "white"
        mode = "dark";
    } else {
        modeIcon.remove();
        document.getElementById("divForMode").innerHTML = sunSVG;
        bodyPage.style.backgroundColor = "white"
        borderCanvas.style.border = "1px solid gray"
        logo.src = "./public/IMG/logoB.png"
        textDownload.style.color = "black"
        mode = "light";
    }
});
//#endregion D/L