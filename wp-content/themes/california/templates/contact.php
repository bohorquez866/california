<?php
/* Template Name: Template - Contact */
get_header(); ?>
<!-- Contact -->
    <section class="contact_section">
        <div class="contact_section_info">
            <div class="contact_section_info_wrap">
                <div class="title_general big color-black">
                    <h1>
                        <?php
                            $title = get_field('titulo_contact_prin');
                            $title_array = explode('/', $title);
                            $first_word = $title_array[0];
                            $second_word = $title_array[1];
                        ?>
                        <?php echo $first_word; ?> <span><?php echo $second_word; ?></span>
                    </h1>
                </div>
                <div class="contact_section_parraf">
                    <p><?php the_field('texto_contact_prin'); ?></p>
                </div>
                <div class="contact_section_form">
                    <?php get_template_part( 'templates/content-form'); ?>
                </div>
            </div>
        </div>
        <div class="contact_section_image">
            <div class="swiper-container contactSlider">
                <div class="swiper-wrapper">
                    <?php if( have_rows('slider_contact_prin') ):  ?>
                    <?php while( have_rows('slider_contact_prin') ): the_row(); ?>
                        <div class="home_contact_slider_item_wrap swiper-slide">
                            <div class="home_contact_slider_item" style="background-image: url(<?php the_sub_field('item_slider_contact_prin'); ?>);">
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>
