

<?php $__env->startSection('title', 'Purchase AI Consultation — IROBO'); ?>

<?php $__env->startSection('content'); ?>

<style>
.price-card{
    border-radius:20px;
    padding:40px 30px;
    box-shadow:0 6px 25px rgba(0,0,0,0.12);
    transition:.3s;
    background:#fff;
    height:100%;
}
.price-card:hover{ transform:translateY(-5px); }

.price-card.featured{
    border:2px solid #001648;
}

.price-title{
    font-weight:700;
    margin-bottom:10px;
}

.price{
    font-size:38px;
    font-weight:700;
    margin:20px 0;
}

.price small{
    font-size:14px;
    color:#6c757d;
}

.list-group-item{
    border:0;
    padding:8px 0;
}

.btn-purchase{
    background:#001648;
    color:#fff;
    padding:12px 25px;
    font-size:18px;
    border-radius:50px;
}
.btn-purchase:hover{
    background:#001648;
    color:#fff;
}
</style>

<!-- ============================
   PRICING SECTION
============================= -->
<section class="py-5">
<div class="container">
    <div class="text-center mb-5">
        <h1 class="fw-bold text-danger-book">AI Strategy Session Packages</h1>
        <p class="text-muted mt-2">
            Choose the right AI consulting plan based on your business stage
        </p>
    </div>

    <div class="row g-4 justify-content-center">

        <!-- ================= Starter Package ================= -->
         <?php $__currentLoopData = singleConsultationService(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4 col-md-6">
            <div class="price-card text-center">
                <h3 class="price-title text-danger-book"><?php echo e($value->name); ?></h3>
                <!-- <p class="text-muted">For startups & early AI adoption</p> -->

                <div class="price">
                    $<?php echo e($value->price); ?> <small>/ session</small>
                </div>
                <?php 
                    $data_feature = singleConsultationServiceFeature($value->id);
                ?>
                <?php if(!empty($data_feature) && count($data_feature) > 0): ?>
                <ul class="list-group text-start mb-4">
                    <?php $__currentLoopData = $data_feature; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature_value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="list-group-item">
                        <i class="bi bi-check-circle-fill text-success"></i>
                        <?php echo e($feature_value->feature_title); ?>

                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>

                <form method="POST" action="<?php echo e(route('services.book.your.consultation.init')); ?>">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="type" value="3">
                    <input type="hidden" name="name" value="<?php echo e($value->name); ?>">

                    <button class="btn btn-purchase w-100">
                        Proceed to Payment
                    </button>
                </form>

                <?php endif; ?>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       

    </div>
</div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\anish\Downloads\app\resources\views/website/purchase-ai-consultation.blade.php ENDPATH**/ ?>