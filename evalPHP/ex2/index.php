<?php

    function convertir($montant, $devise = 'USD') {
        if(strtolower($devise) === 'usd') {
            $montant *= 1.085965;
            $montant = strval($montant) . ' dollards américains';
        } elseif (strtolower($devise) === 'eur') {
            $montant /= 1.085965;
            $montant = strval($montant) . ' euros';
        } else {
            return 'Devise inconnue';
        }

        return $montant;
    }

?>  