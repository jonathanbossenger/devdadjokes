require('./bootstrap');

let themeBtn = document.getElementById("theme-btn");
/*let shareBtn = document.getElementById("share-btn");*/
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
/*
shareBtn.onclick = () =>{
    // TODO: add share functionality
}*/

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
