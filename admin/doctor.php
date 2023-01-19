<?php include_once 'includes/header.php'; ?>




<div class="add_doctor">
    <button id="doctor" type="button">Add Doctor <i class="fa fa-plus" aria-hidden="true"></i></button>

    <div style="display: none;" id="doctor_form" class="doctor_form">
        <div class="form_tile">
            <h4>Doctor Information</h4>
        </div>

        <?php

        $db = new DataBase();

        if (isset($_POST['submit'])) {
            $permitted = array('jpg', 'jpeg', 'png', 'gif');
            $image = $_FILES['images']['name'];
            $image_size = $_FILES['images']['size'];
            $image_temp = $_FILES['images']['tmp_name'];
            $div = explode('.', $image);
            $file_text = strtolower(end($div));
            $unique_pic = substr(md5(time()), 0, 10) . '.' . $file_text;
            $uploaded_pic = "upload/" . $unique_pic;

            $doctorname = $_POST['doctorname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $info = $_POST['info'];
            $department = $_POST['department'];
            $id = $_SESSION['id'];

            move_uploaded_file($image_temp, $uploaded_pic);
            $query = "INSERT INTO doctor(doctor_image,doctor_name,doctor_email,doctor_phone,doctor_info,doctor_department, 	u_id)VALUES('$unique_pic','$doctorname','$email','$phone','$info','$department','$id')";

            $data = $db->insert($query);

            if ($data) {
                echo "Save Successfully";
            } else {
                echo "Something wrong";
            }
        }


        ?>

        <form action="" method="post" enctype="multipart/form-data">

            <label for="image">Add doctor image : </label> <br>
            <input type="file" name="images" id="images" required="1"> <br>

            <label for="doctorname">Doctor Name : </label> <br>
            <input type="text" name="doctorname" id="doctorname" required="1"> <br>

            <label for="email">Doctor E-mail</label> <br>
            <input type="email" name="email" id="email" required="1"> <br>

            <label for="phone">Add Doctor Phone Number </label> <br>
            <input type="text" name="phone" id="phone" required="1"> <br>

            <label for="info">Doctor Information</label> <br>
            <input type="text" name="info" id="info" required="1"> <br>

            <label for="department">Add department</label> <br>
            <select name="department" id="department">
                <option value="0">Choose Department</option>
                <option value="Hepatobiliary & Pancreatic Surgery">Hepatobiliary & Pancreatic Surgery</option>
                <option value="Oncology">Oncology</option>
                <option value="Urology & Andrology">Urology & Andrology</option>
                <option value="General & Laparascopic Surgery">General & Laparascopic Surgery</option>
                <option value="Internal Medicine">Internal Medicine</option>
                <option value="Cardiology">Cardiology</option>
                <option value="Paediatric">Paediatric</option>
                <option value="Gastroenterology">Gastroenterology</option>
                <option value="Obstetric & Gynaecology">Obstetric & Gynaecology</option>
                <option value="Neurosurgery">Neurosurgery</option>
                <option value="Dermatology & Venereology">Dermatology & Venereology</option>
                <option value="Orthopaedic">Orthopaedic</option>
                <option value="Neurology & Neuroelectrophysiology">Neurology & Neuroelectrophysiology</option>
                <option value="Neonatology">Neonatology</option>
                <option value="Paediatric Gastroenterology">Paediatric Gastroenterology</option>
                <option value="Paediatric  Surgery">Paediatric Surgery</option>
                <option value="Nephrology">Nephrology</option>
                <option value="Pain Medicine">Pain Medicine</option>
                <option value="Colorectal & Laparoscopic Surgery">Colorectal & Laparoscopic Surgery</option>
                <option value="Thoracic Surgery">Thoracic Surgery</option>
                <option value="Breast Unit">Breast Unit</option>
                <option value="Psychiatry">Psychiatry</option>
                <option value="Physical Medicine & Rehabilitation">Physical Medicine & Rehabilitation</option>
                <option value="ENT, Head & Neck Surgery">ENT, Head & Neck Surgery</option>
                <option value="Vascular Surgery">Vascular Surgery</option>
                <option value="Emergency & ICU">Emergency & ICU</option>
                <option value="Chest Medicine">Chest Medicine</option>
                <option value="Dietetics Department">Dietetics Department</option>
                <option value="Psychotherapy">Psychotherapy</option>
                <option value="Neuro Medicine">Neuro Medicine</option>
                <option value="Anesthesia">Anesthesia</option>
                <option value="Endocrinology & Diabetology">Endocrinology & Diabetology</option>
                <option value="Paediatric Neonatology">Paediatric Neonatology</option>
                <option value="Paediatric Nephrology">Paediatric Nephrology</option>
                <option value="Hematology">Hematology</option>
                <option value="Cardiovascular Surgery">Cardiovascular Surgery</option>
                <option value="Paediatric neurology">Paediatric neurology</option>
                <option value="Burn & Plastic Surgery">Burn & Plastic Surgery</option>
                <option value="Physiotherapy">Physiotherapy</option>
                <option value="Psychology">Psychology</option>
                <option value="Dental Surgery">Dental Surgery</option>
                <option value="CCU">CCU</option>
                <option value="NICU">NICU</option>
                <option value="Neuro ICU">Neuro ICU</option>
                <option value="Rheumatology">Rheumatology</option>
                <option value="Ophthalmology">Ophthalmology</option>
                <option value="Ultrasound">Ultrasound</option>
                <option value="Radiology & Imaging">Radiology & Imaging</option>
                <option value="Laboratory Medicine">Laboratory Medicine</option>
                <option value="Transfusion Medicine">Transfusion Medicine</option>
                <option value="Food & Nutrition">Food & Nutrition</option>
            </select> <br>

            <label for="save">Click to add : </label> <br>
            <input type="submit" name="submit" value="Save">
        </form>
    </div>

</div>



<div class="doctor_list">

    <div class="form_tile">
        <h2>Doctor List</h2>
    </div>

    <table id="customers">

        <tr>
            <th>SL</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Department</th>
            <th>E-mail</th>
            <th>Action</th>
        </tr>

        <?php

        $db = new DataBase();
        $sl = 0;
        $query = "SELECT * FROM doctor order by doc_id desc";

        $data = $db->select($query);

        foreach ($data ?: [] as $value) { ?>
        <?php $sl++; ?>
        <tr>
            <td><?= $sl ?></td>
            <td><?= $value['doctor_name'] ?></td>
            <td><?= $value['doctor_phone'] ?></td>
            <td><?= $value['doctor_department'] ?></td>
            <td><?= $value['doctor_email'] ?></td>
            <td>
                <a href="">update</a>/ <a href="doctor_view.php?docId=<?= $value['doc_id'] ?>">View</a>
            </td>
        </tr>


        <?php  }


        ?>




    </table>
</div>






<script>
var doctor = document.getElementById("doctor");
doctor.addEventListener('click', function() {
    var doctor_form = document.getElementById("doctor_form");
    if (doctor_form.style.display === 'none') {
        doctor_form.style.display = 'block';
    } else {
        doctor_form.style.display = 'none';
    }
})
</script>

<?php include_once 'includes/footer.php'; ?>