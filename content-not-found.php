<div class="no-results">
    <?php if( is_search()) { ?>
    <p>Nenhum resultado foi encontrado para " <?php the_search_query(); ?> " </p>
    <span>Desculpe, mas nada correspondeu aos seus termos de pesquisa. Por favor, tente novamente com palavras-chave diferentes, ou tente acessar a <a href="<?php echo home_url(); ?>"> página inicial</a>.</span>
    <?php } else { ?>
    <p>Nenhum resultado foi encontrado<p>
    <span>Desculpe pela inconveniência, parece que esta pagina está vazia.</span>
    <?php } ?>
    <div class="sad-face">
        <i class="far fa-frown"></i>
    </div>
</div>