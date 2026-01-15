<?php

namespace BanjadoAltItem\Containers;

use Plenty\Plugin\Templates\Twig;

class VariantTilesContainer
{
    public function call(Twig $twig): string
    {
        /**
         * Wichtig:
         * Auf der Artikelseite stellt Ceres im Twig Kontext üblicherweise ein Objekt wie "item" bereit.
         * Dieses Grundgerüst greift in Twig darauf zu und fällt zurück, wenn Daten anders heißen.
         */
        return $twig->render('BanjadoAltItem::variant-tiles');
    }
}
