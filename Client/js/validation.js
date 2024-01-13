//sign up validation
var NameError = document.getElementById("error-name");
var PhoneError = document.getElementById("error-phone");
var pass = document.getElementById("password");
var msg = document.getElementById("message");
var str = document.getElementById("stringh");
var UserError = document.getElementById("error-Uname");
//sign in validation 
var Logerrer = document.getElementById("error-usrn");

// end of variables

// pass-ku waa 
pass.addEventListener('input', () => {
    if (pass.value.length > 0) {
      msg.style.display = "block";
    }else {
      msg.style.display = "none";
    }
    if (pass.value.length < 4) {
      str.innerHTML = "Weak";
      pass.style.borderColor = "#ff5925";
      msg.style.color = "#ff5925";
    }
   
    else if(pass.value.length >= 4 && pass.value.length < 8){
        str.innerHTML = "Medium";
        pass.style.borderColor = "purple";
        msg.style.color = "purple";
    }
    else if (pass.value.length >= 8){
         str.innerHTML = 'Strong  <i class="fas far fa-check-circle"></p></i>';
         pass.style.borderColor = "#26d730";
         msg.style.color = "#26d730";
    }
  })
// waa qaybta validation- ka 
  function validateName() {
    var name = document.getElementById('contact-name').value;
    if (name.length == 0) {
      NameError.innerHTML = '* Name is required';
      NameError.style.color = "red";
      NameError.style.fontSize = "12px";
      return false;
      
    }
    if (!name.match(/^[A-Za-z]*\s{1}[A-Za-z]*$/)) {
      NameError.innerHTML = '* Write Full name';
      NameError.style.color = "red";
      NameError.style.fontSize = "12px";
      return false;
    }
    
    NameError.innerHTML = '<i class="fas far fa-check-circle"></i>';
    NameError.style.color = "#26d730";
    NameError.style.fontSize = "12px";
    return true;
  }
function validateName() {
    var name = document.getElementById('contact-name').value;
    if (name.length == 0) {
      NameError.innerHTML = 'Name is required';
      NameError.style.color = "red";
      NameError.style.fontSize = "12px";
      return false;
      
    }
    if (!name.match(/^[A-Za-z]*\s{1}[A-Za-z]*$/)) {
      NameError.innerHTML = 'Write Full name';
      NameError.style.color = "red";
      NameError.style.fontSize = "12px";
      return false;
    }
    
    NameError.innerHTML = '<i class="fas far fa-check-circle"></i>';
    NameError.style.color = "#26d730";
    NameError.style.fontSize = "12px";
    return true;
  }
  function validatePhone() {
    var phone = document.getElementById('contact-phone').value;
    if (phone.length == 0) {
      PhoneError.innerHTML= 'Phone is required';
      PhoneError.style.color = "red";
      PhoneError.style.borderColor = "red";
      PhoneError.style.fontSize = "12px";
      return false;
    }  
    if (phone.length !== 10) {
      PhoneError.innerHTML= 'Phone number shoul be 10 digits';
      PhoneError.style.borderColor = "red";
      PhoneError.style.color = "red";
      PhoneError.style.fontSize = "12px";
      return false;
    }  
    if (!phone.match(/^[0-9]{10}$/)) {
      PhoneError.innerHTML= 'Only digits';
      PhoneError.style.color = "red";
       pass.style.borderColor = "red";
      PhoneError.style.fontSize = "12px";
      return false;
    }
     PhoneError.innerHTML=  '<i class="fas far fa-check-circle"></i>';
    PhoneError.style.color = "#26d730";
     pass.style.borderColor = "#26d730";
    PhoneError.style.fontSize = "12px";
    return true;
  }

function loginvalidation() {
  var login = document.getElementById('usrname').value;
  if (login.length == 0) {
    Logerrer.innerHTML = '* Username Required  <i class="fas far fa-warning"></i>';
    Logerrer.style.color = 'red';
    Logerrer.style.fontSize = "12px";
    return false;
  }
  if (!login.match(/^[A-Za-z]+$/)) {
    Logerrer.innerHTML = '* Invalid Username only alphabets  <i class="fas far fa-warning"></i>';
    Logerrer.style.color = 'red';
    Logerrer.style.fontSize = "12px";
    return false;
  }
    Logerrer.innerHTML = 'valid  <i class="fas far fa-check-circle"></i>';
    Logerrer.style.color = "#26d730";
    Logerrer.style.fontSize = "12px";
    setTimeout(function(){ Logerrer.style.display = 'none';},5000);
    return true;  

}


function ValidationUser() {
    var Username = document.getElementById('contact-username').value;
    if (Username.length == 0) {
        UserError.innerHTML = '* Username is required';
        UserError.style.color = "red";
        UserError.style.fontSize = "12px";
        return false;
    }
    if (Username.length > 20) {
        UserError.innerHTML = 'Username Must be Lest then 20';
        UserError.style.color = "red";
        UserError.style.fontSize = "12px";
        return false;
      }
        UserError.innerHTML = '<i class="fas far fa-check-circle"></i>';
        UserError.style.color = "#26d730";
        UserError.style.fontSize = "12px";
        return true;
}

