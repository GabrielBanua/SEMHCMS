<!-- *******************************************Start Modal Add Medicines*********************************************************** -->
<div aria-hidden="true" aria-labelledby="myModalLabel-<?php echo $Med['MEDICINE_ID']; ?>" role="dialog" tabindex="-1" id="EditMed-<?php echo $Med['MEDICINE_ID']; ?>" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
					<h4 class="modal-title" id="myModalLabel-<?php echo $Med['MEDICINE_ID']; ?>">Edit Medicines</h4>
			</div>
		<div class="modal-body">
			<form class="form-horizontal" role="form">
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Category(Age):</label>
						<div class="col-lg-6">
							<select class="select2-single" id="MEDICINE_CAT-<?php echo $Med['MEDICINE_ID']; ?>">
								<option></option><!--for placeholder-->
								<option value="Adult" <?php
                                if ($Med['MEDICINE_CAT'] == "Adult") { echo " selected"; }?>>Adult</option>
								<option value="Children" <?php
                                if ($Med['MEDICINE_CAT'] == "Children") { echo " selected"; }?>>Children</option>
							</select>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Type:</label>
						<div class="col-lg-6">
							<select class="select2-single" id="MEDICINE_TYPE-<?php echo $Med['MEDICINE_ID']; ?>">
								<option></option><!--for placeholder-->
								<option value="Analgesic" <?php
                                if ($Med['MEDICINE_TYPE'] == "Analgesic") { echo " selected"; }?>>Analgesic</option>
								<option value="Anti-Allergy" <?php
                                if ($Med['MEDICINE_TYPE'] == "Anti-Allergy") { echo " selected"; }?>>Anti-Allergy</option>
								<option value="Antibiotics" <?php
                                if ($Med['MEDICINE_TYPE'] == "Antibiotics") { echo " selected"; }?>>Antibiotics</option>
								<option value="Diabetics"<?php
                                if ($Med['MEDICINE_TYPE'] == "Diabetics") { echo " selected"; }?>>Diabetics</option>
								<option value="Hypertension" <?php
                                if ($Med['MEDICINE_TYPE'] == "Hypertension") { echo " selected"; }?>>Hypertension</option>
								<option value="OTROS" <?php
                                if ($Med['MEDICINE_TYPE'] == "OTROS") { echo " selected"; }?>>OTROS</option>
								<option value="Respiratory" <?php
                                if ($Med['MEDICINE_TYPE'] == "Respiratory") { echo " selected"; }?>>Respiratory</option>
								<option value="Stomach/Digestive" <?php
                                if ($Med['MEDICINE_TYPE'] == "Stomach/Digestive") { echo " selected"; }?>>Stomach/Digestive</option>
								<option value="Vitamins" <?php
                                if ($Med['MEDICINE_TYPE'] == "Vitamins") { echo " selected"; }?>>Vitamins</option>
							</select>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Generic Name:</label>
						<div class="col-lg-6">
							<input type="text" id="MEDICINE_GNAME-<?php echo $Med['MEDICINE_ID']; ?>" value="<?php echo $Med['MEDICINE_GNAME']; ?>" class="form-control" required>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Brand Name:</label>
						<div class="col-lg-6">
							<input type="text" id="MEDICINE_BNAME-<?php echo $Med['MEDICINE_ID']; ?>" value="<?php echo $Med['MEDICINE_BNAME']; ?>" class="form-control" required>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Dosage Form:</label>
						<div class="col-lg-6">
							<select class="select2-single" id="MEDICINE_DFORM-<?php echo $Med['MEDICINE_ID']; ?>">
								<option></option><!--for placeholder-->
								<option value="Tablet" <?php
                                if ($Med['MEDICINE_DFORM'] == "Tablet") { echo " selected"; }?>>Tablet</option>
								<option value="Syrup" <?php
                                if ($Med['MEDICINE_DFORM'] == "Syrup") { echo " selected"; }?>>Syrup</option>
							</select>
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 col-sm-2 control-label">Dose:</label>
						<div class="col-lg-6">
							<input type="text" id="MEDICINE_DOSE-<?php echo $Med['MEDICINE_ID']; ?>" value="<?php echo $Med['MEDICINE_DOSE']; ?>" class="form-control" required>
						</div>
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<span id="Error_Message_EMED-<?php echo $Med['MEDICINE_ID']; ?>" style="float: left; font-weight: bold;" class="text-danger"></span>
            <span id="Success_Message_EMED-<?php echo $Med['MEDICINE_ID']; ?>" style="float: left; font-weight: bold;" class="text-success"></span>
			<a data-dismiss="modal" class="btn btn-shadow btn-default" type="button">Cancel</a>
			<a class="btn btn-shadow btn-success" type="submit" onclick="UpdateMedicine(<?php echo $Med['MEDICINE_ID']; ?>)"><i class="icon-save"></i> Update</a>
		</div>
		</div>
	</div>
</div>
<!-- ****************************************************MODAL END****************************************************************** -->