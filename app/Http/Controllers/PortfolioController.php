<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    //
     public function index()
    {
        // Example project data (you can load from DB later)
        $projects = [
            [
                'title' => 'Flight Reservation System',
                'description' => 'A Laravel-based system for booking and managing airline tickets.',
                'link' => '#',
            ],
            [
                'title' => 'FDA Drug Submission Portal',
                'description' => 'A web app for submitting and reviewing pharmaceutical documents securely.',
                'link' => '#',
            ],
            [
                'title' => 'Library Management System',
                'description' => 'A project to manage book records and members efficiently.',
                'link' => '#',
            ],
        ];

        return view('welcome', compact('projects'));
    }
}
