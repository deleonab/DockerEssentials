## Multi Container App with Docker Compose
---
Backend: NodeJS and Express 
It will serve an array of player name strings for different sports (Basketbal, Volleball,soccer) served by Node and Express API

Frontend: PHP _ Static website to render our API's as HTML
### Create node-php folder for project
```
docker/node-php
```
### Navigate to node-php folder
```
cd docker/node-php
```
### Create file docker-compose.yml

```
touch docker-compose.yml
```
### we create a folder players for the backend service
```
mkdir players
```
### And create the  following files in it
```
 touch players/package.json players/Dockerfile players/server.js
 ```

### In docker-compose.yml
```
version: "3"

services: 
   players:
     build: ./players
```
### In server.js

```
const express = require('express');
const app = express();
// Set host to default node host to accept all connections
const HOST = '0.0.0.0';
const PORT = 80;

// we shall now create an endpoint

app.get('/', (req, res) => {

 res.json({

   players: ['Victor','Dele','Oruenene','Mia','Bella','Abi'] 
 });
   

});

app.listen(PORT, HOST);
console.log(`Listening on http://${HOST}:${PORT}`);
```

### package.json
```
{
    "dependencies": {

"express" : "^4.16.1"
      }
}
```
### Dockerfile contents
```
FROM node
WORKDIR /node-php/players
COPY package.json package.json
RUN npm install 
COPY . .
EXPOSE 80
CMD ["node", "server.js"]
```
### I had a problem where changes to server.js did not render after running docker-compose

### Solution: I had to force recereation using: 
```
docker-compose up --build --force-recreate
```

### Browser output 
![browser output](./images-notes/browser-json.JPG)

### create site folder
### Inside this, create index.php and Dockerfile
### This will house the php front =end application

``` 
mkdir site
```
```
touch site/index.php site/Dockerfile
```

### site/index.php
```
<html>
<head>
    <title>Two container application</title>
</head>
<body>
    <h1>Team:</h1>
    <ul>
            <?php       
            
            $json = file_get_contents('http://players');
            $players = json_decode($json)->players;
            
            foreach($players as $player){
               echo "<li> $player </li>";

            }
            
            ?>
        
        
    </ul>  
</body>


</html>

```

### site/Dockerfile
```
FROM php
COPY index.php .
EXPOSE 80
CMD["PHP", "-S","0.0.0.0:80"];
```

### Next step is to update the Docker-compose.yml file
```
version: "3"

services: 
  players:
    build: ./players
    ports: 
      - 5004:80

    site:
     build: ./site
     ports:
     - 5006:80
     depends_on:
     - players

```

## LETS USE VOLUMES TO DYNAMICALLY UPDATE OUR CONTAINERS
---
-- First, we'll copy the node-php folder and contents to node-php-volume
```
cd docker
```
```
cp node-php node-php-volume
``