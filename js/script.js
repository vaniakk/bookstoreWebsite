//HEADER
let userBox = document.querySelector('.header .header-2 .user-box');

//Saat click simbol user akan muncul pop up data user dan tombol log out
document.querySelector('#user-btn').onclick = () =>{
      //Kalo user dibuka, navbar akan tertutup
   userBox.classList.toggle('active');
   navbar.classList.remove('active');
}

let navbar = document.querySelector('.header .header-2 .navbar');

//Saat click simbol menu (3 garis di header kanan atas) akan terbuka navbar
document.querySelector('#menu-btn').onclick = () =>{
   navbar.classList.toggle('active');
   userBox.classList.remove('active');
}

//Saat page di scroll maka pop up menu dan user akan tertutup
window.onscroll = () =>{
   userBox.classList.remove('active');
   navbar.classList.remove('active');

   if(window.scrollY > 60){
      document.querySelector('.header .header-2').classList.add('active');
   }else{
      document.querySelector('.header .header-2').classList.remove('active');
   }
}