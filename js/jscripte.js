// for sing and login popup box

var modal1 = document.getElementById('modal-wrapper1');
var modal2 = document.getElementById('modal-wrapper2');
window.onclick = function(event) {
    if (event.target == modal1 || event.target == modal2) {
        modal1.style.display = "none";
        modal2.style.display = "none";
    }
}

// privew about image

const inpFile = document.getElementById("inpfile");
const previewContainer = document.getElementById("imagePreview");
const previewImage = previewContainer.querySelector(".image-preview__image");
const previewDefualtText = previewContainer.querySelector(".image-preview__defualt-text");

inpFile.addEventListener("change", function() {
    const file = this.files[0];

    if (file) {
        const reader = new FileReader();

        previewDefualtText.style.display = "none";
        previewImage.style.display = "block";

        reader.addEventListener("load", function() {
            // console.log(this);
            previewImage.setAttribute("src", this.result);
        });

        reader.readAsDataURL(file);
    } else {

        previewDefualtText.style.display = null;
        previewImage.style.display = null;
    }
});

// list page
var state = document.getElementById('state');
var city = document.getElementById('city');

function state_list() {}
// admin page