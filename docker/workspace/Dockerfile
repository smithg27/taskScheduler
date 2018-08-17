FROM laradock/workspace:1.1

ENV CONTAINER_PROJECT_FOLDER /var/www

RUN apt-get update && \
    apt-get install wget && \
    apt-get install -y php-mysql && \
    apt-get install -y --force-yes php7.2

COPY ./.profile /root/.profile
RUN echo "" >> ~/.bashrc && \
    echo 'source ~/.profile' >> ~/.bashrc

#--------------------------------------------------------------------------
# Laradock User
#--------------------------------------------------------------------------
RUN groupadd -g 1000 laradock && \
    useradd -u 1000 -g laradock -m laradock

COPY ./composer.json /home/laradock/.composer/composer.json
COPY ./.profile /home/laradock/.profile
RUN echo "" >> /home/laradock/.bashrc && \
    echo 'source /home/laradock/.profile' >> /home/laradock/.bashrc

RUN chown -R laradock:laradock /home/laradock/.composer
RUN chown -R laradock:laradock /home/laradock/.profile
RUN chown -R laradock:laradock /home/laradock/.bashrc

#--------------------------------------------------------------------------
# Final Touch
#--------------------------------------------------------------------------

RUN apt-get clean

WORKDIR ${CONTAINER_PROJECT_FOLDER}
ENV PATH ${CONTAINER_PROJECT_FOLDER}/vendor/bin:$PATH