<section class="banner-sect py-5">
            <div class="container-fluid">
                <div class="row row-eq-height">
                <div class="col-md-4 banner-sect-left mb-4 mb-md-0"><img class="w-100" src="{{ asset('img/page 1-01.png')}}" alt=""></div>
                
                <div class="col-md-8 banner-sect-right d-flex align-item-center justify-content-center flex-column">
<h2 class="mb-4">{!! homepage('banner_heading')!!}</h2>
                    <h4 class="mb-2 mb-md-5">{!! homepage('banner_sub_heading')!!}</h4>
                    <p>{!! homepage('banner_content')!!}</p>
                    <div>
                    <a href="#pricing">View Plans</a>    
                    <a href="{{route('order_page')}}">Order Now</a>    
                    </div>
                </div>
            </div>
            </div>   
            
            </div> 

           </div>
        </section>

        <div class="container-fluid blue-strip mb-3 mb-md-5 py-5">
        <div class="row">
        <div class="container">
        <div class="row">

        <div class="col-12 col-md-3 blue-strip-pic01 d-md-flex">
            <h4>Writing sample</h4>
            <div class="sample-item"><i class="fas fa-chevron-circle-right"></i></div>
        </div>

        <div class="col-12 col-md-2 blue-strip-pic02">
            <div data-toggle="modal" data-target="#staticBackdrop">
            <div><i class="fas fa-search"></i></div>
            <p>SEO WRITING</p>
            </div>
        </div>  

        <div class="col-12 col-md-2 blue-strip-pic02">
            <div  data-toggle="modal" data-target="#staticBackdrop-1">
            <div><i class="fas fa-paste"></i></div>
            <p>LONG FORM BLOG POSTS</p>
        </div>
        </div>
        
        <div class="col-12 col-md-2 blue-strip-pic02">
            <div  data-toggle="modal" data-target="#staticBackdrop-2">
            <div><i class="fas fa-file-alt"></i></div>
            <p>WEBSITE CONTENT</p>
        </div>
        </div>  

        <div class="col-12 col-md-2 blue-strip-pic02">
            <div  data-toggle="modal" data-target="#staticBackdrop-3">
            <div><i class="far fa-file-pdf"></i></div>
            <p>CASE STUDIES</p>
        </div>
        </div>    

        <div class="col-12 col-md-1 blue-strip-pic02">
            <div  data-toggle="modal" data-target="#staticBackdrop-4">
            <div><i class="fas fa-tablet-alt"></i></div>
            <p>E-BOOK</p>
        </div>
        </div>   
    
        </div>    
        </div>    
        </div>
        </div>


        <div class="container mb-5">
        <div class="row">
        <div class="col-md-12">
            <div class="mb-4 mb-md-5 icon-sect text-center">
            <h1>High-Quality, Error-Free, SEO-Friendly Articles</h1>
            <h1>Thoroughly Researched, Edited and Proofread</h1>
            </div>
        </div>    
        </div> 

        <div class="row mb-0 mb-md-5">

        <div class="col-12 col-md-6 mb-2">
          <div class="d-flex align-items-center justify-content-center ">
            <div class="image-icon"><img src="{{ asset('img/ws7-01.png')}}" alt=""></div>
            <div class="image-text">
                <h5>Written by Native writers</h5>
                <p> we know they are more experienced</p>
            </div>
          </div>
        </div> 

        <div class="col-12 col-md-6 image-icon mb-2">
          <div class="d-flex align-items-center justify-content-center ">
            <div class="image-icon"><img src="{{ asset('img/ws8-01.png')}}" alt=""></div>
            <div class="image-text">
                <h5>Search friendly</h5>
                <p>we know what the search
                    engines are looking for</p>
            </div>
          </div>
        </div>    
        </div>  
        <div class="row">
            <div class="col-12 col-md-6 mb-2">
          <div class="d-flex align-items-center justify-content-center ">
                <div class="image-icon"><img src="{{ asset('img/ws9-01.png')}}" alt=""></div>
            <div class="image-text">
                <h5>Engaging</h5>
                <p> we know what the
                    audiences want</p>
            </div>
          </div>
            </div>    
            <div class="col-12 col-md-6">
          <div class="d-flex align-items-center justify-content-center ">
                <div class="image-icon"><img src="{{ asset('img/ws10-01.png')}}"></div>
            <div class="image-text">
                <h5>Affordable</h5>
                <p>we know what the
                    clients want</p>
            </div>
          </div>
            </div>    
            </div>  

        </div>

        <div class="container-fluid pricing-sect mb-5 py-3 py-md-5">
        <div class="row">
        <div class="container">
        <div class="row">
        <div class="col-md-12 mb-4 mb-md-5">
            <h1>Pricing</h1>
            <p>No subscription plans, no contracts, no commitments; we work on per-word basis</p>
        </div>    
        </div>
        
        <div class="row" id="pricing">
            <div class="col-md-6 mb-5 mb-md-0">
            <div class="pricing-sect-1 mr-0 mr-md-5">
                <h2>Upto 10,000 Words</h2>
            <ul>
                <li>$0.04 per Word</li>
                <li>Research</li>
                <li>Writing</li>
                <li>Editing</li>
                <li>Revisions</li>
                <li class="one">1</li>
                <li><a href="{{ route('order_page')}}">Order Now</a></li>
            </ul>
            
            </div>
            </div>
            <div class="col-md-6">
            <div class="pricing-sect-2 ml-0 ml-md-5">
                <h2>More Than 10,000 Words</h2>
                <ul>
                    <li>$0.03 per Word</li>
                    <li>Research</li>
                    <li>Writing</li>
                    <li>Editing</li>
                    <li>Revisions</li>
                    <li>Internal Linking</li>
                    <li><a href="{{ route('order_page')}}">Order Now</a></li>
                </ul>
                
            </div>    
            </div>
        </div>
    
        </div>    
        </div>    
        </div>

        <section class="container slider clear-fix mb-5">
        <div class="row">
        <div class="col-md-12 mb-5"><h1>Customer Corner</h1></div>    
        </div>    
    
        <div class="row">
            <div class="col-md-12 mb-0 mb-md-5">
            <div class="myslider">

                 <div class="slider-content mb-5">
                    <div class="slider-content-image text-center text-md-left"><img src="{{ asset('img/1.png')}}" alt=""></div>
                <p> <i class="fas fa-quote-left"></i> I was struggling with different content writing
                    services online, until I found NicheContentSite.
                    I’ve hired their services for informative articles,
                    long-form blogs, product reviews and what not,
                    and haven’t faced any quality issues for far. I
                    highly recommend their services if you are planning to build a niche site. <i class="fas fa-quote-right"></i>
                </p>
                <div class="slider-content-text">
                    <p class="p-0">- Emma Wilson</p>
                    <a href="#">(Owner)</a>
                    <p> headphonesproreview.com</p>
                </div>
                </div>
                
                <div class="slider-content-2">
                    <div class="slider-content-image"><img src="{{ asset('img/2.png')}}" alt=""></div>
                <p> <i class="fas fa-quote-left"></i> Gone are the days when content meant stuffing
                    your articles/blogs with keywords. The search
                    engines have become smart, especially Google.
                    NicheSiteContent helps me a great deal in publishing relevant, engaging and SEO-friendly content on my site. I partnered with them 2 years
                    ago and we are still in a healthy relationship (hehehe). <i class="fas fa-quote-right"></i></p>  
                <div class="slider-content-text-2">
                    <p class="p-0">- Andrew Crowley</p>
                    <a href="#">(Owner)</a>
                    <p>epicgamedeals.com</p>
                </div>     
                </div>

                <div class="slider-content mb-5">
                    <div class="slider-content-image"><img src="{{ asset('img/1.png')}}" alt=""></div>
                <p> <i class="fas fa-quote-left"></i> I was struggling with different content writing
                    services online, until I found NicheContentSite.
                    I’ve hired their services for informative articles,
                    long-form blogs, product reviews and what not,
                    and haven’t faced any quality issues for far. I
                    highly recommend their services if you are planning to build a niche site. <i class="fas fa-quote-right"></i>
                </p>
                <div class="slider-content-text">
                    <p class="p-0">- Emma Wilson</p>
                    <a href="#">(Owner)</a>
                    <p> headphonesproreview.com</p>
                </div>
                </div>
                
                <div class="slider-content-2">
                    <div class="slider-content-image"><img src="{{ asset('img/2.png')}}" alt=""></div>
                <p> <i class="fas fa-quote-left"></i> Gone are the days when content meant stuffing
                    your articles/blogs with keywords. The search
                    engines have become smart, especially Google.
                    NicheSiteContent helps me a great deal in publishing relevant, engaging and SEO-friendly content on my site. I partnered with them 2 years
                    ago and we are still in a healthy relationship (hehehe). <i class="fas fa-quote-right"></i></p>  
                <div class="slider-content-text-2">
                    <p class="p-0">- Andrew Crowley</p>
                    <a href="#">(Owner)</a>
                    <p>epicgamedeals.com</p>
                </div>     
                </div>
                
            </div>
        </div>
    </div>

        </section>

        <section class="container-fluid frequently-question clear-fix py-3 py-md-5">
        <div class="row">
        <div class="container">
        <div class="row">
        <div class="col-md-12 py-2 py-md-5"><h1>Frequently Asked Questions</h1></div>    
        </div> 

    <div class="row">
        <div class="col-md-12 mb-3">
            <div class="frequently-question-1 d-flex align-items-center justify-content-center">
        <div class="frequently-question-image"><img src="{{ asset('img/ws11-01.png')}}" alt=""></div>
        <div class="frequently-question-text">
            <h4>{!! homepage('faq_question_1') !!}</h4>
            <p>{!! homepage('faq_question_1_answer') !!}</p>
        </div>
            </div>
        </div>  
    
        <div class="col-md-12 mb-3">
            <div class="frequently-question-1 d-flex align-items-center justify-content-center">
        <div class="frequently-question-image"><img src="{{ asset('img/ws11-01.png')}}" alt=""></div>
        <div class="frequently-question-text">
            <h4>{!! homepage('faq_question_2') !!}</h4>
            <p>{!! homepage('faq_question_2_answer') !!}</p>
        </div>
            </div>
        </div>

        <div class="col-md-12 mb-3">
            <div class="frequently-question-1 d-flex align-items-center justify-content-center">
        <div class="frequently-question-image"><img src="{{ asset('img/ws11-01.png')}}" alt=""></div>        
        <div class="frequently-question-text">
            <h4>{!! homepage('faq_question_3') !!}</h4>
            <p>{!! homepage('faq_question_3_answer') !!}</p>
        </div>
            </div>
        </div>

        <div class="col-md-12 mb-3">
            <div class="frequently-question-1 d-flex align-items-center justify-content-center">
        <div class="frequently-question-image"><img src="{{ asset('img/ws11-01.png')}}" alt=""></div> 
        <div class="frequently-question-text">
            <h4>{!! homepage('faq_question_4')!!}</h4>
            <p>{!! homepage('faq_question_4_answer')!!}
                </p>
        </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="frequently-question-1 d-flex align-items-center justify-content-center">
        <div class="frequently-question-image"><img src="{{ asset('img/ws11-01.png')}}" alt=""></div> 
        <div class="frequently-question-text">
            <h4>{!! homepage('faq_question_5')!!}</h4>
            <p>{!! homepage('faq_question_5_answer')!!}
                </p>

        </div>
            </div>
        </div>

    </div>    
        </div>    
        </section>

@include('website.layouts.footer')        

  
        <!-- data-toggle="modal" data-target="#staticBackdrop" -->

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel"><i class="fas fa-search"></i> SEO Writing</h5>
          
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <div class="modal-body">
            <p>I'm capable of researching various topics and pulling together coherent, informational articles for any audience or demographic. Examples:</p>
            <ul>
                <li><a href="{{ route('b2b')}}"><i class="fas fa-circle"></i> B2B SEO Part 1 - Understanding the Basics </a></li>
                <li><a href="{{ route('retrofit')}}"><i class="fas fa-circle"></i> How To Retrofit Your Fluorescent Sign To LED</a></li>
                <li><a href="{{route('sleepwithheadphones')}}"><i class="fas fa-circle"></i> How to Sleep With Headphones</a></li>
                <li><a href="{{ route('salesenablement')}}"><i class="fas fa-circle"></i> Sales Enablement_ What is Sales Onboarding</a></li>
                <li><a href="{{ route('besttool')}}"><i class="fas fa-circle"></i> Use These 6 Best Tools to Convert PDF to Excel Free</a></li>
            </ul>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <!-- <button type="button" class="btn btn-primary">Understood</button> -->
        </div>

        </div>
      </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop-1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel"><i class="fas fa-paste"></i> Long Form Blog Posts </h5>
         
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <div class="modal-body">
            <p>I'm capable of researching various topics and pulling together coherent, informational articles for any audience or demographic. Examples:</p>
            <ul>
                <li><a href="{{ route('mostexpensive')}}"><i class="fas fa-circle"></i> 8 Most Expensive Headphones on the Market </a></li>
                <li><a href="{{ route('bestheadphone')}}"><i class="fas fa-circle"></i> Best Surround Sound Headphones</a></li>
                <li><a href="{{ route('durableearbuds')}}"><i class="fas fa-circle"></i> Most Durable Earbuds and Earphones</a></li>
                <li><a href="{{ route('willowvsfreemie')}}"><i class="fas fa-circle"></i> Willow vs Freemie Breast Pump Comparison</a></li>
            </ul>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <!-- <button type="button" class="btn btn-primary">Understood</button> -->
        </div>

        </div>
      </div>
    </div>    
  

<!-- Modal -->
<div class="modal fade" id="staticBackdrop-2" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel"><i class="fas fa-file-alt"></i> Website Content </h5>
          
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <div class="modal-body">
            <p>I'm capable of researching various topics and pulling together coherent, informational articles for any audience or demographic. Examples:</p>
            <ul>
                <li><a href="{{ route('autoseo')}}"><i class="fas fa-circle"></i> Auto SEO Links </a></li>
                <li><a href="{{ route('creativeportfolio')}}"><i class="fas fa-circle"></i>CreativeRun_Portfolio</a></li>
                <li><a href="{{ route('creativeproduct')}}"><i class="fas fa-circle"></i> CreativeRun_Product</a></li>
                <li><a href="{{ route('creativeservice')}}"><i class="fas fa-circle"></i>CreativeRun_ServicesBox</a></li>
                <li><a href="{{ route('digiirobe')}}"><i class="fas fa-circle"></i> DIGIIROBE_websitecontent</a></li>
                <li><a href="{{ route('pricingpage')}}"><i class="fas fa-circle"></i> Pricing Page - Auto SEO Links_</a></li>
                <li><a href="{{ route('vaperminute')}}"><i class="fas fa-circle"></i> VAPerMinute_Homepage</a></li>
            </ul>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <!-- <button type="button" class="btn btn-primary">Understood</button> -->
        </div>

        </div>
      </div>
    </div>    
  
<!-- Modal -->
<div class="modal fade" id="staticBackdrop-3" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel"><i class="far fa-file-pdf"></i> Case Studies </h5>
          
         
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <div class="modal-body">
            <p>I'm capable of researching various topics and pulling together coherent, informational articles for any audience or demographic. Examples:</p>
            <ul>
                <li><a href="{{ route('casestudy')}}"><i class="fas fa-circle"></i> Auto SEO Links Case Study</a></li>
               
            </ul>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <!-- <button type="button" class="btn btn-primary">Understood</button> -->
        </div>

        </div>
      </div>
    </div>    
  

<!-- Modal -->
<div class="modal fade" id="staticBackdrop-4" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel"><i class="fas fa-tablet-alt"></i> E-book </h5>
          
         
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <div class="modal-body">
            <p>I'm capable of researching various topics and pulling together coherent, informational articles for any audience or demographic. Examples:</p>
            <ul>
                <li><a href="{{ route('dogcare')}}"><i class="fas fa-circle"></i> DogCare_kindle </a></li>
                <li><a href="{{ route('onlinereviews')}}"><i class="fas fa-circle"></i> Online Reviews_ A Winning Formula for Small Business Owners</a></li>
                
            </ul>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <!-- <button type="button" class="btn btn-primary">Understood</button> -->
        </div>

        </div>
      </div>
    </div> 