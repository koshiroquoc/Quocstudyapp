<div id="nhantin" class="clearfix">
    <div class="title-style-1">
        <p><?=$Setting["slogan_$lang"]?></p>
        <h2>Đặt lịch hẹn</h2>
    </div>
    <div class="contact-form-body">
        <form method="post" action="./lien-he/" enctype="multipart/form-data">
            <div class="form-row no-gutters">
                <div class="input-group mb-3 col-sm-6">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" name="name" class="form-control" placeholder="Họ và tên" required>
                </div>
                <div class="input-group mb-3 col-sm-6">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-phone-volume"></i></span>
                    </div>
                    <input type="text" name="phone" class="form-control" placeholder="Điện thoại" required pattern=".{10}" title="10 số" onkeypress="return isNumberKey(event)">
                </div>
                <div class="input-group mb-3 col-sm-6">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input type="email" name="email" class="form-control" placeholder="Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                </div>
                <div class="input-group mb-3 col-sm-6">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="text" name="title" class="form-control" placeholder="Thời gian" required>
                </div>
                <div class="input-group mb-3 col-12">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-paper-plane"></i></span>
                    </div>
                    <input type="text" name="content" class="form-control" placeholder="Lời nhắn" required>
                </div>
                <div class="col-6 mx-auto">
                    <button class="btn btn-color">ĐẶT LỊCH NGAY</button>
                </div>
            </div>
        </form>
    </div>
</div>