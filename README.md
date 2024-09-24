# Cool Tech Website

## Description
The Cool Tech website is a dynamic platform designed to provide users with digestible information about the latest in technology. The site features a range of articles categorized into tech news, software reviews, hardware reviews, and opinion pieces. Users can easily navigate articles by category and tags, enhancing their reading experience and improving search engine optimization (SEO).

## Technologies Used
- **PHP**: Backend programming language.
- **Laravel**: PHP framework for building web applications.
- **MySQL**: Database management system for persistent data storage.
- **HTML/CSS**: For structuring and styling the frontend.
- **JavaScript**: For any interactive features (if applicable).

## Features
- **Home Page**: Displays the latest 5 articles with titles and a preview.
- **About Us Page**: Provides an overview of the company.
- **Search Page**: Allows users to search by article ID, category, and tag.
- **Legal Page**: Contains terms of use and privacy policy.

## Installation Instructions
To run the website locally, follow these steps:

1. **Clone the repository:**
git clone https://github.com/01Newbie/Cool-Tech-Website.git

2. **Navigate into the project directory:**
cd Cool-Tech-Website

3. **Install dependencies:**
composer install

4. **Set up the environment file:**
cp .env.example .env

5. **Generate the application key:**
php artisan key:generate

6. **Run database migrations:**
php artisan migrate

7. **Seed the database with sample data (if applicable):**
php artisan db:seed

8. **Start the local development server:**
php artisan serve

9. **Open your browser and navigate to:**
http://127.0.0.1:8000

## Contributing
Feel free to submit a pull request if you want to contribute to this project! 
Please ensure to follow the project's coding standards and guidelines.

## License
This project is licensed under the MIT License.