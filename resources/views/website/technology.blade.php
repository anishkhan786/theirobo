@extends('website.layouts.app')

@section('content')

<!-- ================= HERO SECTION ================= -->
<section class="inner-hero cloud-hero tech-hero">
    <div class="hero-overlay"></div>

    <div class="hero-content container text-center">
        <span class="hero-tag">Our Technology</span>
        <h1 class="fw-bold">Built on Cloud AI</h1>
        <p class="lead">
            Enhanced by Machine Vision & Secure Cloud Infrastructure
        </p>
    </div>
</section>

<!-- ================= TECHNOLOGY FEATURES ================= -->
<section class="section tech-section">
    <div class="container">

        <div class="row g-4">
            @php
                $features = [
                    ['icon'=>'camera-fill', 'title'=>'Face Recognition Engine', 'desc'=>'Advanced AI facial vector mapping with anti-spoofing & liveness detection.'],
                    ['icon'=>'gear-fill', 'title'=>'Machine Learning Models', 'desc'=>'Deep learning models with continuous training & bias reduction.'],
                    ['icon'=>'cloud-fill', 'title'=>'AI Cloud Infrastructure', 'desc'=>'Highly scalable multi-region cloud deployment with enterprise-grade security.'],
                    ['icon'=>'code-slash', 'title'=>'APIs & SDKs', 'desc'=>'REST APIs & SDKs for Web and Mobile with complete developer documentation.'],
                    ['icon'=>'shield-lock-fill', 'title'=>'Data Security & Encryption', 'desc'=>'AES-256 encryption with zero-trust architecture & secured vector storage.'],
                    ['icon'=>'diagram-3-fill', 'title'=>'System Architecture', 'desc'=>'End-to-end AI workflow with integration-ready architecture diagrams.'],
                ];
            @endphp

            @foreach($features as $feature)
            <div class="col-lg-4 col-md-6 card-bottom-lenght">
                <div class="tech-card h-100">
                    <div class="tech-icon">
                        <i class="bi bi-{{ $feature['icon'] }}"></i>
                    </div>
                    <h5>{{ $feature['title'] }}</h5>
                    <p>{{ $feature['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>

        <!-- ================= HOW IT WORKS ================= -->
        <div class="row align-items-center mt-5 pt-4">
            <div class="col-lg-6">
                <h3 class="section-title text-danger-book">How It Works</h3>
                <ul class="tech-steps">
                    <li>
                        <span>01</span>
                        <div>
                            <h6>Data Capture</h6>
                            <p>Camera-based capture with facial vectorization.</p>
                        </div>
                    </li>
                    <li>
                        <span>02</span>
                        <div>
                            <h6>AI Learning Engine</h6>
                            <p>Model inference with continuous AI training.</p>
                        </div>
                    </li>
                    <li>
                        <span>03</span>
                        <div>
                            <h6>Secure Cloud Processing</h6>
                            <p>Validation, policy enforcement & audit logging.</p>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="col-lg-6 text-center tech-img">
                <img src="{{ asset('assets/img/tech-diagram-placeholder.png') }}"
                     class="img-fluid rounded shadow"
                     alt="Technology Architecture">
            </div>
        </div>

    </div>
</section>

@endsection
