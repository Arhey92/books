FROM mysql:8.0
LABEL maintainer="arhey92@gmail.com"

ENV TZ=UTC \
  MYSQL_DATABASE=books \
  MYSQL_USER=book_user \
  MYSQL_PASSWORD=book_pass \
  MYSQL_ROOT_PASSWORD=book_pass

COPY my.cnf /etc/my.cnf
