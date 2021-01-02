<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    <title>Welcome to the user and agents page</title>
    <link rel="stylesheet" type="text/css" href= {{ asset('css/bootstrap.min.css') }}>
    <script type="text/javascript" src = {{ asset('jquery-3.4.1.min.js') }}></script>
    <script type="text/javascript" src = {{ asset('js/bootstrap.min.js') }}></script>
    <link rel="stylesheet" href= {{ asset('css/landing.css') }}>
    <link type="text/css" rel="stylesheet" href={{ asset('jqueryui/jquery-ui.css') }}>
    <link type="text/css" rel="stylesheet" href= {{ asset('jqueryui/jquery-ui.structure.css') }}>
    <link type="text/css" rel="stylesheet" href= {{ asset('jqueryui/jquery-ui.theme.css') }}>
</head>

    <body> 

        <!--header and navigation bar for web view-->
<header class="header1">
    <nav class="navbar navbar-default">
        <div class="navbar-heading">
            <a href="#" class="navbar-brand">ZEUS<span class="glyphicon glyphicon-triangle-right"></span></a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#">DOWNLOAD</a></li>
            <li><a href="#">LOG IN</a></li>
            <li><a href="#">SIGN UP</a></li>
        </ul>
    </nav>
</header>

<!--header and navigation bar for mobile view-->
<header class="header2">
    
        <img src={{ asset('images/top-wave-sm.svg') }}>
        <img src={{ asset('images/top-image-sm.svg') }}>

        <div class="container-fluid">
         <ul>
             <li><a href=""><span class="zeus">ZEUS</span></a>
                <span class="glyphicon glyphicon-triangle-right"></span></li>
             <li><span class="glyphicon glyphicon-menu-hamburger"></span></li>
         </ul>

         <h4>Online Store<br> Management<br> Made Easy!</h4>
         <p>Set and manage your store<br> online with ease</p>

         <button class="btn btn-lg">GET STARTED</button>
        </div>
   
</header>



<!--section for web view-->

     <section class="section1">
         <div class="row">
             <div class="col-md-4 class1">
                 <br><br><br><br><br><br><br><br><br>
                 <h3>Online Store Management Made Easy</h3>
                 <br>
                 <p>Set and manage your store online with ease</p>
                 <br><br>
                 <button class="btn btn-lg firstbtn" type="button">GET STARTED</button>
             </div>
             <div class="col-md-8">
                    <img src= {{ asset('images/top-wave.svg') }}>
                <img src={{ asset('images/top-image.svg') }}>
             </div>
         </div>

         <div class="container">
             <br><br> <br><br> <br><br> <br><br> <br><br>
                <span class="glyphicon glyphicon-triangle-right"></span>
             <h4> Control everything from your store</h4> <br>
        <P>Zeus is a comprehensive platform on the market combining good performance,<br>
        flexibility, and ease of use to give you a pleasurable performance</P>

        <div class="row">
            <div class="col-md-4">
                <br> <br>
                <img src={{ asset('images/ease-of-use.svg') }}>
                <h4>Ease of Use</h4>
                <p>Create and manage your store seamlessly</p>
            </div>

            <div class="col-md-4">
                <br> <br>
                <img src={{ asset('images/two-way.svg') }}>
                <h4>2-way interation</h4>
                <p>Give yourself competitive advantage in being able to interact with your customers 
                    from anywhere
                </p>
            </div>

            <div class="col-md-4">
                <br> <br>
                <img src= {{ asset('images/ready-made.svg') }}>
                <h4>Ready Made</h4>
                <p>Manage and track store activities with little or no technical knowledge
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <br> <br>
                <img src= {{ asset('images/update.svg') }}>
                <h4>Update</h4>
                <p>Get updates about your desired products from a variety of stores
                </p>
            </div>
            
            <div class="col-md-8">
                    <br> <br> <br>
           <form method="POST" action="#">
               <br>
               <h4>join the inner Circle</h4>
              <br><br><br>
               <p>stay updated with latest products, stores and discounts</p>
               <br><br><br>
               <input type="email" name="inputEmail" placeholder="Email Address"
               pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="all letter in email must be in lowercase" required>
               <button class="btn btn-lg" type="submit">SUBSCRIBE</button>
               <br><br><br>
           </form>
            </div>
        </div>

        <br><br> <br>
        <span class="glyphicon glyphicon-triangle-right"></span>
       <h4> Create your store</h4>
       <P>Get the best out of your business with Zeus</P>
         </div>
     
        
  <!--card add section-->
  <div class="container-fluid">
        <br>
        <img src={{ asset('images/wavy.svg') }} class="wave">


        <div class="row">
            <br>
          <div class="col-md-3">
            <br><br>
              <img src= {{ asset('images/house-free.svg') }}> <br>
             <p><sup style="margin-bottom: 10%;"><span class="glyphicon glyphicon-pushpin"></span></sup>
                <span class="rate">00.00</span>/mo
            </p>
               <p>FREE</p>
           <br><br> <br><br>
            <P><span class="glyphicon glyphicon-ok"></span>Monthly Notification on Updates</P>
            <P><span class="glyphicon glyphicon-ok"></span>Social Media Publicity</P>
            <P><span class="glyphicon glyphicon-ok"></span>Email Support</P>
            <br><br> <br><br>
            <button type="button" class="btn btn-lg get-started">GET STARTED</button>
          </div>

          <div class="col-md-3">
                <br><br>
                <img src={{ asset('images/house-premium.svg') }}>
                <p><sup style="margin-bottom: 10%;"><span class="glyphicon glyphicon-pushpin"></span></sup>
                    <span class="rate">39.99</span>/mo
                </p>
                   <p>PREMIUM</p>
               <br> 
                <h5>FREE FEATURES</h5>
                <span class="glyphicon glyphicon-pushpin pin2"></span>
                <P><span class="glyphicon glyphicon-ok"></span>Project Participation</P>
                <P><span class="glyphicon glyphicon-ok"></span>Website/Logo design</P>
                <P><span class="glyphicon glyphicon-ok"></span>Full Branding</P>
                <br><br> <br><br>
                <button type="button" class="btn btn-lg">GET STARTED</button>
        </div>
        </div>


           <br><br> <br><br> <br><br>
<div class="container">
    <div class="row">
            <div class="col-md-7">
                    <span class="glyphicon glyphicon-triangle-right"></span><br>
                    <h4> Take your business<br> everywhere with you</h4>
            <P>Manage order, communicate with customers, upload products to your<br>
            online store directly from your mobile app</P>
            <br><br><br><br>
            <h5>Download App now</h5>
            <button class="btn btn-lg" type="button"><img src= {{ asset('images/playstore.svg') }}>Google Play</button>
             <button class="btn btn-lg" type="button"> <img src={{ asset('images/apple.svg') }}>App Store</button>
            </div>

            <div class="col-md-5">
            <img src= {{ asset('images/phone.svg') }}>
            </div>
                    </div>
        </div>
    </div>
       
<!--office section-->
     <div class="container-fluid" style="margin-top: -20%; background-color: white;">
            <div class="container">
                    <br><br><br>
                        <div class="row">
                            <div class="col-md-6">
                                   <span class="glyphicon glyphicon-triangle-right"></span><br>
                                   <h4> Get started for free</h4><br><br><br>
                           <P>No credit Card required</P> 
                           <button type="button" class="btn btn-lg">GET STARTED</button>
                            </div>
                   
                            <div class="col-md-6">
                           <img src= {{ asset('images/water-like.svg') }}>
                           <img src= {{ asset('images/office.svg') }}>
                            </div>
                        </div>
                           </div>
        
     </div>
        
        
     </section>

     <!--section for mobile view-->
     <section class="section2">
         <div class="container-fluid">
             <span class="glyphicon glyphicon-triangle-right"></span>
             <h4>Control everything from your store</h4>
             <p>
                 Zeus is a comprehensive platform on the market combining<br>
             good performance, flexibility, and ease of use, to give you<br>
             a pleasurable experience
            </p>
     
            <!--benefits of shopping with us-->
            <div class="row" style="margin-top: 12%; margin-bottom: 12%;">
                <div class="col-md-6">
                    <img src= {{ asset('images/ease-of-use-sm.svg') }}> <br>
                    <h5>Ease of Use</h5>
                    <P style="margin-right: -12%;">Create and manage<br> your store seamlessly</P>
                </div>
                <div class="col-md-6">
                    <img src= {{ asset('images/two-way-sm.svg') }}><br>
                    <h5>2-way Interaction</h5>
                    <p>Give yourself a<br>competitive advantage by<br>
                    being able to interact with<br>customers from anywhere
                    </p>
                </div>
            </div>

            <div class="row">
                    <div class="col-md-6">
                        <img src={{ asset('images/ready-made-sm.svg') }}>
                        <h5>Ready Made</h5>
                        <p>Ready and track store<br>activities with little<br>
                        or no technical knowledge
                        </p>
                    </div>
                    <div class="col-md-6">
                      <img src={{ asset('images/update-sm.svg') }}>
                      <h5>Update</h5>
                      <P>Get updates about your<br>desired products<br>
                    from a variety of stores
                    </P>
                    </div>
                </div>
                <br><br><br>
             <!--form in the mobile section-->
                <form method="POST" action="#" class="mobileForm">
                        <br><br><br>
                        <h4>join the inner Circle</h4>
                       <br><br>
                        <p>stay updated with latest products, stores and discounts</p>
                        <br><br>
                        <input type="email" name="inputEmail" placeholder="Email Address"
                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="all letter in email must be in lowercase" required>
                        <button class="btn btn-lg" type="submit">SUBSCRIBE</button>
                        <br><br><br>
                    </form>

                    <div class="preCard">
                            <span class="glyphicon glyphicon-triangle-right"></span>
                            <h4> Create your store</h4>
                            <P>Get the best out of your business with Zeus</P>
                    </div>

                    <img src= {{ asset('images/wavy-sm.svg') }} class="wavy">
                    <div class="mainCards">
                        <div class="row">
                        <div class="col-md-10" style="padding-bottom: 20%;">
                                <br><br><br>
                                <img src={{ asset('images/house-free.svg') }}> <br>
                               <p><sup style="margin-bottom: 10%;"><span class="glyphicon glyphicon-pushpin"></span></sup>
                                  <span class="rate">00.00</span>/mo
                              </p>
                                 <p>FREE</p>
                             <br><br> <br><br>
                              <P><span class="glyphicon glyphicon-ok"></span>Monthly Notification on Updates</P>
                              <P><span class="glyphicon glyphicon-ok"></span>Social Media Publicity</P>
                              <P><span class="glyphicon glyphicon-ok"></span>Email Support</P>
                              <br><br> <br><br>
                              <button type="button" class="btn btn-lg">GET STARTED</button>
                              <br><br><br><br><br><br><br><br><br>
                            </div>
                        
                            
                        <br>
                   
                        <div class="col-md-10">
                            <br><br><br>
                            <img src= {{ asset('images/house-premium.svg') }}>
                            <p><sup style="margin-bottom: 10%;"><span class="glyphicon glyphicon-pushpin"></span></sup>
                                <span class="rate">39.99</span>/mo
                            </p>
                               <p>PREMIUM</p>
                           <br> 
                            <h5>FREE FEATURES</h5>
                            <span class="glyphicon pin2">+</span>
                            <P><span class="glyphicon glyphicon-ok"></span>Project Participation</P>
                            <P><span class="glyphicon glyphicon-ok"></span>Website/Logo design</P>
                            <P><span class="glyphicon glyphicon-ok"></span>Full Branding</P>
                            <br><br> <br><br>
                            <button type="button" class="btn btn-lg">GET STARTED</button>
                            <br><br><br><br><br><br><br><br><br>
                    </div>
                    </div>
                    
            <span class="glyphicon glyphicon-triangle-right"></span><br>
            <h4 class="H4" style="text-align: center;"> Take your business everywhere with you</h4>
            <P class="ad">Manage order, communicate with customers,<br> upload products to your
            online store directly from your mobile app</P>
            <br><br><br><br>
            <h5 class="ad2">Download App now</h5>
            <button class="btn btn-lg" type="button"><img src="images/playstore.svg">Google Play</button>
            <button class="btn btn-lg" type="button"> <img src="images/apple.svg">App Store</button>
            <img src={{ asset('images/phone.svg') }} class="phone">
                </div>
         </div>
        <!--end of container-fluid-->

        <div class="lastRow" style="margin-top: -15%;">
           
                <span class="glyphicon glyphicon-triangle-right last-triangle"></span><br>
                <h4 class="ad3"> Get started for free</h4><br><br><br>
                <P>No credit Card required</P> 
                <img src= {{ asset('images/water-like-sm.svg') }}>
                <img src={{ asset('images/office-sm.svg') }}>
                <p><button type="button" class="btn btn-lg">GET STARTED</button></p>
           
        </div>
     </section>





   <!--footer for web view-->
     <footer class="footer1">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <br>
                    <ul>
                        <li>ZEUS<span class="glyphicon glyphicon-triangle-right"></span></li>
                        <li>+234-810-000-0000</li>
                        <li>info@zeus.com</li>
                    </ul>
                </div>
                <div class="col-md-4" style="margin-top: 1%;">
                        <br><br>
                    <ul>
                        <li><a href="">Privacy Policy</a></li>
                        <li><a href="">Terms of Service</a> </li>
                        <li><a href=""> About Us</a></li>
                    </ul>
                </div>
                <div class="col-md-4" style="margin-top: 1%;">
                        <br><br>
                    <ul>
                        <li><a href="">LOG IN</a> <a href="">SIGN UP</a></li>
                        <br>
                        <li><a href=""><img src= {{ asset('images/facebook.svg') }}></a> <a href=""><span class="glyphicon glyphicon-camera"></span></a>
                        <a href=""><img src={{ asset('images/instagram.svg') }}></a> <a href=""><img src="images/twitter.svg"></a></li>
                       
                    </ul>
                </div>
            </div>
            <p><span class="glyphicon glyphicon-copyright-mark"></span> <span class="year">2016</span> Zeus Ltd. All rights Reserved</p>
        </div>  
     </footer>

     <!--mobile footer-->
     <footer class="footer2">

    <p><span>ZEUS</span><span class="glyphicon glyphicon-triangle-right"></span></p>
    <p>+234-810-000-0000</p>
    <p>info@zeus.com</p>

    <p><a href="">Privacy Policy</a></p>
    <p><a href="">Terms of Service</a> </p>
    <p><a href=""> About Us</a></p>

    <p><a href="">LOG IN</a> <a href="">SIGN UP</a></p>
    <p><a href="www.facebook.com"><img src= {{ asset('images/facebook.svg') }}></a> <a href=""><span class="glyphicon glyphicon-camera"></span></a>
    <a href=""><img src={{ asset('images/instagram.svg') }}></a> <a href=""><img src={{ asset('images/twitter.svg') }}></a>
    </p>
   
    <p><span class="glyphicon glyphicon-copyright-mark"></span> <span class="year">2016</span> Zeus Ltd. All rights Reserved</p>
     </footer>
        <script src= "jquery-3.4.1.min.js"></script>
        <script src= "jqueryui/jquery-ui.js"></script>
       
        <script>
           
                 
    $(window).on('load', function(){
    var year = new Date().getFullYear();
    $('.year').html(year);
    });

  
</script>
    </body>
</html>

    