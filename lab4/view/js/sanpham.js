document.getElementById("boxcart").style.display = "none";
document.getElementById("icon").addEventListener("click", function() {
    document.getElementById("boxcart").style.display = "block";
});
document.getElementById("close").addEventListener("click", function() {
    document.getElementById("boxcart").style.display = "none";
});
document.getElementById("boxsanpham").addEventListener("click", function() {
    document.getElementById("boxcart").style.display = "none";
});
var mycart = new Array();
var addcart = document.getElementsByClassName("addcart");
for (let i = 0; i < addcart.length; i++) {
    addcart[i].addEventListener("click", addtocart);

    function addtocart() {
        var sp = addcart[i].parentNode;
        var tensp = sp.childNodes[5].firstChild.nodeValue;
        var giasp = sp.childNodes[7].childNodes[1].firstChild.nodeValue;
        var soluong = 1;
        for (let i = 0; i < mycart.length; i++) {
            if (mycart[i][0] == tensp) {
                soluong = mycart[i][2] + 1;
                mycart[i][2] = soluong;
                break;
            }
        }
        if (soluong == 1) {
            var itiem = new Array(tensp, giasp, soluong);
            mycart.push(itiem);
        }
        showcart();
        tongtiencart();
    }
}

function showcart() {
    var kq = "";
    for (let i = 0; i < mycart.length; i++) {
        kq += "<tr><td>" + mycart[i][0] + "</td>" +
            "<td>" + mycart[i][1] + " Vnđ</td>" +
            "<td>" + mycart[i][2] + "</td>" +
            "<td><button class='deletecart' onclick='deletecart(this)'>x</button></td></tr>";
    }
    document.getElementById("mycart").innerHTML = kq;
    document.getElementById("countsp").innerHTML = mycart.length;
}

function deletecart(obj) {
    var carttable = document.getElementById("mycart"),
        rowIndex = obj.parentNode.parentNode.rowIndex;
    carttable.deleteRow(rowIndex);
    mycart.splice(rowIndex, 1);
    tongtiencart();
    countsp();
}

function tongtiencart() {
    var tongtien = 0;
    for (let i = 0; i < mycart.length; i++) {
        tongtien += parseFloat(mycart[i][1]) * parseInt(mycart[i][2]);
    }
    document.getElementById("total").innerHTML = tongtien;
}

function countsp() {
    var sl = "";
    for (let i = 0; i < mycart.length; i++) {
        sl += mycart[i][2];
    }
    document.getElementById("countsp").innerHTML = sl;
}

function sub() {
    var sub = ["Cảm ơn bạn đã theo dõi chúng tôi !"]
    alert(sub);
}