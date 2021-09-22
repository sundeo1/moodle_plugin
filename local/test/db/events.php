<?php


defined('MOODLE_INTERNAL') || die();

    $observers = array(
		array(
            'eventname' => '\core\event\user_created',
            'callback' => 'local_test_observer::user_created',
        ),
		array(
            'eventname' => '\core\event\user_deleted',
            'callback' => 'local_test_observer::user_deleted',
        ),
		array(
            'eventname' => '\mod_book\event\chapter_created',
            'callback' => 'local_test_observer::chapter_created',
        ),
		array(
            'eventname' => '\mod_book\event\chapter_deleted',
            'callback' => 'local_test_observer::chapter_deleted',
        ),
		array(
            'eventname' => '\core\event\course_created',
            'callback' => 'local_test_observer::course_created',
        ),
		array(
            'eventname' => '\core\event\course_deleted',
            'callback' => 'local_test_observer::course_deleted',
        ),
    );