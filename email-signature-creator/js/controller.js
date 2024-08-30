// toggle menu
function openNav(){
  document.getElementById("myNav").classList.toggle("menu_width"); 
  document .querySelector(".custom_menu-btn").classList.toggle("menu_btn-style");
}

// signature copy        
$(document).ready(function(){

  // define values
  $("#name").change(function(){
    var fullname = $("#name").val();
    document.getElementById("name").setAttribute("value", fullname);
  });
  $("#pronoun").change(function(){
    var pronoun = $("#pronoun").val();
    document.getElementById("pronoun").setAttribute("value", pronoun);
  });
  $("#jobtitle").change(function(){
    var jobtitle = $("#jobtitle").val();
    document.getElementById("jobtitle").setAttribute("value", jobtitle);
  });
  $("#city").change(function(){
    var citycountry = $("#city").val();
    document.getElementById("city").setAttribute("value", citycountry);
  });
    $("#phone").change(function(){
    var citycountry = $("#phone").val();
    document.getElementById("phone").setAttribute("value", phone);
  });

  // create signature  
  $("#createsignature").on('click', function () {

    // get details
    var fullname = $("#name").val();
    var pronoun = $("#pronoun").val();
    var jobtitle = $("#jobtitle").val();
    var citycountry = $("#city").val();
    var phone = $("#phone").val();

    // error check
    if (fullname == "" || fullname == "undefined" || fullname == null || pronoun == "" || pronoun == "undefined" || pronoun == null || jobtitle == "" || jobtitle == "undefined" || jobtitle == null || citycountry == "" || citycountry == "undefined" || citycountry == null) {          
      if (fullname == "" || fullname == "undefined" || fullname == null) {
        $("#name").css("border-color", "#d1435b");                      
      } else {
        $("#name").css("border-color", "#b2b2bf");
      }
      if (pronoun == "" || pronoun == "undefined" || pronoun == null) {
        $("#pronoun").css("border-color", "#d1435b");                      
      } else {
        $("#pronoun").css("border-color", "#b2b2bf");
      }
      if (jobtitle == "" || jobtitle == "undefined" || jobtitle == null) {
        $("#jobtitle").css("border-color", "#d1435b");
      } else {
        $("#jobtitle").css("border-color", "#b2b2bf");
      }
      if (citycountry == "" || citycountry == "undefined" || citycountry == null) {
        $("#city").css("border-color", "#d1435b");
      } else {
        $("#city").css("border-color", "#b2b2bf");
      }
    } else {
      $("#name").css("border-color", "#b2b2bf");
      $("#pronoun").css("border-color", "#b2b2bf");
      $("#jobtitle").css("border-color", "#b2b2bf");
      $("#city").css("border-color", "#b2b2bf");


      // delete old signature
      $("#signature").html('<div id="signaturecurtain"></div>');

      // insert details

      var phoneNumber = phone ? '<br/><span style="font-family: Arial, sans-serif; font-size: 14px; line-height: 16px; color: #05203C;">M: ' + phone + '</span>' : '';

      var create_signature = $("#signatureraw").html().replace("{fullName}", fullname).replace("{pronoun}", pronoun).replace("{jobTitle}", jobtitle).replace("{cityCountry}", citycountry).replace("{phone}", phoneNumber).replace("{phone}", phoneNumber);
      $("#signature").append(create_signature);

      // show signature
      $("#signature_output").css("display", "unset");
      // jump to signature
        setTimeout(function(){              
          window.location.href = "#signature_output";
          $("#signature_output").css("opacity", "1");
        }, 200);

    }

  });

  // copy signature     
  $("#copysignature").on('click', function () {
    // open curtain
    $("#signaturecurtain").css("opacity", "1");
    // select signature
    window.getSelection().selectAllChildren(document.getElementById("signature"));
    // copy signature
    document.execCommand('copy')
    // deselect signature
    document.getSelection().removeAllRanges();
    // close curtain
    setTimeout(function(){$("#signaturecurtain").css("opacity", "0");},200);
  });

});