<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Email Signature Creator</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins|Raleway:400,600|Righteous&display=swap" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet"/>
    <link href="css/responsive.css" rel="stylesheet"/>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="//js.skyscnr.com/sttc/oc-registry/components/base-stylesheet/0.1.42/build//static/css/main.2ebf3c38.css">
  </head>
  <body>
    <div class="header_section">
      <div class="custom_menu-btn"><a class="button" href="logout.php">Logout</a></div>
    </div>
    <section class="about_section layout_padding">
      <div class="container">
        <h2>Create your email signature</h2>
        <a href="#signature_form" class="button">Start now</a>
      </div>
      <div class="container">
        <div class="about_card-container layout_padding2-top">
          <div class="about_card hide_phone">
            <div class="about-detail">
              <div class="about_img-container">
                <div class="about_img-box"> <img src="images/skyscanner2.svg" alt="Skyscanner"/> </div>
              </div>
              <div class="card_detail-ox">
                <h4>Update anytime</h4>
                <p>Access this page to update your email signature anytime</p>
              </div>
            </div>
          </div>
          <div class="about_card">
            <div class="about-detail">
              <div class="about_img-container">
                <div class="about_img-box"> <img src="images/skyscanner5.svg" alt="Skyscanner"/> </div>
              </div>
              <div class="card_detail-ox">
                <h4>Three simple steps</h4>
                <p>Introduce your details, copy your signature, and paste it into Outlook</p>
              </div>
            </div>
          </div>
          <div class="about_card hide_tablet">
            <div class="about-detail">
              <div class="about_img-container">
                <div class="about_img-box"> <img src="images/skyscanner3.svg" alt="Skyscanner"/> </div>
              </div>
              <div class="card_detail-ox">
                <h4>Professional look</h4>
                <p>Set your signature as default on any email you send</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="signature_form" class="contact_section">
      <div class="container d-flex">
        <h2>Introduce your details</h2>
      </div>
      <div class="container-fluid layout_padding-top">
        <div class="row">
          <div class="col-md-6">
            <div class="col-md-10 offset-md-2">
              <div class="contact_img-box"> <img src="images/skyscanner4.svg" alt="Skyscanner"/> </div>
            </div>
          </div>
          <div class="col-md-6 px-0">
            <div class="col-md-10 px-0">
              <div class="signature_form-container form_bg">
                <div>
                  <div> <input id="name" type="text" placeholder="Your full name" maxlength="40" value=""/> </div>
                  <div>
                    <select id="pronoun" name="Pronoun" value="">
                      <option value="Select" disabled selected>Pronoun</option>
                      <option value="(He/Him)">He/Him</option>
                      <option value="(She/Her)">She/Her</option>
                      <option value="(They/Them)">They/Them</option>
                      <option value=" ">Other</option>
                      <option value=" ">Prefer not to say</option>
                    </select>
                  </div>
                  <div> <input id="jobtitle" type="text" placeholder="Job title" maxlength="40" value=""/> </div>
                  <div>
                    <select id="city" name="City" value="">
                      <option value="Select" disabled selected>Select your city</option>
                      <option value="Barcelona">Barcelona</option>
                      <option value="Edinburgh">Edinburgh</option>
                      <option value="Glasgow">Glasgow</option>
                      <option value="London">London</option>
                      <option value="Miami">Miami</option>
                      <option value="Shenzhen">Shenzhen</option>
                      <option value="Singapore">Singapore</option>
                      <option value="Tokyo">Tokyo</option>
                    </select>
                  </div>
                  <div> <input id="phone" type="text" placeholder="Contact number (optional)" maxlength="20" value=""/> </div>
                  <div class="mt-3 d-flex justify-content-end">
                    <button id="createsignature" class="button">
                      Create!
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="signature_output" class="contact_section" style="display: none; opacity: 0;">
      <div class="container">
        <h2>Your new email signature is ready!</h2>
        <p class="subtitle">You can copy and paste it onto Outlook</p>
      </div>
      <div class="container-fluid layout_padding-top">
        <div class="row">
          <div id="signature">
            <div id="signaturecurtain"></div>
          </div>
          <div id="signatureraw" style="display: none;">

            <table width="100%" role="presentation" cellpadding="0" cellspacing="0" border="0" align="left" style="float: left; font-size: 0;"> <tr> <td align="left" valign="top" style="margin: 0; padding: 0;"> <p style="margin: 0 !important; padding: 0 !important; font-size: 14px; line-height: 16px; color: #05203C;"><b style="font-family: Arial, sans-serif; font-size: 14px; line-height: 16px; font-weight: bold; color: #05203C;">{fullName} {pronoun}</b><br/><span style="font-family: Arial, sans-serif; font-size: 14px; line-height: 16px; color: #05203C;">{jobTitle}</span>{phone}<br/><span style="font-family: Arial, sans-serif; font-size: 14px; line-height: 16px; color: #05203C;">Skyscanner | {cityCountry}<br/><br/><br/></span></p><p style="margin: 0 !important; padding: 0 !important; font-family: Arial, sans-serif; font-size: 12px; line-height: 14px; font-weight: bold; color: #161616;"><a href="https://www.skyscanner.net/news/solheim-cup" target="_blank" style="text-decoration: none;"><img width="200" height="62" src="https://cdn.braze.eu/appboy/communication/assets/image_assets/images/66a8e99c03d01b08a4853d81/original.png?1722345884" style="width: 200px; height: 62px;" alt="Skyscanner X Solheim Cup"></a><br/> <b style="font-family: Arial, sans-serif; font-size: 12px; line-height: 14px; font-weight: bold; color: #161616;">Global Partner of the 2024 Solheim Cup</b></p></td></tr></table><br/><br/><br/>

          </div>
        </div>
        <div class="row">
          <button id="copysignature" class="button">Copy</button>
          <p class="outlookguide">How to add your signature on <a href="https://support.microsoft.com/en-us/office/create-an-email-signature-in-outlook-3a139d75-256e-4f0f-8351-e0cc02810b9c?ui=en-us&rs=en-001&ad=us" target="_blank">Windows</a> or <a href="https://support.microsoft.com/en-gb/office/create-an-email-signature-in-outlook-for-mac-637c3b77-3d2a-4610-9cea-e3ad622aa54e" target="_blank">MacOS</a></p>
        </div>
      </div>
    </section>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script> 
    <script type="text/javascript" src="js/bootstrap.js"></script> 
    <script type="text/javascript" src="js/controller.js"></script> 
  </body>
</html>