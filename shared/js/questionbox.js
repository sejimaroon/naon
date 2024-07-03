document.addEventListener("DOMContentLoaded", function() {
  var qaBoxes = document.querySelectorAll(".qa-box");

  qaBoxes.forEach(function(qaBox) {
      var question = qaBox.querySelector(".question");
      var answer = qaBox.querySelector(".answer");
      var toggleBtn = qaBox.querySelector(".toggle-btn");

      question.addEventListener("click", function() {
          // Toggle answer visibility
          if (answer.style.display === "none" || answer.style.display === "") {
              answer.style.display = "block";
              toggleBtn.querySelector("i").style.transform = "rotate(180deg)";
          } else {
              answer.style.display = "none";
              toggleBtn.querySelector("i").style.transform = "rotate(0deg)";
          }
      });
  });
});
