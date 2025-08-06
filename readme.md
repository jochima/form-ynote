# Épreuve développeur – « Formulaire de Client Robuste et Adaptatif »
## Fonctionnalités implémentées
- 🟩 Validation client (JavaScript) et serveur (Symfony).
- 🟩 Conservation des anciennes valeurs des champs en cas d’erreur.
- 🟩 Affichage des messages (Javascript & Symfony)
- 🟩 Affichage des données entrées en cas de succès.
- 🟩 Changement de thème se fait via JavaScript
- 🟩 Sauvegarde des données valides dans un fichier data.json

## UI implémenté(s)
- 🟩  Formulaire centré verticalement et horizontalement, quelle que soit la taille de l’écran (mobile, tablette, desktop).
- 🟩 Valeurs du formulaire conservées en cas d’erreur.
- 🟩 Affichage des messages d’erreur clairs et visibles.
- 🟩 Afficher un résumé sécurisé des données entrées en cas de succès.
- 🟩 Initialisation du thème en fonction de l'heure.

## Livrables
### Rêgles de validation
#### Javascript
- Le nom complet doit comporter entre 3 et 50 caractères : if (nameValue.length < 3 || nameValue.length > 50)
- Adresse email doit être valide : emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
- Téléphone doit être valide (6XXXXXXXX ou 2376XXXXXXXXX) : phonePattern = /^(6\d{8}|2376\d{8})$/;
- La date de naissance ne doit pas être ultérieure ou présent : if (!birth.value || birthDate >= today) {

#### Symfony
- Le nom complet est obligatoire : #[Assert\NotBlank(message: "Le nom complet est obligatoire.")]
- Le nom compris entre et 30-50 caractères : #[Assert\Length(min: 3, max: 50)]
- L'email est obligatoire : #[Assert\NotBlank(message: "L'email est obligatoire.")]
- Email non valide : #[Assert\Email(message: "Email non valide.")]
- Le numéro de téléphone obligatoire : #[Assert\NotBlank(message: "Le numéro de téléphone est obligatoire.")]
- Numéro de téléphone non valide. #[Assert\Regex(pattern: '/^(6\d{8}|2376\d{8})$/'...
- Date de naissance non valide : #[Assert\NotBlank(message: "La date de naissance est obligatoire.")]
- Date de naissance doit être dans le passé :  #[Assert\LessThan("today", message: "La date doit être dans le passé.")]
- Adresse non valide : #[Assert\NotBlank(message: "Adresse non valide")]

#### Détails sur la logique de changement de thème
- Ecoute sur lévènement du chargement complèt de la page,
- Recuperation de l'heure,
- Parametrage des plages horaire,
- Chargement du theme adequate à partir de la mise en place ou de la substitution d'une classe

### Problèmes rencontrés et/ou limites techniques
- Lors de la mise en place du style (thèmes),
- Lors du réedimensionnement des éléments du formulaire en fonction de la taille d'écran,
- Lors de l'écoute des évenements Javascript, dans le but d'initialiser le theme,
- Lors de la manipulation des structures de données avec Twig,
- Lors de la manipulation des sessions flash,
- Lors de la récupération de la réponse (GET) de l'API  : https://photon.komoot.io,
- Lors de la récupération des anciennes valeurs (validées et non validés) du formulaire,
- Lors de la sauvegarde des informations validé dans un fichier json,
- Lors de la configuration du fichier Dockerfile
- Lors de la construction du conteneur Docker
- Lors du déploiement du projet dans le container
- Lors du dépliement vers gitlab


## Deploiement
### Installation local
- Exécuter la commande : `git clone git@gitlab.com:jochima/form-ynote.git`
- Basculer vers la branche `develop` à partir de la commande : `git checkout developp`
- Executer la `composer install`

### Execution
#### Locale
- Exécuter à partir de la racine du projet : `symfony serve:start`
- Ouvrir le lien généré dans un navigateur : `http//localhost:8000` (eventuellement)

#### Container
- Exécuter à partir de la racine du projet : `docker build`
- Démarrage du container : `docker compose up`
- Ouvrir le lien généré dans un navigateur : `http//localhost:8000` (éventuellement)

### Note
- Après soumission du formulaire, les infomations soumis se charge dans un fichier data.json
- Le fichier est disponible à partir du lien : http(s)://domain:port/data.json
