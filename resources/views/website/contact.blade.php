@extends('website.layouts.template')
@section('title', 'Contact')
@section('content')
<!-- bradcam_area_start -->
<div class="container mt-5 mb-5">
        <div class="row">
        <div class="col-md-6 ">
        <h4 class="contact-care">Contact Us.....</h4>  
        </div>   
          
        </div>  
        </div>
<!-- bradcam_area_end -->
<!-- ================ contact section start ================= -->
<section class="contact-section">
   <div class="container">
      <div class="row">
         <div class="col-12">
             @if(Session::has('message'))
        <div class="alert {{ Session::get('alert-class', 'alert-info') }} alert-dismissible fade show" role="alert">{!! session('message') !!}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         @endif
            <h2 class="contact-title">Get in Touch</h2>
         </div>
         <div class="col-lg-6">
            <form class="" action="{{ route('handle_email_query') }}" method="post" id="contactForm" novalidate="novalidate" >
                {{ csrf_field()  }}
               <div class="row">
                  <div class="col-12">
                     <div class="form-group">
                        <textarea class="form-control w-100 {{ showErrorClass($errors,'message') }}" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Name">{{ old('message') }}</textarea>
                        <div class="invalid-feedback d-block">{{ showError($errors,'message') }}</div>
                     </div>                     
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group">
                        <input class="form-control {{ showErrorClass($errors,'name') }}" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name" value="{{ old('name') }}">
                        <div class="invalid-feedback d-block">{{ showError($errors,'name') }}</div>
                     </div>                     
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group">
                        <input class="form-control {{ showErrorClass($errors,'email') }}" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email" value="{{ old('email') }}">
                        <div class="invalid-feedback d-block">{{ showError($errors,'email') }}</div>
                     </div>                     
                  </div>
                  <div class="col-12">
                     <div class="form-group">
                        <input class="form-control {{ showErrorClass($errors,'subject') }}" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject" value="{{ old('subject') }}">
                        <div class="invalid-feedback d-block">{{ showError($errors,'subject') }}</div>
                     </div>                     
                  </div>
               </div>
               <div class="form-group mt-3">
                  <button type="submit" class="button button-contactForm boxed-btn">
                     <i class="far fa-paper-plane"></i> Send</button>
               </div>
            </form>
         </div>

         <div class="col-lg-5 offset-lg-1">
            <div class="media contact-info">
               <span class="contact-info__icon"><i class="fas fa-home"></i></span>
               <div class="media-body">
                  <h3>{!! nl2br(Purifier::clean(settings('company_address'))) !!}</h3>
               </div>
            </div>
            <div class="media contact-info">
               <span class="contact-info__icon"><i class="fas fa-phone-alt"></i></span>
               <div class="media-body">
                  <h3>{!! Purifier::clean(settings('company_phone')) !!}</h3>
               </div>
            </div>
            <div class="media contact-info">
               <span class="contact-info__icon"><i class="far fa-envelope-open"></i></span>
               <div class="media-body">
                  <h3>{!! Purifier::clean(settings('company_email')) !!}</h3>
               </div>
            </div>
            &nbsp
            &nbsp
<div class="col-md-6 ">
            <h4 class="contact-social-1" style="color:red;">CONNECT WITH US.....</h4>
            <hr> 
            <div>@if($link = settings('twitter'))
                <a href="{{ $link }}" target="_blank"><i class="fab fa-twitter"></i></a>
                @endif
                &nbsp
                @if($link = settings('facebook'))
                <a href="{{ $link }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                @endif
                &nbsp
                @if($link = settings('instagram'))
                <a href="{{ $link }}" target="_blank"><i class="fab fa-instagram"></i></a>
                @endif
                &nbsp
                
                @if($link = settings('linkedin'))
                <a href="{{ $link }}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            @endif
            &nbsp
            @if($link = settings('skype'))
                <a href="{{ $link }}" target="_blank"><i class="fab fa-skype"></i></a>
                
             @endif </div> 
            </div>  
            
    
         </div>

      </div>

   </div>

</section>
@include('website.layouts.footer')
<!-- ================ contact section end ================= -->
@endsection