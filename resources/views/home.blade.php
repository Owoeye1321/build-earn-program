@extends('layouts.app')
@section('content')
 @if (session('error'))
     <div class="toast fade show float-end mt-3 mx-3" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <svg class="bd-placeholder-img rounded me-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#007aff"></rect></svg>
        <strong class="me-auto">Alerts</strong>
        <small class="text-body-secondary">5 seconds</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
        {{ session('error') }}
      </div>
    </div>
@endif
 @if (session('success'))
  <div class="toast fade show float-end mt-3 mx-3" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <svg class="bd-placeholder-img rounded me-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#007aff"></rect></svg>
        <strong class="me-auto">Alerts</strong>
        <small class="text-body-secondary">5 seconds</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
        {{ session('success') }}
      </div>
    </div>
@endif
<section class ="technology-v1">
   
   <div class="container">
               <div class="row">
                        <div class="col-md-12 text-container">
                            <div class="ot-heading text-center text-white">
                                <span>Build And Earn</span>
                                <h2 class="main-heading">Unlock your potentials and<br> monitize your passion for flexibility</h2>
                            </div>
                        </div>
                    </div>
  {{-- <div class="row">
   <div class="col-sm-12 col-md-8 col-lg-8" >Hello world</div>
   <div class="col-sm-12 col-md-4 col-lg-4" >Hello world</div>
  </div> --}}
</div>
</section>

<section class="service-page">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-8 mb-4 mb-sm-0">
                            <div class="ot-heading mb-0">
                                <span>our services</span>
                                <h2 class="main-heading">We Offer a Wide <br>Variety of IT Services</h2>
                            </div>
                        </div>
                    </div>
                    <div class="space-55"></div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="icon-box-s2 s1 pb-60">
                                <div class="icon-main"><i class="fa fa-code mx-3 fa-lg"></i></div>
                                <div class="content-box">
                                    <span><h5>Unlock Your Potential</h5></span>
                                    <p>"Unlock Your Potential" is an empowering call to action that encourages individuals to realize their fullest capabilities. It's a reminder that each person possesses untapped talents, skills, and opportunities waiting to be explored. By embracing this mantra, you open the door to self-discovery and personal growth. It's an invitation to break free from self-imposed limitations, take risks, and pursue your aspirations with confidence and determination. Whether in your career, personal life, or any other endeavor, unlocking your potential is the key to reaching new heights and achieving your dreams.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="icon-box-s2 s1 xs-pb-60">
                                <div class="icon-main"><span class="fa fa-file mx-3 fa-lg"></span></div>
                                <div class="content-box">
                                    <h5>Monetize Your Passion</h5>
                                    <p>"Monetize Your Passion" is a mantra that encourages individuals to transform their hobbies, interests, and skills into a source of income. It's a reminder that you don't have to choose between what you love and financial stability. By following your passions and finding innovative ways to make money from them, you not only generate income but also experience a deeper sense of fulfillment and purpose. Whether it's through entrepreneurship, freelancing, or creative pursuits, monetizing your passion is the gateway to a more rewarding and sustainable way of life. It's an invitation to pursue your dreams while building a successful and prosperous future.. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="icon-box-s2 s1 xs-pb-60">
                                <div class="icon-main"><span class="fa fa-file mx-3 fa-lg"></span></div>
                                <div class="content-box">
                                    <h5>Flexibility</h5>
                                    <p>"Flexibility" is a concept that underscores the importance of adaptability in life and work. It encourages individuals to embrace change and tailor their approaches to fit their unique circumstances. Flexibility allows you to set your own schedule, choose your projects, and strike a balance between work and personal life. Whether you're an entrepreneur, a remote worker, or pursuing creative endeavors, flexibility offers the freedom to define your own path. It's a reminder that you have the power to shape your life in a way that aligns with your values and priorities, making it an integral aspect of achieving a fulfilling and well-balanced existence..</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="icon-box-s2 s1 pb-60">
                                <div class="icon-main"><span class="fa fa-file mx-3 fa-lg"></span></div>
                                <div class="content-box">
                                    <h5>Learn and Grow</h5>
                                    <p>"Learn and Grow" is a philosophy that encourages individuals to adopt a mindset of continuous self-improvement. It underscores the value of expanding one's knowledge, skills, and experiences throughout life. By embracing a commitment to learning, you can enhance your personal and professional development. This mantra serves as a reminder that every experience, whether successful or challenging, offers opportunities for growth. It's an invitation to explore new horizons, seek out fresh perspectives, and evolve into the best version of yourself. Learning and growing is a lifelong journey that leads to greater fulfillment and success.. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="icon-box-s2 s1 pb-60">
                                <div class="icon-main"><span class="fa fa-cloud mx-3 fa-lg"></span></div>
                                <div class="content-box">
                                    <h5>Financial Rewards</h5>
                                    <p>"Financial Rewards" is a phrase that highlights the potential for monetary gain in various endeavors. It's a reminder that your hard work, dedication, and expertise can lead to tangible and significant financial benefits. Whether you're pursuing a career, entrepreneurial ventures, or creative projects, financial rewards are the result of your commitment and effort. These rewards can provide security, fund your aspirations, and create opportunities for a better quality of life. "Financial Rewards" encourages you to set and achieve your financial goals, ultimately empowering you to enjoy the fruits of your labor and invest in your future..</p>
                                </div> 
                            </div>
                        </div>
                     
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="icon-box-s2 s1">
                                <div class="icon-main"><span class="fa fa-lock mx-3 fa-lg"></span></div>
                                <div class="content-box">
                                    <h5>Exclusive Opportunities</h5>
                                    <p>Exclusive opportunities are the gateways to unique and extraordinary experiences. They are the rare chances that go beyond the ordinary, opening doors to personal and professional growth. These exceptional moments challenge you, connect you with influential networks, and often set you on a path to a future filled with unparalleled achievements. Embracing exclusive opportunities can be a defining moment in your life, urging you to explore uncharted territories and discover your true potential.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="apply-section">

                <div class="row ">
                    <div class="col-sm-12 col-md-7 col-lg-7 align-self-center" style="padding-left: 30px"">
                        <div class="illusion">
                            <img src="images/image-box1.jpg" style="height: 600px; width: 100%" alt="">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-5 col-lg-5 px-5">
                        <div class="bigger-text mb-0">
                                <span>Apply</span>
                        </div>
                        <div class="form-class">
                         @include('layouts.form')
                        </div>
                  
                        
                    </div>

                </div>

            </section>
           
   @extends('layouts.footer')

@endsection
