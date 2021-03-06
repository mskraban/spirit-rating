# Flaviar - PHP Backend Engineer Test Assignment

<!-- PROJECT LOGO -->
<br />
<div align="center">
   <img src="https://i.imgur.com/kOoTOG3.jpg" alt="Flaviar assignment">
</div>



<!-- ABOUT THE PROJECT -->
## đ About The Assignment

Project is providing simple Symfony web application that enables users to rate different spirits after tasting them.



### đ§° Built With

* [Symfony](https://symfony.com/)
* [Bootstrap](https://getbootstrap.com)



<!-- GETTING STARTED -->
## đ Getting Started

Provided instructions how to setup and run package on your computer. I used xampp on windows, so I placed project to ```xampp/htdocs``` folder

### âšī¸ Prerequisites

To start using the project, you need to have installed composer and yarn package manager.


### âī¸ Installation

1. Download Git repository
2. Place it on your server directory (for me it was htdocs, since I use xampp)
3. Install Composer dependencies ```composer install```
4. Install Yarn dependecies ```yarn install```
5. Start server ```symfony server:start```
6. Create database ```php bin/console doctrine:database:create```
7. Prepare table ```php bin/console doctrine:migrations:migrate```
8. Compile build ```npm run build```



<!-- USAGE EXAMPLES -->
## đąī¸ Usage

User have to register and create account. After registering user will have to login using created account. After login user is redirected to rating page, where user rate spirits after tasting them.


<!-- USAGE EXAMPLES -->
## đ API endpoints

List of all available REST API endpoints.

| Request type | URL | Description |
| ------ | ------ |------ |
| GET | ```/api/ratings``` |Retrieves the collection of Rating resources
| POST | ```/api/ratings``` |Creates a Rating resource
| GET | ```/api/ratings/{id}``` |Retrieves the Rating resource
| PUT | ```/api/ratings/{id}``` |Replaces the Rating resource
| DELETE | ```/api/ratings/{id}``` |Removes the Rating resource
| PATCH | ```/api/ratings/{id}``` |Updates the Rating resource


<!-- Notes -->
## â Notes

- In case you get error "The metadata storage is not up to date" remove your database version provider from  .env file at ```?serverVersion```
