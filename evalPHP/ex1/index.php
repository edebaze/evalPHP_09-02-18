<?php

    $user = [
        'Prenom' => 'Jesus',
        'Nom' => 'De Bazereth',
        'Adresse' => 'Rue du Paradis',
        'CP' => '00001',
        'Ville' => 'HEAVEN VIP',
        'Email' => 'jesus4ever@heaven.com',
        'Telephone' => '02 35 00 00 01',
        'DdN' => '0000-12-24'
    ];

    $message = '
        <!DOCTYPE html>
        <html>
        <head>
        <title>Title of the document</title>
        </head>
        
        <body>
            <h2> Informations </h2>
    ';


    foreach($user as $info) {
        $message .= '<br>' . $info; 
    }


    $message .= '
        </body>
        
        </html>
    ';


    echo $message;

?>