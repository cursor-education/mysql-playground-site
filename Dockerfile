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

WORKDIR /shared

CMD ["/bin/bash", "/shared/environment/init.sh"]