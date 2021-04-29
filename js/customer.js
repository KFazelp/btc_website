window.onload = function () {
    for (i = 1; i < 7; i++) {
        document.getElementById('Input-' + i).value = "";
    }
    document.getElementById("StepNumber-1").style.backgroundColor = "#6d327b";
    setTimeout(function () {
        document.getElementById("bar").style.width = 50 + "%";
    }, 200)
}

function BorderRefine(element, color) {
    var Element = document.getElementById(element);
    setTimeout(function() { Element.style.borderColor = color; }, 200);
}
function BorderAlert(element) {
    var Element = document.getElementById(element);
    Element.style.borderColor = "#f31431";
}
function Select(n) {
    var Element = document.getElementById("Box-" + n);
    var input = document.getElementById("Input-6");

    if (Element.style.borderColor == "rgb(36, 156, 40)"){
        Element.style.borderColor = "rgba(0, 0, 0, 0)";
    }
    else {
        Element.style.borderColor = "#249c28";
        input.value = "test";
    }

}

function NextStep(nextstep) {
    var check = 1;
    var thisstep;
    var count;
    var element;
    var maincolor;
    var start;
    var end;
    if (document.getElementById("StepNumber-1").style.backgroundColor == "rgb(109, 50, 123)") {
        thisstep = 1;
        count = 5;
        element = "Input";
        maincolor = "#2f2a2a";
        start = 1;
        end = 5;
    }
    else {
        thisstep = 2;
        count = 3;
        element = "Box";
        maincolor = "rgba(0, 0, 0, 0)";
        start = 6;
        end = 6;
    }

    for (i = start; i <= end; i ++) {
        if (document.getElementById('Input-' + i).value == "") {
            check = 0;
        }
    }


    if (check == 0) {
        for (i = 1; i <= count; i++) {
            BorderAlert(element + '-' + i);
        }
        for (i = 1; i <= count; i++) {
            BorderRefine(element + '-' + i, maincolor);
        }
        return;
    }


    for (i = 1; i <= 2; i ++) {
        var Sec = document.getElementById("Section-" + i);
        if (i == nextstep)
            Sec.style.display = "block";
        else
            Sec.style.display = "none";
    }

    for (i = 1; i <= 2; i++) {
        if (i == nextstep) {
            document.getElementById("StepNumber-" + i).style.backgroundColor = "#6d327b";
        }
        else {
            document.getElementById("StepNumber-" + i).style.backgroundColor = "#636363";
            }
    }

    document.getElementById("bar").style.width = (nextstep*50) + "%";

}

function Confirm() {
    var field = document.getElementById("Input-6");
    field.value = "";

    if (document.getElementById("Box-1").style.borderColor == "rgb(36, 156, 40)") {
        field.value = field.value + "On line, ";
    }
    if (document.getElementById("Box-2").style.borderColor == "rgb(36, 156, 40)") {
        field.value = field.value + "Face to Face, ";
    }
    if (document.getElementById("Box-3").style.borderColor == "rgb(36, 156, 40)") {
        field.value = field.value + "Pay by Phone, ";
    }
    if (document.getElementById("Box-4").style.borderColor == "rgb(36, 156, 40)") {
        field.value = field.value + "Pay by Text, ";
    }
    if (document.getElementById("Box-5").style.borderColor == "rgb(36, 156, 40)") {
        field.value = field.value + "Pay by Mail, ";
    }

    console.log(field.value);

    document.getElementById("BackHome").style.display = "none";
    var check = 1;

    if (field.value == "") {
        check = 0;
    }

    if (check == 0) {
        for (i = 1; i <= 5; i++) {
            BorderAlert('Box-' + i);
        }
        for (i = 1; i <= 5; i++) {
            BorderRefine('Box-' + i, "#2f2a2a");
        }
        return;
    }

    for (i = 1; i < 3; i ++) {
        document.getElementById("Section-" + i).style.display = "none";
    }
    document.getElementById("STEPS").style.display = "none";
    document.getElementById("Section-3").style.display = "block";
    document.getElementById("bar").style.display = "none";

    setTimeout(function () {
        document.getElementById("ConfirmCircle").classList.remove("confirm-animation");
        document.getElementById("ConfirmCheck").classList.remove("hide");
        document.getElementById("ConfirmCircle").style.borderColor = "#005e09";
        document.getElementById("ConfirmText").style.display = "block";
        document.getElementById("ConfirmContainer").style.paddingTop = "60px";
        document.getElementById("BackHome").style.display = "block";
    }, 1500)
    setTimeout(function () {
        location.replace("index.php");
    }, 15000)
}