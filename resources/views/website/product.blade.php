@extends('website.layouts.app')

@section('title','Our Products')

@section('content')
<style>
/* ================= PAGE ================= */
.products-page{
    background:#f8fafc;
    padding:60px 0 80px;
}
.products-header h1{
    font-size:36px;
    font-weight:700;
    margin-bottom:10px;
}
.products-header p{
    color:#6b7280;
    font-size:16px;
}

/* ================= GRID ================= */
.products-grid{
    margin-top:40px;
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
    gap:30px;
}

/* ================= CARD ================= */
.product-card{
    background:#fff;
    border-radius:18px;
    overflow:hidden;
    box-shadow:0 15px 40px rgba(0,0,0,0.08);
    transition:all .4s ease;
}
.product-card:hover{
    transform:translateY(-8px);
    box-shadow:0 25px 55px rgba(0,0,0,0.12);
}

/* ================= IMAGE ================= */
.product-image{
    height:300px;
    background:#f1f5f9;
    display:flex;
    align-items:center;
    justify-content:center;
    padding:16px;
    position:relative;
}
.product-image img{
    max-width:100%;
    max-height:100%;
    object-fit:contain; /* PERFECT FOR BOOK / DEVICE */
}

.product-badge{
    position:absolute;
    top:14px;
    left:14px;
    background:#2563eb;
    color:#fff;
    font-size:12px;
    padding:6px 12px;
    border-radius:20px;
}

/* ================= CONTENT ================= */
.product-content{
    padding:22px;
}
.product-content h4{
    font-size:18px;
    font-weight:600;
    margin-bottom:8px;
}
.product-content p{
    font-size:14px;
    color:#6b7280;
    line-height:1.6;
}

.product-footer{
    margin-top:16px;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.view-btn{
    color:#2563eb;
    font-weight:600;
    text-decoration:none;
}

.view-btn:hover{
    text-decoration:underline;
}
</style>

<div class="products-page">
    <div class="container">
        <div class="products-header">
            <h1>Our Products</h1>
            <p>Reliable business devices and professional resources for modern enterprises</p>
        </div>

        <div class="products-grid">
            @foreach(products_get() as $product)
            <div class="product-card">
                <div class="product-image">
                    <!-- <span class="product-badge">Business</span> -->
					<img src="/upload/producs/{{ $product->image }}" alt="{{ $product->p_name }}">
                </div>

                <div class="product-content">
                    <h4>{{ $product->p_name }}</h4>
                    <p>{{ Str::limit($product->p_description, 100) }}</p>

                    <div class="product-footer">
                        <a href="{{ route('w-product-details',$product->id) }}" class="view-btn">View Details →</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection