<?php include_once 'header.php'; ?>
<?php include_once '../library/database.php'; ?>

<div class="row customRow">
    <div class="col-lg-3">
        <div class="doctor_tips_zone">

            <div class="doctor_tips_title">
                <h4>Doctor Tip's</h4>
            </div>

            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus voluptatibus, architecto repellat,
                eaque
                inventore iure fugit aspernatur dolore est porro quaerat quasi libero. Rem quaerat fuga minima autem
                facere
                accusantium.
            </p>
        </div>
    </div>
    <div class="col-lg-9">

        <div class="find_doctor">

            <h4>To find your doctor</h4>

            <form action="" method="post">
                <label for="select">Select Department : </label>
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
                </select>
            </form>
        </div>

        <hr>

        <div class="doctor_list_head">
            <h4>Doctor's list</h4>
        </div>
        <div class="all_doctor">




            <?php

            $db = new DataBase();

            $query = "SELECT * FROM doctor";
            $data = $db->select($query);


            foreach ($data ?: [] as $value) { ?>
            <div class="card customCard" style="width: 18rem;">
                <img style="height: 200px;" class="card-img-top" src="../../admin/upload/<?= $value['doctor_image'] ?>"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?= $value['doctor_name'] ?></h5>
                    <mark class="markButton"><?= $value['doctor_department'] ?></mark>
                    <p class="card-text">
                        <?= $value['doctor_info'] ?>
                    </p>
                    <a href="#" class="btn btn-primary">Make Appointment</a>
                </div>
            </div>
            <?php }

            ?>








        </div>
    </div>
</div>


<?php include_once 'footer.php'; ?>