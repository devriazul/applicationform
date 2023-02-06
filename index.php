<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Application Form</title>
    <style>
        .error {
            padding-left: 6px;
            color: red;
        }
        .spn-msg {
            padding: 7px;
            margin-top: 4px;
            margin-bottom: 10px;
            color: #0db10d;
            font-size: 25px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container ">
        <div class="row">
            <div class="col-md-10 text-center m-auto">
                <div class="card-heading text-center">
                    <h3 class="title"><img src="https://www.boosteducationservice.co.uk/wp-content/uploads/2020/09/logo-white.png" alt="" srcset="">
                        <h1 class="title">Application Form</h1>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-lg-10 mx-auto">
                <div class="card mx-auto bg-light">
                    <div class="card-body bg-light">
                        <div class="container">
                        <form id="formid" action="#">
                                <div class="controls">
                                <span style="display: none;" id="show-message" class="spn-msg"></span>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_name">Name *</label>
                                                <input type="text" id="full_name" name="full_name" class="form-control" placeholder="Name *">

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_lastname">Email Address *</label>
                                                <input id="email" type="email" id="email" name="email" class="form-control" placeholder="Email *">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_email">Tel/ Mobile Number *</label>
                                                <input type="text" name="phone" id="phone" class="form-control" placeholder="Tel/ Mobile Number *" data-error="Valid email is required.">

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_need">Nationality *</label>
                                                <input type="text" name="nationality" id="nationality" class="form-control" placeholder="Tel/ Mobile Number *">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_message">Address *</label>
                                                <textarea name="address" id="address" class="form-control" placeholder="Please enter your address." rows="2"></textarea>
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_message">Previus Address * <small>(If you are not 5 years at
                                                    current address)</small></label>
                                                <textarea name="previous_address" id="previous_address" class="form-control" placeholder="Please enter your previus address." rows="2"></textarea>
                                            </div>

                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="form_email">Have you started an undergraduate or postgraduate course of higher education in any country since leaving school? *</label>
                                                <div class="">
                                                    <input value="Have you started an undergraduate or postgraduate course of higher education in any country since leaving school?" type="hidden" name="have_you_started_ques" id="have_you_started_ques"/>
                                                    <label class="radio-container mr-3">Yes
                                                        <input type="radio" value="yes" name="have_you_started_ans" id="have_you_started_ans">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="radio-container">No
                                                        <input type="radio" value="no" name="have_you_started_ans" id="have_you_started_ans">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_message">Date of Birth * </label>
                                                <input class="form-control" id="date_of_birth" name="date_of_birth" type="date" name="DOB">
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input value="Date of entry in the Uk?" type="hidden" name="date_of_entry_in_uk_ques" id="date_of_entry_in_uk_ques" />
                                                <label for="form_message">Date of entry in the Uk? * </label>
                                                <input class="form-control" id="date_of_entry_in_uk_ans" type="date" name="date_of_entry_in_uk_ans">
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_email">Have you ever study in uk? *</label>
                                                <div class="">
                                                    <input value="Have you ever study in uk?" type="hidden" name="have_you_ever_study_in_uk_ques" id="have_you_ever_study_in_uk_ques" />
                                                    <label class="radio-container mr-3">Yes
                                                        <input type="radio" value="yes" id="have_you_ever_study_in_uk_ans" name="have_you_ever_study_in_uk_ans">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="radio-container">No
                                                        <input value="no" type="radio" id="have_you_ever_study_in_uk_ans" name="have_you_ever_study_in_uk_ans">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_email">Have you ever apply for student finance? *</label>
                                                <div class="">
                                                    <input value="Have you ever apply for student finance?" type="hidden" id="have_you_ever_apply_for_student_finance_ques" name="have_you_ever_apply_for_student_finance_ques" />
                                                    <label class="radio-container mr-3">Yes
                                                        <input value="yes" type="radio" id="have_you_ever_apply_for_student_finance_ans" name="have_you_ever_apply_for_student_finance_ans">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="radio-container">No
                                                        <input value="no" type="radio" id="have_you_ever_apply_for_student_finance_ans" name="have_you_ever_apply_for_student_finance_ans">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="form_email">Interest Course *</label>
                                                <div class="">
                                                    <input type="hidden" value="Interest Course" name="interested_subject_ques" id="interested_subject_ques" />
                                                    <input id="interested_subject_ans" name="interested_subject_ans" class="form-control" type="text" placeholder="Type your course name here">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <p>Accept all our privacy & policy?</p>
                                            <p>
                                                <small>
                                                    <a href="#collapseItem1" data-toggle="collapse">Read Privacy Policy...</a>
                                                    <p id="collapseItem1" class="collapse">
                                                        <b>Data Protection:</b> I agree to the Boost Education Service Ltd 
                                                    processing personal data contained in this form. I agree to the processing of such data for any purposes connected with my studies or my health and safety whilst on the premises or for any legitimate reason including communication with me following the completion of my studies. In addition, I agree to the Boost Education Service Ltd processing personal data described as Special Category Data as defined under the General Data Protection Regulation(GDPR), such processing to be undertaken for any purposes as indicated in the declaration above. <br><br>
                                                        <b>Declaration:</b> I confirm that the information given on this form is true, complete and accurate and that none of the information requested or other material information has been omitted. I accept that if it is discovered that I have supplied false, inaccurate or misleading information, Boost Education Service reserves the right to cancel my application, withdraw its offer of a place or terminate attendance at the University and I shall have no claim against Boost Education Service in relation thereto.
                                                    </p>
                                                </small>
                                            </p>
                                            <div class="pt-2">
                                                <label class="radio-container mr-3">Yes
                                                    <input type="radio" checked="checked" name="existbtn">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="radio-container">No
                                                    <input type="radio" name="existbtn">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button id="submit-btn" class="btn btn-success  p-2 d-block m-auto">Apply now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>


                </div>
                <!-- /.8 -->

            </div>
            <!-- /.row-->

        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#formid').validate({
                rules: {
                    full_name: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    phone: {
                        required: true,
                    },
                    nationality: {
                        required: true,
                    },
                    address: {
                        required: true,
                    },
                    previous_address: {
                        required: true,
                    },
                    have_you_started_ans: {
                        required: true,
                    },
                    date_of_birth: {
                        required: true,
                    },
                    date_of_entry_in_uk_ans: {
                        required: true,
                    },
                    have_you_ever_study_in_uk_ans: {
                        required: true,
                    },
                    have_you_ever_apply_for_student_finance_ans: {
                        required: true,
                    },
                    interested_subject_ans: {
                        required: true,
                    },
                    
                },
                messages: {
                    full_name: {
                        required: "Name Field Is Required!"
                    },
                    email: {
                        required: "Email Field Is Required!",
                        email: "Email Must be Valid Email Address!"
                    },
                    phone: {
                        required: "Phone Field Is Required!"
                    },
                    nationality: {
                        required: "Nationality Field Is Required!"
                    },
                    address: {
                        required: "Address Field Is Required!"
                    },
                    previous_address: {
                        required: "Previous Address Field Is Required!"
                    },
                    have_you_started_ans: {
                        required: "Please Select Any One!"
                    },
                    date_of_birth: {
                        required: "Date Of Birth Field is Required!"
                    },
                    date_of_entry_in_uk_ans: {
                        required: "Date of Entry In UK Field is Required!"
                    },
                    interested_subject_ans: {
                        required: "Interested Subject Field is Required!"
                    },
                },
                submitHandler: function(form) {
                    $('#submit-btn').prop('disabled', true);
                    var dataval = {
                        full_name: $('#full_name').val(),
                        email: $('#email').val(),
                        phone: $('#phone').val(),
                        address: $('#address').val(),
                        previous_address: $('#previous_address').val(),
                        nationality: $('#nationality').val(),
                        have_you_started_ques: $('#have_you_started_ques').val(),
                        have_you_started_ans: $('#have_you_started_ans:checked').val(),
                        date_of_birth: $('#date_of_birth').val(),
                        date_of_entry_in_uk_ques: $('#date_of_entry_in_uk_ques').val(),
                        date_of_entry_in_uk_ans: $('#date_of_entry_in_uk_ans').val(),
                        have_you_ever_study_in_uk_ques: $('#have_you_ever_study_in_uk_ques').val(),
                        have_you_ever_study_in_uk_ans: $('#have_you_ever_study_in_uk_ans:checked').val(),
                        have_you_ever_apply_for_student_finance_ques: $('#have_you_ever_apply_for_student_finance_ques').val(),
                        have_you_ever_apply_for_student_finance_ans: $('#have_you_ever_apply_for_student_finance_ans:checked').val(),
                        interested_subject_ques: $('#interested_subject_ques').val(),
                        interested_subject_ans: $('#interested_subject_ans').val(),
                        
                    };
                    $.post("http://127.0.0.1:8000/api/create-lead-uk/", dataval, function(data, status) {
                        console.log(data);
                        if (data['result']['key'] === 101) {
                            $('#submit-btn').prop('disabled', false);
                            alert(data['result']['val']);
                        }
                        if (data['result']['key'] === 200) {
                            $('#submit-btn').prop('disabled', false);
                            $("#formid")[0].reset();
                            $("#show-message").show();
                            $("#show-message").html(data['result']['val']);
                            window.scrollTo(0, 0);
                        }

                    });
                }
            });
        });
    </script>
</body>

</html>