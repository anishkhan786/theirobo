

<?php $__env->startSection('title', 'Purchase Cloud Consultation — IROBO'); ?>

<?php $__env->startSection('content'); ?>

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

        <?php $__currentLoopData = singleConsultationService(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-6">
                <div class="price-card text-center">

                    <h2 class="fw-bold mb-3 text-danger-book"><?php echo e($value->name); ?></h2>

                    <p class="text-muted mb-4">
                        Professional one-on-one consultation for cloud architecture,
                        migration, DevOps setup, scaling & optimization.
                    </p>

                    <h2 class="fw-bold mb-4 text-danger-book">
                        $<?php echo e($value->price); ?>

                        <small class="text-muted fs-6">/ session</small>
                    </h2>
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
                            <!-- <a href="<?php echo e(route('services.book.your.consultation')); ?>" class="btn btn-purchase">
                                Proceed to Payment
                            </a> -->
                            <input type="hidden" name="type" value="1">
                            <input type="hidden" name="name" value="<?php echo e($value->name); ?>">
                            
                            <button class="btn theme-button-one btn-lg w-100 rounded-pill">
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

<?php echo $__env->make('website.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\anish\Downloads\app\resources\views/website/purchase-cloud-consultation.blade.php ENDPATH**/ ?>