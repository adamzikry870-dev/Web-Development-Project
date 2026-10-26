<?php
ob_start();
?>

<section class="p-4 p-md-5 mb-4 bg-white rounded shadow-sm">
    <div class="row align-items-center g-4">
        <div class="col-lg-7">
            <div class="d-flex align-items-center gap-2 mb-3 text-primary">
                <i class="bi bi-keyboard fs-2"></i>
                <span class="fw-semibold">ErgoMechs</span>
            </div>
            <h1 class="display-5 fw-bold">Welcome to ErgoMechs</h1>
            <p class="lead text-muted">Find a more comfortable way to work, one keystroke at a time.</p>
            <a href="products.php" class="btn btn-primary">Explore keyboards</a>
        </div>
        <div class="col-lg-5 text-center">
            <i class="bi bi-keyboard home-keyboard-icon" aria-hidden="true"></i>
        </div>
    </div>
</section>

<section class="mb-4" aria-label="Featured keyboards">
    <div id="homeCarousel" class="carousel slide rounded shadow-sm overflow-hidden" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="home-slide text-center p-5">
                    <i class="bi bi-hand-index-thumb display-3 mb-3" aria-hidden="true"></i>
                    <h2 class="h3">Comfort for every workday</h2>
                    <p class="mb-0">Discover keyboards designed around the way you work.</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="home-slide home-slide-alt text-center p-5">
                    <i class="bi bi-stars display-3 mb-3" aria-hidden="true"></i>
                    <h2 class="h3">Find your perfect setup</h2>
                    <p class="mb-0">Explore thoughtful designs and keyboard essentials.</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="home-slide home-slide-dark text-center p-5">
                    <i class="bi bi-lightning-charge display-3 mb-3" aria-hidden="true"></i>
                    <h2 class="h3">Make every keystroke count</h2>
                    <p class="mb-0">Browse the ErgoMechs collection and get started.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<style>
.home-keyboard-icon {
    color: #0d6efd;
    font-size: clamp(6rem, 18vw, 12rem);
    animation: home-float 3s ease-in-out infinite;
}

.home-slide {
    min-height: 250px;
    color: #17324d;
    background: #eaf3ff;
}

.home-slide-alt {
    color: #37304d;
    background: #f0edfa;
}

.home-slide-dark {
    color: #fff;
    background: #26384a;
}

</style>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>
