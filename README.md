# Portfolio Website - Firebase Hosting

## Overview
This is a simple portfolio website originally built with PHP but hosted on Firebase. Since Firebase Hosting does not support PHP, all PHP files are converted to static HTML before deployment.

## Features
- Fully responsive portfolio website
- Hosted on Firebase
- Footer always stays at the bottom
- Static files (HTML, CSS, JS) for deployment

## Folder Structure
```
/portfolio
├── public/                # Firebase hosting directory
│   ├── index.html         # Homepage (Converted from index.php)
│   ├── about.html         # About page (Converted from about.php)
│   ├── contact.html       # Contact page (Converted from contact.php)
│   ├── assets/            # Images, CSS, JS files
│   ├── style.css          # Stylesheet
├── firebase.json          # Firebase configuration
├── .firebaserc            # Firebase project settings
└── README.md              # Project documentation
```

## How to Set Up

### 1️⃣ Install Firebase CLI
Firebase CLI is required to deploy this project. Install it using:
```sh
npm install -g firebase-tools
```

### 2️⃣ Log in to Firebase
```sh
firebase login
```
This will open a browser window to authenticate Firebase CLI.

### 3️⃣ Initialize Firebase Project
Navigate to the project folder and run:
```sh
firebase init
```
Choose **Hosting**, then select your Firebase project.

### 4️⃣ Convert PHP to HTML
Since Firebase does not support PHP, manually convert `index.php` to `index.html` and update internal links.

### 5️⃣ Deploy to Firebase
Run:
```sh
firebase deploy
```
After deployment, Firebase will provide a live URL for your site.

## Notes
- Any future PHP changes need to be manually converted to HTML before deploying.
- To add a backend, consider using **Google Cloud Functions** or **Google Cloud Run**.

## Live Demo
https://syed-khaja-portfolio-php.web.app/

---
Developed by Syed Khaja Hussain Syed Ali 🚀

