# Evaluation_SQL-POO-AJAX
`Par Samy MAHMOUDI, Louis-Axel RENARD et Nathan SZIGETI, de 2e année à l'IIM`

# Ajouter la BDD
Pensez à créer le fichier config.php dans `core/config`
```
$dbConfig = [   
    "host" => "localhost",  
    "dbname" => "SondaPote",  
    "dbuser" => "root",  
    "dbpass" => "",  
];
```
# Connexion au site

Arrivée sur le site vous pouvez directement vous connecter grâce à vos identifiants :  
```
email : Alexandre@iim.fr      
mot de passe : alexandre
```
 
 A noter : Pour tous les inscrits sur la base de données, pour se connecter il suffit de rentrer l'email et le mot de passe est la première partie de l'email exemple :  
 ```
 email : crocodile@iim.fr       
 mot de passe : crocodile
 ```
 
# Fonctionnalités

### Page inscription et connexion
* inscription
  - mot de passe hashé dans la bdd
  - vérification des disponibilités d'adresse et de pseudo
* connexion
  - vérification du mot de passe hashé

### Page profil
* modification du profil
* voir nos sondages en cours

### Page amis
* ajout et suppression d'amis
* vision des amis connectés et déconnectés (nous avons laissé nos comptes connectés volontairement)


### Création de sondages
* choix du nombre de réponses
* choix de durée du sondage

### Actualités
* voir les sondages des amis
  - en cours
  - terminés
* Voir nos sondages terminés

### Page réponses sondage
* Lorsqu'on arrive sur une page de sondage
  - qui nous appartient et en cours, vous pouvez invitez vos amis par mail, répondre une fois à votre sondage, voir les réponses en direct et tchatter
  - qui ne nous appartient pas et en cours, vous pouvez répondre une fois, voir les réponses en direct et tchatter
  - qui est terminé, vous pouvez voir les résultats et continuer de tchatter
* le tchat et les réponses au sondage s'actualisent automatiquement

