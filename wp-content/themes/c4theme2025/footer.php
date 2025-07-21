</main>
<footer>

    <?php wp_footer(); ?>
    <section class="rodape" >
      <article class="container">
        <p>
          Desenvolvido por C4 Publicidade
        </p>
        <p>
          Todos os direitos reservados | Lake Louise Taquaral
        </p>
      </article>
    </section>
    <!-- ////////////////////// LGPD - PARTE #3/3 || Colocar após o jQuery ////////////////////// -->
      <script src="<?php bloginfo('template_url'); ?>/js/cookies.min.js"></script>
      <script>
        <?php
        // Pega o site atual sem https para ser utilizado no nome do cookie para que cada cookie seja único
        $website = home_url(); $website = preg_replace('#^https?://#', '', $website);
        ?>
        // Verifica se Cookie existe e executa a ação
        if (document.cookie.indexOf('cookielgpd_<?php echo $website; ?>') >= 0) {
            // Se Existe, não exibe o aviso          
          }
        else {
            // Se não existe, exibe o aviso
            $('.lgpd').fadeIn(300);
        }

        // Seta o Cookie quando clicar para fechar o aviso
        $('.lgpd #fecha').click(function() {

          // Esconde o aviso
          $('.lgpd').hide();

          var date = new Date();

          // Minutos: o primeiro número dos 3 é a quantidade de minutos
          date.setTime(date.getTime() + (30 * 60 * 1000));
          // Usar 'date' no 'expires' para transformar em minutos, algum valor numérico diretamente em 'expires' é a quantidade de dias desejada
          Cookies.set('cookielgpd_<?php echo $website; ?>', 'cookielgpd_<?php echo $website; ?>_value', { expires: 30, path: '/' });

        });
      </script>
      <script src="https://www.c4publicidade.com.br/lgpd/lgpd.js"></script>
      <script src="<?php bloginfo('template_url'); ?>/js/lgpd.js"></script>
      <!-- ////////////////////// FIM PARTE #3 ////////////////////// -->

      <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
      <!-- Materialize Scripts -->
      <script src="<?php bloginfo('template_url'); ?>/js/materialize.js"></script>
      <!-- inicializações -->
      <script src="<?php bloginfo('template_url'); ?>/js/init.js"></script>
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script src="https://api.mapbox.com/mapbox-gl-js/v2.8.1/mapbox-gl.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
      <script src="<?php bloginfo('template_url'); ?>/js/fslightbox.js"></script>
      <script src="<?php bloginfo('template_url'); ?>/js/planta.js"></script>
      <script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
      <!-- Script Slick carousel -->
      <script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
      <script>
        document.addEventListener('DOMContentLoaded', () => {

            const isMobile = window.innerWidth <= 768; // Altere para a largura que você quiser definir como "mobile"
            if (isMobile) {
                $('.banner-icones').slick({
                    dots: true,
                    infinite: true,
                    speed: 300,
                    fade: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    prevArrow: "<img class='a-left control-c prev slick-prev' src='<?php bloginfo('template_url'); ?>/img/voltar_pqn.webp' alt='Imagem de seta apontando para a esquerda'>",
                    nextArrow: "<img class='a-right control-c next slick-next' src='<?php bloginfo('template_url'); ?>/img/avancar_pqn.webp' alt='Imagem de seta apontando para a direita'>",
                    responsive: [
                      {
                        breakpoint: 600,
                        settings: {
                          slidesToShow: 1,
                          slidesToScroll: 1
                        }
                      },
                    ]
                    
                });

            }

          $('.banner-slider').slick({
            dots: true,
            infinite: true,
            speed: 300,
            fade: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            prevArrow:"<img class='a-left control-c prev slick-prev' src='<?php bloginfo('template_url'); ?>/img/voltar_pqn.webp' alt='Image de seta apontando para a esquerda'>",
            nextArrow:"<img class='a-right control-c next slick-next' src='<?php bloginfo('template_url'); ?>/img/avancar_pqn.webp' alt='Image de seta apontando para a direita'>",
            responsive: [
              {
                breakpoint: 600,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
                }
              },
            ]
          });
          $('.galeria-slider').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            prevArrow:"<img class='a-left control-c prev slick-prev' src='<?php bloginfo('template_url'); ?>/img/voltar_gde.webp' alt='Image de seta apontando para a esquerda'>",
            nextArrow:"<img class='a-right control-c next slick-next' src='<?php bloginfo('template_url'); ?>/img/avancar_gde.webp' alt='Image de seta apontando para a direita'>",
            responsive: [
              {
                breakpoint: 600,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 2
                }
              },
            ]
          });
        
      });
      </script>
  <script>

// Defina seu token de acesso Mapbox
   mapboxgl.accessToken = 'pk.eyJ1Ijoid2ViY3F1YXRybyIsImEiOiJjbThhd2VjbmgwbTc3Mm1wdnlqNmtveXZlIn0.m97TJYvvE1VvN1EwIOjddQ'; // Substitua pelo seu token de acesso
   
   // Inicialize o mapa
   var map = new mapboxgl.Map({
     container: 'map', // ID do elemento onde o mapa será renderizado
     style: 'mapbox://styles/mapbox/streets-v11', // Estilo do mapa
     center: [-47.049736, -22.865751], // Latitude e longitude do centro
     zoom: 14 // Nível de zoom
   });

   // Array com 14 pontos e ícones personalizados
   var pontos = [
    //  { lngLat: [-47.049425, -22.864299], icon: 'https://c4publicidade.com.br/lakeLouiseNew/wp-content/themes/c4theme2025/img/map/icones/pranchetaLake.png', hoverIcon: 'https://c4publicidade.com.br/lakeLouiseNew/wp-content/themes/c4theme2025/img/map/icones/pranchetaLake.png' },
     { lngLat: [-47.046732, -22.858484], icon: 'https://c4publicidade.com.br/lakeLouiseNew/wp-content/themes/c4theme2025/img/map/pins/pin1.png', hoverIcon: 'https://c4publicidade.com.br/lakeLouiseNew/wp-content/themes/c4theme2025/img/map/icones/prancheta1.png' },
     { lngLat: [-47.046841, -22.858656], icon: 'https://c4publicidade.com.br/lakeLouiseNew/wp-content/themes/c4theme2025/img/map/pins/pin2.png', hoverIcon: 'https://c4publicidade.com.br/lakeLouiseNew/wp-content/themes/c4theme2025/img/map/icones/prancheta2.png' },
     { lngLat: [-47.051172, -22.865769], icon: 'https://c4publicidade.com.br/lakeLouiseNew/wp-content/themes/c4theme2025/img/map/pins/pin3.png', hoverIcon: 'https://c4publicidade.com.br/lakeLouiseNew/wp-content/themes/c4theme2025/img/map/icones/prancheta3.png' },
     { lngLat: [-47.049273, -22.866650], icon: 'https://c4publicidade.com.br/lakeLouiseNew/wp-content/themes/c4theme2025/img/map/pins/pin4.png', hoverIcon: 'https://c4publicidade.com.br/lakeLouiseNew/wp-content/themes/c4theme2025/img/map/icones/prancheta4.png' },
     { lngLat: [-47.054254, -22.965228], icon: 'https://c4publicidade.com.br/lakeLouiseNew/wp-content/themes/c4theme2025/img/map/pins/pin5.png', hoverIcon: 'https://c4publicidade.com.br/lakeLouiseNew/wp-content/themes/c4theme2025/img/map/icones/prancheta5.png' },
     { lngLat: [-47.046977, -22.859079], icon: 'https://c4publicidade.com.br/lakeLouiseNew/wp-content/themes/c4theme2025/img/map/pins/pin6.png', hoverIcon: 'https://c4publicidade.com.br/lakeLouiseNew/wp-content/themes/c4theme2025/img/map/icones/prancheta6.png' },
     { lngLat: [-47.047476, -22.872443], icon: 'https://c4publicidade.com.br/lakeLouiseNew/wp-content/themes/c4theme2025/img/map/pins/pin7.png', hoverIcon: 'https://c4publicidade.com.br/lakeLouiseNew/wp-content/themes/c4theme2025/img/map/icones/prancheta7.png' },
     { lngLat: [-47.049286, -22.871602], icon: 'https://c4publicidade.com.br/lakeLouiseNew/wp-content/themes/c4theme2025/img/map/pins/pin8.png', hoverIcon: 'https://c4publicidade.com.br/lakeLouiseNew/wp-content/themes/c4theme2025/img/map/icones/prancheta8.png' },
     { lngLat: [-47.044942, -22.859152], icon: 'https://c4publicidade.com.br/lakeLouiseNew/wp-content/themes/c4theme2025/img/map/pins/pin9.png', hoverIcon: 'https://c4publicidade.com.br/lakeLouiseNew/wp-content/themes/c4theme2025/img/map/icones/prancheta9.png' },
     { lngLat: [-47.051084, -22.873273], icon: 'https://c4publicidade.com.br/lakeLouiseNew/wp-content/themes/c4theme2025/img/map/pins/pin10.png', hoverIcon: 'https://c4publicidade.com.br/lakeLouiseNew/wp-content/themes/c4theme2025/img/map/icones/prancheta10.png' },
     { lngLat: [-47.053332, -22.875454], icon: 'https://c4publicidade.com.br/lakeLouiseNew/wp-content/themes/c4theme2025/img/map/pins/pin11.png', hoverIcon: 'https://c4publicidade.com.br/lakeLouiseNew/wp-content/themes/c4theme2025/img/map/icones/prancheta11.png' },
     { lngLat: [-47.063113, -22.847793], icon: 'https://c4publicidade.com.br/lakeLouiseNew/wp-content/themes/c4theme2025/img/map/pins/pin12.png', hoverIcon: 'https://c4publicidade.com.br/lakeLouiseNew/wp-content/themes/c4theme2025/img/map/icones/prancheta12.png' },
     { lngLat: [-47.052147, -22.834164], icon: 'https://c4publicidade.com.br/lakeLouiseNew/wp-content/themes/c4theme2025/img/map/pins/pin13.png', hoverIcon: 'https://c4publicidade.com.br/lakeLouiseNew/wp-content/themes/c4theme2025/img/map/icones/prancheta13.png' },
     { lngLat: [-47.069566, -22.816625], icon: 'https://c4publicidade.com.br/lakeLouiseNew/wp-content/themes/c4theme2025/img/map/pins/pin14.png', hoverIcon: 'https://c4publicidade.com.br/lakeLouiseNew/wp-content/themes/c4theme2025/img/map/icones/prancheta14.png' },

   ];
   

// Função para criar o ícone personalizado
function createCustomIcon(iconUrl, scale = 1) {
  var iconElement = document.createElement('div');
  iconElement.style.backgroundImage = 'url(' + iconUrl + ')';
  iconElement.style.backgroundSize = 'contain';
  iconElement.style.width = (20 * scale) + 'px'; // Tamanho baseado na escala
  iconElement.style.height = (20 * scale) + 'px'; // Tamanho baseado na escala
  iconElement.style.cursor = 'pointer'; // Muda o cursor no hover
  return iconElement;
}

// Adicionar marcadores ao mapa
var markers = [];
pontos.forEach(function(ponto) {
  var iconElement = createCustomIcon(ponto.icon, 1); // Cria o ícone com escala inicial 1

  var marker = new mapboxgl.Marker({
    element: iconElement
  })
  .setLngLat(ponto.lngLat)
  .addTo(map);

  markers.push(marker);
});

// Atualizar o tamanho do ícone normal com base no zoom
map.on('zoom', function() {
  var zoomLevel = map.getZoom();
  var scale = zoomLevel / 10; // Ajusta a escala conforme necessário

  markers.forEach(function(marker) {
    var iconElement = marker.getElement();
    iconElement.style.width = (20 * scale) + 'px';
    iconElement.style.height = (20 * scale) + 'px';
  });
});

// Adicionar um ícone fixo e maior (sem hover)
var fixedIconUrl = 'https://c4publicidade.com.br/lakeLouiseNew/wp-content/themes/c4theme2025/img/map/icones/pranchetaLake.png'; // URL do ícone fixo
var fixedIconElement = document.createElement('div');
fixedIconElement.style.backgroundImage = 'url(' + fixedIconUrl + ')';
fixedIconElement.style.backgroundSize = 'contain';
fixedIconElement.style.width = '60px'; // Tamanho fixo maior
fixedIconElement.style.height = '60px'; // Tamanho fixo maior
fixedIconElement.style.cursor = 'default'; // Cursor padrão (sem hover)

var fixedMarker = new mapboxgl.Marker({
  element: fixedIconElement
})
.setLngLat([-47.049425, -22.864299]) // Posição do ícone fixo
.addTo(map);

    </script>
    <script>

window.addEventListener('scroll', function() {
    const image = document.querySelector('.img-rotate-z');
    const rect = image.getBoundingClientRect();
    
    // Verificar se a imagem está visível na tela
    if (rect.bottom >= 0 && rect.top <= window.innerHeight) {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        // Calcular a rotação entre 270 e 360 graus
        const scrollHeight = document.documentElement.scrollHeight - window.innerHeight;
        const scrollProgress = 2.5 * scrollTop / scrollHeight; // Progresso do scroll (0 a 1)
        let rotateZ = 240 + (scrollProgress * 120); // Mapear para 270 a 360 graus

        // Limitar a rotação para 270-360 graus
        rotateZ = Math.min(rotateZ, 350); // Garantir que não ultrapasse 360 graus
        
        // Calcular a opacidade com base na rotação (de 0 a 1 entre 270 e 360)
        let opacity = 0;
        if (rotateZ >= 300 && rotateZ <= 350) {
            opacity = (rotateZ - 300) / 50; // Mapear de 0 a 1 entre 270 e 360 graus
        }
        
        // Aplicar a rotação e a opacidade ao estilo da imagem
        image.style.transform = `rotate(${rotateZ}deg)`;
        image.style.opacity = opacity;
    }
});

window.addEventListener('scroll', function() {
    const img = document.querySelector('.img-rotate-z-reverse');
    const rect = img.getBoundingClientRect();

    // Verificar se a imagem está visível na tela
    if (rect.bottom >= 0 && rect.top <= window.innerHeight) {
        const scrollPosition = window.scrollY; // Posição do scroll vertical
        const maxScroll = document.documentElement.scrollHeight - window.innerHeight; // Posição máxima de rolagem

        // Calculando o ângulo de rotação entre -60deg e 30deg com base no scroll
        const rotationDegree = -60 + (scrollPosition / maxScroll) * 90; // A rotação vai de -60° a 30°

        // Calcular a opacidade com base na rotação (de 0 a 1 entre -60 e 30 graus)
        let opacity = 0;
        if (rotationDegree >= -60 && rotationDegree <= 30) {
            opacity = (rotationDegree + 60) / 90; // Mapear de 0 a 1 entre -60 e 30 graus
        }

        // Aplica a rotação e a opacidade à imagem
        img.style.transform = `rotateZ(${rotationDegree}deg)`;
        img.style.opacity = opacity;
    } else {
        // console.log('Elemento NÃO está visível na tela');
    }
});

</script>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const zoomButtons = document.querySelectorAll('.img_zoom a');

    // Função para inicializar o Owl Carousel
    function initializeOwlCarousel(carousel) {
        $(carousel).owlCarousel({
            items: 1,
            loop: true,
            margin: 10,
            nav: true,
            dots: true,
            autoplay: true,
            autoplayTimeout: 3000,
            smartSpeed: 600,
            navText: [
                "<i class='arrow-left'></i>",
                "<i class='arrow-right'></i>"
            ],
            responsive: {
                0: { items: 1 },
                600: { items: 1 },
                1000: { items: 1 }
            }
        });
    }

    // Inicializa o carrossel para dispositivos móveis no carregamento da página
    if (window.innerWidth < 768) {
        const mobileCarousels = document.querySelectorAll('.box-carousel_iris, .box-carousel_silene');
        mobileCarousels.forEach(carousel => {
            initializeOwlCarousel(carousel);
        });
    }

    zoomButtons.forEach(button => {
        const parentContainer = button.closest('.ampliar'); // Seleciona o container correto
        if (!parentContainer) {
            console.error('Parent container não encontrado para o botão:', button);
            return;
        }

        const carousel = parentContainer.querySelector('.box-carousel_iris, .box-carousel_silene'); // Seleciona o carrossel
        const capa = parentContainer.querySelector('.box-img_capa'); // Seleciona a capa
        const iconZoomImg = button.querySelector('img'); // Seleciona o ícone de zoom
        const boxImg2 = parentContainer.querySelector('.box-img_2'); // Seleciona a box-img_2

        if (!iconZoomImg) {
            console.error('Ícone de zoom não encontrado para o botão:', button);
            return;
        }

        let owlInitialized = false;

        button.addEventListener('click', (e) => {
            e.preventDefault();

            // Se o carrossel existe (seções com carrossel)
            if (carousel) {
                const isExpanded = carousel.classList.toggle('ativo');
                if (isExpanded) {
                    // Esconde a capa quando o carrossel é ativado
                    if (capa) capa.style.display = 'none';

                    // Muda o ícone para zoom-out
                    iconZoomImg.src = '<?php bloginfo('template_url'); ?>/img/mall/zoom-out.webp';
                    iconZoomImg.alt = 'Zoom Out';

                    // Inicializa o carrossel se ainda não foi feito (para telas maiores)
                    if (window.innerWidth >= 768 && !owlInitialized) {
                        initializeOwlCarousel(carousel);
                        owlInitialized = true;
                    }

                    // Exibe o carrossel
                    carousel.style.display = 'block';

                    // Atualiza o carrossel
                    setTimeout(() => {
                        $(carousel).trigger('refresh.owl.carousel');
                    }, 100);

                    // Adiciona a classe 'ativo' à box-img_2
                    if (boxImg2) boxImg2.classList.add('boxAumenta');

                } else {
                    // Exibe novamente a capa quando o carrossel é fechado
                    if (capa) capa.style.display = 'block';

                    // Muda o ícone para zoom-in
                    iconZoomImg.src = '<?php bloginfo('template_url'); ?>/img/mall/zoom.webp';
                    iconZoomImg.alt = 'Zoom In';

                    // Oculta o carrossel
                    carousel.style.display = 'none';

                    // Destroi o carrossel (apenas para telas maiores)
                    if (window.innerWidth >= 768 && owlInitialized) {
                        $(carousel).trigger('destroy.owl.carousel');
                        $(carousel).find('.owl-stage-outer').children().unwrap(); // Remove o wrapper
                        owlInitialized = false;
                    }

                    // Remove a classe 'ativo' da box-img_2
                    if (boxImg2) boxImg2.classList.remove('boxAumenta');
                }
            } else {
                // Se a div não tem carrossel (como a seção "rooftop")
                const isExpanded = parentContainer.classList.toggle('ativo');

                if (isExpanded) {
                    // Muda o ícone para zoom-out
                    iconZoomImg.src = '<?php bloginfo('template_url'); ?>/img/mall/zoom-out.webp';
                    iconZoomImg.alt = 'Zoom Out';

                    // Adiciona a classe 'ativo' à box-img_2
                    if (boxImg2) boxImg2.classList.add('boxAumenta');
                } else {
                    // Muda o ícone para zoom-in
                    iconZoomImg.src = '<?php bloginfo('template_url'); ?>/img/mall/zoom.webp';
                    iconZoomImg.alt = 'Zoom In';

                    // Remove a classe 'ativo' da box-img_2
                    if (boxImg2) boxImg2.classList.remove('boxAumenta');
                }
            }
        });
    });
});
</script>
    <script>
      AOS.init();
    </script>
  </footer>
  </body>
</html>