@extends('website.layouts.app')

@section('title', 'Robotic Purchase Consultation — IROBO')

@section('content')


<!-- HERO -->
<!-- <section class="inner-hero cloud-hero">
    <div class="hero-overlay"></div>
    <div class="hero-content container text-center">
        <h1 class="fw-bold">Robotic Purchase Consultation</h1>
        <p class="text-muted mx-auto" style="max-width:600px;">
            Book a professional consultation with our automation and AI experts.
        </p>
    </div>
</section> -->

<!-- PLANS -->
<section class="section robotic-main-section" >
    <div class="container">

        <div class="text-center mb-5">
            <h3 class="text-danger-book">Choose Your Consultation Plan</h3>
            <p class="text-muted">Flexible consultation packages tailored to your needs.</p>
        </div>

        <div class="row g-4 justify-content-center">

            <!-- BASIC -->
             @foreach(singleConsultationService(2) as $value)
                <div class="col-md-4">
                    <div class="card plan-card  @if(old('planSelect') == '{{$value->name}}') active @endif text-center p-4" data-plan="{{$value->name}}">
                        <h5 class="text-danger-book">{{$value->name}} Consultation</h5>
                        <h2 class="my-3 text-danger-book">${{$value->price}}</h2>
                        @php 
                            $data_feature = singleConsultationServiceFeature($value->id);
                        @endphp
                        @if(!empty($data_feature) && count($data_feature) > 0)
                            <ul class="list-unstyled small mb-4">
                             @foreach($data_feature as $feature_value)
                                <li>{{ $feature_value->feature_title }}</li>
                            @endforeach
                             </ul>
                        <span class="btn btn-primary rounded-pill-button">Book Now</span>
                        @endif
                    </div>
                </div>
            @endforeach
           

        </div>
    </div>
</section>

<!-- FORM -->
<section id="consult-form" class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">

                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-body p-4 p-md-5">

                        <h3 class="text-center text-danger-book fw-bold mb-4">
                            Book Your Consultation
                        </h3>

                        <form method="POST" action="{{ route('consultation.store.store') }}">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Your Name</label>
                                <input type="text"  value="{{ old('name') }}" name="name" class="form-control form-control-lg @error('name') is-invalid @enderror" placeholder="Enter your name" >
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Email Address</label>
                                <input type="email"  value="{{ old('email') }}" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="Enter your email" >
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Phone Number</label>
                                <input type="text" name="phone_number" value="{{ old('phone_number') }}" class="form-control form-control-lg @error('phone_number') is-invalid @enderror" placeholder="Enter phone number" >
                                @error('phone_number')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <input type="hidden" name="type" value="2">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Choose Plan</label>
                                <select id="planSelect" name="planSelect" class="form-select custom-input">
                                     <option value="Basic" {{ old('planSelect') == 'Basic' ? 'selected' : '' }}>Basic — ₹999</option>
                                        <option value="Standard" {{ old('planSelect') == 'Standard' ? 'selected' : '' }}>Standard — ₹1999</option>
                                        <option value="Premium" {{ old('planSelect') == 'Premium' ? 'selected' : '' }}>Premium — ₹3999</option>
                                </select>
                            </div>

                           

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Your Message</label>
                                <textarea rows="4" name="message" class="form-control" placeholder="Describe your requirement">{{ old('message') }}</textarea>
                            </div>

                            <button class="btn rounded-pill-button btn-lg w-100 rounded-pill">
                                Proceed to Payment
                            </button>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SCRIPT -->
<script>
document.querySelectorAll('.plan-card').forEach(card => {
    card.addEventListener('click', function () {

        document.querySelectorAll('.plan-card')
            .forEach(c => c.classList.remove('active'));

        this.classList.add('active');

        const plan = this.getAttribute('data-plan');
        document.getElementById('planSelect').value = plan;

        document.getElementById('consult-form')
            .scrollIntoView({ behavior: 'smooth' });
    });
});
</script>

@endsection
