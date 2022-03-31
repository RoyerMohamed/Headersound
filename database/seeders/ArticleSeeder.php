<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article; 
use Illuminate\Support\Str; 

class ArticleSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create([
            'nom'=>'JBL Wave 200TWS',
            'description'=>"Écouteurs intra-auriculaires véritablement sans fil - Avec technologie Bluetooth et assistant vocal – Autonomie jusqu'à 25 hrs – Étui de recharge inclus - Blanc",
            'description_detaillee'=>"Du plaisir au quotidien: les Wave 200TWS de JBL sont dotés du son JBL Deep Bass et vous accompagnent où que vous alliez - véritablement sans câble pour une totale liberté de mouvement
            Bénéficiez de 20 hrs d'écoute combinée : 5 hrs d'autonomie des écouteurs + 15 hrs supplémentaires dans l’étui. Activez l'assistant vocal sur une simple pression du doigt sur l’écouteur
            Écoutez votre musique ou passez des appels avec un ou deux écouteurs : la technologie Dual Connect vous permet d'utiliser les deux écouteurs ou bien un seul, pendant que l'autre charge
            Les Wave 200TWS sont résistants aux chutes dans un peu d'eau et à la transpiration conformément à la norme IPX2. Discrets et légers, ils ont un format de poche et vous accompagnent partout
            Livraison : 1 x paire d'écouteurs JBL Wave 200TWS / 1 étui de recharge / 1 câble de recharge USB type C / 3 tailles d'embouts / Guide de démarrage rapide et fiche de sécurité / Couleur : blanc",
            'image'=>'JBL_Wave_200TWS.jpg',
            'note'=>5,
            'prix'=>59,
            'stock'=>200, 
            'gamme_id'=>2,
        ]);

        Article::create([
            'nom'=>'JVC Écouteurs sans Fil Gumy Mini',
            'description'=>" Petits Intra Auriculaires, Léger, Bluetooth 5.1, Résistance à l'eau IPX4, Autonomie longue durée jusqu'à 15 Heures - HA-Z55T-B",
            'description_detaillee'=>"GUMY mini DESIGN - 5 couleurs variation true wireless earbuds avec comfortabilité et connexion stable supérieure, Bluetooth 5.1
            LONGUE DUREE D'AUTONOMIE - total 15 heures avec la batterie intégrée et le boîtier de charge 6H+9H. Télécommande avec réglage de volume
            ETANCHEITE - Résistance à l'eau IPX4
            CONNEXION AUTOMATIQUE - Dès que vous retirez les écouteurs de la boîte de charge ils s'allument et se connectent automatiquement à votre appareil
            COMPATIBLE À L'ASSISTANCE VOCALE- Profitez de la commodité et des avantages des assistants personnels numériques",
            'image'=>'JVC_Écouteurs_sans_Fil_Gumy_Mini.jpg',
            'note'=>5,
            'prix'=>33.32,
            'stock'=>200, 
            'gamme_id'=>2,
        ]);

        Article::create([
            'nom'=>'VOESUD Écouteurs Bluetooth sans Fil',
            'description'=>" 100H Bluetooth 5.1 avec Mic, Ecouteurs Bluetooth Sport avec IPX7 Étanche, Hi-FI Stéréo Casque, pour la Courir/Jeu/Voyage",
            'description_detaillee'=>"Conception ergonomique des crochets d'oreille et commande tactile intelligente : Conçu pour le sport avec des crochets d'oreille souples, le casque sans fil ne tombera pas, même pendant un exercice intense. Grâce à la technologie tactile à haute sensibilité, le toucher du doigt permet de réaliser facilement une variété de fonctions, réduisant ainsi la pression du bouton sur l'oreille.
            Bluetooth 5.1 et appairage automatique : La dernière puce Bluetooth 5.1 et l'antenne FPC permettent un couplage plus rapide, une connexion stable et une transmission du signal (portée de 20 m sans obstacle). Il suffit de sortir deux oreillettes ou une seule oreillette après avoir ouvert la fonction Bluetooth, elles s'ouvriront et se connecteront automatiquement. Puissante puce Bluetooth 5.1 qui s'adapte parfaitement aux tablettes, ordinateurs portables et smartphones.
            Appels clairs et son immersif : Équipé d'un diaphragme haute sensibilité et de doubles conducteurs de 10,0 mm, peut réduire le bruit ambiant de 80% et améliorer votre voix. Ces écouteurs sans fil peuvent produire un son dynamique puissant et mettre en valeur les détails riches des voix, rétablir l'authenticité audio et la dynamique de la voix. La réduction des bruits d'appel vous permet de passer des appels d'une grande clarté et de vous immerger dans le monde merveilleux de la musique.
            Durée de lecture de 100 heures et étui de chargement à DEL : les oreillettes Bluetooth peuvent atteindre une durée d'utilisation de 7 heures par charge et l'étui de chargement d'une capacité de 2600 mAh peut offrir 100 heures de fonctionnement aux oreillettes. Vous pouvez également utiliser l'étui de chargement LED pour charger votre téléphone, ce qui est idéal pour les voyages quotidiens, l'exercice et le travail.
            Étanchéité IPX7 pour les sports : Les véritables écouteurs sans fil sont nano-revêtus pour éviter les éclaboussures quotidiennes, la sueur et la pluie. C'est un bon choix pour les entraînements intenses et toutes les conditions météorologiques. Q53 est un compagnon idéal pour la course, le yoga, la gym, le cyclisme, etc.",
            'image'=>'VOESUD_Écouteurs_Bluetooth_sans_Fil.jpg',
            'note'=>5,
            'prix'=>38,
            'stock'=>200, 
            'gamme_id'=>2,
        ]);

        Article::create([
            'nom'=>'Fullpower T2 Écouteurs Bluetooth 5.1 sans Fil Stéréo',
            'description'=>" Ecouteur Bluetooth, Auriculaires avec Micro Intégré, 3 Heures Playtime Etanche IPX5 Oreillette Bluetooth Sport pour Gym/Joggin",
            'description_detaillee'=>"【25 Heures Automatique】50% du volume du casque peut jouer pendant 4 heures et Veille pendant plus de 120h. Le boîtier de charge peut effectuer 3 - 4 fois charges complètes et rester en veille plus de six mois. Vous n'avez pas à vous soucier de l'interruption du sport ou de la musique
            【Bluetooth V5.1 Améliorée & Réduction du Bruit CVC 8.0】 La version Bluetooth la plus nouvelle V5.0 rend la connexion plus stable, rapide et plus d'économie d'énergie. La technologie de réduction du bruit CVC 8.0 avancée permet d'isoler le bruit externe , vous garantissant une qualité de son stéréo haute fidélité tout en écoutant de la musique et en répondant à des appels.
            【Démarrage et Appariement Automatique & Contrôle D'une Seule Touche Tactile】 Les oreillettes bluetooth seront automatiquement activées tant qu'elles sont retirées de la boîte de charge. Et l’appariement sera activé automatiquement avec le dispositif qui avait été connecté. Vous pouvez régler le volume, changer de chanson, répondre au téléphone et réveiller Siri en appuyant une touche tactile légèrement.
            【Conception Ergonomique & Etanche IPX5】Avec le design ergonomique et léger, les écouteurs bluetooth sans fil sont confortable pour les oreilles en équipant de bouchons d'oreilles de trois tailles S/M/L, donc vous n'avez pas besoin de vous soucier de la chute d'écouteurs même lorsque vous courez ou faites du sport. Etanche IPX5 protège de la sueur et de la pluie, et convient à plus d'occasions sportives. Vigorun vous offre une garantie d’un an et un service client pour toute la vie.
            【Mode Stéréo/Mono & Grande Compatibilité】Les écouteurs sans fil Vigorun fournissent les modes stéréo et monaural. C’est à dire, les deux oreillettes peuvent être connectées à différents smartphones séparément ou utilisées ensemble pour le mode stéréo. Il est compatible avec la plupart des appareils compatibles Bluetooth tels que iPhone, iPad, Samsung, Huawei, tablette, PC, Ordinateur etc.",
            'image'=>'Fullpower_T2.jpg',
            'note'=>5,
            'prix'=>26.99,
            'stock'=>200, 
            'gamme_id'=>2,
        ]);

        Article::create([
            'nom'=>'Écouteurs Bluetooth sans Fil - GOSCIEN',
            'description'=>"GOSCIEN Écouteurs Bluetooth avec Étui de Chargement, Stéréo 3D Oreillette sans fil, Micro Intégré, IPX5 Étanche, Oreillettes Intra-Auriculaires, Charge sans Fil et USB",
            'description_detaillee'=>"【Ecouteur sans fil | Stéréo Oreillette Antibruit】 Chaque casque sans fil est équipé d'un microphone antibruit pour une excellente mise en valeur de la voix et une suppression du bruit de fond, garantissant que votre voix est entendue clairement à l'autre bout. Grâce à la technologie d'annulation du bruit, vous pouvez profiter d'appels clairs à tout moment, même dans des environnements bruyants.
            【Bluetooth 5.0 | Appairage Automatique | Stable Connection】 Il suffit de les sortir de l'étui de chargement pour qu'ils se connectent automatiquement à votre appareil jumelé après le premier jumelage .Le bouton MFB vous permet d'allumer et d'éteindre facilement l'appareil, d'émettre et de pauser la musique, de répondre aux appels et de raccrocher, d'appeler Siri, etc.
            【IPX5 étanche | Design ergonomique | 3 tailles de bouchons d'oreille】L'oreillette Bluetooth GOSCIEN est parfaitement étanche pour résister aux éclaboussures quotidiennes d'eau, de sueur et de pluie, ce qui en fait le compagnon idéal pour votre travail et sport. La conception ergonomique peut parfaitement s'adapter à chaque oreille. Avec 3 tailles de bouchons d'oreille en silicone, vous ne vous sentirez pas fatigué même si vous l'utilisez pendant longtemps.
            【Boîte de charge magnétique portable | Longue veille】 Faible consommation d'énergie, jusqu'à 4 heures de conversation continue ou de lecture de musique et 80 heures de veille sur une seule charge. L'étui de recharge permet une recharge rapide avec un dispositif magnétique intégré pour une meilleure rétention， l'écran LED peut vérifier la puissance à tout moment. L'étui de recharge permet de se recharger lors de votre voyage. Il peut aussi charger votre téléphone.
            【Compatibilité universelle|Package fourni】 Les écouteurs Bluetooth GOSCIEN sont compatibles avec la plupart des lecteurs de musique Bluetooth, y compris les smartphones iOS/Android, les PC et Mac, etc. Articles dans la boîte : GOSCIEN écouteurs sans fil, étui de chargement, 3 paires d'écouteurs en silicone (S / M / L), câble USB, manuel d'utilisation.",
            'image'=>'Écouteurs_Bluetooth_sans_Fil _GOSCIEN.jpg',
            'note'=>5,
            'prix'=>23.99,
            'stock'=>200, 
            'gamme_id'=>2,
        ]);







        Article::create([
            'nom'=>'JBL TUNE 510BT',
            'description'=>"Casque supra-auriculaire sans fil – Equipé de la technologie Bluetooth – Connection multi-points – Léger, confortable et pliable – Jusqu’à 40 hrs d’écoute",
            'description_detaillee'=>"Graves de choc, toute la journée : plongez dans votre musique avec le son puissant JBL Pure Bass et profitez de 40 hrs d’autonomie ou obtenez 2 hrs supplémentaires avec une recharge de 5 min
            Gérez vos appels : passez d’une vidéo sur votre tablette à un appel sur votre portable avec la connexion multi-points. Utilisez le kit mains libres depuis votre casque avec les boutons pratiques
            Léger, ce casque est doté de coussinets doux et d’un bandeau rembourré pour un port confortable. Sa conception pliable vous permet d’emporter votre musique avec vous où que vous alliez
            Demandez à Siri ou dites Hey Google : activez l’assistant vocal en appuyant sur le bouton multifonction. Avec le TUNE 510BT, apportez une touche musicale partout avec vous
            Livraison : 1 x JBL TUNE 510BT Casque supra-auriculaire sans fil / 1 x câble de recharge USB-C / 1 livret d’avertissements / 1 guide de démarrage rapide – Noir",
            'image'=>'JBL_TUNE_510BT.jpg',
            'note'=>5,
            'prix'=>52.99,
            'stock'=>200, 
            'gamme_id'=>1,
        ]);

        Article::create([
            'nom'=>'JBL Tune760NC',
            'description'=>"Casque audio circum-auriculaire sans fil à réduction de bruit active – Son JBL Pure Bass – Autonomie de 35h – Appels mains-libres et commande vocale",
            'description_detaillee'=>"Audio de qualité : le casque audio circum-auriculaire sans fil TUNE760NC de JBL est doté du son JBL Pure Bass, que vous pouvez retrouvez dans les évènements et salles de concerts du monde entier
            Profitez du silence : le casque audio avec réduction du bruit active, permet de se concentrer sans distractions. La batterie dure 35h avec réduction du bruit active et 50h avec RBA éteint
            Design léger et pliable : le casque audio est compact et pliable pour l'emporter partout avec vous / Avec le Fast Pair de Google, le casque sans fil se connecte immédiatement aux appareils Android
            Appels mains-libres : contrôlez le son, appels ou l'assistant vocal depuis le bouton du casque / Connectivité multipoints, passez d'un appareil à l'autre facilement via le bluetooth
            Livraison : 1x JBL Tune760NC casque audio sans fil / Câble USB / Câble audio détachable / Fiche de sécurité / Guide de démarrage rapide / Couleur : blanc",
            'image'=>'JBL_Tune760NC.jpg',
            'note'=>5,
            'prix'=>129,
            'stock'=>200, 
            'gamme_id'=>1,
        ]);
        
        Article::create([
            'nom'=>'Srhythm NC15',
            'description'=>"Casque Antibruit sans Fil Bluetooth 5.0, Casque Over-Ear Pliable avec Microphones pour Cours en Ligne/Bureau à Domicile/TV/PC/Téléphone",
            'description_detaillee'=>"Technologie de suppression du bruit de renommée mondiale: atténue efficacement 85% du bruit de fond, vous aide à supprimer les sons indésirables, vous permet de bloquer le monde autour de vous pour profiter de votre musique ou du doux bruit du silence.ANC et Bluetooth peuvent être contrôlés séparément. bien en mode filaire et sans fil.
            Artisanat exquis: élégant et coloré, 3 couleurs fraîches conviennent à vos différents vêtements.Le casque Bluetooth 5.0 NC15 ANC serait la partie accrocheuse de votre tenue quotidienne. Bandeau réglable à plusieurs niveaux pour trouver la bonne taille pour vous. Pliable pour être portable dans un sac de transport pour le voyage.
            Son stéréo de qualité: deux unités de pilote à grande ouverture de 40 mm et la technologie Bluetooth V5.0 offrent une vitesse de transmission plus stable, une latence plus faible et une meilleure sortie audio. Le casque d'écoute supra-auriculaire à suppression de bruit active Srhythm NC15 vous offre un son clair et puissant et un monde d'écoute silencieux qui vous aide à mieux profiter de la musique.
            Microphones intégrés multiples: expérience d'écoute mains libres sans faille dans l'appel, pas besoin de s'inquiéter de manquer des appels téléphoniques. (Veuillez noter: le microphone de communication ne fonctionne qu'en mode sans fil.) Supporte Siri et l'assistant Google.
            Port confortable: bandeau rembourré doux, coussinets ovales en mousse à mémoire de forme couvrant doucement vos oreilles. Petit rappel: veuillez retirer le casque toutes les 1 à 2 heures pour détendre vos oreilles et protéger votre audition.",
            'image'=>'Srhythm_NC15.jpg',
            'note'=>5,
            'prix'=>49.99,
            'stock'=>200, 
            'gamme_id'=>1,
        ]); 
        
        Article::create([
            'nom'=>'Marshall Major IV',
            'description'=>"Casque Audio Bluetooth - Noir",
            'description_detaillee'=>"Le Major IV vous offre le son Marshall emblématique sur lequel vous comptez
            Le casque Major IV offre plus de 80 heures de lecture sans fil
            Le nouveau design du Major IV présente des propriétés ergonomiques améliorées, pour que la dixième heure d’écoute soit aussi confortable que la première. Vous pourrez ainsi vous immerger dans votre musique sans retenue
            Le Major IV offre une option de charge sans fil, pour un casque plus mobile que jamais
            Contrôlez votre casque et votre appareil à l'aide d’un simple bouton
            Composants inclus: Audio 3,5 mm, Micro-USB",
            'image'=>'Marshall_Major_IV.jpg',
            'note'=>5,
            'prix'=>125.99,
            'stock'=>200, 
            'gamme_id'=>1,
        ]);
        
        Article::create([
            'nom'=>'Casque Bluetooth Soundcore',
            'description'=>"Anker Life Q30 Réduction de Bruit Active Hybride à Multi-Mode, 40H Autonomie, Hi-Res Audio, APP Personnalisé, Oreillettes Douces, Connexion à 2 Appareils Bluetooth",
            'description_detaillee'=>"
            Un Son Incroyable qui a Déjà Conquis Plus de 20 Millions de Personnes
            Musique Haute Résolution : Entendez chaque détail de vos chansons préférées grâce aux drivers de 40 mm du Life Q30. Les diaphragmes en soie très flexibles reproduisent des basses puissantes et des aigus nets qui s'étendent jusqu'à 40 kHz pour une clarté améliorée.
            Haute Technologie de Réduction de Bruit Active : Ne vous laissez plus distraire grâce à la réduction de bruit active hybride du Life Q30. Les doubles micros de détection du bruit captent et filtrent jusqu'à 95 % des sons basse fréquence ambiants pour que rien ne vous distraie de votre musique.
            Expérience de Réduction du Bruit Incomparable : Personnalisez la réduction du bruit du Life Q30 avec 3 modes : le mode transport minimise le bruit des moteurs d'avion, l’Extérieur réduit le transport et le vent, et l’Intérieur atténue le bruit des bureaux occupés avec des personnes qui parlent en arrière-plan.
            40 Heures d’Autonomie : les casques bluetooth à réduction de bruit active Life Q30 diffusent de la musique jusqu'à 40 heures en mode de réduction de bruit. Le mode standard prolonge la durée d’autonomie à 60 heures tandis qu'une courte charge de 5 minutes vous offre 4 heures d'écoute.",
            'image'=>'Soundcore.jpg',
            'note'=>5,
            'prix'=>79.99,
            'stock'=>200, 
            'gamme_id'=>1,
        ]);
        for ($i = 0; $i < 30; $i++) {
            Article::create([
                'nom' => 'Produit ' . ($i+1),
                'description' => Str::random(50),
                'description_detaillee' => Str::random(100),
                'image' => 'logo.png',
                'prix' => mt_rand(5, 1000),
                'stock' => 50,
                'note' => 4.5,
                'gamme_id' => rand(1,2),
            ]);
        }
       
    }
}
