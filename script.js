document.getElementById("nav-menu").innerHTML =  '<div class="navbar-header">' +
              '<a href="index.html" class="navbar-brand text-center"><img class="img-responsive logo" id="brightline-logo-large-screen" src="img/brightline.png"><img id="brightline-logo-small-screen" class="img-responsive logo" src="img/bulb.png" style="display:none;"></a>' +
'<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">' +
      '<span class="sr-only">Toggle navigation</span>' +
      '<span class="icon-bar"></span>' +
      '<span class="icon-bar"></span>' +
      '<span class="icon-bar"></span>' +
      '</button>' +
      '</div>' +

      '<div id="navbarCollapse" class="collapse navbar-collapse">' +
      '<ul class="nav navbar-nav">' +
      '<li class="dropdown">' + '<a data-toggle="dropdown" class="dropdown-toggle" href="#">About Us</a>' +
      '<ul role="menu" class="dropdown-menu">' +
      '<li><a href="our-mission.html">Our Mission</a></li>' +
      '<li><a href="our-goals.html">Our Goals</a></li>' +
      '<li><a href="how-it-works.html">How It Works</a></li>' + '</li>' +
      '<li><a href="stem-education.html">Importance of STEM Education</a></li>' + '</ul>' + '</li>' +
      '<li><a href="our-team.html">Our Team</a></li>' +
      '<li class="dropdown">' + '<a data-toggle="dropdown" class="dropdown-toggle" href="#">Get Involved</a>' + '<ul role="menu" class="dropdown-menu">' +
      '<li><a href="volunteer-survey.html">Volunteer Survey</a></li>' +
      '<li><a href="sponsor.html">Sponsor A Child</a></li>' +
      '<li><a href="donate.html">Donate</a></li>' + '</ul>' + '</li>' +
      '<li><a href="contact-us.html">Contact Us</a></li>' +
      '</ul>' +
      '</div>'


document.getElementById('footer-section').innerHTML = '<div class="container">' +
  '<div class="row">' +
  '<div class="col-sm-5">' +
  '<ul class="social-media">' +
    '<li><a href="#"><i class="fa fa-facebook fa-3x"></i></a></li>' +
    '<li><a href="#"><i class="fa fa-twitter fa-3x"></i></a></li>' +
    '<li><a href="#"><i class="fa fa-instagram fa-3x"></i></a></li>' +
  '</ul>' +
   '</div>'
+
  '<div class="col-sm-4 terms">' +
  '<ul class="footer-links-list">' +
    '<li><a href="#" class="footer-link">Terms of Service</a></li>'+
    '<span>  |  </span>' +
    '<li><a href="#" class="footer-link">Privacy Policy</a></li>' +
  '</ul>' +
  '</div>' +


  '<div class="col-sm-3 terms">' +
  '<span id="footer"> &copy; 2016 Brightline Education Inc.</span>'+
  '</div>' +
  '</div>' +
  '</div>'

 var mainPageQuote = $("#main-page-quote");
/*  if($(window).width() < 600) {
    mainPageQuote.hide();
  }
*/
 /* var mq = window.matchMedia("(max-width:600px)");
  if(mq.matches){
    mainPageQuote.hide();
  }

  else{
    mainPageQuote.show();
  }*/




