# Basic Laravel Docker Setup

This repository contains a basic Docker setup for Laravel, including nginx, PHP, MySQL, Redis, and NPM. This setup allows you to easily develop, test, and deploy your Laravel application in a Docker environment.

## Requirements
Before getting started, you will need to have the following software installed on your machine:
- Docker
- Docker Compose

## Getting Started
To use this Docker setup for your Laravel application, follow these steps:
1. Clone this repository to your local machine: git clone https://github.com/DerickDL/LaravelDockerSetup.git.
2. Copy the contents of your Laravel application into the app folder.
3. Copy your .env file into the /src directory of this repository.
4. Run docker-compose up -d in the root directory to start the Docker containers.
5. Visit http://localhost in your browser to view your Laravel application.

## Configuration
The following Docker containers are included in this setup:
- nginx: serves as the web server and handles incoming HTTP requests.
- php: runs the PHP code for your Laravel application.
- mysql: provides the database server for your application.
- redis: is a caching system that can improve the performance of your Laravel application.
- npm: is used to install and manage the JavaScript dependencies for your application.

You can configure each of these containers by modifying the docker-compose.yml file.

## License
This project is licensed under the MIT License - see the LICENSE file for details.

## Acknowledgments
This Docker setup was inspired by laradock, a more comprehensive Docker setup for Laravel.