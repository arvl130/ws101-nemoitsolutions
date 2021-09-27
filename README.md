# 🐟 Nemo IT Solutions Company Website 🐟

This is a finals examination for WS101 on building an IT company website.

The project is based on PHP and MariaDB.

## 🔧 Setup

Before running the project, create the required table in MariaDB:
```
CREATE TABLE messages_tbl (
    id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(255),
    messages VARCHAR(255),
);
```

To run the project, PHP needs to be in your `PATH`:
```
$ php --version
```

For deployment, you will also need Rsync:
```
$ rsync --version
```

## 🚀 Usage

This project reads the following environment variables during runtime.

`DB_HOST`: Sets the database host. Default: localhost

`DB_USER`: Sets the database user. Default: root

`DB_NAME`: Sets the database name. Default: `itcompany_db`

`DB_PASS`: Sets the database password. Default: (empty)

`PORT`: Sets the port the project will run on. Default: 8000

You may want to set some of these environment variables before starting the project.

To run the project, run the following command:
```
$ ./setup run
```

To deploy the project into an htdocs directory, run the command:
```
$ ./setup deploy /path/to/htdocs
```
