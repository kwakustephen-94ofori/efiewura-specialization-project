<!-- Main Header / Header Style One-->
    <header class="main-header header-style-one">
    	<!-- Header Top-->
    	<div class="header-top-one">
        	<div class="auto-container">
            	<div class="clearfix">
                    
                    <!--Top Left-->
                    <div class="top-left">
                    	<ul class="social-links">
                        	<li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                            <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                            <li><a href="#"><span class="fa fa-pinterest"></span></a></li>
                        </ul>
                    </div>
                    
                    <!--Top Right-->
                    <div class="top-right top-links">
                    	<ul class="clearfix">
                        	<li><a href="#"><span class="icon fa fa-phone"></span> 123 456 0789</a></li>
                            <li><a href="mailto:info@marseille.com"><span class="icon fa fa-envelope-o"></span> info@marseille.com</a></li>
                        </ul>
                    </div>
                    
                </div>
                
            </div>
        </div><!-- Header Top End -->
        
        
        <!-- Header Lower -->
        <div class="header-lower">
            <div class="main-box">
                <div class="auto-container">
                    <div class="outer-container clearfix">
                        <!--Logo Box-->
                        <div class="logo-box">
                            <div class="logo"><a href="index.html" title="Marseille"><img src="images/logo.png" alt="Marseille" title="Marseille"></a></div>
                        </div>
                        
                        <!--Nav Outer-->
                        <div class="nav-outer clearfix">
                            <!-- Main Menu -->
                            <nav class="main-menu">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->    	
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </button>
                                </div>
                                
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li class=""><a href=" {{route('home')}} ">Home</a>
                                        </li>

                                        <li><a href="/about-us">About Us</a></li>

                                        <li class="dropdown"><a href="#">Our Agents</a>
                                        	<ul>
                                                <li><a href="agents.html">Our Agents</a></li>
                                                <li><a href="agent-single.html">Single Agent</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Properties</a>
                                        	<ul>
                                                <li><a href="#">Houses</a></li>
                                                <li><a href="#">Land</a></li>
                                                <li><a href="#">Other</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="gallery.html">Gallery</a> </li>
                                        <li class="dropdown"><a href="#">Blog</a>
                                        	<ul>
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                        
                                     </ul>
                                </div>
                            </nav><!-- Main Menu End-->
                            
                            <!--Search Btn-->
                            <div class="search-btn search-toggle-btn"><span class="fa fa-search"></span></div>
                            
                        </div><!--Nav Outer End-->
                        
                        <!--Search Form-->
                    	<div class="search-form-panel">
                            <div class="form-box">
                                <div class="default-form property-search-form">
                                    <form method="post" action="http://t.commonsupport.com/marseille/properties-grid.html">
                                        <div class="row clearfix">
                                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                <select class="custom-select-box">
                                                    <option>Location</option>
                                                    <option>UAE</option>
                                                    <option>USA</option>
                                                    <option>Australia</option>
                                                    <option>Russia</option>
                                                    <option>Pakistan</option>
                                                    <option>China</option>
                                                    <option>India</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                <select class="custom-select-box">
                                                    <option>Category</option>
                                                    <option>Rental</option>
                                                    <option>For Sale</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                <select class="custom-select-box">
                                                    <option>Property Type</option>
                                                    <option>Residential</option>
                                                    <option>Commercial</option>
                                                    <option>Agriculture</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                <select class="custom-select-box">
                                                    <option>Status</option>
                                                    <option>Available</option>
                                                    <option>Sold</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                            	<div class="range-slider-one">
                                                    <div class="slider-header">
                                                        <div class="clearfix">
                                                            <div class="title">Price ($):</div>
                                                            <div class="input"><input type="text" class="property-amount" name="field-name" readonly></div>
                                                        </div>
                                                    </div>
                                                     
                                                    <div class="price-range-slider"></div>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                <div class="range-slider-one">
                                                    <div class="slider-header">
                                                        <div class="clearfix">
                                                            <div class="title">Area (ft<sup>2</sup>):</div>
                                                            <div class="input"><input type="text" class="area-size" name="field-name" readonly></div>
                                                        </div>
                                                    </div>
                                                     
                                                    <div class="area-range-slider"></div>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                <select class="custom-select-box">
                                                    <option>Rooms</option>
                                                    <option>1-4</option>
                                                    <option>5-8</option>
                                                    <option>9-12</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                <button type="submit" class="theme-btn btn-style-two">SEARCH</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        
        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index.html" class="img-responsive" title="Marseille"><img src="images/logo-small.png" alt="Marseille" title="Marseille"></a>
                </div>
                
                <!--Right Col-->
                <div class="right-col pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->    	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="current dropdown"><a href="#">Home</a>
                                    <ul>
                                        <li><a href="index.html">Homepage One</a></li>
                                        <li><a href="index-2.html">Homepage Two</a></li>
                                        <li><a href="index-3.html">Homepage Three</a></li>
                                        <li class="dropdown"><a href="index-3.html">Header Styles</a>
                                            <ul>
                                                <li><a href="index.html">Header Style One</a></li>
                                                <li><a href="index-2.html">Header Style Two</a></li>
                                                <li><a href="index-3.html">Header Style Three</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li class="dropdown"><a href="#">Our Agents</a>
                                    <ul>
                                        <li><a href="agents.html">Our Agents</a></li>
                                        <li><a href="agent-single.html">Single Agent</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Properties</a>
                                    <ul>
                                        <li><a href="properties-grid.html">Properties Grid View</a></li>
                                        <li><a href="properties-grid-sidebar.html">Properties Grid Sidebar</a></li>
                                        <li><a href="properties-list.html">Properties List View</a></li>
                                        <li><a href="properties-list-sidebar.html">Properties List Sidebar</a></li>
                                        <li><a href="property-details.html">Property Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="gallery.html">Gallery</a> </li>
                                <li class="dropdown"><a href="#">Blog</a>
                                    <ul>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact Us</a></li>
                                
                             </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
                
            </div>
        </div><!--End Sticky Header-->
    
    </header>
    <!--End Main Header -->