<?php $services = array(); ?>


<div class="container-fluid">
    <div class="row">
        <?php foreach ($services as $service): ?>
            <a class="content-preview content-preview--<?php echo $service["color"] ?> col-md-4" href="./?page=content">
                <div class="content">
                    <div class="surrounded-icons">
                        <div class="surround-border-top"></div>
                        <span class="surrounded-icons__icon icon-<?php echo $service["picto"] ?>"></span>
                        <div class="surround-border-bottom"></div>
                    </div>
                    <div class="content-text">
                        <h5><?php echo $service["title"] ?>r</h5>
                        <p><?php echo $service["description"] ?></p>
                        <p class="mobile-text"><?php echo $service["mobile_description"] ?></p>
                    </div>
                    <div class="icon-right-open-mini"></div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div>
