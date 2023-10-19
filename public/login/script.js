(function () {
    emailjs.init("1CsknYmQM9wGJvkuu");
})();
$(".register-btn").click((e) => {
    e.preventDefault();
    $(".pop-register").fadeIn("fast");
    $(".pop-register").css("display", "flex");
});

$(".signup-btn").click((e) => {
    e.preventDefault();
    // if ($(".signup-name").val() && $(".signup-surname").val() && $(".signup-email").val() && $("#birthday").val() && $(".signup-pass").val()) {
    //     user_obj = {
    //         user_name: $(".signup-name").val(),
    //         user_sname: $(".signup-surname").val(),
    //         user_email: $(".signup-email").val(),
    //         user_birthday: $("#birthday").val(),
    //         user_pass: $(".signup-pass").val(),
    //     };
    //     console.log(user_obj);
    //     $(".pop-register").fadeOut("fast");
    // } else {
    //     alert("sikdir xanalari doldur")
    // }
});

var user_obj = {};
$(".cls-signup").click((e) => {
    $(".pop-register").fadeOut("fast");
});

// function sendEmail() {
//     var params = {
//       to_name: obj.name,
//       to: obj.to_mail,
//       message: obj.message,
//     };
//     var service_id = "service_kjtepqf";
//     var templateID = "template_8ivl2s9";
//     emailjs
//       .send(service_id, templateID, params)
//       .then((res) => {
//         console.log("email sent succesfuly");
//       })
//       .catch((err) => {
//         console.log(err);
//       });
// }
