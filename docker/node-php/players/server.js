const express = require('express');
const app = express();
// Set host to default node host to accept all connections
const HOST = "0.0.0.0";
const PORT = "80";

// we shall now create an endpoint

app.get('/', (req,res)=>{

res.json({});
    players: ['Victor','Dele','Oruenene','Mia','Bella','Abi']

});

app.listen(PORT, HOST);
console.log(`Listening on port ${PORT}`);
