
<!DOCTYPE html>
<html>
<head>
	<title>KMCH College of Pharmacy</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Abhaya+Libre:400,700&display=swap" rel="stylesheet">

	<!-- Owl Stylesheets -->
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.theme.default.min.css">
    
    <link rel="icon" href="images/favicon.png" type="image/png" sizes="16x16">


	<link rel="stylesheet" href="css/style.css?v1.1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<!-- Owl carousel -->
	<script src="assets/owlcarousel/owl.carousel.js"></script>

	<script src="https://kit.fontawesome.com/1ccf0680cc.js" crossorigin="anonymous"></script>
	
	<!-- Start of HubSpot Embed Code -->
 <!-- <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/20219255.js"></script> -->
<!-- End of HubSpot Embed Code -->


<!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '118224576967545');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=118224576967545&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->
<style>
	#main_menu1 .mm_top.reg_open a{
		font-weight: bold;color:#fff; font-size: 19px; text-align: center; line-height: 24px;
	}
	#main_menu1 .mm_top.reg_open span{
		font-family: OpenSans; font-size: 15px; letter-spacing: 0.3px;
	}
        #main_menu1 .mm_top a{
            font-size: 16px;
        }
        .floating_icon {
    padding: 6px 34px;
    position: fixed;
    z-index: 9991;
    right: 0;
    top: 25%;
    background: #62bb47;
    color: #fff;
    -webkit-transform: rotate(
-90deg
);
    transform: rotate(
-90deg
);
    border-top-right-radius: 6px;
    border-top-left-radius: 24px;
    box-shadow: 0px 0px 2px #fff;
    transform-origin: right bottom;
}
.floating_icon a {
    padding: 8px;
    letter-spacing: 1.2px;
    font-size: 18px;
    color: #fff !important;
    font-weight: bold;
}
.online_ad_menu{
	background: #62bb47 !important; border: 0 !important;
}
.blinking{
    animation: blinkingText 1.2s infinite;
}
@keyframes blinkingText{
    0%{     color: #fff;    }
    49%{    color: #fff; }
    60%{    color: transparent; }
    99%{    color:transparent;  }
    100%{   color: #fff;    }
}
.npfWidget-a347f84b7fa3ecd0635a90e3f5a6fec7.npfWidgetButton {
background: #62bb47 !important;  position: fixed !important; cursor: pointer; z-index: 9; font-size: 18px; top:0; right:0; border: 0; color: white; padding: 3px 10px 10px 10px; 
    -webkit-transform: rotate(-90deg) translate(-180%, 180%);
    -moz-transform: rotate(-90deg) translate(-180%, 180%);
    -ms-transform: rotate(-90deg) translate(-180%, 180%);
    -o-transform: rotate(-90deg) translate(-180%, 180%);
    transform: rotate(-90deg) translate(-180%, 180%);
    }

#a347f84b7fa3ecd0635a90e3f5a6fec7, #popup-a347f84b7fa3ecd0635a90e3f5a6fec7 {
z-index: 999 !important;
    }
	.whatsapp{
	position: fixed;
    z-index: 999;
    right: 0;
    bottom: 0;
}
    </style>
<!--<div class="floating_icon d-block d-sm-block d-md-none">
		<a href="https://pharmapply.kmch.ac.in" class="apply_online blinking">Online Admission</a>	
	</div> -->
	
<!--<div class="whatsapp">
<a href="https://api.whatsapp.com/send?phone=918925833315&text=Hi! I am looking for 2023 Admissions." target="_blank">
<img src="images/WhatsApp.png" width="60" /></a>
</div> -->

</head>

<body class="innerPage">
<script type="text/javascript"> var npf_d='https://admissions.kmch.ac.in'; var npf_c='5143'; var
npf_m='1'; var s=document.createElement("script"); s.type="text/javascript"; s.async=true;
s.src="https://track.nopaperforms.com/js/track.js"; document.body.appendChild(s); </script>
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v6.0"></script>

	
	<?php include('includes/header.php');?>

 <script type="text/javascript">

	var captchaBool = 0;

	function regFormValidate(){

		var returnVal=true;



		var enquiryFormName = document.enquiryForm;

		$('div[id^="alert_"]').html('');
		
		
		
		if (enquiryFormName.c_name.value == "") {

			showLabelAlert('Please Enter Your Name.', 'first_name');

			returnVal= false;

		}


		if (enquiryFormName.c_email.value == "") {

			showLabelAlert('Please Enter Your Email.', 'email');

			returnVal= false;

		}

		else if (enquiryFormName.c_email.value.indexOf("@", 0) < 0){

			showLabelAlert('Please Enter Valid Email Address.', 'email');

			returnVal= false;

		}

		else if (enquiryFormName.c_email.value.indexOf(".", 0) < 0){

			showLabelAlert('Please Enter Valid Email Address.', 'email');

			returnVal= false;

		}

		if (enquiryFormName.c_mobile.value == "") {

			showLabelAlert('Please Enter Your Contact number', 'phone');

			returnVal= false;

		}

		if (enquiryFormName.c_subject.value == "") {

			showLabelAlert('Please Enter Your Subject', 'subject');

			returnVal= false;

		}

		if (enquiryFormName.c_message.value == "") {

			showLabelAlert('Please Enter Your Message', 'message');

			returnVal= false;

		}
		
        if(returnVal==true){
		jQuery.ajax({

			 type: "GET",

			 url: "ajax.php",

			 async: false,

			 data: {

			    "first_name" : enquiryFormName.c_name.value,
                "email" : enquiryFormName.c_email.value,
                "mobile" : enquiryFormName.c_mobile.value,
                "subject" : enquiryFormName.c_subject.value,
                "message" : enquiryFormName.c_message.value,
                "type":'enquiry'

			 },

			 success: function (responseData){
console.log(responseData);
				  if(responseData==1){

						$('#success_msg').addClass('successMsg');

						$('input[type="text"], textarea').val('');

						document.getElementById('success_msg').innerHTML = 'Form Submitted Successfully!. Thank You for contacting Us, We will ge back to you shortly!';

				  }else{

						$('#success_msg').addClass('ErrMsg');

						document.getElementById('success_msg').innerHTML = 'Form not Submitted! Try Again Later';

				  }

			 }

		  });
        }

	}
	
	function showLabelAlert(alertVal, id) {
	$("#alert_" + id).html(alertVal);
}

</script>	

<section>
	<div class="page_banner">
		<img src="images/page_banner/contact.jpg" alt="KMCH" class="dt_img">
    <img src="images/page_banner/contact_mob.jpg" alt="KMCH" class="mob_img">
     <div class="content1 right">
			<h1>We're Here to Help !</h1>
		</div>
	</div>
</section>

<section class="section_padd">
  <div class="container">
      <h2>Contact Us</h2>
    <div class="content_area">
      <div class="row">
        <div class="col-md-6">
        <h4 class="mt-0">Addresss</h4>
              <div class="bg_color1">
                <div><strong>KMCH College of Pharmacy,</strong></div>
               S.F.No: 940/1A & 1B, <br> 
               Kovai Estate, Kalapatti Road,<br>
                  Coimbatore – 641 048. Tamil Nadu.,<br>
          Phone: <a href="tel:+914222369302">+91 422 2369302</a> <br/>
          Email: <a href="mailto:pharmacy@kmch.ac.in">pharmacy@kmch.ac.in</a>
          </p>
              </div>  
              <hr/>
                <h4 class="mt-0">For Admission </h4>
                <div class="bg_color1 mb-3">
                  <div><strong>Admission Officer, </strong></div>
                  Dr NGP Research and Educational Trust, <br> 
				 (Formerly Kovai Medical Center Research and Educational Trust)<br> 
                  Kovai Estate, Kalapatti Road,<br>
                  Coimbatore – 641 048. Tamil Nadu.,<br>
                  Mobile: +91 89258 333 15<br>
                  Phone: 422 2369300, 2369321,<br>
                    Email: <a href="mailto:admission@kmch.ac.in">admission@kmch.ac.in</a>

          </div>
        </div>
        <div class="col-md-6">
         <h4 class="mt-0"> Send us message </h4>
           <div class="bg-contact  section_bg1">
             
               <div id="success_msg"></div>
          <form class="form_style1" name="enquiryForm" id="enquiryForm" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="c_name">Name</label>
                        <input type="text" class="form-control" id="c_name" name="c_name" placeholder="Enter name" required>
                        <div id="alert_first_name" class="errorMsg"></div>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                        <label for="c_email">Email address</label>
                        <input type="email" class="form-control" id="c_email" name="c_email" placeholder="Enter email" required>
                        <div id="alert_email" class="errorMsg"></div>
                      </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="c_mobile">Mobile No</label>
                        <input type="text" class="form-control" name="c_mobile" id="c_mobile" placeholder="Enter mobile" required>
                        <div id="alert_phone" class="errorMsg"></div>
                      </div>
                      </div>
                      <div class="col-md-6">
                      <div class="form-group">
                        <label for="c_subject">Subject</label>
                        <input type="text" class="form-control" name="c_subject" id="c_subject" placeholder="Enter Subject" required>
                        <div id="alert_subject" class="errorMsg"></div>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                          <div class="form-group">
                          <label for="c_message">Message</label>
                          <textarea class="form-control" rows="5" id="c_message" name="c_message" placeholder="Write Message" required></textarea>
                          <div id="alert_message" class="errorMsg"></div>
                        </div>
                        <div class="text-right">
                        <input type="button" name="btnSubmit" class="btn_style" value="Submit" onclick="return regFormValidate();">
                        </div>
                    </div>
                </div>
                </form>
                
                
                 <!-- <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
<script>
  hbspt.forms.create({
	region: "na1",
	portalId: "20219255",
	formId: "8ba079c5-0059-4236-8033-b2d6f3c834d3"
});
</script> -->

                </div>
        </div>
      </div>
      
    </div>
  </div>  
</section>

<?php include("includes/footer.php");?>		
<style>
#admission_2024 {
    position: fixed;
    background: #ffffff;
    top: 35%;
    right: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    line-height: 10px;
    padding: 10px 35px;
}
#admission_2024 p{
    background: #62bb47;
    padding: 15px 25px;
    font-size: 23px;
    margin-bottom: 10px;
    color: #fff;
}
#admission_2024 p a{
	color: #fff;
}
#admission_2024 span a{
	color: #62bb47;
    font-weight: bolder;
    font-size: 16px;
}
#admission_2024 span{
    font-size: 14px;
}
</style>
	  <script 
      type="text/javascript"
      src="https://d2jyl60qlhb39o.cloudfront.net/integration-plugin.js"
      id="wa-widget"
      widget-id="MEwtb8"
    >
    </script>
	<script src="js/custom.js"></script>
	<!--<button type="button" class="npfWidgetButton npfWidget-a347f84b7fa3ecd0635a90e3f5a6fec7 blinking">Admission Enquiry!</button><script src="https://in5cdn.npfs.co/js/widget/npfwpopup.js"></script><script>let npfWa347f84b7fa3ecd0635a90e3f5a6fec7 = new NpfWidgetsInit({'widgetId': 'a347f84b7fa3ecd0635a90e3f5a6fec7','baseurl': 'widgets.in5.nopaperforms.com','formTitle': 'Admission Enquiry','titleColor': '#FF0033','backgroundColor': '#ddd','iframeHeight': '500px','buttonbgColor': '#ff0000','buttonTextColor': '#FFF',    });</script>-->
	
	<!--<button id="btn-admission" type="button" class="btn btn-danger blinking">Admission Enquiry!</button>
	<style>
	#btn-admission{
	background: #62bb47 !important;
    position: fixed !important;
    cursor: pointer;
    z-index: 9;
	font-size: 18px;
    top: 0;
    right: 0;
    border: 0;
    color: white;
    padding: 3px 10px 10px 10px;
    -webkit-transform: rotate(-90deg) translate(-180%, 180%);
    -moz-transform: rotate(-90deg) translate(-180%, 180%);
    -ms-transform: rotate(-90deg) translate(-180%, 180%);
    -o-transform: rotate(-90deg) translate(-180%, 180%);
    transform: rotate(-90deg) translate(-180%, 180%);
	}
	</style>
	-->
</body>
</html>