# Matrimony Project

This is a Laravel-based matrimony application designed to offer a comprehensive platform for users seeking life partners. The project integrates various features such as profile management, communication tools, and order/payment handling.

## Features

- **User Management**: Admin can manage users, approve or reject profiles, and handle subscriptions.
- **Profile Management**: Users can create and update their profiles, including photos and personal information.
- **Order Management**: Manage user orders and subscriptions for unlocking features like profile views or messaging.
- **Pages Management**: Admin can manage static pages such as terms and conditions, privacy policy, etc.
- **Settings**: Admin can configure system-wide settings like SMS providers, payment gateways, and more.
- **Project Initiation**: Covers initial steps such as project planning and setup.
- **Database Design**: Structured and normalized database design for optimal performance and scalability.
- **Dashboard**: A dashboard for users and admins to view key stats, updates, and actions.
- **SMS**: Integrated SMS notifications for registration, profile matches, and more.
- **Front-End Design**: Responsive and user-friendly UI for an excellent user experience.
- **Payment**: Integration with payment gateways for handling subscriptions, unlocking profiles, and other transactions.
- **Multi Profile Unlocking**: Allows users to unlock multiple profiles simultaneously based on their subscription plans.
- **Messaging**: Secure messaging system for users to communicate with their matches.
- **Share Profile**: Users can share their profiles via social media or email.
- **User Personal Profile**: A dedicated section for users to manage their personal information.
- **Candidate Profile Design**: User-friendly candidate profile layout, optimized for viewing.
- **Candidate Profile**: Users can view detailed profiles of potential matches.
- **Login & Logout**: Secure authentication using Laravel Sanctum.
- **Homepage**: A welcoming and informative homepage for all users, with links to registration and search features.
- **Search Profile**: Advanced search functionality based on age, location, profession, and other criteria.
- **Registration Design**: Intuitive and easy-to-use registration process.
- **Create Profile**: New users can create detailed profiles with personal and professional information.
- **Gallery Management**: Users can manage profile photos and albums.
- **Registration**: Simple and secure user registration with validation.

## Requirements

- **PHP**: >= 7.3
- **Laravel**: >= 8.x
- **MySQL**: >= 5.7
- **Composer**

## Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/rubab2020/matrimony.git
   cd matrimony-project
2. Install dependencies: 
   ```bash
   composer install
3. Configure environment variables: 
   ```bash
   cp .env.example .env
4. Set up the database in .env:
   ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_db_username
    DB_PASSWORD=your_db_password
5. Run migrations and seed the database: 
   ```bash
   php artisan migrate --seed
6. Start the application: 
   ```bash
   php artisan serve

## Usage
Register as a user, complete your profile, and browse the candidate profiles.
Admin users can manage profiles, orders, settings, and pages from the dashboard.
Users can search for potential matches, message them, and share profiles.
Users can unlock multiple profiles based on their subscription.
Payments for premium features are handled through integrated payment gateways.

## Contributing
1. Fork the repository.
2. Create a new branch (git checkout -b feature/your-feature).
3. Commit your changes (git commit -m 'Add some feature').
4. Push to the branch (git push origin feature/your-feature).
5. Open a pull request.

## License
This project is licensed under the MIT License. See the LICENSE file for more details.


