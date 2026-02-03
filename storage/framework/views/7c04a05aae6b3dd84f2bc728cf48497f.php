

<?php $__env->startSection('title', 'Proceed to Payment — IROBO'); ?>

<?php $__env->startPush('styles'); ?>
<style>
.payment-hero{
    background: linear-gradient(135deg,#0A1A2F,#142F45);
    color:#fff;
    padding:70px 0;
}
.payment-card{
    border-radius:14px;
    background:#fff;
    box-shadow:0 18px 45px rgba(0,0,0,0.08);
}
.payment-summary{
    background:#0A1A2F;
    color:#fff;
    border-radius:14px;
}
.payment-summary span{
    color:rgba(255,255,255,0.85);
}
.secure-badge{
    background:rgba(255,255,255,0.12);
    padding:8px 14px;
    border-radius:999px;
    display:inline-flex;
    align-items:center;
    gap:8px;
    font-weight:600;
}
.price-highlight{
    font-size:26px;
    font-weight:700;
    color:#0A1A2F;
}
.payh1{
  color: #000f32 !important;
}
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<!-- HERO -->
<section class="payment-hero">
    <div class="container">
        <div class="row align-items-center gy-4">

            <div class="col-lg-7">
                <h1 class="text-danger-book">Proceed to Payment</h1>
                <p class="lead text-white-50">
                    Complete your purchase securely. You’ll receive an invoice
                    and confirmation instantly.
                </p>

                <div class="mt-4">
                    <span class="secure-badge">
                        <i class="bi bi-shield-lock-fill"></i> Secure Checkout
                    </span>
                    <small class="ms-3 text-white-50">PCI-compliant payment</small>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="payment-card p-4 text-center">
                    <h6 class="text-muted ">Selected Service</h6>
                    <h4 class="fw-bold mt-2">
                        <?php if($order_data->service->type==3): ?>
                                        Ai Consulting -
                        <?php endif; ?>
                        <?php echo e($order_data->service->name); ?>

                    </h4>
                    <div class="price-highlight mt-2">
                        $<?php echo e(number_format($order_data->service->price ?? 0)); ?>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- PAYMENT BODY -->
<section class="section-spacing">
    <div class="container">
        <div class="row g-4">

            <!-- LEFT -->
            <div class="col-lg-7">
                <div class="payment-card p-4">

                    <h5 class="mb-4 text-danger-book">Service Details</h5>

                    <div class="p-3 rounded-3 mb-4"
                         style="background:#F7FAFF;border:1px solid #E6F0FF;">
                        <div class="d-flex justify-content-between">
                            <div>
                                <strong>
                                    <?php if($order_data->service->type==2): ?>
                                        Robotic Consulting -
                                    <?php endif; ?>

                                    <?php if($order_data->service->type==3): ?>
                                        Ai Consulting -
                                    <?php endif; ?>

                                    <?php echo e($order_data->service->name); ?>

                                </strong>
                                <div class="small text-muted">
                                    One-on-One Professional Consultation
                                </div>
                            </div>
                            <div class="text-end">
                                <strong>
                                    $<?php echo e(number_format($order_data->service->price ?? 0)); ?>

                                </strong>
                                <div class="small text-muted">Incl. taxes</div>
                            </div>
                        </div>
                    </div>

                    <form method="POST" action="">
                        <?php echo csrf_field(); ?>
                        <p class="small text-muted mb-3">
                            You will be redirected to our secure payment partner.
                        </p>

                        <button class="theme-button-one w-100">
                            Proceed to Pay $<?php echo e(number_format($order_data->service->price ?? 0)); ?>

                        </button>
                    </form>

                </div>
            </div>

            <!-- RIGHT -->
            <div class="col-lg-5">
                <div class="payment-summary p-4">

                    <h6 class="mb-4 text-danger-book">Order Summary</h6>

                    <div class="d-flex justify-content-between mb-2">
                        <span>Subtotal</span>
                        <span>$<?php echo e(number_format($order_data->service->price ?? 0)); ?></span>
                    </div>

                    <div class="d-flex justify-content-between mb-3">
                        <span>Taxes</span>
                        <span>$<?php echo e(number_format($tax ?? 0)); ?></span>
                    </div>

                    <hr style="border-color:rgba(255,255,255,0.2)">

                    <div class="d-flex justify-content-between fw-bold fs-5">
                        <span>Total</span>
                        <span>$<?php echo e(number_format($order_data->service->price ?? 0)); ?></span>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\anish\Downloads\app\resources\views/website/proceed_to_pay.blade.php ENDPATH**/ ?>