@extends('layouts.app')

@section('content')



    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary d-flex align-items-center mb-5 py-5" id="home" style="min-height: 100vh;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 px-5 pl-lg-0 pb-5 pb-lg-0">
                    
                    <img  src="{{ asset('images/faces/code.png') }}" alt="Description de l'image">

                </div>
                <div class="col-lg-7 text-center text-lg-left">
                    <h3 class="text-white font-weight-normal mb-3">Je suis</h3>                         
                    <!-- <h1 class="display-3 text-uppercase text-primary mb-2" style="-webkit-text-stroke: 2px #ffffff;">{{ $user?->name }}</h1> -->
                    <h1 class="display-3 text-uppercase text-primary mb-2" style="-webkit-text-stroke: 2px #ffffff;">Talla kebe</h1>

                    <h1 class="typed-text-output d-inline font-weight-lighter text-white"></h1>
                    <div class="typed-text d-none">Developpeur Full Stack</div>
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                        <!-- <a href="{{ $setting->cv_url }}" class="btn btn-outline-light mr-5">Telechager mon CV</a> -->
                        <!-- Bouton pour afficher le CV -->
                        <a href="{{ asset('storage/cv/mon_cv.pdf') }}" target="_blank" class="btn btn-outline-light mr-3">Voir mon CV</a>

                        <!-- Bouton pour télécharger le CV -->
                        <a href="{{ asset('storage/cv/mon_cv.pdf') }}" class="btn btn-outline-light" download>Telecharger mon CV</a>
                        <!-- <button type="button" class="btn-play" data-toggle="modal"
                            data-src="{{$setting->video_url }}" data-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="font-weight-normal text-white m-0 ml-4 d-none d-sm-block">Play Video</h5> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5" id="about">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">A propos</h1>
                <h1 class="position-absolute text-uppercase text-primary">A propos de moi</h1>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid rounded w-100" src="{{ $setting->about_photo }}" alt="">
                </div>
                <div class="col-lg-7">
                    <h3 class="mb-4">{{ $setting->about_title }}</h3>
                    <p>{{ $setting?->about_description }}</p>
                    <div class="row mb-3">
                        <div class="col-sm-6 py-2"><h6>Nom et Prenom: <span class="text-secondary">Talla KEBE</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Date de naissance: <span class="text-secondary">02-08-2000</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Niveau d'etude: <span class="text-secondary">BTS en Developpement Backend</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Experience: <span class="text-secondary">2 ans</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Telephone: <span class="text-secondary">70 677 77 17</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Email: <span class="text-secondary">kebedev313@gmail.com</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Address: <span class="text-secondary">Dakar/Guediawaye</span></h6></div>
                    </div>
                    <a href="#contact" class="btn btn-outline-primary mr-4">Engagez-moi</a>
                    {{-- <a href="" class="btn btn-outline-primary">Learn More</a> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Qualification Start -->
    <div class="container-fluid py-5" id="qualification">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Qualification</h1>
                <h1 class="position-absolute text-uppercase text-primary">Education & Expericence</h1>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h3 class="mb-4">Mon éducation</h3>
                    <div class="border-left border-primary pt-2 pl-4 ml-2">
                        @foreach ($educations as $education)
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">{{ $education->title }}</h5>
                            <p class="mb-2"><strong>{{ $education->association }}</strong> | <small>{{ $education->from }} - {{ $education->to }}</small></p>
                            <p>{{ $education->description }} </p>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-4">Mon Expericence</h3>
                    <div class="border-left border-primary pt-2 pl-4 ml-2">
                        @foreach ($experiences as $experience)
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">{{ $experience->title }}</h5>
                            <p class="mb-2"><strong>{{ $experience->association }}</strong> | <small>{{ $experience->from }} - {{ $experience->to }}</small></p>
                            <p>{{ $experience->description }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Qualification End -->


    <!-- Skill Start -->
    <div class="container-fluid py-5" id="skill">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">compétences</h1>
                <h1 class="position-absolute text-uppercase text-primary">Mes compétences</h1>
            </div>
            <div class="row align-items-center">
                @foreach($skills->split($skills->count()/5) as $row)
                <div class="col-md-6">
                    @foreach($row as $skill)
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">{{ $skill->name }}</h6>
                            <h6 class="font-weight-bold">{{$skill->percent}}%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="{{$skill->percent}}" aria-valuemin="0" aria-valuemax="100" style="background-color: {{$skill->color}}"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Skill End -->


    <!-- Services Start -->
    <div class="container-fluid pt-5" id="service">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Service</h1>
                <h1 class="position-absolute text-uppercase text-primary">Mes Services</h1>
            </div>
            <div class="row pb-3">
            @foreach ($services as $service)
                <div class="col-lg-4 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="{{ $service->icon }} service-icon bg-primary text-white mr-3"></i>
                        <h4 class="font-weight-bold m-0">{{ $service->name }}</h4>
                    </div>
                    <p>{{ $service->description }}</p>
                </div>
            @endforeach
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Portfolio Start -->
    <div class="container-fluid pt-5 pb-3" id="portfolio">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Galerie</h1>
                <h1 class="position-absolute text-uppercase text-primary">Mon portfolio</h1>
            </div>
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4" id="portfolio-flters">
                        <li class="btn btn-sm btn-outline-primary m-1 active"  data-filter="*">Tout</li>
                        @foreach ($categories as $category)
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".{{$category->name}}">{{ $category->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container">
    @foreach ($portfolios as $portfolio)
    <div class="col-lg-4 col-md-6 mb-4 portfolio-item {{ $portfolio->category->name }}">
        <div class="position-relative overflow-hidden mb-2">
            <!-- Display the image with the correct path -->
            <img class="img-fluid rounded w-100" src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->title }}">
            
            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                <!-- Icon for linking to project details -->
                <a href="{{ $portfolio->project_url }}" data-lightbox="portfolio">
                    <i class="fa fa-plus text-white" style="font-size: 50px;"></i>
                </a>
                <a href="{{ $portfolio->project_url }}" data-lightbox="portfolio">
                    <i class="fa-solid fa-link text-white" style="margin-left:20px; font-size: 50px;"></i>
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>

        </div>
    </div>
    <!-- Portfolio End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5" id="testimonial">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Revoir</h1>
                <h1 class="position-absolute text-uppercase text-primary">LES CLIENTS DISENT</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
                        @foreach ($reviewers as $review)
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4">{{ $review->description }}</h4>
                            <img class="img-fluid rounded-circle mx-auto mb-3" src="{{ asset('storage/' . $review->image) }}" style="width: 80px; height: 80px;">
                            <h5 class="font-weight-bold m-0">{{ $review->name }} </h5>
                            <span>{{ $review->job }}</span>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Contact Start -->
    <div class="container-fluid py-5" id="contact">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Contact</h1>
                <h1 class="position-absolute text-uppercase text-primary">Contactez Moi</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form text-center">
                        @if (Session::has('message'))
                        <div class="alert alert-primary" role="alert">
                          {{ Session::get('message') }}
                        </div>
                        <br>
                        @endif
                        <form id="contactForm" method="POST" action="{{ route('contact') }}">
                            @csrf
                            <div class="form-row">
                                <div class="control-group col-sm-6">
                                    <input type="text" class="form-control p-4" id="name" placeholder="Your Name"
                                        required name="name" value="{{old('name')}}"/>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group col-sm-6">
                                    <input type="email" class="form-control p-4" id="email" placeholder="Your Email" value="{{old('email')}}"
                                        required name="email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="subject" placeholder="Subject" value="{{old('subject_mail')}}"
                                    required name="subject_mail"/>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control py-3 px-4" rows="5" id="message" placeholder="Message" name="content"
                                    required>{{old('content')}}</textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Envoyer
                                    Message</button>
                            </div>
                            @if ($errors->any())
                            <br>
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                             @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-primary text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="container text-center py-5">
            <div class="d-flex justify-content-center mb-4">
                <a class="btn btn-light btn-social mr-2" href="{{ $setting->github_url }}"><i class="fab fa-github"></i></a>
                <a class="btn btn-light btn-social mr-2" href="{{ $setting->fb_url }}"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-light btn-social mr-2" href="{{ $setting->linkedin_url }}"><i class="fab fa-linkedin-in"></i></a>
            </div>
        <!-- Bouton de connexion -->
        <a href="{{ route('login') }}" class="btn btn-outline-light">Se connecter</a>
            <div class="d-flex justify-content-center mb-3">
                <a class="text-white" href="#">Confidentialité</a>
                <span class="px-3">|</span>
                <a class="text-white" href="#">Termes</a>
                <span class="px-3">|</span>
                <a class="text-white" href="#">FAQs</a>
                <span class="px-3">|</span>
                <a class="text-white" href="#">Aide</a>
            </div>
            <p class="m-0">&copy; <a class="text-white font-weight-bold" href="#">Nom de domaine</a>. Tous droits réservés. Conçu par <a class="text-white font-weight-bold" href="https://htmlcodex.com">KebeDEV</a>
            </p>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Scroll to Bottom -->
    <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>

    <!-- Back to Top -->
    <a href="#" class="btn btn-outline-dark px-0 back-to-top"><i class="fa fa-angle-double-up"></i></a>

@endsection


