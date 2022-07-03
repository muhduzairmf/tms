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
                'name' => 'Nurnajiha Faizah',
                'icNum' => '101120-10-8212',
                'age' => 12,
                'phoneNumber' => '+11 1000 1000',
                'email' => 'najiha@email.com',
                'category' => 'Standard 4-6',
                'parentName' => 'Khairudin',
                'parentPhoneNum' => '+11 10001 10001',
                'homeAddr' => 'Taman Sri Raya, KL',
                'schoolAddr' => 'SK Taman Sri Raya',
                'subjects' => 'Bahasa Melayu, English, Mathematics, Science',
            ],
            [
                'name' => 'Subramaniam Selvakumar',
                'icNum' => '110909-14-9977',
                'age' => 11,
                'phoneNumber' => '+11 1010 1010',
                'email' => 'subra@email.com',
                'category' => 'Standard 4-6',
                'parentName' => 'Selvakumar Jayaseelan',
                'parentPhoneNum' => '+11 1011 1011',
                'homeAddr' => 'Batu 5, KL',
                'schoolAddr' => 'SK Batu 5',
                'subjects' => 'Bahasa Melayu, English, Mathematics, Science',
            ],
            [
                'name' => 'Nor Izzah',
                'icNum' => '120703-11-9878',
                'age' => 10,
                'phoneNumber' => '+11 1020 1020',
                'email' => 'izzah@email.com',
                'category' => 'Standard 4-6',
                'parentName' => 'Ariffin',
                'parentPhoneNum' => '+11 1021 1021',
                'homeAddr' => 'Sungai Jernih, KL',
                'schoolAddr' => 'SK Sungai Jernih',
                'subjects' => 'Bahasa Melayu, English, Mathematics, Science',
            ],
            [
                'name' => 'Norelliana',
                'icNum' => '120107-04-1224',
                'age' => 10,
                'phoneNumber' => '+11 1030 1030',
                'email' => 'elliana@email.com',
                'category' => 'Standard 4-6',
                'parentName' => 'Rashidi',
                'parentPhoneNum' => '+11 1031 1031',
                'homeAddr' => 'Taman Sri Jaya, KL',
                'schoolAddr' => 'SK Taman Sri Jaya',
                'subjects' => 'Bahasa Melayu, English, Mathematics, Science',
            ],
            [
                'name' => 'Balakrishnan Pillay',
                'icNum' => '110405-02-5421',
                'age' => 11,
                'phoneNumber' => '+11 1040 1040',
                'email' => '@email.com',
                'category' => 'Standard 4-6',
                'parentName' => 'Pillay Maniam',
                'parentPhoneNum' => '+11 1041 1041',
                'homeAddr' => 'Batu 11, KL',
                'schoolAddr' => 'SK Batu 11',
                'subjects' => 'Bahasa Melayu, English, Mathematics, Science',
            ],
            [
                'name' => 'Ong Tee Yuan',
                'icNum' => '100331-09-4431',
                'age' => 12,
                'phoneNumber' => '+11 1050 1050',
                'email' => 'teeyuan@email.com',
                'category' => 'Standard 4-6',
                'parentName' => 'Ong Yew Feng',
                'parentPhoneNum' => '+11 1051 1051',
                'homeAddr' => 'Sungai Keruh, KL',
                'schoolAddr' => 'SK Sungai Keruh',
                'subjects' => 'Bahasa Melayu, English, Mathematics, Science',
            ],
            [
                'name' => 'Wang Fei Hann',
                'icNum' => '100226-14-3396',
                'age' => 12,
                'phoneNumber' => '+11 1060 1060',
                'email' => 'feihann@email.com',
                'category' => 'Standard 4-6',
                'parentName' => 'Wang Zhe Lian',
                'parentPhoneNum' => '+11 1061 1061',
                'homeAddr' => 'Taman Sri Raya, KL',
                'schoolAddr' => 'SK Taman Sri Raya',
                'subjects' => 'Bahasa Melayu, English, Mathematics, Science',
            ],
            [
                'name' => 'Shamsul Apandi',
                'icNum' => '110929-10-1229',
                'age' => 11,
                'phoneNumber' => '+11 1070 1070',
                'email' => 'shamsul@email.com',
                'category' => 'Standard 4-6',
                'parentName' => 'Shamsul Jailani',
                'parentPhoneNum' => '+11 1071',
                'homeAddr' => 'Batu 5, KL',
                'schoolAddr' => 'SK Batu 5',
                'subjects' => 'Bahasa Melayu, English, Mathematics, Science',
            ],
            [
                'name' => 'Julian Schmidt',
                'icNum' => '120603-10-0991',
                'age' => 10,
                'phoneNumber' => '+11 1080 1080',
                'email' => 'julian@email.com',
                'category' => 'Standard 4-6',
                'parentName' => 'Robert Schmidt',
                'parentPhoneNum' => '+11 1081 1081',
                'homeAddr' => 'Sungai Jernih, KL',
                'schoolAddr' => 'SK Sungai Jernih',
                'subjects' => 'Bahasa Melayu, English, Mathematics, Science',
            ],
            [
                'name' => 'Steven Lim',
                'icNum' => '110730-14-7783',
                'age' => 11,
                'phoneNumber' => '+11 1090 1090',
                'email' => 'steven@email.com',
                'category' => 'Standard 4-6',
                'parentName' => 'Keith Lim',
                'parentPhoneNum' => '+11 1091 1091',
                'homeAddr' => 'Taman Sri Jaya, KL',
                'schoolAddr' => 'SK Taman Sri Jaya',
                'subjects' => 'Bahasa Melayu, English, Mathematics, Science',
            ],
            [
                'name' => 'Raihan Nazeer Akeem',
                'icNum' => '070429-04-5541',
                'age' => 15,
                'phoneNumber' => '+11 2000 2000',
                'email' => 'raihan@email.com',
                'category' => 'Form 1-3',
                'parentName' => 'Akmal Reezal',
                'parentPhoneNum' => '+11 2001 2001',
                'homeAddr' => 'Batu 11, KL',
                'schoolAddr' => 'SMK Batu 11',
                'subjects' => 'Bahasa Melayu, English, Mathematics, Science',
            ],
            [
                'name' => 'Diah Sharifah',
                'icNum' => '080331-09-2336',
                'age' => 14,
                'phoneNumber' => '+11 2010 2010',
                'email' => 'diah@email.com',
                'category' => 'Form 1-3',
                'parentName' => 'Dini Hazizi',
                'parentPhoneNum' => '+11 2011 2011',
                'homeAddr' => 'Sungai Keruh, KL',
                'schoolAddr' => 'SMK Sungai Keruh',
                'subjects' => 'Bahasa Melayu, English, Mathematics, Science',
            ],
            [
                'name' => 'Santhi Malingam',
                'icNum' => '090930-07-9972',
                'age' => 13,
                'phoneNumber' => '+11 2020 2020',
                'email' => 'santhi@email.com',
                'category' => 'Form 1-3',
                'parentName' => 'Malingam Gurusamy',
                'parentPhoneNum' => '+11 2021 2021',
                'homeAddr' => 'Taman Sri Raya, KL',
                'schoolAddr' => 'SMK Taman Sri Raya',
                'subjects' => 'Bahasa Melayu, English, Mathematics, Science',
            ],
            [
                'name' => 'Kavitha Gidwani',
                'icNum' => '081010-10-1008',
                'age' => 14,
                'phoneNumber' => '+11 2030 2030',
                'email' => 'kavitha@email.com',
                'category' => 'Form 1-3',
                'parentName' => 'Gidwani Jayakumaar',
                'parentPhoneNum' => '+11 2031 2031',
                'homeAddr' => 'Batu 5, KL',
                'schoolAddr' => 'SMK Batu 5',
                'subjects' => 'Bahasa Melayu, English, Mathematics, Science',
            ],
            [
                'name' => 'Zhu Yi Ling',
                'icNum' => '070422-01-0114',
                'age' => 15,
                'phoneNumber' => '+11 2040 2040',
                'email' => 'yiling@email.com',
                'category' => 'Form 1-3',
                'parentName' => 'Zhu Chen Yen',
                'parentPhoneNum' => '+11 2041 2041',
                'homeAddr' => 'Sungai Jernih, KL',
                'schoolAddr' => 'SMK Sungai Jernih',
                'subjects' => 'Bahasa Melayu, English, Mathematics, Science',
            ],
            [
                'name' => 'Teong Jun Wen',
                'icNum' => '090505-14-0997',
                'age' => 13,
                'phoneNumber' => '+11 2050 2050',
                'email' => 'junwen@email.com',
                'category' => 'Form 1-3',
                'parentName' => 'Teong Boon Hui',
                'parentPhoneNum' => '+11 2051 2051',
                'homeAddr' => 'Taman Sri Jaya, KL',
                'schoolAddr' => 'SMK Taman Sri Jaya',
                'subjects' => 'Bahasa Melayu, English, Mathematics, Science',
            ],
            [
                'name' => 'Ryan Miller',
                'icNum' => '081208-08-1221',
                'age' => 14,
                'phoneNumber' => '+11 2060 2060',
                'email' => 'ryan@email.com',
                'category' => 'Form 1-3',
                'parentName' => 'Frost Miller',
                'parentPhoneNum' => '+11 2061 2061',
                'homeAddr' => 'Batu 11, KL',
                'schoolAddr' => 'SMK Batu 11',
                'subjects' => 'Bahasa Melayu, English, Mathematics, Science',
            ],
            [
                'name' => 'Sophia Williams',
                'icNum' => '080519-04-1229',
                'age' => 14,
                'phoneNumber' => '+11 2070 2070',
                'email' => 'sophia@email.com',
                'category' => 'Form 1-3',
                'parentName' => 'Harvey Williams',
                'parentPhoneNum' => '+11 2071 2071',
                'homeAddr' => 'Sungai Keruh, KL',
                'schoolAddr' => 'SMK Sungai Keruh',
                'subjects' => 'Bahasa Melayu, English, Mathematics, Science',
            ],
            [
                'name' => 'Chou Tien Jin',
                'icNum' => '091112-11-0227',
                'age' => 13,
                'phoneNumber' => '+11 2080 2080',
                'email' => 'tienjin@email.com',
                'category' => 'Form 1-3',
                'parentName' => 'Chou Kien Kaat',
                'parentPhoneNum' => '+11 ',
                'homeAddr' => 'Taman Sri Raya, KL',
                'schoolAddr' => 'SMK Taman Sri Raya',
                'subjects' => 'Bahasa Melayu, English, Mathematics, Science',
            ],
            [
                'name' => 'Tya Safina',
                'icNum' => '070806-10-7728',
                'age' => 15,
                'phoneNumber' => '+11 2090 2090',
                'email' => 'tya@email.com',
                'category' => 'Form 1-3',
                'parentName' => 'Fazli Ibrahim',
                'parentPhoneNum' => '+11 2091 2091',
                'homeAddr' => 'Batu 5, KL',
                'schoolAddr' => 'SMK Batu 5',
                'subjects' => 'Bahasa Melayu, English, Mathematics, Science',
            ],
            [
                'name' => 'Syakir Azraei',
                'icNum' => '050417-10-5291',
                'age' => 17,
                'phoneNumber' => '+11 3000 3000',
                'email' => 'syakir@email.com',
                'category' => 'Form 4-5',
                'parentName' => 'Afie Azraei',
                'parentPhoneNum' => '+11 3001 3001',
                'homeAddr' => 'Sungai Jernih, KL',
                'schoolAddr' => 'SMK Sungai Jernih',
                'subjects' => 'Biology, Chemistry, Physics, Additional Mathematics, Accounting Principal',
            ],
            [
                'name' => 'Victoria Madisson',
                'icNum' => '050320-01-5138',
                'age' => 17,
                'phoneNumber' => '+11 3010 3010',
                'email' => 'victoria@email.com',
                'category' => 'Form 4-5',
                'parentName' => 'Yuri Madisson',
                'parentPhoneNum' => '+11 3011 3011',
                'homeAddr' => 'Taman Sri Jaya, KL',
                'schoolAddr' => 'SMK Taman Sri Jaya',
                'subjects' => 'Biology, Chemistry, Physics, Additional Mathematics, Accounting Principal',
            ],
            [
                'name' => 'Pranith Murthy',
                'icNum' => '060901-09-1887',
                'age' => 16,
                'phoneNumber' => '+11 3020 3020',
                'email' => 'pranith@email.com',
                'category' => 'Form 4-5',
                'parentName' => 'Murthy Paarvindran',
                'parentPhoneNum' => '+11 3021 3021',
                'homeAddr' => 'Batu 11, KL',
                'schoolAddr' => 'SMK Batu 11',
                'subjects' => 'Biology, Chemistry, Physics, Additional Mathematics, Accounting Principal',
            ],
            [
                'name' => 'Michael Wood',
                'icNum' => '050722-14-4413',
                'age' => 17,
                'phoneNumber' => '+11 3030 3030',
                'email' => 'michael@email.com',
                'category' => 'Form 4-5',
                'parentName' => 'Chris Wood',
                'parentPhoneNum' => '+11 3031 3031',
                'homeAddr' => 'Sungai Keruh, KL',
                'schoolAddr' => 'SMK Sungai Keruh',
                'subjects' => 'Biology, Chemistry, Physics, Additional Mathematics, Accounting Principal',
            ],
            [
                'name' => 'Hu Shu Qi',
                'icNum' => '050529-01-2088',
                'age' => 17,
                'phoneNumber' => '+11 3040 3040',
                'email' => 'shuqi@email.com',
                'category' => 'Form 4-5',
                'parentName' => 'Hu Jeng Wen',
                'parentPhoneNum' => '+11 3041 3041',
                'homeAddr' => 'Taman Sri Raya, KL',
                'schoolAddr' => 'SMK Taman Sri Raya',
                'subjects' => 'Biology, Chemistry, Physics, Additional Mathematics, Accounting Principal',
            ],
            [
                'name' => 'Jalil Ahmed Ali',
                'icNum' => '060921-06-0199',
                'age' => 16,
                'phoneNumber' => '+11 3050 3050',
                'email' => 'jalil@email.com',
                'category' => 'Form 4-5',
                'parentName' => 'Abdulla Kalam',
                'parentPhoneNum' => '+11 3051 3051',
                'homeAddr' => 'Batu 5, KL',
                'schoolAddr' => 'SMK Batu 5',
                'subjects' => 'Biology, Chemistry, Physics, Additional Mathematics, Accounting Principal',
            ],
            [
                'name' => 'Kancana Sivasitham',
                'icNum' => '060102-10-7762',
                'age' => 16,
                'phoneNumber' => '+11 3060 3060',
                'email' => 'kancana@email.com',
                'category' => 'Form 4-5',
                'parentName' => 'Sivasingam Murugam',
                'parentPhoneNum' => '+11 3061 3061',
                'homeAddr' => 'Sungai Jernih, KL',
                'schoolAddr' => 'SMK Sungai Jernih',
                'subjects' => 'Biology, Chemistry, Physics, Additional Mathematics, Accounting Principal',
            ],
            [
                'name' => 'Liew Hui Shan',
                'icNum' => '061029-14-9953',
                'age' => 16,
                'phoneNumber' => '+11 3070 3070',
                'email' => 'huishan@email.com',
                'category' => 'Form 4-5',
                'parentName' => 'Liew Choong Fei',
                'parentPhoneNum' => '+11 3071 3071',
                'homeAddr' => 'Taman Sri Jaya, KL',
                'schoolAddr' => 'SMK Taman Sri Jaya',
                'subjects' => 'Biology, Chemistry, Physics, Additional Mathematics, Accounting Principal',
            ],
            [
                'name' => 'Julia Green',
                'icNum' => '061212-10-1222',
                'age' => 16,
                'phoneNumber' => '+11 3080 3080',
                'email' => 'julia@email.com',
                'category' => 'Form 4-5',
                'parentName' => 'Ronald Green',
                'parentPhoneNum' => '+11 3081 3081',
                'homeAddr' => 'Batu 11, KL',
                'schoolAddr' => 'SMK Batu 11',
                'subjects' => 'Biology, Chemistry, Physics, Additional Mathematics, Accounting Principal',
            ],
            [
                'name' => 'Khadeeja Irdeena',
                'icNum' => '050607-09-1011',
                'age' => 17,
                'phoneNumber' => '+11 3090 3090',
                'email' => 'khadeeja@email.com',
                'category' => 'Form 4-5',
                'parentName' => 'Abdul Samad',
                'parentPhoneNum' => '+11 3091 3091',
                'homeAddr' => 'Sungai Keruh, KL',
                'schoolAddr' => 'SMK Sungai Keruh',
                'subjects' => 'Biology, Chemistry, Physics, Additional Mathematics, Accounting Principal',
            ],
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