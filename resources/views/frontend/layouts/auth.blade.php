@if(!Auth::user())
    <li><a href="#" id="login" data-id="popupLogin" class="popupLogin" data-animation="scale"
           onclick="showLoginModal()">
            <h6>
                Đăng nhập</h6></a></li>
    <li><a href="#" id="signUp" onclick="showRegisterModal()" class="popupSignUp"><h6
                class="sign-up"> Tạo tài khoản </h6></a>
    </li>
@else
    <li class="profile-user col-lg-6 h-100">
        <div class="dropdown m-1">
            <a href="" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-user"></span><big> {{ Auth::user()->name }}</big></a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Thông tin tài khoản</a>
                <a class="dropdown-item" href="{{ route('frontend.logout') }}">Đăng xuất</a>
            </div>
        </div>
    </li>
@endif
