CREATE DATABASE wordpress;

CREATE USER 'wordpress'@'%'
IDENTIFIED BY 'yourpasswordhere';

GRANT SELECT, INSERT, UPDATE, DELETE, CREATE, DROP, ALTER
ON wordpress.*
TO 'wordpress'@'%';

FLUSH PRIVILEGES;