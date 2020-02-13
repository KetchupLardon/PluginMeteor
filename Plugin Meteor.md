
<h1>Meteor Plugin</h1>

`Objectif:` créer un Plugin météo sur le CMS WordPress.

<h2>Pré-requis</h2>
Installation de Wordpress sur Linux.

<h2>Processus</h2>

<h4><u>Première direction:</u></h4>
Recherche sur le fonctionnement d'un plugin. Création d'une fonction 					permettant d'afficher du text dans un article si la fonction est appelé à l'intérieur.

<h4><u>Deuxième direction:</u></h4>
Création d'un plugin permettant de rajouter des types d'articles chez l'Admin.
Utilisation du PHP orienté objetif

<h4><u>Troisième direction:</u></h4>
Création d'une page settings pour un plugin accessible depuis le menu des extensions et depuis la page admin.

<h4><u>Quatrième direction:</u></h4>
Installation de composer sur Linux pour l'utilisation de la fonction autoload de psr-4.
Recherche sur psr et fonction autoload.
Utilisation de namespace.
Peut-être pas un chemin pertinent au vue de mes objectifs.

<h4><u>Cinquième direction:</u></h4>
Création d'une maquette du plugin sur Moqups pour avoir une vue d'ensemble sur les fonctionnalités.
Recherche sur les API REST.

<h4><u>Sixième direction:</u></h4>
Tuto sur les widgets. Recherche sur Youtube. Copier/Coller de la structure de la création d'un widget donné par le codex WordPress.
Recherches sur chaque fonctions de la structure donné par WordPress.
Une demi heure à essayer de comprendre pourquoi je ne pouvais pas update le titre du Widget. J'ai juste mal écris le nom de la variable que je devais retourner.

<h4><u>Sixième direction:</u></h4>
J'utilise l'API OpenWeather. Lorsque je l'affiche il me donne un tableau avec des température comme 270° avec des tableaux répété comme s'il s'agissais des possibilité mais je ne peux pas afficher la température de la ville rentré.
Par contre il reconnait la ville car s'il ne je tape un nom au hasard ça m'affiche une erreur.
Même sur le doc du site le résultat qu'est censé retourné l'API est différente que ce que j'ai. Je crois qu'ils sont claqué.

C'est bon, il fallait changer un mot dans l'URL de l'API Call. Leur doc pu la merde. Et la température est toujours bizarre.

Recherche de comment appeler une API en PHP avec une réponse en JSON. Jusque là les précédent tuto regardé était en XML.

Après moulte essai j'ai d'abord essayé d'utilise json_decode($variable) mais je n'arrivais pas à afficher qu'un élément de la du tableaux. A ce qu'il paraît on peut pas toucher les stdClass.
Fort agacé de cette événement, je me mis à la recherche de ce qu'est un stdClass.
Au court de ma route, je tomba sur des foru

> Written with [StackEdit](https://stackedit.io/).
<!--stackedit_data:
eyJoaXN0b3J5IjpbLTE2MDYyOTE4MzgsLTYxMDI4NDAzMCwxND
U4ODYyNTM5LC03NTk0MzUyNDksLTE0MzY0ODgzMiwtMTE1NTI4
ODg5LC0yMDI4NTA1MDU1LC00NzI3NzgxMzQsMTE1NTQxMjA4MS
wtMzY4MDcyNjg2LC0xMjk4ODc4ODg4LC0zMjYzMzAzODAsLTU2
NDkyMTcwOSwtMTM0MzgzNzE4NCw3ODU5OTUzODcsMjkyNDE0OT
k2LC0xMjM5MjIzNjldfQ==
-->