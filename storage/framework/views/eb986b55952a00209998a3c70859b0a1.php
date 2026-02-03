

<?php $__env->startSection('title', 'Robotic Purchase Consultation — IROBO'); ?>

<?php $__env->startSection('content'); ?>

<style>
/* ---------- FORM INPUT ---------- */
.custom-input {
    width: 100%;
    height: 52px;
    padding: 0.75rem 1rem;
    border-radius: 10px;
    border: 1px solid #d0d7de;
    font-size: 15px;
    background-color: #fff;
}

select.custom-input {
    appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='14' height='14' fill='%23666' viewBox='0 0 16 16'%3E%3Cpath d='M1.5 5.5l6 6 6-6'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 1rem center;
}

.custom-input:focus {
    border-color: #dc3545;
    box-shadow: 0 0 0 0.15rem rgba(220, 53, 69, 0.25);
    outline: none;
}

/* ---------- PLAN CARDS ---------- */
.plan-card {
    cursor: pointer;
    border: 2px solid #e5e7eb;
    border-radius: 18px;
    transition: all 0.3s ease;
}

.plan-card:hover {
    transform: translateY(-6px);
}

.plan-card.active {
    border-color: #dc3545;
    box-shadow: 0 0 0 4px rgba(220, 53, 69, 0.15);
}

.plan-card.active h5,
.plan-card.active h2 {
    color: #dc3545 !important;
}
</style>


<!-- FORM -->
<section id="consult-form" class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">

                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-body p-4 p-md-5">

                        <h3 class="text-center  fw-bold mb-4 text-danger-book">
                            Book Your Consultation
                        </h3>
                        <!-- <pre><?php echo e(print_r($errors->all(), true)); ?></pre> -->
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

                            <input type="hidden" name="type" value="<?php echo e($type); ?>" >
                            <input type="hidden" name="planSelect" value="<?php echo e($name); ?>">

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Your Message</label>
                                <textarea rows="4" name="message" class="form-control" placeholder="Describe your requirement"><?php echo e(old('message')); ?></textarea>
                            </div>

                            <button class="btn theme-button-one btn-lg w-100 rounded-pill">
                                Proceed to Payment
                            </button>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\anish\Downloads\app\resources\views/website/book_your_consultation.blade.php ENDPATH**/ ?>