// Contact Form
function validateForm() {
  var name = document.forms["myForm"]["name"].value;
  var email = document.forms["myForm"]["email"].value;
  var mobile = document.forms["myForm"]["mobile"].value;
  var subject = document.forms["myForm"]["subject"].value;
  var message = document.forms["myForm"]["message"].value;
  var captcha = document.forms["myForm"]["captcha"].value;
  document.getElementById("error-msg").style.opacity = 0;
  document.getElementById('error-msg').innerHTML = "";
  if (name == "" || name == null) {
    document.getElementById('error-msg').innerHTML = "<div class='alert alert-warning error_message'>*لطفا نام خود را وارد کنید*</div>";
    fadeIn();
    return false;
  }

  if (email == "" || email == null) {
    document.getElementById('error-msg').innerHTML = "<div class='alert alert-warning error_message'>*لطفا ایمیل خود را وارد کنید*</div>";
    fadeIn();
    return false;
  }
  if (subject == "" || subject == null) {
    document.getElementById('error-msg').innerHTML = "<div class='alert alert-warning error_message'>*لطفا موضوع خود را وارد کنید*</div>";
    fadeIn();
    return false;
  }
  if (message == "" || message == null) {
    document.getElementById('error-msg').innerHTML = "<div class='alert alert-warning error_message'>*لطفا نظر خود را وارد کنید*</div>";
    fadeIn();
    return false;
  }
  if (captcha == "" || captcha == null) {
    document.getElementById('error-msg').innerHTML = "<div class='alert alert-warning error_message'>*لطفا کد امنیتی را وارد کنید*</div>";
    fadeIn();
    return false;
  }
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("simple-msg").innerHTML = this.responseText;
      document.forms["myForm"]["name"].value = "";
      document.forms["myForm"]["email"].value = "";
      document.forms["myForm"]["subject"].value = "";
      document.forms["myForm"]["comments"].value = "";
    }
  };
  xhttp.open("POST", "php/contact.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("name=" + name + "&email=" + email + "&subject=" + subject + "&comments=" + comments);
  return false;
}
function fadeIn() {
  var fade = document.getElementById("error-msg");
  var opacity = 0;
  var intervalID = setInterval(function () {
    if (opacity < 1) {
      opacity = opacity + 0.5
      fade.style.opacity = opacity;
    } else {
      clearInterval(intervalID);
    }
  }, 200);
}
