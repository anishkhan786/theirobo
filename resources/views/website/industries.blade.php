@extends('website.layouts.app')

@section('content')

  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<!-- HERO SECTION -->
<section class="section py-5">
    <div class="container text-center">
        <h1 class="fw-bold text-danger-book">Industries We Serve</h1>
        <p class="text-muted mx-auto" style="max-width: 600px;">
            Built for every sector that requires accuracy, trust, and secure identity authentication.
        </p>
    </div>
</section>

<!-- INDUSTRY CARDS -->
<section class="pb-5">
    <div class="container">
        <div class="row g-4 industry-row">
            @php
                $industries = [
                    ['icon'=>'bank', 'title'=>'FinTech & Banking', 'desc'=>'KYC automation, fraud prevention, secure transaction authentication and regulatory compliance.'],
                    ['icon'=>'heart-pulse', 'title'=>'Healthcare', 'desc'=>'Patient identity verification, secure medical record access, HIPAA-ready workflows.'],
                    ['icon'=>'building-check', 'title'=>'Enterprise & SaaS', 'desc'=>'Workforce identity checks, single sign-on alternatives, compliance & audit-friendly logs.'],
                    ['icon'=>'cpu', 'title'=>'Automotive & IoT', 'desc'=>'Secure device pairing, driver verification, access control for connected devices.'],
                    ['icon'=>'shop', 'title'=>'Retail & E-Commerce', 'desc'=>'Customer verification, secure login, fraud prevention for high-risk transactions.'],
                    ['icon'=>'person-badge', 'title'=>'Government & Public Sector', 'desc'=>'Secure citizen authentication, border verification, digital identity infrastructure.'],
                ];
            @endphp

            @foreach($industries as $industry)

            <div class="col-md-6 col-lg-4">
                <div class="industry-card">
                    <div class="industry-icon">
                        <i class="bi bi-{{ $industry['icon'] }}"></i>
                    </div>
                    <h5 class="text-danger-book">{{ $industry['title'] }}</h5>
                    <p class="text-muted">{{ $industry['desc'] }}</p>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</section>

@endsection
