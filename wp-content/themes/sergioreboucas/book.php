<section id="book">
    <div class="row">
        <?php query_posts('post_type=livro'); ?>
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
                <div class="col-md-5 presentation">
                    <p><?php the_field('apresentacao') ?></p>
                    <p class="legend"><?php the_field('legenda') ?></p>
                </div>
                <div class="col-md-3 livro">
                    <img src="<?php the_field('foto') ?>" alt="" class="book-img">
                </div>
                <div class="col-md-4 sinopse">
                    <p><?php the_field('sinopse') ?></p>
                    <p><a href="<?php the_field('link') ?>" class="main-link" target="_blank"><?php the_field('label') ?></a></p>
                </div>
            <?php endwhile; ?>
            <?php else: ?>
                Não há texto cadastrado...
            <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
</section>