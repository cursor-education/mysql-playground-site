FROM centos:6
MAINTAINER itspoma <itspoma@gmail.com>

RUN yum clean all \
 && yum install -y git curl mc bc \
 && yum install -y gcc-c++ make \
 && yum install -y tar \
 && yum install -y epel-release

# php 5.4
RUN yum install -y php php-pdo php-mysql php-intl

# configure the php.ini
RUN echo "" >> /etc/php.ini \
 && sed 's/^display_errors.*/;display_errors = STDOUT/' -i /etc/php.ini

ADD ./environment/php/php.env-default.ini /etc/php.d/

# apache2
RUN yum install -y httpd \
 && rm -rfv /etc/httpd/conf.d/*.conf

# configure the httpd
RUN sed 's/#ServerName.*/ServerName site/' -i /etc/httpd/conf/httpd.conf \
 && sed 's/#EnableSendfile.*/EnableSendfile off/' -i /etc/httpd/conf/httpd.conf

# put vhost config for httpd
ADD ./environment/httpd/*.conf /etc/httpd/conf.d/

ENV MYSQL_USER root
ENV MYSQL_PASSWORD toortoor

# mysql
RUN yum install -y mysql mysql-server

# mysql configure
RUN sed 's/^user.*/user=root/' -i /etc/my.cnf \
 && sed 's/^datadir.*/datadir=\/shared\/environment\/mysql\/data/' -i /etc/my.cnf \
 && sed 's/^log-error.*/log-error=\/shared\/logs\/mysqld.log/' -i /etc/my.cnf

ADD ./environment/mysql /shared/environment/mysql
RUN mkdir -p /shared/logs

RUN rm -rf /shared/environment/mysql/data
RUN mysql_install_db
RUN service mysqld restart
RUN echo ${MYSQL_USER}
RUN echo ${MYSQL_PASSWORD}
RUN mysqladmin -u ${MYSQL_USER} password "${MYSQL_PASSWORD}"
RUN mysql -u ${MYSQL_USER} -p${MYSQL_PASSWORD} -e "SHOW DATABASES;"

WORKDIR /shared

CMD ["/bin/bash", "/shared/environment/init.sh"]