<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Run for Tudduu</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Style the header */
        header {
            background-color: #666;
            padding: 30px;
            text-align: center;
            font-size: 35px;
            color: white;
        }

        /* Create two columns/boxes that floats next to each other */
        nav {
            float: left;
            width: 20%;
            height: 1150px; /* only for demonstration, should be removed */
            background: #ccc;
            padding: 20px;
        }

        /* Style the list inside the menu */
        nav ul {
            list-style-type: none;
            padding: 0;
        }

        article {
            float: left;
            padding: 20px;
            width: 80%;
            background-color: #f1f1f1;
            height: 1150px; /* only for demonstration, should be removed */
        }

        /* Clear floats after the columns */
        section:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Style the footer */
        footer {
            background-color: #777;
            padding: 10px;
            text-align: center;
            color: white;
        }

        /* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
        @media (max-width: 600px) {
            nav, article {
                width: 100%;
                height: auto;
            }
        }
    </style>
</head>
<body>
<header>
    <h2>Run for Tudduu</h2>
</header>

<section>
    <nav>
        <ul>
            <li><a href="#">สมัครสมาชิก</a></li>
            <li><a href="#">เช็คสถานะการสมัคร</a></li>
            <li><a href="#">กำหนดการ</a></li>
        </ul>
    </nav>

    <article>
        <h3>Register Run for Tudduu</h3>
       <form method= "POST" action= "result1.php" >
            
                <p>ประเภท</p>
                <input type="radio" name="Type" value="Marathon" checked> Marathon 42 km
                <input type="radio" name="Type" value="Half Marathon"> Half Marathon 21 km
                <input type="radio" name="Type" value="Mini Marathon"> Mini Marathon 10 km
                <input type="radio" name="Type" value="Micro Marathon"> Micro Marathon 5 km<br><br>
            
            ชื่อ(ภาษาอังกฤษ):
            <input type="text" name="firstnameeng"><br><br>
            นามสกุล(ภาษาอังกฤษ):
            <input type="text" name="lastnameeng"><br><br>
	     ชื่อ(ภาษาไทย):
            <input type="text" name="firstnameth"><br><br>
            นามสกุล(ภาษาไทย):
            <input type="text" name="lastnameth"><br><br>
            เลขประจำตัวประชาชน / เลขประจำตัวหนังสือเดินทาง :
            <input type="text" name="ID No."><br><br>
            วัน / เดือน / ปีเกิด :
            <input type="text" name="birthday"><br>
            
                <p>เพศ</p>
                <input type="radio" name="gender" value="male" checked> ชาย
                <input type="radio" name="gender" value="female"> หญิง<br><br>
				<input type="radio" name="gender" value="others"> อื่นๆ<br><br>
            
            อายุ :
            <input type="text" name="age"><br><br>
            สัญชาติ :
            <input type="text" name="Nationality"><br>
            
                <p>กรุ๊ปเลือด</p>
                <input type="radio" name="Blood Type" value="A" checked> A
                <input type="radio" name="Blood Type" value="B"> B
                <input type="radio" name="Blood Type" value="AB"> AB
                <input type="radio" name="Blood Type" value="O"> O
            <br>
            ที่อยู่: <input type="text" name="Address" value="">
            <br><br>
            อำเภอ: <input type="text" name="city" value="">
            <br>
		
                <p>จังหวัด</p>
                <select name="province">
                    <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                    <option value="กระบี่">กระบี่</option>
                    <option value="นครปฐม">นครปฐม</option>
                    <option value="ราชบุรี">ราชบุรี</option>
					<option value="สมุทรปราการ">สมุทรปราการ</option>
                    <option value="ขอนแก่น">ขอนแก่น</option>
                    <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา</option>
                    <option value="กาญจนบุรี">กาญจนบุรี</option>
					<option value="นนทบุรี">นนทบุรี</option>
                    <option value="สมุทรสงคราม">สมุทรสงคราม</option>
                    <option value="สมุทรสาคร">สมุทรสาคร</option>
                    <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์</option>
                </select>
                <br><br>
		   รหัสไปรษณีย์: <input type="text" name="postcode" value=""><br>
                <p>ประเทศ</p>
                <select name="country">
                    <option value="Thailand">Thailand</option>
                    <option value="Korea">Korea</option>
                    <option value="Japan">Japan</option>
                    <option value="China">China</option>
					<option value="Laos">Laos</option>
                    <option value="Vietnam">Vietnam</option>
                </select>
                โทรศัพท์มือถือ: <input type="text" name="phone" value="">
                <br><br>
		  E-mail Adress :
                <input type="text" name="Email"><br><br>	
                ผู้ติดต่อกรณีฉุกเฉิน: <input type="text" name="emerperson" value="">
                <br><br>
                เบอร์โทรศัพท์กรณีฉุกเฉิน: <input type="text" name="emerphone" value="">
                <br><br>
                
                    <input type="radio" name="size" value="XS 36"" checked>XS 36"
                    <input type="radio" name="size" value="S 38"">S 38"
                    <input type="radio" name="size" value="M 40""> M 40"
                    <input type="radio" name="size" value="L 42""> L 42"
                    <input type="radio" name="size" value="XL 44""> XL 44"
                    <input type="radio" name="size" value="XXL 46""> XXL 46" 
					<br><br><br>
                    
                <input type="submit">
            </form>
    </article>
</section>

<footer>
    <p>Footer</p>
</footer>

</body>
</html>