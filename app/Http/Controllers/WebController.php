<?php
namespace App\Http\Controllers;

class WebController{
    public function index(){
        return view("welcome");
    }

    public function showAboutUs(){
        return view("about_us");
    }
    public function showServices(){
        return view("services");
    }
    public function showContact(){
        return view("contact");
    }
    public function showWhyChooseUs(){
        return view("why_choose_us");
    }
    public function showTestimonial(){
        return view("testimonial");
    }
    public function showTeams(){
        return view("teams");
    }
    public function showTermsCondition(){
        return view("terms_condition");
    }
    public function showPrivacyPolicy(){
        return view("privacy_policy");
    }
}