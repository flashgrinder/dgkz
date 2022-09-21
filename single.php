<?php get_header(); ?>

<?php the_post(); ?>
<!-- News -->
<section class="news">
    <div class="news__body container">
        <div class="news__pic">
            <?php
                $default_attr = [
                    'class'	=> "news__img",
                    'alt'   => get_the_title()
                ];
                            
                echo get_the_post_thumbnail( $post->ID, 'full', $default_attr ); 
            ?>
        </div>
        <div class="news__inner">
            <article class="news__article">
                <header class="news__header">
                    <h1 class="news__title title title--large title--dark title--w-semibold title--uppercase title--indent">
                        <?php the_title(); ?>
                    </h1>
                </header>
                <div class="news__content wysiwyg">
                    <?php the_content(); ?>
                </div>
                <footer class="news__footer">
                </footer>
            </article>
            <aside class="news__aside">
                <div class="news__file">
                    <img src="<?php echo STANDART_DIR; ?>img/uploads/book-1.png" alt="" class="news__file-img">
                    <p class="news__file-text text text--medium text--dark text--w-regular">
                        Пожалуйста, заполните форму ниже, чтобы получить этот файл по электронной почте.
                    </p>
                </div>
                <div class="news__wraper-form">
                    <!-- Form-page -->
                    <div class="form-page">
                        <div class="form-page__body">
                            <?php echo do_shortcode( '[contact-form-7 id="13" title="Форма на станице новости" html_class="form-page__form"]' ); ?>
                        </div>
                    </div>
                    <!-- /. Form-page -->
                </div>
            </aside>
        </div>
    </div>
</section>
<!-- /. News -->

<?php get_footer(); ?>