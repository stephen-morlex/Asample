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
<<<<<<< HEAD
=======
<div style="border-width:2px;  
    border-style:double;">
<div style="border: 1px solid black;padding-top: 3px;padding-right: 3px;padding-bottom: 3px;padding-left: 3px;">
>>>>>>> a5ce10130999b23318ac5d4e4998428c1547a2d0
<body>
   <br><br><h2 style="margin-left: 25%;"><u>Catholic university of Eastern Africa</u></h2><br> 
    <h3 style="margin-left: 40%;"><u>Application form</u></h3><br>

<<<<<<< HEAD

<hr style="border-top: 3px dotted black;">
<table>
=======
<table>
  <center><u><caption>Personal information</caption></u></center>
>>>>>>> a5ce10130999b23318ac5d4e4998428c1547a2d0
  <tr>
    <th>Surname</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Date of birth</th>
  </tr>
  <tr>
<<<<<<< HEAD
    <td>Surname:{{ $user->surname}}</td>
=======
    <td>{{ $user->surname}}</td>
>>>>>>> a5ce10130999b23318ac5d4e4998428c1547a2d0
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
<<<<<<< HEAD
</table>
<hr style="border-top: 3px dotted black;">
<table>
  <tr>

=======

</table>
<hr style="border-top: 3px dotted black;">
  
<table>
  <center><u><caption>Academic data</caption></u></center>
  <center><u><caption>Last high school the applicant attended</caption></u></center>
  <tr>
>>>>>>> a5ce10130999b23318ac5d4e4998428c1547a2d0
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
<<<<<<< HEAD
  <tr>

=======
</table>
<table>

<center><u><caption>Other high schools that the applicant has attended</caption></u></center>
  <tr>
    <th>High school</th>
    <th>High school address</th>
    <th>when they started highschool</th>
    <th>When they ended highschool</th>
    
  </tr>
  <tr>
    <td>{{ $user->high_school2 }}</td>
    <td>{{ $user->school_address2 }}</td>
    <td>{{ $user->when_started_highschool2 }}</td>
    <td>{{ $user->when_ended_highschool2 }}</td>
                     
  </tr>
  <tr>
    <th>High school</th>
    <th>High school address</th>
    <th>when they started highschool</th>
    <th>When they ended highschool</th>
    
  </tr>
  <tr>
    <td>{{ $user->high_school3 }}</td>
    <td>{{ $user->school_address3 }}</td>
    <td>{{ $user->when_started_highschool3 }}</td>
    <td>{{ $user->when_ended_highschool3 }}</td>              
  </tr>  
</table>
<hr style="border-top: 3px dotted black;">
<table>
<center><u><caption>A list of previous colleges that the applicant has attended</caption></u></center>
  <tr>
>>>>>>> a5ce10130999b23318ac5d4e4998428c1547a2d0
    <th>college</th>
    <th>college address</th>
    <th>when they started college</th>
    <th>When they ended college</th>
<<<<<<< HEAD
                      
    
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
=======
  </tr>
  <tr>
    <td>{{ $user->college2 }}</td>
    <td>{{ $user->college_address2 }}</td>
    <td>{{ $user->when_started_college2 }}</td>
    <td>{{ $user->when_ended_colleg2 }}</td>
  </tr>
  <tr>
    <td>{{ $user->college3 }}</td>
    <td>{{ $user->college_address3 }}</td>
    <td>{{ $user->when_started_college3 }}</td>
    <td>{{ $user->when_ended_college3 }}</td>
  </tr>

</table>

<hr style="border-top: 3px dotted black;">
<table>
  <center><u><caption>Cuea related information</caption></u></center>
>>>>>>> a5ce10130999b23318ac5d4e4998428c1547a2d0
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
<<<<<<< HEAD
<hr style="border-top: 3px dotted black;">
=======

<hr style="border-top: 3px dotted black;">

>>>>>>> a5ce10130999b23318ac5d4e4998428c1547a2d0
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
<<<<<<< HEAD
<hr style="border-top: 3px dotted black;">
=======

<hr style="border-top: 3px dotted black;">

>>>>>>> a5ce10130999b23318ac5d4e4998428c1547a2d0
<table>
  <tr>
    <th>Is your educationed sponsored</th>
  </tr>
  <tr>
     <td>{{ $user->sponsor }}</td>
  </tr>
<<<<<<< HEAD
=======
</table>
<table>
>>>>>>> a5ce10130999b23318ac5d4e4998428c1547a2d0
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
<<<<<<< HEAD
=======
</table>
<hr style="border-top: 3px dotted black;">
<table>
>>>>>>> a5ce10130999b23318ac5d4e4998428c1547a2d0
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
<<<<<<< HEAD
<hr style="border-top: 3px dotted black;">
=======

<hr style="border-top: 3px dotted black;">

>>>>>>> a5ce10130999b23318ac5d4e4998428c1547a2d0
<table>
   <tr>
      <th>Where the applicant heard abou CUEA</th>
      <th>Other source apart from the ones listed above</th>
     
   </tr>
   <tr>
     <td>{{ $user->sources}}</td>
      <td>{{ $user->other_sources}}</td>
     
   </tr>
<<<<<<< HEAD
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
=======
</table>

<hr style="border-top: 3px dotted black;">
                <div style="border-width:5px; border-style:groove;">
                                                   <center><h3>For Official use only</h3></center>
      <div><p>Recommendation of Departmental Academic Board:</p><br></div>
      <div><p>Recommended Programme:_______________________________________________________________</p></div>
      
      <center><div><p>No of years</p>[1]&nbsp;[2]&nbsp;[3]&nbsp;[4]</div></center>

    
    <div><p>Not Recommended:Reason:_______________________________________________</p></div>
    
    <div style="float: left;"><p>Referred to:_____________________________</p></div>
    <br>
    <br>
    <div style="float: left;"><p>Head of Department Signature:_________________</p></div>    <div style="float: right;"><p>Date:__________________</p></div>
    <div><p>Endoresed by Dean of Faculty:____________________________________________</p></div>

    <div style="float: left;"><p>Dean's Siganture_____________________________</p></div><div style="float: right;"><p>Date:______________________</p></div><br><br><br>
      
       <center><u><p>Admissions Committee Decision:</p></u></center>
      <div><p>Approved:</p></div><div style="float: left;"><p>Programme:_____________________________________________________</p></div>
        <br><br>
      <center><div><p>No of years:&nbsp;[1]&nbsp;[2]&nbsp;[3]&nbsp;[4]</p></div></center>
 
      <div><p>Not Approved: Reason:__________________________</p></div>
      <br>
      <div style="float: left;"><p>Chairman's Signature:________________________</p></div><div style="float: right;"><p>Date:_________________</p></div><br><br>
      <div style="float: left;"><p>Action by Registrar:__________________</p></div><div><p>Signature:__________________</p></div>&nbsp;<div style="float: right;"><p>Date:____________________</p></div><br><br>
      <center><strong>CUEA/DVC/ACD/REG/01/fm01s</strong></center>

        </div>
</body>
</div>
</div>
>>>>>>> a5ce10130999b23318ac5d4e4998428c1547a2d0
</html>
