const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

var pop = {
  show : (title, text) => {
    document.getElementById("poptitle").innerHTML = title;
    document.getElementById("poptext").innerHTML = text;
    document.getElementById("popwrap").classList.add("open");
  },
  
  hide : () => {
    document.getElementById("popwrap").classList.remove("open");
  }
};

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});

open.addEventListener('click',()=>{
  model_container.classList.add('show');
} );
open.addEventListener('click',()=>{
  model_container.classList.remove('show');
} );


function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("myInput");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

   /* Copy the text inside the text field */
  navigator.clipboard.writeText(copyText.value);

  /* Alert the copied text */
  alert("Copied the text: " + copyText.value);
} 


