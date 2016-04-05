<?php
/**
 * Created by PhpStorm.
 * User: arktheshadow
 * Date: 5/4/16
 * Time: 11:01 AM
 */
class SRGController extends BaseController
{
    public function index()
    {
        return View::make('srg.index');
    }
    public function team()
    {
        return View::make('srg.team');
    }
    public function about()
    {
        return View::make('srg.controlsrg');
    }
    public function upevents()
    {
        return View::make('srg.controlevents');
    }
    public function teamstruct()
    {
        return View::make('srg.controlteam');
    }
}