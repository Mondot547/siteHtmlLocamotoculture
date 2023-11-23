document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contact-form");
    const statusTxt = document.querySelector(".button-area span");

    form.addEventListener("submit", function (e) {
        e.preventDefault();
        statusTxt.style.display = "block";

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "message.php", true);
        xhr.onload = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                let response = xhr.responseText;
                console.log(response);
                statusTxt.innerText = response;
            }
        };

        let formData = new FormData(form);
        xhr.send(formData);
    });
});
