# Flutter Application – PHP API Integration

This repository contains a Flutter application built as part of a technical assessment.  
The app consumes data from a PHP-based REST API and displays it in a clean, user-friendly interface.

---

##  Project Purpose

- Demonstrate Flutter API integration
- Fetch and display data from a backend REST API
- Handle loading and error states
- Present data using a clean Material UI

---

##  Tech Stack

- Flutter (SDK 3.x)
- Dart
- HTTP package
- Material UI

---

##  Project Structure
flutter-app/
│
├── lib/
│ └── main.dart # Application entry point
│
├── pubspec.yaml
└── README.md


---

##  How to Run the Project

### Step 1: Prerequisites

- Flutter SDK installed
- Chrome browser or Android Emulator
- PHP backend API running locally

---

### Step 2: Install Dependencies

```bash
flutter pub get

Step 3: Configure API URL

Update the API URL inside lib/main.dart based on the platform:

Flutter Web (Chrome):
http://localhost/php-api/index.php

Android Emulator:
http://10.0.2.2/php-api/index.php

Physical Device:
http://<your-local-ip>/php-api/index.php

Step 4: Run the Application

Flutter Web:
flutter run -d chrome

Android Emulator / Device:
flutter run

 ### Features Implemented

- REST API integration using HTTP

- Loading indicator while fetching data

- Basic error handling

- ListView with Material cards

- Clean and readable UI

### Backend Dependency

This application consumes data from a PHP REST API.

Backend repository:
https://github.com/shaikshahed/PHP_Flutter_App/tree/php_backend_code


