<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function home() {
    return view('home');
}

   public function about() {
    return view('about');
}

public function contact() {
    return view('contact');
}

public function thankyou() {
    return view('thankyou');
}

// Services - Business Solutions
public function businessSolution() {
    return view('services.business-solution');
}

public function flutter() {
    return view('services.Business Solutions.flutter');
}

public function mobileApp() {
    return view('services.Business Solutions.mobile-app');
}

public function mobileAppdubai() {
    return view('services.Business Solutions.mobile-app-dubai');
}

public function mobileAppuae() {
    return view('services.Business Solutions.mobile-app-uae');
}

public function mobileApptamilnadu() {
    return view('services.Business Solutions.mobile-app-tamilnadu');
}

public function mobileAppcoimbatore() {
    return view('services.Business Solutions.mobile-app-coimbatore');
}

public function mobileAppsalem() {
    return view('services.Business Solutions.mobile-app-salem');
}

public function mobileApperode() {
    return view('services.Business Solutions.mobile-app-erode');
}

public function mobileAppChennai() {
    return view('services.Business Solutions.mobile-app-chennai');
}

public function justBuildIt() {
    return view('services.just-build-it');
}

public function consulting() {
    return view('services.Business Solutions.consulting');
}

public function software() {
    return view('services.Business Solutions.software');
}

public function support() {
    return view('services.Business Solutions.support');
}

// Services - Engineering
public function engineering() {
    return view('services.engineering');
}

public function cloudService() {
    return view('services.Engineering.cloud-service');
}

public function ai() {
    return view('services.Engineering.AI');
}

public function products() {
    return view('services.Engineering.products');
}

public function dataScience() {
    return view('services.Engineering.data-science');
}

// Services - Digital Programming & Marketing
public function digitalProgramming() {
    return view('services.digital-programing');
}

public function uiux() {
    return view('services.Digital-Marketing.ui-ux');
}

public function seoSem() {
    return view('services.Digital-Marketing.seo-sem');
}

public function googleServices() {
    return view('services.Digital-Marketing.google-services');
}

public function webDevelopment() {
    return view('services.Digital-Marketing.web-development');
}

// Tech School
public function fullStack() {
    return view('tech-school.full-stock');
}

public function digitalMarketing() {
    return view('tech-school.digital-marketing');
}

public function aiCourse() {
    return view('tech-school.AI-course');
}

public function salesforceAdmin() {
    return view('tech-school.salesforce-admin');
}

public function salesforceBa() {
    return view('tech-school.salesforce-ba');
}

public function powerBI() {
    return view('tech-school.power-BI');
}

public function techSchool() {
    return view('tech-school.tech-school');
}

// Other Pages
public function privacyPolicy() {
    return view('privacy-policy');
}

public function termsConditions() {
    return view('terms&conditions');
}

public function techAI() {
    return view('tech-ai');
}

public function services() {
    return view('services.services');
}

public function zohoBooks() {
    return view('zoho-books');
}
 public function scriberry()
    {
        return view('products.scriberry');
    }
    public function fluttercanada()
    {
        return view('services.Business Solutions.flutter-canada');
    }
    public function copyrights()
    {
        return view('copy-rights');
    }

}
