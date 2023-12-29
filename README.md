# Sustainable-PAK

SustainablePAK addresses this gap by providing a dedicated space for businesses to promote their eco-friendly initiatives, and for consumers to make informed choices aligned with their values.

## Table of Contents
1.	About
2.	Features
3.	Setup

## About
SustainablePAK is designed with a typical web application architecture, consisting of a frontend and backend. The frontend is built using HTML, CSS, and JavaScript, enhanced by the Bootstrap framework. The backend, powered by PHP Laravel and MySQL, handles the server-side operations and data storage.

### Components:

### Client-Side (Frontend):
HTML, CSS, JavaScript for user interaction.
Bootstrap for responsive and visually appealing design (pagination).

### Server-Side (Backend):
PHP Laravel Framework managing routes, controllers, and models.
MySQL database for efficient data storage and retrieval.

### Authentication and Authorization:
Laravel Breeze for authentication.
Middleware for role-based access control.

### Version Control:
Git for version control, ensuring codebase integrity.

### Development Tools:
Visual Studio Code for coding efficiency.

## Functionalities

### Explore Eco-Friendly Businesses:
Users can browse and explore a variety of eco-friendly businesses listed on the platform.

### Read Blogs:
Access a collection of blogs related to eco-friendly practices, sustainability, and environmental topics.

### View Business Details:
Get detailed information about eco-friendly businesses, including their description, category, and product details.

### User Authentication:
Ensures secure access to the platform for users, businesses, and admins.
Role-based authentication to distinguish between user types.

### User and Business Registration and Login:
Streamlined registration process for users and businesses.
Secure login functionality for authenticated access.

### Admin and Business Dashboards:
Dashboard for admin to do tasks rapidly.
Business dashboards for viewing and editing their display details.

### Business Details Editing:
Businesses have the autonomy to edit and update their information.
Real-time reflection of changes in the business dashboard.

### Admin Functionalities:
Admin tools to manage business registration requests (accept/reject).
Full control over blog management, including writing, editing, and deleting.
Authority to edit the About page content.

### Blog Management:
Comprehensive system for managing blogs on eco-friendly practices.

### About Page Editing:
User-friendly interface for admin to edit and update the About page.

## How To Setup:
1. Clone the repository from https://github.com/Muhammad-AB/sustainable-pak.git
2. Open the code file in your code editor.
3. Install the dependencies by running “composer install” command and "npm install" command in the project in the terminal.
4. Setup the .env file, by duplicating the .env.example file and rename it to .env file
5. Setup the database in your .env file, by going to the code representing your database connections, and updating the values according to your own database.
6. Run the “php artisan key:generate” command to generate the encryption key for your project.
7. Migrate and seed the database by running “php artisan migrate --seed” command.
8. Run "php artisan serve" command to run the application.
