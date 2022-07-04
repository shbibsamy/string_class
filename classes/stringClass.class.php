<?php
    class StringClass {
        private $input;
        private $input_test;
        private $string_output;

        public function __construct($new_input, $new_input_test)
        {
            $this -> input = $new_input;
            $this -> input_test = $new_input_test;
        }

        public function getString() {
            $this -> string_output = $this -> input;
            return $this -> string_output;
        }

        public function indexOf() {
            if (gettype(strpos($this -> input, $this -> input_test)) == 'integer') {
                return strpos($this -> input, $this -> input_test);
            } else {
                return 'false';
            }
        }

        public function trim() {
            return trim($this -> input);
        }

        public function toUppercase() {
            return strtoupper($this -> input);
        }
        
        public function includes() {
            $result = str_contains($this -> input, $this -> input_test);
            if ($result == 1) {
                return 'true';
            } else {
                return 'false';
            }
        }

        public function substring() {
            if (($this -> includes() == 'true') && ($this -> indexOf() != 'false')) {
                $indexOfTestString = $this -> indexOf();
                $newStringLength = $indexOfTestString - strlen($this -> input);
                // return $indexOfTestString = $this -> indexOf();
                return substr($this -> input, $newStringLength);
            } else {
                return $this -> input. ' does not contain your test string or is not a string.';
            }
        }

    }
?>