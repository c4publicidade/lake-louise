<section id="space-total" class="obras">
	<article class="container">
		<h1 class="center">Obras Fase 1</h1>
		<div class="col-md-6">
		<?php
            ///////////// MODULO 1 (Copie todo o conteúdo e altere o módulo: 'modulo_1')
            $modulo_1 = get_option('obras');
            $porcentagens = $modulo_1['geral_obras_porcentagem'];

            if($modulo_1) {
                echo '<div class="single-modulo">';
                echo '<h2>Evolução das Obras</h2>';

                if($porcentagens) {
                    echo '<div class="all">';
                    foreach($porcentagens as $porcentagem) {
                        $texto = substr($porcentagem.'@', 0, strpos($porcentagem, '@'));
                        $porcent = substr($porcentagem, strpos($porcentagem, "@") + 1);
                        ?>

                        <div class="single">
                            <p><?php echo $texto; ?> <span><?php echo str_replace('.', ',', $porcent); ?></span></p>
                            <div class="bar-container">
                                <div class="bar">
                                    <div class="porcentagem" style="width: <?php echo str_replace(',', '.', $porcent); ?>;"></div>
                                </div>
                            </div>
                        </div>

                    <?php
                    }
                    echo '</div>';
                } // fim if(porcentagens)
            }

			          // Fotos
					  $datas = $modulo_1['geral_obras_data_fotos'];

					  if($datas) {
			
						echo '<div class="gallery">';
			
						foreach ($datas as $data) {
						  $single_data = $data['geral_obras_data'];
						  $fotos = $data['geral_obras_fotos'];
              
			
						  echo '<h3>'.date('d-m-Y', strtotime($single_data)).'</h3>';
			
						  if($fotos) {
			
							echo '<div class="galeria-slider">';
			
							foreach($fotos as $foto) {
								echo '<div class="galeria-foto" style="">';
								echo '<a class="shadow" href="'.$foto.'" data-toggle="lightbox" data-gallery="data_ext"><img width="100%" src="' .$foto. '" alt="foto do banner" rel="preload"></a>';
								echo '</div>';
							}
			
							echo '</div>';
			
						  }
			
						}
			
						echo '</div>';
			
					  }
			
					echo '</div>';
        ?>


