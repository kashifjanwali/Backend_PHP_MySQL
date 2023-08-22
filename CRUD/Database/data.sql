USE crud;
CREATE TABLE user_data (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name VARCHAR(25),
    email VARCHAR(25),
    dob DATE
);
SELECT 
    *
FROM
    user_data;