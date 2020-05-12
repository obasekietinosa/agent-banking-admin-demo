FROM gitpod/workspace-mysql

USER gitpod

COPY .gitpod-init.sh /usr/bin/gitpod-init

RUN sudo chmod a+x /usr/bin/gitpod-init

RUN sudo chmod 7777 /usr/bin/gitpod-init

#TODO: Initialize MySQL DB Here. Currently have to manually create DB. Alternatively, init in gitpod.yml?
