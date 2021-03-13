require('./bootstrap');

let domToImage = require('dom-to-image');

let themeBtn = document.getElementById("theme-btn");
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

        fakeWindow.classList.remove("fade-out");
        fakeWindow.classList.add("fade-in");
    }, 500);
};

themeBtn.onclick = () =>{
    if(themeModal.classList.contains("modal-open"))
        closeModal();
    else
        openModal();
};

shareBtn.onclick = () =>{
    // TODO: add share functionality
    let node = document.getElementById('window');

    /*let buttons = node.getElementsByClassName('wd-buttons');
    buttons[0].parentElement.removeChild(buttons[0]);
    let icon = node.getElementsByClassName('wd-icon')
    icon[0].parentElement.removeChild(icon[0]);*/

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
