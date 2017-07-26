function __(id) { return document.getElementById(id); }

function getValue() {
    __("get").disabled = true;
    __("wait").innerHTML = "please wait...";
    var formData = {
        "id": (__("Wid").value),
        "name": (__("Wmame").value),
        "Sdate": (__("startDate").value)
    };
    sendAJAX(formData);
}

function sendAJAX(URformDataL) {
    var ajax = new XMLHttpRequest();
    ajax.open("post", "connection.php")
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4 && ajax.status == 200) {
            if (ajax.responseText == "success") {
                __("wait").innerHTML = "Thanks, your request was sent";
            } else {
                __("wait").innerHTML = ajax.responseText;
                __("get").disabled = false;
            }
        }
    }
    ajax.send(formData);
}