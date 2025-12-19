@extends('template.default')

@section('title', 'Workshop FROM')
@section('header', 'Workshop #HTML - FROM')
@section('content')
    <form method="post" action="">
        <div class="row mt-3">
            <div class="col-sm-12 col-md-4">
                <label for="fname">ชื่อ</label>
            </div>
            <div class="col">
                <input id="fname" name="first_name" class="form-control" required>
                <div class="invalid-feedback">โปรดระบุชื่อ</div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-12 col-md-4">
                <label for="lname">สกุล</label>
            </div>
            <div class="col">
                <input id="lname" name="last_name" type="text" class="form-control">
            </div>
        </div>
        <div class="row mt-3 align-items-center">
            <div class="col-sm-12 col-md-4">
                <label for="dob" class="form-label">วัน/เดือน/ปีเกิด <small
                        class="text-muted">(dd/mm/yyyy)</small></label>
            </div>
            <div class="col">
                <input id="dob" name="date_of_birth" type="date" class="form-control"
                    onchange="autoCalcAge(this.value)">
            </div>
        </div>
        <div class="row mt-3 align-items-center">
            <div class="col-sm-12 col-md-4">
                <label for="age" class="form-label">อายุ</label>
            </div>
            <div class="col">
                <input id="age" name="age" type="number" class="form-control" value="0" min="0"
                    max="999" oninput="if(value>999)value=999;if(value<0)value=0">
            </div>
        </div>
        <script>
            function autoCalcAge(birthDate) {
                if (!birthDate) return;
                const today = new Date();
                const birth = new Date(birthDate);

                let age = today.getFullYear() - birth.getFullYear();
                const m = today.getMonth() - birth.getMonth();

                // ตรวจสอบว่าครบรอบวันเกิดในปีนี้หรือยัง ถ้ายังไม่ถึงให้ลบอายุออก 1 ปี
                if (m < 0 || (m === 0 && today.getDate() < birth.getDate())) {
                    age--;
                }

                // แสดงผลในช่องอายุ (ถ้าคำนวณแล้วติดลบให้แสดงเป็น 0)
                document.getElementById('age').value = age < 0 ? 0 : age;
            }
        </script>
        <div class="row mt-3 align-items-center">
            <div class="col-sm-12 col-md-4 form-label-col">
                <label class="form-label">เพศ</label>
            </div>
            <div class="col">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="genderMale" value="male">
                    <label class="form-check-label" for="genderMale">ชาย</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="genderFemale" value="female">
                    <label class="form-check-label" for="genderFemale">หญิง</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="genderOther" value="other">
                    <label class="form-check-label" for="genderOther">อื่นๆ / ไม่ต้องการระบุ</label>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-12 col-md-4">
                <label for="p" class="form-label">รูปถ่าย</label>
            </div>
            <div class="col">
                <input class="form-control" type="file" id="p" name="profile_picture" accept="image/*">
                <div class="form-text text-muted">รองรับไฟล์ JPG หรือ PNG เท่านั้น</div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-12 col-md-4">
                <label for="address" class="form-label">ที่อยู่</label>
            </div>
            <div class="col">
                <textarea class="form-control" id="address" name="address" rows="4"></textarea>
            </div>
        </div>

        <div class="row mt-3 align-items-center">
            <div class="col-sm-12 col-md-4">
                <label for="favColor" class="form-label">สีที่ชอบ</label>
            </div>
            <div class="col">
                <select class="form-select" id="favColor" name="favorite_color">
                    <option value="" disabled selected>--- กรุณาเลือกสีที่ท่านชอบ ---</option>
                    <option value="red">สีแดง (Red)</option>
                    <option value="blue">สีน้ำเงิน (Blue)</option>
                    <option value="green">สีเขียว (Green)</option>
                    <option value="yellow">สีเหลือง (Yellow)</option>
                    <option value="orange">สีส้ม (Orange)</option>
                    <option value="purple">สีม่วง (Purple)</option>
                    <option value="pink">สีชมพู (Pink)</option>
                    <option value="black">สีดำ (Black)</option>
                    <option value="white">สีขาว (White)</option>
                    <option value="gray">สีเทา (Gray)</option>
                </select>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-4">
                <label class="form-label">แนวเพลงที่สนใจ</label>
            </div>
            <div class="col">
                <div class="d-flex flex-wrap gap-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="music[]" id="m1" value="pop">
                        <label class="form-check-label" for="m1">ป๊อป</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="music[]" id="m2" value="rock">
                        <label class="form-check-label" for="m2">ร็อก</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="music[]" id="m3" value="jazz">
                        <label class="form-check-label" for="m3">แจ๊ส</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="music[]" id="m4" value="hiphop">
                        <label class="form-check-label" for="m4">ฮิปฮอป</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="music[]" id="m5" value="country">
                        <label class="form-check-label" for="m5">ลูกทุ่ง</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="music[]" id="m6" value="for_life">
                        <label class="form-check-label" for="m6">เพื่อชีวิต</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="music[]" id="m7"
                            value="classical">
                        <label class="form-check-label" for="m7">คลาสสิก</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="music[]" id="m8" value="other">
                        <label class="form-check-label" for="m8">อื่นๆ</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm-12 col-md-4">
            </div>
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="consent" name="data_consent">
                    <label class="form-check-label" for="consent">
                        ยินยอมให้เก็บข้อมูล
                    </label>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <button class="btn btn-ligth" type="reset">Reset</button>
            </div>
            <div class="col">
                <button class="btn btn-success" onclick="clickMe()" type="button">Submit</button>
            </div>
        </div>
    </form>
@endsection

@push('scripts')
    <script>
        let clickMe = function() {
            let isPass = true;

            // ฟังก์ชันช่วยเช็ค Input ทั่วไป
            function checkValid(id, condition) {
                let el = document.getElementById(id);
                if (condition) {
                    el.classList.remove('is-invalid');
                    el.classList.add('is-valid');
                } else {
                    el.classList.remove('is-valid');
                    el.classList.add('is-invalid');
                    isPass = false;
                }
            }

            // --- เริ่มเช็คช่องทั่วไป ---
            checkValid('fname', document.getElementById('fname').value.trim() !== "");
            checkValid('lname', document.getElementById('lname').value.trim() !== "");
            checkValid('dob', document.getElementById('dob').value !== "");
            checkValid('age', document.getElementById('age').value !== "" && document.getElementById('age').value !==
                "0");
            checkValid('p', document.getElementById('p').value !== "");
            checkValid('address', document.getElementById('address').value.trim() !== "");
            checkValid('favColor', document.getElementById('favColor').value !== "");
            checkValid('consent', document.getElementById('consent').checked);

            // --- เช็คเพศ (Radio) ---
            let genders = document.querySelectorAll('input[name="gender"]');
            let genderChecked = document.querySelector('input[name="gender"]:checked');
            genders.forEach(radio => {
                if (!genderChecked) {
                    radio.classList.add('is-invalid'); // ถ้าไม่เลือกเลย ให้แดงทุกปุ่ม
                    isPass = false;
                } else {
                    radio.classList.remove('is-invalid');
                    radio.classList.add('is-valid');
                }
            });

            // --- เช็คแนวเพลง (Checkbox) ---
            let musics = document.querySelectorAll('input[name="music[]"]');
            let musicChecked = document.querySelectorAll('input[name="music[]"]:checked');
            musics.forEach(cb => {
                if (musicChecked.length === 0) {
                    cb.classList.add('is-invalid'); // ถ้าไม่เลือกเลย ให้แดงทุกวงกลม
                    isPass = false;
                } else {
                    cb.classList.remove('is-invalid');
                    cb.classList.add('is-valid');
                }
            });

            // --- การส่งข้อมูล ---
            if (isPass) {
                console.log("ผ่านการตรวจสอบ! (กรอกครบทุกช่องแล้ว)");
                // document.querySelector('form').submit(); // <--- ใส่ // เพื่อปิดไม่ให้ส่งข้อมูลไปที่ Server
            }
        }
    </script>
@endpush
