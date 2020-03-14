window.onload = function() {

    // Email format options appear when mailing list checkbox is checked
    let mailingListElement = document.getElementById("addToList");
    let chooseEmailFormat = document.getElementById("chooseEmailFormat");
    mailingListElement.addEventListener( 'change', function() {
        if(this.checked) {
            chooseEmailFormat.style.visibility = "visible";
        } else {
            chooseEmailFormat.style.visibility = "hidden";
        }
    });


    // "Other (please specify)" textbox is only visible when "Other" is selected from dropdown list
    let howMetElement = document.getElementById("howMet");
    let ifOtherBox = document.getElementById("ifOtherBox");
    howMetElement.addEventListener( 'change', function() {
        if(this.value === "Other") {
            ifOtherBox.style.visibility = "visible";
        } else {
            ifOtherBox.style.visibility = "hidden";
        }
    });


    // Form Validation
    document.getElementById("guestForm").onsubmit = validate;

    function validate() {

        // create a flag variable
        let valid = true;

        // Clear all errors
        let errors = document.getElementsByClassName("err");
        for (let i = 0; i < errors.length; i++) {
            errors[i].style.visibility = "hidden";
        }
        let errEmailRequired = document.getElementById("errEmailRequired");
        errEmailRequired.style.display = "none";

        //Check first name - require input
        let first = document.getElementById("firstName").value;
        if (first === "") {
            let errFirst = document.getElementById("errFirstName");
            errFirst.style.visibility = "visible";
            valid = false;
        }

        // Check last name - require input
        let last = document.getElementById("lastName").value;
        if (last === "") {
            let errLast = document.getElementById("errLastName");
            errLast.style.visibility = "visible";
            valid = false;
        }

        // If mailing list checkbox is checked, then email address is required
        let mailingListChecked = document.getElementById("addToList").checked;
        let emailAdd = document.getElementById("email").value;
        if (mailingListChecked) {
            // Check for an email address
            if (emailAdd === "") {
                errEmailRequired.style.display = "block";
                errEmailRequired.style.visibility = "visible";
                valid = false;
            }
        }

        // If email is included - check for valid email with '@' and '.'
        if (emailAdd !== "") {
            let countAt = 0;
            let countDot = 0;
            for (let i = 0; i < emailAdd.length; i++) {
                let validation = emailAdd.charAt(i);
                if (validation === '@') {
                    countAt++;
                }
                if (validation === '.') {
                    countDot++;
                }
            }
            if (countAt === 0 || countDot === 0) {
                let errEmailIncludes = document.getElementById("errEmailIncludes");
                errEmailIncludes.style.visibility = "visible";
                valid = false;
            }
        }

        // If LinkedIn address is included, must start with "http" and end with ".com"
        let linkedIn = document.getElementById("linkedIn").value;
        if (linkedIn !== "") {
            let hasHTTP = false;
            let hasCOM = false;
            if (linkedIn.length >= 4) {
                let front = linkedIn.substring(0, 4);
                let back = linkedIn.substring(linkedIn.length - 4, linkedIn.length);
                if (front === "http") {
                    hasHTTP = true;
                }
                if (back === ".com") {
                    hasCOM = true;
                }
            }

            if (hasHTTP === false || hasCOM === false) {
                let errLinkedIn = document.getElementById("errLinkedIn");
                errLinkedIn.style.visibility = "visible";
                valid = false;
            }
        }

        // Check How We Met - require a selection
        let howMetValue = document.getElementById("howMet").value;
        if (howMetValue === "Please Select") {
            let errHowMet = document.getElementById("errHowMet");
            errHowMet.style.visibility = "visible";
            valid = false;
        }


        return valid;
    }

}