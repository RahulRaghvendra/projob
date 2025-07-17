@php use Jenssegers\Agent\Facades\Agent; @endphp
@extends('layouts.app')

@section('content')
@include('custom-style')


<section class="hero-section">
    {{--  --}}
    
    {{--  --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 text-center">
                <h1 class="custom-heading" data-aos="fade-up" data-aos-duration="800">We find the best jobs for you</h1>

                <p class="mt-4" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">Search your career opportunity through 12,0800 jobs</p>

                <!-- Search Box -->
                <div class="bg-white p-4 shadow  search-box-rounded mt-3 mt-md-5" data-aos="fade-up" data-aos-delay="600" data-aos-duration="800">
    <div class="row gx-3 gy-3">
        <!-- Job Title -->
        <div class="col-12 col-md-4">
            <div class="d-flex align-items-center">
                <i class="bi bi-search fs-5 me-2"></i>
                <input type="text" class="form-control border-0 shadow-none" placeholder="Job title, keywords…" />
            </div>
        </div>

        <!-- Location -->
        <div class="col-12 col-md-3">
            <div class="d-flex align-items-center">
                <i class="bi bi-geo-alt fs-5 me-2"></i>
                <input type="text" class="form-control border-0 shadow-none" placeholder="City or postcode" />
            </div>
        </div>

        <!-- Category -->
        <div class="col-12 col-md-3">
            <div class="d-flex align-items-center">
                <i class="bi bi-briefcase fs-5 me-2"></i>
                <select class="form-select border-0 shadow-none">
                    <option selected>All Categories</option>
                    <option>IT</option>
                    <option>Marketing</option>
                    <option>BPO</option>
                </select>
            </div>
        </div>

      
        <div class="col-12 col-md-2 order-4">
            <button class="btn btn-dark rounded-pill w-100 px-4 py-2 post-job-btn">Find Jobs</button>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>
</section>
@php
$images = [
  'Amazon.webp', 'Infosys.webp', 'itc.jpg', 'lt.webp', 'rl.jpg', 'tata.webp', 'wipro.webp', 'Zomato.webp'
];

$chunkSize = Agent::isMobile() ? 2 : 6;
    $chunks = array_chunk($images, $chunkSize);
@endphp

<section class="py-5 mt-5"data-aos="fade-up" data-aos-duration="800">
    <div class="col-md-12">
        <div class="text-center"data-aos="fade-up" data-aos-delay="200">
          Trusted by companies of all sizes
          
        </div>
    </div>
  <div class="container mt-3" data-aos="fade-up" data-aos-delay="400">
    <div id="multiImageCarousel" class="carousel slide" >
      <div class="carousel-inner">
        @foreach ($chunks as $chunkIndex => $chunk)
          <div class="carousel-item {{ $chunkIndex === 0 ? 'active' : '' }}">
            <div class="row text-center">
              @foreach ($chunk as $img)
                 <div class="col-6 col-md-2"> 
                  <img src="{{ asset('assets/carousel/' . $img) }}" class="img-fluid p-2 carousel-img" alt="Logo">
                </div>
              @endforeach
            </div>
          </div>
        @endforeach
      </div>

      <!-- Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#multiImageCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bg-success p-2" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#multiImageCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon bg-success  p-2" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</section>
<!-- Job Categories Section -->
<section data-aos="fade-up" data-aos-duration="800">
    <div class="container">
        <div class="col-md-12 justify-content-center">

                  <div class="row">
            <div class="col-12 col-md-6">
                <h2 class="custom-heading-2">Featured Jobs</h2>
                <p class="mt-3">Know your worth and find the job that qualify your life</p>
            </div>
            <div class="col-12 col-md-6 mt-3 mt-md-0 text-md-end">
                <div class="">
                    <a href="#" class="btn underline-train">Browse All Jobs <i class="bi bi-arrow-up-right"></i></a>
                </div>
            </div>
        </div>

        </div> 
    </div>
</section>
<!--job card section-->
@php
$jobs = [
    ['title' => 'Software Engineer', 'location' => 'Mumbai', 'salary' => '10000/Month', 'image' => 'placeholder.png'],
    ['title' => 'Marketing Manager', 'location' => 'Delhi', 'salary' => '25000/Month', 'image' => 'placeholder.png'],
    ['title' => 'HR Executive', 'location' => 'Bangalore', 'salary' => '18000/Month', 'image' => 'placeholder.png'],
    ['title' => 'UI Designer', 'location' => 'Pune', 'salary' => '22000/Month', 'image' => 'placeholder.png'],
    ['title' => 'Data Analyst', 'location' => 'Hyderabad', 'salary' => '28000/Month', 'image' => 'placeholder.png'],
    ['title' => 'Sales Lead', 'location' => 'Chennai', 'salary' => '30000/Month', 'image' => 'placeholder.png'],
];
  $chunkSize = Agent::isMobile() ? 1 : 3;
    $jobChunks = array_chunk($jobs, $chunkSize);
@endphp

<section class="py-5 mt-3 mt-md-5"  data-aos="fade-up" data-aos-duration="800">
  <div class="container">
    <div id="jobCardCarousel" class="carousel slide" data-bs-ride="false">
      <div class="carousel-inner">
        @foreach ($jobChunks as $chunkIndex => $chunk)
          <div class="carousel-item {{ $chunkIndex === 0 ? 'active' : '' }}">
            <div class="row">
              @foreach ($chunk as $job)
                <div class="col-md-4">
                  <article>
                    <div class="card h-100">
                      <div class="card-body">
                        <div class="top-header">
                          <div class="employer-info">
                            <img src="{{ asset('assets/images/' . $job['image']) }}" alt="{{ $job['title'] }}" class="img-fluid" style="width: 50px; height: 50px;">
                          </div>
                          <div class="other-icon">
                            <a href="#" class="btn text-end"><i class="bi bi-bookmark-check"></i></a>
                          </div>
                        </div>
                        <div class="card-inner mt-2">
                          <div class="joblist-content">
                            <h2 class="job-title ms-2">
                              <a href="#">{{ $job['title'] }}</a>
                            </h2>
                          </div>
                          <div class="info ms-2">
                            <div class="detail">
                              <div class="job-detail">
                              <a href="https://projob.co.in/job-category/business-development/" style="" tabindex="-1">Business Development</a>, 
							
                            <a href="https://projob.co.in/job-category/digital-marketing-jobs/" style="" tabindex="-1">Digital Marketing Jobs</a>, 

                            <a href="https://projob.co.in/job-category/digital-sales-jobs/" style="" tabindex="-1">Digital Sales Jobs</a>, 

                            <a href="https://projob.co.in/job-category/hr-job/" style="" tabindex="-1">HR Job</a>, 

                            <a href="https://projob.co.in/job-category/human-resource/" style="" tabindex="-1">Human Resource</a>, 

                            <a href="https://projob.co.in/job-category/marekting-jobs/" style="" tabindex="-1">Marekting Jobs</a>, 

                            <a href="https://projob.co.in/job-category/marketing/" style="" tabindex="-1">Marketing</a>, 

                            <a href="https://projob.co.in/job-category/marketing-jobs/" style="" tabindex="-1">Marketing Jobs</a>, 

                            <a href="https://projob.co.in/job-category/sales-marketing-jobs/" style="" tabindex="-1">Sales &amp; Marketing Jobs</a>
                              </div>
                            </div>
                          </div>
                          <div class="job-metas mt-2">
                            <div class="job-location me-2">
                              <a class="btn btn-outline border rounded-pill px-3 py-1 text-dark">{{ $job['location'] }}</a>
                            </div>
                            <div class="job-salary">
                              <a class="btn btn-outline border rounded-pill px-3 py-1 text-dark">{{ $job['salary'] }}</a>
                            </div>
                          </div>
                          <div class="job-deadline mt-2 ms-2">
                            <strong>Deadline date:</strong>
                          </div>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>
              @endforeach
            </div>
          </div>
        @endforeach
      </div>

      <!-- Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#jobCardCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bg-success rounded-circle p-2" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#jobCardCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon bg-success rounded-circle p-2" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</section>
<!--browse by category section-->
<section  data-aos="fade-up" data-aos-duration="400">
     <div class="container">
        <div class="col-md-12 justify-content-center">

                  <div class="row">
            <div class="col-12 col-md-6">
                <h2 class="custom-heading-2">Browse by Category</h2>
                <p class="mt-3">2020 jobs live - 293 added today.</p>
            </div>
            <div class="col-12 col-md-6 mt-3 mt-md-0 text-md-end">
                <div class="">
                    <a href="#" class="btn underline-train">See All <i class="bi bi-arrow-up-right"></i></a>
                </div>
            </div>
        </div>

        </div> 
    </div>
</section>
<!--browse by category card section-->
<section class="py-5"  data-aos="fade-up" data-aos-duration="800">
  <div class="container">
    <div class="row justify-content-center">
      <!-- Category Item 1 -->
      <div class="col-12 col-md-3 col-lg-2 mb-4">
        <div class="category-card text-center p-3 h-100">
          <div class="category-icon mb-3 mx-auto">
            <img src="{{ asset('assets/images/marketing.png') }}" alt="Marketing" class="img-fluid">
          </div>
          <h6 class="fw-semibold mb-1">Marketing</h6>
          <p class="text-muted small mb-0">(1326 open positions)</p>
        </div>
      </div>
      <!-- Category Item 2 -->
      <div class="col-12 col-md-3 col-lg-2 mb-4">
        <div class="category-card text-center p-3 h-100">
          <div class="category-icon mb-3 mx-auto">
            <img src="{{ asset('assets/images/pen.png') }}" alt="Design" class="img-fluid">
          </div>
          <h6 class="fw-semibold mb-1">Design</h6>
          <p class="text-muted small mb-0">(0 open positions)</p>
        </div>
      </div>
       <!-- Category Item 3 -->
      <div class="col-12 col-md-3 col-lg-2 mb-4">
        <div class="category-card text-center p-3 h-100">
          <div class="category-icon mb-3 mx-auto">
            <img src="{{ asset('assets/images/web.png') }}" alt="Development" class="img-fluid">
          </div>
          <h6 class="fw-semibold mb-1">Development</h6>
          <p class="text-muted small mb-0">(0 open positions)</p>
        </div>
      </div>
      <!-- Category Item 4 -->
      <div class="col-12 col-md-3 col-lg-2 mb-4">
        <div class="category-card text-center p-3 h-100">
          <div class="category-icon mb-3 mx-auto">
            <img src="{{ asset('assets/images/customer.png') }}" alt="Customer" class="img-fluid">
          </div>
          <h6 class="fw-semibold mb-1">Customer</h6>
          <p class="text-muted small mb-0">(0 open positions)</p>
        </div>
      </div>
        <!-- Category Item 5 -->
      <div class="col-12 col-md-3 col-lg-2 mb-4">
        <div class="category-card text-center p-3 h-100">
          <div class="category-icon mb-3 mx-auto">
            <img src="{{ asset('assets/images/kit.png') }}" alt="Healthcare" class="img-fluid">
          </div>
          <h6 class="fw-semibold mb-1">Healthcare</h6>
          <p class="text-muted small mb-0">(0 open positions)</p>
        </div>
      </div>
       <!-- Category Item 6 -->
      <div class="col-12 col-md-3 col-lg-2 mb-4">
        <div class="category-card text-center p-3 h-100">
          <div class="category-icon mb-3 mx-auto">
            <img src="{{ asset('assets/images/car.png') }}" alt="Automotive Jobs" class="img-fluid">
          </div>
          <h6 class="fw-semibold mb-1">Automotive Jobs</h6>
          <p class="text-muted small mb-0">(1 open positions)</p>
        </div>
      </div>

     
    </div>
  </div>
</section>
<!--image text section-->
<section class="py-5" style="background-color:#F5F2EA;">
<div class="container">
     <div class="row mt-4">
        <div class="col-md-8" data-aos="fade-right" data-aos-duration="600">
            <div class="row">
                <div class="col-md-9">
                   <img src="{{ asset('assets/images/20k.png') }}" alt="Automotive Jobs" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="col-md-4 d-flex align-items-center"data-aos="fade-left" data-aos-duration="800">
            <div class="wrapper-element">
                <div class="text-element">
                    <h2 class="custom-heading-2">Looking to Post a Job</h2>
                    <p class="mt-3">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 600,000 companies worldwide.</p>
                   <button  class="mt-3 btn btn-dark rounded-pill  px-4 py-2 post-job-btn"> <a href="#">Post a Job <i class="bi bi-arrow-up-right"></i></a>
                   </button>
                </div>
            </div>
        </div>

     </div>
</div>
</section>
<!--how it works section-->
<section class="py-5" style="background-color: #ffffff;">
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-lg-10 text-center">
        <h2 class="custom-heading-3">How it Works ?</h2>
        <p class="mt-3" style="font-size: 18px;">Find Candidates in 3 easy steps:</p>
        <p class="mt-3 mx-auto" style="max-width: 750px;">
          Getting applied by an expert talent involves attracting highly skilled professionals to apply for your job openings, 
          ensuring your company secures top-tier candidates for its positions.
        </p>
      </div>
    </div>
  </div>
</section>
<!--how it works section with cards-->
@php


    $cards = [
        [
            'image' => 'img1.png',
            'title' => 'Register an account <br> to start',
            'desc' => "To register as a recruiter, visit the recruitment platform's website, select the recruiter sign-up option, fill in the required details, verify your email, and complete your profile to start recruiting."
        ],
        [
            'image' => 'img2.png',
            'title' => 'Explore over thousands <br> of resumes',
            'desc' => "Explore over thousands of resumes to find the perfect candidates for your job openings, leveraging a vast database to match skill sets and experiences with your requirements."
        ],
        [
            'image' => 'img3.png',
            'title' => 'Find the most suitable <br> candidate',
            'desc' => "Explore thousands of resumes to discover ideal candidates for your vacancies, tapping into a broad pool of talents and experiences tailored to your needs."
        ]
    ];
@endphp

<section class="py-5 bg-white">
    <div class="container">
        @if (Agent::isMobile())
            <!-- Mobile Carousel -->
            <div id="howItWorksCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($cards as $index => $card)
                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                            <div class="job-feature-card text-center p-4 h-100">
                                <div class="job-feature-icon mb-3 mx-auto">
                                    <img src="{{ asset('assets/images/' . $card['image']) }}" alt="Step Image" class="img-fluid icon-img">
                                </div>
                                <h6 class="job-feature-title fw-semibold mb-2">{!! $card['title'] !!}</h6>
                                <p class="job-feature-subtext text-muted small mb-0">{{ $card['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#howItWorksCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark rounded-circle p-2"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#howItWorksCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-dark rounded-circle p-2"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        @else
            <!-- Desktop: 3 Cards -->
            <div class="row justify-content-center">
                @foreach ($cards as $card)
                    <div class="col-12 col-md-4 col-lg-4 mb-4">
                        <div class="job-feature-card text-center p-4 h-100">
                            <div class="job-feature-icon mb-3 mx-auto">
                                <img src="{{ asset('assets/images/' . $card['image']) }}" alt="Step Image" class="img-fluid icon-img">
                            </div>
                            <h6 class="job-feature-title fw-semibold mb-2">{!! $card['title'] !!}</h6>
                            <p class="job-feature-subtext text-muted small mb-0">{{ $card['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>
<!--list city section-->
<section class="py-5">
    <div class="container">
        <div class="col-md-12 justify-content-center">

                  <div class="row">
            <div class="col-12 col-md-6">
                <h2 class="custom-heading-2">List Of City Jobs</h2>
                <p class="mt-3">Know your worth and find the job that qualify your life</p>
            </div>
            <div class="col-12 col-md-6 mt-3 mt-md-0 text-md-end">
                <div class="">
                    <a href="#" class="btn underline-train">Browse All Jobs <i class="bi bi-arrow-up-right"></i></a>
                </div>
            </div>
        </div>

        </div> 
    </div>
</section>
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center text-center">
            <!-- Card 1 -->
            <div class="col-6 col-md-4 col-lg-2 mb-4">
                <div>
                    <img src="{{ asset('assets/images/mum.png') }}" alt="Mumbai" class="img-fluid job-city mb-2">
                    <div class="text-start">
                     <h6 class="mt-2 text-start font-city text-start">Mumbai</h6>
                    <span class="number text-start">3679 jobs</span>
                    </div>
                    
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-6 col-md-4 col-lg-2 mb-4">
                <div>
                    <img src="{{ asset('assets/images/delhi.png') }}" alt="Delhi" class="img-fluid job-city mb-2">
                    <div class="text-start">
                        <h6 class="mt-2 text-start font-city">Delhi</h6>
                      <span class="number">2680 jobs</span>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-6 col-md-4 col-lg-2 mb-4">
                <div>
                    <img src="{{ asset('assets/images/bl.png') }}" alt="Bangalore" class="img-fluid job-city mb-2">
                    <div class="text-start">
                        <h6 class="mt-2 text-start font-city">Bangalore</h6>
                      <span class="number ">3521 jobs</span>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="col-6 col-md-4 col-lg-2 mb-4">
                <div>
                    <img src="{{ asset('assets/images/hy.png') }}" alt="Hyderabad" class="img-fluid job-city mb-2">
                      <div class="text-start">
                          <h6 class="mt-2 text-start font-city">Hyderabad</h6>
                      <span class="number ">2742</span>
                      </div>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="col-6 col-md-4 col-lg-2 mb-4">
                <div>
                    <img src="{{ asset('assets/images/pn.png') }}" alt="Pune" class="img-fluid job-city mb-2">
                      <div class="text-start">
                          <h6 class="mt-2 text-start font-city">Pune</h6>
                      <span class="number ">2723 jobs</span>
                      </div>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="col-6 col-md-4 col-lg-2 mb-4">
                <div>
                    <img src="{{ asset('assets/images/cn.png') }}" alt="Chennai" class="img-fluid job-city mb-2">
                     <div class="text-start">
                        <h6 class="mt-2 text-start font-city">Chennai</h6>
                      <span class="number ">2715 jobs</span>
                     </div>
                </div>
            </div>
        </div>
    </div>
</section> 
@push('scripts')
<script>
 document.querySelectorAll('.underline-train').forEach(link => {
    link.addEventListener('mouseenter', () => {
      link.classList.add('hovering');
      link.classList.remove('leaving');
    });

    link.addEventListener('mouseleave', () => {
      link.classList.remove('hovering');
      link.classList.add('leaving');

      // Reset after animation ends (optional, so next time works smoothly)
      setTimeout(() => {
        link.classList.remove('leaving');
      }, 400); // Should match CSS transition duration
    });
  });

</script>
@endpush
@endsection
