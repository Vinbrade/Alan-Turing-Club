function alphacheck() {
    var n = document.getElementById("pHone");
    if (isNaN(n)) {
        return true;
    }
    else {
        return false;
    }
}

var forms = document.querySelectorAll(".needs-validation");
Array.prototype.slice.call(forms).forEach(function (form) {
    form.addEventListener("submit", function (event) {

        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        }
        form.classList.add("was-validated");
    }, false);
});