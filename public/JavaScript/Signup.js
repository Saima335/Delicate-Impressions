
const form = document.getElementById('contactform');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const contact = document.getElementById('contact');
const city = document.getElementById('city');
const postal = document.getElementById('postal');
const address = document.getElementById('address');

function showHint(str) {
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "gethint.php?q=" + str, true);
    xmlhttp.send();
  }
}

form.addEventListener('submit', e => {
	
	Validation();
});



function Validation() {
    const  username_trim  = username.value.trim();
    const  email_trim     = email.value.trim();
    const  password_trim  = password.value.trim();
    const  contact_trim   = contact.value.trim();
    const  city_trim      = city.value.trim();
    const  postal_trim    = postal.value.trim();
    const  address_trim   = address.value.trim();






    // Username Validation
    if(username_trim === '') {
        
		Invalid_Input(username, 'Username is Empty');
    event.preventDefault();
    } else if (!CheckUsername(username_trim)) {
		Invalid_Input(username, 'Invalid Username \n Only alphabets and digits are allowed');
    event.preventDefault();
    
    
    }else {

		Correct_Input(username);
	}

    function CheckUsername(username) {
        return /^[0-9a-zA-Z]+$/.test(username);
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



    // City Validation

    if(city_trim === '') {
		Invalid_Input(city, 'Please Enter City ');
    event.preventDefault();


    } else if (!CheckCity(city_trim)){
        Invalid_Input(city, 'Invalid/Wrong City \n Enter Letters, Spaces and Dashes Only');
        event.preventDefault();


	} else {
		Correct_Input(city);
	}

    function CheckCity(city) {
        return /^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$/.test(city);
    }




    // Postal Code Validation

    if(postal_trim === '') {
		Invalid_Input(postal, 'Postal code is empty');
    event.preventDefault();

    
    } else if (!CheckPostal(postal_trim)){
        Invalid_Input(postal, 'Invalid/Wrong Postal Code \n Enter a 5 Digit number.');
        event.preventDefault();


    } else {
		Correct_Input(postal);
	}
    
    function CheckPostal(postal) {
        return /^\d{5}$/.test(postal);
    }

    // Address Validation

    if(address_trim === '') {
		Invalid_Input(address, 'Address is empty');
    event.preventDefault();


    } else if (!CheckAddress(address_trim)){
        Invalid_Input(address, 'Invalid/Wrong Address \n Must have at least 15 characters.');
        event.preventDefault();


	} else {
		Correct_Input(address);
	}
    
    function CheckAddress(address) {
        if(address.length >15)
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