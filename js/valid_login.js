$().ready(function () {
  $("#loginform").validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
      },
    },
    messages: {
      email: {
        required: "please enter your email",
        email: "please enter valid email address",
      },
      password: {
        required: "please Enter your password",
      },
    },
    submitHandler: function (form, e) {
      console.log("Form submitted");
      var username = $("#email").val();
      var password = $("#password").val();
      $.ajax({
        type: "POST",
        url: "./include/operations.php?data=login",
        dataType: "json",
        data: {
          username: username,
          password: password,
        },
        success: function (data) {
          if (data.output == "SUCCESS") {
            window.location.href = "index.php";
          } else {
            alert("Login Failed");
          }
        },
      });

      return false;
    },
  });
});
