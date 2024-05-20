
// close dang ky / dang nhap
function offreg() {
    const modalEl=document.querySelector(".modal");
    modalEl.style.display="none";
}
const btndn=document.getElementById("btndn");
btndn.addEventListener("click",
function(){
    const modalEl=document.querySelector(".modal");
    modalEl.style.display="block";
})
//close dang nhap/dang ky
function closelogin(){
    const loginEl=document.querySelector(".login");
    loginEl.style.display="none";
    const registEl=document.querySelector(".regist");
    registEl.style.display="block";
}
function closeregist(){
    const registEl=document.querySelector(".regist");
    registEl.style.display="none";
    const loginEl=document.querySelector(".login");
    loginEl.style.display="block";
}
// // check dang ky
// function inputUser() {
//     var arr = document.getElementsByTagName('input');
//     var reghoten = arr[4].value; //arr phu thuoc vao o input
//     var reguser = arr[5].value;
//     var regpass = arr[6].value;
//     var checkpass = arr[7].value;
//     var regsdt = arr[8].value;
//     if(reghoten == "" || reguser == "" || regpass == "" || checkpass == "" || regsdt == ""){
//         alert("điền vào ô còn trống");
//         return;
//     }
//     else if (document.getElementById("regpass").value.length < 8 ){
//         alert("mật khẩu phải có trên 8 kí tự");
//         return;
//     }
//     else if (document.getElementById("regpass").value != document.getElementById("checkpass").value){
//         alert("mật khẩu không trùng nhau");
//         return;
//     }
//     else if (isNaN(Number(document.getElementById("regsdt").value))){
//         alert("số điện thoại không hợp lệ");
//         return;
//     }
//     else if (Number(document.getElementById("regsdt").value) <1000000000 || Number(document.getElementById("regsdt").value)>9999999999){
//         alert("số điện thoại phải có 10 số");
//         return;
//     }
//     var choice = confirm("Đăng ký thành công");
//     if(choice == 1){
//         localStorage.setItem('input', JSON.stringify(arr));
//         closeregist();
//     }
// }
// var userArray = [];
// function createAD() {
//     if (localStorage.getItem('input') === null) {
//         localStorage.setItem('input', JSON.stringify(arr));
//     }
// }
// // check dang nhap
// function checkUser() {
//     var arr = document.getElementsByTagName('input');
//     var lguser = arr[1].value; //arr phu thuoc vao o input
//     var lgpassword = arr[2].value;
//     if(lguser == "" || lgpassword ==""){
//         alert("điền vào ô còn trống");
//         return;
//     }
//     if(lguser.value!=reguser.value){
//         alert("sai tên đăng nhập");
//         return;
//     }
//     else if(lgpassword.value!=checkpass.value){
//         alert("sai mật khẩu");
//         return;
//     }
// }

