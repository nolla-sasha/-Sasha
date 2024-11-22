<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    $fullName = $_POST['fullName']; 
    $dob = $_POST['dob']; 
    $gender = $_POST['gender'];
    $nationality = $_POST['nationality'];
    $address = $_POST['address'];
    $contactNumber = $_POST['contactNumber']; 
    $email = $_POST['email'];
    $parentNames = $_POST['parentNames']; 
    $relationship = $_POST['relationship'];
    $parentContactNumbers = $_POST['parentContactNumbers']; 
    $parentEmails = $_POST['parentEmails']; 
    $occupation = $_POST['occupation']; 
    $parentAddress = $_POST['parentAddress']; 
    $previousSchools = $_POST['previousSchools'];
    $grades = $_POST['grades']; 
    $transcripts = $_POST['transcripts'];
    $activities = $_POST['activities'];
    $awards = $_POST['awards'];
    $allergies = $_POST['allergies'];
    $medications = $_POST['medications']; 
    $conditions = $_POST['conditions'];
    $immunizations = $_POST['immunizations'];
    $emergencyContact = $_POST['emergencyContact'];
    $grade = $_POST['grade']; 
    $startDate = $_POST['startDate']; 
    $reason = $_POST['reason'];
    $hobbies = $_POST['hobbies'];
    $specialNeeds = $_POST['specialNeeds'];
    $rating = $_POST['rating'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Application Results</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: lightskyblue;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 60%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1, h2 {
            text-align: center;
            color: #333;
        }
        h2 {
            margin-top: 40px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Form application results</h1>
        <h2>Personal Information</h2>
        <table>
            <tr>
                <th>Full name</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>Nationality</th>
                <th>Home Address</th>
                <th>Contact number</th>
                <th>Email Address</th>
            </tr>
            <tr>
                <td><?php echo $fullName;?></td>
                <td><?php echo $dob; ?></td>
                <td><?php echo $gender; ?></td>
                <td><?php echo $nationality;?></td>
                <td><?php echo $address;?></td>
                <td><?php echo $contactNumber;?></td>
                <td><?php echo $email; ?></td>
            </tr>
        </table>
        <h2>Parent/Guardian Information</h2>
        <table>
            <tr>
                <th>Full Names of Parents/Guardians</th>
                <th>Relationship to Student</th>
                <th>Contact Numbers</th>
                <th>Email Addresses</th>
                <th>Occupation and Employer</th>
                <th>Home Address</th>
            </tr>
            <tr>
                <td><?php echo $parentNames;?></td>
                <td><?php echo $relationship;?></td>
                <td><?php echo $parentContactNumbers;?></td>
                <td><?php echo $parentEmails;?></td>
                <td><?php echo $occupation;?></td>
                <td><?php echo $parentAddress;?></td>
            </tr>
        </table>
        <h2>Academic Information</h2>
        <table>
            <tr>
                <th>Previous Schools Attended</th>
                <th>Grades or Classes Completed</th>
                <th>Academic Transcripts/Reports</th>
                <th>Extracurricular Activities</th>
                <th>Awards and Honors</th>
            </tr>
            <tr>
                <td><?php echo $previousSchools;?></td>
                <td><?php echo $grades;?></td>
                <td><?php echo $transcripts;?></td>
                <td><?php echo $activities; ?></td>
                <td><?php echo $awards;?></td>
            </tr>
        </table>
        <h2>Medical Information</h2>
        <table>
            <tr>
                <th>Allergies</th>
                <th>Current Medications</th>
                <th>Medical Conditions</th>
                <th>Immunization Records</th>
                <th>Emergency Contact Details</th>
            </tr>
            <tr>
                <td><?php echo $allergies;?></td>
                <td><?php echo $medications;?></td>
                <td><?php echo $conditions;?></td>
                <td><?php echo $immunizations;?></td>
                <td><?php echo $emergencyContact;?></td>
            </tr>
        </table>
        <h2>Application Details</h2>
        <table>
            <tr>
                <th>Desired Admission Grade/Class</th>
                <th>Preferred Start Date</th>
                <th>Reason for Choosing the School</th>
            </tr>
            <tr>
                <td><?php echo $grade;?></td>
                <td><?php echo $startDate;?></td>
                <td><?php echo $reason;?></td>
            </tr>
        </table>
        <h2>Additional Information</h2>
        <table>
            <tr>
                <th>Hobbies and Interests</th>
                <th>Special Needs or Accommodations</th>
                <th>How would you rate our school</th>
            </tr>
            <tr>
                <td><?php echo $hobbies;?></td>
                <td><?php echo $specialNeeds;?></td>
                <td><?php echo $rating;?></td>
            </tr>
        </table>
        <p style="text-align: center;">Thank you for choosing Complex Academy</p>
    </div>
</body>
</html>
