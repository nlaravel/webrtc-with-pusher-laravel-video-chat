## Project Setup

1. Clone the repository.<br/>
`git clone https://github.com/nlaravel/webrtc-with-pusher-laravel-video-chat.git`

2. Install dependencies<br/>
`composer install && npm install`

3. Create your env file from the example.<br/>
`cp env.example env.<br>
   use chat.sql file 

4. Add your db details, pusher API keys and  TURN SERVER credentials.<br/>
 turn server example :.<br/>
 TURN_SERVER_URL=stun:stun.l.google.com:19302.<br/>
 TURN_SERVER_USERNAME=user.<br/>
 TURN_SERVER_CREDENTIAL=password.<br/>
   

## Running the Application

1. `php artisan serve` to start the server and `npm run start` to start the frontend.



## Test Accounts for the Application
1. Login with these test accounts and test it <br/>
    email:            password <br/>
    admin@admin.com:  123456789<br/>
    a@a.com:  123456789<br/>
