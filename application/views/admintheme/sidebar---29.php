<div class="container-fluid">
    <div class="row-fluid" id="sidebar">
        <div class="span3">
            &nbsp;
        </div>
        <div class="span9" id="content" >
            <div id="successmsg" class="alert alert-success" style="display: none;"></div>
            <div id="errormsg" class="alert alert alert-error" style="display: none;"></div>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span3" id="sidebar">
            <div class="panel-group" id="accordion">
                <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse" id="accordion1">
                    <li class="active"><a href="<?php echo base_url(); ?>dashboard"><span class="glyphicon glyphicon-flash"></span>Statistics</a></li>
                    <?php if ($this->ion_auth->in_group("Admin")) { ?>
					<li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#studentsLink"><i class="icon-globe"></i> Students</a>

                        <ul id="studentsLink" class="nav nav-list collapse">
                            <li class="divider"></li>
							<li><a data-parent="#accordion1" href="<?php echo base_url(); ?>addnewstudent"><i class="icon-globe"></i> Add New</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewstudents"><i class="icon-globe"></i> Current Students</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewxstudents"><i class="icon-globe"></i> X Students</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewallstudents"><i class="icon-globe"></i> All Students</a></li>
							<li class="divider"></li>
						</ul>
                    </li>
                    <li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#teachersLink"><i class="icon-globe"></i> Teachers</a>

                        <ul id="teachersLink" class="nav nav-list collapse">
                            <li class="divider"></li>
							<li><a data-parent="#accordion1" href="<?php echo base_url(); ?>addnewteacher"><i class="icon-globe"></i> Add New</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewteachers"><i class="icon-globe"></i> Current Teachers</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewxteachers"><i class="icon-globe"></i> X Teachers</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewxheadteachers"><i class="icon-globe"></i> X Head Teachers</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewallteachers"><i class="icon-globe"></i> All Teachers</a></li>
							<li class="divider"></li>
						</ul>
                    </li>
					
                    <li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#staffsLink"><i class="icon-globe"></i> Staffs</a>

                        <ul id="staffsLink" class="nav nav-list collapse">
                            <li class="divider"></li>
							<li><a data-parent="#accordion1" href="<?php echo base_url(); ?>addnewstaff"><i class="icon-globe"></i> Add New</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewstaffs"><i class="icon-globe"></i> Current Staffs</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewstaffs"><i class="icon-globe"></i> X Staffs</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewstaffs"><i class="icon-globe"></i> All Staffs</a></li>
							<li class="divider"></li>
						</ul>
                    </li>
                    <li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#admissionsLink"><i class="icon-globe"></i> Admissions</a>

                        <ul id="admissionsLink" class="nav nav-list collapse">
                            <li class="divider"></li>
							<li><a data-parent="#accordion1" href="<?php echo base_url(); ?>addnewapplicant"><i class="icon-globe"></i> New Applicants</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewapplicants"><i class="icon-globe"></i> Current Applicants</a></li>
							<li class="divider"></li>
						</ul>
                    </li>                    
                    <li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#attendanceLink"><i class="icon-globe"></i> Attendance</a>
                        <ul id="attendanceLink" class="nav nav-list collapse">
                            <li class="divider"></li>
							<li><a data-parent="#accordion1" href="<?php echo base_url(); ?>attendance"><i class="icon-bell"></i> Absence Notifier</a></li>
                            <li><a data-parent="#accordion1" href="#attendanceLink"><i class="icon-glass"></i> Attendance Graph</a></li>
                            <li><a data-parent="#accordion1" href="#attendanceLink"><i class="icon-download"></i> Attendance Sheet</a></li>
                            <li><a data-parent="#accordion1" href="#attendanceLink"><i class="icon-download"></i> Class Wise Attendance</a></li>
							<li class="divider"></li>
						</ul>
                    </li>
                    <li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#results"><i class="icon-globe"></i> Results</a>
                        <ul id="results" class="nav nav-list collapse">
							<li class="divider"></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>generateresults"><i class="icon-bell"></i>Generate Results</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>addresults"><i class="icon-glass"></i> Add/Edit Results</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewresults"><i class="icon-glass"></i> View Results</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>addnewothersresult"><i class="icon-globe"></i> Add Others Results</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewothersresults"><i class="icon-globe"></i> Others Resultss</a></li>
							<li class="divider"></li>
                        </ul>
                    </li>
                    <li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#accountsLink"><i class="icon-globe"></i> Accounts & Finance</a>

                        <ul id="accountsLink" class="nav nav-list collapse">
                            <li class="divider"></li>
							<li><a data-parent="#accordion1" href="<?php echo base_url(); ?>addnewcredit"><i class="icon-globe"></i> Add Credit</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewcredits"><i class="icon-globe"></i> All Credits</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>addnewdebit"><i class="icon-globe"></i> Add Debit</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewdebits"><i class="icon-globe"></i> All Debits</a></li>
                            <li class="divider"></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>addnewfinancialdepartment"><i class="icon-globe"></i> Add new</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewfinancialdepartments"><i class="icon-globe"></i> Financial Department</a></li>
							<li class="divider"></li>
						</ul>
                    </li>
                    <li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#libraryLink"><i class="icon-globe"></i> Library</a>

                        <ul id="libraryLink" class="nav nav-list collapse">
                            <li class="divider"></li>
							<li><a data-parent="#accordion1" href="<?php echo base_url(); ?>addnewbook"><i class="icon-globe"></i> Add New Book</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewbooks"><i class="icon-globe"></i> All Books</a></li>
							<li class="divider"></li>
						</ul>
                    </li>
                    <li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#photogalleryLink"><i class="icon-globe"></i> Photo Gallery</a>

                        <ul id="photogalleryLink" class="nav nav-list collapse">
                            <li class="divider"></li>
							<li><a data-parent="#accordion1" href="<?php echo base_url(); ?>addnewphoto"><i class="icon-globe"></i> Add Photo</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewphotos"><i class="icon-globe"></i> View Photos</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>addnewgallery"><i class="icon-globe"></i> Add Gallery</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewgalleries"><i class="icon-globe"></i> View Galleries</a></li>
							<li class="divider"></li>
						</ul>
                    </li>
                    <li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#routineLink"><i class="icon-globe"></i> Routine</a>

                        <ul id="routineLink" class="nav nav-list collapse">
                            <li class="divider"></li>
							<li><a data-parent="#accordion1" href="<?php echo base_url(); ?>addroutine"><i class="icon-globe"></i> Add New</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewroutine"><i class="icon-globe"></i> Class Wise Routine</a></li>
							<li class="divider"></li>
						</ul>
                    </li>
                    <li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#newsLink"><i class="icon-globe"></i> Latest News</a>

                        <ul id="newsLink" class="nav nav-list collapse">
                            <li class="divider"></li>
							<li><a data-parent="#accordion1" href="<?php echo base_url(); ?>addnewnews"><i class="icon-globe"></i> Add New News</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewnews"><i class="icon-globe"></i> All News</a></li>
							<li class="divider"></li>
						</ul>
                    </li>

                    <li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#departmentLink"><i class="icon-globe"></i> Department</a>

                        <ul id="departmentLink" class="nav nav-list collapse">
                            <li class="divider"></li>
							<li><a data-parent="#accordion1" href="<?php echo base_url(); ?>addnewdepartment"><i class="icon-globe"></i> Add New Department</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewdepartments"><i class="icon-globe"></i> All Department</a></li>
							<li class="divider"></li>
						</ul>
                    </li>

                    <li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#downloadLink"><i class="icon-globe"></i> Download</a>

                        <ul id="downloadLink" class="nav nav-list collapse">
                            <li class="divider"></li>
							<li><a data-parent="#accordion1" href="<?php echo base_url(); ?>addnewdownload"><i class="icon-globe"></i> Add New Download</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewdownloads"><i class="icon-globe"></i> All Downloads</a></li>
							<li class="divider"></li>
						</ul>
                    </li>
                    <li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#talentedstudentsLink"><i class="icon-globe"></i>Talented Students</a>

                        <ul id="talentedstudentsLink" class="nav nav-list collapse">
                            <li class="divider"></li>
							<li><a data-parent="#accordion1" href="<?php echo base_url(); ?>addnewtalentedstudent"><i class="icon-globe"></i> Add Talented Students</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewtalentedstudents"><i class="icon-globe"></i> All Talented Students</a></li>
							<li class="divider"></li>
						</ul>
                    </li>

                    <li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#academiccouncillorsLink"><i class="icon-globe"></i>Academic Councillors</a>

                        <ul id="academiccouncillorsLink" class="nav nav-list collapse">
							<li class="divider"></li>
						    <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>addnewacademiccouncillor"><i class="icon-globe"></i> Add Academic Councillors</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewacademiccouncillors"><i class="icon-globe"></i> All Academic Councillors</a></li>
							<li class="divider"></li>
						</ul>
                    </li>

                    <li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#syllabussLink"><i class="icon-globe"></i>Syllabus</a>

                        <ul id="syllabussLink" class="nav nav-list collapse">
                            <li class="divider"></li>
							<li><a data-parent="#accordion1" href="<?php echo base_url(); ?>addnewsyllabus"><i class="icon-globe"></i> Add Syllabus</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewsyllabuss"><i class="icon-globe"></i> All Syllabus</a></li>
							<li class="divider"></li>
						</ul>
                    </li>

                    <li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#othersLink"><i class="icon-globe"></i> Notice</a>

                        <ul id="othersLink" class="nav nav-list collapse">
                            <li class="divider"></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>addnewnotice"><i class="icon-globe"></i> Add Notice</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewnotices"><i class="icon-globe"></i> Notices</a></li>
							<li class="divider"></li>
						</ul>
                    </li>
                    <li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#slideLink"><i class="icon-globe"></i> Slideshow</a>

                        <ul id="slideLink" class="nav nav-list collapse">
							<li class="divider"></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>addnewslide"><i class="icon-globe"></i> Add New Slide</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewslides"><i class="icon-globe"></i> All Slides</a></li>
							<li class="divider"></li>
						</ul>
                    </li>

                    <li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#tcLink"><i class="icon-globe"></i> Requests</a>

                        <ul id="tcLink" class="nav nav-list collapse">
							<li class="divider"></li>
						   <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>addnewtc"><i class="icon-globe"></i> Add New Request</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewtcs"><i class="icon-globe"></i> Transfer Certificate</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewtestimonials"><i class="icon-globe"></i> Testimonial</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewprottoyans"><i class="icon-globe"></i> Attestation</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewtotlists"><i class="icon-globe"></i> Totlist</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewprevious"><i class="icon-globe"></i>Previous Requests</a></li>
							<li class="divider"></li>
						</ul>
                    </li>
					<?php } ?>
					<?php if ($this->ion_auth->in_group("Teachers")) { ?>
					<li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#results"><i class="icon-globe"></i> Results</a>
                        <ul id="results" class="nav nav-list collapse">
							<li class="divider"></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>addresults"><i class="icon-glass"></i> Add/Edit Results</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewresults"><i class="icon-glass"></i> View Results</a></li>
							<li class="divider"></li>
                        </ul>
                    </li>
					<li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#attendanceLink"><i class="icon-globe"></i> Attendance</a>
                        <ul id="attendanceLink" class="nav nav-list collapse">
                            <li class="divider"></li>
							<li><a data-parent="#accordion1" href="<?php echo base_url(); ?>attendance"><i class="icon-bell"></i> Absence Notifier</a></li>
							<li class="divider"></li>
						</ul>
                    </li>
					<li class="panel"><a href="<?php echo base_url(); ?>viewroutine"><i class="icon-globe"></i>Class Routine</a></li>
					<li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#tcLink"><i class="icon-globe"></i> Profile</a>

                        <ul id="tcLink" class="nav nav-list collapse">
							<li class="divider"></li>
						    <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewprofile"><i class="icon-globe"></i>View Profile</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>editprofile"><i class="icon-globe"></i>Change Password</a></li>
							<li class="divider"></li>
						</ul>
                    </li>
					<?php } ?>
					<?php if ($this->ion_auth->in_group("Students")) { ?>
					<li class="panel"><a href="#routineLink"><i class="icon-globe"></i>Results</a></li>
					<li class="panel"><a href="#routineLink"><i class="icon-globe"></i>Attendance</a></li>
					<li class="panel"><a href="<?php echo base_url(); ?>viewroutine"><i class="icon-globe"></i>Class Routine</a></li>
					<li class="panel"><a href="#routineLink"><i class="icon-globe"></i>Exam Routine</a></li>
					<li class="panel"><a href="#routineLink"><i class="icon-globe"></i>Payment Status</a></li>
					
					<li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#tcLink"><i class="icon-globe"></i> Profile</a>

                        <ul id="tcLink" class="nav nav-list collapse">
							<li class="divider"></li>
						    <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewprofile"><i class="icon-globe"></i>View Profile</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>editprofile"><i class="icon-globe"></i>Change Password</a></li>
							<li class="divider"></li>
						</ul>
                    </li>
					<?php } ?>
					<?php if ($this->ion_auth->in_group("Guardians")) { ?>
					<li class="panel"><a href="#routineLink"><i class="icon-globe"></i>Results</a></li>
					<li class="panel"><a href="#routineLink"><i class="icon-globe"></i>Attendance</a></li>
					<li class="panel"><a href="<?php echo base_url(); ?>viewroutine"><i class="icon-globe"></i>Class Routine</a></li>
					<li class="panel"><a href="<?php echo base_url(); ?>viewroutine"><i class="icon-globe"></i>Exam Routine</a></li>
					<li class="panel"><a href="#routineLink"><i class="icon-globe"></i>Payment Status</a></li>
					
					<li class="panel">
                        <a data-toggle="collapse" data-parent="#accordion1" href="#tcLink"><i class="icon-globe"></i> Profile</a>

                        <ul id="tcLink" class="nav nav-list collapse">
							<li class="divider"></li>
						    <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>viewprofile"><i class="icon-globe"></i>View Profile</a></li>
                            <li><a data-parent="#accordion1" href="<?php echo base_url(); ?>editprofile"><i class="icon-globe"></i>Change Password</a></li>
							<li class="divider"></li>
						</ul>
                    </li>
					<?php } ?>

                </ul>
            </div>
        </div>
        <div class="span9" id="content">
            <div class="row-fluid">

