<?php

namespace BanjadoAltItem\Containers;

use Plenty\Plugin\Templates\Twig;

class StylesContainer
{
    public function call(Twig $twig): string
    {
        return $twig->render('BanjadoAltItem::styles');
    }
}
