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

    login(email, password) {
        // this.email = 'test@gmail.com';
        // this.password = '1234567890';
        // if (this.email == email && this.password == password) {
        //     window.location.href = '../../page/home.html';
        //     console.log(this.email, 'just logged in');
            
        // }else{
        //     console.log('Wrong email or password');

        // }
    }

    signup() {
        console.log(this.email, 'just signed up');
    }

    logout() {
        console.log(this.email, 'just logged out');
    }

    forgotPassword() {
        console.log(this.email, 'forgot password');
    }
}

class Administrator extends User {
    constructor(id, email, username, fullname, password, role, dateCreated) {
        super(id, email, username, fullname, password, role, dateCreated);
    }

    deleteUser(id) {
        console.log('User was deleted');
    }

    blockUser(id) {
        console.log('User was blocked');
    }   

    editUser(id) {
        console.log('User was edited');
    }
    
    findUser(id) {
        console.log('User was found');
    }
    
    changeRoleUser(id) {
        console.log('User role was changed');
    }

    changePassword() {
        console.log('Admin Password was changed');
    }

    getUser() {
        console.log('User data was fetched');
    }  

    //can access volunteer.js, news.js, datapendonor.js, pencaridonor.js, rs.js to manage the data 

}

//testing
let signForm = document.getElementById('sign-form');

signForm.addEventListener('submit', (e) => {
    e.preventDefault();
    let fullname = document.getElementById('fullname').value;
    let username = document.getElementById('username').value;
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;
    let password2 = document.getElementById('password2').value;
    let role = "User";
    let date = new Date();
    let signup = new User(1, email, fullname, username, password, role, date);
    console.log(signup);
});

// let loginForm = document.getElementById('login-form');

// loginForm.addEventListener('submit', function(e) {
//     e.preventDefault();
//     let email = document.getElementById('email').value;
//     let password = document.getElementById('password').value;
//     let user = new User(1, email, 'UsernameTest', 'FullnameTest', password, 'User', '2022-11-16');
//     console.log(user);
//     // user.login(email, password);
// });



