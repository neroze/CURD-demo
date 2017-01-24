var J = require('../jumper/lib.js');
J.Vue.component('date-picker', require('../../components/date_picker.vue'));
var User = {};

User.init = function() {
    this.get_users();
}

User.get_users = function() {
    this.$http.get('/icusers').then((resp) => {
        if (resp.data) {

        }

    }, (error) => {
        J.log("eoorr" + error);
    });
}

User.save_user = function() {
    this.$http.post('/icusers', this.user).then((resp) => {
    	J.log(resp);
    }, (error) => {
        J.log("eoorr" + error);
    });
}


User.validateBeforeSubmit = function(e) {
    this.$validator.validateAll();
    if (!this.errors.any()) {
      this.save_user()
    }
}
User.submitForm = function() {
    this.formSubmitted = true
}

User.dob_changed = function(date){
	this.user.dob = date;
}

new J.Vue({
    el: '#app',
    data: {
        recently_added_users: [],
        user: {
            name: null,
            gender: null,
            email: null,
            phone: null,
            address: null,
            nationality: null,
            dob: null,
            education_background: null,
            mode_of_contact: null,
        },
        formSubmitted: false
    },
    mounted: function() {
        this.init();
    },
    methods: User
});