<div class="modal fade" id="AppoModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content enquiry_form_modal">
            <!-- Modal Header -->
            <div class="modal-header">
                <div class="col-md-12">
                    <div class="row">
                        <h4 class="modal-title col-md-12">Appointment Request Form</h4>
                        <p class=" col-md-12">You can also call @ <strong>+91-9555-059-059</strong> for assistance
                        </p>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                </div>
            </div>
            <div class="">

                <form action="../Organ_Hospital_Project/admin/process/appointment_form.php" method="POST">
                    <div class="modal-body">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 form-item form-group">
                                    <label class="control-label" for="">Name <span class="form-required"
                                            title="This field is required.">*</span></label>
                                    <input  type="text" name="name"  placeholder="Enter Your Full Name"
                                        class="form-control" pattern="[A-Za-z ]{1,32}" required>
                                </div>
                                <div class="col-xs-12 col-sm-6 form-item form-group">
                                    <label class="control-label" for="">Email <span class="form-required"
                                            title="This field is required.">*</span></label>

                                    <input type="text" name="email"  placeholder="email@xyz.com"
                                        class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>

                                </div>



                                <div class="col-xs-12 col-sm-6 form-item form-group">

                                    <label class="control-label" for="">Contact Number <span class="form-required"
                                            title="This field is required.">*</span></label>

                                    <input type="text" name="phone"  placeholder="+91 95*** ***78"
                                        class="form-control required" pattern="^([0|\+[0-9]{1,5})?([1-9][0-9]{9})$"
                                        maxlength="10" minlength="10" required>

                                </div>

                                <div class="col-xs-12 col-sm-6 form-item form-group">

                                    <label class="control-label" for="">Select Specialist Type <span
                                            class="form-required" title="This field is required.">*</span></label>

                                    <select name="specialist" class="hospital-dropdown form-control">

                                        <option value="">- Select Specialist -</option>

                                        <option value="Piles, Hemorrhoids, Hydrocele, Hernia">Piles, Hemorrhoids,
                                            Hydrocele, Hernia</option>
                                        <option value="2D Echo, Angiography, Angioplasty, ICU, All Cardiology Services">
                                            2D Echo, Angiography, Angioplasty, ICU, All Cardiology Services</option>
                                        <option value="Maternity Services, Painless Delivery, High Risk Pregnancy">
                                            Maternity Services, Painless Delivery, High Risk Pregnancy</option>
                                        <option value="Kidney Stones, Gall Bladder Stones">Kidney Stones, Gall
                                            Bladder Stones</option>
                                        <option value="Peadiatric Surgery">Peadiatric Surgery</option>
                                        <option value="Bariatric Surgery">Bariatric Surgery</option>
                                        <option value="Liposuction">Liposuction</option>
                                        <option value="Minimal Access, Laparoscopy &amp; General Surgery">Minimal
                                            Access, Laparoscopy &amp; General Surgery</option>
                                        <option value="Gynaecology">Gynaecology</option>
                                        <option value="MTP and Family Planning Services">MTP and Family Planning
                                            Services</option>
                                        <option value="24x7 Paediatrics, 24x7 Neonatology (NICU, Ventilator, CPAP)">
                                            24x7 Paediatrics, 24x7 Neonatology (NICU, Ventilator, CPAP)</option>
                                        <option value="New Born Intensive Care (NICU)">New Born Intensive Care
                                            (NICU)</option>
                                        <option value="Orthopaedics, Rheumatology, Knee Replacement">Orthopaedics,
                                            Rheumatology, Knee Replacement</option>
                                        <option value="Cancer / Tumor Surgeries">Cancer / Tumor Surgeries</option>
                                        <option value="Medicine, General Physician">Medicine, General Physician
                                        </option>
                                        <option value="organ Fertility and IVF Centre">organ Fertility and IVF
                                            Centre</option>
                                        <option value="Radiology (Ultrasound, CT Scan, X-Ray, HSG)">Radiology
                                            (Ultrasound, CT Scan, X-Ray, HSG)</option>
                                        <option value="Endocrinology, Diabetes, Thyroid">Endocrinology, Diabetes,
                                            Thyroid</option>
                                        <option value="Urology (URS, PCNL)">Urology (URS, PCNL)</option>
                                        <option value="Ophthalmology (Cataract)">Ophthalmology (Cataract)</option>
                                        <option value="TKR, THR, ACL Tear, All Types of Fracture">TKR, THR, ACL
                                            Tear, All Types of Fracture</option>
                                        <option value="24x7 Laboratory Services">24x7 Laboratory Services</option>
                                        <option value="ENT">ENT</option>
                                        <option value="Hymenoplasty, Vaginoplasty, Breast Implant">Hymenoplasty,
                                            Vaginoplasty, Breast Implant</option>
                                        <option value="Pulmonology &amp; Sleep Disorders">Pulmonology &amp; Sleep
                                            Disorders</option>
                                        <option value="Nephrology, Dialysis 24x7">Nephrology, Dialysis 24x7</option>
                                        <option value="Neurosurgery">Neurosurgery</option>
                                        <option value="Cosmetic Surgeries, Plastic, Reconstructive, Aesthetic Surgery">
                                            Cosmetic Surgeries, Plastic, Reconstructive, Aesthetic Surgery</option>
                                        <option value="Psychiatry">Psychiatry</option>
                                        <option value="Physiotherapy">Physiotherapy</option>
                                        <option value="Neurology">Neurology</option>
                                        <option value="Dental Department">Dental Department</option>
                                        <option value="Rheumatology">Rheumatology</option>
                                        <option value="Gender Transformation Surgeries">Gender Transformation
                                            Surgeries</option>
                                        <option value="Key Hole Mastectomy, TLH with BSO">Key Hole Mastectomy, TLH
                                            with BSO</option>
                                        <option value="Department of Dermatology &amp; Hair Transplant Surgery">
                                            Department of Dermatology &amp; Hair Transplant Surgery</option>
                                        <option value="Gastroenterology">Gastroenterology</option>
                                        <option value="Varicose Vein">Varicose Vein</option>


                                    </select>

                                </div>



                                <div class="col-xs-12 col-sm-6 form-item form-group">

                                    <label class="control-label" for="">PREFERRED TIME <span class="form-required"
                                            title="This field is required.">*</span></label>

                                    <select name="preferetime" class="date-dropdown form-control">

                                        <option value="">- Select -</option>

                                        <option value="7:00AM - 9:00AM">7:00AM - 9:00AM(Only for Health Check
                                            Appointments)</option>

                                        <option value="9:00AM - 10:00AM">9:00AM - 10:00AM</option>

                                        <option value="10:00AM - 11:00AM">10:00AM - 11:00AM</option>

                                        <option value="11:00AM - 12:00PM">11:00AM - 12:00PM</option>

                                        <option value="12:00PM - 1:00PM">12:00PM - 1:00PM</option>

                                        <option value="1:00PM - 2:00PM">1:00PM - 2:00PM</option>

                                        <option value="2:00PM - 3:00PM">2:00PM - 3:00PM</option>

                                        <option value="3:00PM - 4:00PM">3:00PM - 4:00PM</option>

                                        <option value="7:00PM - 8:00PM">7:00PM - 8:00PM</option>

                                    </select>

                                </div>



                                <div class="col-xs-12 col-sm-6 form-item form-group">

                                    <label class="control-label" for="">PREFERRED Date <span class="form-required"
                                            title="This field is required.">*</span></label>

                                    <input name="preferedate" required placeholder="Enter Preferred Date"
                                        class="form-control required" type="date" aria-required="true">

                                </div>



                                
                                <div class="col-xs-12 col-sm-12 form-item form-group">
                                    <label class="control-label" for="">Query </label>
                                    <textarea name="query" placeholder="Enter Your Query"
                                        class="form-control form-textarea" cols="60" rows="5"
                                        style="resize: none;"></textarea>
                                </div>
                                <div class="col-sm-12 form-item form-group">
                                    <div class="termscondifrm">
                                        <input type="checkbox" name="privacy" value="" required> By clicking Submit, you
                                        agreed to <a href="#" target="_blank">Terms & Conditions</a> and <a href="#"
                                            target="_blank">Privacy Policy</a> of Organ Hospital website.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>