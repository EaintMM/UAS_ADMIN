<?php
  include 'includes/class-autoload.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
<title> University Admission System</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        
</head>

<body class="d-flex flex-column">

<?php
  
require 'header.php';
$valid=true;
$title="";
$eng_name='';
$mm_name='';
$gender='';
$email=$syllabus = $studyin = $school = $level = $level1 = $marks  ="";
$birthdate = $nationality = $religion = $bloodtype = $citizenid = $citizen = $passport = '';
$address = $street = $township = $zipcode = $telephone = $facebook = $city = $mobile = '';
$fname = $fnationality = $fstatus = $fage = $foccupation = $faddress = $fstreet = $ftownship = $fzipcode = $ftelephone = $fposition = $fcity = $fmobile = '';
$mname = $mnationality = $mstatus = $mage = $moccupation = $maddress = $mstreet = $mtownship = $mzipcode = $mtelephone = $mposition = $mcity = $mmobile = '';
$gstatus = "";
// to validate inputs
if(!empty($_POST))
{
    /*$data=[
        "title"=>$_POST['title'],
        "eng_name"=>$_POST['eng_name'],
        "mm_name"=>$_POST['mm_name'],
        "gender"=>$_POST['gender'],
        "email"=>$_POST['email'],
        "syllabus"=>$_POST['syllabus']
    ]; */
    
   $gstatus = $_POST['gstatus'];
    
    if(isset($_POST['title']))
    {
        $title=$_POST['title'];
        if(empty($title))
        {
            $titleError='Please choose title';
            $valid=false;
        }
    }

    if(isset($_POST['eng_name']))
    {
        $eng_name=$_POST['eng_name'];
        if(empty($eng_name))
        {
            $enameError='Please add Name (Eng)';
            $valid=false;
        }
    }
    if(isset($_POST['mm_name']))
    {
        $mm_name=$_POST['mm_name'];
        if(empty($mm_name))
        {
            $mmnameError='Please add Name (MM)';
            $valid=false;
        }
    }
    if(isset($_POST['gender']))
    {
        $gender=$_POST['gender'];
        if(empty($gender))
        {
            $genderError='Please add Name (MM)';
            $valid=false;
        }
    }
    if(isset($_POST['email']))
    {
        $email=$_POST['email'];
        if(empty($email))
        {
            $emailError='Please add Email ';
            $valid=false;
        }
    }
    if(isset($_POST['syllabus']))
    {
        $syllabus=$_POST['syllabus'];
        if(empty($syllabus))
        {
            $syllabusError='Please select Syllabus ';
            $valid=false;
        }
    } 
    //$studyin = $_POST['stydyin'];
    if(isset($_POST['school']))
    {
        $school=$_POST['school'];
        if(empty($school))
        {
            $schoolError='Please add School ';
            $valid=false;
        }
    } 
    if(isset($_POST['level']))
    {
        $level=$_POST['level'];
        if(empty($level))
        {
            $levelError='Please select Level ';
            $valid=false;
        }
    } 
    if(isset($_POST['level1']))
    {
        $level1=$_POST['level1'];
        if(empty($level1))
        {
            $level1Error='Please select Level ';
            $valid=false;
        }
    } 
    if(isset($_POST['marks']))
    {
        $marks=$_POST['marks'];
        if(empty($marks))
        {
            $marksError='Please add marks ';
            $valid=false;
        }
    } 
    if(isset($_POST['birthdate']))
    {
        $birthdate=$_POST['birthdate'];
        if(empty($birthdate))
        {
            $birthdateError='Please add Birthdate ';
            $valid=false;
        }
    } 

    if(isset($_POST['nationality']))
    {
        $nationality=$_POST['nationality'];
        if(empty($nationality))
        {
            $nationalityError='Please add nationality ';
            $valid=false;
        }
    }     
    if(isset($_POST['citizen']))
    {
        $citizen=$_POST['citizen'];
        if(empty($citizen))
        {
            $citizenError='Please add citizen ';
            $valid=false;
        }
    }
    if(isset($_POST['religion']))
    {
        $religion=$_POST['religion'];
        if(empty($religion))
        {
            $religionError='Please select religion ';
            $valid=false;
        }
    }
    if(isset($_POST['bloodtype']))
    {
        $bloodtype=$_POST['bloodtype'];
        if(empty($bloodtype))
        {
            $bloodtypeError='Please select blood type ';
            $valid=false;
        }
    }
    if(isset($_POST['citizenid']))
    {
        $citizenid=$_POST['citizenid'];
        if(empty($citizenid))
        {
            $citizenidError='Please add citizen id ';
            $valid=false;
        }
    }
    if(isset($_POST['passport']))
    {
        $passport=$_POST['passport'];
        if(empty($passport))
        {
            $passportError='Please add passport  ';
            $valid=false;
        }
    }
    if(isset($_POST['address']))
    {
        $address=$_POST['address'];
        if(empty($address))
        {
            $addressError='Please add address  ';
            $valid=false;
        }
    }
    if(isset($_POST['street']))
    {
        $street=$_POST['street'];
        if(empty($street))
        {
            $streetError='Please add street  ';
            $valid=false;
        }
    }
    if(isset($_POST['township']))
    {
        $township=$_POST['township'];
        if(empty($township))
        {
            $townshipError='Please add township  ';
            $valid=false;
        }
    }
    if(isset($_POST['city']))
    {
        $city=$_POST['city'];
        if(empty($city))
        {
            $cityError='Please add city  ';
            $valid=false;
        }
    }
    if(isset($_POST['mobile']))
    {
        $mobile=$_POST['mobile'];
        if(empty($mobile))
        {
            $mobileError='Please add mobile  ';
            $valid=false;
        }
    }
    $zipcode = $_POST['zipcode'];
    $telephone = $_POST['telephone'];
    $facebook = $_POST['facebook'];

    // father information
    if(isset($_POST['fname']))
    {
        $fname=$_POST['fname'];
        if(empty($fname))
        {
            $fnameError='Please add father name  ';
            $valid=false;
        }
    }
    if(isset($_POST['mname']))
    {
        $mname=$_POST['mname'];
        if(empty($mname))
        {
            $mnameError='Please add mother name  ';
            $valid=false;
        }
    }

    
    if ($valid) {
        $addressObj = new AddressContr();
        echo $addressObj->createAddress($address, $street, $township, $city, $zipcode, $telephone, $mobile, $facebook, $email);

        if(!(isset($_POST['faddress'])) && $_POST['fstatus']=='living'){
            $fatherAddress = new AddressContr();
            echo $fatherAddress->createAddress("none", $_POST['fstreet'], $_POST['ftownship'], $_POST['fcity'], $_POST['fzipcode'], $_POST['ftelephone'], $_POST['fmobile'], "none", "none");
        }
        if(!(isset($_POST['maddress'])) && $_POST['mstatus']=='mliving'){
            $matherAddress = new AddressContr();
            echo $matherAddress->createAddress("none", $_POST['mstreet'], $_POST['mtownship'], $_POST['mcity'], $_POST['mzipcode'], $_POST['mtelephone'], $_POST['mmobile'], "none", "none");
        }
        if($_POST['gstatus'] == "other"){
            $gAddress = new AddressContr();
            echo $gAddress->createAddress("none", $_POST['gstreet'], $_POST['gtownship'], $_POST['gcity'], $_POST['gzipcode'], $_POST['gtelephone'], $_POST['gmobile'], "none", "none");
        }
    }   

    
}

?>
<div class="container maincontent">
    <fieldset class="adminform">
    <legend>Admission Progress</legend>
      <table width="100%">
        <tr>
          <td width="20%"><b>1. Fill in Application</b></td>
          <td width="15%">2. Verify Data</td>
          <td width="32%">3. Print Application Form</td>
          <td width="12%">4. Login</td>
        </tr>
      </table>
      <div class="progress">
         <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
       </div>
    </fieldset>
    
    <form class="form-horizontal" action="index.php" method="post">
    <div class="container" >
    <div class="row">
      <h4> Applicant's Information </h4>
      <?php echo $_POST['faddress'] ?>
    </div>
    <div class="form-group">
        <label class="control-label col-md-2" for="title">Title<span class="help-inline">*</span></label> 
           <div class="controls col-md-4">
                <select name="title" id="title" class="form-control form-control-inline col-md-4" >
                <option value="" >---Select---</option>
                  <option value="Mr" <?php echo ( isset($_POST['title']) && $_POST['title']=== 'Mr')?'selected': ''; ?> >Mr</option>
                  <option value="Ms" <?php echo ( isset($_POST['title']) && $_POST['title']=== 'Ms')?'selected': ''; ?>  >Ms</option>
                  <option value="Mrs" <?php echo ( isset($_POST['title']) && $_POST['title']=== 'Mrs')?'selected': ''; ?>  >Mrs</option>
                </select>
                <?php if (!empty($titleError)): ?>
                <span class="help-inline"><?php echo $titleError;?></span>
                <?php endif; ?>
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="eng_name">Name (Eng)<span class="help-inline">*</span></label>
            <div class="controls col-md-4">
               <input name="eng_name" type="text" id="eng_name" class="form-control form-control-inline col-md-4" placeholder="Name in English" value="<?php echo !empty($eng_name)?$eng_name:'';?>" >
               <?php if (!empty($enameError)): ?>
                <span class="help-inline"><?php echo $enameError;?></span>
                <?php endif; ?>            
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="mm_name">Name (MM)<span class="help-inline">*</span></label>
            <div class="controls col-md-4">
               <input name="mm_name" type="text" id="mm_name" class="form-control form-control-inline col-md-4" placeholder="Name in Myanmar" value="<?php echo !empty($mm_name)?$mm_name:'';?>" >
               <?php if (!empty($mmnameError)): ?>
                <span class="help-inline"><?php echo $mmnameError;?></span>
                <?php endif; ?>            
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="gender">Gender<span class="help-inline">*</span></label>
            <div class="controls col-md-4">
            <label class="radio-inline"><input type="radio" name="gender" value="male" id="male" checked>Male</label>
            <label class="radio-inline"><input type="radio" name="gender" value="female" id="female" <?php echo ( isset($_POST['gender']) && $_POST['gender']=== 'female')?'checked': ''; ?> >Female</label>
                          
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="email">Email<span class="help-inline">*</span></label>
            <div class="controls col-md-4">
               <input name="email" type="text" id="email" class="form-control form-control-inline col-md-4" value="<?php echo !empty($email)?$email:'';?>" >
               <?php if (!empty($emailError)): ?>
                <span class="help-inline"><?php echo $emailError;?></span>
                <?php endif; ?>           
            </div>
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="syllabus">Syllabus<span class="help-inline">*</span></label>
           <div class="controls col-md-4">
                <select name="syllabus" id="syllabus" class="form-control form-control-inline col-md-4" >
                <option value="" >---Select---</option>
                  <option value="civil" <?php echo ( isset($_POST['syllabus']) && $_POST['syllabus']=== 'civil')?'selected': ''; ?> >Civil Engineering/option>
                  <option value="it" <?php echo ( isset($_POST['syllabus']) && $_POST['syllabus']=== 'it')?'selected': ''; ?> >IT Engineering</option>
                  <option value="electrical" <?php echo ( isset($_POST['syllabus']) && $_POST['syllabus']=== 'electrical')?'selected': ''; ?> >Electrical Engineering</option>
                </select>
                <?php if (!empty($syllabusError)): ?>
                <span class="help-inline"><?php echo $syllabusError;?></span>
                <?php endif; ?>
            </div>
    </div>
    </div>
    <br><hr>
<!-- education -->
  <div class="container" >
    <div class="row">
      <h4>Education </h4>
    </div>
    
    
    <div class="form-group ">
        <label class="control-label col-md-2" for="gender">Study in</label>
            <div class="controls col-md-4">
            <label class="radio-inline"><input type="radio" name="studyin" id="myanmar" value="myanmar" checked>Myanmar</label>
            <label class="radio-inline"><input type="radio" name="studyin" id="abroad" value="abroad" <?php echo ( isset($_POST['studyin']) && $_POST['studyin']=== 'abroad')?'checked': ''; ?> >Abroad</label>
                       
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="school">School<span class="help-inline">*</span></label>
            <div class="controls col-md-4">
               <input name="school" type="text" id="school" class="form-control form-control-inline col-md-4" value="<?php echo !empty($school)?$school:'';?>" >
               <?php if (!empty($schoolError)): ?>
                <span class="help-inline"><?php echo $schoolError;?></span>
                <?php endif; ?>           
            </div>
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="level">Level of Completion<span class="help-inline">*</span></label>
           <div class="controls col-md-4">
                <select name="level" id="level" class="form-control form-control-inline col-md-4" >
                <option value="" >---Select---</option>
                  <option value="gce_o" <?php echo ( isset($_POST['level']) && $_POST['level']=== 'gce_o')?'selected': ''; ?> >GCE O Level</option>
                  <option value="gce_a" <?php echo ( isset($_POST['level']) && $_POST['level']=== 'gce_a')?'selected': ''; ?> >GCE A Level</option>
                  <option value="grade11" <?php echo ( isset($_POST['level']) && $_POST['level']=== 'grade11')?'selected': ''; ?> >Grade 11</option>
                  <option value="igcse" <?php echo ( isset($_POST['level']) && $_POST['level']=== 'igcse')?'selected': ''; ?>>IGCSE</option>
                </select>
                <?php if (!empty($levelError)): ?>
                <span class="help-inline"><?php echo $levelError;?></span>
                <?php endif; ?>
            </div>
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="level">Major of Completion<span class="help-inline">*</span></label>
           <div class="controls col-md-4">
                <select name="level1" id="level" class="form-control form-control-inline col-md-4" >
                <option value="" >---Select---</option>
                  <option value="science" <?php echo ( isset($_POST['level1']) && $_POST['level1']=== 'science')?'selected': ''; ?> >Science (Biology)</option>
                  <option value="arts" <?php echo ( isset($_POST['level1']) && $_POST['level1']=== 'arts')?'selected': ''; ?>  >Arts</option>
                  <option value="sanda" <?php echo ( isset($_POST['level1']) && $_POST['level1']=== 'sanda')?'selected': ''; ?> >Science and Arts</option>
                  <option value="other" <?php echo ( isset($_POST['level1']) && $_POST['level1']=== 'other')?'selected': ''; ?> >other</option>
                </select>
                <?php if (!empty($level1Error)): ?>
                <span class="help-inline"><?php echo $level1Error;?></span>
                <?php endif; ?>
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="marks">Marks<span class="help-inline">*</span></label>
            <div class="controls col-md-4">
               <input name="marks" type="text" id="marks" class="form-control form-control-inline col-md-4" value="<?php echo !empty($marks)?$marks:'';?>" >
               <?php if (!empty($marksError)): ?>
                <span class="help-inline"><?php echo $marksError;?></span>
                <?php endif; ?>           
            </div>
    </div>
  </div>
  <br><hr>
<!-- personal details -->
  <div class="container" >
    <div class="row">
      <h4>Personal Details </h4>
    </div>
    
    
    <div class="form-group ">
        <label class="control-label col-md-2" for="birthdate">Birthdate</label>
            <div class="controls col-md-4">
            <input type="date" id="birthdate" name="birthdate" value="<?php echo !empty($_POST['birthdate'])?$_POST['birthdate']:'';?>">
            <?php if (!empty($birthdateError)): ?>
                <span class="help-inline"><?php echo $birthdateError;?></span>
                <?php endif; ?>            
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="nationality">Nationality</label>
            <div class="controls col-md-4">
               <input name="nationality" type="text" id="nationality" class="form-control form-control-inline col-md-4" value="<?php echo !empty($_POST['nationality'])?$_POST['nationality']:'';?>" >
               <?php if (!empty($nationalityError)): ?>
                <span class="help-inline"><?php echo $nationalityError;?></span>
                <?php endif; ?>          
            </div>
            <label class="control-label col-md-2" for="nationality">Citizenship</label>
            <div class="controls col-md-4">
               <input name="citizen" type="text" id="citizen" class="form-control form-control-inline col-md-4" value="<?php echo !empty($_POST['citizen'])?$_POST['citizen']:'';?>"  >
               <?php if (!empty($citizenError)): ?>
                <span class="help-inline"><?php echo $citizenError;?></span>
                <?php endif; ?>             
            </div>
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="level">Religion</label>
           <div class="controls col-md-4">
                <select name="religion" id="religion" class="form-control form-control-inline col-md-4" >
                <option value="" >---Select---</option>
                  <option value="buddhism" <?php echo ( isset($_POST['religion']) && $_POST['religion']=== 'buddhism')?'selected': ''; ?> >Buddhism</option>
                  <option value="chirstian" <?php echo ( isset($_POST['religion']) && $_POST['religion']=== 'chirstian')?'selected': ''; ?> >Christian</option>
                  <option value="islam" <?php echo ( isset($_POST['religion']) && $_POST['religion']=== 'islam')?'selected': ''; ?>>Islam</option>
                  <option value="hindu" <?php echo ( isset($_POST['religion']) && $_POST['religion']=== 'hindu')?'selected': ''; ?>>Hindu</option>
                  <option value="other" <?php echo ( isset($_POST['religion']) && $_POST['religion']=== 'other')?'selected': ''; ?>>Other</option>
                </select>
                <?php if (!empty($religionError)): ?>
                <span class="help-inline"><?php echo $religionError;?></span>
                <?php endif; ?>
            </div>
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="bloodtype">Blood Group</label>
           <div class="controls col-md-4">
                <select name="bloodtype" id="bloodtype" class="form-control form-control-inline col-md-4" >
                <option value="" >---Select---</option>
                  <option value="A" <?php echo ( isset($_POST['bloodtype']) && $_POST['bloodtype']=== 'A')?'selected': ''; ?>  >A</option>
                  <option value="B"  <?php echo ( isset($_POST['bloodtype']) && $_POST['bloodtype']=== 'B')?'selected': ''; ?> >B</option>
                  <option value="AB"  <?php echo ( isset($_POST['bloodtype']) && $_POST['bloodtype']=== 'AB')?'selected': ''; ?>>AB</option>
                  <option value="O"  <?php echo ( isset($_POST['bloodtype']) && $_POST['bloodtype']=== 'O')?'selected': ''; ?>>O</option>
                </select>
                <?php if (!empty($bloodtypeError)): ?>
                <span class="help-inline"><?php echo $bloodtypeError;?></span>
                <?php endif; ?>
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="citizenid">Citizen ID<span class="help-inline">*</span></label>
            <div class="controls col-md-4">
               <input name="citizenid" type="text" id="citizenid" class="form-control form-control-inline col-md-4" value="<?php echo !empty($_POST['citizenid'])?$_POST['citizenid']:'';?>" >
               <?php if (!empty($citizenidError)): ?>
                <span class="help-inline"><?php echo $citizenidError;?></span>
                <?php endif; ?>           
            </div>
            <label class="control-label col-md-2" for="passport">If not Myanmar Citizen,enter passport number</label>
            <div class="controls col-md-4">
               <input name="passport" type="text" id="passport" class="form-control form-control-inline col-md-4" value="<?php echo !empty($_POST['passport'])?$_POST['passport']:'';?>" >
               <?php if (!empty($passportError)): ?>
                <span class="help-inline"><?php echo $passportError;?></span>
                <?php endif; ?>             
            </div>
    </div>
  </div>
  <br><hr>
  <!-- Mailing Address -->
  <div class="container" >
    <div class="row">
      <h4>Mailing Address </h4>
    </div>
    
    
    
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="address">Address No:<span class="help-inline">*</span></label>
            <div class="controls col-md-4">
               <input name="address" type="text" id="address" class="form-control form-control-inline col-md-4" value="<?php echo !empty($_POST['address'])?$_POST['address']:'';?>" >
               <?php if (!empty($addressError)): ?>
                <span class="help-inline"><?php echo $addressError;?></span>
                <?php endif; ?>          
            </div>
            
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="street">Street<span class="help-inline">*</span></label>
        <div class="controls col-md-4">
               <input name="street" type="text" id="street" class="form-control form-control-inline col-md-4" value="<?php echo !empty($_POST['street'])?$_POST['street']:'';?>" >
               <?php if (!empty($streetError)): ?>
                <span class="help-inline"><?php echo $streetError;?></span>
                <?php endif; ?>            
            </div>  
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="township">Township<span class="help-inline">*</span></label>
        <div class="controls col-md-4">
               <input name="township" type="text" id="township" class="form-control form-control-inline col-md-4" value="<?php echo !empty($_POST['township'])?$_POST['township']:'';?>" >
               <?php if (!empty($townshipError)): ?>
                <span class="help-inline"><?php echo $townshipError;?></span>
                <?php endif; ?>            
            </div> 
            <label class="control-label col-md-2" for="city">City<span class="help-inline">*</span></label>
        <div class="controls col-md-4">
               <input name="city" type="text" id="city" class="form-control form-control-inline col-md-4"  value="<?php echo !empty($_POST['city'])?$_POST['city']:'';?>">
               <?php if (!empty($cityError)): ?>
                <span class="help-inline"><?php echo $cityError;?></span>
                <?php endif; ?>             
        </div>  
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="zipcode">Zip Code</label>
            <div class="controls col-md-4">
               <input name="zipcode" type="text" id="zipcode" class="form-control form-control-inline col-md-4" value="<?php echo !empty($_POST['zipcode'])?$_POST['zipcode']:'';?>" >
                            
            </div>
            
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="township">Telephone</label>
        <div class="controls col-md-4">
               <input name="telephone" type="text" id="telephone" class="form-control form-control-inline col-md-4" value="<?php echo !empty($_POST['telephone'])?$_POST['telephone']:'';?>" >
                            
            </div> 
            <label class="control-label col-md-2" for="mobile">Mobile<span class="help-inline">*</span></label>
        <div class="controls col-md-4">
               <input name="mobile" type="text" id="mobile" class="form-control form-control-inline col-md-4" value="<?php echo !empty($_POST['mobile'])?$_POST['mobile']:'';?>" >
               <?php if (!empty($mobileError)): ?>
                <span class="help-inline"><?php echo $mobileError;?></span>
                <?php endif; ?>            
        </div>  
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="facebook">Facebook</label>
            <div class="controls col-md-4">
               <input name="facebook" type="text" id="facebook" class="form-control form-control-inline col-md-4" value="<?php echo !empty($_POST['facebook'])?$_POST['facebook']:'';?>" >
                            
            </div>
            
    </div>
  </div>
  <br><hr>
  <!-- father's information -->
  <div class="container" >
    <div class="row">
      <h4>Father's Information </h4>
    </div>
    
    
    
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="fname">Name<span class="help-inline">*</span></label>
            <div class="controls col-md-4">
               <input name="fname" type="text" id="fname" class="form-control form-control-inline col-md-4" value="<?php echo !empty($_POST['fname'])?$_POST['fname']:'';?>" >
               <?php if (!empty($fnameError)): ?>
                <span class="help-inline"><?php echo $fnameError;?></span>
                <?php endif; ?>            
            </div>
            
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="fnationality">Nationality</label>
            <div class="controls col-md-4">
               <input name="fnationality" type="text" id="fnationality" class="form-control form-control-inline col-md-4" value="<?php echo !empty($_POST['fnationality'])?$_POST['fnationality']:'';?>" >
                            
            </div>
            <label class="control-label col-md-2" for="fcitizen">Citizenship</label>
            <div class="controls col-md-4">
               <input name="fcitizen" type="text" id="fcitizen" class="form-control form-control-inline col-md-4" value="<?php echo !empty($_POST['fcitizen'])?$_POST['fcitizen']:'';?>" >
                            
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="fstatus">Status</label>
            <div class="controls col-md-4">
            <label class="radio-inline"><input type="radio" name="fstatus" value="living" id="fliving" checked>Living</label>
            <label class="radio-inline"><input type="radio" name="fstatus" value="decease" id="fdecease"  <?php echo ( isset($_POST['fstatus']) && $_POST['fstatus']=== 'decease')?'checked': ''; ?>>Decease</label>
                            
            </div>
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="fage">Age</label>
        <div class="controls col-md-4">
               <input name="fage" type="text" id="fage" class="form-control form-control-inline col-md-4" value="<?php echo !empty($_POST['fage'])?$_POST['fage']:'';?>"  <?php echo ( isset($_POST['fstatus']) && $_POST['fstatus']=== 'decease')?'disabled': ''; ?> >
               <?php if (!empty($fageError)): ?>
                <span class="help-inline"><?php echo $fageError;?></span>
                <?php endif; ?>            
            </div>  
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="foccupation">Occuputation</label>
        <div class="controls col-md-4">
               <input name="foccupation" type="text" id="foccupation" class="form-control form-control-inline col-md-4" value="<?php echo !empty($_POST['foccupation'])?$_POST['foccupation']:'';?>" <?php echo ( isset($_POST['fstatus']) && $_POST['fstatus']=== 'decease')?'disabled': ''; ?> >
                            
            </div>  
            <label class="control-label col-md-2" for="fposition">Position</label>
        <div class="controls col-md-4">
               <input name="fposition" type="text" id="fposition" class="form-control form-control-inline col-md-4" value="<?php echo !empty($_POST['fposition'])?$_POST['fposition']:'';?>" <?php echo ( isset($_POST['fstatus']) && $_POST['fstatus']=== 'decease')?'disabled': ''; ?> >
                            
            </div> 
    </div>
    <br><br>
    <div class="form-check">
        <label class="control-label col-md-2" for="faddress">Father's address</label>
        <div class="controls col-md-4">
               <input name="faddress" value="" type="checkbox" id="faddress" class="form-check-input form-control-inline col-md-4"  <?php echo ( isset($_POST['faddress']) && $_POST['faddress']=== 'ck')?'checked': ''; ?> <?php echo ( isset($_POST['fstatus']) && $_POST['fstatus']=== 'decease')?'disabled': ''; ?>>
               <label class="form-check-label" for="faddress">Same as applicant's address</label>           
        </div>  
    </div>
    <br><br>
    <div class="form-group">
        <label class="control-label col-md-2" for="street">Street</label>
        <div class="controls col-md-4">
               <input name="fstreet" type="text" id="fstreet" class="form-control form-control-inline col-md-4" value="<?php echo !empty($_POST['fstreet'])?$_POST['fstreet']:'';?>" <?php echo ( isset($_POST['fstatus']) && $_POST['fstatus']=== 'decease')?'disabled': ''; ?> >
                            
            </div>  
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="township">Township<span class="help-inline">*</span></label>
        <div class="controls col-md-4">
               <input name="ftownship" type="text" id="ftownship" class="form-control form-control-inline col-md-4" value="<?php echo !empty($_POST['ftownship'])?$_POST['ftownship']:'';?>" <?php echo ( isset($_POST['fstatus']) && $_POST['fstatus']=== 'decease')?'disabled': ''; ?> >
                            
            </div> 
            <label class="control-label col-md-2" for="city">City<span class="help-inline">*</span></label>
        <div class="controls col-md-4">
               <input name="fcity" type="text" id="fcity" class="form-control form-control-inline col-md-4" value="<?php echo !empty($_POST['fcity'])?$_POST['fcity']:'';?>" <?php echo ( isset($_POST['fstatus']) && $_POST['fstatus']=== 'decease')?'disabled': ''; ?> >
                            
        </div>  
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="zipcode">Zip Code</label>
            <div class="controls col-md-4">
               <input name="fzipcode" type="text" id="fzipcode" class="form-control form-control-inline col-md-4" value="<?php echo !empty($_POST['fzipcode'])?$_POST['fzipcode']:'';?>" <?php echo ( isset($_POST['fstatus']) && $_POST['fstatus']=== 'decease')?'disabled': ''; ?> >
                            
            </div>
            
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="township">Telephone<span class="help-inline">*</span></label>
        <div class="controls col-md-4">
               <input name="ftelephone" type="text" id="ftelephone" class="form-control form-control-inline col-md-4" value="<?php echo !empty($_POST['ftelephone'])?$_POST['ftelephone']:'';?>" <?php echo ( isset($_POST['fstatus']) && $_POST['fstatus']=== 'decease')?'disabled': ''; ?> >
                            
            </div> 
            <label class="control-label col-md-2" for="fmobile">Mobile<span class="help-inline">*</span></label>
        <div class="controls col-md-4">
               <input name="fmobile" type="text" id="fmobile" class="form-control form-control-inline col-md-4" value="<?php echo !empty($_POST['fmobile'])?$_POST['fmobile']:'';?>" <?php echo ( isset($_POST['fstatus']) && $_POST['fstatus']=== 'decease')?'disabled': ''; ?> >
                            
        </div>  
    </div>    <br>
    
  
  </div>
  <br><hr>
  <div class="container" >
    <div class="row">
      <h4>Mother's Information </h4>
    </div>
    
    
    
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="mname">Name<span class="help-inline">*</span></label>
            <div class="controls col-md-4">
               <input name="mname" type="text" id="mname" class="form-control form-control-inline col-md-4" value="<?php echo !empty($_POST['mname'])?$_POST['mname']:'';?>" >
               <?php if (!empty($mnameError)): ?>
                <span class="help-inline"><?php echo $mnameError;?></span>
                <?php endif; ?>           
            </div>
            
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="mnationality">Nationality</label>
            <div class="controls col-md-4">
               <input name="mnationality" type="text" id="mnationality" class="form-control form-control-inline col-md-4" value="<?php echo !empty($_POST['mnationality'])?$_POST['mnationality']:'';?>" >
                            
            </div>
            <label class="control-label col-md-2" for="mcitizen">Citizenship</label>
            <div class="controls col-md-4">
               <input name="mcitizen" type="text" id="mcitizen" class="form-control form-control-inline col-md-4" value="<?php echo !empty($_POST['mcitizen'])?$_POST['mcitizen']:'';?>" >
                            
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="mstatus">Status</label>
            <div class="controls col-md-4">
            <label class="radio-inline"><input type="radio" name="mstatus" id="mliving" value="mliving" checked>Living</label>
            <label class="radio-inline"><input type="radio" name="mstatus" id="mdecease" value="mdecease" <?php echo ( isset($_POST['mstatus']) && $_POST['mstatus']=== 'mdecease')?'checked': ''; ?>>Decease</label>
                            
            </div>
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="mage">Age</label>
        <div class="controls col-md-4">
               <input name="mage" type="text" id="mage" class="form-control form-control-inline col-md-4" value="<?php echo !empty($_POST['mage'])?$_POST['mage']:'';?>" <?php echo ( isset($_POST['mstatus']) && $_POST['mstatus']=== 'mdecease')?'disabled': ''; ?> >
                            
            </div>  
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="moccupation">Occuputation</label>
        <div class="controls col-md-4">
               <input name="moccupation" type="text" id="moccupation" class="form-control form-control-inline col-md-4" value="<?php echo !empty($_POST['moccupation'])?$_POST['moccupation']:'';?>" <?php echo ( isset($_POST['mstatus']) && $_POST['mstatus']=== 'mdecease')?'disabled': ''; ?> >
                            
            </div>  
            <label class="control-label col-md-2" for="mposition">Position</label>
        <div class="controls col-md-4">
               <input name="mposition" type="text" id="mposition" class="form-control form-control-inline col-md-4" value="<?php echo !empty($_POST['mposition'])?$_POST['mposition']:'';?>" <?php echo ( isset($_POST['mstatus']) && $_POST['mstatus']=== 'mdecease')?'disabled': ''; ?> >
                            
            </div> 
    </div>
    <br><br>
    <div class="form-check">
        <label class="control-label col-md-2" for="maddress">Mother's address</label>
        <div class="controls col-md-4">
               <input name="maddress" vlaue="" type="checkbox" id="maddress" class="form-check-input form-control-inline col-md-4"  <?php echo ( isset($_POST['maddress']) && $_POST['maddress']=== 'ck')?'checked': ''; ?> <?php echo ( isset($_POST['mstatus']) && $_POST['mstatus']=== 'mdecease')?'disabled': ''; ?> >
               <label class="form-check-label" for="maddress">Same as applicant's address</label>           
        </div>  
    </div>
    <br><br>
    <div class="form-group">
        <label class="control-label col-md-2" for="mstreet">Street</label>
        <div class="controls col-md-4">
               <input name="mstreet" type="text" id="mstreet" class="form-control form-control-inline col-md-4" value="<?php echo !empty($_POST['mstreet'])?$_POST['mstreet']:'';?>" <?php echo ( isset($_POST['mstatus']) && $_POST['mstatus']=== 'mdecease')?'disabled': ''; ?>>
                            
            </div>  
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="mtownship">Township<span class="help-inline">*</span></label>
        <div class="controls col-md-4">
               <input name="mtownship" type="text" id="mtownship" class="form-control form-control-inline col-md-4" value="<?php echo !empty($_POST['mtownship'])?$_POST['mtownship']:'';?>" <?php echo ( isset($_POST['mstatus']) && $_POST['mstatus']=== 'mdecease')?'disabled': ''; ?> >
                            
            </div> 
            <label class="control-label col-md-2" for="mcity">City<span class="help-inline">*</span></label>
        <div class="controls col-md-4">
               <input name="mcity" type="text" id="mcity" class="form-control form-control-inline col-md-4" value="<?php echo !empty($_POST['mcity'])?$_POST['mcity']:'';?>" <?php echo ( isset($_POST['mstatus']) && $_POST['mstatus']=== 'mdecease')?'disabled': ''; ?>>
                            
        </div>  
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="mzipcode">Zip Code</label>
            <div class="controls col-md-4">
               <input name="mzipcode" type="text" id="mzipcode" class="form-control form-control-inline col-md-4" value="<?php echo !empty($_POST['mzipcode'])?$_POST['mzipcode']:'';?>" <?php echo ( isset($_POST['mstatus']) && $_POST['mstatus']=== 'mdecease')?'disabled': ''; ?>>
                            
            </div>
            
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="mtelephone">Telephone</label>
        <div class="controls col-md-4">
               <input name="mtelephone" type="text" id="mtelephone" class="form-control form-control-inline col-md-4" value="<?php echo !empty($_POST['mtelephone'])?$_POST['mtelephone']:'';?>" <?php echo ( isset($_POST['mstatus']) && $_POST['mstatus']=== 'mdecease')?'disabled': ''; ?> >
                            
            </div> 
            <label class="control-label col-md-2" for="mmobile">Mobile<span class="help-inline">*</span></label>
        <div class="controls col-md-4">
               <input name="mmobile" type="text" id="mmobile" class="form-control form-control-inline col-md-4" value="<?php echo !empty($_POST['mmobile'])?$_POST['mmobile']:'';?>" <?php echo ( isset($_POST['mstatus']) && $_POST['mstatus']=== 'mdecease')?'disabled': ''; ?> >
                            
        </div>  
    </div>    <br>
    <br><hr>
  <div class="container" >
    <div class="row">
      <h4>Guardian's Information </h4>
    </div>    
    
    
    <div class="form-group ">
        <label class="control-label col-md-2" for="gstatus">Status</label>
            <div class="controls col-md-4">
            <label class="radio-inline"><input type="radio" name="gstatus" value="father" id="father" checked>Father</label>
            <label class="radio-inline"><input type="radio" name="gstatus" value="mother" id="mother"  <?php echo ( isset($_POST['gstatus']) && $_POST['gstatus']=== 'mother')?'checked': ''; ?>>Mother</label>
            <label class="radio-inline"><input type="radio" name="gstatus" value="other" id="other" <?php echo ( isset($_POST['gstatus']) && ($_POST['gstatus']==='other' || $_POST['gstatus']=== 'on'))?'checked': ''; ?>  >Other</label>
                    
            </div>
            
            
    </div>
    <div id="guardianInfo">
    <?php 
        if(isset($_POST['gstatus'])){
            
            if($_POST['gstatus'] === "other" or $_POST['gstatus']==="on"){
                
                require 'show_guardian.php';
            }
        }
    ?>
    </div>     
    
    
  
  </div>
  <br><hr>
    <div class="col-md-12 button">
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
    </div>
</form>
</div>
<script>
$(document).ready(function(){

$('#other').on('change', function () {

    
     var gname = $('#gname').val();
     var gnationality = $('#gnationality').val();
     var gcitizen = $('#gcitizen').val();
     var gstatus1 = $('#gstatus1').val();
     var gage = $('#gage').val();
     var goccupation = $('#goccupation').val();
     var gposition = $('#gposition').val();
     var gaddress = $('#gaddress').val();
     var gstreet = $('#gstreet').val();
     var gtownship = $('#gtownship').val();
     var gcity = $('#gcity').val();
     var gzipcode = $('#gzipcode').val();
     var gtelephone = $('#gtelephone').val();
     var gmobile = $('#gmobile').val();
    var gstatus = $(this).val();
    console.log(gstatus);
    console.log("arr");
    //console.log(gname);
    console.log(gstatus);
    $.ajax({
        type: "POST",
        url: "show_guardian.php",
        // dataType: 'json',
        data: {'gstatus': gstatus,'gname':gname,'gnationality':gnationality, 'gcitizen':gcitizen, 'gstatus1':gstatus1,'gage':gage, 'goccupation':goccupation, 'gposition':gposition,'gaddress':gaddress,'gstreet':gstreet,'gtownship':gtownship, 'gcity':gcity,'gzipcode':gzipcode,'gtelephone':gtelephone,'gmobile':gmobile},
        success: function (html) {
            console.log('hey');
            console.log(html);
            $('#guardianInfo').html(html);
            
           
        }
    });
});


$('#father').on('change', function () {

var gstatus = $(this).val();
console.log(gstatus);


$.ajax({
    type: "POST",
    url: "show_guardian.php",
    // dataType: 'json',
    data: {'gstatus': gstatus },
    success: function (json) {
        
        console.log(json);
        $('#guardianInfo').html(json);
        
       
    }
});
});

$('#mother').on('change', function () {

var gstatus = $(this).val();
console.log(gstatus);


$.ajax({
    type: "POST",
    url: "show_guardian.php",
    // dataType: 'json',
    data: {'gstatus': gstatus },
    success: function (json) {
        
        console.log(json);
        $('#guardianInfo').html(json);
        
       
    }
});
})

// father fdecease
$('#fdecease').on('change',function(){
    $('#fage').prop('disabled',true);
    $('#foccupation').prop('disabled',true);
    $('#fposition').prop('disabled',true);
    $('#fstreet').prop('disabled',true);
    $('#ftownship').prop('disabled',true);
    $('#fzipcode').prop('disabled',true);
    $('#ftelephone').prop('disabled',true);
    $('#fcity').prop('disabled',true);
    $('#fmobile').prop('disabled',true);
    $('#faddress').prop('disabled',true);
});
$('#fliving').on('change',function(){
    $('#fage').removeAttr('disabled');
    $('#foccupation').removeAttr('disabled',true);
    $('#fposition').removeAttr('disabled',true);
    $('#fstreet').removeAttr('disabled',true);
    $('#ftownship').removeAttr('disabled',true);
    $('#fzipcode').removeAttr('disabled',true);
    $('#ftelephone').removeAttr('disabled',true);
    $('#fcity').removeAttr('disabled',true);
    $('#fmobile').removeAttr('disabled',true);
    $('#faddress').removeAttr('disabled',true);

})
// mother fdecease

$('#mdecease').on('change',function(){
    if(this.checked){

    $('#mage').prop('disabled',true);
    $('#moccupation').prop('disabled',true);
    $('#mposition').prop('disabled',true);
    $('#mstreet').prop('disabled',true);
    $('#mtownship').prop('disabled',true);
    $('#mzipcode').prop('disabled',true);
    $('#mtelephone').prop('disabled',true);
    $('#mcity').prop('disabled',true);
    $('#mmobile').prop('disabled',true);
    $('#maddress').prop('disabled',true);

    }
    
}); 
$('#mliving').on('change',function(){
    $('#mage').removeAttr('disabled');
    $('#moccupation').removeAttr('disabled',true);
    $('#mposition').removeAttr('disabled',true);
    $('#mstreet').removeAttr('disabled',true);
    $('#mtownship').removeAttr('disabled',true);
    $('#mzipcode').removeAttr('disabled',true);
    $('#mtelephone').removeAttr('disabled',true);
    $('#mcity').removeAttr('disabled',true);
    $('#mmobile').removeAttr('disabled',true);
    $('#maddress').removeAttr('disabled',true);

})

// same as applicant father
$('#faddress').on('click',function(){
    var street = $('#street').val();
    var township = $('#township').val();
    var zipcode = $('#zipcode').val();
    var telephone = $('#telephone').val();
    var city = $('#city').val();
    var mobile = $('#mobile').val();
    if(this.checked){
        $('#faddress').val('ck');
        console.log(street);
        $('#fstreet').val(street);
        $('#ftownship').val(township);
        $('#fzipcode').val(zipcode);
        $('#ftelephone').val(telephone);
        $('#fcity').val(city);
        

    }
    else{
        $('#fstreet').val('');
        $('#ftownship').val("");
        $('#fzipcode').val('');
        $('#ftelephone').val('');
        $('#fcity').val('');
       
    }
    
});

// same as applicant mother
$('#maddress').on('click',function(){
    var street = $('#street').val();
    var township = $('#township').val();
    var zipcode = $('#zipcode').val();
    var telephone = $('#telephone').val();
    var city = $('#city').val();
    var mobile = $('#mobile').val();
    if(this.checked){
        $('#maddress').val('ck');
        console.log(street);
        $('#mstreet').val(street);
        $('#mtownship').val(township);
        $('#mzipcode').val(zipcode);
        $('#mtelephone').val(telephone);
        $('#mcity').val(city);
        

    }
    else{
        $('#mstreet').val('');
        $('#mtownship').val("");
        $('#mzipcode').val('');
        $('#mtelephone').val('');
        $('#mcity').val('');
       
    }
    
});

// same as applicant guardian
$('#gaddress').on('click',function(){
    alert("hey");
    var street = $('#street').val();
    var township = $('#township').val();
    var zipcode = $('#zipcode').val();
    var telephone = $('#telephone').val();
    var city = $('#city').val();
    var mobile = $('#mobile').val();
    if(this.checked){
        $('#gaddress').val('ck');
        console.log(street);
        $('#fstreet').val(street);
        $('#ftownship').val(township);
        $('#fzipcode').val(zipcode);
        $('#ftelephone').val(telephone);
        $('#fcity').val(city);
        

    }
    else{
        $('#fstreet').val('');
        $('#ftownship').val("");
        $('#fzipcode').val('');
        $('#ftelephone').val('');
        $('#fcity').val('');
       
    }
    
});


});

</script>

</body>
</html>