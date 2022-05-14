# Cours GIT

## Liste des commandes

- [Remote](#remote)
- [Branches](#branches)
- [Modifications avant commit](#modifications-avant-commit)
- [Commit](#commit)
- [Push & Pull](#push)
- [Tags](#tags)
- [Restore](#restore)
- [Reset](#reset)
- [Diff](#diff)
- [Checkout](#checkout)
- [Log](#log)
- [Cherry pick](#cherry-pick)


### Remote

Lister tous les remotes enregistrés pour le projet

    git remote
    git remote -v

Ajouter un nouveau remote

    git remote add <nom_du_remote> <lien_du_remote>

Renommer un remote

    git remote rename <ancien_nom> <nouveau_nom>

Supprimer un remote

    git remote remove <nom_du_remote>

### Branches

Afficher la branche actuel

    git branch --shwo-current

Lister les branches en local

    git branch -l

Lister les branches en local et sur le répertoire Git distante.

    git branch -a

Supprimer une branche en local

    git branch -d

### Modifications avant commit

Vérifier les fichiers modifiés

    git status

Ajouter un ou plusieurs fichiers modifiés.

    git add <chemin vers le(s) fichier(s)>

Ajouter tous les fichiers modifiés

    git add --all

Mettre de côté tous les fichiers modifiés

    git stash

Récupérer tous les fichiers mis de côtés

    git stash pop

Afficher les modifications mise de côtées

    git stash show --text

Afficher le sha1 des commits sur lequel les modifications mises de côtées se basent 

    git stash list

Réinitialliser tous les fichiers mis de côtés

    git stash clear
    git stash drop

### Commit

Afficher les modifications à commit, et écrire un message
Cette commande ouvre un éditeur de fichier (vim)

    git commit
    git commit -v

Ajouter automatiquement les fichiers modifier, et ouvre un éditeur permettant de renseigner un message de commit

    git commit -a

Ajouter automatiquement les fichiers, et renseigner un message de commit

    git commit -am

Changer le message du dernier commit avant un push

    git commit --amend -m "nouveau message de commit"

### Push

Envoyer les commits vers le répertoire distant

    git push <nom_du_remote> <nom_de_la_branche>

Faire suivre la branche distante par la branche courante

    git push -u <nom_du_remote> <nom_de_la_branche>

Suite à cette commande, le push des commits peut se faire de cette façon : 

    git push 

### Pull

Les commandes **git pull** sont similaires aux commandes **git push**

### Tags

Lister les tags présent sur le répertoire

    git tag -l

Créer un nouveau tag

    git tag <nom_du_tag>

Créer un tag avec un message

Ajouter le tag au répertoire distant

    git push origin <nom_du_tag>

Supprimer un tag

    git tag -d <nom_du_tag>

### Restore

Annulé les modifications d'un ou plusieurs fichiers, non ajouté

    git restore <chemin_vers_fichiers>

Annulé l'ajout de fichier, avant un commit

    git restore --staged <chemin_vers_fichiers>

### Reset

Annulé un commit  

    git reset --hard HEAD

Annulé plusieurs commits

    git reset --hard HEAD~<nombre_de_commit_a_remonter>

example :

    git reset --hard HEAD~5

### Diff

Afficher la différence avec les fichiers modifiés

    git diff
    git diff --stat
    git diff --word-diff
    git diff --name-only

Afficher la différence avec les fichiers modifiés, entre un git add, et un git commit

    git diff --staged
    git diff --cached


### Checkout

Changer de branche, ou remonter l'historique des commits

    git checkout <nom_de_la_branche>
    git checkout <sha1_du_commit>

Créer une nouvelle branche en local

    git checkout -b <nom_de_la_branche>

Revenir à la tête de la branche courante

    git checkout

### Log

Voir l'historique des commits

    git log

Afficher l'historique des commits en mode graph

    git log --graph

Afficher l'historique des commits raccourcis

    git log --online

Voir les modifications du dernier commit

    git show
    git show <commit_sha1>

### Cherry pick

Cherry-pick permet de rapatrier les modifications faites lors d'un commit, sur la branche courante, ou une autre branche du répertoire distant.

    git cherry-pick <nom_de_la_branche>
    git cherry-pick <commit_sha1>