FROM ubuntu:20.04

ENV DEBIAN_FRONTEND=noninteractive
ENV TZ=Asia/Kolkata

RUN apt update && apt install -y mysql-server

COPY wordpress.sql wordpress.sql

RUN service mysql start && cat wordpress.sql | mysql --defaults-extra-file=/etc/mysql/debian.cnf

RUN sed -i "s/bind-address\t\t= 127.0.0.1/bind-address\t\t= 0.0.0.0/" /etc/mysql/mysql.conf.d/mysqld.cnf

CMD ["mysqld"]