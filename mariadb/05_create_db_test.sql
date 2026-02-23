##    05_create_db_test.sql   -- 2025-07-29
##
## this will create the temporary database used in the PHP and perl test.
##
  
DROP USER IF EXISTS 'testUser'@'localhost'                              ;
CREATE USER 'testUser'@'localhost' IDENTIFIED BY 'password';

FLUSH PRIVILEGES  ;

GRANT ALL ON `testDb`.* TO 'testUser'@'localhost'       \
IDENTIFIED BY 'password'                                                        \
WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0    ;

# DROP DATABASE `testDb`                                        ;
CREATE DATABASE IF NOT EXISTS `testDb`                  ;

GRANT ALL PRIVILEGES ON `testDb`.* TO 'testUser'@'localhost'    ;

SELECT `User`, `Host` FROM `mysql`.`user`;
