function kiemtra(e){
    e.preventDefault();
  var user = document.getElementById("txtUserName");
  var password = document.getElementById("txtPassword");
  if(user.value == ""){
      document.getElementById("erruser").innerHTML = "Tên khác rỗng";
      user.style.background = "red";
      
    }
  else if(user.value !="" && password.value != "admin" ){
      document.getElementById("errpass").innerHTML = "Mật khẩu là admin";
      password.style.background = "red";
      }
      
  }
  
  var form = document.getElementById('login');
  form.addEventListener('submit', kiemtra, false);