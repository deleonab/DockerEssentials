### Create an interactive terminal container with a name, an image, and a default command:

### Usage: Docker create -it --name=<name> <image> <command>
```
docker create -it --name=foo ubuntu bash
```

### List all running containers:

```
docker container ls
```
### (list all containers, running or not): docker container ls -a

### Start a docker container:

### Usage: docker start <container name/id>

```
 docker start foo
 ```

### Attach to a docker container:

Usage: docker attach <container name/id>

Example: docker attach foo

Remove a container:

Usage: docker rm <container name/id>

Example: docker rm foo

Force remove: docker rm foo -f

Run a new container:

Usage: docker run <image> <command>

Example with options: docker run --name=bar -it ubuntu bash

Remove all containers:

docker container ls -aq | xargs docker container rm

Execute a command in a running container:

Usage: docker exec <container name/id> <command>

Example (interactive, with tty): docker exec -it express bash

Docker Images

Remove a docker image:

Usage: docker image rmi <image id>

Example (only uses first 3 characters of image id): docker rmi 70b

Remove all images:

docker image ls -aq | xargs docker rmi -f

Search for a docker image on dockerhub:

Usage: docker search <image>

Example: docker search ubuntu

List docker images:

docker image ls

Build a Docker image:

Usage: docker build <path>

Example (also tags and names the build): docker build . -t org/serve:0.0.0

Dockerfiles

Specify a base image:

Usage: FROM <base image>

Example: FROM node:latest

Set a working directory for the container:

Usage: WORKDIR <dir>

Example: WORKDIR /usr/src/app

Run a command for the container image:

Usage: RUN command

Command: RUN npm install -g serve

Copy files into the container:

Usage: COPY <local files/directories> <container files/directories>

Example: COPY ./display ./display

Inform that a port should be exposed

Usage: EXPOSE <port>

Example: EXPOSE 80

Specify a default command for the container:

Usage (shell format): CMD <default command>

Example: CMD serve ./display

Usage (exec format, recommended): CMD [“default command”, “arguments”]

Example: CMD [“node”, “server.js”]