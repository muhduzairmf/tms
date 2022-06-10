<?php

/**
 * A controller class for any processing data in clerk.php
 */
class ClerkController {
    /**
     * An instance method for finding all pending students, 
     * after the student submitting register form.
     */
    public function findAllPendingStudent() {
        $pending_student = [
            [
                "name" => "James Bond",
                "icNum" => "070707-07-0707",
                "age" => 15,
                "phoneNum" => "+11 1111 1111",
                "email" => "james@email.com",
                "category" => "Form 1-3",
                "parentName" => "Jack Bond",
                "parentPhoneNum" => "+11 2222 2222",
                "homeAddr" => "New York City",
                "schoolAddr" => "SK New York City",
                "subjects" => "English, Mathematics, Science",
                "methodPay" => "Cash",
                "receipt" => ""
            ],
            [
                "name" => "Alex Marlon",
                "icNum" => "080707-08-0707",
                "age" => 15,
                "phoneNum" => "+11 1133 3311",
                "email" => "alex@email.com",
                "category" => "Form 1-3",
                "parentName" => "Larry Marlon",
                "parentPhoneNum" => "+11 4222 4222",
                "homeAddr" => "Cape Town",
                "schoolAddr" => "SMK Cape Town",
                "subjects" => "English, Mathematics, Science",
                "methodPay" => "Cash",
                "receipt" => ""
            ],
            [
                "name" => "Marie Larrson",
                "icNum" => "070404-04-0708",
                "age" => 15,
                "phoneNum" => "+11 2223 3322",
                "email" => "marie@email.com",
                "category" => "Form 1-3",
                "parentName" => "Joe Larrson",
                "parentPhoneNum" => "+11 4333 6356",
                "homeAddr" => "Helsinki",
                "schoolAddr" => "SK Helsinki",
                "subjects" => "English, Mathematics, Science",
                "methodPay" => "Online Banking",
                "receipt" => "receipt-4.pdf"
            ]
        ];

        return $pending_student;
    }

    /**
     * An instance method for finding all registered students
     * in the database.
     */
    public function findAllRegisteredStudent() {
        $registered_student = [
            [
                'name' => 'Eric Wang',
                'icNum' => '070101-01-1101',
                'age' => 15,
                'phoneNumber' => '+11 1234 1234',
                'email' => 'eric@email.com',
                'category' => 'Form 1-3',
                'parentName' => 'Danny Wang',
                'parentPhoneNum' => '+11 1233 1233',
                'homeAddr' => 'California',
                'schoolAddr' => 'SMK California',
                'subjects' => 'Mathematics',
            ],
            [
                'name' => 'Tammy Abraham',
                'icNum' => '071209-13-4299',
                'age' => 15,
                'phoneNumber' => '+11 2211 2211',
                'email' => 'tammy@email.com',
                'category' => 'Form 1-3',
                'parentName' => 'Paul Abraham',
                'parentPhoneNum' => '+11 2218 2218',
                'homeAddr' => 'Birmingham',
                'schoolAddr' => 'SMK Birmingham',
                'subjects' => 'Mathematics',
            ],
            [
                'name' => 'Akram Mahinan',
                'icNum' => '070805-10-8787',
                'age' => 15,
                'phoneNumber' => '+11 4343 4343',
                'email' => 'akram@email.com',
                'category' => 'Form 1-3',
                'parentName' => 'Mahinan Mohamad',
                'parentPhoneNum' => '+11 4344 4344',
                'homeAddr' => 'Seremban',
                'schoolAddr' => 'SMK Seremban',
                'subjects' => 'Mathematics',
            ],
            [
                'name' => 'Alice Wonderland',
                'icNum' => '081030-07-5466',
                'age' => 14,
                'phoneNumber' => '+11 9870 9870',
                'email' => 'alice@email.com',
                'category' => 'Form 1-3',
                'parentName' => 'Ted Wonderland',
                'parentPhoneNum' => '+11 9876 9876',
                'homeAddr' => 'Ottawa',
                'schoolAddr' => 'SMK Ottawa',
                'subjects' => 'Mathematics',
            ],
            [
                'name' => 'Nurul Saliha',
                'icNum' => '090405-09-2168',
                'age' => 13,
                'phoneNumber' => '+11 4521 4521',
                'email' => 'nurul@email.com',
                'category' => 'Form 1-3',
                'parentName' => 'Ahmad Hamdan',
                'parentPhoneNum' => '+11 4526 4526',
                'homeAddr' => 'Kota Kinabalu',
                'schoolAddr' => 'SMK Kota Kinabalu',
                'subjects' => 'Mathematics',
            ],
            [
                'name' => 'Aisya Nazihah',
                'icNum' => '090227-04-1056',
                'age' => 13,
                'phoneNumber' => '+11 0921 0921',
                'email' => 'aisya@email.com',
                'category' => 'Form 1-3',
                'parentName' => 'Kalamullah',
                'parentPhoneNum' => '+11 0924 0924',
                'homeAddr' => 'Kangar',
                'schoolAddr' => 'SMK Kangar',
                'subjects' => 'Mathematics',
            ],
            [
                'name' => 'Nazir Lazim',
                'icNum' => '070331-06-2207',
                'age' => 15,
                'phoneNumber' => '+11 2009 2009',
                'email' => 'nazir@email.com',
                'category' => 'Form 1-3',
                'parentName' => 'Abdul Jalal',
                'parentPhoneNum' => '+11 2001 2001',
                'homeAddr' => 'Kemaman',
                'schoolAddr' => 'SMK Kemaman',
                'subjects' => 'Mathematics',                
            ],
            [
                'name' => 'Wang Han',
                'icNum' => '090122-10-1012',
                'age' => 13,
                'phoneNumber' => '+11 2788 2788',
                'email' => 'wang@email.com',
                'category' => 'Form 1-3',
                'parentName' => 'Zhang Han',
                'parentPhoneNum' => '+11 2787 2787',
                'homeAddr' => 'Shanghai',
                'schoolAddr' => 'SMK Shanghai',
                'subjects' => 'Mathematics',                
            ],
            [
                'name' => 'Prakesh Raj',
                'icNum' => '080902-14-2291',
                'age' => 14,
                'phoneNumber' => '+11 3332 3332',
                'email' => 'prakesh@email.com',
                'category' => 'Form 1-3',
                'parentName' => 'Kumaahran',
                'parentPhoneNum' => '+11 3337 3337',
                'homeAddr' => 'Shah Alam',
                'schoolAddr' => 'SMK Shah Alam',
                'subjects' => 'Mathematics',                
            ]
        ];

        return $registered_student;
    }

    /**
     * An instance method for finding all Standard 4-6 students.
     */
    public function findStudentStandard4_6() {
        $student_list = [
            [
                'name' => 'Nurnajiha Faizah',
                'icNum' => '101120-10-8212',
                'isPay' => true
            ],
            [
                'name' => 'Subramaniam Selvakumar',
                'icNum' => '110909-14-9977',
                'isPay' => true
            ],
            [
                'name' => 'Nor Izzah Ariffin',
                'icNum' => '120703-11-9878',
                'isPay' => false
            ],
            [
                'name' => 'Norelliana Rashidi',
                'icNum' => '120107-04-1224',
                'isPay' => true
            ],
            [
                'name' => 'Balakrishnan Pillay',
                'icNum' => '110405-02-5421',
                'isPay' => false
            ],
            [
                'name' => 'Ong Tee Yuan',
                'icNum' => '100331-09-4431',
                'isPay' => false
            ],
            [
                'name' => 'Wang Fei Hann',
                'icNum' => '100226-14-3396',
                'isPay' => true
            ],
            [
                'name' => 'Shamsul Apandi',
                'icNum' => '110929-10-1229',
                'isPay' => true
            ],
            [
                'name' => 'Julian Schmidt',
                'icNum' => '120603-10-0991',
                'isPay' => false
            ],
            [
                'name' => 'Steven Lim',
                'icNum' => '110730-14-7783',
                'isPay' => false
            ],
        ];

        return $student_list;
    }

    /**
     * An instance method for finding all Form 1-3 students.
     */
    public function findStudentForm1_3() {
        $student_list = [
            [
                'name' => 'Raihan Nazeer Akeem',
                'icNum' => '070429-04-5541',
                'isPay' => false
            ],
            [
                'name' => 'Diah Sharifah',
                'icNum' => '080331-09-2336',
                'isPay' => false
            ],
            [
                'name' => 'Santhi Malingam',
                'icNum' => '090930-07-9972',
                'isPay' => false
            ],
            [
                'name' => 'Kavitha Gidwani',
                'icNum' => '081010-10-1008',
                'isPay' => true
            ],
            [
                'name' => 'Zhu Yi Ling',
                'icNum' => '070422-01-0114',
                'isPay' => true
            ],
            [
                'name' => 'Teong Jun Wen',
                'icNum' => '090505-14-0997',
                'isPay' => true
            ],
            [
                'name' => 'Ryan Miller',
                'icNum' => '081208-08-1221',
                'isPay' => true
            ],
            [
                'name' => 'Sophia Williams',
                'icNum' => '080519-04-1229',
                'isPay' => true
            ],
            [
                'name' => 'Chou Tien Jin',
                'icNum' => '091112-11-0227',
                'isPay' => false
            ],
            [
                'name' => 'Tya Safina',
                'icNum' => '070806-10-7728',
                'isPay' => false
            ],
        ];

        return $student_list;
    }

    /**
     * An instance method for finding all Form 4-5 students.
     */
    public function findStudentForm4_5() {
        $student_list = [
            [
                'name' => 'Syakir Azraei',
                'icNum' => '050417-10-5291',
                'isPay' => true
            ],
            [
                'name' => 'Victoria Madisson',
                'icNum' => '050320-01-5138',
                'isPay' => false
            ],
            [
                'name' => 'Pranith Murthy',
                'icNum' => '060901-09-1887',
                'isPay' => false
            ],
            [
                'name' => 'Michael Wood',
                'icNum' => '050722-14-4413',
                'isPay' => false
            ],
            [
                'name' => 'Hu Shu Qi',
                'icNum' => '050529-01-2088',
                'isPay' => true
            ],
            [
                'name' => 'Jalil Ahmed Ali',
                'icNum' => '060921-06-0199',
                'isPay' => true
            ],
            [
                'name' => 'Kancana Sivasitham',
                'icNum' => '060102-10-7762',
                'isPay' => true
            ],
            [
                'name' => 'Liew Hui Shan',
                'icNum' => '061029-14-9953',
                'isPay' => false
            ],
            [
                'name' => 'Julia Green',
                'icNum' => '061212-10-1222',
                'isPay' => false
            ],
            [
                'name' => 'Khadeeja Irdeena',
                'icNum' => '050607-09-1011',
                'isPay' => true
            ],
        ];

        return $student_list;
    }

    public function findAllTeacher() {
        $teacherList = [
            [
                "name"=>"Mr. Ali",
                "subject"=>"Bahasa Melayu Standard 4-6, Bahasa Melayu Form 1-3"
                
            ],
            [
                "name"=>"Ms. Erin",
                "subject"=>"Bahasa Melayu Standard 4-6, Bahasa Melayu Form 1-3"
                
            ],
            [
                "name"=>"Mr. Nick",
                "subject"=>"English Standard 4-6, English Form 1-3"
                
            ],
            [
                "name"=>"Ms. Michelle",
                "subject"=>"English Standard 4-6, English Form 1-3"
                
            ],
            [
                "name"=>"Mr. Sathia",
                "subject"=>"Science Standard 4-6, Science Form 1-3"
                
            ],
            [
                "name"=>"Ms. Lim",
                "subject"=>"Mathematics Standard 4-6, Mathematics Form 1-3"
                
            ],
            [
                "name"=>"Mr. Alex",
                "subject"=>"Biology Form 4-5"
            ],
            [
                "name"=>"Mr. Chong",
                "subject"=>"Physics Form 4-5"
            ],
            [
                "name"=>"Ms. Devii",
                "subject"=>"Chemistry Form 4-5"
            ],
            [
                "name"=>"Ms. Syahira",
                "subject"=>"Accounting Principals 4-5, Add Maths Form 4-5"
            ],
            [
                "name"=>"Mr. Redzza",
                "subject"=>"Accounting Principals 4-5, Add Maths Form 4-5"
            ]

        ];
        return $teacherList;
    }

    // Actual controller

    public function registerList_approveNewStudent() {

    }

    public function registerList_showAllStudents() {

    }

    public function applyFeePayment() {
        
    }

    public function addNewStaff() {

    }

    public function generateTeacherSalaryPaySlip() {

    }

    public function adjustNewTimetable() {

    }

    public function checkTeacherAvailability() {

    }

    public function showAboutMe() {

    }

    public function changePassword() {

    }
}