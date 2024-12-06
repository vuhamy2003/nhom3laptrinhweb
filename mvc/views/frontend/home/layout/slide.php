 <!-- slide -->
 <section class="slide">
    <div class="slick_slide">
        <div>
            <img src="public/build/images/anhbia.png" alt="">
            <div class="description">
                <a href="#target-section">Mua ngay</a>
                
            </div>
        </div>
        <div>
            <img src="public/build/images/anhbia2.png" alt="">
            <div class="description">
                <a href="#target-section">Mua ngay</a>
                
            </div>
        </div>
    </div>
</section>
<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth'
            });
        }
    });
});

</script>