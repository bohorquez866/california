<?php
/* Template Name: Template - About Us*/
get_header(); ?>
<!--Banner About -->
    <section class="about_banner">
        <div class="about_banner_info_wap"  style="background-image: url(<?php the_field('imagen_servicio_reversa','options'); ?>);">
            <div class="about_banner_info_title">
                <div class="title_general big color-black">
                    <h1>
                        <?php
                            $title = get_field('titulo_about');
                            $title_array = explode('/', $title);
                            $first_word = $title_array[0];
                            $second_word = $title_array[1];
                        ?>
                        <?php echo $first_word; ?> <span><?php echo $second_word; ?></span>
                    </h1>
                </div>
                <div class="about_banner_info"><?php the_field('texto_about'); ?></div>
            </div>
        </div>
        <div class="about_banner_image" style="background-image: url(<?php the_field('banner_about'); ?>);"></div>
    </section>
<!--Benefits About -->
    <section class="about_benefits">
        <?php echo do_shortcode('[benefits_section]'); ?>
    </section>
<?php get_footer(); ?>