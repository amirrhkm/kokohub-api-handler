<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Overview
**KokoHub** is a Laravel-based API project designed to manage co-curricular activities (Koko) for educational institutions. It provides a robust backend system for handling users, activities, enrollments, achievements, and more.

## System Architecture

- **Backend**: Laravel 11.x
- **Database**: SQLite
- **Containerization**: Docker
- **Deployment**: AWS ECS with Fargate

## Key Components

### Models

- **User**: Represents system users (students/teachers)
- **Koko**: Represents co-curricular activities
- **Enroll**: Manages user enrollments in co-curricular club
- **Achievement**: Tracks user achievements in activities
- **Broadcast**: Handles announcements and notifications
- **Post**: Manages co-curricular activity-related posts
- **Attendance**: Tracks attendance for club meetings

### Controllers

- **AchievementController**
- **BroadcastController**
- **EnrollController**
- **KokoController**
- **PostController**
- **UserController**

## Database
The project uses SQLite for data storage, with migrations defining the schema.

## API Endpoints

- **/api/kokos**: Koko-related operations
- **/api/users**: User management
- **/api/enrolls**: Enrollment operations
- **/api/achievements**: Achievement tracking
- **/api/broadcasts**: Announcement management
- **/api/posts**: Activity post operations
- **/api/attendances**: Attendance tracking

## Docker Setup
The project is containerized using Docker, with separate containers for the Laravel application and Nginx web server.

- [Dockerfile](https://github.com/amirrhkm/kokohub-laravel-backend/blob/main/Dockerfile)
- [docker-compose.yaml](https://github.com/amirrhkm/kokohub-laravel-backend/blob/main/docker-compose.yaml)

## AWS Deployment
The project is deployed on AWS ECS using Fargate, with the following setup:

1. VPC with public and private subnets
2. ECS Cluster running Fargate tasks
3. EFS for persistent SQLite storage
4. Task definition with mounted EFS volume

## Contribution Guideline

### Prerequisites
- PHP 8.x
- Composer 2.x
- Docker 20.x
- Git
- AWS CLI
- AWS CDK
- Node.js 16.x

### Setting Up the Development Environment
1. Clone the repository
```sh
git clone https://github.com/amirrhkm/kokohub-laravel-backend.git
```
2. Navigate into the project directory
```sh
cd kokohub-laravel-backend
```
3. Install the dependencies
```sh
composer install
npm install
```

4. Seed database
```sh
php artisan migrate:fresh --seed
```

## Development Workflow
1. Create a new branch for each feature/bugfix
```sh
git checkout -b <name>/<prefix>/<module>
```

2. Include only the necessary changes in the branch.

3. Commit changes

Use the following naming convention for commits:
```sh
git commit -m "<prefix>: <message>"
```

4. Push changes to the remote repository
```sh
git push origin <name>/<prefix>/<module>
```

5. Create a pull request
    - Open a pull request from the forked repository to the main repository.
    - Ensure that the pull request is against the `main` branch.

## Contributor
1) Amir Nurhakim:
[LinkedIn](https://www.linkedin.com/in/mrnrhkm/)
[GitHub](https://github.com/amirrhkm)

2) Nik Asyraf:
[LinkedIn](https://www.linkedin.com/in/nikasyraf-ismail/)
[GitHub](https://github.com/AsyrafIsmail)