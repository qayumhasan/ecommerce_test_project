# Project Documentation (Qayum Hasan)

To run this project, you need to have PHP, Composer, and MySQL installed on your machine.
Also, you need to have a web server like Apache or Nginx installed on your machine.

To begin, run the following command to download the project using Git:

```bash
# pull project from github 
git clone https://github.com/qayumhasan/ecommerce_test_project.git
```

Next, move into the new project’s folder and install all its dependencies:

```bash
# move into the new folder
cd ecommerce_test_project
composer install
```

then copy `.env.example` to `.env` and edit database credentials from `.env`:

```bash
# copy .env.example to .env
cp .env.example .env
```
then edit database credentials from `.env`

after that create a database with the same name you have in `.env` file


after that run the project by following command:

```bash
php -S localhost:8000
```
# APP URL

| URL       | Method |    |                                Description                                                           |
|----------------|--------|------------------------------------|-----------------------------------------------------|
| /categores     | GET    | (Task 1 ) Show all categories with total item and order categories by total Items (DESC).|
| /items         | GET    | (Task 2 ) Categories and Parent Categories with Total Item Number                        |
