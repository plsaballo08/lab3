
function addAboutMeDiv() {
    var aboutDiv = document.createElement("div");
    aboutDiv.className = "about";
    aboutDiv.textContent = "About Me";

    var infoParagraph = document.getElementById("info");
    infoParagraph.appendChild(aboutDiv);
}
