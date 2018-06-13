<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function showIndex(){
        return view('admin-panel.index');
    }
    public function showIndexSecond(){
        return view('admin-panel.index2');
    }



    public function showSimpleTable(){
        return view('admin-panel.tables.simple');
    }
    public function showTable(){
        return view('admin-panel.tables.data');
    }



    public function showChart1(){
        return view('admin-panel.charts.chartjs');
    }
public function showChart2(){
    return view('admin-panel.charts.flot');
}
public function showChart3(){
    return view('admin-panel.charts.inline');
}
public function showChart4(){
    return view('admin-panel.charts.morris');
}



public function showFormAdvanced(){
    return view('admin-panel.forms.advanced');
}
    public function showFormEditors(){
        return view('admin-panel.forms.editors');
    }
    public function showFormGeneral(){
        return view('admin-panel.forms.general');
    }



    public function showLayoutBoxed(){
        return view('admin-panel.layout.boxed');
    }
    public function showLayoutCollapsed(){
        return view('admin-panel.layout.collapsed-sidebar');
    }
    public function showLayoutFixed(){
        return view('admin-panel.layout.fixed');
    }
    public function showLayoutTopNav(){
        return view('admin-panel.layout.top-nav');
    }



    public function showMailboxCompose(){
        return view('admin-panel.mailbox.compose');
    }
    public function showMailboxMailbox(){
        return view('admin-panel.mailbox.mailbox');
    }
    public function showMailboxReadMail(){
        return view('admin-panel.mailbox.read-mail');
    }



    public function showExamples404(){
        return view('admin-panel.examples.404');
    }
    public function showExamples500(){
        return view('admin-panel.examples.500');
    }
    public function showExamplesBlank(){
        return view('admin-panel.examples.blank');
    }
    public function showExamplesInvoice(){
        return view('admin-panel.examples.invoice');
    }
    public function showExamplesInvoicePrint(){
        return view('admin-panel.examples.invoice-print');
    }
    public function showExamplesLockscreen(){
        return view('admin-panel.examples.lockscreen');
    }
    public function showExamplesLogin(){
        return view('admin-panel.examples.login');
    }
    public function showExamplesPace(){
        return view('admin-panel.examples.pace');
    }
    public function showExamplesProfile(){
        return view('admin-panel.examples.profile');
    }
    public function showExamplesRegister(){
        return view('admin-panel.examples.register');
    }



    public function showUiButtons(){
        return view('admin-panel.UI.buttons');
    }
    public function showUiGeneral(){
        return view('admin-panel.UI.general');
    }
    public function showUiIcons(){
        return view('admin-panel.UI.icons');
    }
    public function showUiModals(){
        return view('admin-panel.UI.modals');
    }
    public function showUiSliders(){
        return view('admin-panel.UI.sliders');
    }
    public function showUiTimeline(){
        return view('admin-panel.UI.timeline');
    }



    public function showWidgets(){
        return view('admin-panel.widgets');
    }
    public function showCalendar(){
        return view('admin-panel.calendar');
    }
}
