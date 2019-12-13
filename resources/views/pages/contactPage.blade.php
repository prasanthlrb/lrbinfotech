@extends('pages.app')
@section('extra-css')
<!-- Google fonts  -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Yesteryear" rel="stylesheet"> 

<link rel="stylesheet" type="text/css" href="fonts/Simple-Line-Icons-Webfont/simple-line-icons.css" media="screen" />
<link rel="stylesheet" href="fonts/et-line-font/et-line-font.css">
<link rel="stylesheet" type="text/css" href="js/smart-forms/smart-forms.css">
<style>
.bottom-padding-br{
    padding: 10px;
}
.smart-forms .field {
    margin-bottom: 22px;
}
</style>
@endsection
@section('pages')
<div class="clearfix"></div>
 <div class="header-inner-tmargin">
        <section class="section-side-image clearfix">
      <div class="img-holder col-md-12 col-sm-12 col-xs-12">
        <div class="background-imgholder" style="background:url(images/header-inner-1.jpg);"><img class="nodisplay-image" src="images/header-inner-1.jpg" alt=""> </div>
      </div>
      
<div class="container-fluid">
        <div class="row">       
        <div class="col-md-12 col-sm-12 col-xs-12 clearfix nopadding">
        <div class="header-inner">        
       <div class="overlay">       
       <div class="text text-center">
    <h3 class="uppercase text-white less-mar-1 title">Contact US</h3>
    <h6 class="uppercase text-white sub-title">Get In Touch With Us</h6>
    </div>
       </div>       
        </div></div>        
        </div>
      </div>
    </section>
    <div class=" clearfix"></div>
    <!--end section-->
    </div>
    <section>
    <div class="pagenation-holder">
      <div class="container">
        <div class="row">
       <div class="col-md-6"> <h4> </h4></div>
        <div class="col-md-6">
        <ol class="breadcrumb">
    <li><a href="index.html">Home</a></li>
    <li class="current"><a href="#">Contact</a></li>
</ol>  
</div>
          
        </div>
      </div>
    </div>
  </section>
   <div class="clearfix"></div>
   <section class="sec-padding section-light">
  <div class="container">
  <div class="row">
  
<div class="col-md-8">

<h3 class="uppercase">Contact Form</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit consectetuer adipiscing elit. Suspendisse et justo. augue.</p>
            <br>
            <br>
            
            <div class="text-box white padding-4 margin-bottom">
            <div class="smartforms-modal-body">
                    <div class="smart-wrap">
                        <div class="smart-forms smart-container transparent wrap-full">
                            <div class="form-body no-padd">
                                <form method="post" action="php/smartprocess.php" id="smart-form" novalidate="novalidate">
                    
           
                            <label class="field prepend-icon">
                                <input type="text" name="sendername" id="sendername" class="gui-input" placeholder="Enter name">
                                <span class="field-icon"><i class="fa fa-user"></i></span>  
                            </label>
                      
                     
                            <label class="field prepend-icon">
                                <input type="email" name="emailaddress" id="emailaddress" class="gui-input" placeholder="Email address">
                                <span class="field-icon"><i class="fa fa-envelope"></i></span>
                            </label>
                       
               
          
        <label class="field prepend-icon">
            <input type="text" name="telephone" id="telephone" class="gui-input" placeholder="Enter Telephone...">
            <span class="field-icon"><i class="fa fa-phone-square"></i></span>  
        </label>

                            

                       
                            <label class="field prepend-icon">
                                <input type="text" name="sendersubject" id="sendersubject" class="gui-input" placeholder="Enter subjec">
                                <span class="field-icon"><i class="fa fa-lightbulb-o"></i></span>
                            </label>
                       
                            <label class="field prepend-icon">
                                <textarea class="gui-textarea" id="sendermessage" name="sendermessage" placeholder="Enter message"></textarea>
                                <span class="field-icon"><i class="fa fa-comments"></i></span>
                                <span class="input-hint"> <strong>Hint:</strong> Please enter between 80 - 300 characters.</span>   
                            </label>
                      
                     
                            <div class="smart-widget sm-left sml-120">
                                <label class="field">
                                    <input type="text" name="captcha" id="captcha" class="gui-input sfcode" maxlength="6" placeholder="Enter CAPTCHA">
                                </label>
                                <label class="button captcode">
                                    <img src="php/captcha/captcha.php?1575534485" id="captchax" alt="captcha">
                                    <span class="refresh-captcha"><i class="fa fa-refresh"></i></span>
                                </label>
                            </div><!-- end .smart-widget section --> 
                      
                       <div class="result"></div><!-- end .result  section --> 
                                                                                                                    
                    <!-- end .form-body section -->
                    <div class="form-footer text-left">
                        <button type="submit" data-btntext-sending="Sending..." class="button btn-primary">Submit</button>
                        <button type="reset" class="button"> Cancel </button>
                    </div><!-- end .form-footer section -->
                </form>                                                                                   
                            </div><!-- end .form-body section -->
                        </div><!-- end .smart-forms section -->
                    </div><!-- end .smart-wrap section -->            
                </div></div><!-- end .smart-wrap section -->
            <!-- end .smart-forms section --> 
          </div>
          <!--end item-->
          
          <div class="col-md-4 text-left">
            <h4>Address Info</h4>
            <h6>LRB Info Tech</h6>
            <p> 2/1/30, 1st Street, Koodal Nagar, Madurai, Tamil Nadu 625018
                Tel: +91 0452-498-4939
                Mobile : 7010384622
            </p>
            <br>
            <p>E-mail: Info@lrbtech.com</p>
            <p>Website: www.yoursitenam.com</p>
          </div>
          <!--end item--> 
  


  </div>
  </div>
  </section>
  <div class="clearfix"></div>
  
 <section class="section-light" style="padding-top:20px">  
     <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15718.789624647468!2d78.1010354!3d9.9591144!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3a84acae8d031632!2sLRB%20INFO%20TECH%20(%20Web%20Design%20%7C%20Web%20Development%20%7C%20Digital%20Marketing%20%7C%20SEO%20%7C%20Company%20in%20Madurai%20)!5e0!3m2!1sen!2sin!4v1575537884844!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</section>
   <div class="clearfix"></div>


   @endsection