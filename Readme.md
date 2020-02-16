# codeigniter-sandbox
Here is repository for a CodeIgniter 3 sandbox application, running in a Dockerized LAMP host. It's good if you want to quickly get up and running experimenting with the CodeIgniter PHP framework on a local development machine where you might not have Apache or MySQL running.

## Getting Started
1. Clone this repository to a local development machine.
1. Install [Docker](https://www.docker.com/) on your local machine.
1. Install Composer
1. Assuming you are able to run the dockerized Apache on port 80 and MySQL on port 3306 on your local machine, proceed to build and run the Docker container using the following command: docker-compose up
1. Verify the docker containers are running with: docker ps
1. From the root directory of this repositority, run the following commands:
1. composer install
1. composer update
1. composer deploy-application

## Application Sandbox
1. Point your browser at http://localhost. If the above commands were successful, you should see a login page.
1. Go ahead and login. No real security is yet implemented in this sandbox, so you should be able to log in regardless of the credentials you provide.
