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

    login() {
        console.log(this.email, 'just logged in');
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
const admin = new Administrator(1, 'test@gmail.com', 'johnDoe', 'John Doe', '1234567', 'admin', '2022-11-09');
admin.signup();
admin.login();
admin.getUser();
admin.findUser(1);
admin.editUser(1);
admin.changeRoleUser(1);
admin.blockUser(1);
admin.deleteUser(1);
admin.forgotPassword();
admin.changePassword();
admin.logout();

