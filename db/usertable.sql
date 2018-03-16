/*creates user table*/
CREATE TABLE user_account(
    user_id INT NOT NULL AUTO_INCREMENT,
    email VARCHAR(100) NOT NULL,
    password CHAR(60) NOT NULL,
    first VARCHAR(100) NOT NULL,
    last VARCHAR(100) NOT NULL,
    PRIMARY KEY (user_id)
);

/*create new users to the database*/
INSERT INTO user_account(email, password, first, last)
VALUES(:email, :password, :first, :last)


/*login users to the database*/
SELECT password, email
FROM user_account
WHERE password =:digest and email=:email
