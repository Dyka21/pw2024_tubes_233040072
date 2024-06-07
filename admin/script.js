const tombolCari = document.querySelector('.tombol-cari');
const keyword = document.querySelector('.keyword');
const containers = document.querySelector('.containers');

// event ketika menuliskan keyword
keyword.addEventListener('keyup', function(){
//   ajax
// xmlhttprequest
const xhr = new XMLHttpRequest(); 



xhr.onreadystatechange = function() {
    if(xhr.readyState == 4 && xhr.status == 200){
        containers.innerHTML = xhr.responseText;
    }
};

xhr.open('get', 'ajax.php?keyword='+ keyword.value);
xhr.send();


});