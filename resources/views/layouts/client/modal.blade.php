<!-- Modal -->
<div class="ms_register_popup">
    <div id="myModal" class="modal  centered-modal" role="dialog">
        <div class="modal-dialog register_dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">
                    <i class="fa_icon form_close"></i>
                </button>
                <div class="modal-body">
                    <div class="ms_register_img">
                        <img src="client/images/register_img.png" alt="" class="img-fluid"/>
                    </div>
                    <div class="ms_register_form">
                        <h2>Đăng kí / Đăng nhập</h2>
                        <div class="form-group">
                            <input type="text" placeholder="Enter Your Name" class="form-control">
                            <span class="form_icon">
							<i class="fa_icon form-user" aria-hidden="true"></i>
							</span>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Enter Your Email" class="form-control">
                            <span class="form_icon">
							<i class="fa_icon form-envelope" aria-hidden="true"></i>
						</span>
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Enter Password" class="form-control">
                            <span class="form_icon">
						<i class="fa_icon form-lock" aria-hidden="true"></i>
						</span>
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Confirm Password" class="form-control">
                            <span class="form_icon">
						<i class=" fa_icon form-lock" aria-hidden="true"></i>
						</span>
                        </div>
                        <a href="#" class="ms_btn">register now</a>
                        <p>Bạn đã có tài khoản? <a href="#myModal1" data-toggle="modal"
                                                   class="ms_modal hideCurrentModel">đăng nhâp ở đây</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---Login Popup Start---->
    <div id="myModal1" class="modal  centered-modal" role="dialog">
        <div class="modal-dialog login_dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">
                    <i class="fa_icon form_close"></i>
                </button>
                <div class="modal-body">
                    <div class="ms_register_img">
                        <img src="client/images/register_img.png" alt="" class="img-fluid"/>
                    </div>
                    <div class="ms_register_form">
                        <h2>Đăng nhập / Đăng kí</h2>
                        <div class="form-group">
                            <input type="text" placeholder="Enter Your Email" class="form-control">
                            <span class="form_icon">
							<i class="fa_icon form-envelope" aria-hidden="true"></i>
						</span>
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Enter Password" class="form-control">
                            <span class="form_icon">
						<i class="fa_icon form-lock" aria-hidden="true"></i>
						</span>
                        </div>
                        <div class="remember_checkbox">
                            <label>Giữ đăng nhập
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <a href="profile.html" class="ms_btn" target="_blank">login now</a>
                        <div class="popup_forgot">
                            <a href="#">Quên mật khẩu ?</a>
                        </div>
                        <p>Bạn chưa có tài khoản? <a href="#myModal" data-toggle="modal"
                                                     class="ms_modal1 hideCurrentModel">đăng kí ở đây</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!---Queue Save Modal---->
<div class="ms_save_modal">
    <div id="save_modal" class="modal  centered-modal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">
                    <i class="fa_icon form_close"></i>
                </button>
                <div class="modal-body">
                    <h1>Đăng nhập và bắt đầu chia sẻ âm nhạc!</h1>
                    <div class="save_modal_btn">
                        <a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i> đăng nhập với Google
                        </a>
                        <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i> đăng nhập với Facebook</a>
                    </div>
                    <div class="ms_save_email">
                        <h3>hoặc sử dụng email của bạn</h3>
                        <div class="save_input_group">
                            <input type="text" placeholder="Enter Your Name" class="form-control">
                        </div>
                        <div class="save_input_group">
                            <input type="password" placeholder="Enter Password" class="form-control">
                        </div>
                        <button class="save_btn">Đăng nhập</button>
                    </div>
                    <div class="ms_dnt_have">
                        <span>Bạn chưa có tài khoảng ?</span>
                        <a href="javascript:;" class="hideCurrentModel" data-toggle="modal" data-target="#myModal">Đăng
                            kí ngay</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
