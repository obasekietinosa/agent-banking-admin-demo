FROM gitpod/workspace-mysql

USER gitpod

RUN chmod +x .gitpod-init.sh

#TODO: Initialize MySQL DB Here. Currently have to manually create DB. Alternatively, init in gitpod.yml?
