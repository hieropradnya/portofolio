<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Resume - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script
            src="https://use.fontawesome.com/releases/v6.3.0/js/all.js"
            crossorigin="anonymous"
        ></script>
        <!-- Google fonts-->
        <link
            href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700"
            rel="stylesheet"
            type="text/css"
        />
        <link
            href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i"
            rel="stylesheet"
            type="text/css"
        />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('depan') }}/css/styles.css" rel="stylesheet" />
        
        <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />
        <style>
            body {
                background-image: url('{{ asset("foto/bgimage.jpg") }}');
                background-position: center;
                background-size: cover;
                 background-repeat: repeat-y;
            }
        </style>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav
            class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top"
            id="sideNav"
        >
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">{{ $about->judul }}</span>
                <span class="d-none d-lg-block"
                    ><img
                        class="img-fluid img-profile rounded-circle mx-auto mb-2"
                        src="{{ asset('foto') . '/' . get_meta_value('_foto') }}"
                        alt="..."
                /></span>
            </a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about"
                            >About</a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#experience"
                            >Experience</a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#education"
                            >Education</a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#skills"
                            >Skills</a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#interests"
                            >Interests</a
                        >
                    </li>
                    
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        {{ $about->judul }}
                    </h1>
                    <div class="subheading mb-5">
                        Computer Science Student - Web Developer - Programmer. 
                    </div>
                    <div class="lead mb-5">
                        {!! $about->isi !!}
                    </div>
                    <div class="social-icons">
                        <a class="social-icon" href="{{get_meta_value('_linkedin')}}"
                            ><i class="fab fa-linkedin-in"></i
                        ></a>
                        <a class="social-icon" href="{{get_meta_value('_github')}}"
                            ><i class="fab fa-github"></i
                        ></a>
                        <br><br>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Experience</h2>
                    @foreach ($experience as $item)
                            <div
                            class="d-flex flex-column flex-md-row justify-content-between mb-5"
                        >
                            <div class="flex-grow-1">
                                <h3 class="mb-0">{{ $item->judul }}</h3>
                                <div class="subheading mb-3">
                                    {{ $item->info1 }}
                                </div>
                                {!! $item->isi !!}
                            </div>
                            <div class="flex-shrink-0">
                                <span class="text-primary"
                                    >{{ $item->tgl_mulai_indo }} - {{ $item->tgl_akhir_indo }}</span
                                >
                            </div>
                        </div>
                    @endforeach
                    
                </div>
            </section>
            <hr class="m-0" />
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Education</h2>
                    @foreach ($education as $item)
                    <div
                        class="d-flex flex-column flex-md-row justify-content-between mb-5"
                    >
                        <div class="flex-grow-1">
                            <h3 class="mb-0">{{ $item->judul }}</h3>
                            <div class="subheading mb-3">
                                {{ $item->info1 }}
                            </div>
                            <div>{{ $item->info2 }}</div>
                            <p>{{ $item->info3 }}</p>
                        </div>
                        <div class="flex-shrink-0">
                            <span class="text-primary"
                                >{{ $item->tgl_mulai_indo }} - {{ $item->tgl_akhir_indo }}</span
                            >
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Skills</h2>
                    <div class="subheading mb-3">
                        Programming Languages & Tools
                    </div>
                    <ul class="list-inline dev-icons">
                        @foreach (explode(', ', get_meta_value('_language')) as $item)
                            <li class="list-inline-item"><i class="devicon-{{ strtolower($item) }}-plain"></i></li>
                        @endforeach
                        
                    </ul>
                    <br>
                    <div class="subheading mb-3">Workflow</div>
                    {!! get_meta_value('_workflow') !!}
                </div>
            </section>
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Project</h2>
                    <div class="row">
                        <div class="col-md-6 mb-5">
                          <div class="card">
                            <img src="{{ asset('foto') }}/image.jpg" class="card-img-top" alt="..."  />
                            <div class="card-body">
                              <h5 class="card-title">BMI Calculator</h5>
                              <p class="card-text">Use HTML CSS JavaScript to build a Body Mass Weight Calculator</p>
                              <a href="https://hieropradnya.github.io/bmi-calculator/" class="btn btn-primary">Try it!</a>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Interests-->
            <section class="resume-section" id="interests">
                <div class="resume-section-content">
                    <h2 class="mb-5">{{ $interest->judul }}</h2>
                    {!! $interest->isi !!}
                </div>
            </section>
            <hr class="m-0" />
            
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('depan') }}/js/scripts.js"></script>
    </body>
</html>
