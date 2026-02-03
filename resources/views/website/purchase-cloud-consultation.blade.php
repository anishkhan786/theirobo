@extends('website.layouts.app')

@section('title', 'Purchase Cloud Consultation — IROBO')

@section('content')

<style>
    .hero-section {
        background: linear-gradient(135deg, #0b1a33, #102447);
        padding: 80px 20px;
        text-align: center;
        color: #fff;
    }

    .hero-section h1 {
        font-size: 42px;
        font-weight: 700;
    }

    .price-card {
        border-radius: 20px;
        padding: 40px 30px;
        box-shadow: 0 6px 25px rgba(0, 0, 0, 0.12);
        transition: 0.3s;
        background: #fff;
    }

    .price-card:hover {
        transform: translateY(-5px);
    }

    .btn-purchase {
        background: #0d6efd;
        color: #fff;
        padding: 12px 25px;
        font-size: 18px;
        border-radius: 10px;
    }

    .btn-purchase:hover {
        background: #0849c9;
        color: #fff;
    }
</style>

<!-- PRICING SECTION -->
<section class="py-5">
    <div class="container my-4">
        <div class="row justify-content-center">

        @foreach(singleConsultationService(1) as $value)
            <div class="col-md-6">
                <div class="price-card text-center">

                    <h2 class="fw-bold mb-3 text-danger-book">{{$value->name}}</h2>

                    <p class="text-muted mb-4">
                        Professional one-on-one consultation for cloud architecture,
                        migration, DevOps setup, scaling & optimization.
                    </p>

                    <h2 class="fw-bold mb-4 text-danger-book">
                        ${{$value->price}}
                        <small class="text-muted fs-6">/ session</small>
                    </h2>
                    @php 
                        $data_feature = singleConsultationServiceFeature($value->id);
                    @endphp

                    @if(!empty($data_feature) && count($data_feature) > 0)
                        <ul class="list-group text-start mb-4">
                            @foreach($data_feature as $feature_value)
                                <li class="list-group-item">
                                    <i class="bi bi-check-circle-fill text-success"></i>
                                    {{ $feature_value->feature_title }}
                                </li>
                            @endforeach
                        </ul>

                        <form method="POST" action="{{ route('services.book.your.consultation.init') }}">
                            @csrf
                            <!-- <a href="{{ route('services.book.your.consultation') }}" class="btn btn-purchase">
                                Proceed to Payment
                            </a> -->
                            <input type="hidden" name="type" value="1">
                            <input type="hidden" name="name" value="{{$value->name}}">
                            
                            <button class="btn theme-button-one btn-lg w-100 rounded-pill">
                                        Proceed to Payment
                            </button>

                            </form>

                    @endif

                </div>
            </div>
        @endforeach
            

        </div>
    </div>
</section>

@endsection
