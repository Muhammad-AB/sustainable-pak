# Sustainable-PAK

SustainablePAK is a pioneering web-based platform dedicated to promoting and connecting sustainable and eco-friendly businesses in Pakistan. With a mission to foster a more sustainable society, SustainablePAK serves as a comprehensive hub that brings together environmentally conscious consumers and businesses committed to sustainable practices.

## Table of Contents
1.	About
2.	Getting Started
3.	Features
4.	Components

## About
Our platform is designed to address the challenges of finding and supporting eco-friendly businesses in Pakistan. We understand that the scarcity of such businesses and the lack of centralized platforms can make it difficult for individuals to align their lifestyle choices with sustainability.

SustainablePAK acts as a bridge, connecting customers, businesses, and non-profit organizations dedicated to environmental causes. Customers gain access to a curated list of sustainable businesses, making it easier to make eco-conscious purchasing decisions. Businesses, in turn, benefit from increased visibility and exposure to a targeted audience passionate about sustainability.

SustainablePAK is designed with a typical web application architecture, consisting of a frontend and backend. The frontend is built using HTML, CSS, and JavaScript, enhanced by the Bootstrap framework. The backend, powered by PHP Laravel and MySQL, handles the server-side operations and data storage.

## Getting Started:
1. Clone the repository from https://github.com/Muhammad-AB/sustainable-pak.git
2. Open the code file in your code editor.
3. Install the dependencies by running “composer install” command and "npm install" command in the project in the terminal.
4. Setup the .env file, by duplicating the .env.example file and rename it to .env file
5. Setup the database in your .env file, by going to the code representing your database connections, and updating the values according to your own database.
6. Run the “php artisan key:generate” command to generate the encryption key for your project.
7. Migrate and seed the database by running “php artisan migrate --seed” command.
8. Run "php artisan serve" command to run the application.


## Features

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


## Technologies:

* HTML, CSS, JavaScript for user interaction.
* Bootstrap for responsive and visually appealing design (pagination).
* PHP Laravel Framework managing routes, controllers, and models.
* MySQL database for efficient data storage and retrieval.
* Laravel Breeze for authentication.
* Middleware for role-based access control.

## Componenets;

### Controllers:
* **AuthenticatedSessionController:** 
  This controller, AuthenticatedSessionController, handles the authentication-related actions in the project. It includes methods to display the login view, handle authentication requests, and destroy an authenticated session. Upon successful login, users are redirected to role-specific dashboards based on their roles ('A' for admin, 'B' for business, and 'U' for regular users).

* **RegisteredUserController:** 
  This controller, RegisteredUserController, manages the user registration process. It includes methods to display the registration view and handle incoming registration requests. Upon successful registration, the user is logged in and redirected to the home page. The controller ensures that the user's name and email are unique, and the password follows the specified rules. Additionally, a new user is created with the 'U' role (regular user) and a corresponding entry in the users table.

* **CommonController:**
  The CommonController handles actions such as displaying the home page, managing categories, presenting blogs, showcasing businesses by category, showing individual blogs, and providing information from the About model, contributing to a comprehensive user experience.

* **BusinessController:** 
  Manages business-related operations, including registration, dashboard, and editing details.

* **AdminController:** 
  Controls admin-specific functionalities like approving/rejecting business requests, managing blogs, and editing the about page.

### Middlewares:

* **RedirectIfAuthenticated:**
  The RedirectIfAuthenticated middleware directs authenticated users to role-specific dashboards, ensuring a tailored user experience based on roles ('A' for admin, 'B' for business, and 'U' for regular users) on the SustainablePAK platform.
  Registered name in kernel.php: guest

* **Authenticate:**
  Ensures authentication before allowing access to certain routes.
  Registered name in kernel.php: auth

* **AdminMiddleware:** 
  Restricts access to admin-specific routes based on the user's role.
  Registered name in kernel.php: admin

* **BusinessMiddleware:**
  Restricts access to business-specific routes based on the user's role.
  Registered name in kernel.php: business

## Models with Relationships:

* **User Model:** 
  Represents user data with a one-to-one relationship to the Business Model.

* **Business Model:** 
  Represents business details with a one-to-one relationship to the User Model and a many-to-one relationship to the Category Model.

* **Category Model:** 
  Defines business categories with a one-to-many relationship to the Business Model.

* **Blog Model:** 
  Represents blog posts, associated with no direct relationships.

* **About Model:** 
  Represents the about page content with no direct relationships.
