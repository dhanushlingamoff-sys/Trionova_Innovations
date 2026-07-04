/*==============================================================*/

// Raque Contact Form  JS

/*==============================================================*/

(function ($) {

    "use strict"; // Start of use strict

    $("#contactForm").on("submit", function (event) {
        var twoToneButton = document.querySelector('.twoToneButton');
    
        twoToneButton.innerHTML = "Submitting";
        twoToneButton.classList.add('spinning');
        
      setTimeout( 
            function  (){  
                twoToneButton.classList.remove('spinning');
                twoToneButton.innerHTML = "Submit";
                
            }, 9000);
        event.preventDefault();

        submitForm();

    });





    function submitForm() {

        // Initiate Variables With Form Content

        var name = $('#name').val();

        var email = $('#email').val();

        var mobile = $('#mobile').val();

        var message = $('#message').val();

        var formData = {};

        formData.name = name;

        formData.email = email;

        formData.mobile = mobile;


        formData.message = message;

        console.log(formData);

        $.ajax({

            type: 'POST',

            url: '/mailer.php',

            data: formData,

            success: (result) => {

                console.log("res ==> ", result);

                if (result && !result.error) {

                    // $('#exampleModal').modal('show');

                    $(".form-control").val('');

                    // window.location.href = "thankyou.html";
                    
                  

                } else {

                    alert('Error: Your request was failed. Please try again')

                }

            }

        });

    }



    function formSuccess() {

        $("#contactForm")[0].reset();

        // submitMSG(true, "Message Submitted!")

    }



    // function submitMSG(valid, msg) {

    //     if (valid) {

    //         var msgClasses = "h4 submit-post-info tada animated text-success";

    //     } else {

    //         var msgClasses = "h4 submit-post-info text-danger";

    //     }

    //     $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);

    // }

}(jQuery)); // End of use strict