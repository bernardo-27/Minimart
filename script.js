
const navbarMenu = document.querySelector(".navbar .links");
const hamburgerBtn = document.querySelector(".hamburger-btn");
const hideMenuBtn = navbarMenu.querySelector(".close-btn");
const showPopupBtn = document.querySelector(".login-btn");
const formPopup = document.querySelector(".form-popup");
const hidePopupBtn = formPopup.querySelector(".close-btn");
const signupLoginLink = formPopup.querySelectorAll(".bottom-link a");
const termsLink = document.querySelector(".policy-text .option");
const termsModal = document.getElementById("terms-modal");
const agreeTermsBtn = document.getElementById("agree-terms-btn");

// Show mobile menu
hamburgerBtn.addEventListener("click", () => {
  navbarMenu.classList.toggle("show-menu");
});

// Hide mobile menu
hideMenuBtn.addEventListener("click", () => hamburgerBtn.click());

// Show login popup 
showPopupBtn.addEventListener("click", () => {
  document.body.classList.toggle("show-popup");
});

// Hide login popup
hidePopupBtn.addEventListener("click", () => showPopupBtn.click());

// Show or hide signup form
signupLoginLink.forEach((link) => {
  link.addEventListener("click", (e) => {
    e.preventDefault();
    formPopup.classList[link.id === "signup-link" ? "add" : "remove"](
      "show-signup"
    );
  });
});

// Show terms modal
termsLink.addEventListener("click", (e) => {
  e.preventDefault();
  termsModal.style.display = "block";
});

// Hide terms modal
closeModalBtn.addEventListener("click", () => {
  termsModal.style.display = "none";
});

// // Hide modal when clicking outside of the modal content
// window.addEventListener("click", (e) => {
//   if (e.target === termsModal) {
//     termsModal.style.display = "none";
//   }
// });

// Function to agree to terms
function agreeTerms() {
  document.getElementById('terms-modal').style.display = 'none';
  document.getElementById('policy').checked = true;
}
