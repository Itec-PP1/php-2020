<?php
$defaultLang = 'es';

$language = (isset($_GET['lang'])) ? $_GET['lang'] : $defaultLang;

$linksHeader = [
        [
            'name'      => 'Nosotros',
            'url'       => 'nosotros.php',
            'className' => 'btn btn-success',
            'lang'      => 'pt'
        ],
        [
            'name'      => 'Servicios',
            'url'       => 'servicios.php',
            'className' => 'btn btn-danger',
            'lang'      => 'es'
        ],
        [
            'name'      => 'Contacto',
            'url'       => 'contacto.php',
            'className' => 'btn btn-outline-primary',
            'lang'      => 'es'
        ],
        [
            'name'      => 'About us',
            'url'       => 'nosotros.php',
            'className' => 'btn btn-success',
            'lang'      => 'en'
        ],
        [
            'name'      => 'Contact',
            'url'       => 'contacto.php',
            'className' => 'btn btn-outline-primary',
            'lang'      => 'en'
        ]
    ];
?>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal"><a class="p-2 text-dark" href="index.php">Test Company</a></h5>

    <nav class="my-2 my-md-0 mr-md-3">
        <?php foreach ($linksHeader as $link) : ?>
            <?php if($link['lang'] == $language) : ?>
                <a class="<?php echo $link['className'];?>" href="<?php echo ($language !== $defaultLang) ? $link['url'].'?lang='.$language : $link['url']; ?>">
                    <?php echo $link['name']; ?>
                </a>
            <?php endif; ?>
        <?php endforeach; ?>
    </nav>

    <?php if($language === 'en' ) echo 'English version'; ?>
</div>