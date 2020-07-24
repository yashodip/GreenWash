$().ready(function () {
  $("#signupform").validate({
    rules: {
      firstname: {
        required: true,
        minlength: 3,
      },
      lastname: {
        required: true,
        minlength: 3,
      },
      email: {
        required: true,
        email: true,
      },
      phone: {
        required: true,
        maxlength: 10,
        minlength: 10,
      },
      password: {
        required: true,
        minlength: 5,
      },
    },
    messages: {
      firstName: {
        required: "please Enter your name",
      },
      lastName: {
        required: "please Enter your name",
      },
      address: {
        required: "please enter your address",
      },
      city: {
        required: "please enter your city",
      },
      email: {
        required: "please Enter your email address",
        email: "please enter valid email",
      },
      phone: {
        required: "please Enter your phone number",
      },
      password: {
        required: "please enter password",
        minlength: "please enter password more than 6 character",
      },
    },
    submitHandler: function (form, e) {
      console.log("Form submitted");
      var firstname = $("#firstname").val();
      var lastname = $("#lastname").val();
      var phone = $("#phone").val();
      var email = $("#email").val();
      var password = $("#password").val();
      $.ajax({
        type: "POST",
        url: "./include/operations.php?data=signup",
        dataType: "json",
        data: {
          firstname: firstname,
          lastname: lastname,
          phone: phone,
          email: email,
          password: password,
        },
        success: function (data) {
          if (data.output == "SUCCESS") {
            alert("Registration successful!");
            window.location.href = "./login.php";
          } else {
            alert("Signup Failed");
          }
        },
        error: function (error) {
          console.log(error);
        },
      });
      return false;
    },
  });
});
