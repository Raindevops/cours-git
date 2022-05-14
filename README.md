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

Afficher les fichiers mis de côtés

    git stash show --text
    git stash list

Réinitialliser tous les fichiers mis de côtés

    git stash clear
    git stash drop

### Commit

Afficher les modifications à commit, et écrire un message
Cette commande ouvre un éditeur de fichier (vim)

    git commit
    git commit -v