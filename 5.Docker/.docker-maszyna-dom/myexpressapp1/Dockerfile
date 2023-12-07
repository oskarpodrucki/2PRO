# Fetching the minified node image on apline linux
FROM node:21-alpine3.17

# Declaring env
ENV name=""
ENV surname=""

# Setting up the work directory
WORKDIR /expressapp

# Copying all the files in our project
COPY . .

RUN npm install -g npm@latest

# Installing dependencies
RUN npm ins tall

# Starting our application
CMD [ "node", "index.js" ]

# Exposing server port
EXPOSE 5000