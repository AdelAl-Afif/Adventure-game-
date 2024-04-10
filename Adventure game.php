<?php
/**  
Adventure_game
Adel AL-AFIF
**/
// variable win
$win =  "      ___________\n"                        .
                "     '._==_==_=_.'\n"                    .
                "     .-\\:      /-.\n"                    .
                "    | (|:.     |) |\n"                    .
                "     '-|:.     |-' \n"                    .
                "       \\::.    /\n"                        .
                "        '::. .'\n"                            .
                "          ) (\n"                                .
                "        _.' '._\n"                            .
                "       `\"\"\"\"\"\"\"`\n";

                function startAdventureGame() {
                    printf("Welkom bij het avonturenspel!\n");
                    printf("Je bent midden in een mysterieus bos beland. Je hebt geen idee hoe je hier bent gekomen.\n");
                    printf("Je ziet een pad voor je en een oud gebouw aan de rechterkant.\n\n");
                    
                    printf("Wat ga je doen?\n");
                    printf("1. Volg het pad.\n");
                    printf("2. Ga het oude gebouw binnen.\n");
                
                    $choice = readline("Kies 1 of 2: ");
                
                    if ($choice == 1) {
                        followPath();
                    } elseif ($choice == 2) {
                        enterBuilding();
                    } else {
                        printf("Ongeldige keuze. Probeer het opnieuw.\n");
                        startAdventureGame();
                    }
                }
                
                function followPath() {
                    printf("Je besluit het pad te volgen.\n");
                    printf("Terwijl je dieper het bos in gaat, hoor je vreemde geluiden om je heen.\n");
                    printf("Plotseling kom je bij een rivier. De enige manier om verder te gaan is door de rivier over te steken.\n\n");
                
                    printf("Wat ga je doen?\n");
                    printf("1. Steek de rivier over.\n");
                    printf("2. Keer terug en ga het oude gebouw binnen.\n");
                
                    $choice = readline("Kies 1 of 2: ");
                
                    if ($choice == 1) {
                        crossRiver();
                    } elseif ($choice == 2) {
                        enterBuilding();
                    } else {
                        printf("Ongeldige keuze. Probeer het opnieuw.\n");
                        followPath();
                    }
                }
                
                function crossRiver() {
                    printf("Je steekt de rivier over en bereikt veilig de andere kant.\n");
                    printf("Je bent nu dieper het bos in getrokken en ziet een oude grot aan je linkerhand.\n\n");
                
                    printf("Wat ga je doen?\n");
                    printf("1. Verken de oude grot.\n");
                    printf("2. Ga terug en onderzoek het oude gebouw.\n");
                
                    $choice = readline("Kies 1 of 2: ");
                
                    if ($choice == 1) {
                        exploreCave();
                    } elseif ($choice == 2) {
                        enterBuilding();
                    } else {
                        printf("Ongeldige keuze. Probeer het opnieuw.\n");
                        crossRiver();
                    }
                }
                
                function enterBuilding() {
                    printf("Je gaat het oude gebouw binnen en ziet een trap naar beneden.\n");
                    printf("Je besluit de trap af te dalen en komt in een donkere kelder terecht.\n");
                    printf("Het is moeilijk om iets te zien, maar je hoort geluiden vanuit de duisternis.\n\n");
                
                    printf("Wat ga je doen?\n");
                    printf("1. Verken de kelder verder.\n");
                    printf("2. Verlaat het gebouw en volg het pad.\n");
                
                    $choice = readline("Kies 1 of 2: ");
                
                    if ($choice == 1) {
                        exploreBasement();
                    } elseif ($choice == 2) {
                        followPath();
                    } else {
                        printf("Ongeldige keuze. Probeer het opnieuw.\n");
                        enterBuilding();
                    }
                }
                
                function exploreCave() {
                    global $win; // Om $win-variabele te gebruiken binnen deze functie
                    printf("Je verkent de oude grot en vindt een verborgen schat!\n");
                    printf("Gefeliciteerd, je hebt het avonturenspel gewonnen!\n");
                    printf($win); // Afdrukken van de winnaarscode
                }
                
                function exploreBasement() {
                    printf("Je verkent de kelder verder en vindt een oud artefact.\n");
                    printf("Terwijl je het artefact oppakt, stort het plafond in en word je bedolven onder puin.\n");
                    printf("Helaas, je avontuur eindigt hier.\n");
                }
                
                // Start het spel
                startAdventureGame();
                
                ?>