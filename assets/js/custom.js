"use strict";

jQuery(document).ready(function($){
    //your custom js code here
    $( "#ndndnd" ).addClass("classToBeAdded");
    window.setTimeout('hide_loader()',2010);
  });
function hide_loader(){$('.loader-container').hide();}

$(document).ready(function(){
  $('.customer-logos').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1500,
    arrows: false,
    dots: false,
    pauseOnHover: false,
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 4
      }
    }, {
      breakpoint: 520,
      settings: {
        slidesToShow: 3
      }
    }]
  });
});

// allert functions here

function showAlert(type, parameter, message, duration) {
  if (!message) return false;
  if (!type) type = 'info';
  $("<input type='checkbox' id='alert_1' class='hide_alert'><div><label for='alert_1'>✖</label></div><div class=' alert "+type +" '> <p> <b>" +parameter+ "</b><br>" + message + " </p></div>").hide().appendTo('body').fadeIn(300);
  if (duration === undefined) {
    duration = 5000;
  }
  if (duration !== false) {
    $(".alert-message").delay(duration).fadeOut(500, function() {
      $(this).remove();
    });
  }
}
      // alert type = warning success info secondary danger
// document.getElementById("ndndnd").className += " classToBeAdded";
function showDiv(num) {
  jQuery(document).ready(function($){$( "#ndndnd" ).removeClass("classToBeAdded");});
  document.getElementById('paraDiv1').style.display='none';
  document.getElementById('paraDiv2').style.display='none';
  document.getElementById('paraDiv3').style.display='none';
  document.getElementById('paraDiv'+num).style.display='block';
}

$(document).ready(function(){
  $("#registerForm").validate({
    rules: {
      register_name: {
        required: true,
        textOnly: true
      },
      register_fname: {
        required: true,
        textOnly: true
      },
      register_mname: {
        required: true,
        textOnly: true
      },
      register_email: {
        required: true,
        textOnly: true
      },
      register_password: {
        required: true
      },
      register_Cpassword: {
        required: true
      },
      register_deptno: {
        required: true,
        textOnly: true
      },
      customfile: {
        required: true,
        textOnly: true
      },
      customCheck1: {
        required: true,
        textOnly: true
      },
      register_gender: {
        required: true
      },
    },
    messages: {
      register_name: {
       required: "<span class='text-danger'>Please enter your Surname</span>",                  
     },
     register_fname: {
       required: "<span class='text-danger'>Please enter your First Name</span>",                  
     },
     register_mname: {
      required: "<span class='text-danger'>Please enter your Middle Name</span>",                  
    },
    register_email: {
      required: "<span class='text-danger'>Please enter your Email</span>",                  
    },
    register_password: {
      required: "<span class='text-danger'>Please enter your Desired Password</span>",                  
    },
    register_Cpassword: {
      required: "<span class='text-danger'>Please Confirm your password</span>",                  
    },
    register_deptno: {
      required: "<span class='text-danger'>Please enter your Phone</span>",                  
    },
    customfile: {
      required: "<span class='text-danger'>Please upload a photo</span>",                  
    },
    customCheck1: {
      required: "<span class='text-danger'>Please Agree to terms</span>",                  
    },
    register_gender: {
      required: "<span class='text-danger'>Select gender</span>",                  
    },
  }
});
    // validate file upload size
    $('#customfile').bind('change', function() {
      var oFile = document.getElementById("customfile").files[0];
    if (oFile.size > 2097152) // 2 MiB for bytes.
      {alert("File size must under 2MiB!");oFile.value = "";return;}else{
       var file = document.getElementById('customfile').files[0];
       var form = $('form')[0];
       var formData = new FormData(form);
       formData.append("File", file);
       console.log(formData)
       $.ajax({
        url: 'include/handler.php?params=UploadImage',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        cache: false,
        success: function (response) {
          console.log(response);
          alert(response);
                    // $(".write-image").val(response)
                  },
                  error: function(response){
                    console.log('error')
                    // alert(response)
                  }
                });
       return false;
     }
   });

    //    validate the two passwords
    $('#register_Cpassword').on('keyup', function () {
      if (($('#register_password').val()) == ($('#register_Cpassword').val())) {            
        $('#alertMSG').html('password correct <br>').css('color', 'green');          
      } else 
      $('#alertMSG').html('password do not match <br>').css('color', 'red');
    });

    //   when submit button is clicked
    jQuery(function($){
    $(document).ajaxSend(function() {
      $("#overlay-spiner").fadeIn(300);　
    });
    $("#reg_stud").click(function(e) {

      e.preventDefault();
        // var dataString = $(this).serialize();    
        var IsValid=$("#registerForm").valid();
        if(IsValid && alat){
          $.ajax({
            type: "POST",
            url: "include/handler.php?params=RegSubmit",
            dataType: "JSON",
            data: new FormData($("#registerForm")), 
            processData: false,
            contentType: false,
            success: function(response){showAlert(type, message, duration);},
            error: function(e){}
          }).done(function() {
            setTimeout(function(){
              $("#overlay-spiner").fadeOut(300);
            },500);
          });
        }else{                
          $('#register_Cpassword').val("");
        }
      });

  });

