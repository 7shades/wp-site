<head>
	<style>

.wrapper{
	width: 100%;
  margin: 0 auto;
  overflow: hidden;
	}

  /* ==========================================================================
   Contact Us
  ========================================================================== */

.form-control {
  width: 100%;
  margin-bottom: 20px;
  padding: 15px 30px;
  font-size: 14px;
  border-radius: 4px;
  border: 1px solid transparent;
  background: #f5f5f5;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  transition: all 0.3s;
}

.form-control:focus {
  border: 1px solid #116de2;
  outline: none;
  box-shadow: none;
}

.btn.disabled, .btn:disabled {
  opacity: 1;
}
.btn{
    font-family: "Open Sans";
    font-size: .75rem;
    color: #ffff;
    background-color: #03a9f4;
    border-radius: 5px;
    min-width: 7rem;
    padding: .55rem 1.5rem;
    font-weight: 600;
    letter-spacing: 1px;
    text-align: center;
    cursor: pointer;
    display: inline-block;
    line-height: 1.5rem;
    border: 2px solid #03a9f4;
    vertical-align: middle;
    -webkit-appearance: none;
    margin-bottom: .75rem;
}
/*textarea {
  border-radius: 4px !important;
}*/
.section-header{
  margin: 30px auto;
  text-align: center;
}
.contact-info {
  margin-bottom: 10px;
}

.contact-info i {
  font-size: 20px;
  /* color: #116de2; */
  float: left;
  margin-right: 10px;
}

.contact-info h5 {
  margin-top: 5px;
  font-size: 20px;
  font-weight: 500;
}

.contact-info p {
  font-size: 14px;
  margin-bottom: 20px;
}

#contact .contact-block {
  overflow: hidden;
}

.text-danger {
  font-size: 14px;
  margin-top: 10px;
}

.list-unstyled li {
  color: #d9534f;
}

/* Contact Map */
#conatiner-map {
  width: 100%;
  height: 480px;
}

#google-map-area {
  position: relative;
}

#google-map-area .container-fluid {
  padding-left: 0;
  padding-right: 0;
}

.toggle-map {
  height: 5px;
  width: 100%;
  background-color: #116de2;
  bottom: 0px;
  text-align: center;
  position: absolute;
  z-index: 106;
}

.toggle-map .map-icon {
  width: 50px;
  height: 50px;
  display: inline-block;
  -moz-border-radius: 100%;
  -webkit-border-radius: 100%;
  border-radius: 100%;
  background-color: #fff;
  border: #116de2 3px solid;
  position: relative;
  top: -46px;
}

.toggle-map .map-icon i {
  width: 44px;
  height: 44px;
  display: inline-block;
  line-height: 44px;
  text-align: center;
  font-size: 20px;
}

#google-map {
  text-align: center;
  background-color: #fff;
  height: 465px;
  position: absolute;
  bottom: -460px;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  transition: all 0.3s;
  z-index: 101;
  width: 100%;
  border-top: #116de2 3px solid;
}

#google-map.panel-show {
  bottom: -20px !important;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  transition: all 0.3s;
}

@media (min-width: 992px)
.col-lg-8 {
    -ms-flex: 0 0 75%;
    flex: 0 0 65%;
    max-width: 65%;
}
@media (min-width: 768px)
.col-lg-8 {
    -ms-flex: 0 0 75%;
    flex: 0 0 65%;
    max-width: 65%;
}
@media (min-width: 992px)
.col-lg-4 {
    -ms-flex: 0 0 35%;
    flex: 0 0 35%;
    max-width: 35%;
}
@media (min-width: 768px)
.col-md-4 {
    -ms-flex: 0 0 35%;
    flex: 0 0 35%;
    max-width: 35%;
}
  /* ==========================================================================
   Footer Style
   ========================================================================== */

 .footer-Content{
	 width: 100%;
 }

 .block-title {
    font-size: 25px;
    font-weight: 500;
    color: #555555;
    margin: 20px auto;
	  text-transform: uppercase;
	  align-content: center;
  }
  
  footer .footer-Content {
	  width: 100%;
    background-color: #ffffff;
    padding: 60px 0;
    color: #555555;
  }
  
  .textwidget {
    font-size: 14px;
    line-height: 24px;
    margin-bottom: 10px;
  }
  
  .textwidget p {
    margin-bottom: 10px;
  }
  
  .footer-social {
    margin-bottom: 30px;
  }
  .no-margin {
    margin-bottom: 0px;
  }
  footer .menu {
    padding-left: 0;
  }
  
  footer .menu li {
    padding-bottom: 12px;
  }
  
  footer .menu li a {
    color: #222222;
  }
  
  footer .menu li a:hover {
    color: #116de2;
  }
  
  .contact-footer {
    margin: 0;
    padding: 0;
    display: inline-block;
  }
  
  .contact-footer li {
    padding: 3px 0;
    margin-bottom: 15px;
  }
  
  .contact-footer li strong {
    float: left;
  }
  
  .contact-footer li span {
    margin-left: 73px;
    display: block;
  }
  
  .contact-footer li span a {
    color: #546E7A;
  }
  
  .contact-footer li span a:hover {
    color: #116de2;
  }
  
  .instagram-footer {
    padding: 0;
  }
  
  .instagram-footer li {
    display: block;
    width: 33%;
    float: left;
    padding: 0 5px 5px 0;
    margin: 0;
  }
  
  .instagram-footer li a img {
    width: 100%;
  }
  
  .footer-social li {
    display: inline-block;
    margin-right: 20px;
  }
  
  .footer-social li a {
    /*background-color: #116de2;*/
    border-radius: 50%;
    color: #fff;
    height: 25px;
    line-height: 25px;
    text-align: center;
    width: 25px;
    display: inline-block;
  }
  .footer-social li a i {
    color: #116de2;
    -webkit-transition: all .4s ease-in-out;
    -moz-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
  }
  .footer-social li a.linkedin:hover i {
    color: #007bb5;
  }
  .footer-social li a.facebook:hover i {
    color: #3b5998;
  }
  .footer-social li a.instagram:hover i {
    color: #333333;
  }
  .footer-social li a.twitter:hover i {
    color: #55acee;
  }
  .footer-social li a.medium:hover i {
    color: #000000;
  }
  .footer-social li a i {
    font-size: 25px;
  }
  
  #copyright {
	  width: 100%;
    background-color: #555555;
    padding: 20px 0 10px;
    border-top: 1px solid #eaeaea;
	  color: #FFFFFF;
  }
  
  #copyright p {
    margin-bottom: 0;
    line-height: 40px;
    color: #FFFFFF;
    font-size: 12px;
  }
  
  #copyright p a {
    color: #FFFFFF;
  }
  
  #copyright p a:hover {
    color: #116de2;
  }
  
  #copyright .nav-inline .nav-link {
    color: #FFFFFF;
    padding: 2px 10px;
    margin: 8px 0px;
    font-size: 12px;
    border-right: 1px solid white;
  }
  #copyright .nav-inline .nav-link.last-child {
    border-right: none;
    margin-right: 0px;
    padding-right: 0px;
    cursor: text;
  }
  #copyright .nav-inline .nav-link:hover {
    color: #116de2;
  }
  #copyright .nav-inline .nav-link.last-child:hover {
    color: #FFFFFF;
  }
	</style>
</head>
<?php mesmerize_get_footer_content(); ?>
	</div>
<?php wp_footer(); ?>
</body>
</html>
