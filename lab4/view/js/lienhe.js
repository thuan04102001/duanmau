function lienhe() {
    var checkdate = ["Không được bỏ trống - Vui lòng điền đầy đủ thông tin !!!"];
    var ten = document.getElementById('ten').value;
    var email = document.getElementById('email').value;
    var subject = document.getElementById('subject').value;
    var message = document.getElementById('message').value;

    if (ten == "" || email == "" || subject == "" || message == "") {
        alert(checkdate);
        // document.getElementById('error').innerHTML = checkdate;
    } else {


        kq = "Tên: " + ten + "<br>";
        kq += "Email: " + email + "<br>";
        kq += "Subject: " + subject + "<br>";
        kq += "Message: " + message + "<br>";
        kq += "<b>Thanks for your interest. We will respond to your case shortly</b>";
        // document.getElementById('kq').innerHTML = kq;
        var mess = ["Cảm ơn đã liên hệ.Chúng tôi sẽ sớm phản hồi tin nhắn của bạn !!!"]
        alert(mess);
    }

}