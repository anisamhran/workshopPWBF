<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.html"><img src="{{ asset('assets/img/logo.png') }}" alt=""></a>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse yamm" id="navigation">
    <div class="button navbar-right">
        <button class="navbar-btn nav-button wow bounceInRight login" onclick=" window.open('register.html')" data-wow-delay="0.45s">Login</button>
        <button class="navbar-btn nav-button wow fadeInRight" onclick=" window.open('submit-property.html')" data-wow-delay="0.48s">Submit</button>
    </div>
    <ul class="main-nav nav navbar-nav navbar-right">
        <li class="dropdown ymm-sw " data-wow-delay="0.1s">
            <a href="index.html" class="dropdown-toggle active" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Home <b class="caret"></b></a>
            <ul class="dropdown-menu navbar-nav">
                <li>
                    <a href="index-2.html">Home Style 2</a>
                </li>
                <li>
                    <a href="index-3.html">Home Style 3</a>
                </li>
                <li>
                    <a href="index-4.html">Home Style 4</a>
                </li>
                <li>
                    <a href="index-5.html">Home Style 5</a>
                </li>

            </ul>
        </li>

        <li class="wow fadeInDown" data-wow-delay="0.2s"><a class="" href="{{route( 'pekerja') }}">Properties</a></li>
        <li class="wow fadeInDown" data-wow-delay="0.3s"><a class="" href="{{route( 'pekerja') }}">Property</a></li>
        <li class="dropdown yamm-fw" data-wow-delay="0.4s">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Template <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <div class="yamm-content">
                        <div class="row">
                            <div class="col-sm-3">
                                <h5>Home pages</h5>
                                <ul>
                                    <li>
                                        <a href="index.html">Home Style 1</a>
                                    </li>
                                    <li>
                                        <a href="index-2.html">Home Style 2</a>
                                    </li>
                                    <li>
                                        <a href="index-3.html">Home Style 3</a>
                                    </li>
                                    <li>
                                        <a href="index-4.html">Home Style 4</a>
                                    </li>
                                    <li>
                                        <a href="index-5.html">Home Style 5</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <h5>Pages and blog</h5>
                                <ul>
                                    <li><a href="blog.html">Blog listing</a>  </li>
                                    <li><a href="single.html">Blog Post (full)</a>  </li>
                                    <li><a href="single-right.html">Blog Post (Right)</a>  </li>
                                    <li><a href="single-left.html">Blog Post (left)</a>  </li>
                                    <li><a href="contact.html">Contact style (1)</a> </li>
                                    <li><a href="contact-3.html">Contact style (2)</a> </li>
                                    <li><a href="contact_3.html">Contact style (3)</a> </li>
                                    <li><a href="faq.html">FAQ page</a> </li> 
                                    <li><a href="404.html">404 page</a>  </li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <h5>Property</h5>
                                <ul>
                                    <li><a href="property-1.html">Property pages style (1)</a> </li>
                                    <li><a href="property-2.html">Property pages style (2)</a> </li>
                                    <li><a href="property-3.html">Property pages style (3)</a> </li>
                                </ul>

                                <h5>Properties list</h5>
                                <ul>
                                    <li><a href="properties.html">Properties list style (1)</a> </li> 
                                    <li><a href="properties-2.html">Properties list style (2)</a> </li> 
                                    <li><a href="properties-3.html">Properties list style (3)</a> </li> 
                                </ul>                                               
                            </div>
                            <div class="col-sm-3">
                                <h5>Property process</h5>
                                <ul> 
                                    <li><a href="submit-property.html">Submit - step 1</a> </li>
                                    <li><a href="submit-property.html">Submit - step 2</a> </li>
                                    <li><a href="submit-property.html">Submit - step 3</a> </li> 
                                </ul>
                                <h5>User account</h5>
                                <ul>
                                    <li><a href="register.html">Register / login</a>   </li>
                                    <li><a href="user-properties.html">Your properties</a>  </li>
                                    <li><a href="submit-property.html">Submit property</a>  </li>
                                    <li><a href="change-password.html">Change password</a> </li>
                                    <li><a href="user-profile.html">Your profile</a>  </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /.yamm-content -->
                </li>
            </ul>
        </li>

        <li class="wow fadeInDown" data-wow-delay="0.5s"><a href="contact.html">Contact</a></li>
    </ul>
</div><!-- /.navbar-collapse -->