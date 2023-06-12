var myNav = document.getElementById('mynav');
var psProduct = document.getElementById('poster-product');

window.onscroll = function () { 
    
    if (document.body.scrollTop >= 100 || document.documentElement.scrollTop >= 100 ) {
        myNav.classList.add("navbar-colored");
        myNav.classList.remove("navbar-transparent");
        document.getElementById('nav-brand').src='assets/img/logo-color.png';
    } 
    else {
        myNav.classList.add("navbar-transparent");
        myNav.classList.remove("navbar-colored");
        document.getElementById('nav-brand').src='assets/img/logo-white.png';
    } 

    // Product
    if (document.body.scrollTop <= 200 || document.documentElement.scrollTop <= 200 ) {
        psProduct.classList.remove("back-element");
    } 
    if (document.body.scrollTop >= 201 || document.documentElement.scrollTop >= 201 ) {
        psProduct.classList.add("back-element");
    } 
    

};

const tombolCari = document.querySelector('.tombol-cari');
const keyword = document.querySelector('.keyword');
const container = document.querySelector('.admin-container');


// hilangakan tombol cari
tombolCari.style.display = "none";

keyword.addEventListener('keyup', function() {

    fetch('../ajax/ajax_cari.php?keyword='+keyword.value)
    .then((response) => response.text())
    .then((response) => (container.innerHTML = response));
    
  });


function previewImage(){
    const gambar = document.querySelector('.gambar');
    const imgPreview = document.querySelector('.img-preview');

    const oFReader = new FileReader();
    oFReader.readAsDataURL(gambar.files[0]);

    oFReader.onload = function(oFREvent){
      imgPreview.src=oFREvent.target.result;
    };
  }



