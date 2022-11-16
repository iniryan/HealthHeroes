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