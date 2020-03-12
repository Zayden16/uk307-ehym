addEventListener("load", function(){

    document.querySelector('#listForm').addEventListener('submit', function(evt) {

        var errors  = [];

        if(document.querySelector('#name').value === '') {
            errors.push('Bitte gib einen Namen ein.');
        }

        if(document.querySelector('#email').value === '') {
            errors.push('Bitte geben Sie eine Email ein!.');
        }

        if(document.querySelector('#phone').value === '') {
            errors.push('Bitte geben Sie eine Nummer ein.');
        }

        if(document.querySelector('#adr').value === '') {
            errors.push('Bitte geben Sie eine gültige Adresse ein.');
        }

        var isValid = errors.length < 1;

        if( ! isValid) {
            renderErrors(errors);
            evt.preventDefault();
        }

    });


    /**
     * Wandelt das `errors` Array in eine
     * normale HTML-Liste um.
     *
     * @param array errors
     */
    function renderErrors(errors) {

        var errorList = document.querySelector('#errorList');

        // Bestehende <li> entfernen
        errorList.innerHTML = "";

        errors.forEach(function(error) {
            const errorMessage = document.createElement("li");
            errorMessage.textContent = error;
            errorList.append(errorMessage);
        });

        errorList.style.display = "block";
    }

});
