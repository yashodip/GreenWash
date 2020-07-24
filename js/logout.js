$(function() {

    $( "#logout" ).on("click",function() {
		setTimeout(() => {
          console.log("Logging out..");
        }, 1000);
        $.ajax({
            type:"POST",
            url:"include/operations.php?data=logout",
            dataType:"json",
            data:{
            },
            success:function(data){
                if(data.output == "SUCCESS")
                {
                  window.location.href = "login.php"
                }
                else
                {
                    alert("Logout Failed")
                }
            }
        });
    });
});
