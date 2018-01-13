<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Student Class has 4 member variables. These 4
 * are the first name, last name, emails, and grades.
 *
 * @author JC
 */
class Student {
    //constructor
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    //adds email of student
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }

    //adds a grade of the student
    function add_grade($grade) {
       $this->grades[] = $grade;
    }
    
    //calculates the average of the grades of a student
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }
    
    //returns a string of student information
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
            $result .= $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}
