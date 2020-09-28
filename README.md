# Laravel, Vue, Vuetify and Webpack
<p float="left">
  <img width="220" src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg"/>
  <img width="80" src="https://vuejs.org/images/logo.png" /> 
  <img width="80" src="https://webpack.js.org/assets/icon-square-big.svg"/>
  <img width="200" src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png"/>
</p>

- Larvel/Mysql backend
- Vue front end
- Webpack build
- Google authentication
- Single page application

##What you need to know
You'll need to know how to
- Setup apache with php 7
- Setup a local Mysql instance
- Setup a google application account


You'll need to fill in your Mysql instance credentials as well as your google application information in the .env file
```
APP_URL=

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=xxxxxxxx
DB_USERNAME=xxxxxxxx
DB_PASSWORD=xxxxxxxx
...
GOOGLE_CLIENT_ID=xxxxxxxx
GOOGLE_CLIENT_SECRET=xxxxxxxx
GOOGLE_CALLBACK_URL=/auth/google/callback
```
APP_URL needs to be 127.0.0.1, or you could set the url name in your windows host file

From the root folder run
```
composer install;
php artisan migrate;
```
From resources/js run
```
npm install;
npm run watch;
```

Set you apache instance to point at the public folder

