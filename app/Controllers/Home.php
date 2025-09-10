<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home - Learning Management System',
            'page_title' => 'Welcome to LMS',
            'features' => [
                [
                    'icon' => 'bi-book-fill',
                    'title' => 'Interactive Courses',
                    'description' => 'Access a wide range of courses designed by expert instructors.'
                ],
                [
                    'icon' => 'bi-people-fill',
                    'title' => 'Expert Instructors',
                    'description' => 'Learn from experienced professionals in various fields.'
                ],
                [
                    'icon' => 'bi-graph-up',
                    'title' => 'Track Progress',
                    'description' => 'Monitor your learning progress with detailed analytics.'
                ],
                [
                    'icon' => 'bi-award-fill',
                    'title' => 'Certificates',
                    'description' => 'Earn certificates upon successful completion of courses.'
                ]
            ]
        ];
        
        return view('home', $data);
    }
}
