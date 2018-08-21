# SYMFONY - CRUD
- **QUÊTE** - PHP Avancé - *Composer*
- *180821_Composer/180821_Composer_Quete*
----

**Créer une architecture de projet**
Tu dois créer une architecture minimaliste de projet.

L'arborescence des dossiers doit être la suivante :
public/
    index.php
src/
    Wcs/
        Hello.php
vendor/


- le fichier index.php est l'entrée de l'application.
- le fichier Hello.php contient une classe nommée Hello qui devra posséder une méthode talk. Cette dernière devra retourner "Hello World !".

Attention, cette classe doit se trouver dans le namespace App\Wcs !!!

Dans le dossier vendor, se trouveront les librairies installées par Composer. Il existe sur Packagist une librairie qui s'appelle ehime/hello-world. Tu dois l'installer et l'utiliser dans ton index.php.

**Critéres de validation**
- Ton code est sur un repo personnel sur github.
- Ton arborescence correspond à ce qui a été demandé dans le challenge
- Ton dossier vendor contient la librairie : ehime/hello-world
- Ton composer.json contient une section autoload avec la déclaration de ton namespace racine App\
- Ton fichier index.php instancie et utilise deux objets :
- un objet App\Wcs\Hello
- un objet HelloWorld




**Générons du CRUD**

Pour finir en beauté, je te propose de générer les entités suivantes et les CRUD qui vont avec. Seuls les administrateurs pourront créer de nouveaux terrains, alors nous ne génèrerons pas les actions d'écriture pour cette entité. Poste le lien de la release (q_crud) quand tu as fini (n'oublie pas de push).

**Schéma entités**

Pas de panique, Symfony n'est pas qu'une histoire de génération. Nous mettrons les mains dans le code dès la prochaine quête.
Pour info, en aviation les terrains (aéroports, aérodromes, altiports, …) sont identifiés par un code à 4 lettres, attribué par l'ICAO (International Civil Aviation Organization).

Pense à mettre à jour le schéma de ta BDD

**Critéres de validation**
- Les entités sont toutes générées dans le bon bundle
- Elles sont nommées en CamelCase
- Elles contiennent les bonnes propriétés et ces propriétés sont nommées et typées correctement
- La config de chaque entité est en annotation
- Les CRUD sont générés pour chaque entité
- Les entités Flight et Reservation ont des actions d'écriture mais pas le Terrain
- La config des CRUD est en annotation
- Les routes sont cohérentes et fonctionnelles (même si le générateur n'a pas réussi à tout faire tout seul)
- L'accès aux tables (par Phpmyadmin ou l'onglet Database de PhpStorm) est fonctionnel.


> [WildCodeSchool](https://wildcodeschool.fr/)









