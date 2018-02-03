### Database Environment
- Database : uas_db
- Table: users
```
create table users(
    id int primary key auto_increment,
    first_name varchar(30),
    last_name varchar(30),
    username varchar(20),
    email varchar(30),
    password varchar(75)
);
```
- table : categories
```
create table categories(
    id int primary key auto_increment,
    name varchar(30),
    description text
);
```
- Table : books
```
create table books(
    id int primary key auto_increment,
    serial varchar(20),
    title varchar(30),
    author varchar(45),
    synopsis text,
    id_books_categories int
);
```

