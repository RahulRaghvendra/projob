<style>
    /* dropdown */
</style>


<div class="container-fluid"
    style="background-image: url('{{ asset('assets/images/gigw.jpg') }}'); background-size: cover; background-position: center;">
    <section class ="header"
        style="
                padding: 6px;
                padding-left: 40px;
                padding-right: 40px;
            ">
        <div class="row">
            <div class="col-md-8 col-lg-8">
                <div class="nav-wrapper"style="
                        padding-left: 13px;
                        /* padding: 12px; */
                        padding-top: 19px;
                        padding-bottom: 16px;
                    
                        margin-right: 20px;
                    ">
                    <nav class="navbar navbar-expand-lg navbar-light bg-transparent position-relative ">

                        <a class="navbar-brand" href="#">
                            <span>
                                <img src="{{ asset('assets/images/logo.png') }}" alt="Logo"
                                    style="height:49px; width:270px">
                            </span>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav"
                                style="
                                padding-left: 16px;
                            ">
                                <li class="nav-item dropdown mega-dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="homeDropdown" role="button">
                                        Home
                                    </a>
                                    <div class="dropdown-menu mega-menu p-4" aria-labelledby="homeDropdown"
                                        style= "width:700px;">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <a class="dropdown-item" href="#">About Us</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown mega-dropdown ms-5">
                                    <a class="nav-link dropdown-toggle" href="#" id="findJobsDropdown"
                                        role="button">
                                        Find Jobs
                                    </a>
                                    <div class="dropdown-menu mega-menu p-4" aria-labelledby="findJobsDropdown"
                                        style="width: 700px;">
                                        <div class="row">
                                            <!-- Left Column (Functions + Industry) -->
                                            <div class="col-md-6">
                                                <h6 class="dropdown-header">Jobs by Function</h6>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <a class="dropdown-item" href="#">Marketing Jobs</a>
                                                        <a class="dropdown-item" href="#">Sales Jobs</a>
                                                        <a class="dropdown-item" href="#">Human Resource</a>
                                                        <a class="dropdown-item" href="#">Finance/Banking Jobs</a>
                                                        <a class="dropdown-item" href="#">Automotive Jobs</a>
                                                        <a class="dropdown-item" href="#">Customer</a>
                                                        <a class="dropdown-item" href="#">Design</a>
                                                    </div>
                                                    <div class="col-6">
                                                        <a class="dropdown-item" href="#">IT Jobs</a>
                                                        <a class="dropdown-item" href="#">Engineering Jobs</a>
                                                        <a class="dropdown-item" href="#">BPO Jobs</a>
                                                        <a class="dropdown-item" href="#">Manufacturing Jobs</a>
                                                        <a class="dropdown-item" href="#">Hospitality Jobs</a>
                                                        <a class="dropdown-item" href="#">Real Estate Jobs</a>
                                                        <a class="dropdown-item" href="#">Development</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Right Column (Location) -->
                                            <div class="col-md-6">
                                                <h6 class="dropdown-header">Jobs by Location</h6>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <a class="dropdown-item" href="#">Jobs In Delhi</a>
                                                        <a class="dropdown-item" href="#">Jobs In Kolkata</a>
                                                        <a class="dropdown-item" href="#">Jobs In Mumbai</a>
                                                        <a class="dropdown-item" href="#">Jobs In Ahmedabad</a>
                                                        <a class="dropdown-item" href="#">Jobs In Bangalore</a>
                                                        <a class="dropdown-item" href="#">Jobs In Noida</a>
                                                        <a class="dropdown-item" href="#">Jobs In Pune</a>

                                                    </div>
                                                    <div class="col-6">
                                                        <a class="dropdown-item" href="#">Jobs In Surat</a>
                                                        <a class="dropdown-item" href="#">Jobs In Chennai</a>
                                                        <a class="dropdown-item" href="#">Jobs In Jaipur</a>
                                                        <a class="dropdown-item" href="#">Jobs In Hyderabad</a>
                                                        <a class="dropdown-item" href="#">Jobs In Lucknow</a>
                                                        <a class="dropdown-item" href="#">Jobs In
                                                            Visakhapatnam</a>
                                                        <a class="dropdown-item" href="#">Jobs In Indore</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown mega-dropdown ms-5">
                                    <a class="nav-link dropdown-toggle" href="#" id="Employersdropdown"
                                        role="button">
                                        Employers
                                    </a>
                                    <div class="dropdown-menu mega-menu p-4" aria-labelledby="Employersdropdown"
                                        style= "width:400px;">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6 class="dropdown-header">Employers Style</h6>
                                                <a class="dropdown-item" href="#">Employers - List</a>
                                                <a class="dropdown-item" href="#">Internship</a>
                                            </div>
                                            <div class="col-md-6">
                                                <h6 class="dropdown-header">Employers Single</h6>
                                                <a class="dropdown-item" href="#">Login / Register</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown mega-dropdown ms-5">
                                    <a class="nav-link dropdown-toggle" href="#" id="candidateDropdown"
                                        role="button">
                                        Candidates
                                    </a>
                                    <div class="dropdown-menu mega-menu p-4" aria-labelledby="candidateDropdown"
                                        style= "width:400px;">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6 class="dropdown-header">Candidates Style</h6>
                                                <a class="dropdown-item" href="#">job list</a>
                                                <a class="dropdown-item" href="#">Courses</a>
                                                <a class="dropdown-item" href="#">Learn</a>
                                                <a class="dropdown-item" href="#">Read</a>
                                            </div>
                                            <div class="col-md-6">
                                                <h6 class="dropdown-header">Candidates Single</h6>
                                                <a class="dropdown-item" href="#">Login/Register</a>
                                                <a class="dropdown-item" href="#">Register Candidate</a>
                                                <a class="dropdown-item" href="#">Interview Tips</a>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown mega-dropdown ms-5">
                                    <a class="nav-link dropdown-toggle" href="#" id="pageDropdown"
                                        role="button">
                                        Pages
                                    </a>
                                    <div class="dropdown-menu mega-menu p-4" aria-labelledby="homeDropdown"
                                        style= "width:200px;">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <a class="dropdown-item" href="#">Blog</a>
                                                <a class="dropdown-item" href="#">About Us</a>
                                                <a class="dropdown-item" href="#">Contact</a>
                                                <a class="dropdown-item" href="#">FAQs</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 d-flex justify-content-end align-items-center gap-3"
                style="padding-top: 0px;">
                <div class="row">
                    <div class="col-md-6 wrapper">
                        <div class="login ">
                            <a href="#" class="btn nav-job-btn rounded-pill">Login/Register</a>
                        </div>
                    </div>
                    <div class="col-md-6 add-job">
                        <div class="add-job">
                            <a href="#" class="btn btn-dark rounded-pill px-4">Add Job</a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
</div>
</section>
</div>
