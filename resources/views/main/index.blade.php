@extends('layout.mainlayout')



@section('content')

		
	<!--Main Slider-->
    <section class="main-slider" data-start-height="800" data-slide-overlay="yes">
    	
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                    
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/1.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="images/main-slider/3.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <div class="tp-caption sft sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-50"
                    data-speed="1500"
                    data-start="0"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><h2>Efiewura <span class="theme_color">Best Properties</span></h2></div>
                    
                    <div class="tp-caption sfb sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="10"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><div class="text text-center">Browse home sales, ratings and reviews to find the best agent to sell or lease your home</div></div>
                    
                    <div class="tp-caption sfb sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="80"
                    data-speed="1500"
                    data-start="1000"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><a href="services.html" class="theme-btn btn-style-one">SEARCH NOW</a></div>
                    
                    </li>
                    
                    
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/2.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="images/main-slider/4.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <div class="tp-caption content-caption sfl sfb tp-resizeme"
                    data-x="left" data-hoffset="15"
                    data-y="center" data-voffset="-10"
                    data-speed="1500"
                    data-start="0"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn">
                    	<!--Slide Content-->
                    	<div class="slide-content">
                        	<div class="clearfix">
                            	<div class="image-column"><img src="images/main-slider/content-image-1.jpg" alt=""></div>
                                <div class="content-column">
                                	<div class="property-tag">{{$slideProperty->sale_type}}</div>
                                    
                                	<h4>{{$slideProperty->suburb}}</h4>
                                    <div class="location">{{$slideProperty->region}}</div>
                                    <div class="price-header clearfix">
                                    	<div class="price">$ {{ number_format($slideProperty->price+0)}} <span class="duration">/ per month</span></div>
                                        <div class="add-fav"><a href="#"><span class="fa fa-heart-o"></span></a></div>
                                    </div>
                                    <div class="specs-list">
                                    	<ul class="clearfix">
                                            <li><span class="icon flaticon-bed-1"></span> {{$slideProperty->number_of_rooms}}</li>
                                            <li><span class="icon flaticon-vintage-bathtub"></span> {{$slideProperty->number_of_bathrooms}} </li>
                                            <li><span class="icon flaticon-car-inside-a-garage"></span> {{$slideProperty->garage}}</li>
                                            <li><span class="icon flaticon-blog-template"></span> {{$slideProperty->dimension}} sq ft</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                    </li>
                    
                </ul>
            </div>
        </div>
    </section>
    
    
    <!--Property Listing-->
    <section class="property-listing">
    	<div class="auto-container">
        	<!--Heading-->
            <div class="sec-title centered">
            	<div class="subtitle">Properties for sale and rent</div>
                <h2>OUR LATEST LISTINGS</h2>
            </div>
            
        	<div class="row clearfix">
            @foreach($properties as $key => $property)
            	<!--Default Property Box-->
                <div class="default-property-box col-lg-4 col-md-6 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image-box">
                        	<figure class="image"><a href="property-details.html"><img src="images/resource/featured-image-1.jpg" alt=""></a></figure>
                            <div class="upper-info clearfix">
                            	<div class="property-label">{{$property->sale_type}}</div>
                                <div class="add-fav"><a href="#"><span class="fa fa-heart-o"></span></a></div>
                            </div>
                            <div class="property-price">$ {{ number_format($property->price+0)}}</div>
                        </div>
                        <div class="lower-content">
                        	<div class="property-title">
                            	<h3><a href="property-details.html">{{$property->suburb}}</a></h3>
                                <div class="location">{{$property->region}}</div>
                            </div>
                            <div class="text-desc">{{$property->description}}</div>
                            <div class="property-specs">
                            	<ul class="clearfix">
                                    <li><span class="icon flaticon-bed-1"></span> {{$property->number_of_rooms}} </li>
                                    <li><span class="icon flaticon-vintage-bathtub"></span> {{$property->number_of_bathrooms}}</li>
                                    <li><span class="icon flaticon-car-inside-a-garage"></span> {{$property->garage}}</li>
                                    <li><span class="icon flaticon-blog-template"></span> {{$property->dimension}} sq ft</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
             
            <div>  
            <div class="text-center">
                <ul class="pagination pagination-sm pager">
                    {!! $properties->links(); !!}
                </ul>
            </div>
            </div>  
                
           
                
            </div>
        </div>
    </section>
    
    
    <!--Featured Properties-->
    <section class="featured-properties">
    	<div class="auto-container">
        	<!--Heading-->
            <div class="sec-title centered">
            	<div class="subtitle">A selection of rental properties</div>
                <h2>FEATURED PROPERTIES</h2>
            </div>
        </div>
        
        <div class="carousel-outer">
        	<div class="featured-properties-carousel owl-theme owl-carousel">
            	<!--Slide Item-->
                <div class="fluid-slide-item">
                	<div class="slide-container clearfix">
                    	<!--Image Column-->
                        <div class="image-column" style="background-image:url(images/resource/fluid-image-1.jpg);">
                        	<figure class="image"><img src="images/resource/fluid-image-1.jpg" alt=""></figure>
                            <a href="images/resource/fluid-image-1.jpg" class="lightbox-image overlay-link"></a>
                        </div>
                        
                        <!--Content Column-->
                        <div class="content-column">
                        	<div class="inner">
                            	<!--Slide Header-->
                            	<div class="slide-header">
                                	<h3><a href="property-details.html">Downtown Penthouse Modern Villa</a></h3>
                                    <div class="location">San Francisco, USA</div>
                                    <div class="info clearfix">
                                    	<div class="price">$ 2,450,000</div>
                                        <div class="prop-label">Sale</div>
                                    </div>
                                </div>
                                <div class="description">A billion and trillion decipherment dream of the mind's eye preserve and cherish that pale blue dot, colonies globular star cluster shores of the cosmic ocean billions upon billions, Euclid, a very small stage in a vast cosmic arena! Cosmic ocean Euclid culture? Rich in heavy atoms Cambrian explosion rich in heavy atoms, two ghostly white figures in hamer coveralls and helmets are soflty dancing. </div>
                                <!--Info-->
                                <div class="agent-info clearfix">
                                	<div class="agent"><figure class="image img-circle"><img class="img-circle" src="images/resource/author-thumb-1.jpg" alt=""></figure><div class="name">Mark Smith</div></div>
                                    <div class="add-fav"><a href="#"><span class="fa fa-heart-o"></span></a></div>
                                </div>
                                <!--Specs-->
                                <div class="property-specs">
                                    <ul class="clearfix">
                                        <li><span class="icon flaticon-bed-1"></span> 4 Bedromms</li>
                                        <li><span class="icon flaticon-vintage-bathtub"></span> 3 Bathrooms</li>
                                        <li><span class="icon flaticon-car-inside-a-garage"></span> 2 Garage</li>
                                        <li><span class="icon flaticon-blog-template"></span> 1210 sq ft</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div><!--End Slide Item-->
                
                <!--Slide Item-->
                <div class="fluid-slide-item">
                	<div class="slide-container clearfix">
                    	<!--Image Column-->
                        <div class="image-column" style="background-image:url(images/resource/fluid-image-1.jpg);">
                        	<figure class="image"><img src="images/resource/fluid-image-1.jpg" alt=""></figure>
                            <a href="images/resource/fluid-image-1.jpg" class="lightbox-image overlay-link"></a>
                        </div>
                        
                        <!--Content Column-->
                        <div class="content-column">
                        	<div class="inner">
                            	<!--Slide Header-->
                            	<div class="slide-header">
                                	<h3><a href="property-details.html">1200 Anastasia Avenue</a></h3>
                                    <div class="location">California</div>
                                    <div class="info clearfix">
                                    	<div class="price">$ 2,450 / Month</div>
                                        <div class="prop-label">Rent</div>
                                    </div>
                                </div>
                                <div class="description">A billion and trillion decipherment dream of the mind's eye preserve and cherish that pale blue dot, colonies globular star cluster shores of the cosmic ocean billions upon billions, Euclid, a very small stage in a vast cosmic arena! Cosmic ocean Euclid culture? Rich in heavy atoms Cambrian explosion rich in heavy atoms, two ghostly white figures in hamer coveralls and helmets are soflty dancing. </div>
                                <!--Info-->
                                <div class="agent-info clearfix">
                                	<div class="agent"><figure class="image img-circle"><img class="img-circle" src="images/resource/author-thumb-1.jpg" alt=""></figure><div class="name">Mark Smith</div></div>
                                    <div class="add-fav"><a href="#"><span class="fa fa-heart-o"></span></a></div>
                                </div>
                                <!--Specs-->
                                <div class="property-specs">
                                    <ul class="clearfix">
                                        <li><span class="icon flaticon-bed-1"></span> 7 Bedromms</li>
                                        <li><span class="icon flaticon-vintage-bathtub"></span> 4 Bathrooms</li>
                                        <li><span class="icon flaticon-car-inside-a-garage"></span> 2 Garage</li>
                                        <li><span class="icon flaticon-blog-template"></span> 1610 sq ft</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div><!--End Slide Item-->
                
                <!--Slide Item-->
                <div class="fluid-slide-item">
                	<div class="slide-container clearfix">
                    	<!--Image Column-->
                        <div class="image-column" style="background-image:url(images/resource/fluid-image-1.jpg);">
                        	<figure class="image"><img src="images/resource/fluid-image-1.jpg" alt=""></figure>
                            <a href="images/resource/fluid-image-1.jpg" class="lightbox-image overlay-link"></a>
                        </div>
                        
                        <!--Content Column-->
                        <div class="content-column">
                        	<div class="inner">
                            	<!--Slide Header-->
                            	<div class="slide-header">
                                	<h3><a href="property-details.html">401 Biscayne Boulevard</a></h3>
                                    <div class="location">Miami</div>
                                    <div class="info clearfix">
                                    	<div class="price">$ 3,240,000</div>
                                        <div class="prop-label">Sale</div>
                                    </div>
                                </div>
                                <div class="description">A billion and trillion decipherment dream of the mind's eye preserve and cherish that pale blue dot, colonies globular star cluster shores of the cosmic ocean billions upon billions, Euclid, a very small stage in a vast cosmic arena! Cosmic ocean Euclid culture? Rich in heavy atoms Cambrian explosion rich in heavy atoms, two ghostly white figures in hamer coveralls and helmets are soflty dancing. </div>
                                <!--Info-->
                                <div class="agent-info clearfix">
                                	<div class="agent"><figure class="image img-circle"><img class="img-circle" src="images/resource/author-thumb-1.jpg" alt=""></figure><div class="name">Mark Smith</div></div>
                                    <div class="add-fav"><a href="#"><span class="fa fa-heart-o"></span></a></div>
                                </div>
                                <!--Specs-->
                                <div class="property-specs">
                                    <ul class="clearfix">
                                        <li><span class="icon flaticon-bed-1"></span> 8 Bedromms</li>
                                        <li><span class="icon flaticon-vintage-bathtub"></span> 2 Bathrooms</li>
                                        <li><span class="icon flaticon-car-inside-a-garage"></span> 2 Garage</li>
                                        <li><span class="icon flaticon-blog-template"></span> 1410 sq ft</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div><!--End Slide Item-->
                
            </div>
        </div>
        
    </section>
    
    <!--Team Section-->
    <section class="team-section">
    	<div class="auto-container">
        	<!--Heading-->
            <div class="sec-title centered">
            	<div class="subtitle">Meet Our Personnels</div>
                <h2>PROFFESIONAL TEAM</h2>
            </div>
            
            <div class="row clearfix">
            	<!--Team Member-->
                <div class="team-member col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<figure class="image-box"><img src="images/resource/team-image-1.jpg" alt=""></figure>
                        <div class="overlay-box">
                        	<ul class="social-links clearfix">
                            	<li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                        	<div class="inner">
                            	<h4><a href="agent-single.html">Benjamin Acheampong</a></h4>
                                <div class="designation">Real Estate Personnels</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Team Member-->
                <div class="team-member col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<figure class="image-box"><img src="images/resource/team-image-2.jpg" alt=""></figure>
                        <div class="overlay-box">
                        	<ul class="social-links clearfix">
                            	<li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                        	<div class="inner">
                            	<h4><a href="agent-single.html">Jacob Philip</a></h4>
                                <div class="designation">Real Estate Personnels</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Team Member-->
                <div class="team-member col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<figure class="image-box"><img src="images/resource/team-image-3.jpg" alt=""></figure>
                        <div class="overlay-box">
                        	<ul class="social-links clearfix">
                            	<li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                            </ul>
                        </div>
                        <div class="lower-content">
                        	<div class="inner">
                            	<h4><a href="agent-single.html">Paul Jones</a></h4>
                                <div class="designation">Real Estate Personnels</div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>
    
    
    <!--Testimonials Section One-->
    <section class="testimonials-section-one" style="background-image:url(images/background/image-1.jpg);">
    	<div class="auto-container">
        	<!--Heading-->
            <div class="sec-title centered">
            	<div class="subtitle">Testimonials</div>
                <h2>What Clients Say</h2>
            </div>
            
            <div class="testimonial-carousel single-item-carousel owl-theme owl-carousel">
            	<!--Slide-->
                <div class="slide-item">
                	<div class="slide-content  clearfix">
                    	<figure class="image"><img src="images/resource/client1.jpg" alt=""></figure>
                        <div class="content-box">
                        	<div class="info">
                            	<h4>JANE RAMOS</h4>
                                <div class="designation">Founder & CEO </div>
                            </div>
                            <div class="text">“Great turbulent clouds Vangelis! Decipherment of  trillion tingling of the spine not a sunrise but galaxy rise tendrills of gossamera clouds Tunguska event encyclopaedia galactica rings.”</div>
                            <div class="quote-icon"></div>
                        </div>
                    </div>
                </div>
                <!--Slide-->
                <div class="slide-item">
                	<div class="slide-content  clearfix">
                    	<figure class="image"><img src="images/resource/client.jpg" alt=""></figure>
                        <div class="content-box">
                        	<div class="info">
                            	<h4>JANE RAMOS</h4>
                                <div class="designation">Founder & CEO </div>
                            </div>
                            <div class="text">“Great turbulent clouds Vangelis! Decipherment of  trillion tingling of the spine not a sunrise but galaxy rise tendrills of gossamera clouds Tunguska event encyclopaedia galactica rings.”</div>
                            <div class="quote-icon"></div>
                        </div>
                    </div>
                </div>
                <!--Slide-->
                <div class="slide-item">
                	<div class="slide-content  clearfix">
                    	<figure class="image"><img src="images/resource/client.jpg" alt=""></figure>
                        <div class="content-box">
                        	<div class="info">
                            	<h4>JANE RAMOS</h4>
                                <div class="designation">Founder & CEO </div>
                            </div>
                            <div class="text">“Great turbulent clouds Vangelis! Decipherment of  trillion tingling of the spine not a sunrise but galaxy rise tendrills of gossamera clouds Tunguska event encyclopaedia galactica rings.”</div>
                            <div class="quote-icon"></div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    
    
   

			<!--News Section-->
    <section class="news-section">
    	<div class="auto-container">
        	<!--Heading-->
            <div class="sec-title centered">
            	<div class="subtitle">Our Blog</div>
                <h2>Recent Blog Posts</h2>
            </div>
            
            <div class="row clearfix">
            	
                <!--News Style One-->
                <div class="news-style-one col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image-box">
                        	<figure class="image"><a href="blog-details.html"><img src="images/resource/blog-image-1.jpg" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                        	<div class="post-meta">
                            	<ul class="clearfix">
                                	<li><a href="#"><span class="fa fa-calendar"></span> Sep 14, 2016</a></li>
                                    <li><a href="#"><span class="fa fa-comment-o"></span> 4 Comments</a></li>
                                </ul>
                            </div>
                            <h4><a href="blog-details.html">No Agents</a></h4>
                            <div class="text-desc">Great turbulent clouds, kindling renet the energy hidden in matter prime number, rich in heavy atoms venture courage of our rig veda. </div>
                            <div class="more-link"><a href="blog-details.html"><span class="fa fa-long-arrow-right"></span> <span class="txt">Read More</span></a></div>
                        </div>
                    </div>
                </div>
                
                <!--News Style One-->
                <div class="news-style-one col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image-box">
                        	<figure class="image"><a href="blog-details.html"><img src="images/resource/blog-image-2.jpg" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                        	<div class="post-meta">
                            	<ul class="clearfix">
                                	<li><a href="#"><span class="fa fa-calendar"></span> Sep 15, 2016</a></li>
                                    <li><a href="#"><span class="fa fa-comment-o"></span> 3 Comments</a></li>
                                </ul>
                            </div>
                            <h4><a href="blog-details.html">Luxury home design ideas</a></h4>
                            <div class="text-desc">Great turbulent clouds, kindling renet the energy hidden in matter prime number, rich in heavy atoms venture courage of our rig veda. </div>
                            <div class="more-link"><a href="blog-details.html"><span class="fa fa-long-arrow-right"></span> <span class="txt">Read More</span></a></div>
                        </div>
                    </div>
                </div>
                
                <!--News Style One-->
                <div class="news-style-one col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image-box">
                        	<figure class="image"><a href="blog-details.html"><img src="images/resource/blog-image-3.jpg" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                        	<div class="post-meta">
                            	<ul class="clearfix">
                                	<li><a href="#"><span class="fa fa-calendar"></span> Sep 19, 2016</a></li>
                                    <li><a href="#"><span class="fa fa-comment-o"></span> 6 Comments</a></li>
                                </ul>
                            </div>
                            <h4><a href="blog-details.html">A new residential project launched</a></h4>
                            <div class="text-desc">Great turbulent clouds, kindling renet the energy hidden in matter prime number, rich in heavy atoms venture courage of our rig veda. </div>
                            <div class="more-link"><a href="blog-details.html"><span class="fa fa-long-arrow-right"></span> <span class="txt">Read More</span></a></div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>


@endsection