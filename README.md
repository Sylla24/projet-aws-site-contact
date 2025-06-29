# Projet AWS - Application de contact

Ce projet démontre le déploiement d'une application web (formulaire de contact en PHP) sur plusieurs services AWS :

## 🧱 Composants utilisés :
- **S3** : site vitrine statique HTML/CSS
- **EC2** : app PHP dynamique avec Apache
- **Elastic Beanstalk** : déploiement automatisé PHP
- **Lightsail** : instance LAMP avec transfert SCP

## 🧪 Fonctionnement :
- L’utilisateur remplit un formulaire (index.php)
- Le message est enregistré dans `messages.json`
- `admin.php` affiche les messages reçus (avec login)

## 🔐 Authentification :
- `admin.php` est protégé par login/mot de passe

## 📸 Captures d'écran :
Voir le dossier `captures/`

## Auteur :
SYLLA BOUBACAR BEN – Élève ingénieur en Télécoms & Réseaux (INP-HB)
