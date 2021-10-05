<?php
//this php file is used for all functions of the ABC website.
//a combination of the code in this file is attributed and inspired by weeks 7-10 of Web Programming classes from Shekhar and Matthew, aswell as online resources; php.net and w3schools. 
const USERS_STORE = 'database/users.json';
const USER_STATS_PATH = 'data/fitness_stats.json';
const USER_SESSION_KEY = 'user';
$logoutButton= '';
const CATEGORIES_PATH = 'data/categories.json';
const DATE_FORMAT = 'd/m/Y';
const MINUTES_MINIMUM = 1;
const MINUTES_MAXIMUM = 720;
const BMI_PATH = 'data/user_stats.json';
session_start();

function isUserLoggedIn(){
    return isset($_SESSION[USER_SESSION_KEY]);
    //function checks to see if user is logged in
}
function loginUser($form){
    //function used to login users
    $errors=[];
    $key = 'email';
        if(!isset($form[$key]) || filter_var($form[$key], FILTER_VALIDATE_EMAIL) === false)
            $errors[$key] = 'Email is invalid.';

            $key='password';
            if(!isset($form[$key]) || !preg_match('/^([A-Z])(?=.*[!^&])([a-zA-Z\d!^&]{3,})([0-9)])$/', $form[$key]))
            $errors[$key] = 'Password is required. Password must start with capital letter, contain atleast one of !/^/&, must be atleast 6 characters and must end with a number.';
            
            if(count($errors) === 0) {
                $user = getUser($form['email']);
                
                if($user !== null && $user['password'] === $form['password'])
                    $_SESSION[USER_SESSION_KEY] = $user;
                else
                    $errors[$key] = 'Login failed, email and / or password incorrect. Please try again.';
            }
    
            return $errors;
}
function getUser($email) {
    $users = readUsers();

    return isset($users[$email]) ? $users[$email] : null;
    // function used to get an identifier for the user. in this case, users are identified via their emails. 
}

function readUsers() {
    $json = file_get_contents(USERS_STORE);
    
    return json_decode($json, true);
    //function used to read thru user database json file 
}
function logoutUser() {
    session_unset();
 //function logouts users
}

function registerUser($form){
    //function used to register users 
    $errors=[];

        $key= 'firstname';
        if(!isset($form[$key]) || preg_match('/^\s*$/', $form[$key]) ===1)
        $errors[$key]=' Please enter your first name.';

        $key = 'lastname';
        if(!isset($form[$key]) || preg_match('/^\s*$/', $form[$key]) === 1)
            $errors[$key] = 'Please enter your last name.';

        $key = 'email';
        if(!isset($form[$key]) || filter_var($form[$key], FILTER_VALIDATE_EMAIL) === false)
            $errors[$key] = 'Please enter your email.';

        $key='password';
        if(!isset($form[$key]) || !preg_match('/^([A-Z])(?=.*[!^&])([a-zA-Z\d!^&]{3,})([0-9)])$/', $form[$key]))
        $errors[$key] = 'Password is required. Password must start with capital letter, contain atleast one of !/^/&, must be atleast 6 characters and must end with a number.';
        
        if(count($errors)===0){
            $user = [
                'firstname'=> trim($form['firstname']),
                'lastname' => trim($form['lastname']),
                'email' => trim($form['email']),
                'password' => $form['password'],
                'referral' => $form['referral']
               ];

               $users = readUsers();
               $users[$user['email']] = $user;
   
               // Updates json file with new user.
               $json = json_encode($users, JSON_PRETTY_PRINT);
               file_put_contents(USERS_STORE, $json, LOCK_EX);
        }
        return $errors;
}



function displayError($errors, $name) {
    //function used to display error throughout website where forms are present and used 
    if(isset($errors[$name]))
        echo "<div class='text-danger'>{$errors[$name]}</div>";
}
function displayValue($form, $name) {
    //function used to display values inputed by user in forms 
    if(isset($form[$name]))
        echo 'value="' . htmlspecialchars($form[$name]) . '"';
}

function displayLogoutButton(){
    //this function is used to display the logout button when users are logged in 
    if(isUserLoggedIn())
    echo "<div class=logout> logout </div>";
   
}


function readJsonFile($path) {
    //this function used to read json file info 
    $json = file_get_contents($path);

    return json_decode($json, true);
}


function getLoggedInUser() {
    //function used to retrieve the name of the user who is logged in 
    return isUserLoggedIn() ? $_SESSION[USER_SESSION_KEY] : null;
}


function updateJsonFile($data, $path) {
    //function updates json file 
    $json = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents($path, $json, LOCK_EX);
}
