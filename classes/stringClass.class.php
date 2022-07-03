<?php
    class StringClass {
    protected $string_input;
    protected $test_string;
    protected $string_output;

    public function setString($new_string) {
        return $this -> string_input = $new_string;
    }

    public function setTestString($new_test_string) {
        return $this -> test_string = $new_test_string;
    }

    public function getString() {
        $this -> string_output = $this -> string_input . '... and the test string is: ' .$this -> test_string;
        return $this -> string_output;
    }

    public function indexOf() {
        return strpos($this -> string_input, $this -> test_string);
    }


    }
?>