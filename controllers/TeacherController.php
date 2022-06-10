<?php

/**
 * A controller class for any processing data in teacher.php
 */
class TeacherController {
    /**
     * An instance method for finding all students 
     * based on the specific subject.
     */
    public function findStudents() {
        $student_list = [
            [
                'name' => 'Nurnajiha Faizah',
                'icNum' => '101120-10-8212'
            ],
            [
                'name' => 'Subramaniam Selvakumar',
                'icNum' => '110909-14-9977'
            ],
            [
                'name' => 'Nor Izzah Ariffin',
                'icNum' => '120703-11-9878'
            ],
            [
                'name' => 'Norelliana Rashidi',
                'icNum' => '120107-04-1224'
            ],
            [
                'name' => 'Balakrishnan Pillay',
                'icNum' => '110405-02-5421'
            ],
            [
                'name' => 'Ong Tee Yuan',
                'icNum' => '100331-09-4431'
            ],
            [
                'name' => 'Wang Fei Hann',
                'icNum' => '100226-14-3396'
            ],
            [
                'name' => 'Shamsul Apandi',
                'icNum' => '110929-10-1229'
            ],
            [
                'name' => 'Julian Schmidt',
                'icNum' => '120603-10-0991'
            ],
            [
                'name' => 'Steven Lim',
                'icNum' => '110730-14-7783'
            ],
        ];

        return $student_list;
    }

    /**
     * An instance method for finding all related students
     * in the database.
     */
    public function findAllStudent() {
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
}
