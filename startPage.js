document.addEventListener("DOMContentLoaded", function () {
  const purposes = [
    "Meningkatkan produktivitas",
    "Mengelola waktu lebih baik",
    "Belajar hal baru setiap hari",
  ];
  let purposeIndex = 0;
  const animatedText = document.getElementById("animatedText");

  function animateText() {
    animatedText.textContent = purposes[purposeIndex];
    purposeIndex = (purposeIndex + 1) % purposes.length;
    setTimeout(animateText, 3000); // Change text every 3 seconds
  }

  animateText();
});
