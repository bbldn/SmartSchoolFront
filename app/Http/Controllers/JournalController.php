<?php

namespace App\Http\Controllers;

class JournalController extends Controller
{
    public function showCurrentWeekAction()
    {
        return view('journal.current_week');
    }

    public function showScheduleAction()
    {
        return view('journal.schedule');
    }

    public function showStatisticsAction()
    {
        return view('journal.statistics');
    }

    public function showNotesAction()
    {
        return view('journal.notes');
    }
}
