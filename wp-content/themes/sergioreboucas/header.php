<header class="cabecalho">
  <?php query_posts('post_type=header'); ?>
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <div class="row">
          <div class="col-md-6 logo"><a href="<?php bloginfo('url'); ?>"><img src="<?php the_field('logo'); ?>" alt="Sérgio Rebouças" class="logo-img"></a></div>
          <div class="col-md-6">
            <div class="links">
              <a href="<?php the_field('link-nav-1'); ?>" class="main-link" target="_blank"><?php the_field('label-nav-1'); ?></a>
              <a href="<?php the_field('link-nav-2'); ?>" class="main-link" target="_blank"><?php the_field('label-nav-2'); ?></a>
            </div>
            <div class="sociais">
              <style>
                .<?php the_field('icone_social_1'); ?> {
                  color: <?php the_field('cor_icone_1'); ?>;
                }
                .<?php the_field('icone_social_2'); ?> {
                  color: <?php the_field('cor_icone_2'); ?>;
                }
                .<?php the_field('icone_social_3'); ?> {
                  color: <?php the_field('cor_icone_3'); ?>;
                }
              </style>
              <ul>
                <li><a href="<?php the_field('rede_social_1'); ?>" class="icon yb" target="_blank"><span class="<?php the_field('icone_social_1'); ?>"></span></a></li>
                <li><a href="<?php the_field('rede_social_2'); ?>" class="icon fb" target="_blank"><span class="<?php the_field('icone_social_2'); ?>"></span></a></li>
                <li><a href="<?php the_field('rede_social_3'); ?>" class="icon ig" target="_blank"><span class="<?php the_field('icone_social_3'); ?>"></span></a></li>
                <li><?php the_field('ig'); ?></li>
              </ul>
            </div>
                <div class="about">
                  <p><?php the_field('descricao'); ?></p>
                  <p><a href="<?php the_field('link'); ?>" class="main-link" target="_blank"><?php the_field('nome_do_link'); ?></a></p>
                </div>
            </div>
        </div>
        <div class="pic1">
          <img class="pic-header" src="<?php the_field('foto'); ?>" alt="">
        </div>
      <?php endwhile; ?>
        <?php else: ?>
          Não há texto cadastrado...
        <?php endif; ?>
<?php wp_reset_query(); ?>
</header>
