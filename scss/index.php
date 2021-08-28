<html>
<head>
<title>checkout page</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js" ></script>
</head>
<body>
<section>
<!-- <div class="" id="billing_details" style="z-index: 2;position: fixed;top: 50%;left: 50%;transform: translate(-50%, -50%);width: fit-content;background: white;padding: 2%;border-radius: 5%;border: 1px solid transparent;box-shadow: 0 2px 5px 1px rgb(64 60 67 / 16%);"> -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Fill Your Details Before Payment</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">FULL NAME:</label>
						<input type="text" class="form-control" id="student_name">
					</div>
					<div class="form-group">
						<label for="message-text" class="col-form-label">EMAIL ID:</label>
						<input type="text"  class="form-control" id="student_email"></input>
					</div>
					<div class="form-group">
						<label for="message-text" class="col-form-label">PHONE NUMBER:</label>
						<input type="text" class="form-control" id="student_phone"></input>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-warning" onclick="reset_form_data()">RESET</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">CLOSE</button>
				<button type="button" class="btn btn-success" onclick="proceed_to_payment()">PROCEED TO PAYMENT</button>			
			</div>
		</div>
	</div>
</div>	
<div class="row">
	<div class="col-lg-8">
		<div class="card wish-list">
			<div class="card-body">
				<center>
					<h5 class=""><b>SELECT COURSES TO PURCHASE</b></h5>
				</center>
				<div class="row">						
					<div class="col-lg-6" id="courses_checkboxes">
					<hr>
					<p><b>Special Courses:</b></p>
						<div class="form-check">
							<label><input type="checkbox" value="TTFFS21" id="TTFFS21" onclick="checked_unchecked_courses(this)" /> 20-20 and 50-50 Series 2021</label>
							<a href="https://synopsisias.in/special-courses/01-20-20-and-50-50-series-2021/" class="float-right" target="_blank">view</a>
						</div>
						<div class="form-check">
							<label><input type="checkbox" value="PT360" id="PT360" onclick="checked_unchecked_courses(this)" /> PT360</label>
							<a href="https://synopsisias.in/special-courses/pt360/" class="float-right"  target="_blank">view</a>
						</div>
						<div class="form-check">
							<label><input type="checkbox" value="MSGP2" id="MSGP2" onclick="checked_unchecked_courses(this)"  /> Mains seat Guarantee programme (MSGP 2)</label>
							<a href="https://synopsisias.in/special-courses/03-mains-seat-guarantee-programme-msgp/" class="float-right"  target="_blank">view</a>
						</div>
						<div class="form-check">
							<label><input type="checkbox" value="MSGP3" id="MSGP3" onclick="checked_unchecked_courses(this)"  /> Mains seat Guarantee programme (MSGP 3)</label>
							<a href="https://synopsisias.in/special-courses/03-mains-seat-guarantee-programme-msgp/" class="float-right"  target="_blank">view</a>
						</div>
						<div class="form-check">
							<label><input type="checkbox" value="M300T21" id="M300T21" onclick="checked_unchecked_courses(this)" /> Mains in 300 Topics 2021</label>
							<a href="https://synopsisias.in/special-courses/mains-in-300-topics/" class="float-right" target="_blank">view</a>
						</div>
						<div class="form-check">
							<label><input type="checkbox" value="MAB" id="MAB" onclick="checked_unchecked_courses(this)" /> Mains Answer Building</label>
							<a href="https://synopsisias.in/special-courses/mains-answer-building/" class="float-right" target="_blank">view</a>
						</div>
						<div class="form-check">
							<label><input type="checkbox" value="GS4E21" id="GS4E21" onclick="checked_unchecked_courses(this)" /> GS 4 Ethics 2021</label>
							<a href="https://synopsisias.in/special-courses/gs-4/" class="float-right" target="_blank">view</a>
						</div>
						<div class="form-check">
							<label><input type="checkbox" value="CSAT" id="CSAT" onclick="checked_unchecked_courses(this)"  /> CSAT</label>
							<a href="https://synopsisias.in/special-courses/07-csat/" class="float-right" target="_blank">view</a>
						</div>
						<hr>
						<p><b>GS Foundation Course (Classroom + Test Series):</b></p>
						<div class="form-check">
							<label><input type="checkbox" value="PMEF21" id="PMEF21" onclick="checked_unchecked_courses(this)"/> Prelims + Mains + Essay Foundation 2021 (Classroom + Test Series)</label>
							<a href="#" class="float-right" target="_blank" >view</a>
						</div>
						<div class="form-check">
							<label><input type="checkbox" value="PMEF22" id="PMEF22" onclick="checked_unchecked_courses(this)" /> Prelims + Mains + Essay Foundation 2022 (Classroom + Test Series)</label>
							<a href="#" class="float-right" target="_blank">view</a>
						</div>
						<div class="form-check">
							<label><input type="checkbox" value="PMEF23" id="PMEF23" onclick="checked_unchecked_courses(this)" /> Prelims + Mains + Essay Foundation 2023 (Classroom + Test Series)</label>
							<a href="#" class="float-right" target="_blank">view</a>
						</div>
						<hr>
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#gsts21"><b>GS TEST SERIES(2021)</b></a>

							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#gsts22"><b>2022</b></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#gsts23"><b>2023</b></a>
							</li>
						</ul>
  						<div class="tab-content">
    						<div id="gsts21" class="container tab-pane active"><br>
								<div class="form-check">
									<label><input type="checkbox" value="PTS21" id="PTS21" onclick="checked_unchecked_courses(this)" /> Prelims Test Series 2021</label>
									<a href="#" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="GSMTS21" id="GSMTS21" onclick="checked_unchecked_courses(this)" /> GS Mains Test Series 2021</label>
									<a href="#" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="ETS21" id="ETS21" onclick="checked_unchecked_courses(this)" /> Essay Test Series 2021</label>
									<a href="#" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="PMTS21" id="PMTS21" onclick="checked_unchecked_courses(this)" /> Prelims + Mains Test Series 2021</label>
									<a href="#" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="PMETS21" id="PMETS21" onclick="checked_unchecked_courses(this)" /> Prelims + Mains + Essay Test Series 2021</label>
									<a href="#" class="float-right" target="_blank">view</a>
								</div>
    						</div>
    						<div id="gsts22" class="container tab-pane fade"><br>
								<div class="form-check">
									<label><input type="checkbox" value="PTS22" id="PTS22" onclick="checked_unchecked_courses(this)" /> Prelims Test Series 2022</label>
									<a href="#" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="GSMTS22" id="GSMTS22" onclick="checked_unchecked_courses(this)"/> GS Mains Test Series 2022</label>									
									<a href="#" class="float-right" target="_blank">view</a>
								</div>
								
								<div class="form-check">
									<label><input type="checkbox" value="ETS22" id="ETS22" onclick="checked_unchecked_courses(this)" /> Essay Test Series 2022</label>
									<a href="#" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="PMTS22" id="PMTS22" onclick="checked_unchecked_courses(this)" /> Prelims + Mains Test Series 2022</label>
									<a href="#" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="PMETS22" id="PMETS22" onclick="checked_unchecked_courses(this)" /> Prelims + Mains + Essay Test Series 2022</label>
									<a href="#" class="float-right" target="_blank">view</a>
								</div>
    						</div>
    						<div id="gsts23" class="container tab-pane fade"><br>
      							<div class="form-check">
									<label><input type="checkbox" value="PTS23" id="PTS23" onclick="checked_unchecked_courses(this)" /> Prelims Test Series 2023</label>
									<a href="#" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="GSMTS23" id="GSMTS23" onclick="checked_unchecked_courses(this)" /> GS Mains Test Series 2023</label>
									<a href="#" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="ETS23" id="ETS23" onclick="checked_unchecked_courses(this)" /> Essay Test Series 2023</label>
									<a href="#" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="PMTS23" id="PMTS23" onclick="checked_unchecked_courses(this)" /> Prelims + Mains Test Series 2023</label>
									<a href="#" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="PMETS23" id="PMETS23" onclick="checked_unchecked_courses(this)" /> Prelims + Mains + Essay Test Series 2023</label>
									<a href="#" class="float-right" target="_blank">view</a>
								</div>
    						</div>
  						</div>
						<hr>
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#gscl21"><b>GS CLASSROOM(2021)</b></a>
								
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#gscl22"><b>2022</b></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#gscl23"><b>2023</b></a>
							</li>
						</ul>
  						<div class="tab-content">
    						<div id="gscl21" class="container tab-pane active"><br>
								<div class="form-check">
									<label><input type="checkbox" value="P21" id="P21" onclick="checked_unchecked_courses(this)" /> Prelims 2021</label>
									<a href="https://synopsisias.in/gs-classroom/course-details/" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="M21" id="M21" onclick="checked_unchecked_courses(this)" /> Mains 2021</label>
									<a href="https://synopsisias.in/gs-mains-classroom/" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="E21" id="E21" onclick="checked_unchecked_courses(this)" /> Essay 2021</label>
									<a href="https://synopsisias.in/essay-gs-classroom/" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="PMC21" id="PMC21" onclick="checked_unchecked_courses(this)" /> Prelims + Mains Combo 2021</label>
									<a href="https://synopsisias.in/gs-classroom/course-details/" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="PMEC21" id="PMEC21" onclick="checked_unchecked_courses(this)" /> Prelims + Mains + Essay Combo 2021</label>
									<a href="https://synopsisias.in/gs-classroom/course-details/" class="float-right" target="_blank">view</a>
								</div>
    						</div>
    						<div id="gscl22" class="container tab-pane fade"><br>
								<div class="form-check">
									<label><input type="checkbox" value="P22" id="P22" onclick="checked_unchecked_courses(this)"/> Prelims 2022</label>
									<a href="https://synopsisias.in/gs-classroom/course-details/" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="P22" id="P22" onclick="checked_unchecked_courses(this)"/> Mains 2022</label>
									<a href="https://synopsisias.in/gs-mains-classroom/" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="E22" id="E22" onclick="checked_unchecked_courses(this)"/> Essay 2022</label>
									<a href="https://synopsisias.in/essay-gs-classroom/" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="PMC22" id="PMC22" onclick="checked_unchecked_courses(this)" /> Prelims + Mains Combo 2022</label>
									<a href="https://synopsisias.in/gs-classroom/course-details/" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="PMEC22" id="PMEC22" onclick="checked_unchecked_courses(this)" /> Prelims + Mains + Essay Combo 2022</label>
									<a href="https://synopsisias.in/gs-classroom/course-details/" class="float-right" target="_blank">view</a>
								</div>
    						</div>
    						<div id="gscl23" class="container tab-pane fade"><br>
								<div class="form-check">
									<label><input type="checkbox" value="P23" id="P23" onclick="checked_unchecked_courses(this)" /> Prelims 2023</label>
									<a href="https://synopsisias.in/gs-classroom/course-details/" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="M23" id="M23" onclick="checked_unchecked_courses(this)"/> Mains 2023</label>
									<a href="https://synopsisias.in/gs-mains-classroom/" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="E23" id="E23" onclick="checked_unchecked_courses(this)"/> Essay 2023</label>
									<a href="https://synopsisias.in/essay-gs-classroom/" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="PMC23" id="PMC23" onclick="checked_unchecked_courses(this)" /> Prelims + Mains Combo 2023</label>
									<a href="https://synopsisias.in/gs-classroom/course-details/" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="PMEC23" id="PMEC23" onclick="checked_unchecked_courses(this)" /> Prelims + Mains + Essay Combo 2023</label>
									<a href="https://synopsisias.in/gs-classroom/course-details/" class="float-right" target="_blank">view</a>
								</div>
    						</div>
  						</div>
					</div>	
					<hr>
					<div class="col-lg-6">
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#gocl"><b>Geography Optional Classroom</b></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#gots"><b>Test Series</b></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#goclts" title="Classroom & Test series" ><b >Foundation</b></a>
							</li>
						</ul>
  						<div class="tab-content">
    						<div id="gocl" class="container tab-pane active"><br>
								<div class="form-check">
									<label><input type="checkbox" value="GOC21" id="GOC21" onclick="checked_unchecked_courses(this)" /> BUY NOW for 2021 @ Rs. 13500</label>
									<a href="https://synopsisias.in/optionals/geography/" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="GOC22" id="GOC22" onclick="checked_unchecked_courses(this)" /> BUY NOW for 2022 @ Rs. 15500</label>
									<a href="https://synopsisias.in/optionals/geography/" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="GOC23" id="GOC23" onclick="checked_unchecked_courses(this)" /> BUY NOW for 2023 @ Rs. 18000</label>
									<a href="https://synopsisias.in/optionals/geography/" class="float-right" target="_blank">view</a>
								</div>							
    						</div>
    						<div id="gots" class="container tab-pane fade"><br>
								<div class="form-check">
									<label><input type="checkbox" value="GOTS21" id="GOTS21" onclick="checked_unchecked_courses(this)" /> BUY NOW for 2021 @ Rs. 13500</label>
									<a href="https://synopsisias.in/optionals/geography/" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="GOTS22" id="GOTS22" onclick="checked_unchecked_courses(this)"/> BUY NOW for 2022 @ Rs. 15500</label>
									<a href="https://synopsisias.in/optionals/geography/" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="GOTS23" id="GOTS23" onclick="checked_unchecked_courses(this)"/> BUY NOW for 2023 @ Rs. 18000</label>
									<a href="https://synopsisias.in/optionals/geography/" class="float-right" target="_blank">view</a>
								</div>		
    						</div>
    						<div id="goclts" class="container tab-pane fade"><br>
								<div class="form-check">
									<label><input type="checkbox" value="GOF21" id="GOF21" onclick="checked_unchecked_courses(this)" /> BUY NOW for 2021 @ ₹ 24999</label>
									<a href="https://synopsisias.in/optionals/geography/" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="GOF22" id="GOF22" onclick="checked_unchecked_courses(this)" /> BUY NOW for 2022 @ ₹ 28000</label>
									<a href="https://synopsisias.in/optionals/geography/" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="GOF23" id="GOF23" onclick="checked_unchecked_courses(this)"/> BUY NOW for 2023 @ ₹ 34000</label>
									<a href="https://synopsisias.in/optionals/geography/" class="float-right" target="_blank">view</a>
								</div>		
    						</div>
  						</div>
						<hr>
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#psopcl"><b>PSIR Optional Classroom</b></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#psts"><b>Test Series</b></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#psclts" title="Classroom & Test series" ><b>Foundation</b></a>
							</li>
						</ul>
  						<div class="tab-content">
    						<div id="psopcl" class="container tab-pane active"><br>
								<div class="form-check">
									<label><input type="checkbox" value="PSIROC21" id="PSIROC21" onclick="checked_unchecked_courses(this)" /> BUY NOW for 2021 @ Rs. 13500</label>
									<a href="https://synopsisias.in/optionals/psir/" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="PSIROC22" id="PSIROC22" onclick="checked_unchecked_courses(this)"/> BUY NOW for 2022 @ Rs. 15500</label>
									<a href="https://synopsisias.in/optionals/psir/" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="PSIROC23" id="PSIROC23" onclick="checked_unchecked_courses(this)"/> BUY NOW for 2023 @ Rs. 18000</label>
									<a href="https://synopsisias.in/optionals/psir/" class="float-right" target="_blank">view</a>
								</div>							
    						</div>
    						<div id="psts" class="container tab-pane fade"><br>
								<div class="form-check">
									<label><input type="checkbox" value="PSIRTS21" id="PSIRTS21" onclick="checked_unchecked_courses(this)"/> BUY NOW for 2021 @ Rs. 13500</label>
									<a href="https://synopsisias.in/optionals/psir/" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="PSIRTS22" id="PSIRTS22" onclick="checked_unchecked_courses(this)"/> BUY NOW for 2022 @ Rs. 15500</label>
									<a href="https://synopsisias.in/optionals/psir/" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="PSIRTS23" id="PSIRTS23" onclick="checked_unchecked_courses(this)"/> BUY NOW for 2023 @ Rs. 18000</label>
									<a href="https://synopsisias.in/optionals/psir/" class="float-right" target="_blank">view</a>
								</div>		
    						</div>
    						<div id="psclts" class="container tab-pane fade"><br>
								<div class="form-check">
									<label><input type="checkbox" value="PSIROCF21" id="PSIROCF21" onclick="checked_unchecked_courses(this)"/> BUY NOW for 2021 @ ₹ 24999</label>
									<a href="https://synopsisias.in/optionals/psir/" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="PSIROCF22" id="PSIROCF22" onclick="checked_unchecked_courses(this)"/> BUY NOW for 2022 @ ₹ 28000</label>
									<a href="https://synopsisias.in/optionals/psir/" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="PSIROCF23" id="PSIROCF23" onclick="checked_unchecked_courses(this)"/> BUY NOW for 2023 @ ₹ 34000</label>
									<a href="https://synopsisias.in/optionals/psir/" class="float-right" target="_blank">view</a>
								</div>		
    						</div>
  						</div>
						<hr>
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#soopcl"><b>Sociology Optional Classroom</b></a>
								
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#sots"><b>Test Series</b></a>
								
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#soclts" title="Classroom & Test series" ><b >Foundation</b></a>
								
							</li>
						</ul>
  						<div class="tab-content">
    						<div id="soopcl" class="container tab-pane active"><br>
								<div class="form-check">
									<label><input type="checkbox" value="SO21" id="SO21" onclick="checked_unchecked_courses(this)"/> BUY NOW for 2021 @ Rs. 13500</label>
									<a href="https://synopsisias.in/optionals/sociology-optional/" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="SO22" id="SO22" onclick="checked_unchecked_courses(this)"/> BUY NOW for 2022 @ Rs. 15500</label>
									<a href="https://synopsisias.in/optionals/sociology-optional/" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="SO23" id="SO23" onclick="checked_unchecked_courses(this)"/> BUY NOW for 2023 @ Rs. 18000</label>
									<a href="https://synopsisias.in/optionals/sociology-optional/" class="float-right" target="_blank">view</a>
								</div>							
    						</div>
    						<div id="sots" class="container tab-pane fade"><br>
								<div class="form-check">
									<label><input type="checkbox" value="SOTS21" id="SOTS21" onclick="checked_unchecked_courses(this)"/> BUY NOW for 2021 @ Rs. 13500</label>
									<a href="https://synopsisias.in/optionals/sociology-optional/" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="SOTS22" id="SOTS22" onclick="checked_unchecked_courses(this)"/> BUY NOW for 2022 @ Rs. 15500</label>
									<a href="https://synopsisias.in/optionals/sociology-optional/" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="SOTS23" id="SOTS23" onclick="checked_unchecked_courses(this)"/> BUY NOW for 2023 @ Rs. 18000</label>
									<a href="https://synopsisias.in/optionals/sociology-optional/" class="float-right" target="_blank">view</a>
								</div>		
    						</div>
    						<div id="soclts" class="container tab-pane fade"><br>
								<div class="form-check">
									<label><input type="checkbox" value="SOF21" id="SOF21" onclick="checked_unchecked_courses(this)"/> BUY NOW for 2021 @ ₹ 24999</label>
									<a href="https://synopsisias.in/optionals/sociology-optional/" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="SOF22" id="SOF22" onclick="checked_unchecked_courses(this)"/> BUY NOW for 2022 @ ₹ 28000</label>
									<a href="https://synopsisias.in/optionals/sociology-optional/" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="SOF23" id="SOF23" onclick="checked_unchecked_courses(this)"/> BUY NOW for 2023 @ ₹ 34000</label>
									<a href="https://synopsisias.in/optionals/sociology-optional/" class="float-right" target="_blank">view</a>
								</div>		
    						</div>
  						</div>
						<hr>
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#paopcl"><b>Public Admin. Optional Classroom</b></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#pats"><b>Test Series</b></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#paclts" title="Classroom & Test series" ><b >Foundation</b></a>
							</li>
						</ul>
  						<div class="tab-content">
    						<div id="paopcl" class="container tab-pane active"><br>
								<div class="form-check">
									<label><input type="checkbox" value="PAOC21" id="PAOC21" onclick="checked_unchecked_courses(this)" /> BUY NOW for 2021 @ Rs. 13500</label>
									<a href="https://synopsisias.in/optionals/public-administration/" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="PAOC22" id="PAOC22" onclick="checked_unchecked_courses(this)"/> BUY NOW for 2022 @ Rs. 15500</label>
									<a href="https://synopsisias.in/optionals/public-administration/" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="PAOC23" id="PAOC23" onclick="checked_unchecked_courses(this)"/> BUY NOW for 2023 @ Rs. 18000</label>
									<a href="https://synopsisias.in/optionals/public-administration/" class="float-right" target="_blank">view</a>
								</div>							
    						</div>
    						<div id="pats" class="container tab-pane fade"><br>
								<div class="form-check">
									<label><input type="checkbox" value="PAOCTS21" id="PAOCTS21" onclick="checked_unchecked_courses(this)" /> BUY NOW for 2021 @ Rs. 13500</label>
									<a href="https://synopsisias.in/optionals/public-administration/" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="PAOCTS22" id="PAOCTS22" onclick="checked_unchecked_courses(this)"/> BUY NOW for 2022 @ Rs. 15500</label>
									<a href="https://synopsisias.in/optionals/public-administration/" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="PAOCTS23"  id="PAOCTS23" onclick="checked_unchecked_courses(this)"/> BUY NOW for 2023 @ Rs. 18000</label>
									<a href="https://synopsisias.in/optionals/public-administration/" class="float-right" target="_blank">view</a>
								</div>		
    						</div>
    						<div id="paclts" class="container tab-pane fade"><br>
								<div class="form-check">
									<label><input type="checkbox" value="PAOCF21" id="PAOCF21" onclick="checked_unchecked_courses(this)"/> BUY NOW for 2021 @ ₹ 24999</label>
									<a href="https://synopsisias.in/optionals/public-administration/" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="PAOCF22" id="PAOCF22" onclick="checked_unchecked_courses(this)"/> BUY NOW for 2022 @ ₹ 28000</label>
									<a href="https://synopsisias.in/optionals/public-administration/" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="PAOCF23" id="PAOCF23" onclick="checked_unchecked_courses(this)"/> BUY NOW for 2023 @ ₹ 34000</label>
									<a href="https://synopsisias.in/optionals/public-administration/" class="float-right" target="_blank">view</a>
								</div>		
    						</div>
  						</div>
						<hr>
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#geopcl"><b>Geology Optional Classroom</b></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#gets"><b>Test Series</b></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#geclts" title="Classroom & Test series" ><b >Foundation</b></a>
							</li>
						</ul>
  						<div class="tab-content">
    						<div id="geopcl" class="container tab-pane active"><br>
								<div class="form-check">
									<label><input type="checkbox" value="PAOC21" id="PAOC21" onclick="checked_unchecked_courses(this)" /> BUY NOW for 2021 @ Rs. 13500</label>
									<a href="https://synopsisias.in/optionals/geology/" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="PAOC22" id="PAOC22" onclick="checked_unchecked_courses(this)"/> BUY NOW for 2022 @ Rs. 15500</label>
									<a href="https://synopsisias.in/optionals/geology/" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="PAOC23" id="PAOC23" onclick="checked_unchecked_courses(this)"/> BUY NOW for 2023 @ Rs. 18000</label>
									<a href="https://synopsisias.in/optionals/geology/" class="float-right" target="_blank">view</a>
								</div>							
    						</div>
    						<div id="gets" class="container tab-pane fade"><br>
								<div class="form-check">
									<label><input type="checkbox" value="PAOCTS21" id="PAOCTS21" onclick="checked_unchecked_courses(this)" /> BUY NOW for 2021 @ Rs. 13500</label>
									<a href="https://synopsisias.in/optionals/geology/" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="PAOCTS22" id="PAOCTS22" onclick="checked_unchecked_courses(this)"/> BUY NOW for 2022 @ Rs. 15500</label>
									<a href="https://synopsisias.in/optionals/geology/" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="PAOCTS23"  id="PAOCTS23" onclick="checked_unchecked_courses(this)"/> BUY NOW for 2023 @ Rs. 18000</label>
									<a href="https://synopsisias.in/optionals/geology/" class="float-right" target="_blank">view</a>
								</div>		
    						</div>
    						<div id="geclts" class="container tab-pane fade"><br>
								<div class="form-check">
									<label><input type="checkbox" value="PAOCF21" id="PAOCF21" onclick="checked_unchecked_courses(this)"/> BUY NOW for 2021 @ ₹ 24999</label>
									<a href="https://synopsisias.in/optionals/geology/" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="PAOCF22" id="PAOCF22" onclick="checked_unchecked_courses(this)"/> BUY NOW for 2022 @ ₹ 28000</label>
									<a href="https://synopsisias.in/optionals/geology/" class="float-right" target="_blank">view</a>
								</div>
								<div class="form-check">
									<label><input type="checkbox" value="PAOCF23" id="PAOCF23" onclick="checked_unchecked_courses(this)"/> BUY NOW for 2023 @ ₹ 34000</label>
									<a href="https://synopsisias.in/optionals/geology/" class="float-right" target="_blank">view</a>
								</div>		
    						</div>
  						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<div class="col-lg-4" id="billing_amount" >
		<div class="card wish-list">
			<center>
				<h5 class="m-3"><b>BILLING AMOUNT</b></h5>
			</center>
			<div class="card-body">
				<div class="row">
					<div class="col-6">
						<h5 class="mb-3">Courses</h5>
					</div>
					<div class="col-6">
						<h5 class="mb-3 float-right">Amount</h5>
					</div>
				</div>
				<hr>
				<ul class="list-group list-group-flush">				
					<div class="row" style="display: flex;justify-content: space-between;padding: 25px;">
						<div id="print_course_name" class="float-left" ></div>			
						<div id="print_course_fee" class="float-right" ></div>			
					</div>
				</ul>
				<hr>
				<li class="list-group-item d-flex justify-content-between align-items-center border-0">
					<div>
						<strong>Total amount:</strong>
					</div>
					<span>
						<strong class="row">
							<i class="fas fa-rupee-sign">&nbsp;</i>
							<div id="total_amount" style="line-height: 15px;">
							</div>
						</strong>
					</span>	
				</li>
				<hr>
				<div class="row" id="hide_discount_coupon">
					<div class="col-8">	
						<input type="text" class="form-control" id="coupon_code" placeholder="Discount Coupon...">
					</div>
					<div class="col-3" style="text-align: center;">
						<button type="submit" class="btn btn-primary" style="padding-left: 50%; padding-right: 50%;" onclick="apply_coupon()">Apply</button>
					</div>
				</div>			
				<hr>
				<li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
					<div>
						<strong>Total amount after Discount:</strong>
					</div>
					<span>
						<strong>
							<div class="row">
								<i class="fas fa-rupee-sign"><div id="amount_after_discount"></div></i>
							</div>				
						</strong>
					</span>
				</li>
				<hr>
				<button type="button" class="btn btn-success btn-block waves-effect waves-light" id="next_click"  data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">NEXT</button>
				</div>	
				
			</div>
		</div>
	</div>
</div>	
</section>
</body>
<script>
			$(document).ready(function(){
				$('#next_click').hide();
				$('#hide_discount_coupon').hide();				
			});
			
			$(document).ready(function () {
				$('.mdb-select').materialSelect();
				$('.select-wrapper.md-form.md-outline input.select-dropdown').bind('focus blur', function () {
				$(this).closest('.select-outline').find('label').toggleClass('active');
				$(this).closest('.select-outline').find('.caret').toggleClass('active');
				});
			});
			
			var amt_after_discount = 0;
			function apply_coupon(){
				
				if( $('#coupon_code').val() == '' ){
					alert('please enter coupon code first');
				}
				else{
						jQuery.ajax({
						url:"apply_coupon_ajax.php",
						data:'coupon_code=' + $("#coupon_code").val() + '&payment_amount=' + total_amount,
						type:"POST",
						success:function(data){
							if(data == '0'){
								alert("Invalid coupon code");
								payable_amt = total_amount;
							}
							else
							{
								amt_after_discount = data;
								payable_amt = data;
								document.getElementById("amount_after_discount").innerText = parseInt(data); 
							}
						},
						error:function(){
								alert("some error takes place inside apply coupon");
						}
					});
				}
			}

			function show_data(obj){
				
					var course_name = obj.course_name;
					var course_fee = obj.course_fee;
					var div_element = document.createElement("div");
					div_element.innerHTML = course_name;
					document.getElementById("print_course_name").appendChild(div_element);

					var div_element = document.createElement("div");
					div_element.innerHTML = course_fee;
					document.getElementById("print_course_fee").appendChild(div_element);
				}	 
		
			var total_amount=0;

			function show_total(obj){
				total_amount = total_amount + parseInt(obj.course_fee);
				document.getElementById("total_amount").innerHTML = total_amount;			
			}
		
			var courses_selected=[];
			
			function course_selected(obj)
			{
				courses_selected.push(obj.course_name); 		
			}
					
			function reset_form_data()
			{
				document.getElementById('student_name').value='';
				document.getElementById('student_email').value='';
				document.getElementById('student_phone').value='';
			}

			function checked_unchecked_courses(get_this)
			{
				if(get_this.checked){
					jQuery.ajax({
						url:"fetch_courses_name_fee.php",
						data:'course_code=' + get_this.value,
						type:"POST",
						success:function(data){
							show_data(JSON.parse(data));
							show_total(JSON.parse(data));
							course_selected(JSON.parse(data));
						},
						error:function(){
							alert("some error takes place");
						}
					});

					$('#next_click').show();
					$('#hide_discount_coupon').show();
				}
				else
				{
					// document.getElementById(get_this.id).remove();
				}
			}

			function proceed_to_payment(){	
				if( $("#student_name").val()=='' || $("#student_email").val()=='' ||  $("#student_phone").val()=='' )
				{
					alert("please enter the valid details in all text boxes");
				}
				else
				{
					jQuery.ajax({
					url: "insert_billing_data.php",
					data:'name=' + $("#student_name").val() + '&email_id='+ $("#student_email").val() + '&phone=' + $("#student_phone").val() + '&courses_selected=' + JSON.stringify(courses_selected),
					type: "POST",
					success:function(data){
						pay_now();
						},
					error:function (){
						alert("some error takes place");
						}
					});
				}	
			}
			
			function pay_now()
			{
				var student_name = jQuery('#student_name').val();
				
				if(amt_after_discount == 0){

					payable_amt = total_amount;

				}else{

					payable_amt = amt_after_discount;

				}

				var options = {    
				"key": "rzp_test_JFwjJmgntdTKfi",
				"amount":payable_amt * 100,
				"currency": "INR",    
				"name": "Redefedu pvt ltd",    
				"description": "Test Transaction",    
				"image": "https://image.flaticon.com/icons/png/128/3135/3135715.png",  
				"netbanking": "true",
				"prefill": {
					"name": jQuery('#student_name').val(),
					"email": jQuery('#student_email').val(),
					"contact": jQuery('#student_phone').val()
				}, 
				// "notes": {
            	// 	"soolegal_order_id": "merchant_order_id",
        		// },
				// "order_id": "order_Ef80WJDPBmAeNt", //Pass the `id` obtained in the previous step    
				// "account_id": "acc_Ef7ArAsdU5t0XL",    
				"handler": function (response){        
				// console.log(response);
				// alert(response.razorpay_payment_id);        
				// alert(response.razorpay_order_id);        
				// alert(response.razorpay_signature);  
				if(response.razorpay_payment_id!=''){
					jQuery.ajax({
					type:'post',
					url:'payment_success.php',
					data:"transaction_id=" + response.razorpay_payment_id + '&phone=' + jQuery('#student_phone').val() + '&payment_amount=' + payable_amt,
					success:function(result){
						console.log(result);
						send_mail(response.razorpay_payment_id);
						coupon_code_update(response.razorpay_payment_id);
						window.location.href="./payment_receipt.php?payment_id=" + response.razorpay_payment_id;
						}
					});
				}
				else
				{
					alert("payment failed");
				}
			}
			// "modal": {  
			// 		"ondismiss": function () {
            // 	}
        	// }

		};
					
			var rzp1 = new Razorpay(options);

			rzp1.on('payment.failed', function (response){
				jQuery.ajax({
				type:'post',
				url:'payment_failed.php',
				data:'failed_payment_id=' + response.error.metadata.payment_id + '&name=' + jQuery('#student_name').val() + '&phone=' + jQuery('#student_phone').val() + '&email=' + jQuery('#student_email').val() + '&failed_payment_amount=' + total_amount,
				success:function(result){
					console.log(result);
					send_mail(response.error.metadata.payment_id);
					window.location.href = "./payment_receipt.php?payment_id=" + response.error.metadata.payment_id;
				}
			});
			});

			// document.getElementById('rzp-button1').onclick = function(e){    
				rzp1.open();    
				e.preventDefault();
			}

			function coupon_code_update(transaction_id){
				jQuery.ajax({
				type:'post',
				url:'coupon_code_update.php',
				data:'transaction_id='+ transaction_id + '&coupon_code=' + $("#coupon_code").val(),
				success:function(result){
					console.log(result);
				}
			});

			}

			function send_mail(transaction_id){
				jQuery.ajax({
				type:'post',
				url:'send_mail.php',
				data:'transaction_id='+ transaction_id,
				success:function(result){
					console.log(result);
				}
			});

			}
</script>
</html>