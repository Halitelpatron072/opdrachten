<?php
function toevoegen(&$lijst, $artikel) {
    $lijst[] = $artikel;
}

function lijstje($lijstje) {
    echo "\nJouw boodschappenlijst: ";
    foreach ($lijstje as $index => $item) {
        echo ($index) . ". " . $item;
    }
}

function boodschappenlijst() {
    $lijst = [];

    while (true) {
        $artikel = readline("Wat moet er op het lijstje komen? ");
        toevoegen($lijst, $artikel);

        $meer = strtolower(readline("Wil je nog een artikel toevoegen? (ja/nee): "));

        if ($meer !== 'ja') {
            break;
        }
    }

    lijstje($lijst);
}

boodschappenlijst();
?>
