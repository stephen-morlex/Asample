<!DOCTYPE html><html>
<head>
    <title></title>
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.1/dist/css/foundation.min.css" media="all" />

        <style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>
   <br><br><h2 style="margin-left: 25%;"><u>Catholic university of Eastern Africa</u></h2><br> 
    <h3 style="margin-left: 40%;"><u>Application form</u></h3><br>


<hr style="border-top: 3px dotted black;">
<table>
  <tr>
    <th>Surname</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Date of birth</th>
  </tr>
  <tr>
    <td>Surname:{{ $user->surname}}</td>
    <td>{{ $user->firstname}}</td>
    <td>{{ $user->lastname}}</td>
    <td>{{ $user->dob}}</td>
  </tr>
  <tr>
    <th>Gender</th>
    <th>Current Address</th>
    <th>Marital status</th>
    <th>Email</th>
    
  </tr>
  <tr>
    <td>{{ $user->gender }}</td>
    <td>{{ $user->current_address }}</td>
    <td>{{ $user->marital_status }}</td>
    <td>{{ $user->email }}</td>
  </tr>
  <tr>
     <th>Telephone</th>
    <th>Country</th>
    <th>Id or Passport number</th>
    <th>Religion</th>
    
  </tr>
  <tr>
   <td>{{ $user->telephone }}</td>
   <td>{{ $user->country }}</td>
   <td>{{ $user->id_number }}</td>
   <td>{{ $user->religion }}</td>
  </tr>
  <tr>
   <th>Is the applicant disabled</th>
   <th>Disability Specification</th>
   <th>Clergy type</th>
   <th>Religious order</th>   
  </tr>
  <tr>
    <td>{{ $user->disabled }}</td>
    <td>{{ $user->disability_specification }}</td>
    <td>{{ $user->clergy_type }}</td>
    <td>{{ $user->religious_order }}</td>
    
  </tr>
</table>
<hr style="border-top: 3px dotted black;">
<table>
  <tr>

    <th>High school</th>
    <th>High school address</th>
    <th>when they started highschool</th>
    <th>When they ended highschool</th>
    
  </tr>
  <tr>
     
    <td>{{ $user->high_school }}</td>
    <td>{{ $user->school_address }}</td>
    <td>{{ $user->when_started_highschool }}</td>
    <td>{{ $user->when_ended_highschool }}</td>
                     
  </tr>
  <tr>

    <th>college</th>
    <th>college address</th>
    <th>when they started college</th>
    <th>When they ended college</th>
                      
    
  </tr>
  <tr>
    <td>{{ $user->college }}</td>
    <td>{{ $user->college_address }}</td>
    <td>{{ $user->when_started_college }}</td>
    <td>{{ $user->when_ended_college }}</td>
  </tr>
</table>
<hr style="border-top: 3px dotted black;">
<table>
  <tr>
    <th>Campus</th>
    <th>Level</th>
    
  </tr>
  <tr>
    <td>{{ $user->campus }}</td>
    <td>{{ $user->level }}</td>
    
  </tr>
  <tr>
    <th>First choice</th>
    <th>Second choice</th>
    <th>Thirdchoice</th>
    
  </tr>
  <tr>
    <td>{{ $user->first_choice }}</td>
    <td>{{ $user->second_choice }}</td>
    <td>{{ $user->third_choice }}</td>
                  
  </tr>
</table>
<hr style="border-top: 3px dotted black;">
<table>
  <tr>
    <th>Mode of study</th>
    <th>When to start</th>
    <th>The applicant has done these already</th>
    <th>Previous registration number</th>
  </tr>
  <tr>
    <td>{{ $user->mode_of_study }}</td>
    <td>{{ $user->when_to_start }}</td>
    <td>{{ $user->cuea_before }}</td>
    <td>{{ $user->previous_reg_number}}</td>
                      
  </tr>
</table>
<hr style="border-top: 3px dotted black;">
<table>
  <tr>
    <th>Is your educationed sponsored</th>
  </tr>
  <tr>
     <td>{{ $user->sponsor }}</td>
  </tr>
  <tr>
      <th>Sponsor's name</th>
      <th>Sponsor's address</th>
      <th>Sponsor's telephone</th>
      <th>Sponsor's email</th>
    
  </tr>
  <tr>
    <td>{{ $user->sponsor_name }}</td>
    <td>{{ $user->sponsor_address }}</td>
    <td>{{ $user->sponsor_telephone }}</td>
    <td>{{ $user->sponsor_email }}</td>
    
  </tr>
  <tr>
    <th>Next of Kin</th>
    <th>Next of kin's address</th>
    <th>Next of kin's telephone</th>
    <th>Next of kin's email</th>
    
  </tr>
  <tr>
    <td>{{ $user->next_of_kin}}</td>
    <td>{{ $user->next_of_kin_address}}</td>
    <td>{{ $user->next_of_kin_telephone}}</td>
    <td>{{ $user->next_of_kin_email}}</td>
    
  </tr>
</table>
<hr style="border-top: 3px dotted black;">
<table>
   <tr>
      <th>Where the applicant heard abou CUEA</th>
      <th>Other source apart from the ones listed above</th>
     
   </tr>
   <tr>
     <td>{{ $user->sources}}</td>
      <td>{{ $user->other_sources}}</td>
     
   </tr>
</table>   
                    
                
                                              
                                                   <h3>For Official use only</h3>           
 
      <div><p>Recommendation of Departmental Academic Board:</p><br></div>
      <div><p>Recommended Programme:___________________________________________________________________________________</p></div>
      <div><p>No of years</p>[1]     [2]     [3]      [4]</div>

    <div><p>Not Recommended:Reason:_______________________________________________________________________________________</p></div>
    <div><p>Referred to:________________________________________________________________________________________</p></div>
    <p>Head of Department Signature:_____________________</p><div><p>Date:______________________________________________</p></div>
</div>
</div> 
                                  
                                        <label>Firstname</label>
                                        <label>
                                           <p>Endoresed by Dean of Faculty:_______________________________________________________________________</p>
                                                <p>Dean's Siganture____________________________________________________________</p><p>Date:_____________________________________________</p>
                                        </label>
                                    </div>

                                        <label>Lastname</label>
                                        <label>
                                            <p>Admissions Committe Decision:</p>

                                            <p>Approved:</p> <p>Programme:____________________________________________________________</p>
                                            <p>No of years     [1]   [2]   [3]   [4]</p>

                                            <p>Not Approved: Reason:__________________________________________________________________________________</p>
                                            <p>Chairman's Signature:_______________________________________</p><p>Date:___________________________________</p>
                                            <p>Action by Registrar:___________________________________________________</p><p>Signature:__________________</p><p>Date:____________________</p>
                                        </label>
                                    </div>

                                    </div>
</body>
</html>
