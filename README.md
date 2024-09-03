# EasyLinkProduct Overview

EasyLinkProduct is a Laravel-based application designed for seamless integration and ease of use. Below are the technical requirements and environment setup details necessary to run the application smoothly.

## Local Development Environment

The application has been developed and tested with the following environment setup:

- **Laravel Framework**: 10.48.16
- **PHP**: 8.1.10
- **Node.js**: 16.15.0
- **Composer**: 2.3.10
- **Laravel Installer**: 4.2.16
- **npm**: 8.5.5

## Minimum Server Requirements

To ensure optimal performance, the server hosting EasyLinkProduct should meet or exceed the following requirements:

### 1. Operating System
- Linux (Ubuntu 20.04 LTS or later recommended)
- Windows Server 2019 or later
- macOS (for local development)

### 2. Web Server
- Apache 2.4 or later with mod_rewrite enabled
- Nginx 1.18 or later

### 3. PHP
- **Version**: 8.1.10 or later
- **Extensions**:
  - OpenSSL
  - PDO
  - Mbstring
  - Tokenizer
  - XML
  - Ctype
  - JSON
  - BCMath
  - Fileinfo
  - GD (for image processing)
  - cURL

### 4. Database
- MySQL 5.7 or later / MariaDB 10.3 or later
- PostgreSQL 12.0 or later
- SQLite (for testing or small-scale applications)

### 5. Memory
- **Minimum**: 2GB RAM (4GB recommended for production environments)
- **Storage**: SSD recommended for faster read/write operations

### 6. Node.js
- **Version**: 16.15.0 or later

### 7. Composer
- **Version**: 2.3.10 or later

### 8. Additional Requirements
- npm: Version 8.5.5 or later
- SSL Certificate: Required for secure HTTPS connections
- SSH Access: For deploying updates and running commands

## Installation Guide

### 1. Clone the Repository
-**git clone https://github.com/your-repo/easylinkproduct.git

### Install Composer Dependencies
-**npm install

### Set Up Environment Variables
-**cp .env.example .env

###  Import the Database File
-**mysql -u username -p database_name < path/to/database.sql

### Generate Application Key
-**php artisan key:generate

