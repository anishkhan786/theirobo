

<?php $__env->startSection('title', 'Cloud Consulting — IROBO AI AND ROBOTICS'); ?>

<?php $__env->startSection('content'); ?>


<style>

/* =============================================
   Our Solution / Services Cards
============================================= */
.single-solution-block,
.modern-card {
    background: #fff;
    border-radius: 12px;
    padding: 30px 20px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    text-align: center;
    margin-bottom: 30px;
}

.single-solution-block:hover,
.modern-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
}

.single-solution-block h5,
.modern-card h5 {
    font-size: 1.3rem;
    margin-bottom: 15px;
    color: #001648;
}

.single-solution-block p,
.modern-card p {
    font-size: 1rem;
    color: #555;
}

.modern-card .card-icon {
    font-size: 2.5rem;
    margin-bottom: 15px;
    color: #001648;
}

/* =============================================
   CTA Sections
============================================= */
.cta-light {
    background-color: #001648;
    color: #fff;
    padding: 80px 0;
}

.cta-light h2 {
    font-size: 2.5rem;
    font-weight: 700;
    color: #ffffff;
}

.cta-light .small {
    font-size: 0.9rem;
    color: #e0e0e0;
}

.premium-cta {
    background-color: #f0f4ff;
    border-radius: 12px;
    padding: 60px 30px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
}

.premium-cta h2 {
    font-size: 2.2rem;
    margin-bottom: 20px;
    color: #001648;
}

.premium-cta p {
    font-size: 1.1rem;
    color: #333;
}

.premium-cta .btn {
    font-size: 1.1rem;
}

/* =============================================
   Responsive Adjustments
============================================= */
@media (max-width: 992px) {
    .inner-hero h1 {
        font-size: 2.2rem;
    }
    .inner-hero p {
        font-size: 1rem;
    }
}

@media (max-width: 768px) {
    .hero-actions .btn {
        width: 100%;
        margin-bottom: 10px;
    }
}
</style>

<!-- =============================================
    Hero Section
============================================= -->
<section class="inner-hero cloud-hero">
    <div class="hero-overlay"></div>

    <div class="hero-content container">
        <span class="hero-tag">Cloud Services</span>
        <h1>Cloud Consulting</h1>
        <p>
            Designing secure, scalable, and cost-optimized cloud solutions
            that accelerate growth and operational efficiency.
        </p>

        <div class="hero-actions">
            <a href="<?php echo e(url('contact-us')); ?>" class="btn btn-primary">
                Get Free Consultation
            </a>
            <a href="<?php echo e(url('services')); ?>" class="btn btn-outline">
                View All Services
            </a>
        </div>
    </div>
</section>

<!-- =============================================
    Overview Section
============================================= -->
<section class="our-solution section-spacing">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="<?php echo e(asset('assets/img/cloud-consulting.webp')); ?>" class="img-fluid rounded shadow" alt="Cloud Consulting Services">
            </div>

            <div class="col-md-6">
                <h3 class="text-danger-book">Transform Your Business With Intelligent Cloud</h3>
                <p>
                    We help organizations modernize applications, migrate workloads,
                    and build cloud-native systems powered by automation, AI,
                    and modern DevOps practices.
                </p>
            </div>
        </div>
    </div>
</section>


<!-- =============================================
    How Cloud Consulting Works
============================================= -->
<section class="section-spacing section-alt">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="text-danger-book">Our Cloud Consulting Services</h2>
            <p class="mt-2">Enterprise-grade cloud solutions tailored for growth</p>
        </div>

        <div class="row g-4">
            <?php
                $services = [
                    ['icon' => '☁', 'title' => 'Cloud Migration', 'desc' => 'Move your applications and data securely to the cloud with zero business disruption.'],
                    ['icon' => '⚙', 'title' => 'DevOps & Automation', 'desc' => 'CI/CD pipelines, infrastructure as code, and faster, error-free deployments.'],
                    ['icon' => '🔐', 'title' => 'Cloud Security', 'desc' => 'Identity management, compliance, threat detection & monitoring.'],
                ];
            ?>

            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-md-6">
                <div class="modern-card">
                    <div class="card-icon"><?php echo e($service['icon']); ?></div>
                    <h5><?php echo e($service['title']); ?></h5>
                    <p><?php echo e($service['desc']); ?></p>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<!-- =============================================
    Why Choose IROBO
============================================= -->
<section class="cta-light section-spacing">
    <div class="container text-center">
        <h2>Why Choose IROBO for Cloud Consulting?</h2>
        <p class="mt-2">We align cloud strategy with real business objectives</p>

        <div class="row mt-4">
            <div class="col-md-3">
                <strong>✔ Cloud-First Approach</strong>
                <p class="small">Modern &amp; scalable architecture</p>
            </div>
            <div class="col-md-3">
                <strong>✔ Security by Design</strong>
                <p class="small">Enterprise-grade security</p>
            </div>
            <div class="col-md-3">
                <strong>✔ Cost Optimization</strong>
                <p class="small">Pay only for what you use</p>
            </div>
            <div class="col-md-3">
                <strong>✔ Expert Engineers</strong>
                <p class="small">Certified cloud professionals</p>
            </div>
        </div>
    </div>
</section>

<!-- =============================================
    Final CTA
============================================= -->
<section class="section-spacing">
    <div class="container">
        <div class="premium-cta text-center">
            <h2>Ready to Build a Smarter Cloud Strategy?</h2>
            <p class="mt-3">
                Let our experts design a secure, scalable,
                and future-ready cloud infrastructure for your business.
            </p>

            <a href="<?php echo e(url('services/cloud-consulting/purchase-cloud-consultation')); ?>" class="btn theme-button-one btn-lg mt-4">
                🚀 Book Cloud Strategy Session
            </a>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\anish\Downloads\app\resources\views/website/cloud-consulting.blade.php ENDPATH**/ ?>