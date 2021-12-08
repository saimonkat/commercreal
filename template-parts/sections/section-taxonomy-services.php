<?php $current_term = get_queried_object(); ?>
<section class="speciallization_area ab_spec services_block">
    <div class="container">
        <div class="row text-center">
            <div class="<?php echo $current_term->term_id == 13 ? 'col-lg-6 col-sm-6 current' : 'col-lg-3 col-sm-6'; ?> spec_item--container">
                <div class="spec_item">
                    <a href="<?php echo get_term_link(13); ?>" class="spec_item__top">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon/spec-1.svg" alt="">
                        <div class="h4">DEVELOPER</div>
                    </a>
                </div>
            </div>
            <div class="<?php echo $current_term->term_id == 15 ? 'col-lg-6 col-sm-6 current' : 'col-lg-3 col-sm-6'; ?> spec_item--container">
                <div class="spec_item">
                    <a href="<?php echo get_term_link(15); ?>" class="spec_item__top">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon/spec-2.svg" alt="">
                        <div class="h4">СОБСТВЕННИК</div>
                    </a>
                </div>
            </div>
            <div class="<?php echo $current_term->term_id == 14 ? 'col-lg-6 col-sm-6 current' : 'col-lg-3 col-sm-6'; ?> spec_item--container">
                <div class="spec_item">
                    <a href="<?php echo get_term_link(14); ?>" class="spec_item__top">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon/spec-3.svg" alt="">
                        <div class="h4">RETAILER</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row services-content">
            <div class="col-12 col-md-8">
                <div class="services-content--text">
                    <?php echo term_description(); ?>
                </div>
                <div class="row">
                    <?php if (have_posts()) :
                        $counter = 1;
                        while (have_posts()) : the_post();
                            echo $counter === 1 ? '<div class="col-12 col-md-6"><ul class="custom-ul">' : ''; 
                            echo $counter % 9 === 0 ? '</ul></div><div class="col-12 col-md-6"><ul class="custom-ul">' : ''; ?>
                            <li>
                                <a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a>
                            </li>
                        <?php 
                        $counter++;
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>