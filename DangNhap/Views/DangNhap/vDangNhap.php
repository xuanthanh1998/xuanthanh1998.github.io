
    <div class="main">
    <main class="container">
      <div class="row">
        <div class="col-lg-4">
          <video autoplay muted loop src="Assets/IMG/Himn.mp4" style="width: 350px;margin-top: 90px;"></video>
        </div>
        <div class="col-lg-8" style="background-color: #280951; padding: 0px;">
        <div class="loginform">
        <form action="?module=<?=$module?>&act=xulilogin" autocomplete="off" class="login" method="post"> 
          <div>
            <span class="form-text-header">
              Đăng nhập
            </span>
            </div> 
            <div class="form-group first">
              <label for="username">Tài Khoản :</label>
              <input type="text" class="form-control" name="tk" >
            </div>
            <div class="form-group last mb-3">
              <label for="password">Mật khẩu :</label>
              <input type="password" class="form-control" name="mk" >
            </div>                       
            <div class=" mb-5 align-items-center">
              <span class="ml-auto">
                <a href="#" class="forgot-pass">
                  Quên mật khẩu ?
                </a>
              </span> 
            </div>  
            <div>
              <button type="submit"  name="dangnhap" class="btn__primary btn-text">Đăng nhập</button>
              <button  name="dangky" class="btn__primary btn-text">Đăng ký</button>
            </div>                                
        </form>              
        </div>
        </div>
      </div>
    </main>
    </div>