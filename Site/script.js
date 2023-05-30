
//log in , Sign up---

const loginBtn = document.getElementById("loginBtn");
const loginBox = document.getElementById("loginBox");
const closeBtn = document.getElementById("closeBtn");
const signupBtn = document.getElementById("signupBtn");
const signupBox = document.getElementById("signupBox");
const closeSignupBtn = document.getElementById("closeSignupBtn");

loginBtn.addEventListener("click", () => {
  loginBox.style.display = "block";
});

closeBtn.addEventListener("click", () => {
  loginBox.style.display = "none";
});

signupBtn.addEventListener("click", () => {
  signupBox.style.display = "block";
  loginBox.style.display = "none";
});

closeSignupBtn.addEventListener("click", () => {
  signupBox.style.display = "none";
});


//Paragraph

function saveContent() {
  var paragraph = document.getElementById("editableParagraph");
  var updatedContent = paragraph.innerHTML;

  // Create a FormData object
  var formData = new FormData();
  formData.append("content", updatedContent);

  // Send the updatedContent to the server for saving to the database
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "PhpPages/save.php", true);
  xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        console.log("Content saved successfully");
      } else {
        console.log("Error saving content");
      }
    }
  };
  xhr.send(formData);
}

