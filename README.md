
# Finger Print Attendance For Examination : Application Installation Guide

Follow these steps to set up the Laravel application after cloning it onto a new system.

## Prerequisites

- Composer: PHP dependency manager.
- Git: Version control system.
- Node.js and NPM: For managing JavaScript packages.

## Installation Steps

1. **Clone the Repository**:
   Use Git to clone the repository to your local system.
   ```
   git clone https://github.com/Komestitches/FCP-CSC-18-1045..git
   ```

2. **Navigate to Project Directory**:
   ```
   cd [project-directory]FCP-CSC-18-1045.
   ```

3. **Install PHP Dependencies**:
   ```
   composer install
   ```

4. **Install JavaScript Dependencies**:
   ```
   npm install
   ```

5. **Copy Environment File**:
   ```
   cp .env.example .env
   ```

6. **Generate Application Key**:
   ```
   php artisan key:generate
   ```

7. **Configure Environment Settings**:
   Edit the `.env` file with appropriate settings.

8. **Run Database Migrations**:
   ```
   php artisan migrate
   ```

9. **Compile Frontend Assets**:
   For development:
   ```
   npm run dev
   ```
   For production:
   ```
   npm run prod
   ```

10. **Serve the Application**:
    ```
    php artisan serve
    ```

11. **Visit the Application**:
    Open a web browser and navigate to `http://localhost:8000`.

12. **Additional Configurations**:
    Configure any additional elements as needed.

13. **Run Unit Tests** (Optional):
    ```
    php artisan test
    ```

## Notes

- Replace `[repository-url]` and `[project-directory]` with your actual repository URL and local project directory.
- Ensure the database and other services are correctly set up and running before proceeding with migrations and other steps.
