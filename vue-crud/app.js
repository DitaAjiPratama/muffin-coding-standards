var app = new Vue({

  el : '#wadah',

  data : {

    UserList	: "",

    id				: 0,
    username	: "",
    name			: "",
    email			: ""

  },

  methods: {

    resetInsert: function() {
      app.username = '';
      app.name = '';
      app.email = '';
    },

    read: function() {
      axios.post( 'api.php', {request: "read"} )
        .then(function (response) {
          app.UserList = response.data;
        })
        .catch(function (error) {
          console.log(error);
        });
    },

    create: function() {
      if(this.username != '' && this.name != '' && this.email != ''){
        axios.post('api.php', {
          request: "create",
          username: this.username,
          name: this.name,
          email: this.email
        })
        .then(function (response) {
            app.read();
            app.resetInsert();
            // alert(response.data);
        })
        .catch(function (error) {
            console.log(error);
        });
      }
      else{
        alert('Fill all fields.');
      }
    },

    updateRecord: function(index,id) {
      var name = this.users[index].name;
      var email = this.users[index].email;
      if(name !='' && email !=''){
        axios.post('api.php', {
            request: "update",
            id: id,
            name: name,
            email: email
        })
        .then(function (response) {
          // alert(response.data);
        })
        .catch(function (error) {
            console.log(error);
        });
      }
    },

    deleteRecord: function(index,id) {
      axios.post('api.php', {
          request: "delete",
          id: id
      })
      .then(function (response) {
          app.UserList.splice(index, 1);
          // alert(response.data);
      })
      .catch(function (error) {
          console.log(error);
      });
    }
  },

  created: function() {
    this.read();
  }

})
