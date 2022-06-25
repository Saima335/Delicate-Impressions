
const form     = document.getElementById('contactform');
const email    = document.getElementById('email');
const password = document.getElementById('password');


form.addEventListener('submit', e => {
	
	Validation();
});



function Validation() {
    const  email_trim     = email.value.trim();
    const  password_trim  = password.value.trim();
 
 
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




    // Password Validation

    if(password_trim === '') {
		Invalid_Input(password, 'Password is Empty');
        event.preventDefault();


    } else if (!CheckPassword(password_trim)) {
		Invalid_Input(password, 'Invalid/Wrong password \n Password should include: \n 6-15 characters, One capital Letter, One small Letter, One Digit');
        event.preventDefault();

	} else {
		Correct_Input(password);
	}

    function CheckPassword(password) {
        return /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,15}$/.test(password);
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