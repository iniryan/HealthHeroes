class User {
    constructor(id, email, username, fullname, password, role, dateCreated) {
        this.id = id;
        this.email = email;
        this.username = username;
        this.fullname = fullname;
        this.password = password;
        this.role = role;
        this.dateCreated = dateCreated;
    }
    
    signup() {
        console.log(this.email, 'just signed up');
        try {
            window.location.href = '../../page/login.html';
            localStorage.setItem('user', JSON.stringify(this));
        } catch (error) {
            console.log(error);
        }
    }
    
    login() {
        console.log(this.email, 'just logged in');
        try {
            window.location.href = '../../page/home.html';
            localStorage.setItem('user', JSON.stringify(this));
        } catch (error) {
            console.log(error);
        }
    }

    logout() {
        console.log(this.email, 'just logged out');
    }

    forgotPassword() {
        console.log(this.email, 'forgot password');
    }
}

/* *******************************TESTING******************************** */

//testing signup
const signup = document.getElementById('signup-form');

//check null or not
if (signup) {
    signup.addEventListener('submit', formValidation);
}

//validate email or using html attribute type="email"
// const validateEmail = (email) => {
//     const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
//     return re.test(String(email).toLowerCase());
// }

//validate password
const validatePassword = (password) => {
    const re = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;
    return re.test(password);
}

//match password checking
const matchPassword = (password, confirmPassword) => {
    if (password === confirmPassword) {
        return true;
    } else {
        return false;
    }
}

//form validation
function formValidation(e) {
    e.preventDefault();
    
    //count id 
    const uid = (() => (id = 1, () => id++))();
    
    //get form values
    const email = document.getElementById('email').value;
    // if (!validateEmail(email)) {
        //     console.log('Please enter a valid email');
        //     return;
        // }

    const username = document.getElementById('username').value;
    const fullname = document.getElementById('fullname').value;

    const password = document.getElementById('password').value;
    if (!validatePassword(password)) {
        alert('Password must be at least 8 characters long, contain at least one uppercase letter, one lowercase letter and one number');
        return;
    }

    const confirmPassword = document.getElementById('confirm-password').value;
    if (!matchPassword(password, confirmPassword)) {
        alert('Passwords do not match');
        return;
    }

    const role = 'User';
    const dateCreated = new Date();

    //create user
    const user = new User(uid(), email, username, fullname, password, role, dateCreated);
    user.signup();
}

//testing login
const login = document.getElementById('login-form');

//check null or not
if (login) {
    login.addEventListener('submit', loginValidation);
}

//login validation
function loginValidation(e) {
    e.preventDefault();
    let user = JSON.parse(localStorage.getItem('user'));
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    if (email === user.email && password === user.password) {
        user = new User(user.id, user.email, user.username, user.fullname, user.password, user.role, user.dateCreated);
        user.login();
    } else {
        alert('Please sign up first');
        window.location.href = '../../index.html';
    }
}

//testing logout
function logout() {
    let user = JSON.parse(localStorage.getItem('user'));
    user = new User(user.id, user.email, user.username, user.fullname, user.password, user.role, user.dateCreated);
    user.logout();
    localStorage.clear();
    window.location.href = '../../pages/login.html';
}
