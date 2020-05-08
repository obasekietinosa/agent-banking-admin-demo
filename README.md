[![Gitpod Ready-to-Code](https://img.shields.io/badge/Gitpod-Ready--to--Code-blue?logo=gitpod)](https://gitpod.io/#https://github.com/obasekietinosa/agent-banking-admin-demo) 


# agent-banking-admin-demo
Admin interface and API service for Agent Banking Demo.

Click the Gitpod badge above and sign in with your GitHub account to deploy a ready-to-code environment with Gitpod.

Alternatively,
Create a database on MySQL running locally on port 3306 name "agent_banking"
Clone the repo and run the following command 
`cp .env.example .env && composer install && php artisan key:generate && php artisan migrate --seed && php artisan serve`

Open localhost:8000 on your browser and navigate to /admin
Credentials are: 
Username: etinosaobaseki@gmail.com
Password: secret