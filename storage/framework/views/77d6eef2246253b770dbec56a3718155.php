

<?php $__env->startSection('title', 'Robotic Purchase Consultation — IROBO'); ?>

<?php $__env->startSection('content'); ?>


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
             <?php $__currentLoopData = singleConsultationService(2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4">
                    <div class="card plan-card  <?php if(old('planSelect') == '<?php echo e($value->name); ?>'): ?> active <?php endif; ?> text-center p-4" data-plan="<?php echo e($value->name); ?>">
                        <h5 class="text-danger-book"><?php echo e($value->name); ?> Consultation</h5>
                        <h2 class="my-3 text-danger-book">$<?php echo e($value->price); ?></h2>
                        <?php 
                            $data_feature = singleConsultationServiceFeature($value->id);
                        ?>
                        <?php if(!empty($data_feature) && count($data_feature) > 0): ?>
                            <ul class="list-unstyled small mb-4">
                             <?php $__currentLoopData = $data_feature; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature_value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($feature_value->feature_title); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                             </ul>
                        <span class="btn btn-primary rounded-pill-button">Book Now</span>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           

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

                        <form method="POST" action="<?php echo e(route('consultation.store.store')); ?>">
                            <?php echo csrf_field(); ?>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Your Name</label>
                                <input type="text"  value="<?php echo e(old('name')); ?>" name="name" class="form-control form-control-lg <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Enter your name" >
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Email Address</label>
                                <input type="email"  value="<?php echo e(old('email')); ?>" name="email" class="form-control form-control-lg <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Enter your email" >
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Phone Number</label>
                                <input type="text" name="phone_number" value="<?php echo e(old('phone_number')); ?>" class="form-control form-control-lg <?php $__errorArgs = ['phone_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Enter phone number" >
                                <?php $__errorArgs = ['phone_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <input type="hidden" name="type" value="2">
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Choose Plan</label>
                                <select id="planSelect" name="planSelect" class="form-select custom-input">
                                     <option value="Basic" <?php echo e(old('planSelect') == 'Basic' ? 'selected' : ''); ?>>Basic — ₹999</option>
                                        <option value="Standard" <?php echo e(old('planSelect') == 'Standard' ? 'selected' : ''); ?>>Standard — ₹1999</option>
                                        <option value="Premium" <?php echo e(old('planSelect') == 'Premium' ? 'selected' : ''); ?>>Premium — ₹3999</option>
                                </select>
                            </div>

                           

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Your Message</label>
                                <textarea rows="4" name="message" class="form-control" placeholder="Describe your requirement"><?php echo e(old('message')); ?></textarea>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\anish\Downloads\app\resources\views/website/purchase-robotic-consultation.blade.php ENDPATH**/ ?>