# PHP REST API Backend

This repository contains a simple PHP-based REST API created as part of a technical assessment.  
The API returns JSON data and is designed to be consumed by a Flutter application.

---

##  Project Purpose

- Demonstrate basic backend API development using PHP
- Provide JSON data to a Flutter frontend
- Serve as a lightweight backend for integration testing

---

##  Tech Stack

- PHP 8.x
- Apache Server (XAMPP)
- JSON

---

##  Project Structure
php-api/
└── index.php # Main REST API endpoint


---

##  How to Run the Project (Local Setup)

### Step 1: Install XAMPP
Download and install XAMPP from:
https://www.apachefriends.org/

---

### Step 2: Start Apache Server
- Open **XAMPP Control Panel**
- Start **Apache**
- Ensure Apache status is **Running**

---

### Step 3: Place the Project
Move this project folder into:
C:\xampp\htdocs\
Example:
C:\xampp\htdocs\php-api

---

### Step 4: Run the API
Open a browser and visit:
http://localhost/php-api/index.php


You should receive a JSON response.

---

##  API Details

### Endpoint
GET /index.php

### Sample Response
```json
{
  "status": "success",
  "items": [
    {
      "id": 1,
      "name": "Flutter",
      "type": "Framework"
    },
    {
      "id": 2,
      "name": "PHP",
      "type": "Backend"
    },
    {
      "id": 3,
      "name": "REST API",
      "type": "Architecture"
    }
  ]
}

CORS Configuration

CORS headers are enabled in the API to allow requests from web-based clients such as Flutter Web.

Frontend Integration

This API is intended to be consumed by a Flutter application using HTTP requests.

BaseUrl:
http://localhost/php-api/index.php








