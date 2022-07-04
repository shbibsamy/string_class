<?php
    class StringClass {
        protected $string_input;
        protected $test_string;
        protected $string_output;

        public function setString($new_string) {
            return htmlspecialchars($this -> string_input = $new_string);
        }

        public function setTestString($new_test_string) {
            return htmlspecialchars($this -> test_string = $new_test_string);
        }

        public function getString() {
            $this -> string_output = $this -> string_input;
            return htmlspecialchars($this -> string_output);
        }

        public function indexOf() {
            return htmlspecialchars(strpos($this -> string_input, $this -> test_string));
        }

        public function toUppercase() {
            return htmlspecialchars(strtoupper($this -> string_input));
        }

    }
?>