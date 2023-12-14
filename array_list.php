<?php 

$users = [
    [
        "id" => 1,
        "name" => [
            "first_name" => "John",
            "last_name" => "Doe"
        ],
        "age" => 25,
        "blood_group" => "A+",
        "salary" => 50000,
        "designation" => "Software Engineer",
        "contact_info" => [
            "email" => "john.doe@example.com",
            "phone" => "+1 (555) 123-4567"
        ],
        "address" => [
            "street" => "123 Main Street",
            "city" => "Anytown",
            "state" => "CA",
            "zip_code" => "12345"
        ],
        "education" => [
            "degree" => "Bachelor of Science in Computer Science",
            "university" => "University of Anytown",
            "graduation_year" => 2018
        ],
        "skills" => [
            "programming_languages" => ["Java", "Python", "JavaScript"],
            "frameworks" => ["React", "Spring Boot"],
            "databases" => ["MySQL", "MongoDB"]
        ],
        "work_history" => [
            [
                "position" => "Software Developer",
                "company" => "Tech Solutions Inc.",
                "start_year" => 2018,
                "end_year" => 2020
            ],
            [
                "position" => "Senior Software Engineer",
                "company" => "Innovate Tech Co.",
                "start_year" => 2020,
                "end_year" => null
            ]
        ]
    ],
     [
        "id" => 2,
        "name" => [
            "first_name" => "Jane",
            "last_name" => "Smith"
        ],
        "age" => 30,
        "blood_group" => "B-",
        "salary" => 60000,
        "designation" => "Data Scientist",
        "contact_info" => [
            "email" => "jane.smith@example.com",
            "phone" => "+1 (555) 234-5678"
        ],
        "address" => [
            "street" => "456 Oak Avenue",
            "city" => "Sometown",
            "state" => "NY",
            "zip_code" => "67890"
        ],
        "education" => [
            "degree" => "Master of Science in Data Science",
            "university" => "State University",
            "graduation_year" => 2016
        ],
        "skills" => [
            "programming_languages" => ["R", "Python", "SQL"],
            "machine_learning" => ["TensorFlow", "Scikit-learn"],
            "data_analysis" => ["Pandas", "Matplotlib"]
        ],
        "work_history" => [
            [
                "position" => "Data Analyst",
                "company" => "Analytics Corp.",
                "start_year" => 2016,
                "end_year" => 2019
            ],
            [
                "position" => "Senior Data Scientist",
                "company" => "Insights Ltd.",
                "start_year" => 2019,
                "end_year" => null
            ]
        ]
     ],
    [
        "id" => 3,
        "name" => [
            "first_name" => "Alice",
            "last_name" => "Johnson"
        ],
        "age" => 22,
        "blood_group" => "O+",
        "salary" => 45000,
        "designation" => "Web Developer",
        "contact_info" => [
            "email" => "alice.johnson@example.com",
            "phone" => "+1 (555) 345-6789"
        ],
        "address" => [
            "street" => "789 Pine Street",
            "city" => "Cityville",
            "state" => "TX",
            "zip_code" => "45678"
        ],
        "education" => [
            "degree" => "Bachelor of Arts in Computer Science",
            "university" => "City University",
            "graduation_year" => 2020
        ],
        "skills" => [
            "web_development" => ["HTML", "CSS", "JavaScript"],
            "frameworks" => ["React", "Node.js"],
            "databases" => ["MongoDB", "Firebase"]
        ],
        "work_history" => [
            [
                "position" => "Junior Web Developer",
                "company" => "Web Solutions LLC",
                "start_year" => 2020,
                "end_year" => 2022
            ],
            [
                "position" => "Web Developer",
                "company" => "Digital Innovations Inc.",
                "start_year" => 2022,
                "end_year" => null
            ]
        ]
    ],
    [
        "id" => 4,
        "name" => [
            "first_name" => "Bob",
            "last_name" => "Brown"
        ],
        "age" => 28,
        "blood_group" => "AB+",
        "salary" => 55000,
        "designation" => "UX Designer",
        "contact_info" => [
            "email" => "bob.brown@example.com",
            "phone" => "+1 (555) 456-7890"
        ],
        "address" => [
            "street" => "101 Cedar Lane",
            "city" => "Villagetown",
            "state" => "FL",
            "zip_code" => "56789"
        ],
        "education" => [
            "degree" => "Bachelor of Fine Arts in Design",
            "university" => "Design Institute",
            "graduation_year" => 2015
        ],
        "skills" => [
            "user_experience" => ["UI/UX Design", "Wireframing", "Prototyping"],
            "tools" => ["Sketch", "Figma", "Adobe XD"]
        ],
        "work_history" => [
            [
                "position" => "Junior UX Designer",
                "company" => "Design Studio",
                "start_year" => 2015,
                "end_year" => 2018
            ],
            [
                "position" => "Senior UX Designer",
                "company" => "Creative Innovations Ltd.",
                "start_year" => 2018,
                "end_year" => null
            ]
        ]
    ],
    [
        "id" => 5,
        "name" => [
            "first_name" => "Charlie",
            "last_name" => "Davis"
        ],
        "age" => 35,
        "blood_group" => "A-",
        "salary" => 70000,
        "designation" => "Product Manager",
        "contact_info" => [
            "email" => "charlie.davis@example.com",
            "phone" => "+1 (555) 567-8901"
        ],
        "address" => [
            "street" => "222 Maple Street",
            "city" => "Smalltown",
            "state" => "WA",
            "zip_code" => "34567"
        ],
        "education" => [
            "degree" => "Master of Business Administration",
            "university" => "Business School",
            "graduation_year" => 2013
        ],
        "skills" => [
            "product_management" => ["Product Strategy", "Market Analysis", "Project Management"],
            "leadership" => ["Team Leadership", "Decision Making", "Communication"]
        ],
        "work_history" => [
            [
                "position" => "Associate Product Manager",
                "company" => "Tech Innovations Inc.",
                "start_year" => 2013,
                "end_year" => 2016
            ],
            [
                "position" => "Product Manager",
                "company" => "Innovate Enterprises",
                "start_year" => 2016,
                "end_year" => null
            ]
        ]
    ],
    // ... (and the rest of the users)
];

echo "<table border='1' style='border-collapse: collapse; width: 100%; margin: 20px 0;'> <tr>
<th>ID</th>
<th>Name</th>
<th>Age</th>
<th>Blood Group</th>
<th>Salary</th>
<th>Designation</th>
<th>Contact Info</th>
<th>Address</th>
<th>Education</th>
<th>Skills</th>
<th>Work History</th>
</tr>";
// foreach($users as $user){  
//     echo '<tr>';
//     foreach($user as $infos){
//         if (is_array($infos)){
//             echo"<td>";
//             foreach($infos as $key => $info){
//               if(!is_numeric($key)){
//                   echo "<p> $key : ";
//               }
//                 if(is_array($info) && !is_numeric($key)){
//                     foreach($info as $key => $i){
//                         echo $i . ', ';
//                     }
//                 }elseif(is_array($info) && is_numeric($key)){
//                     foreach($info as $key => $i){
//                         echo "<p> $key : $i </p>";
//                     }
//                 }else {
//                     echo $info;
//                 }
//                 echo "</p>";
//             }
//             echo "</td>";
//         }else{
//             echo"<td> $infos </td>";
//         }
//     }    
// }

// updated version off this code

foreach($users as $user){  
    echo '<tr>';
    foreach($user as $infos){
        echo is_array($infos) ? "<td>" : "<td> $infos </td>";
            foreach($infos as $key => $info){
                echo !is_numeric($key) ? "<p> $key : " : '';
                if(is_array($info) && !is_numeric($key)){
                    echo implode(', ', $info);
                }elseif(is_array($info) && is_numeric($key)){
                    foreach($info as $key => $i){
                        echo "<p> $key : $i </p>";
                    }
                    // echo "<p>". implode(', ', $info) . "</p>";
                }else {
                    echo $info;
                }
                echo "</p>";
            }
            echo is_array($infos) ? "<td>" : '';
    }
    echo "</tr>";
}
echo "</table>";
?>