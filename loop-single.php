<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<section id="destaque" style="background-image:url(<?php echo destacada(); ); ?>)">
    <article>
        <h2><?php the_title(); ?></h2>
        <h3><?php echo get('subtitulo') ?></h3>
    </article>
</section>
<section id="destaqueMenu">
    <article>
        <ul>
            <li><a data-scroll href="#destaqueImovel">O Ímovel</a></li>
            <li><a data-scroll href="#destaqueFotos">Fotos</a></li>
            <li><a data-scroll href="#destaqueDiferenciais">Diferenciais</a></li>
            <li><a data-scroll href="#destaquePlantas">Plantas</a></li>
            <li><a data-scroll href="#destaqueMapa">Localização</a></li>
        </ul>
    </article>
</section>
<section id="destaqueImovel">
    <article>
        <h3>O Imóvel</h3>
        <?php echo get('o_imovel') ?>
    </article>
</section>
<section id="destaqueFotos">
    <article>
        <h3>Fotos</h3>
        <ul>
        	<?php 
				$fotos = get_group('fotos');
				foreach ($fotos as $value) {
			?>
			<li>
				<a rel="prettyPhoto[grupo<?php echo get_the_id(); ?>]" href="<?php echo $value['fotos_foto']['src'] ?>">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php echo $value['fotos_foto']['src'] ?>&w=217&h=217&zc=1">
				</a>
			</li>
			<?php } ?>
        </ul>
    </article>
</section>
<section id="destaqueDiferenciais">
    <article>
        <h3>Diferenciais</h3>
 		<?php echo get('diferenciais') ?>       
    </article>
</section>
<section id="destaquePlantas">
    <article>
        <h3>Plantas</h3>
        <ul>
            <?php 
				$fotos = get_group('plantas');
				foreach ($fotos as $value) {
			?>
			<li>
				<a rel="prettyPhoto[grupo<?php echo get_the_id(); ?>]" href="<?php echo $value['plantas_planta']['src'] ?>">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php echo $value['plantas_planta']['src'] ?>&w=217&h=217&zc=1">
				</a>
			</li>
			<?php } ?>
        </ul>
    </article>
</section>
<section id="destaqueMapa">
    <article>
        <h3>Localizacao</h3>
        <h4><?php echo get('localizacao_endereco'); ?></h4>
        <?php if(get('localizacao_mapa')){ ?>
        <img src="<?php echo get('localizacao_mapa') ?>">
        <?php } ?>
    </article>
</section>

<?php endwhile; // end of the loop. ?>

