<section id="about">
    <div class="row">
        <?php query_posts('post_type=sobre'); ?>
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
                <div class="col-md-6 col-sm-12 text">
                    <h1 class="about-title"><?php the_title(); ?></h1>
                    <p><?php the_field('descricao') ?></p>
                    <p><a href="<?php the_field('link') ?>" class="main-link" target="_blank"><?php the_field('label') ?></a></p>
                </div>
                <div class="col-md-6 col-sm-12 profile-box">
                    <img src="<?php the_field('foto') ?>" alt="" class="profile">
                </div>

            <?php endwhile; ?>

            <?php else: ?>
                Não há texto cadastrado...
            <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
</section>