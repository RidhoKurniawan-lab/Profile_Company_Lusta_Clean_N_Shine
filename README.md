# Lusta

Lusta is a PHP-based web application following a simple MVC (Model-View-Controller) architecture. It is designed for modular development and easy customization, featuring user and admin interfaces, product and contact management, and a clean separation of concerns.

## Table of Contents

- [Features](#features)
- [Project Structure](#project-structure)
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
- [Controllers](#controllers)
- [Models](#models)
- [Views](#views)
- [Public Assets](#public-assets)
- [Contributing](#contributing)
- [License](#license)

---

## Features

- MVC architecture for maintainability
- User and admin authentication
- Product management
- Contact form handling
- Modular view layouts
- Static asset management (CSS, JS, images)

## Project Structure

```
Lusta/
│   config.php
│
├── App/
│   ├── init.php
│   ├── controllers/
│   │   ├── AdminController.php
│   │   └── UserController.php
│   ├── cores/
│   │   ├── App.php
│   │   ├── controller.php
│   │   └── Database.php
│   ├── models/
│   │   ├── contact_Model.php
│   │   ├── product_Model.php
│   │   └── user_Model.php
│   └── views/
│       ├── admin/
│       │   ├── contact_form.php
│       │   ├── login.php
│       │   └── product.php
│       ├── layout/
│       │   ├── admin.php
│       │   └── main.php
│       └── users/
│           ├── about.php
│           ├── contact.php
│           ├── detail.php
│           ├── home.php
│           └── product.php
│
└── Public/
    ├── .htaccess
    ├── index.php
    ├── css/
    │   └── custom.css
    ├── img/
    └── js/
        ├── admin.js
        ├── animasi-user.js
        ├── aunt.js
        └── user.js
```

## Installation

1. **Clone the repository:**
   ```sh
   git clone <repo-url> Lusta
   ```

2. **Configure your web server:**
   - Point your document root to `Lusta/Public`.
   - Ensure `.htaccess` is enabled for URL rewriting.

3. **Set up configuration:**
   - Edit `Lusta/config.php` for database and environment settings.

4. **Database setup:**
   - Create your database and tables as required by the models in `App/models/`.
   - Update credentials in `config.php`.

## Configuration

- **config.php**: Contains global configuration such as database credentials.
- **App/cores/Database.php**: Handles database connection using settings from `config.php`.

## Usage

- Access the application via your browser at the configured domain.
- Admin and user interfaces are separated by controllers and views.
- Static assets (CSS/JS/images) are served from the `Public` directory.

## Controllers

- **AdminController.php**: Handles admin-specific actions (login, product management, contact form).
- **UserController.php**: Handles user-facing actions (home, product, contact, about).

## Models

- **user_Model.php**: User data and authentication logic.
- **product_Model.php**: Product data management.
- **contact_Model.php**: Contact form data handling.

## Views

- **admin/**: Admin interface views.
- **users/**: User interface views.
- **layout/**: Shared layout templates for admin and main site.

## Public Assets

- **css/custom.css**: Custom styles.
- **js/**: JavaScript files for admin and user interactions.
- **img/**: Image assets.

## Contributing

1. Fork the repository.
2. Create your feature branch (`git checkout -b feature/YourFeature`).
3. Commit your changes (`git commit -am 'Add new feature'`).
4. Push to the branch (`git push origin feature/YourFeature`).
5. Create a new Pull Request.

## License

This project is licensed under the MIT License.

---

**Contact:**  
For questions or support, please open an issue or contact the maintainer.
