jQuery(document).ready(function($) {
    $('.nav-tab-wrapper a').click(function(e) {
        e.preventDefault();
        $('.nav-tab-wrapper a').removeClass('nav-tab-active');
        $(this).addClass('nav-tab-active');
        $('.tab-content').hide();
        $($(this).attr('href')).show();
    });

    // Mostrar a aba ativa ao carregar a página
    $('.nav-tab-wrapper a.nav-tab-active').click();

    // Abre a janela de upload de imagem
    var mediaUploader;
    $('.upload_image_button').click(function(e) {
        e.preventDefault();

        // Se o uploader já foi criado, apenas abre ele
        if (mediaUploader) {
            mediaUploader.open();
            return;
        }

        // Cria o uploader
        mediaUploader = wp.media.frames.file_frame = wp.media({
            title: 'Escolher Logo',
            button: {
                text: 'Escolher Logo'
            },
            multiple: false // Apenas uma imagem
        });

        // Quando uma imagem é escolhida, coloca a URL no campo de texto
        mediaUploader.on('select', function() {
            var attachment = mediaUploader.state().get('selection').first().toJSON();
            $('#logo_url').val(attachment.url);
        });

        mediaUploader.open();
    });

    // Máscara de telefone
    const telefoneInput = document.querySelector("input#whatsapp_number");
    if (telefoneInput) {
        telefoneInput.addEventListener('input', handlePhone);
    }

    const handlePhone = (event) => {
        let input = event.target;
        input.value = phoneMask(input.value);
    }

    const phoneMask = (value) => {
        if (!value) return "";
        value = value.replace(/\D/g, '');
        value = value.replace(/(\d{2})(\d)/, "($1) $2");
        value = value.replace(/(\d)(\d{4})$/, "$1-$2");
        return value;
    }
});