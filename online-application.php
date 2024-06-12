<?php
  require('connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dept. of Economics, JU- Online Admission</title>
    <meta charset="UTF-8" />
    <meta name="viewport"
        content="width=device-width, minimum-scale=1, initial-scale=1, maximum-scale=1, user-scalable=0" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />


</head>

<body>



    <div class="container">
        <form class="online-application-submitting-form" action="online-application-submit.php" method="POST"
            autocomplete="off">

            <div class="control-group">
                <label class="control-label" for="basicinput"><b>Applicant's Name :</b></label>
                <div class="controls">
                    <input type="text" name="applicant_name" id="applicant_name" placeholder="" class="span8" />
                    <span class="help-inline"></span>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="basicinput"><b>Father's Name :</b></label>
                <div class="controls">
                    <input type="text" name="father_name" id="father_name" placeholder="" class="span8" />
                    <span class="help-inline"></span>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="basicinput"><b>Mother's Name :</b></label>
                <div class="controls">
                    <input type="text" id="mother_name" name="mother_name" placeholder="" class="span8" />
                    <span class="help-inline"></span>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="basicinput"><b>Date of Birth:</b>
                </label>
                <div class="controls">
                    <input type="date" name="birth_date" id="birth_date" />
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="basicinput"><b>Mobile :</b></label>
                <div class="controls">
                    <input type="text" name="mobile" id="mobile" placeholder="" class="span3" />
                    <font color="red"> Please mention a valid Mobile Number.</font>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="basicinput"><b>Gender :</b></label>
                <div class="controls">
                    <select tabindex="1" name="gender" id="gender" data-placeholder="Select here.." class="span3">
                        <option value="">Select</option>
                        <option value="MALE">MALE</option>
                        <option value="FEMALE">FEMALE</option>
                    </select>

                    <span
                        class="help-inline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Religion
                            :</b>&nbsp;</span>

                    <select tabindex="1" name="religion" id="religion" data-placeholder="Select" class="span3">
                        <option value="">Select</option>
                        <option value="ISLAM">ISLAM</option>
                        <option value="HINDUISM">HINDUISM</option>
                        <option value="CHRISTIANITY">CHRISTIANITY</option>
                        <option value="BUDDHISM">BUDDHISM</option>
                        <option value="OTHER">OTHER</option>
                    </select>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="basicinput"><b>Blood Group :</b></label>
                <div class="controls">
                    <select tabindex="1" name="blood_group" id="blood_group" data-placeholder="Select here.."
                        class="span3">
                        <option value="">Select</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                    </select>

                    <span
                        class="help-inline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Nationality
                            :</b>&nbsp;</span>

                    <select tabindex="1" name="nationality" id="nationality" data-placeholder="Select" class="span3">
                        <option value="">Select</option>
                        <option value="BANGLADESHI" selected="">BANGLADESHI</option>
                    </select>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="basicinput"><b>National ID :</b></label>
                <div class="controls">
                    <input type="text" name="national_id" id="national_id" placeholder="" class="span3" />
                    (if any)
                    <span class="help-inline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Email
                            :</b>&nbsp;</span>
                    <input type="text" name="email" id="email" placeholder="" class="span3" />
                    (if any)
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="basicinput"><b>Present Address :</b></label>
                <div class="controls">
                    <textarea type="text" name="present_address" id="present_address" placeholder=""
                        class="span8"></textarea>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="basicinput"><b>Permanent Address :</b></label>
                <div class="controls">
                    <textarea type="text" name="permanent_address" id="permanent_address" placeholder=""
                        class="span8"></textarea>
                    <input name="as_same" id="as_same" type="checkbox" value="yes" />
                    same as present address
                </div>
            </div>
            <hr />

            <legend>Academic Qualifications:</legend>
            <div class="">
                <div class="span6">
                    <h5 class="title_bar">SSC or Equivalent Level*</h5>
                    <div class="form-group">
                        <span class="label">Examination </span>
                        <select name="ssc_exam_type" id="ssc_exam_type" class="form-control">
                            <option selected="selected" value="">Select One</option>
                            <option value="SSC">S.S.C</option>
                            <option value="Dakhil">Dakhil</option>
                            <option value="SSC Vocational">S.S.C Vocational</option>
                            <option value="O Level/Cambridge">O Level/Cambridge</option>
                            <option value="SSC Equivalent">S.S.C Equivalent</option>
                        </select>

                        <span class="label">Board </span>
                        <select name="ssc_board" id="ssc_board" class="form-control">
                            <option selected="selected" value="">Select One</option>
                            <option value="DHAKA">Dhaka</option>
                            <option value="COMILLA">Comilla</option>
                            <option value="RAJSHAHI">Rajshahi</option>
                            <option value="JESSORE">Jessore</option>
                            <option value="CHITTAGONG">Chittagong</option>
                            <option value="BARISAL">Barisal</option>
                            <option value="SYLHET">Sylhet</option>
                            <option value="DINAJPUR">Dinajpur</option>
                            <option value="MADRASAH">Madrasah</option>
                            <option value="TECHNICAL">Technical</option>
                            <option value="IGCSE">Cambridge International - IGCSE</option>
                            <option value="EDEXCEL INTERNATIONAL">
                                Edexcel International
                            </option>
                            <option value="OTHERS">Others</option>
                        </select>

                        <span class="label">Roll No</span>
                        <input type="text" name="ssc_roll_no" id="ssc_roll_no" class="input-large" placeholder="" />

                        <span class="label">Result </span>
                        <select name="ssc_result" id="ssc_result" class="form-control">
                            <option value="" selected="selected">Select</option>
                            <option value="1">1st Division</option>
                            <option value="2">2nd Division</option>
                            <option value="4">GPA(out of 4)</option>
                            <option value="5">GPA(out of 5)</option>
                        </select>
                        <input name="ssc_gpa" id="ssc_gpa" style="visibility: hidden" size="4" maxlength="4"
                            placeholder="GPA" class="form-control span2" />
                        <span class="label">Group </span>
                        <select name="ssc_group" id="ssc_group" class="form-control">
                            <option selected="selected" value="">Select One</option>
                            <option value="SCIENCE">Science</option>
                            <option value="HUMANITIES">Humanities</option>
                            <option value="BUSINESS STUDIES">Business Studies</option>
                            <option value="OTHERS">Others</option>
                        </select>

                        <span class="label">Passing Year </span>
                        <select name="ssc_pass_year" id="ssc_pass_year" class="form-control">
                            <option selected="selected" value="">Select One</option>
                            <option value="1955">1955</option>
                            <option value="1956">1956</option>
                            <option value="1957">1957</option>
                            <option value="1958">1958</option>
                            <option value="1959">1959</option>
                            <option value="1960">1960</option>
                            <option value="1961">1961</option>
                            <option value="1962">1962</option>
                            <option value="1963">1963</option>
                            <option value="1964">1964</option>
                            <option value="1965">1965</option>
                            <option value="1966">1966</option>
                            <option value="1967">1967</option>
                            <option value="1968">1968</option>
                            <option value="1969">1969</option>
                            <option value="1970">1970</option>
                            <option value="1971">1971</option>
                            <option value="1972">1972</option>
                            <option value="1973">1973</option>
                            <option value="1974">1974</option>
                            <option value="1975">1975</option>
                            <option value="1976">1976</option>
                            <option value="1977">1977</option>
                            <option value="1978">1978</option>
                            <option value="1979">1979</option>
                            <option value="1980">1980</option>
                            <option value="1981">1981</option>
                            <option value="1982">1982</option>
                            <option value="1983">1983</option>
                            <option value="1984">1984</option>
                            <option value="1985">1985</option>
                            <option value="1986">1986</option>
                            <option value="1987">1987</option>
                            <option value="1988">1988</option>
                            <option value="1989">1989</option>
                            <option value="1990">1990</option>
                            <option value="1991">1991</option>
                            <option value="1992">1992</option>
                            <option value="1993">1993</option>
                            <option value="1994">1994</option>
                            <option value="1995">1995</option>
                            <option value="1996">1996</option>
                            <option value="1997">1997</option>
                            <option value="1998">1998</option>
                            <option value="1999">1999</option>
                            <option value="2000">2000</option>
                            <option value="2001">2001</option>
                            <option value="2002">2002</option>
                            <option value="2003">2003</option>
                            <option value="2004">2004</option>
                            <option value="2005">2005</option>
                            <option value="2006">2006</option>
                            <option value="2007">2007</option>
                            <option value="2008">2008</option>
                            <option value="2009">2009</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                        </select>
                    </div>
                </div>

                <div class="span6">
                    <h5 class="title_bar">HSC or Equivalent Level*</h5>
                    <div class="form-group">
                        <span class="label">Examination </span>
                        <select name="hsc_exam_type" id="hsc_exam_type" class="form-control">
                            <option selected="selected" value="">Select One</option>
                            <option value="HSC">H.S.C</option>
                            <option value="ALIM">Alim</option>
                            <option value="BUSINESS MANAGEMENT">Business Management</option>
                            <option value="DIPLOMA IN ENGINEERING/AGRICULTURE">
                                Diploma in Engineering/Agriculture
                            </option>
                            <option value="A LEVEL/SR. CAMBRIDGE">
                                A Level/Sr. Cambridge
                            </option>
                            <option value="HSC EQUIVALENT">H.S.C Equivalent</option>
                        </select>

                        <span class="label">Board </span>
                        <select name="hsc_board" id="hsc_board" class="form-control">
                            <option selected="selected" value="">Select One</option>
                            <option value="Dhaka">Dhaka</option>
                            <option value="COMILLA">Comilla</option>
                            <option value="RAJSHAHI">Rajshahi</option>
                            <option value="JESSORE">Jessore</option>
                            <option value="CHITTAGONG">Chittagong</option>
                            <option value="BARISAL">Barisal</option>
                            <option value="SYLHET">Sylhet</option>
                            <option value="DINAJPUR">Dinajpur</option>
                            <option value="MADRASAH">Madrasah</option>
                            <option value="TECHNICAL">Technical</option>
                            <option value="IGCSE">Cambridge International - IGCSE</option>
                            <option value="EDEXCEL INTERNATIONAL">
                                Edexcel International
                            </option>
                            <option value="OTHERS">Others</option>
                        </select>

                        <span class="label">Roll No</span>
                        <input type="text" name="hsc_roll_no" id="hsc_roll_no" class="input-large" placeholder="" />

                        <span class="label">Result </span>
                        <select name="hsc_result" id="hsc_result" class="form-control">
                            <option value="" selected="selected">Select</option>
                            <option value="1">1st Division</option>
                            <option value="2">2nd Division</option>
                            <option value="4">GPA(out of 4)</option>
                            <option value="5">GPA(out of 5)</option>
                        </select>
                        <input name="hsc_gpa" id="hsc_gpa" style="visibility: hidden" size="4" maxlength="4"
                            placeholder="GPA" class="form-control span2" />

                        <span class="label">Group </span>
                        <select name="hsc_group" id="hsc_group" class="form-control">
                            <option selected="selected" value="">Select One</option>
                            <option value="SCIENCE">Science</option>
                            <option value="HUMANITIES">Humanities</option>
                            <option value="BUSINESS STUDIES">Business Studies</option>
                            <option value="Others">Others</option>
                        </select>

                        <span class="label">Passing Year </span>
                        <select class="form-control" name="hsc_pass_year" id="hsc_pass_year">
                            <option selected="selected" value="">Select One</option>
                            <option value="1955">1955</option>
                            <option value="1956">1956</option>
                            <option value="1957">1957</option>
                            <option value="1958">1958</option>
                            <option value="1959">1959</option>
                            <option value="1960">1960</option>
                            <option value="1961">1961</option>
                            <option value="1962">1962</option>
                            <option value="1963">1963</option>
                            <option value="1964">1964</option>
                            <option value="1965">1965</option>
                            <option value="1966">1966</option>
                            <option value="1967">1967</option>
                            <option value="1968">1968</option>
                            <option value="1969">1969</option>
                            <option value="1970">1970</option>
                            <option value="1971">1971</option>
                            <option value="1972">1972</option>
                            <option value="1973">1973</option>
                            <option value="1974">1974</option>
                            <option value="1975">1975</option>
                            <option value="1976">1976</option>
                            <option value="1977">1977</option>
                            <option value="1978">1978</option>
                            <option value="1979">1979</option>
                            <option value="1980">1980</option>
                            <option value="1981">1981</option>
                            <option value="1982">1982</option>
                            <option value="1983">1983</option>
                            <option value="1984">1984</option>
                            <option value="1985">1985</option>
                            <option value="1986">1986</option>
                            <option value="1987">1987</option>
                            <option value="1988">1988</option>
                            <option value="1989">1989</option>
                            <option value="1990">1990</option>
                            <option value="1991">1991</option>
                            <option value="1992">1992</option>
                            <option value="1993">1993</option>
                            <option value="1994">1994</option>
                            <option value="1995">1995</option>
                            <option value="1996">1996</option>
                            <option value="1997">1997</option>
                            <option value="1998">1998</option>
                            <option value="1999">1999</option>
                            <option value="2000">2000</option>
                            <option value="2001">2001</option>
                            <option value="2002">2002</option>
                            <option value="2003">2003</option>
                            <option value="2004">2004</option>
                            <option value="2005">2005</option>
                            <option value="2006">2006</option>
                            <option value="2007">2007</option>
                            <option value="2008">2008</option>
                            <option value="2009">2009</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                        </select>
                    </div>
                </div>
                <div class="clearfix"></div>
                <h5 class="title_bar">Graduation Level*</h5>
                <div class="">
                    <div class="span6">
                        <div class="form-group">
                            <span class="label">Examination </span>
                            <select name="grad_exam_type" id="grad_exam_type" class="form-control">
                                <option value="" selected="selected">Select One</option>

                                <option value="Bachelor Degree (Science Background)">
                                    Bachelor Degree (Science Background)
                                </option>

                                <option value="Bachelor Degree (Arts Background)">
                                    Bachelor Degree (Arts Background)
                                </option>

                                <option value="Bachelor Degree (Commerce Background)">
                                    Bachelor Degree (Commerce Background)
                                </option>

                                <option value="Bachelor Degree (Engineering Background)">
                                    Bachelor Degree (Engineering Background)
                                </option>

                                <option value="Bachelor Degree (Others Background)">
                                    Bachelor Degree (Others Background)
                                </option>
                            </select>

                            <span class="label">Subject</span>
                            <input name="grad_university" id="grad_university" type="text" class="input-large"
                                placeholder="" />
                            <span class="label">University/Institute</span>
                            <input name="grad_university" id="grad_university" type="text" class="input-large"
                                placeholder="" />
                        </div>
                    </div>

                    <div class="span6">
                        <div class="form-group">
                            <span class="label">Result </span>
                            <select name="grad_result" id="grad_result" class="form-control">
                                <option value="" selected="selected">Select One</option>
                                <option value="1">1st Class</option>
                                <option value="2">2nd Class</option>
                                <option value="4">CGPA(out of 4)</option>
                                <option value="5">CGPA(out of 5)</option>
                                <option value="7">Pass</option>
                            </select>
                            <input name="grad_gpa" id="grad_gpa" style="visibility: hidden" size="4" maxlength="4"
                                placeholder="GPA" class="form-control span2" />

                            <span class="label">Passing Year </span>
                            <select name="grad_pass_year" id="grad_pass_year" class="form-control">
                                <option selected="selected" value="">Select One</option>
                                <option value="1967">1967</option>
                                <option value="1968">1968</option>
                                <option value="1969">1969</option>
                                <option value="1970">1970</option>
                                <option value="1971">1971</option>
                                <option value="1972">1972</option>
                                <option value="1973">1973</option>
                                <option value="1974">1974</option>
                                <option value="1975">1975</option>
                                <option value="1976">1976</option>
                                <option value="1977">1977</option>
                                <option value="1978">1978</option>
                                <option value="1979">1979</option>
                                <option value="1980">1980</option>
                                <option value="1981">1981</option>
                                <option value="1982">1982</option>
                                <option value="1983">1983</option>
                                <option value="1984">1984</option>
                                <option value="1985">1985</option>
                                <option value="1986">1986</option>
                                <option value="1987">1987</option>
                                <option value="1988">1988</option>
                                <option value="1989">1989</option>
                                <option value="1990">1990</option>
                                <option value="1991">1991</option>
                                <option value="1992">1992</option>
                                <option value="1993">1993</option>
                                <option value="1994">1994</option>
                                <option value="1995">1995</option>
                                <option value="1996">1996</option>
                                <option value="1997">1997</option>
                                <option value="1998">1998</option>
                                <option value="1999">1999</option>
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                                <option value="2003">2003</option>
                                <option value="2004">2004</option>
                                <option value="2005">2005</option>
                                <option value="2006">2006</option>
                                <option value="2007">2007</option>
                                <option value="2008">2008</option>
                                <option value="2009">2009</option>
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                            </select>

                            <span class="label">Course Duration </span>
                            <select name="grad_duration" id="grad_duration" class="form-control">
                                <option selected="selected" value="">Select One</option>
                                <option value="1">1 Year</option>
                                <option value="2">2 Years</option>
                                <option value="3">3 Years</option>
                                <option value="4">4 Years</option>
                                <option value="5">5 Years</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>
            <h5 class="title_bar">Masters Level (if any)</h5>
            <div class="">
                <div class="span6">
                    <div class="form-group">
                        <span class="label">Examination </span>
                        <select name="ms_exam_type" id="ms_exam_type" class="form-control">
                            <option value="" selected="selected">Select One</option>

                            <option value="Master Degree (Science Background)">
                                Master Degree (Science Background)
                            </option>

                            <option value="Master Degree (Arts Background)">
                                Master Degree (Arts Background)
                            </option>

                            <option value="Master Degree (Commerce Background)">
                                Master Degree (Commerce Background)
                            </option>

                            <option value="Master Degree (Engineering Background)">
                                Master Degree (Engineering Background)
                            </option>

                            <option value="Master Degree (Others Background)">
                                Master Degree (Others Background)
                            </option>
                        </select>

                        <span class="label">Subject</span>
                        <input name="ms_subject" type="text" id="ms_subject" class="form-control" />

                        <span class="label">University/Institute</span>
                        <input name="ms_university" id="ms_university" type="text" class="input-large" placeholder="" />
                    </div>
                </div>

                <div class="span6">
                    <div class="form-group">
                        <span class="label">Result </span>
                        <select name="ms_result" id="ms_result" class="form-control">
                            <option value="" selected="selected">Select One</option>
                            <option value="1">1st Class</option>
                            <option value="2">2nd Class</option>
                            <option value="4">CGPA(out of 4)</option>
                            <option value="5">CGPA(out of 5)</option>
                            <option value="6">Pass</option>
                        </select>
                        <input name="ms_gpa" id="ms_gpa" style="visibility: hidden" size="4" maxlength="4"
                            placeholder="GPA" class="form-control span2" />

                        <span class="label">Passing Year </span>
                        <select name="ms_pass_year" id="ms_pass_year" class="form-control">
                            <option selected="selected" value="">Select One</option>
                            <option value="1967">1967</option>
                            <option value="1968">1968</option>
                            <option value="1969">1969</option>
                            <option value="1970">1970</option>
                            <option value="1971">1971</option>
                            <option value="1972">1972</option>
                            <option value="1973">1973</option>
                            <option value="1974">1974</option>
                            <option value="1975">1975</option>
                            <option value="1976">1976</option>
                            <option value="1977">1977</option>
                            <option value="1978">1978</option>
                            <option value="1979">1979</option>
                            <option value="1980">1980</option>
                            <option value="1981">1981</option>
                            <option value="1982">1982</option>
                            <option value="1983">1983</option>
                            <option value="1984">1984</option>
                            <option value="1985">1985</option>
                            <option value="1986">1986</option>
                            <option value="1987">1987</option>
                            <option value="1988">1988</option>
                            <option value="1989">1989</option>
                            <option value="1990">1990</option>
                            <option value="1991">1991</option>
                            <option value="1992">1992</option>
                            <option value="1993">1993</option>
                            <option value="1994">1994</option>
                            <option value="1995">1995</option>
                            <option value="1996">1996</option>
                            <option value="1997">1997</option>
                            <option value="1998">1998</option>
                            <option value="1999">1999</option>
                            <option value="2000">2000</option>
                            <option value="2001">2001</option>
                            <option value="2002">2002</option>
                            <option value="2003">2003</option>
                            <option value="2004">2004</option>
                            <option value="2005">2005</option>
                            <option value="2006">2006</option>
                            <option value="2007">2007</option>
                            <option value="2008">2008</option>
                            <option value="2009">2009</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                        </select>

                        <span class="label">Course Duration </span>
                        <select name="ms_duration" id="ms_duration" class="form-control">
                            <option selected="selected" value="">Select One</option>
                            <option value="1">1 Year</option>
                            <option value="2">2 Years</option>
                            <option value="3">3 Years</option>
                            <option value="4">4 Years</option>
                            <option value="5">5 Years</option>
                        </select>
                    </div>
                </div>
            </div>
            <hr />
            <div class="control-group">
                <label class="control-label"></label>
                <div class="controls">
                    <label class="checkbox">
                        <input type="checkbox" id="all_correct" name="ssc_exam_type23" value="" />
                        <b>I hereby declare that all the above information are correct and
                            assure that I will abide by all the rules.</b>
                    </label>
                </div>
            </div>
            <!--<div align="center">  <div class="g-recaptcha" data-sitekey="6LdorRETAAAAAGi0XlydtF5jLbCDUF2mk6Zm8suI"></div></div><br>-->
            <div class="control-group" align="center">
                <div class="modal-footer">
                    <div align="center">
                        <button align="center" id="submit" type="submit" class="btn btn-success">
                            Submit
                        </button>
                        <a align="center" href="http://pmit.iitju.edu.bd" class="btn btn-danger">Cancel</a>
                    </div>
                </div>
            </div>



        </form>
    </div>




    <!-- <script src="js/jquery.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/formValidation.js"></script>

    <script>
    $(document).delegate(".online-application-submitting-form", "submit", function(event) {
        event.preventDefault();
        var form = $(this);
        var url = form.attr("action");
        var data = form.serializeArray();

        console.log(url);


        console.log(data);

        $.ajax({
            url: url,
            method: "POST",
            data: data,
        })
    });
    </script>




    <!-- <script type="text/javascript">
    $(document).delegate(".online-application-submitting-form", "submit", function(event) {
        event.preventDefault();

        // let isValid = validateForm();
        // if (isValid)

        var form = $(this);
        var url = form.attr("action");
        var data = form.serializeArray();

        $.ajax({
                url: url,
                method: "POST",
                data: data,

                beforeSend: function(xhr) {
                    $(".loader-display").show();
                },
            })
            .done(function(response) {
                $(".loader-display").hide();

                var obj = jQuery.parseJSON(response);

                if (obj.result == "already_exists") {
                    $(".type").html("দুঃখিত !").css("color", "#d60000");
                    $(".border-bottom").removeClass('succes').addClass('exists')

                } else if (obj.result == "success") {
                    $(".type").html("অভিনন্দন").css("color", "green");
                    $(".border-bottom").removeClass('exists').addClass('succes')
                } else if (obj.result == "error") {
                    $(".type").html("দুঃখিত !").css("color", "#d60000");
                    $(".border-bottom").removeClass('exists').removeClass('succes').addClass('danger')
                }

                if (Object.keys(obj).length) {
                    $(".custom-modal--overlay").removeClass("hidden");
                    $(".message-type").html(obj.message);
                    // Reset form fields upon successful submission
                    $('.online-application-submitting-form')[0].reset();
                }

                $(".custom-modal--overlay").click(function() {
                    $(this).addClass("hidden");
                });
            })
            .fail(function(jqXHR, textStatus) {
                // Handle failure if needed
            });


        return false;
    });
    </script> -->




</body>

</html>