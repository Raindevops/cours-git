# Cours GIT

## Liste des commandes

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
