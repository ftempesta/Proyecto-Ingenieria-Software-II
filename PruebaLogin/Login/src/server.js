var express = require('express'),
    path = require('path'),
    bodyParser = require('body-parser'),
    cons = require('consolidate'),
    dust = require('dustjs-helpers'),
    pg = require('pg'),
    app = express();

// db connect server
var connect = "postgres://eduonix:123456@localhost/recipebookdb";

// assign dust engine to .dust files
app.engine('dust', cons.dust);

// set defaut ext .dust
app.set('view engine', 'dust');
app.set('views', __dirname + '/views');

// set public folder
app.use(express.static(path.join(__dirname, 'public')));

// body parser middleware
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: false }));

app.get('/', function(req, res){
    console.log('test');
});

// server
app.listen(3000, function(){
    console.log('Server Started On Port 3000');
});