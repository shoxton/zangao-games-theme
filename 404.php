<?php get_header(); ?>

<div class="container page-con">
    <div class="row">
        <div class="col-lg-9">
            <div class="no-results">
                <p>Ooops, parece que esta página não existe ou foi removida.</p>
                <span>Desculpe o transtorno. Tente acessar a <a href="<?php echo home_url(); ?>"> página inicial</a>.</span>
                <div class="sad-face">
                    <i class="far fa-frown"></i>
                </div>
                <span>

                	Você tentou acessar <?php echo "" .get_bloginfo('url').$_SERVER['REQUEST_URI']; ?> mas esta página não existe ou foi removida. Você pode clicar em voltar e tentar novamente ou procurar o que deseja na barra de pesquisa.
                	
                </span>
            </div>
        </div>
        <div class="col-lg-3">
            <?php dynamic_sidebar('asidewidget'); ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>



