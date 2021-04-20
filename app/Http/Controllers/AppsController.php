<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use DataTables;
use Storage;


class AppsController extends Controller
{
// invoice list App
  public function invoice_list()
  {
    $pageConfigs = ['pageHeader' => false];

    return view('/invoice/invoice-list', ['pageConfigs' => $pageConfigs]);
  }

// invoice preview App
  public function invoice_preview()
  {
    $pageConfigs = ['pageHeader' => false];

    return view('/invoice/invoice-preview', ['pageConfigs' => $pageConfigs]);
  }

// invoice edit App
  public function invoice_edit()
  {
    $pageConfigs = ['pageHeader' => false];

    return view('/invoice/invoice-edit', ['pageConfigs' => $pageConfigs]);
  }

// invoice edit App
  public function invoice_add()
  {
    $pageConfigs = ['pageHeader' => false];

    return view('/invoice/invoice-add', ['pageConfigs' => $pageConfigs]);
  }

// invoice print App
  public function invoice_print()
  {
    $pageConfigs = ['pageHeader' => false];

    return view('/invoice/invoice-print', ['pageConfigs' => $pageConfigs]);
  }

// User List Page
  public function user_list()
  {
    $pageConfigs = ['pageHeader' => false];
    return view('/user/user-list', ['pageConfigs' => $pageConfigs]);
  }

// User View Page
  public function user_view()
  {
    $pageConfigs = ['pageHeader' => false];
    return view('/user/user-view', ['pageConfigs' => $pageConfigs]);
  }

// User Edit Page
  public function user_edit()
  {
    $pageConfigs = ['pageHeader' => false];
    return view('/user/user-edit', ['pageConfigs' => $pageConfigs]);
  }

// Chat App
  public function chatApp()
  {
    $pageConfigs = [
      'pageHeader' => false,
      'contentLayout' => "content-left-sidebar",
      'pageClass' => 'chat-application',
    ];

    return view('/chat/chat', [
      'pageConfigs' => $pageConfigs
    ]);
  }

// Calender App
  public function calendarApp()
  {
    $pageConfigs = [
      'pageHeader' => false
    ];

    return view('/calendar/calendar', [
      'pageConfigs' => $pageConfigs
    ]);
  }

// Email App
  public function emailApp()
  {
    $pageConfigs = [
      'pageHeader' => false,
      'contentLayout' => "content-left-sidebar",
      'pageClass' => 'email-application',
    ];

    return view('/email/email', ['pageConfigs' => $pageConfigs]);
  }
// ToDo App
  public function todoApp()
  {
    $pageConfigs = [
      'pageHeader' => false,
      'contentLayout' => "content-left-sidebar",
      'pageClass' => 'todo-application',
    ];

    return view('/todo/todo', [
      'pageConfigs' => $pageConfigs
    ]);
  }

// Kanban App
  public function kanbanApp()
  {
    $pageConfigs = [
      'pageHeader' => false,
      'pageClass' => 'kanban-application',
    ];

    return view('/kanban/kanban', ['pageConfigs' => $pageConfigs]);
  }

// File manager App
      public function file_manager() {
        $pageConfigs = [
            'pageHeader' => false,
            'contentLayout' => "content-left-sidebar",
            'pageClass' => 'file-manager-application',
        ];

        return view('fileManager.file-manager', ['pageConfigs' => $pageConfigs]);
    }


// Ecommerce Shop
    public function ecommerce_shop() {
        $pageConfigs = [
            'contentLayout' => "content-detached-left-sidebar",
            'pageClass' => 'ecommerce-application',
        ];

        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "eCommerce"], ['name' => "Shop"]
        ];

        return view('ecommerce.shop', [
            'pageConfigs' => $pageConfigs,
            'breadcrumbs' => $breadcrumbs
        ]);
    }

// Ecommerce Details
    public function ecommerce_details() {
        $pageConfigs = [
            'pageClass' => 'ecommerce-application',
        ];

        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "eCommerce"], ['link' => "/ecommerce/shop", 'name' => "Shop"], ['name' => "Details"]
        ];

        return view('ecommerce.details', [
            'pageConfigs' => $pageConfigs,
            'breadcrumbs' => $breadcrumbs
        ]);
    }

// Ecommerce Wish List
    public function ecommerce_wishlist() {
        $pageConfigs = [
            'pageClass' => 'ecommerce-application',
        ];

        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "eCommerce"], ['name' => "Wish List"]
        ];

        return view('ecommerce.wishlist', [
            'pageConfigs' => $pageConfigs,
            'breadcrumbs' => $breadcrumbs
        ]);
    }

// Ecommerce Checkout
    public function ecommerce_checkout() {
        $pageConfigs = [
            'pageClass' => 'ecommerce-application',
        ];

        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "eCommerce"], ['name' => "Checkout"]
        ];

        return view('ecommerce.checkout', [
            'pageConfigs' => $pageConfigs,
            'breadcrumbs' => $breadcrumbs
        ]);
    }

 // FAQ
  public function faq() {
    $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Pages"], ['name' => "FAQ"]];

    return view('support.faq', ['breadcrumbs' => $breadcrumbs]);
}

// Knowledge Base
public function knowledge_base() {
    $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Pages"], ['name' => "Knowledge Base"]];

    return view('support.knowledge-base', ['breadcrumbs' => $breadcrumbs]);
}

// Knowledge Base Category
public function kb_category() {
    $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Pages"], ['link' => "/admin/support/knowledge-base", 'name' => "Knowledge Base"], ['name' => "Category"]];

    return view('support.kb-category', ['breadcrumbs' => $breadcrumbs]);
}

// Knowledge Base Question
public function kb_question() {
    $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Pages"], ['link' => "/page/knowledge-base", 'name' => "Knowledge Base"], ['link' => "/admin/support/kb-category", 'name' => "Category"], ['name' => "Question"]];

    return view('support.kb-question', ['breadcrumbs' => $breadcrumbs]);
}

    public function ajaxInvoice_list(Request $request){
        $path = storage_path('app/json/invoice-list1.json');
         return $content = json_decode(file_get_contents($path), true);
    }

    public function ajaxStaffInvoice_list(Request $request){
        $path = storage_path('app/json/invoice-list.json');
         return $content = json_decode(file_get_contents($path), true);
    }

}
