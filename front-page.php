<?php get_header();?>


<div class="section-1-Home">
    <div class="row">
        <div class="col-xs-6">
             <div class="Big-SloganText">YOUR</div>
        </div>
        <div class="col-xs-6">
            <div class="Small-SloganText">MUSIC</div>
            <div class="Small-SloganText-2">NEWS</div>
            <div class="Small-SloganText-2">STUDENT SOUND</div>

        </div>
    </div>

</div>




        <script src="https://unpkg.com/scrollreveal"></script>          <!-- https://scrollrevealjs.org/-->
        <script>
    window.sr = ScrollReveal( {duration : 5000}); 
    sr.reveal('.Big')

    window.sr = ScrollReveal( {duration : 5000}); 
    sr.reveal('.Smol')

    window.sr = ScrollReveal( {duration : 5000}); 
    sr.reveal('.News')
</script>


<?php get_footer();?>