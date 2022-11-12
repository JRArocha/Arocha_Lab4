$(document).ready(function () {

    // CREATE BUTTON
    $(document).on('click', '#btnSignUp', function(){
        var frmData = $('#createAccount');
        var formData = new FormData($(frmData)[0]);

        axios.post('regAccount', formData)
        .then(function(response){
            var status=response.data.status;
            var msg=response.data.msg;
            var resultData = response.data.data;

            if(status=='200'){
                alert(msg);
                window.location.href = "/login";
            }else{
                alert(msg);

            }

        })
        .catch(function(error){})
        .then(function(){});
    });

    // LOGIN
    $(document).on('click', '#login', function(){
        var uname = $('#logusername').val();
        var upass = $('#logpassword').val();
        axios.get('/fetch_login', {
            params:{
                uname:uname,
                upass:upass
            }
        })
        .then(function(response){

            if(response.data.status==201){
                alert(response.data.msg);
            }else{
                window.location.href = "/GrabPanda";
            }

        })
        .catch(function(error){})
        .then(function(){});
    })
});
