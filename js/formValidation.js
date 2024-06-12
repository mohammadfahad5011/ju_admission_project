function validateForm() {
  // Reset previous error messages
  $(".error").text("");

  let isValid = true;

  // Reset previous error messages
  $(".error").text("");

  // Validation for Name
  const nameInput = $("#NomineeFullName");
  if (nameInput.val().trim() === "") {
    $("#NomineeFullName-error").text("অনুগ্রহ করে নাম অন্তর্ভুক্ত করুন");
    isValid = false;
  }

  // Validation for Phone
  const phoneInput = $("#NomineeMobile");
  if (
    phoneInput.val().trim() === "" ||
    phoneInput.val().trim().length !== 11 ||
    isNaN(phoneInput.val().trim())
  ) {
    $("#NomineeMobile-error").text(
      "অনুগ্রহ করে সঠিক ১১ ডিজিটের মুঠোফোন নাম্বার অন্তর্ভুক্ত করুন"
    );
    isValid = false;
  }

  // Validation for Email
  const emailInput = $("#NomineEmail");
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Basic email format validation
  if (
    emailInput.val().trim() !== "" &&
    !emailRegex.test(emailInput.val().trim())
  ) {
    $("#NomineeEmail-error").text("অনুগ্রহ করে সঠিক ই-মেইল অন্তর্ভুক্ত করুন");
    isValid = false;
  }

  // Validation for Address
  const addressInput = $("#fullAddress");
  if (addressInput.val().trim() === "") {
    $("#address-error").text("অনুগ্রহ করে ঠিকানা অন্তর্ভুক্ত করুন");
    isValid = false;
  }

  // Validation for Nominated Name
  const nominatedNameInput = $("#NominatedFullName");
  if (nominatedNameInput.val().trim() === "") {
    $("#NominatedFullName-error").text("অনুগ্রহ করে নাম অন্তর্ভুক্ত করুন");
    isValid = false;
  }

  // Validation for Category
  const categoryInput = $("#program-dropdown");
  if (categoryInput.val().trim() === "") {
    $("#category-error").text("অনুগ্রহ করে ক্যাটাগরি নির্বাচন করুন");
    isValid = false;
  }

  // Validation for Nominated Phone
  const nominatedPhoneInput = $("#NominatedMobile");
  if (
    nominatedPhoneInput.val().trim() === "" ||
    nominatedPhoneInput.val().trim().length !== 11 ||
    isNaN(nominatedPhoneInput.val().trim())
  ) {
    $("#NominatedMobile-error").text(
      "অনুগ্রহ করে সঠিক ১১ ডিজিটের মুঠোফোন নাম্বার অন্তর্ভুক্ত করুন"
    );
    isValid = false;
  }

  // Validation for Nominated Email
  const nominatedEmailInput = $("#NominatedEmail");
  if (
    nominatedEmailInput.val().trim() !== "" &&
    !emailRegex.test(nominatedEmailInput.val().trim())
  ) {
    $("#NominatedEmail-error").text("অনুগ্রহ করে সঠিক ই-মেইল অন্তর্ভুক্ত করুন");
    isValid = false;
  }

  // Validation for Age
  const ageInput = $("#NominatedAge");
  if (ageInput.val().trim() === "" || isNaN(ageInput.val().trim())) {
    $("#NominatedAge-error").text("অনুগ্রহ করে বয়স অন্তর্ভুক্ত করুন");
    isValid = false;
  }

  // Validation for Nominated Address
  const nominatedAddressInput = $("#NominatedFullAddress");
  if (nominatedAddressInput.val().trim() === "") {
    $("#NominatedAddress-error").text("অনুগ্রহ করে ঠিকানা অন্তর্ভুক্ত করুন");
    isValid = false;
  }

  // Validation for Achievement
  const achievementInput = $("#NominatedAchievement");
  if (achievementInput.val().trim() === "") {
    $("#NominatedAchievement-error").text("অনুগ্রহ করে অর্জন অন্তর্ভুক্ত করুন");
    isValid = false;
  }

  // Validation for Production
  const productionInput = $("#production");
  if (productionInput.val().trim() === "") {
    $("#production-error").text(
      "অনুগ্রহ করে গত তিন বছরে উৎপাদন পরিমাণ অন্তর্ভুক্ত করুন"
    );
    isValid = false;
  }

  // Validation for Number of Workers
  const workersInput = $("#NumbeOfWorkers");
  if (workersInput.val().trim() === "") {
    $("#NumbeOfWorkers-error").text(
      "অনুগ্রহ করে গত তিন বছরে কর্মীদের সংখ্যা অন্তর্ভুক্ত করুন"
    );
    isValid = false;
  }

  // Validation for Income
  const incomeInput = $("#income");
  if (incomeInput.val().trim() === "") {
    $("#income-error").text(
      "অনুগ্রহ করে গত তিন বছরে আয়ের পরিমাণ অন্তর্ভুক্ত করুন"
    );
    isValid = false;
  }

  // Validation for Importance
  const importanceInput = $("#importance");
  if (importanceInput.val().trim() === "") {
    $("#importance-error").text(
      "অনুগ্রহ করে জৈব সার, খাবার ও পরিবেশ সংরক্ষণ গুরুত্ব দেওয়া বিবরণ অন্তর্ভুক্ত করুন"
    );
    isValid = false;
  }

  return isValid;
}
