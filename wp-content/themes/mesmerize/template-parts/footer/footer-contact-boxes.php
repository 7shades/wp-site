<!-- <div <?php echo mesmerize_footer_container('footer-contact-boxes') ?>>
    <div <?php echo mesmerize_footer_background('footer-content') ?>>
        <div class="gridContainer">
            <div class="row text-center">
                <div class="col-sm-3">
                    <?php echo mesmerize_print_contact_boxes(0); ?>
                </div>
                <div class="col-sm-3">
                    <?php echo mesmerize_print_contact_boxes(1); ?>
                </div>
                <div class="col-sm-3">
                    <?php echo mesmerize_print_contact_boxes(2); ?>
                </div>
                <div class="col-sm-3 footer-bg-accent">
                    <div>
                        <?php mesmerize_print_area_social_icons('footer', 'content', 'footer-social-icons', 5);?>
                    </div>
                    <?php echo mesmerize_get_footer_copyright(); ?>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/5b810db006.js" crossorigin="anonymous"></script>
  <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">

</head>
<body>
  <div class="gridContainer">
    <!-- Contact Section Start -->
  
    <section id="contact" class="section">      
      <div class="contact-form">
        <div class="container">
          <div class="section-header">          
            <h2 class="section-title">Get In Touch</h2>
            <!-- <span>Contact</span> -->
            <p class="section-subtitle">Drop us a line to let us know how we can help you with a business challenge or <br/>start a conversation to get to know each other better.</p>
          </div>
          <div class="row">          
            <div class="col-lg-8 col-md-8 col-xs-12">
              <div class="contact-block">
                <form id="contactForm">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Contact Name" required data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                      </div>                                 
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" placeholder="Email Address" id="email" class="form-control" name="email" required data-error="Please enter your email">
                        <div class="help-block with-errors"></div>
                      </div> 
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" placeholder="Phone Number (Optional)" id="number" class="form-control" name="number">
                      </div> 
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" placeholder="Subject" id="msg_subject" class="form-control" required data-error="Please enter your subject">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group"> 
                        <textarea class="form-control" id="message" placeholder="Enter your message here..." rows="7" data-error="Write your message" required></textarea>
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="submit-button">
                        <button class="btn btn-primary" id="submit" type="submit">Send Message</button>
                        <div id="msgSubmit" class="h3 hidden"></div> 
                        <div class="clearfix"></div> 
                      </div>
                    </div>
                  </div>            
                </form>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12">
              <div class="contact-deatils">
                <!-- Content Info -->
                <div class="contact-info_area">
                  <div class="contact-info">
                    
                    <h5><i class='lni lni-pin'></i>Location</h5>
                    <p>#39-21-10, Opp S.M.S.K Mandapam, Shankar Nagar, Madhavadhara, Vizag, A.P., India - 530 007.</p>
                  </div>
                  <!-- Content Info -->
                  <div class="contact-info">
                    
                    <h5><i class='lni lni-envelope'></i>E-mail</h5>
                    <p><a href="mailto:contact@7Shades.com">contact@7shades.com</a></p>
                  </div>
                  <!-- Content Info -->
                  <div class="contact-info">
                    <h5><i class='lni lni-phone-set'></i>Phone</h5>
                    <p><a href="tel:+918106628671">(+91) 8106628671</a></p>
                  </div> 
                  <!-- Social -->
                  <div class="contact-info">
                    <h5><i class='lni lni-pointer-right'></i>FOLLOW US</h5>
                    <ul class="footer-social no-margin"> 
                      <li><a class="linkedin" title="linkedin" href="https://www.linkedin.com/company/7shadesmedia" target="_blank"><i class='lni lni-linkedin-original'></i></a></li> 
                      <li><a class="facebook" title="facebook" href="https://www.facebook.com/7shadestech" target="_blank"><i class='lni lni-facebook-filled'></i></a></li>
                      <li><a class="instagram" title="instagram" href="https://www.instagram.com/7shadestech" target="_blank"><i class='lni lni-instagram-filled'></i></a></li>
                      <li><a class="twitter" title="twitter" href="https://twitter.com/7shadestech" target="_blank"><i class='lni lni-twitter-filled'></i></a></li>
                      <li><a class="medium" title="medium" href="https://medium.com/7shades" target="_blank"><i class='lni lni-medium'></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>            
    </section>
    <!-- Contact Section End -->
    </div>
    <!-- Map Section Start -->
   <section id="google-map-area">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 padding-0">
            <object style="border:0; height: 450px; width: 100%;" data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60796.4441794698!2d83.28923806018702!3d17.755107703675705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3b4e4c1342369cb3!2sIamDeziner!5e0!3m2!1sen!2sin!4v1545225645309"></object>
          </div>
        </div>
      </div>
    </section>
    <!-- Map Section End -->
<div class="gridContainer">
    <!-- Footer Section Start -->
    <footer>
      <!-- Footer Area Start -->
      <section class="footer-Content">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">7SHADES</h3>
                <div class="textwidget">
                  <p><a href="mailto:contact@7Shades.com">contact@7Shades.com</a></p>
                  <p><a href="tel:+918106628671">(+91) 8106628671</a></p>
                  <p>If you think you have the passion, attitude and capability to join us the next big digital media company so that we can get the convers.</p>
                  <p>Interested in a job? Check out our <a href="careers.html">Careers</a> page and apply directly via one of our job postings.</p>
                </div>
              </div>
            </div> 
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">FOLLOW US.</h3>
                <ul class="footer-social">
                    <ul class="footer-social no-margin"> 
                      <li><a class="linkedin" title="linkedin" href="https://www.linkedin.com/company/7shadesmedia" target="_blank"><i class='lni lni-linkedin-original'></i></a></li> 
                      <li><a class="facebook" title="facebook" href="https://www.facebook.com/7shadestech" target="_blank"><i class='lni lni-facebook-filled'></i></a></li>
                      <li><a class="instagram" title="instagram" href="https://www.instagram.com/7shadestech" target="_blank"><i class='lni lni-instagram-filled'></i></a></li>
                      <li><a class="twitter" title="twitter" href="https://twitter.com/7shadestech" target="_blank"><i class='lni lni-twitter-filled'></i></a></li>
                      <li><a class="medium" title="medium" href="https://medium.com/7shades" target="_blank"><i class='lni lni-medium'></i></a></li>
                    </ul>
                </ul>
                <h3 class="block-title">CREATE THE FUTURE.</h3>
                <div class="textwidget">
                  <p>Want to be a part of a team that’s finding better ways to connect brands and their customers? Check out our current openings to see how you can help redefine digital.</p> 
                  <a href="careers.html"><button type="button" class="btn btn-primary">Openings</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Footer area End -->
      
      
    </footer>
    <!-- Footer Section End --> 
    </div>
    <!-- Copyright Start  -->
    <div id="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="site-info float-left">
                <p>&copy; <script>document.write(new Date().getFullYear());</script>&nbsp;<a href="http://www.7Shades.com" rel="nofollow">7Shades</a>. All Rights Reserved.</p>
              </div>              
              <div class="float-right">  
                <ul class="nav nav-inline">
                  <li class="nav-item">
                    <a class="nav-link active" href="sitemap.html">Sitemap</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link last-child" href="tel:+918106628671">(+91) 8106628671</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Copyright End -->

</body>
</html>
