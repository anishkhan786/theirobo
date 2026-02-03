

<?php $__env->startSection('title', 'Robotic Consulting — IROBO'); ?>

<?php $__env->startSection('content'); ?>

<!-- =============================================
    Theme Inner Banner
============================================= -->


<section class="inner-hero cloud-hero">
    <div class="hero-overlay"></div>

    <div class="hero-content container">
        <span class="hero-tag">Robotic Services</span>
        <h1>Robotic Consulting</h1>
        <p>
            Reinventing automation with AI-powered
            robotic systems for smarter enterprises.
        </p>

        <div class="hero-actions">
            <a href="<?php echo e(route('w-contactUs')); ?>" class="btn btn-primary">Get Free Consultation</a>
            <a href="<?php echo e(route('w-services')); ?>" class="btn btn-outline">View All Services</a>
        </div>
    </div>
</section>
<!-- =============================================
    Overview Section
============================================= -->
<div class="our-solution section-spacing">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="<?php echo e(asset('assets/img/robotic-consulting.png')); ?>"
                     class="img-fluid rounded shadow"
                     alt="Robotic Consulting">
            </div>

            <div class="col-md-6">
                <h3 class="text-danger-book">Smart Automation for Modern Enterprises</h3>
                <p>
                    We design and deploy intelligent robotic
                    automation solutions that optimize operations,
                    reduce errors, and significantly enhance productivity
                    across industries.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- =============================================
    Robotic Services
============================================= -->
<div class="our-solution section-spacing section-alt">
    <div class="container">
        <div class="theme-title-one text-center">
            <h2 class="text-danger-book">Our Robotic Services</h2>
        </div>

        <div class="wrapper">
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="single-solution-block">
                        <h5 class="text-danger-book">RPA Development</h5>
                        <p>
                            Automating repetitive business
                            processes using intelligent bots
                            for speed and accuracy.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="single-solution-block">
                        <h5 class="text-danger-book">Vision-Based Robotics</h5>
                        <p>
                            AI-powered computer vision
                            systems enabling robots to
                            detect, analyze, and act in real time.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="single-solution-block">
                        <h5 class="text-danger-book">Process Optimization</h5>
                        <p>
                            Workflow redesign and automation
                            consulting to maximize operational
                            efficiency and scalability.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- =============================================
    CTA Banner
============================================= -->
<div class="section-spacing cta-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="cta-box text-center">
                    <h2 class="mb-3 text-danger-book">
                        Ready to Get Expert Robotic Consultation?
                    </h2>

                    <p class="mb-4 text-muted">
                        Purchase a consultation session and let our
                        experts guide you with the best automation strategy.
                    </p>

                    <a href="<?php echo e(route('purchase.robotic.consultation')); ?>"
                       class="theme-button-one">
                        Purchase Consultation
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\anish\Downloads\app\resources\views/website/robotic-consulting.blade.php ENDPATH**/ ?>