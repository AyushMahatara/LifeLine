@extends('frontend.app')
@section('content')
<section class="hero">
    <div class="container-fluid h-100">
        <div class="row h-100">

            <div id="carouselExampleCaptions" class="carousel carousel-fade hero-carousel slide"
                data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container position-relative h-100">
                            <div class="carousel-caption d-flex flex-column justify-content-center">
                                <small class="small-title">Introducing LifiLine <strong
                                        class="text-warning"></strong></small>

                                <h1>We're Here to<span class="text-warning"> Help</span> You Achieve <span
                                        class="text-warning">Optimal Health</span></h1>

                                <div class="d-flex align-items-center mt-4">
                                    <a class="custom-btn btn custom-link" href="#section_2">Health Tips</a>

                                    <a class="popup-youtube custom-icon d-flex ms-4"
                                        href="https://www.youtube.com/watch?v=xNoanoQ5syY&ab_channel=Dr.EricBergDC">
                                        <i class="bi-play play-icon d-flex m-auto text-white"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-image-wrap">
                            <img src="images/slide/slide1.jpg" class="img-fluid carousel-image" alt="">
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="container position-relative h-100">
                            <div class="carousel-caption d-flex flex-column justify-content-center">
                                <small class="small-title">Introducing LifiLine <strong
                                        class="text-warning"></strong></small>

                                <h1>We're Here to<span class="text-warning"> Help</span> You Achieve <span
                                        class="text-warning">Optimal Health</span></h1>

                                <div class="d-flex align-items-center mt-4">
                                    <a class="custom-btn btn custom-link" href="#section_2">Health Tips</a>

                                    <a class="popup-youtube custom-icon d-flex ms-4"
                                        href="https://www.youtube.com/watch?v=VStvZjykQ00">
                                        <i class="bi-play play-icon d-flex m-auto text-white"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-image-wrap">
                            <img src="images/slide/slide2.jpg" class="img-fluid carousel-image" alt="">
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="about section-padding" id="section_2">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                <div class="about-image-wrap h-100">
                    <img src="images/peter-jones-WZROBIlY8Rg-unsplash.jpg" class="img-fluid about-image" alt="">

                    <div class="about-image-info">
                        <h4 class="text-white">Dr. Mahatara</h4>

                        <p class="text-white mb-0">Skipping meals can lead to overeating later in the day. Try to eat
                            regular meals and snacks throughout the day to keep your hunger and energy levels stable.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-12 d-flex flex-column">
                <div class="about-thumb bg-white shadow-lg">

                    <div class="about-info">
                        <small class="small-title"><strong class="text-warning">Diet</strong> &<strong
                                class="text-warning"> Nutrition</strong></small>


                        <h5 class="mb-3">Fuel your body with the nutrients it needs for a healthier you!</h5>

                        <p>Diet and nutrition refer to the food and nutrients that we consume to fuel our bodies and
                            maintain good health. A healthy diet includes a variety of foods from all food groups, such
                            as fruits, vegetables, whole grains, lean proteins, and healthy fats. Nutrients are
                            essential substances that our bodies need to function properly, and they come from the food
                            we eat.</p>

                        <p>A balanced diet provides all the necessary nutrients in the right proportions to meet our
                            body's needs. Some of the essential nutrients include carbohydrates, proteins, fats,
                            vitamins, minerals, and water. Carbohydrates provide energy, while proteins are important
                            for building and repairing muscles and tissues. Fats are important for insulation and
                            cushioning of our vital organs. Vitamins and minerals play a vital role in various bodily
                            functions, such as strengthening the immune system, bone health, and blood circulation.
                            Water is essential for the body to function properly and helps maintain hydration. </p>

                        <p>A healthy diet can help prevent chronic diseases such as heart disease, diabetes, and
                            obesity. It can also help improve our mental and emotional well-being. On the other hand, a
                            poor diet can lead to malnutrition, weight gain, and chronic health problems.</p>

                        <p> It's important to consult a healthcare professional or a registered dietitian to create
                            a
                            personalized nutrition plan based on individual needs and health conditions.</p>
                    </div>
                </div>

                {{-- <div class="row h-100">
                    <div class="col-lg-6 col-6">
                        <div class="about-thumb d-flex flex-column justify-content-center bg-danger mb-lg-0 h-100">

                            <div class="about-info">
                                <h5 class="text-white mb-4">We're growing business dolor</h5>

                                <a class="custom-btn btn custom-bg-primary" href="#section_3">Join us</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-6">
                        <div class="about-thumb d-flex flex-column justify-content-center bg-warning mb-lg-0 h-100">

                            <div class="about-info">
                                <h5 class="text-white mb-4">How did you about us?</h5>

                                <p class="text-white mb-0">Lorem ipsum dolor sit consectetur</p>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>

        </div>
    </div>
</section>

<section class="services section-padding" id="section_3">
    <div class="container">
        <div class="row">

            <div class="col-lg-10 col-12 text-center mx-auto mb-5">
                <small class="small-title"><strong class="text-warning">Health Tips</strong> &<strong
                        class="text-warning">
                        Guidance</strong></small>

                <h5>Small changes, big impact: Tips and guidance for a healthier you!</h5>

            </div>

            <div class="col-lg-6 col-12">
                <nav>
                    <div class="nav nav-tabs flex-column align-items-baseline" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-business-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-business" type="button" role="tab" aria-controls="nav-business"
                            aria-selected="true">
                            <h3>Stay hydrated</h3>
                            <ul>
                                <li>Drink enough water.
                                </li>

                                <li> Carry a reusable water bottle.
                                </li>

                                <li> Drink water before, during, and after exercise.
                                </li>
                                <li>
                                    Monitor urine color.
                                </li>
                                <li>Avoid excessive caffeine and alcohol consumption</li>
                            </ul>

                        </button>

                        <button class="nav-link" id="nav-strategy-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-strategy" type="button" role="tab" aria-controls="nav-strategy"
                            aria-selected="false">
                            <h3>Eat a Balanced Diet</h3>

                            <ul>
                                <li>Include a variety of fruits and vegetables in your meals</li>
                                <li>Choose whole grains over refined grains</li>
                                <li>Incorporate lean proteins</li>
                                <li>Limit processed and sugary foods</li>
                                <li>Don't forget about healthy fats</li>
                            </ul>
                        </button>

                        <button class="nav-link" id="nav-video-tab" data-bs-toggle="tab" data-bs-target="#nav-video"
                            type="button" role="tab" aria-controls="nav-video" aria-selected="false">
                            <h3>Get regular physical activity</h3>

                            <ul>
                                <li>Find activities you enjoy</li>
                                <li>Set achievable goals</li>
                                <li>Make it a habit</li>
                                <li>Get a workout buddy</li>
                                <li>Take breaks and listen to your body</li>
                            </ul>
                        </button>
                    </div>
                </nav>
            </div>

            <div class="col-lg-6 col-12">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-business" role="tabpanel"
                        aria-labelledby="nav-intro-tab">
                        <img src="images/services/hydrate.jpg" class="img-fluid" alt="">

                        <h5 class="mt-4 mb-2">Stay refreshed and energized by keeping your body hydrated with plenty of
                            water.</h5>



                        <ul>
                            <li>Drink enough water: The general recommendation is to drink at least 8 cups (64 ounces)
                                of water per day, but individual needs may vary based on factors such as age, sex, and
                                activity level.
                            </li>

                            <li> Carry a reusable water bottle: Carrying a reusable water bottle with you can make it
                                easier to drink enough water throughout the day.
                            </li>

                            <li> Drink water before, during, and after exercise: Drinking water before, during, and
                                after
                                exercise can help maintain hydration and support performance.</li>
                            <li>
                                Monitor urine color: Monitoring the color of your urine can be a helpful indicator of
                                hydration status. Clear or light-colored urine generally indicates adequate hydration,
                                while dark yellow or amber-colored urine may indicate dehydration.
                            </li>
                            <li>Avoid excessive caffeine and alcohol consumption: Caffeine and alcohol can act as
                                diuretics, which can increase urine output and contribute to dehydration.</li>
                        </ul>
                    </div>

                    <div class="tab-pane fade show" id="nav-strategy" role="tabpanel"
                        aria-labelledby="nav-strategy-tab">
                        <img src="images/services/diet.jpg" class="img-fluid" alt="">

                        <h5 class="mt-4 mb-2">Fuel your body with a balanced and diverse diet to help maintain optimal
                            physical and mental health.</h5>

                        <div class="row">
                            <ul>
                                <li>Include a variety of fruits and vegetables in your meals: Fruits and vegetables are
                                    excellent sources of vitamins, minerals, and fiber, which are essential for
                                    maintaining good health. Aim to include a variety of colors and types of produce in
                                    your diet to ensure you're getting a range of nutrients.</li>
                                <li>Choose whole grains over refined grains: Whole grains contain more fiber and
                                    nutrients than refined grains, which have been stripped of their bran and germ. Look
                                    for whole grain options such as brown rice, quinoa, whole wheat bread, and whole
                                    grain pasta.</li>
                                <li>Incorporate lean proteins: Proteins are important for building and repairing
                                    tissues, and can also help you feel fuller for longer. Choose lean protein sources
                                    such as chicken, fish, tofu, beans, and legumes.</li>
                                <li>Limit processed and sugary foods: Processed foods often contain high amounts of
                                    sodium, unhealthy fats, and added sugars, which can be detrimental to your health if
                                    consumed in excess. Limiting these types of foods can help you maintain a healthy
                                    diet.</li>
                                <li>Don't forget about healthy fats: Healthy fats, such as those found in nuts, seeds,
                                    avocado, and fatty fish, are essential for brain function and maintaining healthy
                                    skin, hair, and nails. Incorporating these foods into your diet can help you feel
                                    fuller for longer and provide important nutrients.</li>
                            </ul>

                        </div>
                    </div>

                    <div class="tab-pane fade show" id="nav-video" role="tabpanel" aria-labelledby="nav-video-tab">
                        <img src="images/services/exercise.jpg" class="img-fluid" alt="">

                        <h5 class="mt-4 mb-2">Sweat today, smile tomorrow: Regular physical activity can bring happiness
                            and health benefits.</h5>

                        <ul>
                            <li>Find activities you enjoy: Regular physical activity can be more enjoyable when you
                                engage in activities that you find fun and enjoyable. Try different types of exercise
                                such as dancing, swimming, hiking, or cycling to find what you enjoy.</li>
                            <li>Set achievable goals: Setting realistic and achievable fitness goals can help keep you
                                motivated and on track. Start with small goals and gradually increase your activity
                                level over time.</li>
                            <li>Make it a habit: Incorporating physical activity into your daily routine can help make
                                it a habit. Try scheduling workouts at the same time each day or taking a daily walk
                                during your lunch break.</li>
                            <li>Get a workout buddy: Working out with a friend or family member can help keep you
                                motivated and make exercise more fun. Plus, you can hold each other accountable for
                                sticking to your fitness goals.</li>
                            <li>Take breaks and listen to your body: It's important to listen to your body and take
                                breaks when you need to. Pushing yourself too hard can lead to injury and burnout.
                                Remember to start slowly, gradually increasing your activity level, and taking breaks
                                when necessary to prevent overexertion.</li>
                        </ul>
                    </div>


                </div>
            </div>

        </div>
    </div>
</section>

<section class="projects section-padding pb-0" id="section_4">
    <div class="container">
        <div class="row">

            <div class="col-lg-10 col-12 text-center mx-auto mb-5">
                <small class="small-title"><strong class="text-warning">Hospital</strong></small>

                <h5>Hospitals are a beacon of hope, providing essential medical care and support to individuals and
                    communities in times of need.</h5>
            </div>

            <div class="col-lg-4 col-12">
                <div class="projects-thumb projects-thumb-small">
                    <a href="{{ route('bir') }}">
                        <img src="images/projects/birhos.png" class="img-fluid projects-image" alt="">

                        <div class="projects-info">
                            <div class="projects-title-wrap">
                                <small class="projects-small-title">BIR HOSPITAL</small>

                                {{-- <h2 class="projects-title"></h2> --}}
                            </div>

                            <div class="projects-btn-wrap mt-4">
                                <span class="custom-btn btn">
                                    <i class="bi-arrow-right"></i>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-12">
                <div class="projects-thumb projects-thumb-small">
                    <a href="{{ route('bpkhs') }}">
                        <img src="images/projects/bpkhs.png" class="img-fluid projects-image" alt="">

                        <div class="projects-info">
                            <div class="projects-title-wrap">
                                <small class="projects-small-title">B.P. Koirala Institute of Health Sciences
                                    (BPKIHS)</small>

                                {{-- <h2 class="projects-title">MCL Group</h2> --}}
                            </div>

                            <div class="projects-btn-wrap mt-4">
                                <span class="custom-btn btn">
                                    <i class="bi-arrow-right"></i>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-12">
                <div class="projects-thumb projects-thumb-small">
                    <a href="{{ route('chitwan') }}">
                        <img src="images/projects/chitwan.png" class="img-fluid projects-image" alt="">

                        <div class="projects-info">
                            <div class="projects-title-wrap">
                                <small class="projects-small-title">CHITWAN MEDICAL COLLEGE</small>

                                {{-- <h2 class="projects-title">Fredi</h2> --}}
                            </div>

                            <div class="projects-btn-wrap mt-4">
                                <span class="custom-btn btn" href="project-detail.html">
                                    <i class="bi-arrow-right"></i>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-12">
                <div class="projects-thumb projects-thumb-small">
                    <a href="{{ route('maharaj') }}">
                        <img src="images/projects/Maharajgunj.png" class="img-fluid projects-image" alt="">

                        <div class="projects-info">
                            <div class="projects-title-wrap">
                                <small class="projects-small-title">MAHARAJ TEACHING HOSPITAL</small>

                                {{-- <h2 class="projects-title">Banana</h2> --}}
                            </div>

                            <div class="projects-btn-wrap mt-4">
                                <span class="custom-btn btn" href="project-detail.html">
                                    <i class="bi-arrow-right"></i>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            {{-- <div class="col-lg-8 col-12">
                <div class="projects-thumb projects-thumb-large">
                    <a href="project-detail.html">
                        <img src="images/projects/Maharaj.png" class="img-fluid projects-image" alt="">

                        <div class="projects-info">
                            <div class="projects-title-wrap">
                                <small class="projects-small-title">Video Content</small>

                                <h2 class="projects-title">Conference</h2>
                            </div>

                            <div class="projects-btn-wrap mt-4">
                                <span class="custom-btn btn" href="project-detail.html">
                                    <i class="bi-arrow-right"></i>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
            </div> --}}

            <div class="col-lg-4 col-12">
                <div class="projects-thumb projects-thumb-small">
                    <a href="{{ route('narayani') }}">
                        <img src="images/projects/narayani.png" class="img-fluid projects-image" alt="">

                        <div class="projects-info">
                            <div class="projects-title-wrap">
                                <small class="projects-small-title">NARAYANI SUBREGIONAL HOSPITAL</small>

                                {{-- <h2 class="projects-title">MCL Group</h2> --}}
                            </div>

                            <div class="projects-btn-wrap mt-4">
                                <span class="custom-btn btn">
                                    <i class="bi-arrow-right"></i>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-12">
                <div class="projects-thumb projects-thumb-small">
                    <a href="{{ route('nepalgunj') }}">
                        <img src="images/projects/Nepalgunj.png" class="img-fluid projects-image" alt="">

                        <div class="projects-info">
                            <div class="projects-title-wrap">
                                <small class="projects-small-title">NEPALGUNJ MEDICAL COLLEGE</small>

                                {{-- <h2 class="projects-title">Maldon</h2> --}}
                            </div>

                            <div class="projects-btn-wrap mt-4">
                                <span class="custom-btn btn" href="project-detail.html">
                                    <i class="bi-arrow-right"></i>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<br>
<br>
<br>

{{-- <section class="contact" id="section_5">

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#f9c10b" fill-opacity="1"
            d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>

    <div class="contact-container-wrap">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12">
                    <form class="custom-form contact-form" action="" method="post" role="form">
                        <small class="small-title">Contact <strong class="text-white">05/05</strong></small>

                        <h2 class="mb-5">Say Hi to us</h2>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Your Name"
                                    required="">
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control"
                                    placeholder="your@company.com" required="">
                            </div>

                            <div class="col-12">
                                <textarea class="form-control" rows="7" id="message" name="message"
                                    placeholder="Message"></textarea>

                                <button type="submit" class="form-control">Submit</button>
                            </div>

                        </div>
                    </form>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="contact-thumb">

                        <div class="contact-info bg-white shadow-lg">
                            <h4 class="mb-4">1340 Atwater St, Detroit, MI 48207</h4>

                            <h4 class="mb-2">
                                <a href="tel: 240-480-9600">
                                    <i class="bi-telephone contact-icon me-2"></i>
                                    240-480-9600
                                </a>
                            </h4>

                            <h5>
                                <a href="mailto:info@company.com" class="footer-link">
                                    <i class="bi-envelope-fill contact-icon me-2"></i>
                                    info@company.com
                                </a>
                            </h5>

                            <!-- Copy "embed a map" HTML code from any point on Google Maps -> Share Link  -->

                            <iframe class="google-map mt-4"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4063.103580426464!2d-83.0264337484065!3d42.33402597908653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x883b2cce05ddf4f1%3A0xcc0559eb3fda00c9!2sDetroit%20Riverwalk%2C%20Detroit%2C%20MI!5e1!3m2!1sen!2sus!4v1657814406289!5m2!1sen!2sus"
                                width="100%" height="300" allowfullscreen="" loading="lazy"></iframe>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section> --}}

@endsection