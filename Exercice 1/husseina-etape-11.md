1. Dans la méthode list() du UserController :
Instanciez un objet UserManager.

Appelez sa méthode findAll() pour récupérer tous les utilisateurs.

Transmettez ensuite le tableau d'utilisateurs à un template pour l'affichage.

2. Créez le fichier templates/users/list.phtml :
Ce template devra :

Afficher un tableau HTML listant les utilisateurs.

Ajouter un peu de style pour améliorer la mise en page (par exemple : bordures, espacement, couleurs...).

Afficher une ligne par utilisateur, avec les colonnes suivantes :

Email

Prénom

Nom

Liens d'action : voir, modifier, supprimer

Utiliser une boucle foreach pour parcourir le tableau $users.

3. Vérifiez que la méthode findAll() existe bien dans le UserManager :
Cette méthode doit :

Effectuer une requête SQL du type : SELECT * FROM users.

Parcourir les résultats pour transformer chaque ligne en une instance de la classe User.

Retourner un tableau d’objets User.

4. Ajouter un lien vers la page de liste dans layout.phtml :
Ce lien doit pointer vers la route index.php?route=list_user.

Il peut être placé dans un menu ou dans un header commun.