<header class="slider-int">
    <div class="content">
        <h1>Vídeos de Instruções</h1>
    </div>
</header>

<!-- Video.js CSS -->
<link href="https://vjs.zencdn.net/8.10.0/video-js.css" rel="stylesheet" />

<section class="bg-light">
    <div class="container py-5">
       
        <div class="row g-3 mt-3">
        <div class="col-md-4">
            <div class="card h-100">
                <video
                    id="video1"
                    class="video-js vjs-default-skin vjs-big-play-centered w-100"
                    controls
                    preload="metadata"
                    width="100%"
                    height="600"
                    data-setup="{}">
                    <source src="https://securitymaster.com.br/videos/lv_0_20250218153813.mp4" type="video/mp4">
                    <p class="vjs-no-js">
                        Para visualizar este vídeo, ative o JavaScript e considere atualizar para um navegador que
                        <a href="https://videojs.com/html5-video-support/" target="_blank">suporte vídeo HTML5</a>.
                    </p>
                </video>
                <div class="card-body">
                    <p class="card-text">Instrução do App Security Master</p> 
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100">
                <video
                    id="video2"
                    class="video-js vjs-default-skin vjs-big-play-centered w-100"
                    controls
                    preload="metadata"
                    width="100%"
                    height="600"
                    data-setup="{}">
                    <source src="https://securitymaster.com.br/videos/lv_0_20250228180333.mp4" type="video/mp4">
                    <p class="vjs-no-js">
                        Para visualizar este vídeo, ative o JavaScript e considere atualizar para um navegador que
                        <a href="https://videojs.com/html5-video-support/" target="_blank">suporte vídeo HTML5</a>.
                    </p>
                </video>
                <div class="card-body">
                     <p class="card-text">Cadastrando um novo usuário</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100">
                <video
                    id="video3"
                    class="video-js vjs-default-skin vjs-big-play-centered w-100"
                    controls
                    preload="metadata"
                    width="100%"
                    height="600"
                    data-setup="{}">
                    <source src="https://securitymaster.com.br/videos/remota.mp4" type="video/mp4">
                    <p class="vjs-no-js">
                        Para visualizar este vídeo, ative o JavaScript e considere atualizar para um navegador que
                        <a href="https://videojs.com/html5-video-support/" target="_blank">suporte vídeo HTML5</a>.
                    </p>
                </video>
                <div class="card-body">
                    <p class="card-text">Cadastrando Visitantes</p>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>

<!-- Video.js JavaScript -->
<script src="https://vjs.zencdn.net/8.10.0/video.min.js"></script>

<script>
// Inicializar todos os players de vídeo
document.addEventListener('DOMContentLoaded', function() {
    // Configurações personalizadas para todos os vídeos
    const videoOptions = {
        fluid: true,
        responsive: true,
        playbackRates: [0.5, 0.75, 1, 1.25, 1.5, 2],
        controlBar: {
            children: [
                'playToggle',
                'volumePanel',
                'currentTimeDisplay',
                'timeDivider',
                'durationDisplay',
                'progressControl',
                'playbackRateMenuButton',
                'qualitySelector',
                'fullscreenToggle'
            ]
        }
    };

    // Inicializar cada vídeo
    const videos = ['video1', 'video2', 'video3'];
    videos.forEach(function(videoId) {
        const player = videojs(videoId, videoOptions);
        
        // Adicionar funcionalidades extras
        player.ready(function() {
            // Pausar outros vídeos quando um começar a reproduzir
            this.on('play', function() {
                videos.forEach(function(id) {
                    if (id !== videoId) {
                        const otherPlayer = videojs(id);
                        if (otherPlayer && !otherPlayer.paused()) {
                            otherPlayer.pause();
                        }
                    }
                });
            });
            
            // Adicionar tooltip com informações do vídeo
            this.on('loadedmetadata', function() {
                const duration = this.duration();
                const minutes = Math.floor(duration / 60);
                const seconds = Math.floor(duration % 60);
                console.log(`Vídeo ${videoId}: ${minutes}:${seconds.toString().padStart(2, '0')}`);
            });
        });
    });
});
</script>

<style>
/* Estilos personalizados para os vídeos */
.video-js {
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.video-js .vjs-big-play-button {
    background-color: rgba(0, 123, 255, 0.8);
    border-color: #007bff;
    border-radius: 50%;
    width: 60px;
    height: 60px;
    line-height: 60px;
    margin-left: -30px;
    margin-top: -30px;
}

.video-js:hover .vjs-big-play-button {
    background-color: rgba(0, 123, 255, 1);
}

.video-js .vjs-control-bar {
    background-color: rgba(0, 0, 0, 0.8);
}

.video-js .vjs-progress-control .vjs-progress-holder {
    height: 6px;
}

.video-js .vjs-play-progress {
    background-color: #007bff;
}

.card {
    transition: transform 0.2s ease-in-out;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}
</style>

<?php
//include 'components/#depoimentos-modelo2.php';
include 'components/#lgpd.php';
include 'components/#unidades.php';
// include('components/#contato.php');
?>