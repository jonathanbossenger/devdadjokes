require('./bootstrap');

let domToImage = require('dom-to-image');

let themeBtn = document.getElementById("theme-btn");
let exportBtn = document.getElementById("export-btn");
let shareBtn = document.getElementById("share-btn");
let fakeWindow = document.getElementById("window");
let themeModal = document.getElementById("theme-modal");
let themeOptions = document.getElementsByClassName("theme-option");

//Set modal height accordingly
themeModal.style.setProperty('--modal-max-height', `${themeModal.scrollHeight > fakeWindow.scrollHeight ? fakeWindow.scrollHeight : themeModal.scrollHeight+5}px`);

//Add event listeners
for (let i = 0; i < themeOptions.length; i++) {
    themeOptions[i].addEventListener('click', changeTheme, false);
}

function changeTheme() {
    let themeName = this.getAttribute("id");
    closeModal();

    setTimeout(()=>fakeWindow.classList.add("fade-out"),300);
    setTimeout(() => {
        fakeWindow.className = '';
        fakeWindow.className = `${themeName}-theme`;
        updateIcons(themeName);
        fakeWindow.classList.remove("fade-out");
        fakeWindow.classList.add("fade-in");
    }, 500);
};

function updateIcons(themeName) {
    let wdIcon = document.getElementById("wd-icon");
    wdIcon.setAttribute('src', `css/themes/${themeName}/app-icon.png`);
    let wdMin = document.getElementById("wd-min");
    wdMin.setAttribute('src', `css/themes/${themeName}/minimize-icon.png`);
    let wdMax = document.getElementById("wd-max");
    wdMax.setAttribute('src', `css/themes/${themeName}/maximize-icon.png`);
    let wdClose = document.getElementById("wd-close");
    wdClose.setAttribute('src', `css/themes/${themeName}/close-icon.png`);
}

themeBtn.onclick = () =>{
    if(themeModal.classList.contains("modal-open"))
        closeModal();
    else
        openModal();
};

shareBtn.onclick = () =>{
    alert('Node to jpeg and share to Twitter');
}

exportBtn.onclick = () =>{
    let node = document.getElementById('window');
    domToImage.toJpeg(node, { quality: 0.95 })
        .then(function (dataUrl) {
            let link = document.createElement('a');
            link.download = 'DevDadJokes.jpeg';
            link.href = dataUrl;
            link.click();
        });
}

function closeModal(){
    themeModal.style.overflow = "hidden";
    themeModal.classList.remove("modal-open");
    setTimeout(()=>themeModal.style.opacity = "0",300);
}
function openModal(){
    themeModal.style.opacity = "1";
    themeModal.classList.add("modal-open");
    setTimeout(()=>themeModal.style.overflow = "auto",300);
}
