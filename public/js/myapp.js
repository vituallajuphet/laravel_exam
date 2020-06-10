$(document).ready(function () {



    $(".rgister-btn").click(function () {

        $("#register_modal").modal();

    })

    $(".login-btn").click(function () {

        $("#login_modal").modal();
    })

    $("#register_form").submit(function (e) {
        e.preventDefault();

        let is_c = $(".temrs:checked");

        if (is_c.length == 0) {
            alert("please check the terms and condition")
            return;
        }

        let frmdata = $(this).serialize();

        axios.post(`${base_url}/api/register/`, frmdata).then(res => {
            if (res.data.result) {

            }
        }).catch(err => {
            alert("There is an error!")
        })
    })

    $(".email_field").keyup(function (e) {

        let email = $(this).val();
        let frmdata = new FormData()
        frmdata.append("email", email)

        axios.post(`${base_url}/api/check_email/`, frmdata).then(res => {
            if (res.data.status) {
                alert("email address already used!")
                $(".email_field").val("")
            }
        })

    })

    $("#form_login").submit(function (e) {
        e.preventDefault();

        let frmdata = $(this).serialize();

        axios.post(`${base_url}/api/login_account/`, frmdata).then(res => {
            if (res.data.status) {
                let data = res.data.data;

                if (data.length == 0) {
                    alert("Incorrect username / password!")
                } else {
                    window.location.href = `${base_url}/home`
                }

            }
        }).catch(err => {
            alert("There is an error!")
        })
    })

})