$().ready(function () {
    var validator = $("#place_order").validate({
      rules: {
        shpng_addr: {
          required: true,
          minlength: 4,
        },
        payment:{
            required:true,
        },
        name: {
          required: true,
          minlength: 3,
        },
        city:{
            required:true,
        },
        zip: {
          required: true,
          digits: true,
        },
        phone: {
          required: true,
          digits: true,
          maxlength: 10,
          minlength: 10,
        },
        weight: {
          required: true,
          digits: true,
          minlength: 1,
        },
      },
      messages: {
        shpng_addr: {
          required: "please Enter your shiping address",
        },
        name: {
          required: "please Enter your name",
        },
        address: {
          required: "please enter your address",
        },
        city: {
          required: "please enter your city",
        },
        zip: {
          required: "please correct zip code",
          minlength: "please enter 6 digit zip code only",
        },
        phone: {
          required: "please Enter your phone number",
          minlength:"please enter 10 digit number only"
        },
        weight: {
          required: "please enter approximate",
        },
      },
      submitHandler: function (form, e) {
        console.log("submitting a form");
        var shpng_addr = $("#shpng_addr").val();
        var payment = $("#payment").val();
        var name = $("#name").val();
        var city = $("#city").val();
        var zip = $("#zip").val();
        var phone = $("#phone").val();
        var weight = $("#weight").val();
        $.ajax({
          type: "POST",
          url: "./include/operations.php?data=placeOrder",
          dataType: "json",
          data: {
            shpng_addr: shpng_addr,
            payment: payment,
            name:name,
            city:city,
            zip:zip,
            phone:phone,
            weight:weight
          },
          success: function (data) {
            if (data.output == "SUCCESS") {
              alert("Order placed successfully!")
              $('#place_order')[0].reset();
            } else {
              alert("Login Failed");
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
  