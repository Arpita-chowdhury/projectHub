function visibility_toggle_pass() {
    var pass = document.getElementById("regPass");
    if (pass.type === "password") {
      pass.type = "text";
    } else {
      pass.type = "password";
    }

  }

  function visibility_toggle_conPass(){
    var conPass = document.getElementById("regConPass");
    if (conPass.type === "password") {
        conPass.type = "text";
      } else {
        conPass.type = "password";
      }
  }