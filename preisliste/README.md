# Setting Up Docker and Laravel Sail on Ubuntu

This guide will walk you through the process of setting up Docker, Laravel Sail, and installing Composer dependencies on Ubuntu.

## 1. Install Docker

### Ubuntu 20.04 and newer

1. Update the `apt` package index:

    ```bash
    sudo apt update
    ```

2. Install the required packages to allow apt to use a repository over HTTPS:

    ```bash
    sudo apt install \
        apt-transport-https \
        ca-certificates \
        curl \
        gnupg-agent \
        software-properties-common
    ```

3. Add Docker's official GPG key:

    ```bash
    curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
    ```

4. Set up the stable Docker repository:

    ```bash
    sudo add-apt-repository \
       "deb [arch=amd64] https://download.docker.com/linux/ubuntu \
       $(lsb_release -cs) \
       stable"
    ```

5. Update the `apt` package index again:

    ```bash
    sudo apt update
    ```

6. Install Docker:

    ```bash
    sudo apt install docker-ce docker-ce-cli containerd.io
    ```

7. Verify that Docker is installed correctly by running the `hello-world` container:

    ```bash
    sudo docker run hello-world
    ```

### Other Ubuntu Versions

Please refer to the official Docker documentation for installation steps specific to your Ubuntu version: [Get Docker](https://docs.docker.com/get-docker/).

## 2. Install Laravel Sail

1. Clone your Laravel project repository:

    ```bash
    git clone <your-project-repository-url>
    cd <your-project-directory>
    ```

2. Run the Laravel Sail installation command:

    ```bash
    php artisan sail:install
    ```

3. This will create a `docker-compose.yml` file in your project directory.

## 3. Start Laravel Sail

1. Start Sail using the following command:

    ```bash
    ./vendor/bin/sail up
    ```

2. This command will start the Docker containers required for your Laravel application.

## 4. Install Composer Dependencies

1. While Sail is running, you can install Composer dependencies by running:

    ```bash
    ./vendor/bin/sail composer install
    ```

2. This will install all the dependencies listed in your `composer.json` file.

## Additional Notes

- If you encounter any issues during installation or setup, refer to the official documentation for Docker and Laravel Sail for troubleshooting steps.
- Make sure you have Docker Desktop installed if you are using Windows or macOS.

Happy coding!
