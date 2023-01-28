@extends('layouts.myapp')

@section('content')
<section class="pt-100">
    <div class="container">
        <div class="section-title title-style">
            <h2>Key <span style="color:#518117;">P</span><span style="color:#067C67">e</span><span
                    style="color: #0E538D;">rs</span><span style="color: #4D4788;">o</span><span
                    style="color:#874784 ;">n</span><span style="color: #D12150;">ne</span><span
                    style="color:#F48C18">l</span></h2>

        </div>
        <table class="table table-secondary table-hover table-responsive">
            <thead>
                <tr>
                    <th scope="col">Sl.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Phone/Email</th>
                    <th scope="col">Photo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Shri Babul Supriyo</td>
                    <td>Hon'ble Minister-In-Charge, Tourism Department</td>
                    <td>(033) 2262-8330 <br> Email: mic4tourism@gmail.com</td>
                    <td><img src="{{ asset('assets/img/babul supriyo.jfif') }}" style="width:80%;height: 150px;"
                            alt="Shri Babul Supriyo"></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Dr. Saumitra Mohan, I.A.S</td>
                    <td>Secretary, Tourism Department</td>
                    <td>(033)2214-4427</td>
                    <td><img src="{{ asset('assets/img/se.jfif') }}" style="width:80%;height: 150px;"
                            alt="Shri Babul Supriyo"></td>

                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Shri. R. N. Basu Roy Choudhury, I.A.S</td>
                    <td>Director of Tourism, Tourism Department & Managing Director, WBTDCL</td>
                    <td>(033)2358-5159</td>
                    <td><img src="{{ asset('assets/img/s.jfif') }}" style="width:80%;height: 150px;"
                            alt="Shri Babul Supriyo"></td>
                </tr>
            </tbody>
        </table>
        <table class="table table-striped table-hover table-bordered table-responsive">
            <thead>
                <tr class="table-info">
                    <th width="3%" class="td_center">Sl.</th>
                    <th width="30%" class="td_center">Name of The Official(s)</th>
                    <th width="50%" class="td_center">Designation</th>
                    <th width="17%" class="td_center">Contact Number</th>
                </tr>
            </thead>
            <tbody>
                <tr class="odd">
                    <td class="centre">1.</td>
                    <td>Smt. Shanta Pradhan, W.B.C.S.(Exe)</td>
                    <td>Special Secretary, Tourism Department</td>
                    <td align="center">(033) 2210-0098</td>
                </tr>
                <tr class="even">
                    <td class="centre">2.</td>
                    <td>Shri Tapas Kumar Halder, WBA &amp; AS</td>
                    <td>Financial Advisor &amp; Ex-Officio Joint Secretary</td>
                    <td align="center">(033)2262-7143</td>

                </tr>
                <tr class="odd">
                    <td class="centre">3.</td>
                    <td>Shri Subir Kumar Chatterjee, W.B.C.S (Exe) (Retired)</td>
                    <td>Special Officer, Tourism Department</td>
                    <td align="center">(033) 2262 - 8418</td>

                </tr>
                <tr class="even">
                    <td class="centre">4.</td>
                    <td>Shri Thendhup N. Sherpa, W.B.C.S. (Exe)</td>
                    <td>Additional Director &amp; Joint Secretary, Tourism Department</td>
                    <td align="center">(033)2262 5975</td>

                </tr>
                <tr class="odd">
                    <td class="centre">5.</td>
                    <td>Anupama Purkayastha, W.B.C.S.(Exe)</td>
                    <td>Joint Director of Tourism Department</td>
                    <td align="center"></td>

                </tr>
                <tr class="even">
                    <td class="centre">6.</td>
                    <td>Smt. Srabanti Das, W.B.C.S.(Exe)</td>
                    <td>Senior Deputy Secretary, Tourism Department</td>
                    <td align="center">(033)2214 - 8419</td>

                </tr>
                <tr class="odd">
                    <td class="centre">7.</td>
                    <td>Shri Ananta Chandra sarkar ,W.B.C.S.(Exe)</td>
                    <td>Deputy Secretary</td>
                    <td align="center"></td>

                </tr>
                <tr class="even">
                    <td class="centre">8.</td>
                    <td>Shri Jyoti Ghosh, W.B.C.S. (Exe)</td>
                    <td>Deputy Director of Tourism (NB), RTO, Siliguri</td>
                    <td align="center">(0353)2511979</td>

                </tr>
                <tr class="odd">
                    <td class="centre">9.</td>
                    <td>Shri Samir Naha.W.B.S.S. (Retired)</td>
                    <td>OSD &amp; Ex-Officio Deputy Secretary Tourism Department</td>
                    <td align="center">(033) 2262 5954</td>

                </tr>
                <tr class="even">
                    <td class="centre">10.</td>
                    <td>Shri Naresh Mandal</td>
                    <td>Deputy Secretary Tourism Department</td>
                    <td align="center"></td>

                </tr>
                <tr class="odd">
                    <td class="centre">11.</td>
                    <td>Shri Vaswar Jyoti Roy, W.B.S.S.</td>
                    <td>Assistant Secretary, Tourism Department</td>
                    <td align="center">(033)2262 5954</td>

                </tr>
                <tr class="even">
                    <td class="centre">12.</td>
                    <td>Shri Saibal Gupta, W.B.A &amp; A.S</td>
                    <td>Deputy Director (Accounts)</td>
                    <td align="center">(033)2214-5789</td>

                </tr>
                <tr class="odd">
                    <td class="centre">13.</td>
                    <td>Shri Suvankar Haldar, W.B.A.&amp; A.S.</td>
                    <td>Assistant Financial Advisor, Tourism Department</td>
                    <td align="center"></td>

                </tr>
                <tr class="even">
                    <td class="centre">14.</td>
                    <td>Shri Amal Kumar Ganguly</td>
                    <td>Registrar, Tourism Department</td>
                    <td align="center">(033)2262-5954</td>

                </tr>
                <tr class="odd">
                    <td class="centre">15.</td>
                    <td>Shri Narendra Kumar Shukla, WBSS</td>
                    <td>Officer on Special Duty, Tourism Department</td>
                    <td align="center">(033) 2262 5954</td>

                </tr>
                <tr class="even">
                    <td class="centre">16.</td>
                    <td>Smt. Swarupa Barua</td>
                    <td>Deputy Director, Tourism Directorate</td>
                    <td align="center">(033)4007-6665</td>

                </tr>
                <tr class="odd">
                    <td class="centre">17.</td>
                    <td>Shri Utpal Kumar Majumder</td>
                    <td>Assistant Director, Tourism Directorate</td>
                    <td align="center"></td>

                </tr>
                <tr class="even">
                    <td class="centre">18.</td>
                    <td>Shri Partha Dutta</td>
                    <td>Assistant Director, Tourism Directorate</td>
                    <td align="center"></td>

                </tr>
            </tbody>
            <tfoot>
            </tfoot>
        </table>
    </div>
</section>

@endsection
