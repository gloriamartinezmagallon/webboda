var sendEmailDiv = document.getElementById("send-email");
var emailMensaje = document.getElementById("email-message");

initContactButton();

function initContactButton()
{
    if (deviceName == "computer")
    {
        sendEmailDiv.onclick = function () {
            sendEmail()
        };
    }
    else //using touchstart to replace onclick on mobile device since touchevents are used
    {
        sendEmailDiv.addEventListener("touchstart", sendEmail, false);
        emailMensaje.addEventListener("touchstart", makeFocusMessage, false);
    }

}

var flagmensaje = false;

function makeFocusMessage() {
    if (flagmensaje)
        return;
    flagmensaje = true;
    setTimeout(function () {
        flagmensaje = false;
    }, 100);
    $("#email-message").val("");
    focusMessage();
}

var flag = false;
function sendEmail()
{
    if (flag)
        return;
    flag = true;
    setTimeout(function () {
        flag = false;
    }, 100);


    hideContactConfirmationContainer(); //function from main.js
    //positionContactConfirmationContainer(); //function from main.js

    var isSubjectFilled;
    var isMessageFilled;

    var emailAddress = "";
    var emailSubject = "Confirmación de asistencia - " + jQuery("#tags").val();
    var emailMessage = $("#email-message").val();

    if (emailMessage.length < 1)
    {
        isMessageFilled = false;
        focusMessage(); //function from main.js
    }

    if (emailMessage.length >= 1)
    {
        isMessageFilled = true;
    }

    if (emailSubject.length < 1)
    {
        isSubjectFilled = false;
        focusSubject(); //function from main.js
    }

    if (emailSubject.length >= 1)
    {
        isSubjectFilled = true;
    }

    if ((isSubjectFilled == true) && (isMessageFilled == true))
    {
        var datastr = 'email-subject=' + emailSubject + '&email-message=' + emailMessage;

        setTimeout("showContactConfirmationContainer(2)", 200); //function from main.js, setTimeout for ie since its focus is late

        setTimeout("send('" + datastr + "')", 2000);
    }
    else
    {
        setTimeout("showContactConfirmationContainer(1)", 200); //function from main.js, setTimeout for ie since its focus is late
    }

    return false;
}

function send(datastr) {
    $.ajax({
        type: "POST",
        url: "email.php",
        data: datastr,
        cache: false,
        success: function (html) {
            console.log(html);

            hideContactConfirmationContainer(); //function from main.js
            positionContactConfirmationContainer(); //function from main.js
            setTimeout("showContactConfirmationContainer(4)", 200); //function from main.js, setTimeout for ie since its focus is late

            clearAllInputField(); //function from main.js
        }
    });
}

