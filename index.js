const express = require('express'); 
const app = express();
app.use(express.static('ratemyscholar'));
app.get('/', (req, res) => {
     res.sendFile('index.html', {root: __dirname + '/ratemyscholar/'});
});
app.listen(process.env.PORT || 5000);