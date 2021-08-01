<div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="LoginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="LoginModalLabel" style="font-family: 'Prompt', sans-serif;">เข้าสู่ระบบ</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="assests/img/Emblem_Inazuma.png" class="img-shadow img-center" width="40%">
        <form action="user.php">
          <div class="mb-3">
            <label for="InputUser" class="form-label" style="font-family: 'Prompt', sans-serif;">ชื่อผู้ใช้</label>
            <input type="text" class="form-control" id="InputUser" placeholder="ชื่อผู้ใช้" style="font-family: 'Prompt', sans-serif;">
          </div>
          <div class="mb-3">
            <label for="InputPassword" class="form-label" style="font-family: 'Prompt', sans-serif;">รหัสผ่าน</label>
            <input type="password" class="form-control" id="InputPassword" placeholder="รหัสผ่าน" style="font-family: 'Prompt', sans-serif;">
          </div>
          <a href="" style="font-family: 'Prompt', sans-serif;">ลืมรหัสผ่าน?</a>
          <div class="d-grid gap-2">
            <button class="btn btn-primary g1" type="submit" style="font-family: 'Prompt', sans-serif;">เข้าสู่ระบบ</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>