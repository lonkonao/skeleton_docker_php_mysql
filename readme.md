# Skeleton for Web Development

This skeleton provides an easy-to-configure development environment for web projects that use nginx as the web server, PHP as the programming language, and MySQL as the database management system. We use Docker containers to ease the setup and deployment of these components. With this skeleton, developers can quickly and easily start working on their projects without having to manually configure each component.

## Technologies Used

| Technology   | Version |
|--------------|---------|
| Nginx        | 1.19    |
| PHP          | 7.4     |
| MySQL        | 5.7     |
| Docker       | 20.10   |

## Installation Instructions

1. Clone the repository:
```sh
git clone https://github.com/lonkonao/skeleton_docker_php_mysql.git
```

2. Build the Docker image:
```sh
cd skeleton_docker_php_mysql
docker-compose build
```
3. Run the Docker container:
```sh
docker-compose up -d
```

4. Open the browser and go to `http://localhost:8080` in your web browser, you should see a page that verifies the connection to the database.


## License

This skeleton is licensed under the MIT license. See [LICENSE](LICENSE) for more details.


