# Let's create a base image
FROM node:latest
# This gives us access to npm which installs official node modules
RUN npm install --global serve
# THis installs serve
# Next we need to copy the contents of the serve/disply directory from host to container using the COPY command
COPY ./display ./display

# Next' we need to specify the command to execute i.e CMD. In this case, it will be to serve the display directory
CMD serve ./display

# The next step is to build the image We shall go back to the command line
