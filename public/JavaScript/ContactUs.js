const form = document.getElementById('contactform');
const name = document.getElementById('name');
const email = document.getElementById('email');
const contact = document.getElementById('contact');

const message = document.getElementById('message');

form.addEventListener('submit', e => {
	
	Validation();
});


function Validation() {
    const  name_trim      = name.value.trim();
    const  email_trim     = email.value.trim();
    const  contact_trim   = contact.value.trim();
    const  message_trim   = message.value.trim();


    // Full Name Validation
    
    if(name_trim === '') {
        
		Invalid_Input(name, 'name is Empty');
    event.preventDefault();

    } else if (!Checkname(name_trim)) {
		Invalid_Input(name, 'Invalid name \n Only alphabets and spaces are allowed');
    event.preventDefault();

    
    
    }else {

		Correct_Input(name);
	}

    function Checkname(name) {
        return /^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$/.test(name);
    }





    // Email Validation

    if(email_trim === '') {
		Invalid_Input(email, 'Email is empty');
    event.preventDefault();

	} else if (!CheckEmail(email_trim)) {
		Invalid_Input(email, 'Invalid/Wrong email');
    event.preventDefault();

	} else {
		Correct_Input(email);
	}

    function CheckEmail(email) {
        return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
    }


    // Contact Number Validation

    if(contact_trim === '') {
		Invalid_Input(contact, 'Contact is Empty');
    event.preventDefault();

	} else if (!CheckContact(contact_trim)){
        Invalid_Input(contact, 'Invalid/Wrong Contact Number \n Enter the 11 Digit number.');
        event.preventDefault();



    } else {
		Correct_Input(contact);
	}

    function CheckContact(contact) {
        return /^\(?([0-9]{4})\)?[-. ]?([0-9]{7})$/.test(contact);
        
    }


    // Message Validation

    if(message_trim === '') {
		Invalid_Input(message, 'message is empty');
    event.preventDefault();


    } else if (!Checkmessage(message_trim)){
        Invalid_Input(message, 'Invalid/Wrong input \n Must have at least 10 characters.');
        event.preventDefault();


	} else {
		Correct_Input(message);
	}
    
    function Checkmessage(message) {
        if(message.length >10)
        return true;
    }



    // Display Error Message
    function Invalid_Input(input, message) {
        const formControl = input.parentElement;
        const p2 = formControl.querySelector('p2');
        formControl.className = 'form-inside invalid';
        p2.innerText = message;
    }
        
    // Display Success Message
    function Correct_Input(input) {
        const form3 = input.parentElement;
        form3.className = 'form-inside correct';
    }
    



}