# AnnuairephpNWS
Journal de bord du premier projet php de la NWS 

- ![#f03c15](https://via.placeholder.com/15/f03c15/000000?text=+) SQL [ici](https://github.com/Adambizien/AnnuairephpNWS/blob/ad939fc56e2b860c70d762860ea1f5e5c1b4832a/sql.txt)


### Branche principale (main)  1 :
- Nous avons créé une base de données "annuaireNWS", puis nous avons ajouté la table "listUser" avec les colonnes id, surname, name, birthday, email, phone, address, postalcode, city et description.
- Initialisation de mon interface MVC avec le CRUD, index... vu en cour. [ici](https://github.com/Adambizien/AnnuairephpNWS/commit/58b7e1a2bd3ee1009dca51ab8431b91077d29bd5)
- Structuration des différents dossiers. [ici](https://github.com/Adambizien/AnnuairephpNWS/commit/0e753d91e4cc4c4d56cfad641cb9232d49b3e42)
- Formulaire d'ajout de contact et liste des contacts. [ici](https://github.com/Adambizien/AnnuairephpNWS/commit/2a71f7520a72f1be2d8607a90bb7e66b5d482add)
### Branche "tool_formulaire"  2 :
- On réorganise la structure pour pouvoir ajouter un fichier "tool" (dans la dernière partie de la branche).
- On fixe un problème dans le CRUD.  [ici](https://github.com/Adambizien/AnnuairephpNWS/commit/b4362b24af6ee253e0a457dd1b22de02ee699603)
- On ajoute le "tool formulaire" qui sera modulable. [ici](https://github.com/Adambizien/AnnuairephpNWS/commit/1713bdafa988252e9b6d486a44a3e358cf5ce4b5)
- On le rend accessible et fonctionnel.  [ici](https://github.com/Adambizien/AnnuairephpNWS/commit/fbf29c6a3c19d7d567cdb9c2529d055fbec64dc0)
### Branche "détail"  3 :
- Initialisation de la page détail. [ici](https://github.com/Adambizien/AnnuairephpNWS/commit/9564d419ea3f81792f388b135c9926a3e3dea208)
- Récupération des détails du contact. [ici](https://github.com/Adambizien/AnnuairephpNWS/commit/3a69f9c1dfb0b6ccd2e6db2aa78b9432f70d605b) et [ici](https://github.com/Adambizien/AnnuairephpNWS/commit/b8dc29d3fb560fbbe03a0baa57483ff8927432c2)
### Branche "suppression"  3.5 :
- Ajouter la fonctionnalité de suppression. [ici](https://github.com/Adambizien/AnnuairephpNWS/commit/3b4e7a1eb02c3b1d1e2f04d4da3570237fb5461b)
### Branche "filtre_formation" 4 :
- Nous avons ajouté une table "formation" qui est liée à la colonne "formation_id" (que j'ai ajoutée) dans "listUser", et nous l'avons intégrée aux fonctionnalités précédemment mentionnées pour anticiper notre        futur filtre en fonction de la formation souhaitée. [ici](https://github.com/Adambizien/AnnuairephpNWS/commit/19eedbb8759ae0d1f0d7947480cfc780579c45ea)
### Branche 'filtre_recherche_trie' 5 :
- Nous avons mis en place les fonctionnalités de tri, recherche et de filtre. [ici](https://github.com/Adambizien/AnnuairephpNWS/commit/ad939fc56e2b860c70d762860ea1f5e5c1b4832a)
### Branche 'optimisation' 6 :
- Nous avons oublié de mettre en place les formations dans le formulaire de modification, [ici](https://github.com/Adambizien/AnnuairephpNWS/commit/ef15ed7c3f47001af4f36b6a90edd5df0dd4e56e) et [ici](https://github.com/Adambizien/AnnuairephpNWS/commit/2746e7685819d440c07b5e979a5b1d47b1c62f06).
- Nous avons mis en place un JSON pour la connexion à la base de données, [ici](https://github.com/Adambizien/AnnuairephpNWS/commit/789a1d36cb6b4e87bbdaf4afaa00ea18e40e4ea6).
- Nous avons remplacé le CRUD précédent par une classe Database, qui est beaucoup plus pratique, [ici](https://github.com/Adambizien/AnnuairephpNWS/commit/55a4fdc6a479eba84b8c82b7a3c310f3f844a233).
