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
                <span>Você
                <?php
                #some variables for the script to use
                #if you have some reason to change these, do.  but wordpress can handle it
                $adminemail = get_option('admin_email'); #the administrator email address, according to wordpress
                $website = get_bloginfo('url'); #gets your blog's url from wordpress
                $websitename = get_bloginfo('name'); #sets the blog's name, according to wordpress

                if (!isset($_SERVER['HTTP_REFERER'])) {
                    #politely blames the user for all the problems they caused
                        echo "tentou acessar "; #starts assembling an output paragraph
                    $casemessage = "Não está tudo perdido!";
                } elseif (isset($_SERVER['HTTP_REFERER'])) {
                    #this will help the user find what they want, and email me of a bad link
                    echo "clicou em um link para "; #now the message says You clicked a link to...
                        #setup a message to be sent to me
                    $failuremess = "Um usuário tentou acessar  $website"
                        .$_SERVER['REQUEST_URI']." e recebeu um erro 404 (página não encontrada). ";
                    $failuremess .= "Não foi culpa deles, então tente arrumar o problema.  
                        Eles vieram de  ".$_SERVER['HTTP_REFERER'];
                    mail($adminemail, "'Bad Link' para ".$_SERVER['REQUEST_URI'],
                        $failuremess, "De: $websitename <noreply@$website>"); #email you about problem
                    $casemessage = "Um administrador foi avisado sobre este problema.";#set a friendly message
                }
                echo " ".$website.$_SERVER['REQUEST_URI']; ?> 
                e esta página não existe. <?php echo $casemessage; ?>  Você pode clicar em voltar e tentar novamente
                ou procurar o que deseja na barra de pesquisa.
                </span>
            </div>
        </div>
        <div class="col-lg-3">
            <?php dynamic_sidebar('asidewidget'); ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>



