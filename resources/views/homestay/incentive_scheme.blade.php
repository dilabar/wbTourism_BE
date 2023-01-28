@extends('layouts.myapp')
<style>
.incentive_scheme{background-color: #f1fafe;padding: 40px;}
.incentive_scheme .s_link{text-align: center !important; color: #053f61; font-size: 17px; font-weight: 700; margin-top: 15px;}
.incentive_scheme .content_text{padding: 25px 50px;box-sizing: border-box; text-align: left; overflow: hidden; line-height: 29px; }
.incentive_scheme .heading{text-align: left; color: #242C5E; font-size: 16px; text-transform: none; padding: 25px 50px 0; font-weight: bold;}
</style>

@section('content')
    <section class="incentive_scheme-details-section pt-100 pb-70">
        <div class="container">
            <div class="section-title title-style">
                <h2>WEST BENGAL INCENTIVE SCHEME-2021</h2>
            </div>
            <div class="col-md-10 offset-md-1 justify-content-center incentive_scheme">
                <div class="text padding btn_centre">
                    <div class="scheme_btn"><a href="https://wbtourism.gov.in/incentive_scheme/pdf/wbis_2021.pdf"
                            target="_blank">Notification WBIS-2021</a></div>
                    <div class="scheme_btn"><a
                            href="https://wbtourism.gov.in/home/download/pdf/timeline_notification_wbis_2021.pdf"
                            target="_blank">Timeline Notification</a></div>
                    <div class="scheme_btn"><a href="https://incentive2021.wbtourismgov.in/" target="_blank">Apply Now</a>
                    </div>

                </div>
                <p class="s_link">To avail services of various Departments through one portal please apply through the State
                    Single Window Portal - <a href="https://silpasathi.wb.gov.in/" target="_blank">SILPA SATHI</a></p>
                <div class="clear"></div>
                <p class="content_text">West Bengal Incentive scheme is an aim to provide support to the growing Tourism Industry
                    of the State and to generate employment and revenue, Providing Incentive to the new Tourism Units. The
                    steps for getting the incentives are Issue of Registration Certificate, Issue of Date of Commencement
                    Certificate and issue of Eligibility Certificate and approval of Finance Department is obtained before
                    granting incentives in each case. </p>
                <h3 class="heading">1. STANDARD OPERATING PROCEDURE FOR REGISTRATION TO BE FOLLOWED BY APPLICANT</h3>
                <p class="content_text"><strong>Any intending applicant who falls under the purview of definition of the Tourism
                        Unit as defined under the West Bengal Incentive Scheme may submit application online without any
                        fees as follows:</strong></p>
                <p class="padding"><strong>Fill the prescribed FORM NO. I in full which is a composite application for
                        Registration and Eligibility Certificate with following required documents:</strong></p>
                <div class="number">
                    <ul>
                        <li>A copy of the Memorandum and Articles of Association issued by the Registrar of Companies/
                            Partnership agreement.</li>
                        <!-- <li>A Statement of names and addresses of the Director/ Partners/Owners of the company.</li> -->
                        <li>A Statement of the names and addresses of the Director/Partners/Owners of the company along with
                            Mobile No. and Aadhar No. in Company/ Unit letter head.</li>
                        <li>Project Report.</li>
                        <li>Valid No objection Certificate from pollution control Board.</li>
                        <li>Valid No objection Certificate from West Bengal Fire Service.</li>
                        <li>In case of loan, Photocopy of Sanction letter from the Central Financial Institution/State
                            Financial institution/ Bank.</li>
                        <li>Copy of the Audited Balance sheet for last 3 years with Income Tax acknowledgement.</li>
                        <li>Estimate for Building and Plant &amp; Machinery vetted by Govt. Registered Valluer / Chattered
                            Valluer.</li>
                        <li>Land Deed and all other Documents supporting statements made in the Form (Mutation/ROR,
                            Conversion Certificate, site plan, clearance from M.A. Deptt. etc.</li>
                        <li>All applicable clearance from Govt. authorities (Forest, CRZ, Police, etc.)</li>
                        <li>Sarai Registration Certificate under Bengal Sarai Regulation Act ( in case Hotel started their
                            Commercial operation)</li>
                        <li>Valid Trade Licence from appropriate authority.</li>
                        <li>GST Certificate and GST return.</li>
                        <li>Sanctioned Building Plan from appropriate authority (KMC/ Municipality/ Panchayat/or any Other
                            appropriate authority).</li>
                    </ul>
                </div>
                <p class="content_text"> After receiving all above mentioned documents, the Director of Tourism shall make, as
                    expeditiously as possible, scrutiny of/enquiry into the particulars furnished by the applicant unit and
                    on being satisfied that the application in terms of the provision of the said scheme, is in order, shall
                    register the applicant unit with a Registration No. and issue a registration certificate online to the
                    applicant unit with an online intimation to West Bengal Tourism Development Corporation Ltd.,</p>
                <h3 class="heading">2. Procedure for issuance of Date of Commencement of Commercial operation Certificate
                </h3>
                <p class="content_text">After Commencement of the Tourism Unit, they will apply to the Director of Tourism to
                    issue a Date of Commencement of Commercial Operation Certificate with supporting documents such as
                    <strong>bill voucher, copy of Register maintained by the hotel, inauguration card , advertisement in
                        news paper etc.</strong> <br><br>
                    After getting application, Department communicates the same to respective SDO (if the Tourism unit
                    Located at District), or Tourism Department official (In case of Tourism Unit located at Kolkata and
                    Siliguri) and request to submit a report for the actual date of Commencement of Commercial operation of
                    the Tourism unit after filed inspection.<br><br>
                    After getting the satisfactory report, Director of Tourism issues Date of Commencement of Commercial
                    Operation Certificate.</p>
                <h3 class="heading">3. Procedure under Tourism Incentive Scheme</h3>
                <div class="roman">
                    <ul>
                        <!--<li>Tourism units such as Hotels, Amusement Park, Art & Craft Village, Tea Tourism, Tourist Boat/Launches/Cruise Boats/House Boats, Convention Centre and Wayside facilities apply for Registration under West Bengal incentive Scheme address to Director of Tourism, Govt. of West Bengal.</li>
                                <li>After getting Registration Certificate, Tourism unit apply to Director of Tourism for Date of Commencement of Commercial Operation Certificate.</li>-->
                        <li>After getting both the Registration and Date of Commercial Operation Certificate, Tourism unit
                            apply to Managing Director, West Bengal Tourism Development Corporation for Eligibility
                            Certificate.</li>
                        <li>After getting all the above mentioned three certificate the eligible unit apply to The Managing
                            Director, West Bengal Tourism Development Corporation for Different types of incentive in
                            different forms such as State Capital Investment Subsidy, Interest subsidy , Additional
                            incentive generation of employment (EPF &amp; ESI), Additional Incentive for Adventure Tour
                            Operator, Reimbursement of Stamp Duty and Registration Fees, Subsidy for Quality improvement
                            only waiver of Electricity Duty apply at Director of Electricity, Govt. of West Bengal.</li>
                    </ul>
                </div>
                <p class="content_text">*** In case of Mega project they are eligible for Tourism Promotion Assistant (SGST)
                    subsidy in lieu of Interest subsidy as per notification of WBIS 2021, </p>
            </div>
        </div>
    </section>
@endsection
