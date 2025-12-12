<!Doctype html>

<html>
    <head>
        <title>ส่วนหัวของ HTML</title>
        <link rel="stylesheet" href="css/bootstrap.css"> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: "Sarabun", sans-serif;
            }
            .form-label-col {
                align-self: center; /* จัดให้ label อยู่ตรงกลางแนวตั้ง */
            }
        </style>
    </head>
    <body>
        <div class="container mt-4">
            <h1 class="text-start">Workshop #HTML - FORM</h1>
            <form action="#" method="POST">
                
                <div class="row mt-3 align-items-center">
                    <div class="col-sm-12 col-md-4 form-label-col">
                       <label for="fname" class="form-label">ชื่อ</label>
                    </div>
                    <div class="col">
                        <input id="fname" name="first_name" type="text" class="form-control">
                    </div>
                </div>
                
                <div class="row mt-3 align-items-center">
                    <div class="col-sm-12 col-md-4 form-label-col">
                       <label for="lname" class="form-label">สกุล</label>
                    </div>
                    <div class="col">
                        <input id="lname" name="last_name" type="text" class="form-control">
                    </div>
                </div>

                <div class="row mt-3 align-items-center">
                    <div class="col-sm-12 col-md-4 form-label-col">
                       <label for="dob" class="form-label">วัน/เดือน/ปีเกิด <small class="text-muted">(dd/mm/yyyy)</small></label>
                    </div>
                    <div class="col">
                        <input id="dob" name="date_of_birth" type="date" class="form-control">
                    </div>
                </div>

                <div class="row mt-3 align-items-center">
                    <div class="col-sm-12 col-md-4 form-label-col">
                    <label for="age" class="form-label">อายุ</label>
                    </div>
                    <div class="col">
                        <div class="input-group">
                            <input 
                                id="age" 
                                name="age" 
                                type="text" 
                                class="form-control text-center" 
                                maxlength="3" 
                                value="0"
                                oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 3);"
                            >
                            <button class="btn btn-outline-secondary btn-sm" type="button" onclick="changeAge(1)">▲</button>
                            <button class="btn btn-outline-secondary btn-sm" type="button" onclick="changeAge(-1)">▼</button>
                        </div>
                    </div>
                </div>

                <script>
                    function changeAge(delta) {
                        const ageInput = document.getElementById('age');
                        let currentValue = parseInt(ageInput.value || 0);

                        let newValue = currentValue + delta;

                        // จำกัดไม่ให้ต่ำกว่า 0
                        if (newValue < 0) {
                            newValue = 0;
                        }

                        // จำกัดไม่ให้เกิน 999 (3 หลัก)
                        if (newValue > 999) {
                            newValue = 999;
                        }

                        ageInput.value = newValue;
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
                    </div>
                </div>
                
                <div class="row mt-3 align-items-center">
                    <div class="col-sm-12 col-md-4 form-label-col">
                       <label for="profilePic" class="form-label">รูป</label>
                    </div>
                    <div class="col">
                        <input class="form-control" type="file" id="profilePic" name="profile_picture">
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
                    <div class="col-sm-12 col-md-4 form-label-col">
                       <label for="favColor" class="form-label">สีที่ชอบ</label>
                    </div>
                    <div class="col">
                        <select class="form-select" id="favColor" name="favorite_color">
                            <option value="">เลือกสี</option>
                            <option value="red">สีแดง</option>
                            <option value="blue">สีน้ำเงิน</option>
                            <option value="green">สีเขียว</option>
                            </select>
                    </div>
                </div>

                <div class="row mt-3 align-items-center">
                    <div class="col-sm-12 col-md-4 form-label-col">
                       <label class="form-label">แนวเพลงที่ชอบ</label>
                    </div>
                    <div class="col">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="music_genre" id="genre1" value="pop">
                            <label class="form-check-label" for="genre1">ป๊อป</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="music_genre" id="genre2" value="for_life">
                            <label class="form-check-label" for="genre2">เพื่อชีวิต</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="music_genre" id="genre3" value="country">
                            <label class="form-check-label" for="genre3">ลูกทุ่ง</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="music_genre" id="genre4" value="other">
                            <label class="form-check-label" for="genre4">อื่นๆ</label>
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

                <div class="row mt-5">
                    <div class="col d-flex justify-content-center">
                        <button type="reset" class="btn btn-secondary me-3">Reset</button>
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>