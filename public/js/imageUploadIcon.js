var input = document.querySelector("#files");
var uploadIcon = document.querySelector("#uploadIcon");
function PreviewImage() {
    var oFReader = new FileReader();
    var imgHolder = document.getElementById("uploadPreview");
    uploadIcon.remove();
    var x = document.getElementById("uploadText");
    oFReader.readAsDataURL(document.getElementById("files").files[0]);
    oFReader.onload = function (oFREvent) {
        imgHolder.src = oFREvent.target.result;
        imgHolder.style.height = '200px';
        imgHolder.style.width = '200px';
        // imgHolder.src = oFREvent.target.result;
        imgHolder.className += " imageUploaded";
        imgHolder.classList.remove("mb-2");
        imgHolder.classList.remove("mt-4");
        x.style.display = "none";
    };
}
