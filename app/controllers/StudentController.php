<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function index()
    {
        $data['title'] = 'Student Home';
        $this->call->view('student_home', $data);
    }

    public function profile()
    {
        $student = [
            'student_id' => 'MCC2024-00060',
            'name'       => 'Kim Deniel Gavilan',
            'course'     => 'BS Information Technology',
            'year'       => '3rd Year',
            'section'    => '3-F2',
            'email'      => 'gavilan.kimg@minsu.edu.ph'
        ];

        $this->call->view('student_profile', $student);
    }

    public function login()
    {
        $this->call->view('student_login');
    }

    public function authenticate()
    {
        session_start();

        $correct_password = 'gavilan123'; // change this to whatever you like

        if (isset($_POST['password']) && $_POST['password'] === $correct_password) {
            $_SESSION['student_access'] = true;
            redirect('student/profile');
        } else {
            $data['error'] = 'Incorrect password. Please try again.';
            $this->call->view('student_login', $data);
        }
    }
}