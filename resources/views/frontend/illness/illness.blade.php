@extends('frontend.apphos')
@section('content')

<section class="about section-padding" id="section_2">
    <div class="container">

        @foreach ($ill as $i)
        <div class="row">
            <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                <div class="about-image-wrap">
                    <img src="{{ asset('illness/'. $i['image']) }}" class="img-fluid about-image" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-12 d-flex flex-column">
                <div class="about-thumb bg-white shadow-lg">

                    <div class="about-info">
                        <h5 class="mb-3 text-warning">{{ $i->name }}</h5>

                        <p>{{ $i->description }}</p>
                    </div>
                </div>

            </div>
        </div>
        @endforeach



        <br>

        <div class="row">
            <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                <div class="about-image-wrap">
                    <img src="{{ asset('image/pneumonia.png') }}" class="img-fluid about-image" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-12 d-flex flex-column">
                <div class="about-thumb bg-white shadow-lg">

                    <div class="about-info">
                        <h5 class="mb-3 text-warning">1. Pneumonia </h5>

                        <p>It is an inflammatory process of lung parenchyma, involving the terminal airways and alveoli
                            of the lung, caused by infectious agents, usually associated with a marked increase in
                            interstitial and alveolar fluids, commonly caused by microbial agents.</p>

                        <h6>Cause</h6>
                        <ul>
                            <li>Organism: bacteria, viruses, mycoplasm and protozoa</li>
                            <li>Aspiration of fluid/ food/ vomits aspirated pneumonia.</li>
                            <li>Inhalation of toxic chemicals, smoke, dust, and gases</li>
                        </ul>
                        <h6>Symptoms </h6>
                        <ul>
                            <li>Rapidly rising fever with chills (101-105°F)</li>
                            <li>Cough with sputum productive (purulent/ rusty colored)</li>
                            <li>Pleuritic Chest pain, Tachycardia</li>
                            <li>Tachypnea/ shortness of breath/dyspnea</li>
                            <li>Headache, malaise, fatigue, sweating</li>
                        </ul>
                        <h6>Prevention</h6>
                        <ul>
                            <li>Get a flu shot every year to prevent seasonal influenza. The flu is a common cause of
                                pneumonia, so preventing the flu is a good way to prevent pneumonia.</li>
                            <li>Wash your hands frequently, especially after coughing or blowing your nose, going to
                                the bathroom, diapering, and before eating or preparing foods.</li>
                            <li>Don't Smoke</li>
                            <li>Since pneumonia often follows respiratory infections, be aware of any symptoms that
                                linger more than a few days.</li>
                        </ul>
                        <h6>Treatment</h6>
                        <ul>
                            <li>Control your fever with aspirin, nonsteroidal anti-inflammatory drugs (NSAIDs, such as
                                ibuprofen or naproxen), or acetaminophen. DO NOT give aspirin to children.</li>
                            <li>Drink plenty of fluids to help loosen secretions and bring up phlegm.</li>
                            <li>Do not take cough medicines without first talking to your doctor. Coughing is one way
                                your body works to get rid of an infection. If your cough is preventing you from getting
                                the rest you need, ask your doctor about steps you can take to get relief.</li>
                            <li>Drink warm beverages, take steamy baths and use a humidifier to help open your airways
                                and ease your breathing. Contact your doctor right away if your breathing gets worse
                                instead of better over time.</li>
                            <li>Stay away from smoke to let your lungs heal. This includes smoking, second-hand smoke
                                and wood smoke. Talk to your doctor if you use tobacco products and are having trouble
                                staying smokefree while you recover. This would be a good time to think about quitting
                                for good.</li>
                        </ul>
                        <h6>Diagnostic Procedure</h6>
                        <ul>
                            <li>History taking and physical examination.</li>
                            <li>Sputum gram smear and culture and sensitivity test</li>
                            <li>Complete blood count</li>
                            <li>Chest x-ray and Bronchoscopy</li>
                            <li>Additional test: skin test for tuberculosis, blood and urine culture, ABG analysis</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <br>

    </div>
</section>

@endsection