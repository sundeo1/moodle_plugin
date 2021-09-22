<?php

class local_test_observer
{
	public static function user_created(\core\event\user_created $event)
    {
        $event_data = $event->get_data();
        var_dump($event_data);
        die();
    }
	
	public static function user_deleted(\core\event\user_deleted $event)
    {
        $event_data = $event->get_data();
        var_dump($event_data);
        die();
    }
	
	public static function chapter_created(\mod_book\event\chapter_created $event)
    {
        $event_data = $event->get_data();
        var_dump($event_data);
        die();
    }
	
	public static function chapter_deleted(\mod_book\event\chapter_deleted $event)
    {
        $event_data = $event->get_data();
        var_dump($event_data);
        die();
    }
	
	public static function course_created(\core\event\course_created $event)
    {
        $event_data = $event->get_data();
        var_dump($event_data);
        die();
    }
	
	public static function course_deleted(\core\event\course_deleted $event)
    {
        $event_data = $event->get_data();
        var_dump($event_data);
        die();
    }
	
}