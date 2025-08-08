<nav class="navbar navbar-expand-lg fixed-top navbar-dark navbar-transparent">
        <div class="container">
            <a class="navbar-brand" href="<?php echo "{$url}"; ?>">
                <img src="<?php echo "{$url}src/images/logo.png?v3"; ?>" width="320" alt="Security master">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php echo $link[0] == 'home' ? 'active' : '' ;?>" aria-current="page" href="<?php echo "{$url}";?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $link[0] == 'portaria-remota' ? 'active' : '' ;?>" href="<?php echo "{$url}portaria-remota";?>">Portaria Remota</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link <?php echo $link[0] == 'seguranca-eletronica' ? 'active' : '' ;?>" href="<?php echo "{$url}seguranca-eletronica";?>">Segurança Eletrônica</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link <?php echo $link[0] == 'portaria-presencial' ? 'active' : '' ;?>" href="<?php echo "{$url}portaria-presencial";?>">Portaria Presencial</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link <?php echo $link[0] == 'seguranca-privada' ? 'active' : '' ;?>" href="<?php echo "{$url}seguranca-privada";?>">Segurança Privada</a>
                    </li> 
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Serviços
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <li><a class="dropdown-item" href="<?php echo "{$url}seguranca-eletronica";?>">Segurança Eletrônica</a></li>
                            <li><a class="dropdown-item" href="<?php echo "{$url}portaria-remota";?>">Portaria Remota</a></li>
                            <li><a class="dropdown-item" href="<?php echo "{$url}zeladoria";?>">Zeladoria</a></li>
                            <li><a class="dropdown-item" href="<?php echo "{$url}seguranca-armada";?>">Segurança Armada</a></li>
                        </ul>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link contato" href="<?php echo "#contato";?>">
                        <span class="material-symbols-outlined">mail</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>