// Wait for DOM to load
document.addEventListener("DOMContentLoaded", () => {
  const form = document.querySelector("form");
  const submitBtn = form.querySelector('button[type="submit"]');
  const resetBtn = form.querySelector('button[type="reset"]');
  const submitMsg = document.querySelector(".submitMsg");

  // Hide the submitMsg initially
  submitMsg.style.display = "none";

  form.addEventListener("submit", function (e) {
    const name = form.name.value.trim();
    const age = form.age.value.trim();
    const gender = form.gender.value.trim();
    const email = form.email.value.trim();
    const phone = form.phone_No.value.trim();

    if (!name || !age || !gender || !email || !phone) {
      alert("Please fill in all the required fields.");
      e.preventDefault(); // Stop form submission
      return;
    }

    // Optional: Confirm before submission
    const confirmSubmit = confirm("Do you want to submit the form?");
    if (!confirmSubmit) {
      e.preventDefault();
    } else {
      // Optional: disable submit button
      submitBtn.disabled = true;
      submitBtn.innerText = "Submitting...";
    }
  });

  // Optional: Show alert on form reset
  resetBtn.addEventListener("click", () => {
    if (confirm("Are you sure you want to clear the form?")) {
      submitMsg.style.display = "none";
    }
  });

  // Show thank-you message dynamically after submission
  if (window.location.href.includes("?submitted=true")) {
    submitMsg.style.display = "block";
  }
});
