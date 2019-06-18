<!DOCTYPE html>
<html>
<head>
    <title></title>
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.1/dist/css/foundation.min.css" media="all" />
</head>
<body>
   <br><br><h2 style="margin-left: 25%;"><u>Catholic university of Eastern Africa</u></h2><br> 
    <h3 style="margin-left: 40%;"><u>Application form</u></h3><br>



  <div class="content-section">
    <div class="row">
      <div class="course-section">

            <div class="section-title">
                <h2><span>Application form</span></h2>
            </div><!-- Section Title Ends /-->
            <div class="content-area module faq">
                <div class="row">
                  <table class="stack">
                    <thead>
                     <tr>
                       <th width="125">Surname</th>
                       <th width="125">First name</th>
                       <th width="125">Last name</th>
                       <th width="125">Date of birth</th>
                      </tr>
                    </thead>
 
                    <tbody>
                      <tr>
                       <td>{{ $user->surname}}</td>
                       <td>{{ $user->firstname}}</td>
                       <td>{{ $user->lastname}}</td>
                       <td>{{ $user->dob}}</td>
                      </tr>
                    </tbody>
                    <thead>
                      <tr>
                       <th width="125">Gender</th>
                       <th width="125">Current Address</th>
                       <th width="125">Marital status</th>
                       <th width="125">Email</th>
                      </tr>
                    </thead>
 
                    <tbody>
                      <tr>
                       <td>{{ $user->gender }}</td>
                       <td>{{ $user->current_address }}</td>
                       <td>{{ $user->marital_status }}</td>
                       <td>{{ $user->email }}</td>
                      </tr>
                    </tbody>

                    <thead>
                      <tr>
                        <th width="125">Telephone</th>
                        <th width="125">Country</th>
                        <th width="125">Id or Passport number</th>
                        <th width="125">Religion</th>
                      </tr>
                    </thead>
 
                    <tbody>
                     <tr>
                       <td>{{ $user->telephone }}</td>
                       <td>{{ $user->country }}</td>
                       <td>{{ $user->id_number }}</td>
                       <td>{{ $user->religion }}</td>
                      </tr>
                    </tbody>

                    <thead>
                      <tr>
                        <th width="125">Is the applicant disabled</th>
                        <th width="125">Disability Specification</th>
                        <th width="125">Clergy type</th>
                        <th width="125">Religious order</th>
                      </tr>
                    </thead>
 
                    <tbody>
                      <tr>
                        <td>{{ $user->disabled }}</td>
                        <td>{{ $user->disability_specification }}</td>
                        <td>{{ $user->clergy_type }}</td>
                        <td>{{ $user->religious_order }}</td>
                     </tr>
                    </tbody>

                    <thead>
                      <tr>
                        <th width="125">High school</th>
                        <th width="125">High school address</th>
                        <th width="125">when they started highschool</th>
                        <th width="125">When they ended highschool</th>
                      </tr>
                    </thead>
 
                    <tbody>
                      <tr>
                        <td>{{ $user->high_school }}</td>
                        <td>{{ $user->school_address }}</td>
                        <td>{{ $user->when_started_highschool }}</td>
                        <td>{{ $user->when_ended_highschool }}</td>
                     </tr>
                    </tbody>
                    <thead>
                      <tr>
                        <th width="125">Colledge</th>
                        <th width="125">Colledge address</th>
                        <th width="125">when they started Colledge</th>
                        <th width="125">When they ended Colledge</th>
                      </tr>
                    </thead>
 
                    <tbody>
                      <tr>
                        <td>{{ $user->colledge }}</td>
                        <td>{{ $user->colledge_address }}</td>
                        <td>{{ $user->when_started_colledge }}</td>
                        <td>{{ $user->when_ended_colledge }}</td>
                      </tr>
                    </tbody>
                    <thead>
                      <tr>
                        <th width="125">Campus</th>
                        <th width="125">Level</th>
                      </tr>
                    </thead>
 
                    <tbody>
                      <tr>
                        <td>{{ $user->campus }}</td>
                        <td>{{ $user->level }}</td>
                      </tr>
                    </tbody>

                    <thead>
                      <tr>
                        <th width="125">First choice</th>
                        <th width="125">Second choice</th>
                        <th width="125">Thirdchoice</th>
                      </tr>
                    </thead>
 
                    <tbody>
                      <tr>
                        <td>{{ $user->first_choice }}</td>
                        <td>{{ $user->second_choice }}</td>
                        <td>{{ $user->third_choice }}</td>
                      </tr>
                   </tbody>

                   <thead>
                      <tr>
                        <th width="125">Mode of study</th>
                        <th width="125">When to start</th>
                        <th width="125">The applicant has done these already</th>
                        <th width="125">Previous registration number</th>
                      </tr>
                    </thead>
               
                    <tbody>
                      <tr>
                        <td>{{ $user->mode_of_study }}</td>
                        <td>{{ $user->when_to_start }}</td>
                        <td>{{ $user->cuea_before }}</td>
                        <td>{{ $user->previous_reg_number}}</td>
                      </tr>
                    </tbody>
                    <thead>
                      <tr>
                        <th width="125">Is your educationed sponsored</th>
                        <th width="125">Sponsor's name</th>
                        <th width="125">Sponsor's address</th>
                        <th width="125">Sponsor's telephone</th>
                        <th width="125">Sponsor's email</th>
                      </tr>
                    </thead>
 
                    <tbody>
                      <tr>
                        <td>{{ $user->sponsor }}</td>
                        <td>{{ $user->sponsor_name }}</td>
                        <td>{{ $user->sponsor_address }}</td>
                        <td>{{ $user->sponsor_telephone }}</td>
                        <td>{{ $user->sponsor_email }}</td>
                     </tr>
                   </tbody>
                   <thead>
                      <tr>
                        <th width="125">Next of Kin</th>
                        <th width="125">Next of kin's address</th>
                        <th width="125">Next of kin's telephone</th>
                        <th width="125">Next of kin's email</th>
                      </tr>
                    </thead>
 
                    <tbody>
                      <tr>
                        <td>{{ $user->next_of_kin}}</td>
                        <td>{{ $user->next_of_kin_address}}</td>
                        <td>{{ $user->next_of_kin_telephone}}</td>
                        <td>{{ $user->next_of_kin_email}}</td>
                     </tr>
                    </tbody>
                    <thead>
                      <tr>
                        <th width="125">Where the applicant heard abou CUEA</th>
                        <th width="125">Other source apart from the ones listed above</th>
                      </tr>
                    </thead>
 
                    <tbody>
                      <tr>
                        <td>{{ $user->sources}}</td>
                        <td>{{ $user->other_sources}}</td>
                     </tr>
                  </tbody>

</table>

    <h3>For Official use only</h3>
    <p>Recommendation of Departmental Academic Board:</p><br>
    <p>Recommended Programme:___________________________________________________________________________________</p>
     <p>No of years</p>[1]     [2]     [3]      [4]

<p>Not Recommended:Reason:_______________________________________________________________________________________</p>
<p>Referred to:________________________________________________________________________________________</p>
<p>Head of Department Signature:_____________________</p><p>Date:______________________________________________</p>
<p>Endoresed by Dean of Faculty:_______________________________________________________________________</p>
<p>Dean's Siganture____________________________________________________________</p><p>Date:_____________________________________________</p>
<p>Admissions Committe Decision:</p>

<p>Approved:</p> <p>Programme:____________________________________________________________</p>
<p>No of years     [1]   [2]   [3]   [4]</p>

<p>Not Approved: Reason:__________________________________________________________________________________</p>
<p>Chairman's Signature:_______________________________________</p><p>Date:___________________________________</p>
<p>Action by Registrar:___________________________________________________</p><p>Signature:__________________</p><p>Date:____________________</p>
</body>
</html>
