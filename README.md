# Campus Intelligence Platform

A production-ready Laravel 12 application for campus management with role-based access control (RBAC).

## Features

- **Role-Based Access Control (RBAC)** with three roles:
  - Admin: Full system access
  - Senior: Advanced student permissions
  - Fresher: Basic student permissions
- **Service-Based Architecture**: Clean separation of concerns with service layer
- **Bootstrap 5 UI**: Modern, responsive interface
- **Middleware Protection**: Role-based route protection
- **Flash Messages**: Success/error/warning/info notifications
- **Scalable Design**: Ready for future API/mobile integration

## Tech Stack

- **Framework**: Laravel 12
- **Database**: MySQL
- **Frontend**: Blade Templates with Bootstrap 5
- **Architecture**: Service-based clean architecture
- **Authentication**: Laravel Breeze (email login)

## Prerequisites

- PHP >= 8.2
- Composer
- MySQL (XAMPP recommended for local development)
- Node.js & NPM

## Installation

### 1. Clone the Repository

```bash
git clone <repository-url>
cd campusintel
```

### 2. Install Dependencies

```bash
composer install
npm install
```

### 3. Configure Environment

Copy the example environment file:

```bash
cp .env.example .env
```

Generate application key:

```bash
php artisan key:generate
```

### 4. Configure Database

Open `.env` and update the database configuration for XAMPP:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=campus_intel
DB_USERNAME=root
DB_PASSWORD=
```

**Important**: Create the MySQL database before running migrations:

```sql
CREATE DATABASE campus_intel;
```

### 5. Run Migrations

```bash
php artisan migrate
```

### 6. Seed Roles

```bash
php artisan db:seed --class=RoleSeeder
```

This will create the default roles:
- Admin (slug: admin)
- Senior (slug: senior)
- Fresher (slug: fresher)

### 7. Build Assets

```bash
npm run build
```

### 8. Start Development Server

```bash
php artisan serve
```

The application will be available at `http://localhost:8000`

## Database Schema

### Roles Table

| Column | Type | Description |
|--------|------|-------------|
| id | bigint | Primary key |
| name | string | Role name (Admin, Senior, Fresher) |
| slug | string | Unique slug for role identification |
| description | text | Role description |
| created_at | timestamp | Creation timestamp |
| updated_at | timestamp | Update timestamp |

### Users Table (Modified)

| Column | Type | Description |
|--------|------|-------------|
| id | bigint | Primary key |
| role_id | bigint (nullable) | Foreign key to roles table |
| name | string | User name |
| email | string | User email (unique) |
| password | string | Hashed password |
| ... | ... | Other Laravel default fields |

## Project Structure

```
app/
├── Http/
│   ├── Controllers/
│   │   ├── Admin/
│   │   │   └── DashboardController.php
│   │   ├── Senior/
│   │   │   └── DashboardController.php
│   │   ├── Fresher/
│   │   │   └── DashboardController.php
│   │   └── Controller.php
│   └── Middleware/
│       └── RoleMiddleware.php
├── Models/
│   ├── User.php
│   └── Role.php
└── Services/
    ├── Contracts/
    │   ├── UserServiceInterface.php
    │   └── RoleServiceInterface.php
    ├── UserService.php
    └── RoleService.php

resources/
└── views/
    ├── layouts/
    │   └── app.blade.php
    ├── components/
    │   ├── navbar.blade.php
    │   ├── sidebar.blade.php
    │   └── flash-messages.blade.php
    ├── admin/
    │   └── dashboard.blade.php
    ├── senior/
    │   └── dashboard.blade.php
    └── fresher/
        └── dashboard.blade.php

database/
├── migrations/
│   ├── 2025_01_19_000001_create_roles_table.php
│   └── 2025_01_19_000002_add_role_id_to_users_table.php
└── seeders/
    └── RoleSeeder.php
```

## Service Layer Architecture

The application follows a service-based architecture for better scalability and maintainability:

- **Interfaces**: Define contracts for services (`App\Services\Contracts\*`)
- **Services**: Implement business logic (`App\Services\*`)
- **Controllers**: Handle HTTP requests and delegate to services
- **Models**: Represent database entities

This architecture makes it easy to:
- Swap implementations
- Write unit tests
- Scale for API/mobile support
- Maintain separation of concerns

## Middleware Usage

The `role` middleware protects routes based on user roles:

```php
Route::middleware(['auth', 'role:admin'])->group(function () {
    // Admin-only routes
});
```

## Role-Based Dashboards

Each role has its own dashboard:

- **Admin Dashboard**: User management, role management, system statistics
- **Senior Dashboard**: Study resources, mentorship, events, achievements
- **Fresher Dashboard**: Getting started guide, campus map, FAQ, mentorship

## Future Enhancements

- Install Laravel Breeze for complete authentication
- Add user management CRUD operations
- Implement role assignment interface
- Add API endpoints for mobile app
- Implement email notifications
- Add activity logging
- Create comprehensive reports
- Add file upload functionality
- Implement real-time features with broadcasting

## Security Best Practices

- All routes are protected with authentication middleware
- Role-based access control using middleware
- Passwords are hashed using Laravel's default bcrypt
- CSRF protection enabled
- Input validation on all forms
- SQL injection prevention via Eloquent ORM

## Development Guidelines

- Follow Laravel coding standards
- Use service layer for business logic
- Keep controllers thin
- Write migrations for database changes
- Use seeders for default data
- Implement proper error handling
- Add validation rules
- Write tests for critical functionality

## Troubleshooting

### Database Connection Error

Ensure MySQL is running in XAMPP and the database `campus_intel` exists.

### Migration Errors

If migrations fail, try:
```bash
php artisan migrate:fresh
```

### Permission Issues

Ensure storage and bootstrap/cache directories are writable:
```bash
php artisan storage:link
php artisan cache:clear
php artisan config:clear
```

## License

This project is open-source and available under the MIT License.

## Support

For issues and questions, please open an issue on the repository.
