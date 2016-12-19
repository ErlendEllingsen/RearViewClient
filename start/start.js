var exec = require('exec');
exec('forever start /home/pi/work/nodescript/RearViewController/app.js', function(err, out, code) {
    console.log(err);
    console.log(out);
});